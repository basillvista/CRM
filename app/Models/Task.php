<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;


    protected $fillable=[
        'title',
        'description',
        'user_id',
        'client_id',
        'project_id',
        'deadline',
        'status',
        ];

    public const STATUS = ['in_progress', 'completed', 'open'];

    public function ScopeOrder($query){
        return $query->orderBy('deadline', 'desc')->paginate(10);
    }
}
