<!DOCTYPE html>
<html>
<head>
    <title>Cool Blog Homepage</title> 
</head>
<body>
    <h1>Welcome to the homepage of my cool blog!</h1> 
    <ul>
        <!-- Loop through each blog post in the $posts array -->
        @foreach ($posts as $post) 
            <li>
                <!-- Create a list item for each blog post -->
                <a href="{{ url('/blog/' . $post->id) }}">{{ $post->title }}</a>
                <!-- Display a link to the individual blog post using its ID and title -->
            </li>
        @endforeach
    </ul>
</body>
</html>
