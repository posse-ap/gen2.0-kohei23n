<!DOCTYPE html>
<html>
    <head>
    <title>quiz1</title>        
    <style></style>
    </head>
    <body>
        <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <h1><?php echo e($question->id); ?>.この地名は何て読む？</h1>
        <p><?php echo e($question->image); ?></p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        <!-- <h1>１．この地名は何て読む？：高輪</h1>
        <ul>
            <li>こうわ</li>
            <li>たかわ</li>
            <li>たかなわ</li>
        </ul>
        <h1>２．この地名は何て読む？：亀戸</h1>
        <ul>
            <li>かめいど</li>
            <li>かめど</li>
            <li>かめと</li>
        </ul>
        <h1>３．この地名は何て読む？：麹町</h1>
        <ul>
            <li>かゆまち</li>
            <li>おかとまち</li>
            <li>こうじまち</li>
        </ul> -->
    </body>
</html>
<?php /**PATH /work/backend/resources/views/quiz1.blade.php ENDPATH**/ ?>