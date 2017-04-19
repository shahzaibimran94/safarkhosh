<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id=0)
    {
        if($id>0){
            $edit=service::find($id);
        }else{
            $edit=null;
        }
        $view=service::all()->where('is_del',0);
        return view('Service.service',compact('edit','view'));
    }
    public function saveService(request $r)
    {
        $data=$r->input();
        $field = array('name' =>$data['name']);
        if($data['id']>0){
            $update=service::find($data['id']);
            if($update->update($field)){
               return redirect('Index');
            }else{
                echo "Could not Update";
            }
        }else{
            if(service::create($field)){
               return redirect('Index');
            }else{
                echo "Could not save";
            }
        }
    }
    public function delete($id=0)
    {
        $field = array('is_del' =>1, );
        $update=service::findorfail($id);
        if($update->update($field)){
            return redirect('Index');
        }else{
            echo "Could not Delete Data ";
        }
    }
}
