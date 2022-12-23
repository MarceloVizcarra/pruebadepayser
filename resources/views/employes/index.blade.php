<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between ">
            {{ __('Empleos') }}
            <a href="{{ route('employes.create') }}" class="text-sm text-white bg-gray-800 rounded px-4 py-2">Crear Nuevo</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
                <div>
                    Listado de Empleos
                </div>
                <table class="mb-4">
                    @foreach ($employes as $employe)
                        <tr class="border-b border-gray-200 text-sm">
                            <td class="px-6 px-4">{{ $employe->title  }}</td>
                            <td class="px-6 px-4">
                                <a href="{{ route('employes.edit', $employe) }}" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 px-4">
                                <form action="{{ route('employes.destroy', $employe) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" value="Eliminar" class="bg-red-600 text-white rounded px-4 py-2" onclick="return confirm('Desea eliminar?')">
                                </form>
                            </td>
                        </tr>
                    @endforeach

                </table>
                {{ $employes->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
