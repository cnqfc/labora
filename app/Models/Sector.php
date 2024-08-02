<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        ['id' => 1, 'name' => 'Industria de Medicamentos'],
        ['id' => 2, 'name' => 'Industria de Alimentos'],
        ['id' => 3, 'name' => 'Industria de Cosméticos'],
        ['id' => 4, 'name' => 'Industria de Suplementos Dietarios'],
        ['id' => 5, 'name' => 'Industria de Homeopáticos'],
        ['id' => 6, 'name' => 'Industria de Fitoterapéuticos'],
        ['id' => 7, 'name' => 'Industria de Reactivos de diagnóstico in vitro'],
        ['id' => 8, 'name' => 'Industria de Dispositivos Médicos'],
        ['id' => 9, 'name' => 'Servicios Farmacéuticos Ambulatorios'],
        ['id' => 10, 'name' => 'Servicios Farmacéuticos Hospitalarios'],
        ['id' => 11, 'name' => 'Investigación Clínica'],
        ['id' => 12, 'name' => 'Distribuidores y Operadores Logísticos'],
        ['id' => 13, 'name' => 'Gobierno y Entidades Reguladoras'],
        ['id' => 14, 'name' => 'Instituciones Educativas'],
        ['id' => 15, 'name' => 'Laboratorios de Análisis y Calibración'],
        ['id' => 16, 'name' => 'Asesorías y Consultorías'],
        ['id' => 17, 'name' => 'Asociaciones y Gremios'],
        ['id' => 18, 'name' => 'Industria de productos veterinarios'],
        ['id' => 19, 'name' => 'Industria de productos de Aseo y Limpieza'],
        ['id' => 20, 'name' => 'Industria de materias primas'],
        ['id' => 21, 'name' => 'Industria de envases y empaques'],
        ['id' => 22, 'name' => 'Industria de equipos y maquinaria'],
        ['id' => 23, 'name' => 'Industria de plaguicidas'],
        ['id' => 24, 'name' => 'Centrales de Esterilización'],
        ['id' => 25, 'name' => 'Tecnologías en salud'],
        ['id' => 99, 'name' => 'Otros sectores'],
    ];
}
