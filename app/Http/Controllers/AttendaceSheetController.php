<?php

namespace App\Http\Controllers;

use App\Models\AttendaceSheet;
use App\Models\User;
use Illuminate\Http\Request;

class AttendaceSheetController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $users = User::all();
        return view('attendace_sheets.index', compact('users'));
    }

    public function mission_request(Request $req)
    {
        $title = strval($req->title);
        $user = User::find($req->id);
        if($req->status == 1) {
            $user->$title = 1;
            $msg = ['success'=>'Mission has been requested.'];
        }
        $user->save();
        return response()->json($msg);
    }

    public function leave_request(Request $req)
    {
        $title = strval($req->title);
        $user = User::find($req->id);
        if($req->status == 0) {
            $user->$title = 0;
            $msg = ['success'=>'Leave has been requested.'];
        }
        $user->save();
        return response()->json($msg);
    }
}
