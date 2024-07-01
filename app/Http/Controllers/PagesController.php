<?php

namespace App\Http\Controllers;
use App\Models\pagesModel;

 // Đảm bảo import lớp PagesModels từ đúng namespace

class PagesController extends Controller
{
    private $page;
    private $pagesModels;
    public function __construct() {

        $this->pagesModels=new pagesModel;
    }
    public function __setPage($page){
        $this->page=$page;
        $this->pagesModels->__setPageside($this->page);
    }
    public function __getPage()
    {
        return $this->pagesModels->__getSideContent();
    }
}

