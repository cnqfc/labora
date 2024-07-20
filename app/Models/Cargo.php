<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Select::make('empresa_id')->relationship('empresa', 'name')->required(),
            TextInput::make('title')->required(),
        ]);
}

}

