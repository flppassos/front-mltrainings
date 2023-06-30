<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CDN Tailwindcss --}}
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Front MLtrainings</title>
    @livewireStyles
</head>
<body>
    {{-- Full page --}}
    <div class="flex h-screen antialiased text-gray-900 bg-gray-100">

        {{-- Menu lateral --}}
        <aside class="flex-shrink-0 hidden md:block w-64">
            <div class="flex flex-col h-full px-3 py-4 bg-orange-500">
              {{-- Logo --}}
              <div class="flex items-center justify-center mb-4 text-white">
                <h1 class="text-xl font-bold">MLtrainings</h1>
              </div>
              {{-- Divisão da logo para o menu --}}
              <hr>
              {{-- menu --}}
                <ul class="mt-4 space-y-2 font-medium">
                   <li>
                      <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                         <span class="ml-3">Home</span>
                      </a>
                   </li>
                   <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                      </svg>
                       <span class="ml-3">Meus Treinamentos</span>
                    </a>
                 </li>
                </ul>
        </aside>

        {{-- Área do Header e Main --}}
        <div class="flex-grow flex flex-col h-full overflow-x-hidden overflow-y-auto">
            {{-- Header no topo --}}
            <header class="top-0 h-16 bg-white block">
              Menu Topo
            </header>
            <main class="flex-grow px-4 py-6">
              {{ $slot }}
            </main>
            <footer class="py-4 bg-white">MLtrainings 2023</footer>
        </div>

    </div>

    @livewireScripts
</body>
</html>
