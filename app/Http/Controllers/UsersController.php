<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Alert;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('admin.users.viewUsers')
        ->with('users',$users);
    }

    public function myProfile()
    {   
        $user=User::find(auth()->id());     
        return view('admin.users.myProfile')->with('user',$user);        
    }

    public function myProfileUpdate(Request $request)
    {   
        $nombre_ya_existe = User::where([
            ['name','=',$request->name],
            ['id','<>',$request->id]
        ])->get()->count()>0?true: false;
        if($nombre_ya_existe)
        {
            Alert::error('Error','El nombre de usuarios y/o email ya esta(n) siendo utilizado(s)');
            return redirect()->route('usuarios.myprofile');
        }

        User::where('id', $request->id)
            ->update(
            [
                'name' =>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password)              
            ]);

        Alert::success('Correcto','El usuario se modifico correctamente');
        return redirect()->route('usuarios.myprofile');       
    }
}
