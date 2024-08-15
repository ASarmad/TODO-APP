<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'message',
        'deadline_date',
        'deadline_time',
        'status',
    ];

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
