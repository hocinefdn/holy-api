<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Shop extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'description',
        'style',
        'rate',
        'details',
        'slug',
        'user_id'
    ];

    /**
     * Get the user that owns the shop
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Get all of the shop articles
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function shops(): HasMany
    {
        return $this->hasMany(Article::class, 'shop_id');
    }
}