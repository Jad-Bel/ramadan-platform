@include('layouts.navbar')





<!-- Main Content -->
<main class="container mx-auto px-4 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-3xl font-bold mb-4">Ramadan recettes</h1>
        <p class="text-gray-600">Discover and share delicious recettes for Iftar and Suhoor</p>
    </div>

    <!-- Search and Filters -->
    <div class="mb-8 space-y-4">
        <!-- Search Bar -->
        {{-- <div class="relative">
                <input type="text"
                       placeholder="Search recettes..."
                       class="w-full p-4 pl-12 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div> --}}

        <!-- Filter Pills -->
        {{-- <div class="flex flex-wrap gap-2">
                <button class="px-4 py-2 bg-emerald-600 text-white rounded-full">All recettes</button>
                <button
                    class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Iftar</button>
                <button
                    class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Suhoor</button>
                <button
                    class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Main
                    Dishes</button>
                <button
                    class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Soups</button>
                <button
                    class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Desserts</button>
            </div> --}}

        <div class="mb-8 space-y-4">
            {{-- Dropdown filter --}}
            <form action="{{ route('recettes.index') }}" method="GET">
                <div class="flex items-center gap-4">
                    <select name="categorie_id" onchange="this.form.submit()"
                        class="px-4 py-2 bg-white text-gray-700 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                        <option value="">All Categories</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->categorie_id }}"
                                {{ request('categorie_id') == $category->categorie_id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </form>

            {{-- Filter pills --}}
            <div class="flex flex-wrap gap-2">
                <a href="{{ route('recettes.index') }}"
                    class="px-4 py-2 bg-emerald-600 text-white rounded-full">All recettes</a>
                <a href="{{ route('recettes.index', ['meal_type' => 'iftar']) }}"
                    class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Iftar</a>
                <a href="{{ route('recettes.index', ['meal_type' => 'suhoor']) }}"
                    class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Suhoor</a>
            </div>
        </div>


        <!-- recettes Card  -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach ($recettes as $recette)
                <a href="/recettes/{{ $recette->id_recettes }}"
                    class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ asset('storage/' . $recette->image_url) }}" alt="{{ $recette->title }}"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span
                                class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-sm">{{ $recette->categorie->name ?? 'Uncategorized' }}</span>
                            <div class="flex items-center space-x-1 text-amber-400">
                                <i class="fas fa-star"></i>
                                <span class="text-gray-600">4.8</span> <!-- Static rating for now -->
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $recette->title }}</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">{{ $recette->description }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="/api/placeholder/32/32" alt="Chef avatar" class="rounded-full">
                                <span class="text-sm text-gray-600">{{ $recette->user->name }}</span>
                            </div>
                            <div class="flex items-center space-x-4 text-gray-500">
                                <span class="flex items-center space-x-1">
                                    <i class="far fa-heart"></i>
                                    <span>245</span> <!-- Static likes for now -->
                                </span>
                                <span class="flex items-center space-x-1">
                                    <i class="far fa-comment"></i>
                                    <span>56</span> <!-- Static comments for now -->
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination Links -->
        <div class="space-x-2 mt-12 text-xs">
            {{ $recettes->links() }}
        </div>
</main>

<div class="modalForm fixed inset-0 flex items-center justify-center drop-shadow-xl p-4 hidden">
    <!-- Modal Container -->
    <div class="bg-white rounded-xl shadow-xl w-full max-w-2xl">
        <!-- Modal Header -->
        <div class="bg-emerald-600 text-white px-6 py-4 rounded-t-xl">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-semibold">Share Your recettes</h2>
                <button class="closeModal text-white hover:text-emerald-100">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
        </div>

        <!-- Modal Body -->
        <div class="p-6 max-h-[80vh] overflow-y-auto">
            <form action="{{ route('recettes.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="number" name="user_id" value="1" hidden> <!-- Ensure this exists -->
                {{-- <input type="number" name="categorie_id" value="1" hidden> <!-- Ensure this exists --> --}}

                <!-- recettes Image Upload -->
                {{-- <div class="mb-6">
                        <div
                            class="border-2 border-dashed border-emerald-200 rounded-lg p-8 text-center hover:border-emerald-300 transition-colors">
                            <i class="fas fa-camera text-4xl text-emerald-500 mb-2"></i>
                            <p class="text-gray-600">Upload your dish photo</p>
                            <p class="text-sm text-gray-500 mt-1">Click to upload or drag and drop</p>
                        </div>
                    </div> --}}
                <div class="relative mb-4">
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
                </div>
                <!-- Basic Info Section -->
                <div class="space-y-4 mb-6">
                    <input type="text" name="title" placeholder="recettes Title"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500 text-lg">

                    <div class="grid grid-cols-2 gap-4">
                        <select name="meal_type"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                            <option value="">Select Meal Type</option>
                            <option value="iftar">Iftar</option>
                            <option value="suhoor">Suhoor</option>
                            <option value="other">other</option>
                        </select>

                        <select name="categorie_id"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                            <option value="">Select Category</option>
                            <option value="1">Main Course</option>
                            <option value="2">Soup</option>
                            <option value="3">Appetizer</option>
                            <option value="4">Dessert</option>
                            <option value="5">Drink</option>
                        </select>
                    </div>
                </div>

                <!-- recettes Details -->
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div>
                        <label class="block text-sm text-gray-600 mb-2">Prep Time (mins)</label>
                        <input type="number" placeholder="30" name="prep_time"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 mb-2">Cook Time (mins)</label>
                        <input type="number" placeholder="45" name="cook_time"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                    </div>
                    <div>
                        <label class="block text-sm text-gray-600 mb-2">Servings</label>
                        <input type="number" placeholder="4" name="servings"
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                    </div>
                </div>

                <!-- Ingredients -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-3">Ingredients</h3>
                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <input type="text" placeholder="Ingredient" name="ingredients"
                                class="flex-1 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                        </div>
                    </div>
                </div>

                <!-- Instructions -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-3">Instructions</h3>
                    <div class="space-y-3">
                        <div class="flex gap-3">
                            <textarea placeholder="Enter step instructions..." name="instructions"
                                class="flex-1 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500 min-h-[80px]"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Additional Notes -->
                <div class="mb-6">
                    <h3 class="text-lg font-semibold mb-3">Description</h3>
                    <textarea placeholder="Share any tips, variations, or special notes about your recettes..." name="description"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500 min-h-[100px]"></textarea>
                </div>
                <!-- Modal Footer -->
                <div class="border-t border-gray-200 px-6 py-4">
                    <div class="flex justify-end space-x-3">
                        <button class="closeModel px-6 py-2 rounded-lg border border-gray-300 hover:bg-gray-50">
                            Cancel
                        </button>
                        <button type="submit"
                            class="px-6 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700">
                            Share recettes
                        </button>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

@include('layouts.footer')
