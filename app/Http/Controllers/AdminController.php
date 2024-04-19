<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Asegúrate de importar el modelo User si no lo has hecho ya

class AdminController extends Controller
{
    public function showDashboard()
    {
        $users = User::all(); // Obtén todos los usuarios registrados
        return view('dashboard', ['users' => $users]); // Mostrar la vista dashboard
    }

    public function showViewUsers()
    {
        $users = User::all(); // Obtén todos los usuarios registrados
        return view('viewUsers', ['users' => $users]); // Mostrar la vista viewUsers
    }
}
