<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    
    // protected $fillable = ['title','excerpt','body','id']; // declares fields that are fillable with create or update methods
    protected $guarded = [];  //declares the attributes that arent fillable inthis case all are not fillable

    // eloquent relationships

    public function category(){
        //hasOne , hasMany , belongTo , belongsToMany //the various relationships
        return $this->belongsTo(Category::class);
        
    }
}
