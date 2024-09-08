<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    protected $table = 'group';

    protected $fillable = [
        'title',
        'start_from',
        'is_active'
    ];

    public function students(): HasMany {
        return $this->hasMany(Student::class);
    }
}
