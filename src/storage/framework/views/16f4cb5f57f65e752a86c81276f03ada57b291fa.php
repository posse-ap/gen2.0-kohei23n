<?php $__env->startSection('title', 'Person.Add'); ?>

<?php $__env->startSection('menubar'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
  新規作成ページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <?php if(count($errors)>0): ?>
  <div>
    <ul>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <li><?php echo e($error); ?></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <?php endif; ?> 
  <form action="/person/add" method="post">
  <table>
  <?php echo csrf_field(); ?> 
    <tr>
      <th>name:</th>
      <td><input type="text" name="name" value="<?php echo e(old('name')); ?>"></td>
    </tr>
    <tr>
      <th>mail:</th>
      <td><input type="text" name="mail" value="<?php echo e(old('mail')); ?>"></td>
    </tr>
    <tr>
      <th>age:</th>
      <td><input type="number" name="age" value="<?php echo e(old('age')); ?>"></td>
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

<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/person/add.blade.php ENDPATH**/ ?>