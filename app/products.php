<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class products extends Model
{
    use SoftDeletes;
    protected $table = 'products';
    protected $fillable = [
        'product_name',
        'sku',
        'created_at',
        'updated_at'
    ];
}
