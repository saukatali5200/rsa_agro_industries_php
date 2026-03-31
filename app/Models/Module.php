<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    // Children modules
    public function children()
    {
        return $this->hasMany(Module::class, 'parent_id')->with('children');
    }

    // Optional parent reference
    public function parent()
    {
        return $this->belongsTo(Module::class, 'parent_id');
    }
    
}
