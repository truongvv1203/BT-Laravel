<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'class',
    ];
    
    public function searchUser($request){
        $data = $request->toArray();
        if(isset($data['name']) && isset($data['id']) && isset($data['class'])){
            $users= User::where('name', $data['name'])
                ->where('id',$data['id'])
                ->where('class',$data['class'])
                ->get();
            return $users;
        } elseif(isset($data['id']) && isset($data['class'])){
            $users= User::where('id', $data['id'])
                ->where('class',$data['class'])
                ->get();
            return $users;
        } elseif(isset($data['id']) && isset($data['name'])){
            $users= User::where('id', $data['id'])
                ->where('name',$data['name'])
                ->get();
            return $users;
        } elseif(isset($data['class']) && isset($data['name'])){
            $users= User::where('class', $data['name'])
                ->where('name',$data['name'])
                ->get();
            return $users;
        } else if(isset($data['id'])){
            $users= User::where('id', $data['id'])
                ->get();
            return $users;
        } else if(isset($data['class'])){
            $users= User::where('class', $data['class'])
                ->get();
            return $users;
        } else if(isset($data['name'])){
            $users= User::where('name', $data['name'])
                ->get();
            return $users;
        } else {
            $users = [];
            return $users;
        }
    }
}
