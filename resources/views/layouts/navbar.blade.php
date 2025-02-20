@include('layouts.header')

<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-emerald-600 text-white p-4 opacity-0" id="navbar">
        <div class="container mx-auto flex justify-between items-center">
            <div class="flex items-center space-x-2">
                <div class="text-2xl font-bold">🌙 Ramad-On</div>
            </div>
            <div class="flex space-x-6">
                <a href="{{ route('publication.index') }}"
                   class="nav-item hover:text-gray-200">
                    Home
                </a>
                <a href="{{ route('publication.Experiences') }}"
                   class="nav-item hover:text-gray-200">
                    Experiences
                </a>
                <a href="{{ route('recettes.index') }}"
                   class="nav-item hover:text-gray-200">
                    Recipes
                </a>
                <a href="#" class="nav-item hover:text-gray-200">Profile</a>
            </div>
            <div class="text-center ">
                <button class="px-6 py-3 bg-white text-emerald-600 rounded-lg hover:bg-gray-200 transition-colors">
                    Add New recettes
                </button>
            </div>
        </div>
    </nav>
