<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfertaLaboral extends Model
{
    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Select::make('cargo_id')->relationship('cargo', 'title')->required(),
            DatePicker::make('start_date')->required(),
            TextInput::make('salary')->numeric()->required(),
        ]);
}

}

