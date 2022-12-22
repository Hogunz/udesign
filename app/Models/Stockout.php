<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Stockout extends Model
{
    use SoftDeletes;
    protected $fillable = [
       'receiving_id',
       'quantity',
    ];

    public function receiving()
    {
        return $this->belongsTo(Receiving::class);
    }
}
