<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use DB;

class AdminController extends Controller
{
    public function index(){
    	return view('admin.addAdmin');
    }

    public function create(Request $request)
    {
        $data=$request->input();
        
        $field = array('name' =>$data['name'] ,
                         'email'=>$data['email'],
                         'username'=>$data['username'],
                         'password'=>bcrypt($data['password']),
                         'role_id'=>2,);
        if($data['id']>0){
            $update=User::findorfail($data['id']);
            
         if($update->update($field)){
            return redirect('viewAdmin');

        }else{
            echo "Could not Update";
        }   
        
        }else{
            if(User::create($field)){
            return redirect('viewAdmin');
        }else{
            echo "Could not save";
        }
            
        }

    }

    public function view()
    {
        $view=User::all()->where('is_del',0)->where('role_id',2);
        return view('admin.viewAdmin',compact('view'));
    }

    public function del($id)
    {
        
        DB::update('update users set is_del=1 where id=? ',[$id]);
        return redirect()->action('AdminController@view');
    }

    public function set($id){

    	$edit=User::find($id);
    	return view('admin.edit',compact('edit','id'));
    }

    public function save(Request $request){
    	$data=$request->input();
        
        $field = array('name' =>$data['name'] ,
                         'email'=>$data['email'],
                         'username'=>$data['username'],
                         'password'=>bcrypt($data['password']),
                         'role_id'=>2,);
        if($data['id']>0){
            $update=User::findorfail($data['id']);
            
         if($update->update($field)){
            return redirect('viewAdmin');

        }else{
            echo "Could not Update";
        }   
        
        }else{
            if(User::create($field)){
            return redirect('viewAdmin');
        }else{
            echo "Could not save";
        }
            
        }

    }

}
