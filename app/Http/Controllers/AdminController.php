<?php

namespace App\Http\Controllers;

use App\Models\bookingModel;
use App\Models\placesModel;
use App\Models\toursModel;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    //
    public function login()
    {
        return view('admin.login');
    }



    public function dashboard()
    {
        $bookingCount = bookingModel::count();
        $packageCount = toursModel::count();
        $issueCount=DB::table('issue_tickets')->count();
        return view('admin.dashboard', compact('bookingCount','packageCount', 'issueCount'));
    }
    public function postLogin(Request $request)
{
    $credentials = $request->only('name', 'password');
    // dd($credentials);
    if (Auth::guard('admin')->attempt($credentials)) {

        return redirect()->route('admin.dashboard')->with('success', 'success');
    } else {
        return back()->with('error', 'Invalid Details');
    }
}

public function create_tours()
    {
        return view('admin.tours_created');
    }

    public function store(Request $request)
    {

        DB::table('tours')->insert([
            'name' => $request->packagename,
            'type' => $request->packagetype,
            'Pid' => $request->packagelocation,
            'price' => $request->packageprice,
            'detail' => $request->packagedetails,
            'date_start'=> $request->date_start,
            'date_end'=> $request->date_end,
            'total_member'=> $request->total_member,
            'tour_image' => base64_encode($request->packageimage),
        ]);

        return redirect('admin.dashboard')->with('success', 'Package Created Successfully');
    }

    public function _getListTours($limit)
    {
        $toursModel=new toursModel();
        $tours=$toursModel->__getListTours($limit);
        $placesModel=new placesModel();
        $tours = DB::table('tours')->inRandomOrder()->limit($limit)->get();
        $placeNames = [];
        $index=0;
        foreach ($tours as $tour) {
            // Thêm placeName vào mảng $placeNames
            $placeNames[$index] = $placesModel->__getPlace($tour->Pid);
            $index++;
        }
        return [
            'tours' => $tours,
            'placeNames' => $placeNames,
            'count'=>$index
        ];
    }

}
