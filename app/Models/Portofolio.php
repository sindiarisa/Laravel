<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portofolio extends Model
{
    protected $table = 'portofolio';
    protected $primaryKey = 'nim';

    protected $fillable = [
        'first_name',
        'last_name',
        'birthday',
        'gender',
        'email',
        'phone',
    ];
}
