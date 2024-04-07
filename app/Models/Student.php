<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenom','datenaissance','lieunaissance', 'student_gender','taille','profession' ,'student_image'];
}
