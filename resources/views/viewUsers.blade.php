<x-app-layout>
<p class="text-lg font-semibold mb-4">Bienvenido, {{ auth()->user()->name }}.</p>
        <div class="overflow-x-auto">
            <table class="w-full whitespace-nowrap">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Nombre</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Equipo</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de Creación</th>
                        <th class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Fecha de Actualización</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($users as $user)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-center">{{ $user->name }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">{{ $user->email}}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">
                            @if ($user->current_team_id === 1)
                                Admin
                            @elseif ($user->current_team_id === 2)
                                Teacher
                            @elseif ($user->current_team_id === 3)
                                Student
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">{{ $user->created_at->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 whitespace-nowrap text-center">{{ $user->updated_at->format('d/m/Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
</x-app-layout>