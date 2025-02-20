<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramad-On - recettes Details</title>
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
                    <a href="/recettes" class="hover:text-emerald-200">recettess</a>
                    <a href="#" class="hover:text-emerald-200">Profile</a>
                </div>
                <button class="md:hidden">
                    <i class="fas fa-bars text-xl"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="container mx-auto px-10 py-8">
        <!-- recettes Card -->
        <article class="bg-white rounded-lg shadow-md overflow-hidden max-w-4xl mx-auto p-4">
            <!-- recettes Header -->
            <img src="{{ $recettes->image_url ?? '/api/placeholder/800/400' }}" alt="{{ $recettes->title }}"
                class="w-full h-64 object-cover">

            <div class="p-6">
                <!-- Author Info -->
                <div class="flex items-center space-x-4 mb-6">
                    <img src="/api/placeholder/48/48" alt="Author avatar" class="rounded-full">
                    <div>
                        <h3 class="font-semibold">{{ $recettes->user->name }}</h3>
                        <p class="text-gray-500 text-sm">Posted {{ $recettes->created_at->diffForHumans() }}</p>
                    </div>
                </div>

                <!-- recettes Title & Description -->
                <h1 class="text-3xl font-bold mb-4">{{ $recettes->title }}</h1>
                <p class="text-gray-700 mb-6">{{ $recettes->description }}</p>

                <!-- recettes Stats -->
                <div class="flex space-x-6 mb-6 text-sm text-gray-500">
                    <div class="flex items-center">
                        <i class="far fa-clock mr-2"></i>
                        <span>Prep: 30 mins</span> <!-- Static for now -->
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-fire mr-2"></i>
                        <span>Cook: 1 hour</span> <!-- Static for now -->
                    </div>
                    <div class="flex items-center">
                        <i class="fas fa-users mr-2"></i>
                        <span>Serves: 6</span> <!-- Static for now -->
                    </div>
                </div>

                <!-- Ingredients -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold mb-4">Ingredients</h2>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach (explode("\n", $recettes->ingredients) as $ingredient)
                            <li class="flex items-center space-x-2">
                                <i class="fas fa-check text-emerald-500"></i>
                                <span>{{ $ingredient }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <!-- Instructions -->
                <div class="mb-8">
                    <h2 class="text-xl font-semibold mb-4">Instructions</h2>
                    <ol class="space-y-4">
                        @foreach (explode("\n", $recettes->instructions) as $index => $instruction)
                            <li class="flex space-x-4">
                                <span
                                    class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 text-emerald-500 flex items-center justify-center font-semibold">{{ $index + 1 }}</span>
                                <p class="text-gray-700">{{ $instruction }}</p>
                            </li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <!-- Instructions -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4">Instructions</h2>
                <ol class="space-y-4">
                    <li class="flex space-x-4">
                        <span
                            class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 text-emerald-500 flex items-center justify-center font-semibold">1</span>
                        <p class="text-gray-700">In a large pot, brown the lamb pieces with onions until golden.</p>
                    </li>
                    <li class="flex space-x-4">
                        <span
                            class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 text-emerald-500 flex items-center justify-center font-semibold">2</span>
                        <p class="text-gray-700">Add lentils and tomatoes, then cover with water. Bring to a boil.</p>
                    </li>
                    <li class="flex space-x-4">
                        <span
                            class="flex-shrink-0 w-8 h-8 rounded-full bg-emerald-100 text-emerald-500 flex items-center justify-center font-semibold">3</span>
                        <p class="text-gray-700">Simmer for 1 hour until meat is tender and lentils are fully cooked.
                        </p>
                    </li>
                </ol>
            </div>

            <!-- Engagement Stats -->
            <div class="flex space-x-6 border-t border-b border-gray-200 py-4 mb-6">
                <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600">
                    <i class="far fa-heart"></i>
                    <span>245 Likes</span>
                </button>
                <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600">
                    <i class="far fa-comment"></i>
                    <span>56 Comments</span>
                </button>
                <button class="flex items-center space-x-2 text-gray-500 hover:text-emerald-600">
                    <i class="far fa-bookmark"></i>
                    <span>Save recettes</span>
                </button>
            </div>

            <!-- Comments Section -->
            <section class="space-y-6">
                <h2 class="text-xl font-semibold">Comments (56)</h2>

                <!-- Comment Input -->
                <div class="flex space-x-4">
                    <img src="/api/placeholder/40/40" alt="Your avatar" class="rounded-full">
                    <div class="flex-1">
                        <input type="text" placeholder="Share your thoughts on this recettes..."
                            class="w-full p-3 rounded-lg border border-gray-300 focus:outline-none focus:border-emerald-500">
                    </div>
                </div>

                <!-- Comments List -->
                <div class="space-y-6">
                    <!-- Comment 1 -->
                    <div class="flex space-x-4">
                        <img src="/api/placeholder/40/40" alt="Commenter avatar" class="rounded-full h-10 w-10">
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-semibold">Sarah Ahmad</h3>
                                    <span class="text-gray-500 text-sm">2 hours ago</span>
                                </div>
                                <p class="text-gray-700">I tried this recettes yesterday for iftar and my family loved it!
                                    I added a bit more cumin than suggested and it worked great.</p>
                            </div>
                            <div class="flex space-x-4 mt-2 text-sm">
                                <button class="text-gray-500 hover:text-emerald-600">Like</button>
                                <button class="text-gray-500 hover:text-emerald-600">Reply</button>
                            </div>
                        </div>
                    </div>

                    <!-- Comment 2 -->
                    <div class="flex space-x-4">
                        <img src="/api/placeholder/40/40" alt="Commenter avatar" class="rounded-full h-10 w-10">
                        <div class="flex-1">
                            <div class="bg-gray-50 rounded-lg p-4">
                                <div class="flex justify-between items-start mb-2">
                                    <h3 class="font-semibold">Mohammed Karim</h3>
                                    <span class="text-gray-500 text-sm">1 day ago</span>
                                </div>
                                <p class="text-gray-700">This reminds me of my grandmother's recettes! Could you share
                                    what spices you use for the authentic Moroccan taste?</p>
                            </div>
                            <div class="flex space-x-4 mt-2 text-sm">
                                <button class="text-gray-500 hover:text-emerald-600">Like</button>
                                <button class="text-gray-500 hover:text-emerald-600">Reply</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            </div>
        </article>
    </main>
</body>

</html>
