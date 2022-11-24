<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/style.css">
        <title>クイズ一覧</title>
    </head>
    <body>
      <?php $__currentLoopData = $bigQuestions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bigQuestion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="big_questions_container">
        <a href="quiz/<?php echo e($bigQuestion->id); ?>"><?php echo e($bigQuestion->name); ?></a>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </body>
</html>
<?php /**PATH /work/backend/resources/views/list.blade.php ENDPATH**/ ?>