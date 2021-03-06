<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'search_key', 'order_index', 'show_in_list'];

    use HasFactory;

    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }

    public function products()
    {
        return $this->hasManyThrough(Product::class, Subcategory::class);
    }

    public function subcategoriesInOrder()
    {
        return $this->subcategories()->orderBy('order_index', 'asc');
    }

    public function subcategoriesShowInList(){
        return $this->subcategories()->where('show_in_list', true)->orderBy('order_index','asc');
    }

    public static function getShowInListDate(){
        return self::where('show_in_list', true)->get();
    }
}
