<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramad-On - Share Your Ramadan Journey</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
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
                    <a href="/" class="hover:text-emerald-200">Home</a>
                    <a href="#" class="hover:text-emerald-200">Experiences</a>
                    <a href="recettes" class="hover:text-emerald-200">Recipes</a>
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
        <!-- Create Post Section -->
        <div class="bg-white rounded-lg shadow-md p-6 mb-8">
            <div class="flex items-center space-x-4 mb-4">
                <img src="/api/placeholder/40/40" class="rounded-full" alt="User avatar">
                <input type="text" placeholder="Share your Ramadan experience..."
                       class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
            </div>
            <div class="flex space-x-4">
                <button class="flex items-center space-x-2 px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700">
                    <i class="fas fa-pencil-alt"></i>
                    <span>Share Experience</span>
                </button>
                <button class="flex items-center space-x-2 px-4 py-2 bg-amber-600 text-white rounded-lg hover:bg-amber-700">
                    <i class="fas fa-utensils"></i>
                    <span>Share Recipe</span>
                </button>
            </div>
        </div>

        <!-- Feed -->
        <div class="space-y-6">
            <!-- Experience Post -->
            <article class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-start justify-between">
                    <div class="flex items-center space-x-3">
                        <img src="/api/placeholder/48/48" class="rounded-full" alt="User avatar">
                        <div>
                            <h3 class="font-semibold">Ahmed Hassan</h3>
                            <p class="text-gray-500 text-sm">2 hours ago</p>
                        </div>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
                <div class="mt-4">
                    <p class="text-gray-700">Alhamdulillah for another blessed day of Ramadan! Today I experienced something amazing during taraweeh prayer...</p>
                    <div class="mt-4 flex space-x-4">
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600">
                            <i class="far fa-heart"></i>
                            <span>24 Likes</span>
                        </button>
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600">
                            <i class="far fa-comment"></i>
                            <span>12 Comments</span>
                        </button>
                    </div>
                </div>
            </article>

            <!-- Recipe Post -->
            <article class="bg-white rounded-lg shadow-md p-6">
                <div class="flex items-start justify-between">
                    <div class="flex items-center space-x-3">
                        <img src="/api/placeholder/48/48" class="rounded-full" alt="User avatar">
                        <div>
                            <h3 class="font-semibold">Fatima Omar</h3>
                            <p class="text-gray-500 text-sm">5 hours ago</p>
                        </div>
                    </div>
                    <button class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-ellipsis-v"></i>
                    </button>
                </div>
                <div class="mt-4">
                    <h4 class="font-semibold text-lg mb-2">Moroccan Harira Soup for Iftar 🥣</h4>
                    <img src="/api/placeholder/600/400" class="rounded-lg w-full object-cover mb-4" alt="Harira Soup">
                    <p class="text-gray-700">Sharing my family's traditional harira recipe - perfect for breaking fast!</p>
                    <div class="mt-4 flex space-x-4">
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600">
                            <i class="far fa-heart"></i>
                            <span>56 Likes</span>
                        </button>
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600">
                            <i class="far fa-comment"></i>
                            <span>18 Comments</span>
                        </button>
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600">
                            <i class="far fa-bookmark"></i>
                            <span>Save Recipe</span>
                        </button>
                    </div>
                </div>
            </article>
        </div>
    </main>
</body>
</html>
