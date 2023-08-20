<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Member::paginate(10);
        return view('member.index', compact('members'));
    }

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

        $rand = rand(10,100);
        $images = date('dmY').time().$rand.'.'.$request->image->getClientOriginalExtension();
        $request->image->move(public_path('documents/'), $images);
        Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'address' => $request->address,
            'contact' => $request->address,
            'family' => $request->family,
            'image' => $data,
        ]);

        return redirect()->route('member.index')->withError('Member Created Successfully');
    }

    public function update(Request $request, $id)
    {
        $user = Member::find($id);
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
}

