<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
  public function create(){
    return view('admin.users.create');
  }

  public function store(){
    $this->validate(request(), [
      'firstname'  => 'required|min:6|max:12',
      'middlename'  => 'required|min:6|max:12',
      'lastname' => 'required|min:6|max:12',
      'phonenumber' => 'required|min:10|max:10',
      'mobilenumber' => 'required|min:10|max:10',
      'dateobirth' => 'required',
      'usertype' => 'required',
      'password' => 'required|unique|min:6'
      ''
      'description' => 'required',

    ]);

    User user = new User();
  }

  public function index(User $user){
    return view('admin.users.index')->with('users', $user->all());
  }

  public function edit(User $user){
    return view('admin.users.edit')->with('users', $user);
  }

  public function show(User $user){
    return view('admin.users.show')->with('users', $user);
  }
}
