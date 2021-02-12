<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Introduction;
use App\Models\Part;
use App\Models\User;
use App\Models\Pref;

class UserController extends Controller
{
    public function new()
    {
        $user = Auth::user();
        $introduction_id = $user->introduction_id;
        $parts = Part::all();
        $prefs = Pref::all();

        if (!Introduction::where('id', $introduction_id)->exists()) {
            return view('artist_match.new', compact('user', 'parts', 'prefs'));
        } else {
            return redirect('/');
        }
    }

    public function new2(Request $request)
    {
        $introduction = new introduction;
        $introduction->user_id = $request->user_id;
        $introduction->introduction = $request->introduction;
        $introduction->twitter = $request->twitter;
        $introduction->youtube = $request->youtube;
        $introduction->save();
        $user = Auth::user();
        $user->part_id = $request->part_id;
        $user->pref_id = $request->pref_id;
        $user->save();

        return redirect('/');
    }

    public function edit(Request $request)
    {
        $user = Auth::user();
        $id = $user->introduction_id;
        $introduction = introduction::where('id', $id)->first();

        $parts = Part::all();
        $prefs = Pref::all();

        return view('artist_match.edit', compact('user', 'introduction', 'parts', 'prefs'));
    }

    public function edit2(Request $request)
    {
        $user = Auth::user();
        $user->name = $request->name;
        $user->part_id = $request->part_id;
        $user->pref_id = $request->pref_id;
        $user->save();

        $user_id = $request->user_id;

        $introduction = introduction::where('user_id', $user_id)->first();
        $introduction->introduction = $request->introduction;
        $introduction->twitter = $request->twitter;
        $introduction->youtube = $request->youtube;
        $introduction->save();

        return redirect('/');
    }

    public function mypage(Request $request)
    {
        $user = Auth::user();

        if (!Introduction::where('user_id', $user->id)->exists()) {
            $introduction = new Introduction;
            $introduction->user_id = $user->id;
            $introduction->introduction = '';
            $introduction->twitter = '';
            $introduction->youtube = '';
            $introduction->save();
        }



        // $introduction = introduction::where('user_id', $user->id)->first();

        // // $id = $user->id;
        // // $introduction = introduction::where('user_id', $id)->first();
        // if (empty($user->introduction->introduction)) {
        //     $introduction->introduction = '自己紹介を入力してください。';
        //     $introduction->save();
        // }
        return view('artist_match.mypage', compact('user'));
    }
}
