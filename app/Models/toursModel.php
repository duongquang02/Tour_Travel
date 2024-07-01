<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class toursModel extends Model
{
    use HasFactory;
    protected $__listProduct;
    protected $table='tours';
    public function __construct(){

    }
    public function __getTourById($Tid){
        return DB::table($this->table)->where("TId",$Tid)->get();
    }
    public function __getListTours($limit){
        if($limit=='*'){
            $this->__listProduct=DB::table($this->table)->inRandomOrder()->get();
        }else{
            $this->__listProduct=DB::table($this->table)->inRandomOrder()->limit($limit)->get();
        }

        return $this->__listProduct;
    }


    public function __booking($Tid,$Uid){

    }

}
