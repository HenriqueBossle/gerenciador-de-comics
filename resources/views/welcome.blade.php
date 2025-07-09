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
          <a href="{{ url("/") }}" class="block py-2 px-3 text-blue-700 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">TELA INICIAL</a>
        </li>
        <li>
          <a href="{{ url("comics") }}" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Ver HQs</a>
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

<div class="flex justify-center">
<div class="bg-white/90 rounded-2xl shadow-2xl p-8 max-w-xl text-center">
    <h1 class="text-3xl font-bold text-blue-800 mb-4">Bem-vindo ao HQ HERO!</h1>
    <p class="text-gray-700 mb-2">
      Explore uma vasta coleção de quadrinhos, adicione suas HQs favoritas e descubra novas categorias!
    </p>
    <p class="text-gray-700 mb-2">
      Use o menu de navegação para acessar as diferentes seções do site.
    </p>
    <p class="text-gray-700">
      Divirta-se navegando pelo mundo dos quadrinhos!
    </p>
  </div>
</div>
@endsection