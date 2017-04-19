<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Order;
use Mail;
use App\Tour;

class OperatorController extends Controller
{
    public function index(){
    	$query = DB::select('select * from operators where block=0');
    	return view('tour.operator',compact('query'));
    }

    public function form(){
    	return view('tour.operatorForm');
    }

    public function add(Request $r){
    	
    	$name = $r->input('name');
    	$address = $r->input('address');
    	$phone = $r->input('phone');
    	$cname = $r->input('contact_name');
    	$email = $r->input('email');
    	$fburl = $r->input('fb_page_url');

    	DB::insert('insert into operators (name,email,phone,cname,address,fburl) values(?,?,?,?,?,?)',[$name,$email,$phone,$cname,$address,$fburl]);
    	return redirect()->action('OperatorController@index');

    }

    public function edit($id){
    	$query = DB::select("Select * from operators where id='$id' ");
    	return view('tour.operatorUpdateForm',compact('query'));
    }

    public function update(Request $r){
    	$id = $r->input('id');
    	$name = $r->input('name');
    	$address = $r->input('address');
    	$phone = $r->input('phone');
    	$cname = $r->input('contact_name');
    	$email = $r->input('email');
    	$fburl = $r->input('fb_page_url');

    	DB::update('update operators set name=? ,email=? ,phone=? ,cname=? ,address=? ,fburl=? where id=? ',[$name,$email,$phone,$cname,$address,$fburl,$id]);
    	return redirect()->action('OperatorController@index');
    }

    public function block($id){
    	$val=1;
    	DB::update('update operators set block=? where id=?',[$val,$id]);
    	return redirect()->action('OperatorController@index');
    }

    public function del($id){
    	DB::delete('delete from operators where id = ?',[$id]);
    	return redirect()->action('OperatorController@index');
    }

    public function tours($opName){
        $data = Order::whereoperator($opName)->get();
        return view('tour.opTours')->with('data',$data);
    }

    public function rate($title){
        $data = Tour::wheretitle($title)->get(['id','operator'])->first();
       
        $data1 = array('id'=>$data->id);
        Mail::send('ratingMail',$data1, function($msg) {
         $msg->to('shahzaib.imran94@gmail.com')->subject
            ('Testing Mail');
         $msg->from('hello@craftedbyblack.com');
        });
        //return redirect()->action('OperatorController@tours')->with('opName',$data->operator);
        //return redirect()->route('publish',[$data->operator]);
    }

}
