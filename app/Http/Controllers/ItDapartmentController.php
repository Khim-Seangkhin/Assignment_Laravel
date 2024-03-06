<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ItDapartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::where('department', 'it')->get();
        return view('it_departments.index', compact('users'));
    }
}
