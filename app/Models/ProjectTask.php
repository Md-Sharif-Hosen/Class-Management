<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectTask extends Model
{
    use HasFactory;
    public function project_names()
    {
        //function_body
        return $this->hasMany(ProjectName::class,'id');
    }
}
