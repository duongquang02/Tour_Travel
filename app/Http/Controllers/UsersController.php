<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    //
    public function signin(Request $request) {

        $email = $request->input('email');
        $password = $request->input('password');
        $user = DB::table('Users')->select('Password')->where('Email', $email)->first();
        // dd($user && Hash::check($password, $user->Password));
        // dd(Auth::attempt(['Email' => $email, 'Password' => $password]),session()->all());
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            // Đăng nhập thành công
            return redirect()->route('list_tour');
        } else {
            return back()->with('error', 'Invalid Details');
        }
    }


    public function update(Request $request){
    $name = $request->input('name');
    $mobileno = $request->input('mobileno');
    $user = Auth::user();
    // Gọi hàm cập nhật thông tin cá nhân trong model User
    $updatedUser = $user->updateProfile($request);

    if ($updatedUser) {
        return redirect()->route('profile')->with('success', 'Thông tin cá nhân đã được cập nhật thành công.');
    } else {
        return back()->with('error', 'Cập nhật thông tin cá nhân thất bại.');
    }
}


public function changePassword(Request $request)
{
    $user = auth()->user(); // Lấy người dùng đã đăng nhập

    // Kiểm tra xem new_password và confirm_password có giống nhau không
    if ($request->input('new_password') !== $request->input('confirm_password')) {
        return redirect()->route('change_password')->with('error', 'Mật khẩu mới và xác nhận mật khẩu không giống nhau.');
    }
    // Thực hiện thay đổi mật khẩu bằng hàm changePassword trong model User
    $success = $user->changePassword($request->input('current_password'), $request->input('new_password'));

    if ($success) {
        return redirect()->route('profile')->with('success', 'Mật khẩu đã được thay đổi thành công.');
    } else {
        return redirect()->route('change_password')->with('error', 'Thay đổi mật khẩu không thành công.');
    }
}


    public function signUp(Request $request){
        // dd($request);
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone_number = $request->input('mobilenumber');
        $address = $request->input('address');
        $users = new \App\Models\User();
        // Thực hiện thao tác chèn dữ liệu vào cơ sở dữ liệu
        $user=$users->CreatAccount($name, $email, $password, $phone_number, $address);
        // dd($user);
        // Kiểm tra xem dữ liệu đã được chèn thành công hay không
        // dd($user);
        if ($user!=null) {
            auth()->login($user);
            Session::flash('message', 'You are successfully registered. Now you can login');
            return redirect()->route('thanks')->with('success', 'Đã Sigup thành công');; // Điều hướng đến trang cảm ơn
        } else {
            // Xử lý trường hợp lỗi
            return back()->with('error', 'Registration failed');
        }
    }

    public function issueTickets()
    {
        // Truy vấn cơ sở dữ liệu để lấy danh sách các vấn đề
        $Uid = auth()->id(); // Lấy email của người dùng đã đăng nhập
        $issues = DB::table('issue_tickets')->where('Uid', $Uid)->get();
        // Trả về view và truyền danh sách các vấn đề
        return view('ticket.issue_tickets', ['issues' => $issues]);
    }

    public function __getHistory(){
        $booking=new \App\Models\bookingModel();
        return $booking->__getBooking(auth()->id());
    }

    public function __booking($Tid,Request $request){ // Thay thế bằng Tid thích hợp
        $uid = auth()->id(); // Lấy Uid của người dùng đã đăng nhập
        $bookingM=new \App\Models\bookingModel();
        $booking=$bookingM->createBooking($Tid, $uid,$request);
        if ($booking) {
            return back()->with('success', 'Thành công.');
        } else {
            // Xử lý lỗi nếu có
            return back()->with('error', 'Lỗi');
        }

    }

    public function logout()
    {
        Auth::logout(); // Đăng xuất người dùng
        return redirect()->route('/'); // Chuyển hướng sau khi đăng xuất
    }
}


