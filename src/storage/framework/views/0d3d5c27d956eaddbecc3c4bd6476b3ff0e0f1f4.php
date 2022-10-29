<?php $__env->startSection('title', 'Person.index'); ?>

<?php $__env->startSection('menubar'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
  インデックスページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <table>
    <tr>
      <th>Person</th>
      <th>Board</th>
    </tr>
    <?php $__currentLoopData = $hasItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($item->getData()); ?></td>
      <td>
        <table width="100%">
        <?php $__currentLoopData = $item->boards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($obj->getData()); ?></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </table>
      </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  <div style="margin: 10px;"></div>
  <table>
    <tr>
      <th>Person</th>
    </tr>
    <?php $__currentLoopData = $noItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($item->getData()); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/person/index.blade.php ENDPATH**/ ?>