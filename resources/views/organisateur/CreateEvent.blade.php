<x-organisateur-layout>
    <div class="container mx-auto p-8 bg-white rounded shadow-lg mt-6">
        <h1 class="text-3xl text-center font-bold mb-6 text-blue-500">Create Event</h1>
        <form  action="{{ route('Event.store') }}" method="post" enctype="multipart/form-data" >
          @csrf
          <div class="grid gap-6 mb-6 md:grid-cols-2">
              <div>
                  <label for="titre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Titre</label>
                  <input type="text" name="titre" id="titre" value="{{ old('titre') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="titre"  />
              </div>
              <div>
                  <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                  <textarea type="text" id="description" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="discripetion" >{{ old('description') }}</textarea>
              </div>
              <div>
                  <label for="Lieu" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Lieu</label>
                  <input type="text" id="Lieu" value="{{ old('lieu') }}" name="lieu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="lieu"  />
              </div>  
              <div>
                  <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date</label>
                  <input type="date" id="date" name="date" value="{{ old('date') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="date"  />
              </div>
        
              <div>
                  <label for="places_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Places Number:</label>
                  <input type="number" name="places_number" value="{{ old('places_number') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="number of place"  />
              </div>
          </div>
          <div class="sm:col-span-6">
            <label for="cover-photo" class="block text-sm font-medium text-gray-700">
              Image Event
            </label>
            <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
              <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                  <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
                <div class="flex text-sm text-gray-600">
                  <label for="file-upload" class="relative cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                    <span>Upload a file</span>
                    <input id="file-upload" name="image" type="file" class="sr-only">
                  </label>
                  <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">
                  PNG, JPG, GIF 
                </p>
              </div>
            </div>
          </div>
          <div class="mb-4">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category:</label>
            <select name="category" id="category" class="form-select text-black w-full px-4 py-2 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-500" >
                @forelse($Categories as $category)
                    <option value="{{ $category->id }}">{{ $category->category_name}}</option>
                @empty
                    <option value="" disabled>No categories available</option>
                @endforelse
            </select>
        </div>
        
        <div class="mb-4">
            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status:</label>
            <select name="status" id="status" class="form-select w-full px-4 py-2 border-2 border-gray-300 rounded focus:outline-none focus:border-blue-500" >
                <option value="available">Available</option>
                <option value="notAvailable">Not Available</option>
            </select>
        </div>
          <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add new Event</button>
        </form>
    </div>
    
</x-organisateur-layout>




