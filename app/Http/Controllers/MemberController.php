<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        $members = Members::all();
        return view('index', compact('members'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Members::create($request->all());
        return redirect()->route('members.index');
    }

    public function edit(Members $member)
    {
        return view('edit', compact('member'));
    }

    public function update(Request $request, Members $member)
    {
        $member->update($request->all());
        return redirect()->route('members.index');
    }

    public function destroy(Members $member)
    {
        $member->delete();
        return redirect()->route('members.index');
    }
}

