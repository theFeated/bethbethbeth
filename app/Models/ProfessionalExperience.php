<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 

class ProfessionalExperience extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'professional_experiences';

    protected $fillable = [
        'title',
        'start_year',
        'end_year',
        'role',
        'description',
    ];}
