<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postulacion extends Model
{
    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Select::make('oferta_laboral_id')->relationship('ofertaLaboral', 'id')->required(),
            TextInput::make('applicant_name')->required(),
            TextInput::make('applicant_email')->email()->required(),
        ]);
}

}

