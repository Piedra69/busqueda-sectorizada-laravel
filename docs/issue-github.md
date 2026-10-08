# Título del Issue
Implementar búsqueda sectorizada de reportes

## Descripción
Implementar la funcionalidad HU-01 para que un ciudadano pueda filtrar reportes activos por sector, tipo de caso y palabra clave.

## Datos requeridos
- Sector.
- Tipo: persona, adulto mayor, mascota u objeto.
- Palabra clave opcional.
- Estado del reporte.

## Criterios de aceptación
- [ ] El filtro por sector devuelve únicamente reportes del sector elegido.
- [ ] El filtro por tipo devuelve únicamente reportes del tipo elegido.
- [ ] Los filtros sector + tipo funcionan combinados.
- [ ] La palabra clave busca en título y descripción.
- [ ] Si no hay coincidencias, se informa al usuario.
- [ ] Los reportes cerrados no aparecen en la búsqueda normal.
- [ ] Existen pruebas automatizadas de la funcionalidad.

## Relacionado
HU-01 · CU-01 · EDT 3.1 · etiqueta `web`
