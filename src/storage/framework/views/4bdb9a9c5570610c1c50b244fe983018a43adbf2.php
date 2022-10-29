<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>設問追加</title>
        <style>div {text-align: center}</style>
    </head>
    <body>
      

      <?php $__env->startSection('content'); ?>
        <form action="" method="post" enctype="multipart/form-data">
          <?php echo csrf_field(); ?> 
          <input type="file" name="image">
          <input type="submit" value="追加">
        </form>
      <?php $__env->stopSection(); ?> 


    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/admin/small_questions/add.blade.php ENDPATH**/ ?>