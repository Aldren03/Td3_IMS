<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id', 'employee_name', 'position', 'status', 'image'

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
