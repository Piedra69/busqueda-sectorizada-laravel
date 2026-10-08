# Demo XP - Búsqueda sectorizada

Proyecto académico de **Proyecto de Sistemas III**. La demo implementa una funcionalidad concreta del sistema de búsqueda sectorizada de personas, adultos mayores, mascotas y objetos perdidos.

## Funcionalidad seleccionada

**HU-01 - Buscar reportes por sector y tipo**

Como ciudadano, quiero filtrar los reportes por sector y tipo de caso para encontrar con rapidez coincidencias cercanas a mi zona.

La implementación usa **Laravel + Blade + PostgreSQL** y está preparada para seguir el flujo XP/GitHub indicado por la guía de la materia.

## Qué contiene este paquete

- `web/`: archivos que deben copiarse sobre un proyecto Laravel 13 nuevo.
- `docs/`: caso de uso, historia de usuario, texto del Issue, texto del PR y matriz de trazabilidad.
- `demo-preview/`: previsualización funcional en HTML/JS de la misma interfaz para poder revisar el comportamiento sin instalar dependencias.
- `evidencias/`: capturas generadas de la funcionalidad.

## Puesta en marcha con Laravel

### 1. Crear el proyecto base

```bash
composer create-project laravel/laravel busqueda-sectorizada "^13.0"
cd busqueda-sectorizada
```

### 2. Copiar los archivos de `web/`

Copie cada archivo conservando la misma ruta dentro del proyecto Laravel.

### 3. Configurar PostgreSQL

Copie las variables de `web/.env.postgresql.example` al archivo `.env` y ajuste usuario, contraseña y nombre de base de datos.

### 4. Preparar la aplicación

```bash
php artisan key:generate
php artisan migrate --seed
php artisan test
php artisan serve
```

Abra `http://127.0.0.1:8000/buscar`.

## Flujo Git recomendado

```bash
git switch develop
git pull
git switch -c feature/1-busqueda-sectorizada

# realizar cambios
git add .
git commit -m "feat(busqueda): agrega modelo y migracion de reportes #1"
git commit -m "feat(busqueda): implementa filtros por sector y tipo #1"
git commit -m "test(busqueda): agrega pruebas de filtrado #1"
git push -u origin feature/1-busqueda-sectorizada
```

Luego se abre un Pull Request hacia `develop` con `Closes #1`, el compañero revisa y aprueba, y finalmente se realiza `Squash and merge` o el método definido por el equipo.

## Evidencias reales de GitHub

El repositorio y su trazabilidad fueron publicados el 8 de octubre de 2026:

1. [Repositorio `Piedra69/busqueda-sectorizada-laravel`](https://github.com/Piedra69/busqueda-sectorizada-laravel).
2. [Issue #1 - Implementar búsqueda sectorizada de reportes](https://github.com/Piedra69/busqueda-sectorizada-laravel/issues/1).
3. Ramas `main`, `develop` y `feature/1-busqueda-sectorizada` publicadas.
4. Seis commits originales conservados; el Pull Request incluye los cinco de la rama feature más un commit documental con el estado real.
5. [Pull Request #2 hacia `develop`](https://github.com/Piedra69/busqueda-sectorizada-laravel/pull/2), abierto y sin fusionar.
6. Capturas reales entregadas junto con el PDF actualizado y estado resumido en [`docs/evidencias-github.md`](docs/evidencias-github.md).

La revisión/aprobación de un compañero y el merge siguen pendientes. No se registran como realizados hasta que una segunda cuenta real complete esas acciones.
