<!-- resources/views/publication/show.blade.php -->
@include('layouts.navbar')

<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white rounded-xl shadow-lg overflow-hidden">
        <!-- Publication Header -->
        <div class="p-6 border-b border-gray-100">
            <div class="flex items-center justify-between">
                <div class="flex items-center space-x-4">
                    <img src="/api/placeholder/48/48" alt="User Avatar" class="rounded-full">
                    <div>
                        <h2 class="text-lg font-semibold text-gray-900">{{ $publication->user->name }}</h2>
                        <p class="text-sm text-gray-500">Posted on {{ $publication->created_at->format('M d, Y') }} • {{ $publication->created_at->diffForHumans() }}</p>
                    </div>
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
                <form action="{{ route('comment.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="pub_id" value="{{ $publication->pub_id }}">
                    <input type="hidden" name="user_id" value="{{ $publication->user->user_id }}">
                    <div class="flex items-start space-x-4 mb-6">
                        <img src="/api/placeholder/40/40" alt="User Avatar" class="rounded-full">
                        <div class="flex-1">
                            <textarea name="content" placeholder="Add a comment..." class="w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-emerald-500 resize-none" required></textarea>
                            <button type="submit" class="mt-2 px-4 py-2 bg-emerald-600 text-white rounded-lg hover:bg-emerald-700 transition-colors duration-300">
                                Post Comment
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Comment List -->
                <div class="space-y-6">
                    @foreach ($publication->commentaires as $comment)
                    <div class="flex items-start space-x-4">
                        <img src="/api/placeholder/40/40" alt="Commenter Avatar" class="rounded-full">
                        <div>
                            <div class="flex items-center space-x-2">
                                <span class="font-semibold text-gray-900">{{ $comment->user->name }}</span>
                                <span class="text-sm text-gray-500">{{ $comment->created_at->diffForHumans() }}</span>
                            </div>
                            <p class="text-gray-700 mt-1">{{ $comment->content }}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@include('layouts.footer')
