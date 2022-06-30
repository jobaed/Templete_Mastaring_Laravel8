<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable  = ['material_name'];

    public function products()
    {
        return $this->belongsToMany(Product::class)->withTimestamps()->withPivot('material_qry');   // If you don't agree Naming Convenshion  $this->belongsToMany(Product::class, 'material_product', 'meterial_id', 'product_id', 'id', 'id');

    }
}
