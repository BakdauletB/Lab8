<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
use Illuminate\Http\UploadFile;


class UserController extends Controller
{
    public function index(){
         $users = UsersModel::all();

         return view('user.index') -> with(['users' => $users]);  //returns all the users in the database
    }

    public function store(Request $request){
        $user = new UsersModel();

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');

        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('uploads/user/' , $filename);
            $user->photo = $filename;
        }else{
            return '<h1 style = "text-align:center;">You will not be able to upload the file! <a href="http://127.0.0.1:8000/user/form">here</a> to go to the page</h1>';
        }
        
        $user->save();
        return '<h1 style = "text-align:center;">You have successfully submitted:)<br> To go to the form press <a href="http://127.0.0.1:8000/user/form">it</a></h1>';
    }
}