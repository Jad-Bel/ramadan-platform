@foreach ($publications as $entry)
    <p>Title: {{ $entry->title }}</p>
    <p>Description: {{ $entry->description }}</p>
    <p>Image: <img src="{{ $entry->image_url }}" alt="Image"></p>
    <p>Posted by User ID: {{ $entry->user_id }}</p>
    <hr>
@endforeach
