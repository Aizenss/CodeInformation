<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Code Information</title>
    <link rel="shortcut icon" href="{{ asset('assets/CIcon.png') }}" type="image/x-icon">

    {{-- Tailwind --}}
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- Tailwind --}}

    {{-- Flowbite --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css"  rel="stylesheet" />
    {{-- Flowbite --}}

    {{-- Jquery --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Jquery --}}

    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/05aea6e721.js" crossorigin="anonymous"></script>
    {{-- fontawesome --}}

    {{-- ckeditor --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    {{-- ckeditor --}}

    @yield('css')
    <style>
        .color1 {
            background-color: #2C3333;
        }
        .color2 {
            background-color: #395B64;
        }
        .color3 {
            background-color: #A5C9CA;
        }
        .color4 {
            background-color: #E7F6F2;
        }
        .warning{
            background-color: #FCD34D;
        }
        .danger{
            background-color: #FF5151;
        }
        .info{
            background-color: #22D3EE;
        }
    </style>
</head>
<body>
    <main>
        @yield('content')
    </main>

    {{-- Flowbite --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    {{-- Flowbite --}}

    {{-- Jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    {{-- Jquery --}}

    @yield('scripts')
</body>
</html>