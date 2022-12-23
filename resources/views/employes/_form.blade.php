@csrf

<label for="title" class="uppercase text-gray-700 text-xs">Titulo</label>
<span class="text-sm text-red-600">@error('title') {{ $message }} @enderror</span>
<input type="text" name="title" id="title" class="border border-gray-400 p-2 w-full rounded mb-4" value="{{ old('title', $employe->title) }}">
<label for="content" class="uppercase text-gray-700 text-xs">Descripcion</label>
<span class="text-sm text-red-600">@error('content') {{ $message }} @enderror</span>

<textarea name="content" id="content" class="border border-gray-400 p-2 w-full rounded mb-4" cols="30" rows="10">{{ old('content', $employe->content) }}</textarea>
<label for="company" class="uppercase text-gray-700 text-sm">Empresa</label>
<span class="text-sm text-red-600">@error('company') {{ $message }} @enderror</span>

<input type="text" name="company" id="company" class="border border-gray-400 p-2 w-full rounded mb-4" value="{{ old('company', $employe->company) }}">
<label for="location" class="uppercase text-gray-700 text-sm">Direccion</label>
<span class="text-sm text-red-600">@error('location') {{ $message }} @enderror</span>

<input type="text" name="location" id="location" class="border border-gray-400 p-2 w-full rounded mb-4" value="{{ old('location', $employe->location) }}">
<label for="salary" class="uppercase text-gray-700 text-sm">Salario</label>
<span class="text-sm text-red-600">@error('salary') {{ $message }} @enderror</span>

<input type="text" name="salary" id="salary" class="border border-gray-400 p-2 w-full rounded mb-4" value="{{ old('salary', $employe->salary) }}">
<label for="category" class="uppercase text-gray-700 text-sm">Categoria</label>
<span class="text-sm text-red-600">@error('category') {{ $message }} @enderror</span>


<select name="category" id="category" class="border border-gray-400 p-2 w-full rounded mb-4">
    <option value="Desarrollo Web">Desarrollo Web</option>
    <option value="Desarrollo Movil">Desarrollo Movil</option>
    <option value="Diseño Web">Diseño Web</option>
    <option value="Marketing Digital">Marketing Digital</option>
    <option value="Redes">Redes</option>
    <option value="Otros">Otros</option>
</select>
<label for="type" class="uppercase text-gray-700 text-sm">Tipo</label>
<span class="text-sm text-red-600">@error('type') {{ $message }} @enderror</span>
<select name="type" id="type" class="border border-gray-400 p-2 w-full rounded mb-4" value="{{ old('type', $employe->type) }}">
    <option value="Full Time">Full Time</option>
    <option value="Part Time">Part Time</option>
    <option value="Freelance">Freelance</option>
    <option value="Internship">Internship</option>
    <option value="Temporary">Temporary</option>
</select>
<label for="status" class="uppercase text-gray-700 text-sm">Estado</label>
<span class="text-sm text-red-600">@error('status') {{ $message }} @enderror</span> <br>
<input type="radio" id="active" name="status" value="Activo">
<label for="active">Activo</label><br>
<input type="radio" id="inactive" name="status" value="Inactivo">
<label for="inactive">Inactivo</label><br>
<label for="image" class="uppercase text-gray-700 text-sm">URL</label>
<span class="text-sm text-red-600">@error('image') {{ $message }} @enderror</span>
<input type="text" name="image" id="image" class="border border-gray-400 p-2 w-full rounded mb-4" value="{{ old('image', $employe->image) }}">

<div class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between " >
    <a href="{{ route('employes.index') }}" class="text-indigo-600">Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>
