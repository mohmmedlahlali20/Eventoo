<x-admin-layout>


<div class="container mx-auto mt-8">
    <h1 class="text-2xl font-bold mb-4">Reservation List</h1>

    @if($reservatio->count() > 0)
        <table class="min-w-full border border-gray-300">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">ID</th>
                    <th class="border border-gray-300 px-4 py-2">User</th>
                    <th class="border border-gray-300 px-4 py-2">Event</th>
                    <th class="border border-gray-300 px-4 py-2">Ticket Number</th>
                    <th class="border border-gray-300 px-4 py-2">Status</th>
                    <th class="border border-gray-300 px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reservatio as $reservation)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $reservation->id }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $reservation->user->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ optional($reservation->event)->titre }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $reservation->ticket_number }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $reservation->status }}</td>
                        <td class="border border-gray-300 px-4 py-2">
                            <form action="{{ route('updateStatus', ['reservation' => $reservation]) }}" method="post">
                                @csrf
                                @method('PUT')
                            
                                @if($reservation->event && $reservation->event->id_organisateur == auth()->user()->id)
                                    <button type="submit">Update Status</button>
                                @else 
                                    <p>You can't do this</p>
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No reservations found.</p>
    @endif
</div>
</x-admin-layout>