@extends('layouts.base')
@section('content')
<body class="bg-blue-300">
  

<h1 class="text-center text-2xl font-bold mt-6 mb-6 text-white">Editar HQ</h1>


<div class="flex justify-center mb-6">
    <div class="mr-4">
        <a href="{{ url('/') }}" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 border-2 border-green-900 dark:bg-green-600 dark:hover:bg-green-700">Tela Inicial</a>
    </div>
    <div>
        <a href="{{ url('comics/') }}" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 border-2 border-green-900 dark:bg-green-600 dark:hover:bg-green-700">Ver todas as HQs</a>
    </div>
</div>

<form class="max-w-sm mx-auto" action="{{ url('comics/'.$comic->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PUT')
  <div>
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Título</label>
      <input type="text" name="title" id="title" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('title', $comic->title) }}">
  </div>
  <div>
      <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Número</label>
      <input type="text" name="number" id="number" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('number', $comic->number) }}">
  </div>
  <div>
      <label for="release_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Data de publicação original</label>
      <input type="text" name="release_date" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ old('release_date', $comic->release_date) }}">
  </div>
  <div class="mt-4 mb-4">
      <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Categoria</label>
      <select name="category_id" id="category_id" required class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
          <option value="">Selecione uma categoria</option>
          @foreach($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
      </select>
      @error('category_id')
          <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
      @enderror
  </div>

  <div class="mt-4">
    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="image">Upload de imagem</label>
    <div class="flex items-center justify-center w-full">
      <label for="image" class="flex flex-col items-center justify-center w-full h-32 border-2 border-gray-300 border-solid rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-gray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500">
        <div class="flex flex-col items-center justify-center pt-5 pb-6">
          <svg class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2"/>
          </svg>
          <p class="mb-2 text-xs text-gray-500 dark:text-gray-400">
            <span class="font-semibold">Clique para upload</span> ou arraste a imagem
          </p>
          <p class="text-[11px] text-gray-500 dark:text-gray-400">PNG, JPG ou WEBP (MAX. 5MB)</p>
        </div>
        <input id="image" name="image" type="file" class="hidden" accept="image/*"/>
      </label>
    </div> 
  </div>

  <button type="submit" class="mt-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 border-green-900 border-solid border-2 dark:hover:bg-green-700 dark:focus:ring-green-800">Editar HQ</button>
  
</form>
</body>


@endsection