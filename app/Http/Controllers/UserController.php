<?php

namespace OneThousand\Http\Controllers;

use Illuminate\Http\Request;

use OneThousand\Http\Requests;
use OneThousand\User;

class UserController extends Controller
{
    public function profile($id)
    {
    	$user = User::find($id);
    	return view('user.profile', compact('user'));
    }
}
