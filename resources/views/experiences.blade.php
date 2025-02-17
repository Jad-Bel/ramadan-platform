@extends('layouts.app')

@section('content')
    <h2>All Experiences</h2>
    {{-- <a href="{{ route('experiences.create') }}" class="btn btn-primary">Add Experience</a> --}}
    <ul>
        {{-- @foreach($experiences as $experience)
            <li>
                <h3>{{ $experience->title }}</h3>
                <p>{{ $experience->content }}</p>
                @if($experience->image)
                    <img src="{{ asset('storage/' . $experience->image) }}" width="200">
                @endif
                <a href="{{ route('experiences.show', $experience) }}">View</a>
                <a href="{{ route('experiences.edit', $experience) }}">Edit</a>
                <form action="{{ route('experiences.destroy', $experience) }}" method="POST">
                    @csrf @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach --}}
    </ul>
    {{-- {{ $experiences->links() }} <!-- Pagination --> --}}
@endsection
