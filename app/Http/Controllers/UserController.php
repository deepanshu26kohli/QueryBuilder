<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function showUsers(){
        $users = DB::table('users')->get();
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
    public function addUser(){
        $user = DB::table('users')->insertOrIgnore(
            [
                'name' => "qwe xyz",
                'email' => "qwe@xyz",
                'age' => 21,
                'city' => "jmu",
                'created_at' => now(),
                'updated_at' => now(),
            ]);
            if($user){
                echo "<h1>Data Added Successfully</h1>";
            }
            else{
                echo "<h1>Data Not added </h1>";
            }
    }
    public function updateUser(){
        $user = DB::table('users')
        ->where('id',3)
        ->increment(
           'age'
            );
            if($user){
                echo "<h1>Data Updated Successfully</h1>";
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
}
