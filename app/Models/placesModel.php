<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class placesModel extends Model
{
    use HasFactory;
    protected $table = 'place';
    public function __construct(){

    }
    public function __getPlace($id){
        return DB::table($this->table)
        ->select('name')
        ->where('Pid', $id)
        ->value('name');
    }
}
