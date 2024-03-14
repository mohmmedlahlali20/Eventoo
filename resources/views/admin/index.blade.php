<x-admin-layout>
    <div class="text-center">
        <h1 class="text-xl">users</h1>
    </div>
    <div class="mx-auto max-w-screen-lg mt-5">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">ID</th>
                        <th scope="col" class="px-6 py-3">Name</th>
                        <th scope="col" class="px-6 py-3">E-mail</th>
                        <th scope="col" class="px-6 py-3">Providers</th>
                        <th scope="col" class="px-6 py-3">Verification E-mail</th>
                        <th scope="col" class="px-6 py-3">Data De Creation</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>

                <tbody>
                    @forelse ($AllUsers as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <td class="px-6 py-4">{{ $user->id }}</td>
                            <td class="px-6 py-4">{{ $user->name }}</td>
                            <td class="px-6 py-4">{{ $user->email }}</td>
                            <td class="px-6 py-4">
                                @isset($user->providers)
                                    {{ $user->providers }}
                                @else
                                    <span class="text-red-500">No providers available</span>
                                @endisset
                            </td>
                            <td class="px-6 py-4">{{ $user->email_verified_at }}</td>
                            <td class="px-6 py-4">{{ $user->created_at }}</td>
                            <td class="px-6 py-4">
                                <form action="{{ route('admin.destroy', $user->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Deletiha')" class="text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-red-600 dark:hover:bg-red-700 focus:outline-none dark:focus:ring-red-800">
                                      
                                                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" x-description="Heroicon name: solid/trash" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                                </svg>
                                             
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="px-6 py-4">No users</td>
                        </tr>
                    @endforelse
                </tbody>
                {{ $AllUsers->links()}}
            </table>

        </div>

    </div>
</x-admin-layout>
