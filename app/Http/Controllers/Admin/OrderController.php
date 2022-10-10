<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function pending()
    {
    	return view('admin.order.pending');
    }
    public function complete()
    {
    	return view('admin.order.complete'); 
    }
    public function cancel()
    {
    	return view('admin.order.cancel'); 
    }
}
