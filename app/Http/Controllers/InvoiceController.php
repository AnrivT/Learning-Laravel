<?php

namespace App\Http\Controllers;
use App\Models\invoice;
//use Illuminate\Database\Migema\Blueprint;
//use Illuminate\Support\Facades\Schema;
//use Illuminate\Http\Request;rations\Migration;
//use Illuminate\Database\Sch

class InvoiceController extends Controller
{
    public function index(){
        $data = invoice::all();
        return view('invoices', ['data'=>$data]);
    }

    public function create(){
        invoice::create([
                'title'=>'real madrid'
        ]);

        return view('invoice_create',['msg'=>'Succesfully Created']);
    }
}
