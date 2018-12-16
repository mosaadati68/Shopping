<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;

    protected $fillable = [
        'name', 'slug', 'category_id', 'sku', 'excerpt',
        'description', 'options', 'currency', 'price',
        'photos','stock_count','stock_status','rate'
    ];

    protected $casts = [
        'options' => 'array',
        'photos' => 'array'
    ];

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ],
            'sku' => [
                'source' => 'name'
            ]
        ];
    }

    public static function findBySlug($slug)
    {
        return self::whereSlug($slug)->first();
    }

    /**
     * Get the post's File.
     */
    public function images()
    {
        return $this->morphMany('App\File', 'fileable');
    }

    public function wishlist()
    {
        return $this->belongsTo(Wishlist::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function sellers()
    {
        return $this->belongsToMany(Seller::class,'product_seller');
    }

    public function getCategoryIdAttribute($value)
    {
        return Category::where('id', $value)->first()->name;
    }

    public function reservedSlugs()
    {
        return ['admin', 'support', 'api', 'administrator', 'helpdesk', 'customer-support', 'forum', 'blog', 'shop', 'billing', 'products', 'category', 'categories'];
    }
}
