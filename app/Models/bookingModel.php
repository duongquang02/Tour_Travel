<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BookingModel extends Model
{
    protected $table = 'booking'; // Tên bảng trong cơ sở dữ liệu

    // Tạo một hàm để thêm dữ liệu booking
    public static function createBooking($tid, $uid, Request $request)
    {
        $booking = new BookingModel();
        $booking->Tid = $tid;
        $booking->Uid = $uid;
        // $booking->comment = $request->input('comment');

        // Các trường khác của booking (nếu cần)

        $booking->save(); // Lưu dữ liệu vào cơ sở dữ liệu

        return $booking; // Trả về đối tượng booking đã tạo
    }

    public function __getBooking($Uid)
    {
        return DB::table('booking')
            ->join('tours', 'booking.Tid', '=', 'tours.Tid')
            ->select('booking.*', 'tours.*')
            ->where('booking.Uid', $Uid)
            ->get();
    }
}
