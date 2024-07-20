<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public static function form(Form $form): Form
{
    return $form
        ->schema([
            TextInput::make('name')->required(),
            TextInput::make('address')->nullable(),
        ]);
}
}

