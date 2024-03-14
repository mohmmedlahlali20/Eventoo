<x-User-layout>
    <div class="mx-auto max-w-screen-lg">
        <div class="flex justify-center mt-5 mb-5 text-center ">
            <form action="{{ url('/search') }}" class="max-w-md mx-auto mt-5 mb-5 flex-1 px-2 flex justify-center lg:ml-6 lg:justify-end max-w-lg w-full lg:max-w-xs">
                <div class="flex">
                    <label for="search" class="sr-only">Search</label>
                    <div class="relative text-gray-400 focus-within:text-gray-600">
                        <div class="pointer-events-none absolute inset-y-0 left-0 pl-3 flex items-center">
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input id="search" class="block w-full bg-white py-2 pl-10 pr-3 border border-transparent rounded-md leading-5 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-600 focus:ring-white focus:border-white sm:text-sm" placeholder="Search" type="search" name="query">
                    </div>
                </div>
            </form>
            <form method="get" action="{{ url('/filtrage') }}" class="max-w-sm mx-auto">
                <div class="flex flex-col items-center">
                    <label for="categories" class="mb-2 text-sm font-medium text-black dark:text-black">Filter by category</label>
                    <div class="flex items-center">
                        <select name="category" id="categories" class="form-select">
                            <option value="" selected>Choose a Category</option>
                            @foreach($Categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="ml-4 px-4 py-2 bg-blue-500 text-white rounded-md">Filter</button>
                    </div>
                </div>
            </form>


        </div>
    </div>





    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @forelse($Events as $event)
            @if( $event->validation == 'valid')
            <div class="rounded overflow-hidden shadow-lg flex flex-col">
                <a href="#">{{ $event->created_at }}</a>
                <div class="relative"><a href="#">
                        <img class="w-full" src="{{ asset('storage/' . $event->image) }}" alt="Sunset in the mountains">
                        <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">
                        </div>
                    </a>
                    <a href="{{ route('User.show', $event->id) }}">
                        <div class="text-xs absolute top-0 right-0 bg-indigo-600 px-4 py-2 text-white mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            Show More
                        </div>
                    </a>
                </div>
                <div class="px-6 py-4 mb-auto">
                    <h2 href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                        {{ $event->titre }}</h2>
                    <p class="text-gray-500 text-sm">
                        {{ Str::limit($event->description, 20) }}
                        <p>lieu :  {{ $event->lieu }}</p>
                        <p> date : {{ $event->date }}</p>
                    </p>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex items-center">
                        <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" fill="currentColor">
                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                        </svg>
                        <span class="text-xl font-bold">
                            {{ $event->reservations->count() }}/{{ $event->places_number }}
                        </span>
                    </span>
                    <div class="ml-1 relative group">
                        <div class="relative inline-block text-left">
                            <button onclick="toggleDropdown()" class="btn bg-blue-500 text-white">
                                Actions
                            </button>
                            <div id="dropdownMenu" class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none hidden">
                                <div class="py-1">
                                    <form action="{{ route('reservation.store') }}" method="post" class="block">
                                        @csrf
                                        <input type="hidden" name="id_event" value="{{ $event->id }}">
                                        <button type="submit" class="btn btn-link w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Réserver cet événement
                                        </button>
                                    </form>

                                    @role('Organisateur')
                                    <form action="{{ route('Event.destroy', ['Event' => $event->id]) }}" method="post" class="block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-link w-full text-left px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            Delete
                                        </button>
                                    </form>

                                    <a href="{{ route('Event.edit', ['Event' => $event->id]) }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                        Modifier
                                    </a>
                                    @endrole
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            @else
            <div class="rounded-md bg-red-500 p-4 text-white">
                <p>This event is not valid. Add your custom message here.</p>
            </div>
            @endif
            @empty
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="max-w-4xl mx-auto">
                    <div class="rounded-md bg-yellow-50 p-4">
                        <div class="flex">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-yellow-400" x-description="Heroicon name: solid/exclamation" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <h3 class="text-sm font-medium text-yellow-800">
                                    Attention needed
                                </h3>
                                <div class="mt-2 text-sm text-yellow-700">
                                    <p>
                                        <strong>
                                            <i>
                                                no event exist now
                                            </i>
                                        </strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>


</x-User-layout>
