<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receiving extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'size_id',
        'category_id',
        'quantity',
        'price',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function size()
    {
        return $this->belongsTo(Size::class);
    }
    public function stockin()
    {
        return $this->belongsTo(Stockin::class);
    }
}

