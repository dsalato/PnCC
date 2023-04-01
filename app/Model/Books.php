<?php

namespace Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Books extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'Books';
    protected $fillable = [
        'id',
        'name',
        'year',
        'description',
        'count',
        'photo',
    ];

}



