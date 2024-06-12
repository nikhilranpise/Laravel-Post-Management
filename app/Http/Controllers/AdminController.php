<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function sign_up(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:admins,username',
            'password' => 'required|min:5',

        ]);
        $password = Hash::make($request->password);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->role = '0';
        $admin->username = $request->username;
        $admin->password = $password;
        $admin->save();

        return redirect('/')->with('success','Registration successfull. Now you can login.');
    }

    public function submit_login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user_check = Admin::where(['username' => $request->username])->first();
        if( !empty( $user_check ) && Hash::check($request->password, $user_check->password) ){
            $adminData = Admin::where(['username' => $request->username])->first();
            session(['adminData' => $adminData]);
            
            return redirect('posts')->with('success','Login Successful !!');
        }else{
            return redirect('/')->with('error', 'Invalid Username/Password');
        }
        
        // $user_check = Admin::where(['username' => $request->username, 'password' => $request->password])->count();
        // if( $user_check > 0 ){
        //     $adminData = Admin::where(['username' => $request->username, 'password' => $request->password])->first();
        //     session(['adminData' => $adminData]);
        //     return redirect('posts');
        // }else{
        //     return redirect('/')->with('error', 'Invalid Username or Password.');
        // }

    }

    public function logout()
    {
        session()->forget('adminData');
        return redirect('/');
    }

    public function view_admins()
    {
        $admins = Admin::all();
        return view('view_admins',['admins' => $admins ]);
    }

    public function add_admin()
    {
        return view('add_admin');
    }

    public function save_admin(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'username' => 'required',
            'password' => 'required|min:5',

        ]);

        $password = Hash::make($request->password);

        $admin = new Admin;
        $admin->name = $request->name;
        $admin->role = $request->role;
        $admin->username = $request->username;
        $admin->password = $password;
        $admin->save();

        return redirect('/admins')->with('success','New Admin Has Been Added.');
    }

    public function edit_admin(Request $request, $id)
    {
        $admin = DB::table('admins')->where('id',$id)->first();
        return view('edit_admin',['admin' => $admin]);
    }

    public function update_admin(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'role' => 'required',
            'username' => 'required',

        ]);
        
        $result =  DB::Table('admins')->where('id',$id)
            ->update(
                        array(
                                'name' =>  $request->name,
                                'role' =>  $request->role,
                                'username' => $request->username,
                            )
                        );
        if(!$result){
            return redirect('/admins')->with('error','Failed to update Admin');
        }

        return redirect('/admins')->with('success','Admin Has Been Updated.');
    }

    public function delete_admin($id)
    {
        DB::Table('admins')->where('id',$id)->delete();
        return redirect('/admins')->with('success','Post Has Been Deleted.');
    }
}
