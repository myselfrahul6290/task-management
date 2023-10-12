<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    use HasFactory;
    protected $table="_task_";
    protected $primaryKey="id";
    protected $fillable=['task','name','phone','comment','status'];
}

