<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MigrantDetails extends Model

{

    protected $table = 'migrant_details';
    protected $fillable = [
        'name',
        'passport_no',
        'serial_no',
        'page_1',
        'page_2',
        'page_3',
        'page_4',
        'page_5',
        'page_6',
    ];
}
