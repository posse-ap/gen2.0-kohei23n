<?php $__env->startSection('title', 'Person.find'); ?>

<?php $__env->startSection('menubar'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
  検索ページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <form action="/person/find" method="post">
  <?php echo csrf_field(); ?> 
  <input type="text" name="input" value="<?php echo e($input); ?>">
  <input type="submit" value="find">  
  </form>
  <?php if(isset($item)): ?>
  <table>
    <tr>
      <th>Data</th>
    </tr>
    <tr>
      <td><?php echo e($item->getData()); ?></td>
    </tr>
  </table>
  <?php endif; ?> 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2017 tuyano.
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/person/find.blade.php ENDPATH**/ ?>