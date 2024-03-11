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
            // Agrega más ejercicios según sea necesario
        ];
        
        // Seed con los ejercicios
        foreach ($ejercicios as $ejercicio) {
            DB::table('ejercicios')->insert($ejercicio);
        }
    }
}
