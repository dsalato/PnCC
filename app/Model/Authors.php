<?php

namespace Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Authors extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'Authors';
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'date_of_birth',
        'date_of_dirth',
        'biography',
        'photo'
    ];

    public function connect():BelongsToMany
    {
        return $this->belongsToMany(
            Authors::class,
            'Connection',
            'book_id',
            'author_id',
        );
    }
}
