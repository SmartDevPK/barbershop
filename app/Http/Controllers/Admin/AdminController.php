<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\booking;

class AdminController extends Controller
{

    public function store(Request $request)
    {
        // Handle the request data here if needed
        return view('booking.create');
    }

    public function dashboard()
    {

        return view("admin.dashboard");
    }

    public function index()
    {
        //Get all user
        $users = booking::paginate(5);
        return view('admin.users.index', compact('users'));
    }
}
