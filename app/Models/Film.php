<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Film extends Model
{
    use HasFactory;


    protected $guarded = [
        'id',
    ];

    protected $casts = [
        'updated_at' => 'datetime',
    ];

    const CREATED_AT = null;


    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function year(): BelongsTo
    {
        return $this->belongsTo(Year::class);
    }

    public function location(): BelongsTo
    {
        return $this->belongsTo(Location::class);
    }

    public function rating(): BelongsTo
    {
        return $this->belongsTo(Rating::class);
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(Language::class);
    }

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    public function actor(): BelongsTo
    {
        return $this->belongsTo(Actor::class);
    }

    public function tag(): BelongsTo
    {
        return $this->belongsTo(Tag::class);
    }
}
