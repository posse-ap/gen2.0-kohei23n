<?php $__env->startSection('title', 'Add'); ?>

<?php $__env->startSection('menubar'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
  新規作成ページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <form action="/hello/add" method="post">
  <table>
    <?php echo csrf_field(); ?> 
    <tr>
      <th>name:</th>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <th>mail:</th>
      <td><input type="text" name="mail"></td>
    </tr>
    <tr>
      <th>age:</th>
      <td><input type="text" name="age"></td>
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
<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/hello/add.blade.php ENDPATH**/ ?>