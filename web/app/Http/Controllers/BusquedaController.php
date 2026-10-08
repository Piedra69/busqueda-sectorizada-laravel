<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BusquedaController extends Controller
{
    public function index(Request $request): View
    {
        $filtros = $request->validate([
            'sector' => ['nullable', 'string', 'max:50'],
            'tipo' => ['nullable', 'in:persona,adulto_mayor,mascota,objeto'],
            'q' => ['nullable', 'string', 'max:100'],
        ]);

        $reportes = Reporte::query()
            ->where('estado', 'activo')
            ->when($filtros['sector'] ?? null, fn ($query, $sector) =>
                $query->where('sector', $sector)
            )
            ->when($filtros['tipo'] ?? null, fn ($query, $tipo) =>
                $query->where('tipo', $tipo)
            )
            ->when($filtros['q'] ?? null, function ($query, $q) {
                $query->where(function ($subquery) use ($q) {
                    $term = '%' . mb_strtolower($q) . '%';
                    $subquery->whereRaw('LOWER(titulo) LIKE ?', [$term])
                        ->orWhereRaw('LOWER(descripcion) LIKE ?', [$term]);
                });
            })
            ->orderByDesc('fecha_reporte')
            ->get();

        $sectores = Reporte::query()
            ->where('estado', 'activo')
            ->select('sector')
            ->distinct()
            ->orderBy('sector')
            ->pluck('sector');

        return view('busqueda.index', compact('reportes', 'sectores', 'filtros'));
    }
}
