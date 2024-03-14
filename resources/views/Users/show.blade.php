<x-User-layout>
  <div class="mx-auto max-w-screen-lg">

     <div class="rounded overflow-hidden shadow-lg flex flex-col">
                
                <div class="relative flex items-center justify-center">
                    <a href="#">
                        <img class="w-50" src="{{ asset('storage/' . $evenement->image) }}" alt="Sunset in the mountains">
                        <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25">

                           
                        </div>
                    </a>
                    
                </div>
                
                <div class="px-6 py-4 mb-auto">
                    <h2 href="#" class="font-medium text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out inline-block mb-2">
                        titre : {{ $evenement->titre }}</h2>
                        <p class="text-gray-900 text-sm text-bold">
                           status Event  :  {{ $evenement->status }}
                        </p>
                        <br>
                    <p class="text-gray-500 text-sm">
                        description : {{ $evenement->description }}
                    </p>
                    <br>
                    <h5>
                        <a href="#"> date de creation : {{ $evenement->created_at }}</a>
                        <p>lieu :  {{ $evenement->lieu }}</p>
                        <p> date : {{ $evenement->date }}</p>
                        <p class="font-bold text-green-500">category : {{ $evenement->category->category_name }}</p>
                    </h5>
                </div>
                <div class="px-6 py-3 flex flex-row items-center justify-between bg-gray-100">
                    <span class="py-1 text-xs font-regular text-gray-900 mr-1 flex items-center">
                        <svg class="w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" fill="currentColor">
                            <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256 c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128 c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                        </svg>
                        <span class="text-xl font-bold">
                            {{ $evenement->reservations->count() }}/{{ $evenement->places_number }}
                        </span>
                    </span>
                    

                    <span href="#" class="py-1 text-xs font-regular text-gray-900 mr-1 flex flex-row items-center">
                        <span class="ml-1">
                            <form action="{{ route('reservation.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="id_event" value="{{ $evenement->id }}">
                                <button type="submit" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">
                                    <svg class="w-5 h-5 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                                    </svg>
                                    Réserver cet événement
                                </button>
                            </form>
                            @role('Organisateur')
                            <form action="{{ route('Event.destroy', ['Event' => $evenement->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="focus:outline-none text-white bg-red-400 hover:bg-red-500 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-red-900">
                                    <svg class="w-5 h-5 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                    </svg>
                                    Annuler l'événement
                                </button>
                            
                                <a href="{{ route('Event.edit', ['Event' => $evenement->id]) }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                    <svg class="w-5 h-5 inline-block mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2 10l2.586-2.586a1 1 0 011.415 0L10 14.828l7.707-7.707a1 1 0 011.415 0L22 10M5 18v2m14-2v2m-7-2v2"></path>
                                    </svg>
                                    Modifier
                                </a>
                            @endrole
                        </span>
                    </span>
                </div>
            </div>
  </div>
           
</x-User-layout>
