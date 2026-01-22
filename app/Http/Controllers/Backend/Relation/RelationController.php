<?php

namespace App\Http\Controllers\Backend\Relation;

use App\Http\Controllers\Controller;
use App\Models\Relation\Mechanic;
use App\Models\Relation\Post;
use App\Models\User;
use Illuminate\Http\Request;

class RelationController extends Controller
{
   public function index (){

    $users = User::with('phone')->get();
    // dd($users);

    return view('pages.relation.otoRelation' , compact('users'));
   }

    public function indexMany(){

        $users = Post::with('comments')->get();
        // dd($users);
        return view('pages.relation.otmRelation' , compact('users'));
    }
    public function manyToMany(){

        $users = User::with('roles')->get();
        dd($users);
        // return view('pages.relation.otmRelation' , compact('users'));
    }
    public function hasOneThrough(){

        $carOwner = Mechanic::with('carOwner')->get();
        dd($carOwner);

        // $users = User::with('roles')->get();
        // dd($users);
        // return view('pages.relation.otmRelation' , compact('users'));
    }

}
