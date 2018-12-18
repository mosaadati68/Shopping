<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use Sluggable;
    use Searchable;

    protected $fillable = [
        'name', 'slug', 'category_id', 'sku', 'excerpt',
        'description', 'options', 'currency', 'price',
        'photos','stock_count','stock_status','rate'
    ];

    protected $casts = [
        'options' => 'array',
        'photos' => 'array'
    ];

    /**
     * Get the index name for the model.
     *
     * @return string
     */
    public function searchableAs()
    {
        return 'products_index';
    }

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

    public function colors()
    {
        return $this->hasMany(Color::class);
    }

    public function brand()
    {
        return $this->hasOne(Brand::class);
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
