<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        ['id' => 1, 'name' => 'Química Farmacéutica'],
        ['id' => 2, 'name' => 'Tecnología en Regencia de Farmacia'],
        ['id' => 3, 'name' => 'Técnico Auxiliar en Servicios Farmacéuticos'],
        ['id' => 4, 'name' => 'Expendedor de Drogas']
    ];
}
