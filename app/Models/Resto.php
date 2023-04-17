<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Resto extends Model
{
    use HasFactory;
    /** 
     
    @var array<int,
    */

    protected $fillable = [
        'name',
        'description',
        'address',
    ];

    /**
     * Get all of the reviews for the Resto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reviews(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
