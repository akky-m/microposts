<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Micropost;

class FavoritesController extends Controller
{
   public function store(Request $request, $id)
    {
        \Auth::micropost()->register($id);
        return back();
    }

    public function destroy($id)
    {
        \Auth::micropost()->unregister($id);
        return back();
    }
    

}
