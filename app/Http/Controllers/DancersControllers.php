<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;

class DancersControllers extends Controller
{
    public function index(){
        $data = "Susan Sawyer";
        return view('dancers', ['data'=>$data]);
    }
}
