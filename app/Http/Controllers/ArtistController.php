<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Introduction;
use App\Models\Part;
use App\Models\User;
use App\Models\Pref;

class ArtistController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except(['index', 'show', 'list']);
    // }

    public function index(Request $request)
    {
        $user = Auth::user();
        $parts = Part::all();
        $prefs = Pref::all();

        return view('artist_match.index', compact('user', 'parts', 'prefs'));
    }

    public function list(Request $request)
    {
        $parts = Part::all();
        $prefs = Pref::all();
        $query = User::query();
        $search_word = $request->search_word;
        $part_id = $request->part_id;
        $pref_id = $request->pref_id;

        if ($request->has('search_word') && $search_word != '') {
            $query->where('name',  'like', '%' . $search_word . '%')->get();
        }

        if ($request->has('part_id') && $part_id != ('')) {
            $query->where('part_id', $part_id)->get();
        }

        if ($request->has('pref_id') && $pref_id != ('')) {
            $query->where('pref_id', $pref_id)->get();
        }

        $users = $query->simplePaginate(5);

        return view('artist_match.list', compact('users', 'parts', 'prefs'));
    }

    public function show(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);


        return view('artist_match.show', compact('user'));
    }
}
