<!DOCTYPE html>
<html>
<head>
    <!-- Set the title of the page to the blog post title -->
    <title><?php echo e($post->title); ?></title> 
</head>
<body>
    <!-- Display the blog post title as a heading -->
    <h1><?php echo e($post->title); ?></h1> 

    <!-- Display the creation date of the blog post, formatted as Month Day, Year -->
    <p>Created: <?php echo e($post->created->format('F j, Y')); ?></p>
    
    <!-- Display the content of the blog post -->
    <p><?php echo e($post->content); ?></p> 
</body>
</html>
<?php /**PATH C:\Users\cleri\Dropbox\CS22090004416\4. Advanced Web Development with the MERN Stack\L4T09\cool-blog\resources\views/blog/post.blade.php ENDPATH**/ ?>