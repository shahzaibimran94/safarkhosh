<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Controller\input;
use App\Tour;
use App\User;

class TourController extends Controller
{
    public function index(){
        $query = DB::select('select * from tours where status=0 ');
    	return view('tour.tours',compact('query'));
    }

    public function form(){
        $operators = DB::select('select * from operators where block=0');
        $services = DB::select('select * from services where is_del=0');
        $gears = DB::select('select * from gears where is_del=0');
    	return view('tour.tourForm',compact('operators','services','gears'));
    }

    public function add(Request $r){

        $day1 = $r->input('day1');
        $day2 = $r->input('day2');
        $day3 = $r->input('day3');
        $day4 = $r->input('day4');
        $day5 = $r->input('day5');
        $day6 = $r->input('day6');
        $day7 = $r->input('day7');
        $day8 = $r->input('day8');
        $day9 = $r->input('day9');
        $day10 = $r->input('day10');

    	$title = $r->input('title');
    	$cpp = $r->input('cost_per_person');
    	$source = $r->input('source');
    	$dtg = $r->input('date_to_go');
    	$services = $r->input('services');
        $s = implode(',', $services);
    	$gears = $r->input('gears');
        $g = implode(',', $gears);
    	$operator = $r->input('operators');
    	$type = $r->input('type');
    	$destination = $r->input('destination');
    	$dtr = $r->input('date_to_return');
    	$description = $r->input('description');
        $capacity = $r->input('capacity');
        $file = $r->file('image');
        $images = "";
        for($i=0;$i<count($file);$i++){
        if($file){
        $fname = $file[$i]->getClientOriginalName();
        $extension = $file[$i]->getClientOriginalExtension();
        $destinationPath = base_path(). '/images';
        $filename = rand(11111,99999).'.'.$extension;
        $file[$i]->move($destinationPath,$filename);
        $images.="$filename,";
        $poster ="$filename";
        }
        }
        $images=substr($images,0,-1);
    	DB::insert('insert into tours (title,cost_per_person,source,date_to_go,service,gear,operator,type,destination,date_to_return,image,poster,description,quantity,rquantity,day1,day2,day3,day4,day5,day6,day7,day8,day9,day10) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',[$title,$cpp,$source,$dtg,$s,$g,$operator,$type,$destination,$dtr,$images,$poster,$description,$capacity,$capacity,$day1,$day2,$day3,$day4,$day5,$day6,$day7,$day8,$day9,$day10]);
    	return redirect()->action('TourController@index');
    }

    public function set($id){

        $query = DB::select("select * from tours where id='$id' ");
        $operators = DB::select('select * from operators where block=0');
        $services = DB::select('select * from services where is_del=0');
        $gears = DB::select('select * from gears where is_del=0');
        
        return view('tour.updateTour',compact('query','operators','services','gears'));
    }

    public function update(Request $r){

        $day1 = $r->input('day1');
        $day2 = $r->input('day2');
        $day3 = $r->input('day3');
        $day4 = $r->input('day4');
        $day5 = $r->input('day5');
        $day6 = $r->input('day6');
        $day7 = $r->input('day7');
        $day8 = $r->input('day8');
        $day9 = $r->input('day9');
        $day10 = $r->input('day10');

        $filename = "";
        $id = $r->input('id');
        $title = $r->input('title');
        $cpp = $r->input('cost_per_person');
        $source = $r->input('source');
        $dtg = $r->input('date_to_go');
        $services = $r->input('services');
        $s = implode(',', $services);
        $gears = $r->input('gears');
        $g = implode(',', $gears);
        $operator = $r->input('operators');
        $type = $r->input('type');
        $destination = $r->input('destination');
        $dtr = $r->input('date_to_return');
        $description = $r->input('description');
        $capacity = $r->input('capacity');
        $file = $r->file('image');
        $images = "";
        if($file){
        for($i=0;$i<count($file);$i++){
        
        if($file){
        $fname = $file[$i]->getClientOriginalName();
        $extension = $file[$i]->getClientOriginalExtension();
        $destinationPath = base_path(). '/images';
        $filename = rand(11111,99999).'.'.$extension;
        $file[$i]->move($destinationPath,$filename);
        $images.="$filename,";
        $poster ="$filename";
        }
        }
        $images=substr($images,0,-1);
        
        DB::update('update tours set title=?,cost_per_person=?,source=?,date_to_go=?,service=?,gear=?,operator=?,type=?,destination=?,date_to_return=?,image=?,poster=?,description=?,quantity=?,day1=?,day2=?,day3=?,day4=?,day5=?,day6=?,day7=?,day8=?,day9=?,day10=? where id=? ',[$title,$cpp,$source,$dtg,$s,$g,$operator,$type,$destination,$dtr,$images,$poster,$description,$capacity,$day1,$day2,$day3,$day4,$day5,$day6,$day7,$day8,$day9,$day10,$id]);
        return redirect()->action('TourController@index');
        
        }else{
        	DB::update('update tours set title=?,cost_per_person=?,source=?,date_to_go=?,service=?,gear=?,operator=?,type=?,destination=?,date_to_return=?,description=?,quantity=?,day1=?,day2=?,day3=?,day4=?,day5=?,day6=?,day7=?,day8=?,day9=?,day10=? where id=? ',[$title,$cpp,$source,$dtg,$s,$g,$operator,$type,$destination,$dtr,$description,$capacity,$day1,$day2,$day3,$day4,$day5,$day6,$day7,$day8,$day9,$day10,$id]);
        return redirect()->action('TourController@index');
        }

    }

    public function block($id){
        $val = 1;
        DB::update('update tours set status=? where id=?',[$val,$id]);
        return redirect()->action('TourController@index');
    }

    public function delete($id){

        DB::delete('delete from tours where id=?',[$id]);
        return redirect()->action('TourController@index');        
    }

    public function checkmail($u="")
    {
         $d=User::whereemail($u)->get()->first();
        
         if($d==null)
         {
            echo TRUE;
         }
         else
         {
            echo FALSE;
     }
    }

    public function checkusername($u="")
    {
         $d=User::whereusername($u)->get()->first();
         if($d==null)
         {
            echo TRUE;
         }
         else
         {
            echo FALSE;
     }
    }
}
