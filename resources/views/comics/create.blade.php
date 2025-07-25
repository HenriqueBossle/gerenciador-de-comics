@extends('layouts.base')
@section('content')
<body>
  
<nav class="bg-white border-gray-200 dark:bg-gray-900 mb-4">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
    
      <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">HQ HERO</span>
  </a>
  <div class="flex items-center justify-between w-full md:w-auto space-x-6">

    <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">
      <div class="relative mt-3 md:hidden">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
          </svg>
        </div>
        <input type="text" id="search-navbar" class="block w-full p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search...">
      </div>
      <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="{{ url("/") }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Tela inicial</a>
        </li>
        <li>
          <a href="{{ url("comics") }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Ver HQs</a>
        </li>
        <li>
          <a href="{{ url("comics/create") }}" class="block py-2 px-3 text-blue-700 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ADICIONAR HQ</a>
        </li>
        <li>
          <a href="{{ url("categories/") }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Ver categorias</a>
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

<form class="max-w-sm mx-auto" action="{{ url('comics') }}" method="POST" enctype="multipart/form-data">
  @csrf
  <div>
      <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Título</label>
      <input type="text" name="title" id="title" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div>
      <label for="number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Número</label>
      <input type="text" name="number" id="number" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
  </div>
  <div>
      <label for="release_date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white mt-4">Data de publicação original</label>
      <input type="text" name="release_date" id="small-input" class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
        <input id="image" name="image" type="file" class="hidden" accept="image/*" />
      </label>
    </div> 
  </div>

  <button type="submit" class="mt-5 focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 border-green-900 border-solid border-2 dark:hover:bg-green-700 dark:focus:ring-green-800">Adicionar HQ</button>
  
</form>
</body>


@endsection