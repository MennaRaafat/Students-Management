<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return '<h1>List Users Page</h1>';
    }

    public function showLess($id){
        return '<h1>Detail Page of Contact #'.$id.'</h1>';
    }

    public function show($id , $name='unknown name'){
        return '<h1>Detail Page of Contact #'.$id. ' named '. $name .'</h1>';
    }

    public function editCust($id){
        return '<h1>Edit Page of Contact #'.$id .'</h1>';
    }

}
