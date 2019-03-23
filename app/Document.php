<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = [
            'countryCode', 'titleCompany', 'company', 'user_id'
        ];

   // public $timestamps = false;
}
