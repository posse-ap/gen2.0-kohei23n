<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>クイズ一覧</title>
        <style>
          div {text-align: center}
          a {text-align: center}
        </style>
    </head>
    <body>
      

      <?php $__env->startSection('content'); ?>
        <?php $__currentLoopData = $big_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $big_question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a href="/admin/big_questions/edit/<?php echo e($big_question->id); ?>"><?php echo e($big_question->name); ?></a>
        <div>
          <a href="/admin/big_questions/edit/<?php echo e($big_question->id); ?>">タイトル名を編集</a><br>
          <a href="/admin/big_questions/delete/<?php echo e($big_question->id); ?>">タイトルを削除</a>
        </div>
        <p>-------</p>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div>
          <a href="/admin/big_questions/add">＋新しいタイトルを追加</a>
        </div>
      <?php $__env->stopSection(); ?> 


    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/admin/edit.blade.php ENDPATH**/ ?>