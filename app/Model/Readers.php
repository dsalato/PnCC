<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Readers extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'readers';
    protected $fillable = [
        'library_card_id',
        'first_name',
        'last_name',
        'patronymic',
        'address',
        'number'
    ];
    protected static function booted()
    {
        static::created(function ($readers) {
            $readers->save();
        });
    }
}
