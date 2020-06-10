<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Micropost;

class FavoritesController extends Controller
{
   public function store(Request $request, $id)
    {
        $user = \Auth::user();
        $user->favorite($id);
        return back();
    }

    public function destroy($id)
    {
        $user = \Auth::user();
        $user->unfavorite($id);
        return back();
    }
}
