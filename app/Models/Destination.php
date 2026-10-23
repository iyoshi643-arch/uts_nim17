<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destinations';

    protected $fillable = [
        'name', 'region', 'description', 'image', 'ticket_price',
    ];

    public function getImageUrlAttribute(): string
    {
        return asset('assets/images/' . $this->image);
    }

    public function getPriceLabelAttribute(): string
    {
        return $this->ticket_price > 0
            ? 'Rp ' . number_format($this->ticket_price, 0, ',', '.')
            : 'Gratis';
    }
}
