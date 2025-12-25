<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    private $myvalue;
    protected $myvalue2;
    public $myval = "";
    // Constructor
    //MyController()

    function __construct(){

    }
    function index() {
        return view('form');
    }

    function store(Request $req) {
        $data = $req->all();
        //echo "<pre>";
        //echo print_r($data);
        //echo "</pre>";
        return view('myviews.form_view', $data);
    }




    function info(Request $req){
        return view('myviews.info');
    }

    function calculate(Request $req){
        //echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('myviews.calculate', $data);
    }
}
