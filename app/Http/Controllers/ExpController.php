<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;

class ExpController extends Controller
{
    public function index(){
        $data = "Beginner, medium, advanced";
        return view('dance_experience', ['data'=>$data]);
    }
}
