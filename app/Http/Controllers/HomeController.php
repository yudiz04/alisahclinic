<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Specialist;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $specialist = Specialist::get()->count();
        $doctor = Doctor::get()->count();
        $user = User::get()->count();
        return view('admin.index', compact('specialist', 'doctor', 'user'));
    }
}
