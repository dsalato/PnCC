<?php

namespace Model;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Books extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'Books';
    protected $fillable = [
        'id',
        'name',
        'author',
        'year',
        'description',
        'count',
        'photo',
    ];

    protected static function booted()
    {
        static::created(function ($books) {
            $books->save();
        });
    }

}



