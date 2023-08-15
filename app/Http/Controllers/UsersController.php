<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $currentUser = auth()->user();
        $users = DB::table('users')
                    ->where('id', '!=', $currentUser->id)
                    ->where('role', '=', 'user')
                    ->get(['id', 'name', 'email', 'created_at']);
        return view('admin.users', compact('users'));
    }
}
