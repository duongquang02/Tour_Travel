<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\toursModel;
use App\Models\placesModel;
class HomeController extends Controller
{
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
