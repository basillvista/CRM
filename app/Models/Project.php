<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

//    protected $casts = [
//      'deadline'=>'date',
//    ];
//
    protected $dates=[
        'deadline'
    ];

    protected $fillable =[
        'title',
        'description',
        'user_id',
        'client_id',
        'deadline',
        'status',
    ];

    public const STATUS = ['in_progress', 'completed', 'open'];

    public function scopeOrder($query){
        return $query->orderBy('deadline', 'desc')->paginate(10);
    }

    public function getDeadlineAttribute($deadline)
    {
       return Carbon::parse($deadline)->format('m-d-Y');
    }
}
