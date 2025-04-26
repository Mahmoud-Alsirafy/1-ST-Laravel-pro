<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class logoutController extends Controller
{
    

    public function logout()
    {
        Auth::logout();
        session()->invalidate(); // يفسخ السيشن خالص
        session()->regenerateToken(); // يولد توكن جديد
        return redirect('login/index');
    }
}
