<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tour;
use App\Service;
use App\User;
use App\Rating;
use App\Operator;

class SearchController extends Controller
{
    public function index($id = null)
    {
        if($id == null){
            return Tour::wherestatus('0')->orderBy('id','asc')->get(); 
        }else{
            return $this->show($id);
        }
    }

    public function search($query,$from,$to){
    	
        return Tour::where('title', 'LIKE', "%$query%")->whereBetween('date_to_go', [$from,$to])->whereBetween('date_to_return', [$from,$to])->get();
    }

    public function recentTrip(){
        return Tour::wherestatus('0')->orderBy('id','desc')->take(3)->get();
    }

    public function service($id = null){
    	if($id == null){
            return Service::where('is_del',0)->get();
        }else{
            return $this->show($id);
        }
    }

    public function detail($id){ 
        return Tour::where('id',$id)->get();
    }

    public function userData($id){
        return User::whereusername($id)->get()->first();
    }

    public function updateUser($id,$name,$pass){
        $enPass = sha1($pass);
        if($name=="undefined"){
        User::find($id)->update(array('password'=>$enPass));
        return "Updated";
        }else{
        User::find($id)->update(array('name'=>$name,'password'=>$enPass));
        return "Updated";
        }
    }

    public function rate($id,$se,$v,$st,$fa,$f){
        /*$currentRating = Tour::whereid($id)->get(['rating'])->first();
        $dbRating = $currentRating['rating'];
        $newRating = ($ar + $dbRating)/2;
        Tour::update*/
        //return $newRating;
        $data = array('tourId'=>$id,
                      'security'=>$se,
                      'value'=>$v,
                      'staff'=>$st,
                      'facilities'=>$fa,
                      'fun'=>$f
            );
        Rating::create($data);
        return "Rating Submitted";
    }

    public function opEmail($operator){
        $email = Operator::wherename($operator)->get(['email'])->first();
        return $email;
    }
}
