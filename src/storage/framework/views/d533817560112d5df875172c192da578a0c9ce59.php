<?php $__env->startSection('title', 'Person.Edit'); ?>

<?php $__env->startSection('menubar'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
  編集ページ
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
  <form action="/person/edit" method="post">
  <table>
    <?php echo csrf_field(); ?> 
    <input type="hidden" name="id" value="<?php echo e($form->id); ?>">
    <tr>
      <th>name:</th>
      <td><input type="text" name="name" value="<?php echo e($form->name); ?>"></td>
    </tr>
    <tr>
      <th>mail:</th>
      <td><input type="text" name="mail" value="<?php echo e($form->mail); ?>"></td>
    </tr>
    <tr>
      <th>age:</th>
      <td><input type="text" name="age" value="<?php echo e($form->age); ?>"></td>
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
<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/person/edit.blade.php ENDPATH**/ ?>