# Título del Pull Request
feat(busqueda): búsqueda sectorizada de reportes #1

## Historia
Closes #1 · HU-01 · CU-01 · EDT 3.1

## Qué cambió
- Se agregó el modelo `Reporte`.
- Se agregó la migración para la tabla `reportes`.
- Se agregó un seeder con datos de demostración.
- Se implementó `BusquedaController`.
- Se creó la vista Blade de búsqueda.
- Se agregaron filtros por sector, tipo y palabra clave.
- Se agregaron pruebas Feature.

## Cómo probar
1. Configurar PostgreSQL en `.env`.
2. Ejecutar `php artisan migrate --seed`.
3. Ejecutar `php artisan test`.
4. Ejecutar `php artisan serve`.
5. Abrir `/buscar`.
6. Seleccionar `Norte` y `Mascota`.
7. Verificar que solo aparecen mascotas del sector Norte.
8. Probar una combinación sin resultados y verificar el mensaje.

## Evidencia
Adjuntar capturas de:
- búsqueda sin filtros;
- búsqueda filtrada por sector y tipo;
- pruebas automáticas en verde.

## Checklist del autor
- [ ] Criterios de aceptación cumplidos.
- [ ] Pruebas automatizadas en verde.
- [ ] Código revisado localmente.
- [ ] Sin credenciales o secretos en el repositorio.
- [ ] Documentación actualizada.
