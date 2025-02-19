<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramad-On - Recipes Collection</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-emerald-600 text-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-moon text-2xl"></i>
                    <span class="text-2xl font-bold">Ramad-On</span>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="#" class="hover:text-emerald-200">Home</a>
                    <a href="#" class="hover:text-emerald-200">Experiences</a>
                    <a href="#" class="text-emerald-200">Recipes</a>
                    <a href="#" class="hover:text-emerald-200">Profile</a>
                </div>
                <button class="md:hidden">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <!-- Page Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold mb-4">Ramadan Recipes</h1>
            <p class="text-gray-600">Discover and share delicious recipes for Iftar and Suhoor</p>
        </div>

        <!-- Search and Filters -->
        <div class="mb-8 space-y-4">
            <!-- Search Bar -->
            {{-- <div class="relative">
                <input type="text"
                       placeholder="Search recipes..."
                       class="w-full p-4 pl-12 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                <i class="fas fa-search absolute left-4 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
            </div> --}}

            <!-- Filter Pills -->
            <div class="flex flex-wrap gap-2">
                <button class="px-4 py-2 bg-emerald-600 text-white rounded-full">All Recipes</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Iftar</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Suhoor</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Main Dishes</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Soups</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Desserts</button>
            </div>
        </div>

        <!-- Recipe Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Recipe Card 1 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="/api/placeholder/400/250" alt="Moroccan Harira" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-sm">Iftar</span>
                        <div class="flex items-center space-x-1 text-amber-400">
                            <i class="fas fa-star"></i>
                            <span class="text-gray-600">4.8</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Moroccan Harira Soup</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">Traditional Moroccan soup perfect for breaking your fast.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/32/32" alt="Chef avatar" class="rounded-full">
                            <span class="text-sm text-gray-600">Fatima Omar</span>
                        </div>
                        <div class="flex items-center space-x-4 text-gray-500">
                            <span class="flex items-center space-x-1">
                                <i class="far fa-heart"></i>
                                <span>245</span>
                            </span>
                            <span class="flex items-center space-x-1">
                                <i class="far fa-comment"></i>
                                <span>56</span>
                            </span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Recipe Card 2 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="/api/placeholder/400/250" alt="Date Smoothie" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-sm">Suhoor</span>
                        <div class="flex items-center space-x-1 text-amber-400">
                            <i class="fas fa-star"></i>
                            <span class="text-gray-600">4.5</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Energy Date Smoothie</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">Nutritious smoothie to start your fasting day right.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/32/32" alt="Chef avatar" class="rounded-full">
                            <span class="text-sm text-gray-600">Ahmed Hassan</span>
                        </div>
                        <div class="flex items-center space-x-4 text-gray-500">
                            <span class="flex items-center space-x-1">
                                <i class="far fa-heart"></i>
                                <span>189</span>
                            </span>
                            <span class="flex items-center space-x-1">
                                <i class="far fa-comment"></i>
                                <span>34</span>
                            </span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Recipe Card 3 -->
            <article class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                <img src="/api/placeholder/400/250" alt="Chicken Biryani" class="w-full h-48 object-cover">
                <div class="p-4">
                    <div class="flex items-center justify-between mb-2">
                        <span class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-sm">Main Dish</span>
                        <div class="flex items-center space-x-1 text-amber-400">
                            <i class="fas fa-star"></i>
                            <span class="text-gray-600">4.9</span>
                        </div>
                    </div>
                    <h3 class="text-xl font-semibold mb-2">Special Chicken Biryani</h3>
                    <p class="text-gray-600 mb-4 line-clamp-2">Aromatic rice dish perfect for a fulfilling iftar.</p>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center space-x-2">
                            <img src="/api/placeholder/32/32" alt="Chef avatar" class="rounded-full">
                            <span class="text-sm text-gray-600">Maryam Ali</span>
                        </div>
                        <div class="flex items-center space-x-4 text-gray-500">
                            <span class="flex items-center space-x-1">
                                <i class="far fa-heart"></i>
                                <span>312</span>
                            </span>
                            <span class="flex items-center space-x-1">
                                <i class="far fa-comment"></i>
                                <span>78</span>
                            </span>
                        </div>
                    </div>
                </div>
            </article>

            <!-- More recipe cards can be added here -->
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-8">
            <button class="px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">
                Load More Recipes
            </button>
        </div>
    </main>
</body>
</html>
