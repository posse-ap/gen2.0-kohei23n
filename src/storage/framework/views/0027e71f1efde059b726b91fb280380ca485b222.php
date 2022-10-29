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
        <form action="" method="post">
        <table>
          <?php echo csrf_field(); ?> 
          <input type="hidden" name="id" value="<?php echo e($big_question->id); ?>">
          <tr>
            <th>タイトル：</th>
            <td><?php echo e($big_question->name); ?></td>
          </tr>
          <tr>
            <th></th>
            <td><input type="submit" value="削除"></td>
          </tr>
        </table>
        </form>
      <?php $__env->stopSection(); ?> 


    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/admin/big_questions/delete.blade.php ENDPATH**/ ?>