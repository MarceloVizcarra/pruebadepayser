<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Empleos') }}
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
                                <a href="" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 px-4">
                                Eliminar
                            </td>
                        </tr>
                    @endforeach

                </table>
                {{ $employes->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
