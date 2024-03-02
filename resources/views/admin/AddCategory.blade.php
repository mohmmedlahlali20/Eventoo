<x-admin-layout>
   
    <div class="container mx-auto p-8 bg-white rounded shadow mt-6 ">

        <h1 class="text-2xl font-bold mb-6">Create Category</h1>

        <form action="{{ route('admin.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="titre" class="block text-gray-600 text-sm font-semibold mb-2">Name Category</label>
                <input type="text" name="category_name" id="titre"
                    class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500" >
            </div>
            <div class="mb-6">
                <button type="submit"
                    class="bg-blue-500 text-white p-2 rounded hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">Create
                    New category</button>
            </div>

        </form>
    </div>

</x-admin-layout>