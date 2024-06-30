<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctor';
    protected $guarded = [];

    public function dept(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department');
    }
}