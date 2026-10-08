# Matriz de trazabilidad

| Pregunta | Evidencia | Respuesta |
|---|---|---|
| ¿Qué debíamos hacer? | HU-01, CU-01 e Issue #1 | Implementar búsqueda de reportes por sector, tipo y palabra clave. |
| ¿Dónde lo desarrollamos? | Rama `feature/1-busqueda-sectorizada` | En una rama independiente creada desde `develop`. |
| ¿Qué cambios realizamos? | Commits + PR | Modelo, migración, seeder, controlador, vista Blade y pruebas. |
| ¿Quién participó? | Autoría de commits + cuenta de GitHub | Los seis commits conservan la autoría `Mateo Roca Padilla`; el repositorio y el PR pertenecen a `Piedra69`. No se atribuye coautoría no verificada. |
| ¿Quién revisó? | Review del Pull Request | Pendiente. El PR #2 tiene 0 revisiones; debe intervenir una segunda cuenta real. |
| ¿Cómo comprobamos que funciona? | Código, pruebas incluidas y capturas | Se revisó el código y la previsualización HTML/JS. Las pruebas Feature están incluidas, pero `php artisan test` queda pendiente porque este paquete no contiene una instalación Laravel completa. |
| ¿Cómo se integró? | PR #2 hacia `develop` | Aún no se integró. El PR permanece abierto, sin aprobación y sin merge. |

## Enlaces reales

- Repositorio: <https://github.com/Piedra69/busqueda-sectorizada-laravel>
- Issue #1: <https://github.com/Piedra69/busqueda-sectorizada-laravel/issues/1>
- Pull Request #2: <https://github.com/Piedra69/busqueda-sectorizada-laravel/pull/2>
- Evidencias: [`evidencias-github.md`](evidencias-github.md)
