<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        if ($user->role == "0") {
            return view('admin.index'); 
        } elseif ($user->role == "1") {
            return view('subscribers.index'); 
        }

        return redirect('/'); 
    }
}
