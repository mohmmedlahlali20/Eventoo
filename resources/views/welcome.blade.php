<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Evento</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        
        <!-- Styles -->
      
    </head>
    <body >
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>

    <div class="container mx-auto p-8" data-aos="fade-up">
        <h1 class="text-3xl font-semibold mb-4">Bienvenue sur le Site de Gestion des Événements</h1>
        <!-- Section des Événements -->
        <section class="mb-8" data-aos="fade-up">
            <h2 class="text-xl font-semibold mb-4">Événements à Venir</h2>
            <!-- Ajoutez vos éléments d'événements ici -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg shadow-md" data-aos="fade-up" data-aos-delay="200">
                    <h3 class="text-lg font-semibold mb-2">Nom de l'Événement</h3>
                    <p>Date: <span class="font-semibold">DD/MM/YYYY</span></p>
                    <p>Heure: <span class="font-semibold">HH:MM</span></p>
                    <p>Lieu: <span class="font-semibold">Lieu de l'événement</span></p>
                    <!-- Ajoutez d'autres détails de l'événement ici -->
                </div>
                <!-- Répétez ces blocs pour chaque événement -->
            </div>
        </section>

        <!-- Section d'Inscription -->
        <section data-aos="fade-up">
            <h2 class="text-xl font-semibold mb-4">Inscrivez-vous à Nos Événements</h2>
            <!-- Ajoutez le formulaire d'inscription ici -->
            <form class="max-w-md">
                <!-- Ajoutez les champs du formulaire ici -->
                <div class="mb-4">
                    <label for="nom" class="block text-sm font-medium text-gray-600">Nom</label>
                    <input type="text" id="nom" name="nom" class="mt-1 p-2 w-full border rounded-md">
                </div>
                <!-- Ajoutez d'autres champs du formulaire ici -->

                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">S'inscrire</button>
            </form>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    </body>
</html>
