<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>
            {{config('app.name')}}
        </title>

        {{-- <link rel="stylesheet" href="/css/app.css"> --}}
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
        <script src="https://cdn.tailwindcss.com"></script>
        <style>
            * {
            font-family: 'Montserrat', sans-serif;
            }

            h1 {
            font-family: 'Montserrat', sans-serif;
            }

            nav {
            letter-spacing: 0px;
            }
            /* body {
                background-image: url('/img/backgound-index.jpg')
            } */
        </style>
    </head>

    <body class="bg-gray-90 text-black relative">
        <header class="">
            <nav class="container mx-auto flex items-center justify-between md:px-4 md:py-4">
                <div class="flex items-center">
                    <a href="/" class="w-32">
                        <img src="/img/happyice-logo.png" alt="happyice" class="w-32 flex-none">
                    </a>
                    <ul class="flex ml-16 space-x-5">
                        <li>
                            <a href="/ice-cream-vending-machine" class="flex px-5 py-3 rounded-lg transition delay-150 bg-white-300 hover:bg-gray-200 hover:ease-in-out">
                                Ice Cream Vending Machine
                            </a>
                        </li>
                        <li>
                            <button class="flex px-5 py-3 rounded-lg transition delay-150 bg-white-300 hover:bg-gray-200 hover:ease-in-out">
                                Invest in Vending Machine Trusts
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="flex items-center">
                    <button class="rounded-lg transition delay-150 bg-white-300 hover:bg-gray-200 hover:ease-in-out">
                        Menu
                    </button>
                </div>
            </nav>
        </header>
        <main class="container py-5">
            @yield('content')
        </main>
        <footer class="container mx-auto flex items-center justify-center px-4 py-10">
            <div class="flex flex-col">
                <ul class="flex space-x-6">
                    <li>
                        <a href="https://happyice.com.sg/" target="_blank">
                            Powered by Happy Ice
                        </a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/happyicesg/" target="_blank">
                            <svg
                            class="w-6 h-6 text-blue-600 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 24 24">
                            <path
                            d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                            />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/happyicesg/" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-blue-600 fill-current" viewBox="0 0 45 45" width="144px" height="144px"><radialGradient id="yOrnnhliCrdS2gy~4tD8ma" cx="19.38" cy="42.035" r="44.899" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#fd5"/><stop offset=".328" stop-color="#ff543f"/><stop offset=".348" stop-color="#fc5245"/><stop offset=".504" stop-color="#e64771"/><stop offset=".643" stop-color="#d53e91"/><stop offset=".761" stop-color="#cc39a4"/><stop offset=".841" stop-color="#c837ab"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8ma)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><radialGradient id="yOrnnhliCrdS2gy~4tD8mb" cx="11.786" cy="5.54" r="29.813" gradientTransform="matrix(1 0 0 .6663 0 1.849)" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#4168c9"/><stop offset=".999" stop-color="#4168c9" stop-opacity="0"/></radialGradient><path fill="url(#yOrnnhliCrdS2gy~4tD8mb)" d="M34.017,41.99l-20,0.019c-4.4,0.004-8.003-3.592-8.008-7.992l-0.019-20	c-0.004-4.4,3.592-8.003,7.992-8.008l20-0.019c4.4-0.004,8.003,3.592,8.008,7.992l0.019,20	C42.014,38.383,38.417,41.986,34.017,41.99z"/><path fill="#fff" d="M24,31c-3.859,0-7-3.14-7-7s3.141-7,7-7s7,3.14,7,7S27.859,31,24,31z M24,19c-2.757,0-5,2.243-5,5	s2.243,5,5,5s5-2.243,5-5S26.757,19,24,19z"/><circle cx="31.5" cy="16.5" r="1.5" fill="#fff"/><path fill="#fff" d="M30,37H18c-3.859,0-7-3.14-7-7V18c0-3.86,3.141-7,7-7h12c3.859,0,7,3.14,7,7v12	C37,33.86,33.859,37,30,37z M18,13c-2.757,0-5,2.243-5,5v12c0,2.757,2.243,5,5,5h12c2.757,0,5-2.243,5-5V18c0-2.757-2.243-5-5-5H18z"/></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://wa.me/6565631692?text=I'm%20interested%20in%20Ice%20Cream%20Vending%20Machine" target="_blank">
                            <svg
                            class="w-6 h-6 text-green-400 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 448 512">
                            <path
                            d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"
                            ></path>
                        </svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://goo.gl/maps/DjYJDPWoon6Xmi9m6" target="_blank">
                            <svg
                            class="w-6 h-6 text-green-400 fill-current"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 48 48" width="48px" height="48px"><path fill="#48b564" d="M35.76,26.36h0.01c0,0-3.77,5.53-6.94,9.64c-2.74,3.55-3.54,6.59-3.77,8.06	C24.97,44.6,24.53,45,24,45s-0.97-0.4-1.06-0.94c-0.23-1.47-1.03-4.51-3.77-8.06c-0.42-0.55-0.85-1.12-1.28-1.7L28.24,22l8.33-9.88	C37.49,14.05,38,16.21,38,18.5C38,21.4,37.17,24.09,35.76,26.36z"/><path fill="#fcc60e" d="M28.24,22L17.89,34.3c-2.82-3.78-5.66-7.94-5.66-7.94h0.01c-0.3-0.48-0.57-0.97-0.8-1.48L19.76,15	c-0.79,0.95-1.26,2.17-1.26,3.5c0,3.04,2.46,5.5,5.5,5.5C25.71,24,27.24,23.22,28.24,22z"/><path fill="#2c85eb" d="M28.4,4.74l-8.57,10.18L13.27,9.2C15.83,6.02,19.69,4,24,4C25.54,4,27.02,4.26,28.4,4.74z"/><path fill="#ed5748" d="M19.83,14.92L19.76,15l-8.32,9.88C10.52,22.95,10,20.79,10,18.5c0-3.54,1.23-6.79,3.27-9.3	L19.83,14.92z"/><path fill="#5695f6" d="M28.24,22c0.79-0.95,1.26-2.17,1.26-3.5c0-3.04-2.46-5.5-5.5-5.5c-1.71,0-3.24,0.78-4.24,2L28.4,4.74	c3.59,1.22,6.53,3.91,8.17,7.38L28.24,22z"/></svg>
                        </a>
                    </li>
                </ul>
                <div class="flex flex-col text-center p-5 mb-10 leading-normal">
                    <h6 class="text-2xl font-bold">
                        Happy Ice Pte Ltd
                    </h6>
                    <div class="flex items-start justify-center text-center pt-2">
                            Blk 2021, #01-198, <br>
                            Bukit Batok St 23, <br>
                            Singapore 659526
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>