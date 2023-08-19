<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Http\Requests\StoreusersRequest;
use App\Http\Requests\UpdateusersRequest;

class UsersController extends Controller
{
    public function index(){
        $users = DB::table('users')->get();


        return view('pages.db_users', ['title' => 'users', 'users' => $users]);
    }

    public function create(){
        return view('pages.db_formAddUsers', ['title' => 'users']);
    }

    public function store(Request $request){
        $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|',
        ]);

        $filename = '';
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $filename = $request['username'].".". $file->getClientOriginalExtension();
            $file->move('img/profile/', $filename);
        }else{
            $filename = 'default.jpg';
        }

        $user = new User();

        $user->username = $request->username;
        $user->password = $request->password;
        $user->image = $filename;

        $user->save();

        return redirect('/dashboard/users');
    }

    public function show($id){
        $user = DB::table('users')->where('id', $id)->first();

        return view('pages.db_detailUsers', ['title' => 'users', 'users' => $user]);
    }

    public function edit($id){
        
        $user = DB::table('users')->where('id', $id)->first();

        return view('pages.db_formEditUsers', ['title' => 'users', 'users' => $user]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'username' => 'required|',
            'password' => 'required|',
        ]);

        $filename = '';
        if($request->hasfile('img'))
        {
            $file = $request->file('img');
            $filename = $request['username'].".". $file->getClientOriginalExtension();
            $file->move('img/profile/', $filename);

            DB::table('users')
            ->where('id', $id)
            ->update([
                'username' => $request['username'],
                'password' => $request['password'],
                'image' => $filename
            ]);
        }else{

            DB::table('users')
            ->where('id', $id)
            ->update([
                'username' => $request['username'],
                'password' => $request['password'],
            ]);
        }

        return redirect('/dashboard/users');
    }

    public function destroy($id){
        DB::table('users')->where('id', $id)->delete();

        return redirect('/dashboard/users');
    }

}
