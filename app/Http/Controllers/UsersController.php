<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User; // 追加
use App\Micropost;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'desc')->paginate(10);

        return view('users.index', [
            'users' => $users,
        ]);
    } 
    
    public function show($id)
    {
        $user = User::find($id);
        $microposts = $user->microposts()->orderBy('created_at', 'desc')->paginate(10);

        $data = [
            'user' => $user,
            'micropost' => $microposts,
        ];

        $data += $this->counts($user);

        return view('users.show', [
            'user' => $user,
            'microposts' => $microposts,
            'data' => $data
        ]);
    }
    
        public function followings($id)
    {
        $user = User::find($id);
        $followings = $user->followings()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followings,
        ];

        $data += $this->counts($user);

        return view('users.followings',[
            'user' => $user,
            'users' => $followings,
            'data' => $data
            ]);
    }

    public function followers($id)
    {
        $user = User::find($id);
        $followers = $user->followers()->paginate(10);

        $data = [
            'user' => $user,
            'users' => $followers,
        ];

        $data += $this->counts($user);

        return view('users.followers', [
            'user' => $user,
            'users' => $followers,
            'data' => $data
            ]);
    }

    public function favorites($id)
    {
        $micropost = Micropost::find($id);
        $favorite_article = $micropost->favorites()->paginate(10);

        $data = [
            'micropost' => $micropost,
            'microposts' => $favorite_article,
        ];

        $data += $this->counts($micropost);

        return view('users.favorites',[
            'micropost' => $micropost,
            'microposts' => $favorite_article,
            'data' => $data
      ]);
    }

}
 