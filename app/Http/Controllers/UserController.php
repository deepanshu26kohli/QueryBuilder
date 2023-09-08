<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')->paginate(4,['*']);
        return view('allusers',['data'=>$users]);
    }
    public function singleUser(string $id){ 
        $user = DB::table('users')->where('id',$id);
        if($user->exists()){
             return view('singleuser',['data' => $user->get()]);

        }else{
            return view('notFound');
        }
    }
    public function addUser(Request $req){
        $user = DB::table('users')->insertOrIgnore(
            [
                'name' => $req->username,
                'email' => $req->useremail,
                'age' => $req->userage,
                'city' => $req->usercity,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            if($user){
                return redirect()->route('home');
                // echo "<h1>Data Added Successfully</h1>";
            }
            else{
                echo "<h1>Data Not added </h1>";
            }
    }
    public function updateUser(Request $req,$id){
        $user = DB::table('users')
        ->where('id',$id)
        ->update([
            'name' => $req->username,
            'email' => $req->useremail,
            'age' => $req->userage,
            'city' => $req->usercity,
            'updated_at' => now(),
            ]);
            if($user){
                return redirect()->route('home');
            }
            else{
                echo "<h1>Data Not Updated </h1>";
            }

    }
    public function deleteUser(){
        $user = DB::table('users')
        ->where('id',2)
        ->delete();
            if($user){
                echo "<h1>Data Deleted Successfully</h1>";
            }
            else{
                echo "<h1>Data Not Deleted </h1>";
            }
    }
    public function updatePage(string $id){
        $user = DB::table('users')->find($id);
        return view('updateuser',['data' => $user]);
    }
}
