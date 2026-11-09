<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <!-- Default title for all pages -->
    <title>@yield('title', 'Barangay Bulletin – Purok Dimatulac')</title>

    <!-- Load Tailwind CSS and JavaScript using Vite -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navigation bar shared by all pages -->
    <nav class="bg-green-800 text-white p-4">
        <div class="max-w-6xl mx-auto flex justify-between items-center">

            <!-- Website title -->
            <a href="{{ url('/posts') }}"
               class="text-xl font-bold">
                Barangay Bulletin
            </a>

            <!-- Navigation links -->
            <div class="flex gap-4">
                <a href="{{ url('/posts') }}"
                   class="hover:underline">
                    Home
                </a>
            </div>
        </div>
    </nav>

    <!-- Main content changes depending on the page -->
    <main class="max-w-6xl mx-auto w-full p-6 flex-grow">

        @yield('content')

    </main>

    <!-- Footer shared by all pages -->
    <footer class="bg-green-800 text-white text-center p-4">
        <p>
            &copy; {{ date('Y') }}
            Barangay Bulletin – Purok Dimatulac
        </p>
    </footer>

</body>
</html>
