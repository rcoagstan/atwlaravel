<?php

namespace App\Http\Controllers;

use App\User;
use App\UserDetail;

class UserController extends Controller {
	function index(){
		$data['list_user'] = User::all();
		return view('admincs.user.index', $data);
	}
	function create(){
		return view('admincs.user.create');
	}
	function store(){
		$user = new User;
		$user->username = request('username');
		$user->email = request('email');
		$user->nama = request('nama');
		$user->password = bcrypt(request('password'));
		$user->save();

		$userDetail = new UserDetail;
		$userDetail->id_user = $user->id;
		$userDetail->no_hp = request('no_hp');
		$userDetail->save();		

		return redirect('user')->with('success', 'Data berhasil ditambah');

	}
	function show(User $user){
		$data['user'] = $user;
		return view('admincs.user.show', $data);
	}
	function edit(User $user){
		$data['user'] = $user;
		return view('admincs.user.edit', $data);
	}
	function update(User $user){
		$user = new User;
		$user->username = request('username');
		$user->email = request('email');
		$user->nama = request('nama');
		$user->password = bcrypt(request('password'));
		$user->save();

		return redirect('user')->with('success', 'Data berhasil diedit');
	}
	function destroy(User $user){
		$user->delete();

		return redirect('user')->with('danger', 'Data berhasil dihapus');
	}

}