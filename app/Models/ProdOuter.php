<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProdOuter extends Model
{
    //
    public $table = "prod_outer";

    protected $casts = [
        'content' => 'json',
    ];
}
