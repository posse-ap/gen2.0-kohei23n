<?php $__env->startSection('title', 'Session'); ?>

<?php $__env->startSection('menubar'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
  セッションページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <p><?php echo e($session_data); ?></p>
  <form action="/hello/session" method="post">
  <?php echo csrf_field(); ?> 
    <input type="text" name="input">
    <input type="submit" value="send">
  </form>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/hello/session.blade.php ENDPATH**/ ?>