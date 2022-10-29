<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>クイズ一覧</title>
        <style>
          div {text-align: center}
          a {text-align: center}
          li {margin: 0 auto !important}
        </style>
        <link rel="stylesheet" href="/css/style.css">
    </head>
    <body>
      

      <?php $__env->startSection('content'); ?>
        <ul class="ul">
          <?php $__currentLoopData = $choices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="q"><?php echo e($choice->name); ?></li>
          <div>
            <a href="/admin/choices/edit/<?php echo e($choice->id); ?>">選択肢名を編集</a><br>
            <a href="/admin/choices/delete/<?php echo e($choice->id); ?>">選択肢を削除</a>
          </div>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <div>
          <a href="/admin/choices/<?php echo e($question->id); ?>/add">＋新しい選択肢を追加</a>
          <a href="/admin/small_questions/<?php echo e($question->big_question_id); ?>">設問の一覧に戻る</a>
        </div>
      <?php $__env->stopSection(); ?> 


    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/admin/choices/list.blade.php ENDPATH**/ ?>