<x-User-layout>
    <div class="max-w-2xl mx-auto mt-8">
        @foreach ($reservations as $reservation)
                <div class="bg-white p-6 mb-6 rounded-lg shadow-md">
                    <h2 class="text-2xl font-semibold mb-4">M / Mmd : {{ $reservation->user->name }}</h2>

                    <div class="flex items-center justify-between mb-4">
                        <p class="text-gray-600">Event Title: {{ $reservation->event->titre }}</p>
                        <p class="text-gray-600">Ticket Number: {{ $reservation->ticket_number }}</p>
                    </div>
                    <p class="text-gray-600">Status: {{ $reservation->status }}</p>
                    <div class="my-4">
                        <img src="{{ asset('storage/' . $reservation->event->image) }}" alt="Event Image" class="w-full h-auto">
                    </div>
                </div>
            @role('admin')
            <form method="post" action="{{ route('updateStatus', ['id' => $reservation->id]) }}" class="mt-4">
                @csrf
                @method('put')

                <button type="submit" style="float: right; margin-bottom: 2rem" class="text-white bg-green-500 hover:bg-green-700 px-4 py-2 rounded">
                    valider reservation
                </button>
            </form>
        @endrole
        @endforeach
    </div>
</x-User-layout>
