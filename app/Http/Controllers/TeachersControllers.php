<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;

class TeachersControllers extends Controller
{
    public function index(){
        $data = "Teacher1, teacher2";
        return view('dance_teachers', ['data'=>$data]);
    }
}
