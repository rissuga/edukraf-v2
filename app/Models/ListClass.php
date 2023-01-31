<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListClass extends Model
{
    use HasFactory;
    protected $table = 'list_class';

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }

}
