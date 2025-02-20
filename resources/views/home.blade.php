{{-- <!DOCTYPE html>
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
</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramad-On Platform</title>
    <script src="https://unpkg.com/gsap@3.12.2/dist/gsap.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .scale-hover {
            transition: transform 0.2s ease;
        }

        .scale-hover:hover {
            transform: scale(1.02);
        }

        .nav-item {
            position: relative;
        }

        .nav-item::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -4px;
            left: 0;
            background-color: white;
            transition: width 0.3s ease;
        }

        .nav-item:hover::after {
            width: 100%;
        }

        .recipe-card {
            opacity: 0;
            transform: translateY(20px);
        }
    </style>
</head>

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-emerald-600 text-white p-4 opacity-0" id="navbar">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="text-2xl font-bold">🌙 Ramad-On</div>
            </div>
            <div class="flex space-x-6">
                <a href="#" class="nav-item hover:text-gray-200">Home</a>
                <a href="#" class="nav-item hover:text-gray-200">Experiences</a>
                <a href="#" class="nav-item hover:text-gray-200">Recipes</a>
                <a href="#" class="nav-item hover:text-gray-200">Profile</a>
            </div>
        </div>
    </nav>

    <!-- Share Section -->
    <form class="container mx-auto mt-6 px-4">
        <div class="bg-white rounded-lg shadow p-6 opacity-0" id="shareSection">
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
                    <input type="file" name="image" id="image" accept="image/*" class="hidden">
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
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Platform Statistics</h2>
                    <div class="flex items-center space-x-4">
                        <div class="bg-emerald-100 p-4 rounded-full">
                            <svg class="w-6 h-6 text-emerald-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500">Total Posts</p>
                            <p class="text-3xl font-bold text-gray-800" id="counter">0</p>
                        </div>
                    </div>
                </div>

                <!-- Popular Recipes Card -->
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
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', () => {
                // Initial animations
                gsap.to('#navbar', {
                    opacity: 1,
                    duration: 1,
                    ease: 'power2.out'
                });

                gsap.to('#shareSection', {
                    opacity: 1,
                    y: 0,
                    duration: 1,
                    delay: 0.3,
                    ease: 'power2.out'
                });

                gsap.to('#statsCard', {
                    opacity: 1,
                    duration: 1,
                    delay: 0.6,
                    ease: 'power2.out'
                });

                gsap.to('#recipesCard', {
                    opacity: 1,
                    duration: 1,
                    delay: 0.6,
                    ease: 'power2.out'
                });

                // Animate recipe cards
                gsap.to('.recipe-card', {
                    opacity: 1,
                    y: 0,
                    duration: 0.8,
                    stagger: 0.2,
                    delay: 1,
                    ease: 'power2.out'
                });

                // Counter animation
                gsap.to('#counter', {
                    innerHTML: 2847,
                    duration: 2,
                    delay: 1,
                    snap: {
                        innerHTML: 1
                    },
                    ease: 'power1.out'
                });

                // Hover animations for recipe cards
                document.querySelectorAll('.recipe-card').forEach(card => {
                    card.addEventListener('mouseenter', () => {
                        gsap.to(card, {
                            backgroundColor: '#f8fafc',
                            duration: 0.3
                        });
                    });

                    card.addEventListener('mouseleave', () => {
                        gsap.to(card, {
                            backgroundColor: '#f9fafb',
                            duration: 0.3
                        });
                    });
                });
            });
        </script>
</body>

</html>
