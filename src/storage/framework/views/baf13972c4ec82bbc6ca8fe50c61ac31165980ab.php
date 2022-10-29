<!DOCTYPE html>
<html>
    <head>
        <title>quiz</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
    </head>
    <body>
      

      <?php $__env->startSection('content'); ?>
        <div class="qDiv">
            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1 class="nameunderline">問題：<?php echo e($loop->iteration); ?></h1>
            <img src="/images/<?php echo e($question->image); ?>" alt="">

            
            <div>
              <a href="/admin/edit/<?php echo e($question->id); ?>">設問の選択肢を編集</a><br>
              <a href="/admin/delete/<?php echo e($question->id); ?>">設問を削除</a>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <a href="/admin/add">＋設問を追加</a>
        </div>
      <?php $__env->stopSection(); ?>
    </body>
    <script src="/js/main.js"></script>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/admin/manage.blade.php ENDPATH**/ ?>