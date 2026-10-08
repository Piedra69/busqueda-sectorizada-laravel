<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Búsqueda sectorizada</title>
    <style>
        :root { font-family: Arial, sans-serif; color: #172033; background: #f5f7fb; }
        * { box-sizing: border-box; }
        body { margin: 0; }
        .topbar { background: #1c2a52; color: white; padding: 22px 0; }
        .container { width: min(1100px, 92%); margin: auto; }
        .brand { font-size: 22px; font-weight: 700; }
        .subtitle { margin-top: 5px; opacity: .82; }
        .panel { background: white; margin-top: 28px; padding: 22px; border: 1px solid #e2e7f0; border-radius: 12px; }
        .filters { display: grid; grid-template-columns: 1fr 1fr 1.5fr auto; gap: 12px; align-items: end; }
        label { display: block; font-size: 13px; font-weight: 700; margin-bottom: 6px; }
        select, input { width: 100%; padding: 11px 12px; border: 1px solid #cfd6e4; border-radius: 7px; font-size: 14px; }
        button, .clear { display: inline-block; border: 0; border-radius: 7px; padding: 11px 16px; text-decoration: none; cursor: pointer; font-weight: 700; }
        button { background: #d93420; color: white; }
        .clear { color: #26365c; background: #edf1f7; margin-left: 6px; }
        .summary { display: flex; justify-content: space-between; align-items: center; margin: 26px 0 12px; }
        .count { font-weight: 700; }
        .grid { display: grid; grid-template-columns: repeat(2, 1fr); gap: 14px; padding-bottom: 40px; }
        .card { background: white; border: 1px solid #e2e7f0; border-radius: 10px; padding: 18px; }
        .tags { display: flex; gap: 8px; margin-bottom: 10px; }
        .tag { font-size: 12px; font-weight: 700; background: #eef2f9; color: #30436f; padding: 5px 8px; border-radius: 20px; }
        .tag.type { background: #fff0ed; color: #a93426; }
        h2 { font-size: 18px; margin: 5px 0 8px; }
        p { color: #526079; line-height: 1.45; margin: 0 0 12px; }
        .date { font-size: 12px; color: #7b879c; }
        .empty { background: #fff; border: 1px dashed #cbd3e3; padding: 30px; text-align: center; border-radius: 10px; }
        @media (max-width: 800px) { .filters, .grid { grid-template-columns: 1fr; } }
    </style>
</head>
<body>
<header class="topbar">
    <div class="container">
        <div class="brand">Sistema de Búsqueda Sectorizada</div>
        <div class="subtitle">Personas · Adultos mayores · Mascotas · Objetos</div>
    </div>
</header>

<main class="container">
    <section class="panel">
        <form method="GET" action="{{ route('buscar.index') }}" class="filters">
            <div>
                <label for="sector">Sector</label>
                <select id="sector" name="sector">
                    <option value="">Todos los sectores</option>
                    @foreach ($sectores as $sector)
                        <option value="{{ $sector }}" @selected(($filtros['sector'] ?? '') === $sector)>{{ $sector }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="tipo">Tipo de reporte</label>
                <select id="tipo" name="tipo">
                    <option value="">Todos los tipos</option>
                    <option value="persona" @selected(($filtros['tipo'] ?? '') === 'persona')>Persona</option>
                    <option value="adulto_mayor" @selected(($filtros['tipo'] ?? '') === 'adulto_mayor')>Adulto mayor</option>
                    <option value="mascota" @selected(($filtros['tipo'] ?? '') === 'mascota')>Mascota</option>
                    <option value="objeto" @selected(($filtros['tipo'] ?? '') === 'objeto')>Objeto</option>
                </select>
            </div>
            <div>
                <label for="q">Palabra clave</label>
                <input id="q" type="search" name="q" value="{{ $filtros['q'] ?? '' }}" placeholder="Ej.: perro, mochila, chaqueta...">
            </div>
            <div>
                <button type="submit">Buscar</button>
                <a class="clear" href="{{ route('buscar.index') }}">Limpiar</a>
            </div>
        </form>
    </section>

    <div class="summary">
        <div class="count">{{ $reportes->count() }} reporte(s) encontrado(s)</div>
        <div>Solo se muestran reportes activos</div>
    </div>

    @if ($reportes->isEmpty())
        <div class="empty">
            <strong>No se encontraron resultados.</strong><br>
            Intente cambiar el sector, el tipo o la palabra clave.
        </div>
    @else
        <section class="grid">
            @foreach ($reportes as $reporte)
                <article class="card">
                    <div class="tags">
                        <span class="tag">{{ $reporte->sector }}</span>
                        <span class="tag type">{{ str_replace('_', ' ', ucfirst($reporte->tipo)) }}</span>
                    </div>
                    <h2>{{ $reporte->titulo }}</h2>
                    <p>{{ $reporte->descripcion }}</p>
                    <div class="date">Reportado: {{ $reporte->fecha_reporte->format('d/m/Y') }}</div>
                </article>
            @endforeach
        </section>
    @endif
</main>
</body>
</html>
