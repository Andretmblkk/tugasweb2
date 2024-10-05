@php
use App\Models\Destination;
$destinations = Destination::all();
@endphp

<x-layout>
    <section class="w-screen mt-16 p-4 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h1 class="text-3xl font-bold text-gray-800 mb-8 text-center">Available Tourist Destinations</h1>
            <div class="flex flex-wrap -mx-4">
                @foreach($destinations as $destination)
                    <div class="w-full lg:w-1/2 px-4 mb-8">
                        <div class="bg-white rounded-lg overflow-hidden shadow-lg">
                            <div class="flex flex-col md:flex-row">
                                <div class="md:w-2/5">
                                    <img class="w-full h-full object-cover" src="{{ Storage::url($destination->image_url) }}" alt="{{ $destination->name }}" />
                                </div>
                                <div class="md:w-3/5 p-6 flex flex-col">
                                    <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $destination->name }}</h2>
                                    <p class="text-sm text-gray-600 mb-4 flex-grow">{{ $destination->description }}</p>
                                    <div class="flex items-center mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <span class="text-sm text-gray-600">{{ $destination->rating }} ({{ $destination->review_count }} reviews)</span>
                                    </div>
                                    <div class="flex items-center justify-between">
                                        <p class="text-2xl font-bold text-gray-800">Rp {{ number_format($destination->price, 0, ',', '.') }}<span class="text-sm font-normal">/person</span></p>
                                        <button class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition-colors">
                                            Book Now
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>