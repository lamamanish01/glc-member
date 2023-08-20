<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::all();
        return view('member.index', compact('members'));
    }

    public function create()
    {
        return view('member.create');
    }

    public function show($id)
    {
        $member = Member::find($id);

        if($member) {
            if($member->status) {
                $member->status = 0;
            } else {
                $member->status = 1;
            }
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'family' => 'required',
            'contact' => 'required',
            'image' => 'required|mimes:jpeg,png,jpg|max:2048'
        ]);

        $rand = rand(10,100);
        $images = date('dmY').time().$rand.'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('public/images'), $images);
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->address,
            'family' => $request->family,
            'image' => $images,
        ]);

        return redirect()->route('member.index')->withError('Member Created Successfully');
    }

    public function update(Request $request, $id)
    {
        $member = Member::find($id);
        if($member)
        {
            if($member->status)
            {
                $member->status = 0;
            } else {
                $member->status = 1;
            }
        }
    }

    // public function status($id)
    // {
    //     return redirect()->route('member.index');
    // }
}

