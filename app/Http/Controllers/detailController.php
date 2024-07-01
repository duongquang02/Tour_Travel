<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class detailController extends Controller
{
    private $foundItem;
    private $placeName;
    public function __construct(){
        // dd($this->result);
    }
    //
    private function __getDetail($Tid){
        $toursModel=new \App\Models\toursModel();
        $this->foundItem=$toursModel->__getTourById($Tid);
        // dd($this->foundItem);
        $placesModel=new \App\Models\placesModel();
        $this->placeName= $placesModel->__getPlace($this->foundItem[0]->Pid);
    }

    public function __getTour($Tid){
        $this->__getDetail($Tid);
        return [
            'tour'=>$this->foundItem,
            'placeName'=>$this->placeName
        ];
    }


}
