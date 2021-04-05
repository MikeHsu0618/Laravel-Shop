<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    const DISABLED = 'disabled';
    const ENABLED = 'enabled';
    const DRAFT = 'draft';

    const published_statuses = [
        0 => self::DISABLED,
        1 => self::ENABLED,
        2 => self::DRAFT,
    ];

    protected $fillable = ['name', 'description', 'brand_id', 'subcategory_id', 'published_status', 'image'];


    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function subcategory(){
        return $this->belongsTo(Subcategory::class);
    }

    public function product_options()
    {
        return $this->hasMany(ProductOption::class);
    }

    public function publish_status_name()
    {
        if (isset(self::published_statuses[$this->published_status])){
            return ucfirst(
                self::published_statuses[$this->published_status]
            );
        } else {
            return ucfirst(self::published_statuses[0]);
        }
    }

    public function is_draft()
    {
        return self::published_statuses[$this->published_status] == self::DRAFT;
    }
}
