<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    protected $fillable = ['shipping_date', 'company', 'invoice_number', 'memo', 'status', 'site_url', 'flag'];
}
