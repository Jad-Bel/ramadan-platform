<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramad-On Platform</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-emerald-600 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="text-2xl font-bold">🌙 Ramad-On</div>
            </div>
            <div class="flex space-x-4">
                <a href="#" class="hover:text-gray-200">Home</a>
                <a href="#" class="hover:text-gray-200">Experiences</a>
                <a href="#" class="hover:text-gray-200">Recipes</a>
                <a href="#" class="hover:text-gray-200">Profile</a>
            </div>
        </div>
    </nav>

    <!-- Share Section -->
    <div class="container mx-auto mt-6 px-4">
        <div class="bg-white rounded-lg shadow p-6">
            <div class="flex items-start space-x-4">
                <img src="/api/placeholder/40/40" alt="User avatar" class="rounded-full">
                <input type="text" placeholder="Share your Ramadan experience..."
                       class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500">
            </div>
            <div class="mt-4 flex space-x-4">
                <button class="bg-emerald-600 text-white px-4 py-2 rounded-lg hover:bg-emerald-700">
                    Share Experience
                </button>
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg hover:bg-orange-600">
                    Share Recipe
                </button>
            </div>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="container mx-auto mt-8 px-4">
        <div class="grid md:grid-cols-2 gap-6">
            <!-- Total Posts Card -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Platform Statistics</h2>
                <div class="flex items-center space-x-4">
                    <div class="bg-emerald-100 p-4 rounded-full">
                        <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                            </path>
                        </svg>
                    </div>
                    <div>
                        <p class="text-gray-500">Total Posts</p>
                        <p class="text-3xl font-bold text-gray-800">2,847</p>
                    </div>
                </div>
            </div>

            <!-- Popular Recipes Card -->
            <div class="bg-white rounded-lg shadow p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4">Popular Recipes</h2>
                <div class="space-y-4">
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
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
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
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
                    <div class="flex items-center justify-between p-3 bg-gray-50 rounded-lg">
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
            </div>
        </div>
    </div>
</body>
</html>
