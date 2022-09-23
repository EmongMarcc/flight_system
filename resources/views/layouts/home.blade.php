<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    </head>
    <body class="antialiased">
        <div class="relative items-top min-h-screen bg-gradient-to-b from-gray-900 via-purple-900 to-violet-600 sm:items-center py-4 sm:pt-0">
            <div>
                <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                    <picture>
                      <source type="image/avif" srcset="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1648645902/green_emzyji.avif">
                      <img class="h-16 w-auto text-gray-700 sm:h-20" src="https://res.cloudinary.com/greenappletravel-ae/image/upload/v1633508229/greenapple/green-apple-travel-tourism-dubai-mob_mwbbld.png" alt="Green Apple Travel &amp; Tourism">
                    </picture>
                </div>
                <div>
                  @yield('content')
                  <footer class="relative pt-8 pb-6 mt-8">
                    <div class="container mx-auto px-4">
                      <div class="flex flex-wrap items-center md:justify-between justify-center">
                        <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                          <div class="text-sm text-white font-semibold py-1">
                            ©Copyright 2022 Green Apple Travel & Tourism All Rights Reserved.
                          </div>
                        </div>
                      </div>
                    </div>
                  </footer>
                </div>
            </div>
        </div>
            @livewireScripts
        <script src="{{ mix('js/app.js') }}" ></script>

    </body>

</html>
