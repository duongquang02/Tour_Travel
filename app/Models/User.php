<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'Uid';

    protected $fillable = [
        'Name',
        'Email',
        'Password',
        'Phone_number',
        'Address'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'Password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }

    public function CreatAccount($name, $email, $password, $phone_number, $address){
        // Kiểm tra xem email đã tồn tại trong cơ sở dữ liệu hay chưa
        $existingUser = User::where('Email', $email)->first();

        if (!$existingUser) {
            // Nếu email chưa tồn tại, thì thực hiện thêm người dùng
            $hashedPassword = Hash::make($password);

            $user = new User([
                'Name' => $name,
                'Email' => $email,
                'Password' => $hashedPassword,
                'Phone_number' => $phone_number,
                'Address' => $address,
            ]);
            $user->save();

            return $user;
        } else {
            // Nếu email đã tồn tại, trả về một giá trị để chỉ ra rằng thêm người dùng thất bại
            return null;
        }
    }


    public function updateProfile(Request $request)
{
    // Lấy các giá trị từ request
    $name = $request->input('name');
    $mobileno = $request->input('mobileno');

    // Cập nhật thông tin cá nhân của người dùng
    $this->Name = $name;
    $this->Phone_number = $mobileno;

    // Lưu lại thông tin cập nhật vào cơ sở dữ liệu
    $this->save();

    return $this; // Trả về đối tượng User sau khi đã cập nhật thông tin
}

    public function __signIn($email, $password){
        $user = $this->where('Email', $email)->first();

        if ($user && Hash::check($password, $user->Password)) {
            return $user;
        }

        // Đăng nhập thất bại, thêm thông báo lỗi vào session
        session()->flash('error', 'Invalid email or password');
        return null;
    }

    public function changePassword($currentPassword, $newPassword)
    {
        // Kiểm tra mật khẩu hiện tại của người dùng
        if (Hash::check($currentPassword, $this->Password)) {
            // Mật khẩu hiện tại đúng, cập nhật mật khẩu mới
            $this->Password = Hash::make($newPassword);
            $this->save();
            return true; // Thay đổi mật khẩu thành công
        }

        return false; // Mật khẩu hiện tại không đúng
    }



}
