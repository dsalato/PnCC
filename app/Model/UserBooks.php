<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserBooks extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'UserBooks';
    protected $fillable = [
        'id',
        'library_card_id ',
        'book_id',
        'date_of_issue',
        'delivery_date',

    ];
}