<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pagesModel extends Model
{
    use HasFactory;
    private $pageside;
    public function __construct(){
    }
    public function __setPageside($side){
        $this->pageside=$side;
    }
    public function __getSideContent(){
 // Giá mong muốn
    $content =  DB::table('pages')
    ->select('name', 'detail')
    ->where('name', $this->pageside)
    ->first();
        return $content;
    }
}
