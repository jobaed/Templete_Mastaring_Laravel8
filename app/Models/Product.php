<?php

namespace App\Models;

use App\Scopes\Inactive;
use Attribute;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;

class Product extends Model
{
    use HasFactory;

    protected $table = 'product';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = ['name', 'title', 'code', 'qty', 'category_id', 'brand', 'image', 'status'];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    // protected $guarded = [];

    public function brand()
    {
        return $this->belongsTo(Brand::class)->withDefault(['brand' => 'No Brand']);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function materials()
    {
        return $this->belongsToMany(Material::class)->withTimestamps()->withPivot('material_qry');  // If you don't agree Naming Convenshion  $this->belongsToMany(Product::class, 'material_product', 'meterial_id', 'product_id', 'id', 'id');
    }


    // Mutators

    public function setNameAttribute($value)  // set {Colum Name} Attribute
    {
        $this->attributes['name'] = strtoupper($value);
    }


    // Accessores

    public function getNameAttribute($value)
    {
        return strtolower($value);
    }



    // Scope Query

    // Local Queary
    // public function scopeActiveProduct($query)
    // {
    //     return $query->where('status', 1);
    // }
    // public function scopeInactiveProduct($query)
    // {
    //     return $query->where('status', 2);
    // }

    // Dynamic local query scope value pass
    public function scopeStatus($query, $value)
    {
        return $query->where('status', $value);
    }


    // Global Define In Model

    public static function booted()
    {
        // model global scope
        // static::addGlobalScope('ap', function (Builder $builder) {
        //     $builder->where('status', 1);
        // });

        // static::addGlobalScope('high_qty', function (Builder $builder) {
        //     $builder->where('qty', '>=', 15);
        // });

        // static::addGlobalScope('ip', function (Builder $builder) {
        //     $builder->where('status', 2);
        // });

        // all over global scope

        static::addGlobalScope(new Inactive);
    }
}
