<!DOCTYPE html>
<html>
<head>
    <!-- Set the title of the page to the blog post title -->
    <title>{{ $post->title }}</title> 
</head>
<body>
    <!-- Display the blog post title as a heading -->
    <h1>{{ $post->title }}</h1> 

    <!-- Display the creation date of the blog post, formatted as Month Day, Year -->
    <p>Created: {{ $post->created->format('F j, Y') }}</p>
    
    <!-- Display the content of the blog post -->
    <p>{{ $post->content }}</p> 
</body>
</html>
