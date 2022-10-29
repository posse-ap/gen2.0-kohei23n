<?php $__env->startSection('title', 'Board.Add'); ?>

<?php $__env->startSection('menubar'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
  投稿ページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <form action="/board/add" method="post">
  <table>
  <?php echo csrf_field(); ?> 
    <tr>
      <th>person id:</th>
      <td><input type="number" name="person_id"></td>
    </tr>
    <tr>
      <th>title:</th>
      <td><input type="text" name="title"></td>
    </tr>
    <tr>
      <th>message:</th>
      <td><input type="text" name="message"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
  </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2017 tuyano.
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/board/add.blade.php ENDPATH**/ ?>