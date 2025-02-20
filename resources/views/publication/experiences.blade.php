
@include('layouts.navbar')

<!-- resources/views/publication/index.blade.php -->
<div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-6">Shared Experiences</h1>

    <!-- Publications Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach ($publications as $publication)
        <a href="/publication/{{ $publication->pub_id }}" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow">
            <!-- Publication Image -->
            @if ($publication->image_url)
            <img src="{{ asset('storage/' . $publication->image_url) }}" alt="{{ $publication->title }}" class="w-full h-48 object-cover">
            @else
            <img src="/api/placeholder/400/250" alt="{{ $publication->title }}" class="w-full h-48 object-cover">
            @endif

            <!-- Publication Content -->
            <div class="p-4">
                <!-- Title -->
                <h3 class="text-xl font-semibold mb-2">{{ $publication->title }}</h3>

                <!-- Description -->
                <p class="text-gray-600 mb-4 line-clamp-2">{{ $publication->description }}</p>

                <!-- Author and Timestamp -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-2">
                        <img src="/api/placeholder/32/32" alt="User avatar" class="rounded-full">
                        {{-- <span class="text-sm text-gray-600">{{ $publication->user->name }}</span> --}}
                    </div>
                    <div class="text-sm text-gray-500">
                        {{ $publication->created_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="mt-8">
        {{ $publications->links() }}
    </div>
</div>


@include('layouts.footer')
