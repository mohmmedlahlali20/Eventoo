<x-User-layout>
  @dd($Evenet->titre)
    <div class="container mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-2"></h2>
            <div class="max-w-md w-full bg-white p-8 rounded shadow-md">
                <img class="w-16 h-16 mx-auto mb-4 rounded-full" src="https://placekitten.com/200/200"
                    alt="Profile Picture">
                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{$Evenet["titre"] }}</h2>
                <p class="text-gray-600">{{$Evenet->created_at }}</p>
                <hr class="my-4">
                <p class="text-gray-700">{{$Evenet->description}}</p>
                <div class="mt-4">
                    <p class="text-gray-700">{{$Evenet->category->category_name}}</p>
                </div>
            </div>
        </div>
    </div>
</x-User-layout>