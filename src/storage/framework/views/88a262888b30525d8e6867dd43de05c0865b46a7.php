<style>
  .pagination {font-size: 10pt;}
  .pagination li {display: inline-block;}
  tr th a:link {color: white;}
  tr th a:visited {color: white;}
  tr th a:hover  {color: white;}
  tr th a:active  {color: white;}
</style>

<?php $__env->startSection('title', 'Index'); ?>

<?php $__env->startSection('menubar'); ?>
  <?php echo \Illuminate\View\Factory::parentPlaceholder('menubar'); ?>
  インデックスページ
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <?php if(Auth::check()): ?>
  <p>USER: <?php echo e($user->name . ' (' . $user->email . ')'); ?></p>
  <?php else: ?> 
  <p>※ログインしていません。(<a href="/login">ログイン</a>| <a href="/register">登録</a>)</p>
  <?php endif; ?> 

  <table>
    <tr>
      <th><a href="/hello?sort=name">name</a></th>
      <th><a href="/hello?sort=mail">mail</a></th>
      <th><a href="/hello?sort=age">age</a></th>
    </tr>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <td><?php echo e($item->name); ?></td>
      <td><?php echo e($item->mail); ?></td>
      <td><?php echo e($item->age); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </table>
  <?php echo e($items->appends(['sort' => $sort])->links()); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
copyright 2020 tuyano.
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.helloapp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/hello/index.blade.php ENDPATH**/ ?>