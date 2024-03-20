<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    protected $fillable = ['name', 'address', 'city', 'type_id, image'];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
