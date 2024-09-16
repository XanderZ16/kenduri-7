<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/images/icon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="/images/icon/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/images/icon/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="apple-touch-icon" href="/images/icon/apple-touch-icon.png" sizes="180x180">
    <title>Kenduri 7 - SMKN 7 Batam</title>

    <style>
        @font-face {
            font-family: 'Montserrat';
            src: url('/fonts/Montserrat-Regular.ttf');
        }

        @font-face {
            font-family: 'Inter';
            src: url('/fonts/Inter_18pt-Regular.ttf');
        }

        @font-face {
            font-family: 'Montaga';
            src: url('/fonts/Montaga-Regular.ttf');
        }

        @font-face {
            font-family: 'Raleway';
            src: url('/fonts/Raleway-Regular.ttf');
        }

        @font-face {
            font-family: 'Poppins';
            src: url('/fonts/poppins-Regular.ttf');
        }

        @font-face {
            font-family: 'Fraunces';
            src: url('/fonts/fraunces_9pt-Regular.ttf');
        }

        @font-face {
            font-family: 'Griffiths';
            src: url('/fonts/griffiths.otf');
        }

        @font-face {
            font-family: 'Candlescript';
            src: url('/fonts/Candlescript Demo Version.otf');
        }

        @font-face {
            font-family: 'Stretch';
            src: url('/fonts/StretchPro.otf');
        }

        @font-face {
            font-family: 'Grifter';
            src: url('/fonts/GRIFTER Bold 700.otf');
        }
    </style>

    <link rel="stylesheet" href="/css/fonts.css">
    <link rel="stylesheet" href="/css/animation.css">
    <link rel="stylesheet" href="/css/build.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black">
    <div class="flex">
        <img src="/images/bg/bg.jpg" alt="bg" class="fixed top-0 left-0 w-screen h-screen -z-10 opacity-40">
        <div class="sticky top-0 flex-col justify-center hidden h-screen pl-12 lg:flex">
            <h1 class="mb-2 text-5xl font-extrabold text-white font-montserrat">SMK Negeri 7</h1>
            <h1 class="mb-6 text-5xl font-extrabold text-white font-montserrat">Batam</h1>
            <a href="https://smknegeri7batam.sch.id" target="_blank"
                class="flex items-center gap-4 px-6 py-2 text-xl font-semibold text-yellow-500 duration-300 border border-yellow-500 rounded-full group w-fit hover:text-white hover:bg-yellow-500 hover:border-white">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                    class="duration-300 fill-yellow-500 size-5 group-hover:fill-white">
                    <path
                        d="M352 256c0 22.2-1.2 43.6-3.3 64l-185.3 0c-2.2-20.4-3.3-41.8-3.3-64s1.2-43.6 3.3-64l185.3 0c2.2 20.4 3.3 41.8 3.3 64zm28.8-64l123.1 0c5.3 20.5 8.1 41.9 8.1 64s-2.8 43.5-8.1 64l-123.1 0c2.1-20.6 3.2-42 3.2-64s-1.1-43.4-3.2-64zm112.6-32l-116.7 0c-10-63.9-29.8-117.4-55.3-151.6c78.3 20.7 142 77.5 171.9 151.6zm-149.1 0l-176.6 0c6.1-36.4 15.5-68.6 27-94.7c10.5-23.6 22.2-40.7 33.5-51.5C239.4 3.2 248.7 0 256 0s16.6 3.2 27.8 13.8c11.3 10.8 23 27.9 33.5 51.5c11.6 26 20.9 58.2 27 94.7zm-209 0L18.6 160C48.6 85.9 112.2 29.1 190.6 8.4C165.1 42.6 145.3 96.1 135.3 160zM8.1 192l123.1 0c-2.1 20.6-3.2 42-3.2 64s1.1 43.4 3.2 64L8.1 320C2.8 299.5 0 278.1 0 256s2.8-43.5 8.1-64zM194.7 446.6c-11.6-26-20.9-58.2-27-94.6l176.6 0c-6.1 36.4-15.5 68.6-27 94.6c-10.5 23.6-22.2 40.7-33.5 51.5C272.6 508.8 263.3 512 256 512s-16.6-3.2-27.8-13.8c-11.3-10.8-23-27.9-33.5-51.5zM135.3 352c10 63.9 29.8 117.4 55.3 151.6C112.2 482.9 48.6 426.1 18.6 352l116.7 0zm358.1 0c-30 74.1-93.6 130.9-171.9 151.6c25.5-34.2 45.2-87.7 55.3-151.6l116.7 0z" />
                </svg>
                Go To Our Web
            </a>
        </div>
        {{ $slot }}
    </div>

    <script src="/js/build.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            window.scrollTo(0, 0);
        });
    </script>
</body>

</html>
