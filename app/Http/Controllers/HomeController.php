<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users', compact('users'));
    }

    public function userHome()
    {
        $user = Auth::user();
        
        if ($user->is_admin == 1) {
            return view('admin.dashboard');
        } else {
            return redirect()->route('home');
        }
    }

    public function listUsers()
    {
        $users = User::paginate(10);
        return view('admin.users', compact('users'));
    }
} 