<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'location_type',
        'nit',
        'phone',
        'email',
        'address',
        'city',
        'country',
        'sectors',
        'user_id',
    ];

    protected $casts = [
        'sectors' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
