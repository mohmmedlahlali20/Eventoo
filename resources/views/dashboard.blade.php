<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
    @role('admin')
    @php
    $userCount = \App\Models\User::count();
    $activeUserCount = \App\Models\User::where('deleted_at')->count();
    $categoryCount = \App\Models\Category::count();
    $eventCount = \App\Models\Evenement::count();
    $reservationCount = \App\Models\Reservation::count();
    $reservationcout = \App\Models\Reservation::where('deleted_at')->count();
    $unvalidatedEventCount = \App\Models\Evenement::where('validation', false)->count();
    $validatedEventCount = \App\Models\Evenement::where('validation', true)->count();
    @endphp

   
<div class=" h-screen w-screen">
    <div class="grid gap-4 lg:gap-8 md:grid-cols-3 p-8 pt-20">
        <div class="relative p-6 rounded-2xl bg-white shadow ">
            <div class="space-y-2">
                <div
                    class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">
                    <span>Number of Users</span>
                </div>
                <div class="text-3xl">
                    {{ $userCount }}
                </div>
            </div>
        </div>
        <div class="relative p-6 rounded-2xl bg-white shadow ">
            <div class="space-y-2">
                <div
                    class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">
                    <span>Users qui sans suprimer</span>
                </div>
                <div class="text-3xl">
                    {{ $activeUserCount }}
                </div>
            </div>
        </div>
        <div class="relative p-6 rounded-2xl bg-white shadow ">
            <div class="space-y-2">
                <div
                    class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">
                    <span>Number category</span>
                </div>
                <div class="text-3xl">
                    {{ $categoryCount }}
                </div>
            </div>
        </div>
        <div class="relative p-6 rounded-2xl bg-white shadow ">
            <div class="space-y-2">
                <div
                    class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">
                    <span>event exist</span>
                </div>
                <div class="text-3xl">
                    {{ $eventCount }}
                </div>
            </div>
        </div>
        <div class="relative p-6 rounded-2xl bg-white shadow ">
            <div class="space-y-2">
                <div
                    class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">
                    <span>event invalid</span>
                </div>
                <div class="text-3xl">
                    {{ $unvalidatedEventCount }}
                </div>
            </div>
        </div>
        <div class="relative p-6 rounded-2xl bg-white shadow ">
            <div class="space-y-2">
                <div
                    class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">
                    <span>event valider</span>
                </div>
                <div class="text-3xl">
                    {{ $validatedEventCount }}
                </div>
            </div>
        </div>
        <div class="relative p-6 rounded-2xl bg-white shadow ">
            <div class="space-y-2">
                <div
                    class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">
                    <span>Reservation</span>
                </div>
                <div class="text-3xl">
                    {{ $reservationCount }}
                </div>
            </div>
        </div>
        <div class="relative p-6 rounded-2xl bg-white shadow ">
            <div class="space-y-2">
                <div
                    class="flex items-center space-x-2 rtl:space-x-reverse text-sm font-medium text-gray-500 ">
                    <span>cancled Reservation</span>
                </div>
                <div class="text-3xl">
                    {{ $reservationcout }}
                </div>
            </div>
        </div>
    </div>
</div>
    @endrole

</x-app-layout>