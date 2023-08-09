<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $fillable=[
        'title', 
        'body'
        ];
    
    //更新順&件数制限
 function getPaginateByLimit(int $limit_count = 5)
 {
    return $this->orderBy('updated_at', 'DESC')-> paginate($limit_count);
 }
}