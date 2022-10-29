<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>クイズ一覧</title>
        <style>
          div {text-align: center}
          a {text-align: center}
        </style>
        <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/jquery-sortablejs@latest/jquery-sortable.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
          $(function() {
              $(".sortable").sortable();
              $(".sortable").disableSelection();
              $("#submit").click(function() {
                var listIds = $(".sortable").sortable("toArray");
                console.log(listIds);
                $("#list-ids").val(listIds);
                // $("form").submit();
              });
          });
        </script>
    </head>
    <body>
      

      <?php $__env->startSection('content'); ?>
      <form action="" method="post">
      <?php echo csrf_field(); ?>
      <div class="list">
        <div class="list_labels">
          <div class="list_labels--left">クイズ名</div>
          <div class="list_labels--right">操作</div>
        </div>
        <div class="sortable">
        <?php $__currentLoopData = $big_questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $big_question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="list_content" id="<?php echo e($big_question->id); ?>">
          <div class="list_quiz">
            <a href="/admin/small_questions/<?php echo e($big_question->id); ?>"><?php echo e($big_question->name); ?></a>
          </div>
          <div class="list_actions">
            <a href="/admin/big_questions/edit/<?php echo e($big_question->id); ?>">タイトル名を編集</a>
            <a href="/admin/big_questions/delete/<?php echo e($big_question->id); ?>">大問を削除</a>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <input type="hidden" id="list-ids" name="list-ids"/>
      </div>
      <button id="submit">更新</button>

        
        <div>
          <a href="/admin/big_questions/add">＋新しいタイトルを追加</a>
        </div>


      </form>
      <?php $__env->stopSection(); ?> 




    </body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/backend/resources/views/admin/big_questions/list.blade.php ENDPATH**/ ?>