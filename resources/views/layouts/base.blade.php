<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="flex flex-col min-h-screen" style="background-image: url('images/backgroudcomic (1).png'); background-size: cover; background-repeat: no-repeat;">
    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-white dark:bg-gray-900 border-t border-gray-200 dark:border-gray-700 mt-5">
  <div class="max-w-screen-xl mx-auto px-4 py-4 sm:px-6 lg:px-8">
    <div class="flex flex-col md:flex-row justify-between items-center space-y-6 md:space-y-0">
      
      <!-- Logo + nome -->
      <div class="flex items-center space-x-2">
        
        <span class="text-lg font-semibold text-gray-900 dark:text-white">HQ HERO</span>
      </div>
      
      <!-- Links rápidos -->
      <div class="flex space-x-6">
        <a href="{{ url('/') }}" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Início</a>
        <a href="{{ url('comics') }}" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Ver HQs</a>
        <a href="{{ url('categories') }}" class="text-gray-600 hover:text-blue-600 dark:text-gray-300 dark:hover:text-blue-400">Categorias</a>
      </div>
      
      <!-- Informações de contato -->
      <div class="text-sm text-gray-500 dark:text-gray-400 text-center md:text-right">
        <p>Email: contato@hqhero.com</p>
        <p>© {{ date('Y') }} HQ HERO. Todos os direitos reservados.</p>
      </div>
    </div>
  </div>
</footer>

</body>
</html>