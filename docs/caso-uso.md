# CU-01 - Buscar reportes sectorizados

**Actor principal:** Ciudadano

**Objetivo:** localizar reportes cercanos filtrando por sector y tipo de caso.

**Precondición:** existen reportes registrados en el sistema.

## Flujo básico

1. El ciudadano ingresa a la pantalla de búsqueda.
2. El sistema muestra los reportes activos.
3. El ciudadano selecciona un sector.
4. El ciudadano selecciona un tipo de caso: persona, adulto mayor, mascota u objeto.
5. Opcionalmente escribe una palabra clave.
6. Presiona **Buscar**.
7. El sistema aplica los filtros.
8. El sistema muestra únicamente los reportes coincidentes.

## Flujos alternos

- **7a. Sin coincidencias:** el sistema informa que no se encontraron resultados y permite limpiar los filtros.
- **3a. Sin sector:** se consideran todos los sectores.
- **4a. Sin tipo:** se consideran todos los tipos.

**Postcondición:** el usuario visualiza un conjunto de reportes acorde a los filtros seleccionados.
