<?php

namespace Tests\Feature;

use App\Models\Reporte;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class BusquedaSectorizadaTest extends TestCase
{
    use RefreshDatabase;

    public function test_filtra_por_sector_y_tipo(): void
    {
        Reporte::create([
            'titulo' => 'Perro perdido',
            'tipo' => 'mascota',
            'sector' => 'Norte',
            'descripcion' => 'Mascota extraviada',
            'fecha_reporte' => now(),
            'estado' => 'activo',
        ]);

        Reporte::create([
            'titulo' => 'Mochila encontrada',
            'tipo' => 'objeto',
            'sector' => 'Norte',
            'descripcion' => 'Objeto encontrado',
            'fecha_reporte' => now(),
            'estado' => 'activo',
        ]);

        $response = $this->get('/buscar?sector=Norte&tipo=mascota');

        $response->assertOk()
            ->assertSee('Perro perdido')
            ->assertDontSee('Mochila encontrada');
    }

    public function test_no_muestra_reportes_cerrados(): void
    {
        Reporte::create([
            'titulo' => 'Caso cerrado',
            'tipo' => 'persona',
            'sector' => 'Centro',
            'descripcion' => 'Ya localizado',
            'fecha_reporte' => now(),
            'estado' => 'cerrado',
        ]);

        $this->get('/buscar')
            ->assertOk()
            ->assertDontSee('Caso cerrado');
    }

    public function test_muestra_mensaje_cuando_no_hay_coincidencias(): void
    {
        $this->get('/buscar?sector=Sur&tipo=mascota')
            ->assertOk()
            ->assertSee('No se encontraron resultados');
    }
}
