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
            'email' => 'required|email',
            'address' => 'required',
            'family' => 'required',
            'contact' => 'required',
            // 'image' => 'sometimes|mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        if($request->file('image')) {
            $file = $request->file('image');
            $filename = date('Y-m-d H:i:s').$file->getClientOriginalFilename();
            $file->move(public_path('public/images/', $filename));
            $data['image'] = $filename;
        }
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->address,
            'family' => $request->family,
            'image' => $data
        ]);
    }
}

