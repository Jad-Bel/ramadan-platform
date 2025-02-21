@include('layouts.navbar')

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

    <!-- Share Section -->
    <form action="{{ route('publication.store') }}" method="POST" enctype="multipart/form-data"
        class="container mx-auto mt-6 px-4 pb-4">
        <input type="number" name="user_id" value="1" hidden> <!-- Ensure this exists -->
        <div class="bg-white rounded-lg shadow p-6 opacity-0" id="shareSection">
            @csrf
            <div class="text-gray-500">Share your blessed moments</div>

            <div class="flex items-start space-x-4 p-4">
                <img src="/placeholder.svg?height=40&width=40" alt="User avatar" class="rounded-full">
            </div>
            <div class="mb-4">
                <input type="text" name="title" placeholder="Post Title"
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 transition-all duration-300"
                    required>
            </div>
            <div class="mb-4">
                <textarea name="description" placeholder="Share your Ramadan experience..."
                    class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 transition-all duration-300 min-h-[120px]"
                    required></textarea>
            </div>
            <div class="mb-6">
                <div class="relative">
                    <input type="file" name="image_url" id="image" accept="image/*" class="hidden">
                    <label for="image"
                        class="flex items-center justify-center w-full p-4 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer hover:border-emerald-500 transition-colors duration-300">
                        <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                                viewBox="0 0 48 48">
                                <path
                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <div class="mt-2 text-sm text-gray-600">
                                Click to upload an image
                            </div>
                        </div>
                    </label>
                    <!-- Image Preview -->
                    <div id="imagePreview" class="mt-2 hidden">
                        <img src="" alt="Preview" class="max-h-48 rounded-lg mx-auto">
                    </div>
                </div>
                <div class="mt-4 flex space-x-4">
                    <button type="submit"
                        class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700 transition-colors duration-300 transform hover:scale-105">
                        Share Experience
                    </button>
                    <a href="/recettes"
                        class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600 transition-colors duration-300 transform hover:scale-105">
                        Share Recipe
                    </a>
                </div>
            </div>
    </form>

    <!-- Statistics Section -->
    <div class="container mx-auto mt-8 px-4">
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Total Posts Card -->
            <div class="bg-white rounded-lg shadow p-6 opacity-0 scale-hover" id="statsCard">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Total Posts</h2>
                <div class="flex items-center space-x-4">
                    <div class="bg-emerald-100 p-4 rounded-full">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <div>
                        {{-- <p class="text-gray-500">Total Posts</p> --}}
                        <p class="text-3xl font-bold text-gray-800" id="counter">{{ $totals->total_publications }}</p>
                    </div>
                </div>

            </div>
            <div class="bg-white rounded-lg shadow p-6 opacity-0 scale-hover" id="statsCard">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Total recettes</h2>
                <div class="flex items-center space-x-4">
                    <div class="bg-emerald-100 p-4 rounded-full">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <div>
                        {{-- <p class="text-gray-500">Total Posts</p> --}}
                        <p class="text-3xl font-bold text-gray-800" id="counter">{{ $totals->total_recipes }}</p>
                    </div>
                </div>

            </div>

            {{-- <!-- Popular Recipes Card -->
            <div class="bg-white rounded-lg shadow p-6 opacity-0" id="recipesCard">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Popular Recipes</h2>
                <div class="space-y-4">
                    <div
                        class="recipe-card flex items-center justify-between p-3 bg-gray-50 rounded-lg scale-hover cursor-pointer">
                        <div>
                            <h3 class="font-medium">Moroccan Harira Soup</h3>
                            <p class="text-sm text-gray-500">by Fatima Omar</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm">856 likes</span>
                            <span class="text-sm text-gray-500">•</span>
                            <span class="text-sm">234 shares</span>
                        </div>
                    </div>
                    <div
                        class="recipe-card flex items-center justify-between p-3 bg-gray-50 rounded-lg scale-hover cursor-pointer">
                        <div>
                            <h3 class="font-medium">Date & Almond Energy Balls</h3>
                            <p class="text-sm text-gray-500">by Ahmed Hassan</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm">742 likes</span>
                            <span class="text-sm text-gray-500">•</span>
                            <span class="text-sm">189 shares</span>
                        </div>
                    </div>
                    <div
                        class="recipe-card flex items-center justify-between p-3 bg-gray-50 rounded-lg scale-hover cursor-pointer">
                        <div>
                            <h3 class="font-medium">Traditional Biryani</h3>
                            <p class="text-sm text-gray-500">by Zainab Ali</p>
                        </div>
                        <div class="flex items-center space-x-2">
                            <span class="text-sm">698 likes</span>
                            <span class="text-sm text-gray-500">•</span>
                            <span class="text-sm">156 shares</span>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    @include('layouts.footer')
