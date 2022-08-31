<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters){
        $search = $filters[0];
        if($filters[0] ?? false)
        {

            $query->where('name', 'like', '%' . $search . '%')->orWhere('sname', 'like', '%' . $search . '%')->orWhere('email', 'like', '%' . $search . '%')->orWhere('age', 'like', '%' . $search . '%');

        }
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id', 'id');
    }
}
