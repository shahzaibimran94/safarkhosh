<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Mail;
use App\Tour;
use App\Rating;

class QuestionController extends Controller
{
    public function index($id){
    	return Question::where('tourId',$id)->get();        
    }

    public function comment($id,$opemail,$comment,$name,$email){
    	if($id!=null){
    	$data = array('tourId'=>$id,
                      'opEmail'=>$opemail,
                      'name' => $name ,
                      'email' => $email,
    		         'comment' =>$comment);        
        Question::create($data);

      Mail::send('mail', $data, function($message) use ($opemail) {
         $message->to($opemail)->subject
            ('Laravel Basic Testing Mail');
      });

        return "Comment Submitted";
    	}else{
    		return "Comment Not Submitted";
    	}
    }

    public function rating($id){
        $data = Tour::whereid($id)->get()->first();
        return view('ratingPage')->with('data',$data);
    }

    public function store(Request $r){
        if($r->email!=null){
        $security = $r->security;
        $value = $r->value;
        $staff = $r->staff;
        $facility = $r->facilities;
        $fun = $r->fun;
        $rating = ($security+$value+$staff+$facility+$fun)/5;
        $data = Tour::whereid($r->id)->get(['rating','security','value','staff','facilities','fun'])->first();
        $newrating = ($rating + $data->rating)/2;
        $newsec = ($security + $data->security)/2;
        $newval = ($value + $data->value)/2;
        $newst = ($staff + $data->staff)/2;
        $newfa = ($facility + $data->facilities)/2;
        $newfu = ($fun + $data->fun)/2;
        $nr = array('rating' => $newrating,
                    'security' => $newsec,
                    'value' => $newval,
                    'staff' => $newst,
                    'facilities' => $newfa,
                    'fun' => $newfu);
        Tour::whereid($r->id)->update($nr);
        $data2 = array('usersRated' => $r->email);
        Rating::create($data2);
        $notification = array(
        'message' => 'Thank you For Rating!', 
        'alert-type' => 'success'
        );
        return redirect('/')->with($notification);
        }else{
          $notification = array(
        'message' => 'Login First!', 
        'alert-type' => 'warning'
        );
        return redirect("rateThisTrip/$r->id")->with($notification);
        }
    }
}
