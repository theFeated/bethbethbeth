<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class PersonalDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'personal_details';

    protected $fillable = [
        'title',
        'description',
        'name',
        'birthday',
        'phone',
        'city',
        'age',
        'degree',
        'email',
        'dance_instructor',
        'additional_info',
    ];

    protected $dates = ['birthday'];
}
