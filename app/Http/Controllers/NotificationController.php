<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotificationController extends Controller
{
    public function index() {

    	return view('/notifications/index');

    }

    public function show($id) {

    	return view('/notifications/index');

    }    
}
