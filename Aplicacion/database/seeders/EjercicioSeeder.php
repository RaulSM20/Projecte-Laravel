<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ejercicios = [
            [
                'nombre' => 'Sentadillas',
                'descripcion' => 'Trabaja piernas y glúteos. Flexiona rodillas y caderas, manteniendo la espalda recta.',
                'foto' => 'sentadillas.jpg',
                'grupos_musculares' => 'Piernas, glúteos'
            ],
            [
                'nombre' => 'Press de banca',
                'descripcion' => 'Ejercicio para pecho, hombros y tríceps. Empuja la barra desde el pecho hasta los brazos extendidos.',
                'foto' => 'press_banca.jpg',
                'grupos_musculares' => 'Pecho, hombros, tríceps'
            ],
            [
                'nombre' => 'Dominadas',
                'descripcion' => 'Trabaja espalda y brazos. Levanta el cuerpo hasta que la barbilla esté por encima de la barra.',
                'foto' => 'dominadas.jpg',
                'grupos_musculares' => 'Espalda, brazos'
            ],
            [
                'nombre' => 'Peso muerto',
                'descripcion' => 'Ejercicio compuesto que trabaja la parte posterior del cuerpo, incluyendo la espalda baja, glúteos, isquiotibiales y músculos de la cadena posterior.',
                'foto' => 'peso_muerto.jpg',
                'grupos_musculares' => 'Espalda baja, glúteos, isquiotibiales'
            ],
            [
                'nombre' => 'Fondos en paralelas',
                'descripcion' => 'Ejercicio para el tren superior que trabaja principalmente los músculos del tríceps, pero también involucra los hombros y el pecho.',
                'foto' => 'fondos_paralelas.jpg',
                'grupos_musculares' => 'Tríceps, hombros, pecho'
            ],
            [
                'nombre' => 'Remo con barra',
                'descripcion' => 'Ejercicio para la espalda que trabaja los músculos de la espalda, incluyendo los dorsales, trapecios y romboides.',
                'foto' => 'remo_barra.jpg',
                'grupos_musculares' => 'Dorsales, trapecios, romboides'
            ],
            [
                'nombre' => 'Flexiones de brazos',
                'descripcion' => 'Ejercicio para el pecho, hombros y tríceps. Realiza flexiones con el cuerpo recto y los brazos extendidos.',
                'foto' => 'flexiones_brazos.jpg',
                'grupos_musculares' => 'Pecho, hombros, tríceps'
            ],
            [
                'nombre' => 'Zancadas',
                'descripcion' => 'Ejercicio para piernas y glúteos. Da un paso adelante y flexiona ambas rodillas hasta que formen un ángulo de 90 grados.',
                'foto' => 'zancadas.jpg',
                'grupos_musculares' => 'Piernas, glúteos'
            ],
            [
                'nombre' => 'Elevaciones laterales',
                'descripcion' => 'Ejercicio para los hombros. Levanta mancuernas hacia los lados hasta que los brazos estén paralelos al suelo.',
                'foto' => 'elevaciones_laterales.jpg',
                'grupos_musculares' => 'Hombros'
            ]
        ];
        
        // Seed con los ejercicios
        foreach ($ejercicios as $ejercicio) {
            DB::table('ejercicios')->insert($ejercicio);
        }
    }
}
