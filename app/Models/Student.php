<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function scopeSearch($query, array $filters)
    {

        $search = $filters[0];
        $query->where('name', 'like', '%' . $search . '%')->orWhere('sname', 'like', '%' . $search . '%')->orWhere('email', 'like', '%' . $search . '%')->orWhere('age', 'like', '%' . $search . '%');

    }

    public function scopeClass_num($query, array $filters)
    {

        $class_age = $filters[0];
        $query->where('class_age', 'like', '%' . $class_age . '%');

    }

    public function scopeClass_teacher($query, array $filters)
    {

        $class_age = $filters[0];
        $query->where('teacher_id', 'like', '%' . $class_age . '%');

    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
