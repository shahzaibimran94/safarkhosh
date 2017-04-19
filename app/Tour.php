<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    //protected $table = 'tours';
    protected $fillable =  [
        'title','cost_per_person','source','date_to_go','service','gear','activity','operator','type','destination','date_to_return','image','poster','description','status','quantity','rquantity','rating','security','value','staff','facilities','fun'
    ];
}
