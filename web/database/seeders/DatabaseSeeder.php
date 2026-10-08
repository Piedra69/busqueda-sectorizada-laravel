<?php

namespace Database\Seeders;

use App\Models\Reporte;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Reporte::query()->delete();

        Reporte::insert([
            [
                'titulo' => 'Perro golden extraviado',
                'tipo' => 'mascota',
                'sector' => 'Norte',
                'descripcion' => 'Golden retriever con collar azul visto cerca de la avenida principal.',
                'fecha_reporte' => '2026-10-08',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Adulto mayor no localizado',
                'tipo' => 'adulto_mayor',
                'sector' => 'Centro',
                'descripcion' => 'Varón de 76 años, chaqueta café y gorra negra.',
                'fecha_reporte' => '2026-10-08',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Mochila negra encontrada',
                'tipo' => 'objeto',
                'sector' => 'Universitario',
                'descripcion' => 'Mochila encontrada cerca de una parada de transporte.',
                'fecha_reporte' => '2026-10-07',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Gato blanco perdido',
                'tipo' => 'mascota',
                'sector' => 'Norte',
                'descripcion' => 'Gato blanco con manchas grises; responde al nombre de Copito.',
                'fecha_reporte' => '2026-10-07',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Celular encontrado',
                'tipo' => 'objeto',
                'sector' => 'Centro',
                'descripcion' => 'Teléfono negro encontrado en una banca de plaza.',
                'fecha_reporte' => '2026-10-06',
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Persona reportada como localizada',
                'tipo' => 'persona',
                'sector' => 'Sur',
                'descripcion' => 'Caso ya cerrado y conservado solo como histórico.',
                'fecha_reporte' => '2026-10-01',
                'estado' => 'cerrado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
