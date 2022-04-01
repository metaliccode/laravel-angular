<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name', 'email', 'age', 'job'
    // ];
    
    // dikecualikan yang tidak boleh diisi
    protected $guarded = ['id'];

    // relasi ke cate table
    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id', 'id');
    }

}
