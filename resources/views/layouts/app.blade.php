<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- CDN Tailwindcss --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Alpine JS --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    <title>Front MLtrainings</title>
    @livewireStyles
</head>
<body>
    {{-- Full page --}}
    <div class="h-screen antialiased text-gray-900 bg-stone-100 flex">

      {{-- Menu lateral --}}
      <aside class="flex-shrink-0 px-3 py-4 w-[70px] md:w-[256px] bg-orange-500 flex flex-col transition-all duration-[0.55] shadow-md">

          {{-- Logo --}}
          <div class="p-2 flex items-center gap-3">
            {{-- icone --}}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6.429 9.75L2.25 12l4.179 2.25m0-4.5l5.571 3 5.571-3m-11.142 0L2.25 7.5 12 2.25l9.75 5.25-4.179 2.25m0 0L21.75 12l-4.179 2.25m0 0l4.179 2.25L12 21.75 2.25 16.5l4.179-2.25m11.142 0l-5.571 3-5.571-3" />
            </svg>
            <span class="text-xl font-bold overflow-x-hidden">MLtrainings</span>
          </div>

          {{-- Divisão da logo para o menu --}}
          <hr>

          {{-- Menu --}}
          <nav class="h-full font-medium">
            <ul class="mt-4 space-y-2">
              <li class="overflow-x-hidden">
                  <a href="#" class="p-2 rounded-lg hover:bg-gray-50 hover:text-orange-500 flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                    </svg>
                    <span class="flex-shrink-0">Home</span>
                  </a>
              </li>
              <li class="overflow-x-hidden">
                <a href="#" class="p-2 rounded-lg hover:bg-gray-50 hover:text-orange-500 flex items-center gap-3">
                  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 flex-shrink-0">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                  </svg>
                  <span class="flex-shrink-0">Meus Treinamentos</span>
                </a>
            </li>
            </ul>
          </nav>
      </aside>

      {{-- Área do Header e Main --}}
      <div class="flex-grow flex flex-col h-full overflow-y-auto">
          {{-- Header no topo --}}
          <header class="bg-white shadow h-[72px]">
            <div class="py-2 px-6 flex justify-between items-center">
              {{-- Botão para expandir menu --}}
                <div class="bg-orange-400 p-2 rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M7.5 21L3 16.5m0 0L7.5 12M3 16.5h13.5m0-13.5L21 7.5m0 0L16.5 12M21 7.5H7.5" />
                    </svg>
                </div>
                {{-- Barra de pesquisa --}}
                {{-- <div class="py-2">
                    <input type="text" class="p-2 border border-orange-300 rounded-lg sm:text-md focus:ring-orange-500 focus:border-orange-400">
                </div> --}}
                {{-- Profile menu --}}
                <div x-data="{open:false}" class="relative">
                    <img
                      src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                      x-on:click="open=!open"
                      class="w-10 h-10 rounded-full object-cover cursor-pointer hover:scale-105"
                    />
                    <ul
                      x-show="open"
                      class="absolute right-0 w-48 p-2 bg-white rounded-md shadow-lg top-12 ring-1 ring-black ring-opacity-5 dark:bg-dark focus:outline-none"
                    >
                      <li>
                        <a
                          href="#"
                          class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
                        >
                          Profile
                        </a>
                      </li>
                      <li>
                        <a
                          href="#"
                          class="block px-4 py-2 text-sm text-gray-700 transition-colors hover:bg-gray-100 dark:text-light dark:hover:bg-primary"
                        >
                          Logout
                        </a>
                      </li>
                    </ul>
                </div>
            </div>
          </header>
          <main class="flex-grow px-6 py-8 grid gap-4">
            {{ $slot }}
            {{-- Overview Meus treinamentos e Meus cursos --}}
            <section class="grid grid-cols-2 gap-4 h-96">
                <div class="bg-white rounded-md p-4">
                  <div>
                    <span>Meus Treinamentos</span>

                  </div>
                </div>
                <div class="bg-white rounded-md p-4">
                  <div>
                    <span>Meus Cursos</span>
                  </div>
                </div>
            </section>

            {{-- Próximos eventos --}}
            <section class="grid grid-cols-1 h-96">
              <div class="bg-white rounded-md p-4">
                <span>Próximos eventos</span>
              </div>
            </section>
          </main>
      </div>

    </div>

    @livewireScripts
</body>
</html>
