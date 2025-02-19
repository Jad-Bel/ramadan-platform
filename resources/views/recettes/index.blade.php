<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramad-On - recettes Collection</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
</head>
<style>
    .recettes-card-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .recettes-card-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }
</style>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-emerald-600 text-white shadow-lg flex items-center">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="flex items-center space-x-2">
                    <i class="fas fa-moon text-2xl"></i>
                    <span class="text-2xl font-bold">Ramad-On</span>
                </div>
                <div class="hidden md:flex space-x-6">
                    <a href="/" class="hover:text-emerald-200">Home</a>
                    <a href="#" class="hover:text-emerald-200">Experiences</a>
                    <a href="#" class="text-emerald-200">recettes</a>
                    <a href="#" class="hover:text-emerald-200">Profile</a>
                </div>
                <div class="text-center ">
                    <button class="px-6 py-3 bg-white text-emerald-600 rounded-lg hover:bg-gray-200 transition-colors">
                        Add New recettes
                    </button>
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
            <div class="flex flex-wrap gap-2">
                <button class="px-4 py-2 bg-emerald-600 text-white rounded-full">All recettes</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Iftar</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Suhoor</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Main Dishes</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Soups</button>
                <button class="px-4 py-2 bg-white text-gray-700 rounded-full border border-gray-300 hover:bg-gray-50">Desserts</button>
            </div>
        </div>

            <!-- recettes Card  -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($recettes as $recettes)
                <a href="/recettes/{{ $recettes->id_recettes }}" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
                    <img src="{{ $recettes->image_url }}" alt="{{ $recettes->title }}" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="px-3 py-1 bg-emerald-100 text-emerald-600 rounded-full text-sm">{{ $recettes->categorie->name ?? 'Uncategorized' }}</span>
                            <div class="flex items-center space-x-1 text-amber-400">
                                <i class="fas fa-star"></i>
                                <span class="text-gray-600">4.8</span> <!-- Static rating for now -->
                            </div>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $recettes->title }}</h3>
                        <p class="text-gray-600 mb-4 line-clamp-2">{{ $recettes->description }}</p>
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-2">
                                <img src="/api/placeholder/32/32" alt="Chef avatar" class="rounded-full">
                                <span class="text-sm text-gray-600">{{ $recettes->user->name }}</span>
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
                </article>
                @endforeach
            </a>

        <!-- Load More Button -->
        <div class="text-center mt-8">
            <button class="px-6 py-3 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors">
                Load More recettes
            </button>
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
                <form>
                    <!-- recettes Image Upload -->
                    <div class="mb-6">
                        <div class="border-2 border-dashed border-emerald-200 rounded-lg p-8 text-center hover:border-emerald-300 transition-colors">
                            <i class="fas fa-camera text-4xl text-emerald-500 mb-2"></i>
                            <p class="text-gray-600">Upload your dish photo</p>
                            <p class="text-sm text-gray-500 mt-1">Click to upload or drag and drop</p>
                        </div>
                    </div>

                    <!-- Basic Info Section -->
                    <div class="space-y-4 mb-6">
                        <input type="text"
                               placeholder="recettes Title"
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500 text-lg">

                        <div class="grid grid-cols-2 gap-4">
                            <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                                <option value="">Select Meal Type</option>
                                <option value="iftar">Iftar</option>
                                <option value="suhoor">Suhoor</option>
                            </select>

                            <select class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                                <option value="">Select Category</option>
                                <option value="main">Main Course</option>
                                <option value="soup">Soup</option>
                                <option value="appetizer">Appetizer</option>
                                <option value="dessert">Dessert</option>
                                <option value="drink">Drink</option>
                            </select>
                        </div>
                    </div>

                    <!-- recettes Details -->
                    <div class="grid grid-cols-3 gap-4 mb-6">
                        <div>
                            <label class="block text-sm text-gray-600 mb-2">Prep Time (mins)</label>
                            <input type="number"
                                   placeholder="30"
                                   class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-600 mb-2">Cook Time (mins)</label>
                            <input type="number"
                                   placeholder="45"
                                   class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                        </div>
                        <div>
                            <label class="block text-sm text-gray-600 mb-2">Servings</label>
                            <input type="number"
                                   placeholder="4"
                                   class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                        </div>
                    </div>

                    <!-- Ingredients -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-3">Ingredients</h3>
                        <div class="space-y-3">
                            <div class="flex gap-3">
                                <input type="text"
                                       placeholder="Ingredient"
                                       class="flex-1 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                                <input type="text"
                                       placeholder="Amount"
                                       class="w-32 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                            </div>
                            <button class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                <i class="fas fa-plus mr-1"></i> Add Another Ingredient
                            </button>
                        </div>
                    </div>

                    <!-- Instructions -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-3">Instructions</h3>
                        <div class="space-y-3">
                            <div class="flex gap-3">
                                <span class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-semibold">1</span>
                                <textarea placeholder="Enter step instructions..."
                                          class="flex-1 px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500 min-h-[80px]"></textarea>
                            </div>
                            <button class="text-emerald-600 hover:text-emerald-700 text-sm font-medium">
                                <i class="fas fa-plus mr-1"></i> Add Another Step
                            </button>
                        </div>
                    </div>

                    <!-- Additional Notes -->
                    <div class="mb-6">
                        <h3 class="text-lg font-semibold mb-3">Additional Notes</h3>
                        <textarea placeholder="Share any tips, variations, or special notes about your recettes..."
                                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500 min-h-[100px]"></textarea>
                    </div>
                </form>
            </div>

            <!-- Modal Footer -->
            <div class="border-t border-gray-200 px-6 py-4">
                <div class="flex justify-end space-x-3">
                    <button class="closeModel px-6 py-2 rounded-lg border border-gray-300 hover:bg-gray-50">
                        Cancel
                    </button>
                    <button class="px-6 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700">
                        Share recettes
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Select elements
        const addrecettesButton = document.querySelector('button.bg-white.text-emerald-600');
        const modal = document.querySelector('.modalForm');
        const closeModalButton = modal.querySelector('button.text-white.hover\\:text-emerald-100');

        // Show modal with GSAP animation
        addrecettesButton.addEventListener('click', () => {
            modal.classList.remove('hidden');
            gsap.fromTo(modal,
                { opacity: 0 },
                { opacity: 1, duration: 0.3 }
            );
            gsap.fromTo(modal.querySelector('.bg-white.rounded-xl.shadow-xl'),
                { y: 50, opacity: 0 },
                { y: 0, opacity: 1, duration: 0.3, ease: 'power2.out' }
            );
        });

        // Hide modal with GSAP animation
        closeModalButton.addEventListener('click', () => {
            gsap.to(modal,
                { opacity: 0, duration: 0.3, onComplete: () => modal.classList.add('hidden') }
            );
        });

        // Optional: Hover effects for recettes cards
        const recettesCards = document.querySelectorAll('.bg-white.rounded-lg.shadow-md');
        recettesCards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                gsap.to(card, { scale: 1.02, duration: 0.3, ease: 'power2.out' });
            });
            card.addEventListener('mouseleave', () => {
                gsap.to(card, { scale: 1, duration: 0.3, ease: 'power2.out' });
            });
        });
    </script>
</body>
</html>
