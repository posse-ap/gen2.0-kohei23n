<?php $__env->startSection('title', 'ユーザー認証'); ?>

<?php $__env->startSection('menubar'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
  ユーザー認証ページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<p><?php echo e($message); ?></p>
  <form action="/hello/auth" method="post">
  <table>
    <?php echo csrf_field(); ?> 
    <tr>
      <th>mail:</th>
      <td><input type="text" name="email"></td>
    </tr>
    <tr>
      <th>pass:</th>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
  </table>
  </form>
<?php $__env->stopSection(); ?> 

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/hello/auth.blade.php ENDPATH**/ ?>