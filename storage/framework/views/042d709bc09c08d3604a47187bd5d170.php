<!DOCTYPE html>
<html>
<head>
    <!-- Set the title of the page -->
    <title>Cool Blog Homepage</title> 
</head>
<body>
    <h1>Welcome to the homepage of my cool blog!</h1> 
    <ul>
        <!-- Loop through each blog post in the $posts array -->
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
            <li>
                <!-- Create a list item for each blog post -->
                <a href="<?php echo e(url('/blog/' . $post->id)); ?>"><?php echo e($post->title); ?></a>
                <!-- Display a link to the individual blog post using its ID and title -->
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH C:\Users\cleri\Dropbox\CS22090004416\4. Advanced Web Development with the MERN Stack\L4T09\cool-blog\resources\views/home.blade.php ENDPATH**/ ?>