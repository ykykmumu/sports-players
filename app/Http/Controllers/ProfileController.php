<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profiles.profile', compact('user'));
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view('profiles.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('profile', ['id' => $user])->with('result', ' 変更しました！');
    }

}
