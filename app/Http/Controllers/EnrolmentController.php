<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\invoice;

class EnrolmentController extends Controller
{
    public function index(){
        $data = "Susan by Teacher1";
        return view('dance_enrolment', ['data'=>$data]);
    }
}
