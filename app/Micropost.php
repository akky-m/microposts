<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    
    /*
    public function favorites()
    {
        return $this->belongsToMany(Micropost::class, 'favorites', 'user_id', 'micropost_id')->withTimestamps();
    }*/

    //投稿に紐付くお気に入りを取得
    public function favorites()
    {
        return $this->belongsToMany(Micropost::class, 'favorites', 'micropost_id', 'user_id')->withTimestamps();
    }
    
    //お気に入り登録・削除

    public function register($micropostId)
    {
        // 既に登録しているかの確認
        $exist = $this->is_registering($micropostId);
        // 相手が自分自身ではないかの確認
        $its_me = $this->id == $userId;
    
        if ($exist || $its_me) {
            // 既に登録していれば何もしない
            return false;
        } else {
            // 未登録であれば登録する
            $this->favorite_article()->attach($micropostId);
            return true;
        }
    }

    public function unregister($micropostId)
    {
        // 既に登録しているかの確認
        $exist = $this->is_registering($micropostId);
        // 相手が自分自身かどうかの確認
        $its_me = $this->id == $userId;
    
        if ($exist && !$its_me) {
            // 既に登録していれば削除する
            $this->favorite_article()->detach($micropostId);
            return true;
        } else {
            // 未登録であれば何もしない
            return false;
        }
    }
    
    public function is_registering($micropostId)
    {
        return $this->favorite_article()->where('microposts_id', $userId)->exists();
    }
 
  }
