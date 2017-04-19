<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'invoiceId','customerId','customerName' ,'title','operator','type','passenger','extras','payment','cnic', 'contact','email'
    ];
}
