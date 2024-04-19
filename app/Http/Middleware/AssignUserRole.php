<?php

namespace App\Http\Middleware;

use Closure;

class AssignUserRole
{
    public function handle($request, Closure $next)
    {
        $user = $request->user();

        // Verifica si el usuario está autenticado y tiene un current team id
        if ($user && $user->current_team_id) {
            // Asigna el rol de acuerdo al current team id
            switch ($user->current_team_id) {
                case 1:
                    $user->role = 'admin';
                    break;
                case 2:
                    $user->role = 'teacher';
                    break;
                case 3:
                    $user->role = 'student';
                    break;
                default:
                    // Si el current team id no coincide con ninguno de los casos anteriores,
                    // asigna un rol predeterminado o toma una acción apropiada según tu lógica de negocio.
                    break;
            }
        } else {
            // Si el usuario no está autenticado o no tiene un current team id,
            // puedes tomar una acción apropiada, como redirigirlo a la página de inicio de sesión.
        }

        return $next($request);
    }
}