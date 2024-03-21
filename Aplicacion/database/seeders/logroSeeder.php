<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $logros = [
            [
                'nombre' => 'Rutina Consistente',
                'descripcion' => 'Completa tu rutina de entrenamiento durante 30 días seguidos.',
            ],
            [
                'nombre' => 'Rey de las Repeticiones',
                'descripcion' => 'Realiza más de 1000 repeticiones en ejercicios de fuerza en un mes.',
            ],
            [
                'nombre' => 'Máquina Cardiovascular',
                'descripcion' => 'Quema más de 5000 calorías en la sección de cardio en un mes.',
            ],
            [
                'nombre' => 'Maestro del Estiramiento',
                'descripcion' => 'Dedica al menos 30 minutos a estirar tu cuerpo después de cada sesión de entrenamiento durante dos semanas seguidas.',
            ],
            [
                'nombre' => 'Entrenamiento Variado',
                'descripcion' => 'Prueba y completa al menos 10 clases diferentes de entrenamiento en un mes.',
            ],
            [
                'nombre' => 'Supervisor del Peso',
                'descripcion' => 'Pierde más de 5 kilogramos de peso corporal en tres meses.',
            ],
            [
                'nombre' => 'Asistente al Amanecer',
                'descripcion' => 'Realiza una sesión de entrenamiento intensivo antes de las 7 a.m. cinco veces en un mes.',
            ],
            [
                'nombre' => 'Campeón de Flexiones',
                'descripcion' => 'Realiza más de 500 flexiones correctamente en una sola sesión de entrenamiento.',
            ],
            [
                'nombre' => 'Atleta de Hierro',
                'descripcion' => 'Aumenta tu peso en los ejercicios de levantamiento de pesas en un 20% en tres meses.',
            ],
            [
                'nombre' => 'Estrella del Fitness',
                'descripcion' => 'Recibe más de 50 "me gusta" en tus fotos de progreso compartidas en la comunidad de la aplicación.',
            ],
        ];

        // Insertar los logros en la base de datos
        foreach ($logros as $logro) {
            DB::table('logros')->insert($logro);
        }
    }
}
