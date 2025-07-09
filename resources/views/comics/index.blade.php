@extends('layouts.base')
@section('content')
<body>

<nav class="bg-white border-gray-200 dark:bg-gray-900 mb-4">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
     
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">HQ HERO</span>
  </a>
  <div class="flex items-center justify-between w-full md:w-auto space-x-6">
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{ url("/") }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tela inicial</a>
        </li>
        <li>
          <a href="{{ url("comics") }}" class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">VER HQS</a>
        </li>
        <li>
          <a href="{{ url("comics/create") }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Adicionar HQ</a>
        </li>
        <li>
          <a href="{{ url("categories/") }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Ver categorias</a>
        </li>
        <li>
          <a href="{{ url("categories/create") }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Adicionar categorias</a>
        </li>
      </ul>

<form action="/comics" method="get" class="ml-4 max-w-xs flex items-center">
    <input type="text" name="search" id="search" placeholder="Pesquisar" class=" bg-gray-50 border border-gray-300 ml-10 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <label for="campo" class="block text-sm font-medium text-gray-900 dark:text-white"></label>
  <select id="campo" name="campo" class="bg-gray-50 w-20 border border-gray-300 text-gray-900 text-sm rounded focus:ring-blue-500 focus:border-blue-500 block p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
    <option value="title">Titulo</option>
    <option value="category">Categoria</option>
  </select>
    <button type="submit" class="ml-2 bg-blue-600 text-white font-bold px-3 py-2 rounded hover:bg-blue-700">Buscar</button>
</form>

    </div>
    
  
  </div>
</nav>




<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-6 max-w-6xl mx-auto">
    @foreach ($comics as $comic)
    <div class="bg-white rounded-lg shadow-md p-4">
        @if ($comic->image)
            <img src="{{ asset($comic->image) }}" alt="{{ $comic->title }}" class="w-full object-cover rounded-md mb-4">
        @endif
        <h2 class="text-xl font-semibold text-gray-800">{{ $comic->title }} #{{ $comic->number }}</h2>
        <p class="text-sm text-gray-600 font-semibold">{{ $comic->release_date }}</p>
        <p class="text-sm text-gray-600 font-semibold">{{ $comic->category->name }}</p>

        <div class="flex justify-content mt-4">
            <a href="{{ url('comics/' . $comic->id . '/edit') }}" class="text-white bg-blue-500 hover:bg-yellow-600 font-medium rounded px-3 py-1 mr-4 text-sm">Editar</a>
            <form action="{{ url('comics/' . $comic->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir esta HQ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-white bg-red-600 hover:bg-red-700 font-medium rounded px-3 py-1 text-sm">Excluir</button>
            </form>
        </div>
    </div>
    @endforeach
</div>

@if ($comics->isEmpty())
    <p class="text-center text-white mt-10">Nenhuma HQ cadastrada.</p>
@endif

</body>
@endsection