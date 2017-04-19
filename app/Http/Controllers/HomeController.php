<?php
namespace Illuminate\Foundation\Auth;
namespace App\Http\Controllers;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->action('TourController@index');
    }
    public function newUser($id=0)
    {
        if($id>0){
            $edit=User::find($id);
            $id=$id;
            $page="edituser";
        }else{
            $edit=null;
            $id=0;
            $page="user";
        }
        return view('auth.'.$page.'',compact('edit','id'));
    }
    public function saveUser(Request $request)
    {
        $data=$request->input();
        
        $field = array('name' =>$data['name'] ,
                         'email'=>$data['email'],
                         'username'=>$data['username'],
                         'password'=>sha1($data['password']),
                         'role_id'=>3,);
        if($data['id']>0){
            $update=User::findorfail($data['id']);
            
         if($update->update($field)){
            return redirect('viewUser');

        }else{
            echo "Could not Update";
        }   
        
        }else{
            if(User::create($field)){
            return redirect('viewUser');
        }else{
            echo "Could not save";
        }
            
        }

    }
    public function viewUser()
    {
        $view=User::all()->where('is_del',0)->where('role_id',3);
        return view('auth.viewuser',compact('view'));
    }
    public function deluser($id=0)
    {
        
        $field = array('is_del' =>1);
        $update=User::find($id);
        if($update->update($field)){
            return redirect('viewUser');

        }else{
            echo "Could not Delete ";
        }
    }
    public function roleassign()
    {
        $role=Role::all();
        $user=User::all()->where('is_del',0);
        return view('auth.roles',compact('role','user'));
    }
    public function assignRole(Request $request)
    {
        $data=$request->input();
        $field = array('role_id' =>$data['role'] );
        $update=user::find($data['user']);
        if($update->update($field)){
            return redirect('Roleassign');
        }else{
            echo "Could not Save Go Back";
        }
    }
    public function logout()
    {
        
        Session::flush();
        
      return redirect('/');
        
    }
}
