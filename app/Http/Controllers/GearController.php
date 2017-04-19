<?php

namespace App\Http\Controllers;
use App\Gearcat as gc;
//gc is allias of Gearcat model
use App\Seller;
use DB;
use Illuminate\Http\Request;
use Session;

class GearController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function gearindex($id=0)
    {
        if($id>0){
            $edit=gc::find($id);
        }else{
            $edit=null;
        }
        $view=gc::all()->where('is_del',0);
        return view('Gear.gearview',compact('edit','view'));
    }
    public function savegearcat(Request $r)
    {
        $data=$r->input();
        $data=$r->input();
        $field = array('name' =>$data['name']);
        if($data['id']>0){
            $update=gc::find($data['id']);
            if($update->update($field)){
               return redirect('gearIndex');
           }else{
            echo "Could not Update";
        }
    }else{
        if(gc::create($field)){
           return redirect('gearIndex');
       }else{
        echo "Could not save";
    }
}
}
public function delete($id=0)
{
    $field = array('is_del' =>1, );
    $update=gc::findorfail($id);
    if($update->update($field)){
        return redirect('gearIndex');
    }else{
        echo "Could not Delete Data ";
    }
}
public function sellerindex($id=0)
{
    if($id>0){
        $edit=seller::find($id);

    }else{
        $edit=null;
    }
    $view=seller::all()->where('is_del',0);
    return view('Gear.sellerView',compact('edit','view'));
}
public function saveseller(Request $r)
{
    $data=$r->input();
    $data=$r->input();
    $field = array('name' =>$data['name']);
    if($data['id']>0){
        $update=seller::find($data['id']);
        if($update->update($field)){
           return redirect('sellerIndex');
       }else{
        echo "Could not Update";
    }
}else{
    if(seller::create($field)){
       return redirect('sellerIndex');
   }else{
    echo "Could not save";
}
}
}
public function deleteseller($id=0)
{
    $field = array('is_del' =>1, );
    $update=Seller::findorfail($id);
    if($update->update($field)){
        return redirect('sellerIndex');
    }else{
        echo "Could not Delete Data ";
    }
}
public function updateSeller($id){

    $query = DB::select("select * from sellers where id='$id' ");
    return view('Gear.updateSeller',compact('query'));
}

public function saveupdateSeller(Request $r){

    $name = $r->input('name');
    $id = $r->input('id');
    DB::update('update sellers set name= ? where id= ? ',[$name,$id]);
    return redirect()->action('GearController@sellerindex');

}
public function viewGear(){
    $query = DB::select('SELECT *,gears.id as gid,gears.name as gearname,gearcats.name as catname,sellers.name as sellername FROM `gears` JOIN gearcats on gears.gearcats_id=gearcats.id join sellers on gears.sellers_id=sellers.id WHERE gears.is_del="0" ');
    return view('Gear.viewGear')->with(['query'=>$query]);
}
public function addGear(){
    $gearcat = DB::select('select `id`,`name` from gearcats where is_del=0 ');
    $seller = DB::select('select `id`,`name` from sellers where is_del=0 ');
    return view('Gear.newGear')->with(['gearcat'=>$gearcat])->with(['seller'=>$seller]);
}
public function insertGear(Request $r){
    $name = $r->input('name');
    $price = $r->input('price');
    $gearcat_id = $r->input('category_id');
    $seller_id = $r->input('seller_id');
    $description = $r->input('description');
    $file = $r->file('image');
    if($file){
        $fname = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $destinationPath = base_path(). '/images';
        $filename = rand(11111,99999).'.'.$extension;
        $file->move($destinationPath,$filename);
    }

    DB::insert('insert into gears (name,price,gearcats_id,sellers_id,description,image) values(?,?,?,?,?,?)',[$name,$price,$gearcat_id,$seller_id,$description,$filename]);
    return redirect()->action('GearController@viewGear');

}

public function setGear($id){
    $query = DB::select("SELECT *,gears.id as gid,gears.name as gearname,gearcats.name as catname,sellers.name as sellername FROM `gears` JOIN gearcats on gears.gearcats_id=gearcats.id join sellers on gears.sellers_id=sellers.id WHERE gears.id='$id' ");
    $gearcat = DB::select('select `id`,`name` from gearcats where is_del=0 ');
    $seller = DB::select('select `id`,`name` from sellers where is_del=0 ');
    
    return view('Gear.updateGear')->with(['query'=>$query])->with(['gearcat'=>$gearcat])->with(['seller'=>$seller]);
}

public function updateGear(Request $r){
    $filename = "";
    $id = $r->input('id');
    $name = $r->input('name');
    $category_id = $r->input('category_id');
    $price = $r->input('price');
    $seller_id = $r->input('seller_id');
    $description = $r->input('description');
    $file = $r->file('image');
    if($file){
        $fname = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();
        $destinationPath = base_path(). '/images';
        $filename = rand(11111,99999).'.'.$extension;
        $file->move($destinationPath,$filename);
        
        DB::update('update gears set name= ?,price= ?,gearcats_id= ?,sellers_id= ?,description= ?,image=? where id= ?',[$name,$price,$category_id,$seller_id,$description,$filename,$id]);
    return redirect()->action('GearController@viewGear');
    }else{
    	DB::update('update gears set name= ?,price= ?,gearcats_id= ?,sellers_id= ?,description= ? where id= ?',[$name,$price,$category_id,$seller_id,$description,$id]);
    return redirect()->action('GearController@viewGear');
    }
}

public function delGear($id){
    DB::update("update gears set is_del=1 where id='$id' ");
    return redirect()->action('GearController@viewGear');
}

public function upload($image){
    // getting all of the post data
    //$file = array($image);
    // checking file is valid.
    //if ($file){
      //$destinationPath = base_path(). '/public/images'; // upload path
      //$extension = ;// getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image
      //$image->move($destinationPath, $file); // uploading file to given path
      // sending back with message
      //Session::flash('success', 'Upload successfully'); 
      //return Redirect::to('upload');
  //}
}

}
