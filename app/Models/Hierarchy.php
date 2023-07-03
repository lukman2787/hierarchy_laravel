<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hierarchy extends Model
{
    use HasFactory;

    protected $table = 'hierarchy';

    public function parent()
    {
        return $this->belongsTo(Hierarchy::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Hierarchy::class, 'parent_id');
    }
}
