@include('layouts.navbar')

<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Publication Header -->
        <div class="p-6 border-b border-gray-100">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img src="/api/placeholder/48/48" alt="User Avatar" class="rounded-full">
                    <div>
                        {{-- <h2 class="text-lg font-semibold text-gray-900">{{ $publication->user->name }}</h2> --}}
                        <p class="text-sm text-gray-500">Posted on {{ $publication->created_at->format('M d, Y') }} • {{ $publication->created_at->diffForHumans() }}</p>
                    </div>
                </div>
                <!-- Action Menu -->
                <div class="relative">
                    <button class="p-2 hover:bg-gray-100 rounded-full">
                        <svg class="w-5 h-5 text-gray-500" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Publication Content -->
        <div class="p-6">
            <!-- Title -->
            <h1 class="text-2xl font-bold text-gray-900 mb-4">{{ $publication->title }}</h1>

            <!-- Description -->
            <p class="text-gray-700 text-lg mb-6">
                {{ $publication->description }}
            </p>

            <!-- Image -->
            @if ($publication->image_url)
            <div class="mb-6">
                <img src="{{ asset('storage/' . $publication->image_url) }}" alt="Publication Image" class="w-full h-auto rounded-lg">
            </div>
            @endif

            <!-- Comments Section -->
            <div class="border-t border-gray-100 pt-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Comments</h3>

                <!-- Comment Input -->
                <div class="flex items-start space-x-4 mb-6">
                    <img src="/api/placeholder/40/40" alt="User Avatar" class="rounded-full">
                    <div class="flex-1">
                        <textarea placeholder="Add a comment..." class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 resize-none"></textarea>
                        <button class="mt-2 px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors duration-300">
                            Post Comment
                        </button>
                    </div>
                </div>

                <!-- Comment List -->
                <div class="space-y-6">
                    <!-- Single Comment -->
                    <div class="flex items-start space-x-4">
                        <img src="/api/placeholder/40/40" alt="Commenter Avatar" class="rounded-full">
                        <div>
                            <div class="flex items-center space-x-2">
                                <span class="font-semibold text-gray-900">Fatima Omar</span>
                                <span class="text-sm text-gray-500">1 hour ago</span>
                            </div>
                            <p class="text-gray-700 mt-1">MashaAllah! This looks amazing. Thank you for sharing the recipe!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
