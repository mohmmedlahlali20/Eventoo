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
    $categoryCount = \App\Models\Category::count();
    $eventCount = \App\Models\Evenement::count();
    @endphp

    <ul class="flex flex-col md:grid grid-cols-3 gap-5 text-redis-neutral-800 max-w-2xl mx-auto p-10 mt-10">
        <li
            class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
            <span class="mb-1 text-teal-400 font-display text-5xl">{{ $userCount }}</span>
            Users
        </li>
        <li
            class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
            <span class="mb-1 text-teal-400 font-display text-5xl">{{ $categoryCount }}</span>
            Categories
        </li>
        <li
            class="w-full text-sm font-semibold text-slate-900 p-6 bg-white border border-slate-900/10 bg-clip-padding shadow-md shadow-slate-900/5 rounded-lg flex flex-col justify-center">
            <span class="mb-1 text-teal-400 font-display text-5xl">{{ $eventCount }}</span>
            Events
        </li>
    </ul>
    @endrole


 

</x-app-layout>