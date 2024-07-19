<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $primaryKey = 'TaskId';
    protected $guarded = [];

    public function subject(){
        return $this->belongsTo(Subject::class, 'SubjectId');
    }
}
