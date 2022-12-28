<x-app-layout>

    <div class="grid grid-cols-1 gap-2 mb-4">
         
        <div class="grid grid-cols-1 gap-3 bg-gray-100 rounded-lg px-6 py-4" >
            <img src="{{ $employe->image }}" alt="company-logo" class="h-20 mx-auto">
            <h2 class="uppercase text-lg font-bold py-2 mt-4">{{ $employe->title }}</h2>
            <span class=" font-semibold"> {{ $employe->company }}</span>
            <span class=" font-semibold text-gray-600 text-sm"> {{ $employe->location . ', ' . $employe->city . ', ' . $employe->country }}</span>
            <span class=" text-gray-600 text-sm"> Publicado: {{ $employe -> updated_at->format('d/m/Y') }}</span>
            <span class=" text-gray-600 text-sm"> Finaliza: {{ $employe->deadline }}</span>
            <div class="mx-auto flex items-center juntify-center">
                <a href="{{ route('advert') }}" class=" text-center w-24 px-4 py-1.5 text-gray-800 rounded rounded-full border border-gray-800 mx-2">Volver</a>
                @if (in_array($employe->id, $apply))
                    <p class="text-red-500 text-center block">Ya has solicitado este empleo</p>
                @else
                <form action="{{ route('applies.store') }}" method="POST" class="inline-block">
                    @csrf
                    <input type="text" name="employe_id" id="employe_id" class="hidden" value="{{ old('id', $employe->id) }}">
                    <input type="submit" value="Solicitar" class="w-24 cursor-pointer bg-gray-800 text-white rounded rounded-full px-4 py-2 mx-2">
                </form>
                @endif
            </div>
        </div>

        <div class="border border-gray-200 rounded-lg px-6 py-4">
            <h3 class="text-lg font-bold py-4">Descripcion del empleo</h3>
            <p>
                {{ $employe->content }}
            </p>
            <h3 class="text-lg font-bold py-4">Tipo de empleo</h3>
            <span>
                {{ $employe->type }}
            </span>
            <h3 class="text-lg font-bold py-4">
                Salario
            </h3>
            <span>
                {{ $employe->salary }}
            </span>
        </div>

    </div>
</x-app-layout>

    