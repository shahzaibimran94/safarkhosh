<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use App\Tour; 
use App\Invoice;

class IndexController extends Controller
{
    public function index($username,$password){
    	$newpassword = sha1($password);
    	return User::where('username',$username)->where('password',$newpassword)->where('role_id','3')->get();
    }

    public function saveUser($name,$email,$username,$password){
        
        $field = array('name' =>$name ,
                         'email'=>$email,
                         'username'=>$username,
                         'password'=>sha1($password),
                         'role_id'=>3,);

        User::create($field);
        return $username;    
    }

    public function order($name,$cnic,$contact,$email,$title,$operator,$quantity,$type,$cost,$id,$tourId,$invoice){

        $rq = Tour::where('id',$tourId)->get(['rquantity'])->first();
        $r=$rq['rquantity'];
        
        if($quantity<=$r || $r!=0){

        $field = array( 'invoiceId' => $invoice,
                        'customerId' =>$id,
                        'customerName' =>$name,
                        'title'=>$title,
                        'operator'=>$operator,
                        'type'=>$type,
                        'passenger'=>$quantity,
                        'payment'=>$cost,
                         'cnic'=>$cnic,
                         'contact'=>$contact,
                         'email'=>$email                          
                         );
        Order::create($field);

        $data = array('invoice' => $invoice,
                        'customerId'=> $id
                        );
        Invoice::create($data);
        
        /*$nr = $r-1;
        $tour = array('rquantity' => $nr);
        Tour::where('id',$tourId)->update($tour);*/
        Tour::find($tourId)->decrement('rquantity'); 
        }else{
            return "No Capacity";
        }
    }

    public function orderData(){
        
            $query = Order::all();
            return view('tour.orderView',compact('query',$query));
    }

    public function changeOrderStatus($id){

        Order::where('id',$id)->update(array('status' => '1'));
        return redirect()->action('IndexController@orderData');
    }
}
