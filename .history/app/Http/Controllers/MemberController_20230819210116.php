<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function create()
    {
        return view('member.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'family' => 'required',
            // 'contact' => 'sometimes|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        Member::create([

        ]);
    }
}

