<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Cookentory</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-slate-600 overflow-x-hidden">
    <header class="fixed top-0 left-0    flex items-start w-full border-b">

        <nav class="bg-white flex flex-col px-8  justify-between h-screen max-w-[260px] container">
            <div class="w-full">
                <div class="py-[25px] text-4xl font-sans font-bold">
                    <p>Cookentory</p>
                </div>


                <div class="w-full pt-5">
                    <p>Menu</p>
                    <ul class="mt-2 flex flex-col items-start gap-3">
                        <li class="w-full block"><a
                                class="flex w-full hover:bg-gray-200 px-2 py-2 rounded items-center gap-3" href=""><svg
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                                </svg>
                                Dashboard
                            </a></li>
                        <li class="w-full block"><a
                                class="flex w-full hover:bg-gray-200 px-2 py-2 rounded items-center gap-3" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M6 6.878V6a2.25 2.25 0 0 1 2.25-2.25h7.5A2.25 2.25 0 0 1 18 6v.878m-12 0c.235-.083.487-.128.75-.128h10.5c.263 0 .515.045.75.128m-12 0A2.25 2.25 0 0 0 4.5 9v.878m13.5-3A2.25 2.25 0 0 1 19.5 9v.878m0 0a2.246 2.246 0 0 0-.75-.128H5.25c-.263 0-.515.045-.75.128m15 0A2.25 2.25 0 0 1 21 12v6a2.25 2.25 0 0 1-2.25 2.25H5.25A2.25 2.25 0 0 1 3 18v-6c0-.98.626-1.813 1.5-2.122" />
                                </svg>

                                Inventario
                            </a></li>
                        <li class="w-full block"><a
                                class="flex w-full hover:bg-gray-200 px-2 py-2 rounded items-center gap-3" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 0 0-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 0 0-16.536-1.84M7.5 14.25 5.106 5.272M6 20.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Zm12.75 0a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0Z" />
                                </svg>

                                Pedidos</a></li>
                        <li class="w-full block"><a
                                class="flex w-full hover:bg-gray-200 px-2 py-2 rounded items-center gap-3" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>

                                Clientes</a></li>
                        <li class="w-full block"><a
                                class="flex w-full hover:bg-gray-200 px-2 py-2 rounded items-center gap-3" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 0 0 2.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 0 0-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 0 0 .75-.75 2.25 2.25 0 0 0-.1-.664m-5.8 0A2.251 2.251 0 0 1 13.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25ZM6.75 12h.008v.008H6.75V12Zm0 3h.008v.008H6.75V15Zm0 3h.008v.008H6.75V18Z" />
                                </svg>

                                Informes</a></li>
                        <li class="w-full block"><a
                                class="flex w-full hover:bg-gray-200 px-2 py-2 rounded items-center gap-3" href="">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                </svg>

                                Configuracion</a></li>
                    </ul>
                </div>
            </div>

            <div>
                Cerrar Sesion
            </div>
        </nav>

        <div class="flex items-center w-full bg-white mx-auto justify-between px-8 py-[25px]">
            <!-- Título -->
            <div class="flex-grow">
                <h1 class="text-2xl font-semibold  font-sans">Dashboard</h1>
            </div>

            <!-- Buscador -->
            <!-- <div class="w-[100%]">
                <form action="#" class="flex mx-auto items-center max-w-[400px] border rounded-md border-gray-600/20">
                    <input type="text" placeholder="Buscar..."
                        class="block focus:outline-none py-2 rounded-tl-md rounded-bl-md text-lg w-full pl-1">
                    <button type="submit" class="bg-blue-500 py-2 px-2 rounded-r-md">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-7 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </form>
            </div> -->

            <!-- Notificaciones y Usuario -->
            <div class="flex items-center gap-10">
                <!-- Notificaciones -->
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                    </svg>
                </div>

                <!-- Usuario -->
                <div class="w-12 h-12 overflow-hidden">
                    <img class="w-full h-full" src="{{ asset('img/images.png') }}" alt="">
                </div>
            </div>
        </div>
    </header>


    <!-- Contenedor principal centrado -->
    <main class="flex-1  max-w-[1200px] pl-[295px] mt-[120px] px-8 py-8">

        <section class="w-full flex items-center justify-center">
            <div class=" w-full">
                <ul class=" w-full flex items-start justify-between gap-3">

                  
                <!-- box -->

                <li class="bg-white px-7 py-6 flex items-center  container justify-start rounded">
                     

                     <div class="flex w-full items-center gap-5">
                     <div class="flex items-center justify-center border-[1px] border-blue-500 bg-blue-400/20  rounded-full px-3 py-3"> 
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-blue-400 size-10">
                      <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                     <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
                 </svg>
                  </div>
                     <div class="pr-4 text-center">
                     <p class="text-[1.3rem]">Ingresos totales</p>
                         <div class="mt-3">
                         <p class="text-3xl font-bold">$15,231.90</p>
                         <p class="text-[17x] mt-4 text-green-600 border-[1px] py-0.5 border-green-500 text-center block  rounded-full bg-green-500/10">+21% Aumento</p>
                     </div>
                     </div>

                     </div>

                     
                 </li>


                 <li class="bg-white px-7 py-6 flex items-center  container justify-start rounded">
                     

                     <div class="flex w-full items-center gap-5">
                     <div class="flex items-center justify-center border-[1px] border-blue-500 bg-blue-400/20  rounded-full px-3 py-3"> 
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-blue-400 size-10">
                     <path d="M2.25 2.25a.75.75 0 0 0 0 1.5h1.386c.17 0 .318.114.362.278l2.558 9.592a3.752 3.752 0 0 0-2.806 3.63c0 .414.336.75.75.75h15.75a.75.75 0 0 0 0-1.5H5.378A2.25 2.25 0 0 1 7.5 15h11.218a.75.75 0 0 0 .674-.421 60.358 60.358 0 0 0 2.96-7.228.75.75 0 0 0-.525-.965A60.864 60.864 0 0 0 5.68 4.509l-.232-.867A1.875 1.875 0 0 0 3.636 2.25H2.25ZM3.75 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0ZM16.5 20.25a1.5 1.5 0 1 1 3 0 1.5 1.5 0 0 1-3 0Z" />
                    </svg>

                  </div>
                     <div class="pr-4 text-center">
                     <p class="text-[1.3rem]">Pedidos</p>
                         <div class="mt-3">
                         <p class="text-3xl font-bold">$15,231.90</p>
                         <p class="text-[17x] mt-4 text-green-600 border-[1px] py-0.5 border-green-500 text-center block  rounded-full bg-green-500/10">+21% Aumento</p>
                     </div>
                     </div>

                     </div>

                     
                 </li>

                 <li class="bg-white px-7 py-6 flex items-center  container justify-start rounded">
                     

                     <div class="flex w-full items-center gap-5">
                     <div class="flex items-center justify-center border-[1px] border-blue-500 bg-blue-400/20  rounded-full px-3 py-3"> 
                     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-blue-400 size-10">
                    <path d="M5.566 4.657A4.505 4.505 0 0 1 6.75 4.5h10.5c.41 0 .806.055 1.183.157A3 3 0 0 0 15.75 3h-7.5a3 3 0 0 0-2.684 1.657ZM2.25 12a3 3 0 0 1 3-3h13.5a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5.25a3 3 0 0 1-3-3v-6ZM5.25 7.5c-.41 0-.806.055-1.184.157A3 3 0 0 1 6.75 6h10.5a3 3 0 0 1 2.683 1.657A4.505 4.505 0 0 0 18.75 7.5H5.25Z" />
                    </svg>

                  </div>
                     <div class="pr-4 text-center">
                     <p class="text-[1.3rem]">Productos</p>
                         <div class="mt-3">
                         <p class="text-3xl font-bold">$15,231.90</p>
                         <p class="text-[17x] mt-4 text-green-600 border-[1px] py-0.5 border-green-500 text-center block  rounded-full bg-green-500/10">+21% Aumento</p>
                     </div>
                     </div>

                     </div>

                     
                 </li>

                 <li class="bg-white px-7 py-6 flex items-center  container justify-start rounded">
                     

                     <div class="flex w-full items-center gap-5">
                     <div class="flex items-center justify-center border-[1px] border-blue-500 bg-blue-400/20  rounded-full px-3 py-3"> 
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="text-blue-400 size-10">
                      <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
                     <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
                 </svg>
                  </div>
                     <div class="pr-4 text-center">
                     <p class="text-[1.3rem]">Ingresos totales</p>
                         <div class="mt-3">
                         <p class="text-3xl font-bold">$15,231.90</p>
                         <p class="text-[17x] mt-4 text-green-600 border-[1px] py-0.5 border-green-500 text-center block  rounded-full bg-green-500/10">+21% Aumento</p>
                     </div>
                     </div>

                     </div>

                     
                 </li>


                 
                    
                  
                   
                </ul>
            </div>
        </section>
    </main>

</body>

</html>