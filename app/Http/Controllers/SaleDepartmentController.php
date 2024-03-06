<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SaleDepartmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::where('department', 'sale')->get();
        return view('sale_departments.index', compact('users'));
    }
}
