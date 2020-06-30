<?php

namespace App\Models;

use App\Models\Traits\HasChildren;
use App\Models\Traits\isOrderable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasChildren, isOrderable;

    protected $fillable = [
        'name',
        'slug',
        'order'
    ];
    
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }
}
