<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addmission extends Model
{
    use HasFactory;
    protected $table = 'addmission';
    protected $guarded = [];

    public function dept(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department');
    }
}
