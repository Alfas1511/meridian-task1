<?php

namespace App\Http\Controllers;
use App\Models\Register;
use Illuminate\Http\Request;
use App\Http\Requests\StoreUser;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUser $request)
    {
        $validated = $request->validated();
        Register::create($validated);
        
        // $register = new Register();
        // $register->Name = $request->name;
        // $register->Email = $request->email;
        // $register->save();
      
        return view('dashboard');
        // return back()->with('success', 'User created successfully.');
    }
}
