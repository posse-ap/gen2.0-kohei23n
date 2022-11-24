<!DOCTYPE html>
<html>
    <head>
        <title>quiz</title>
        <link rel="stylesheet" type="text/css" href="/css/style.css" />
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body>

        <div class="qDiv">
            <?php $__currentLoopData = $questions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h1 class="nameunderline"><?php echo e($loop->iteration); ?>.この地名は何て読む？</h1>
            <img src="/images/<?php echo e($question->image); ?>" alt="地名の画像">

            <ul class="ul" id="question<?php echo e($question->id); ?>_choices">
                <?php $__currentLoopData = $question->choices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $choice): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <li class="q" id="question<?php echo e($question->id); ?>_choice<?php echo e($loop->iteration); ?>"
                onclick="clickfunction(<?php echo e($question->id); ?>, <?php echo e($loop->iteration); ?>)"
                >
                <?php echo e($choice->name); ?>

                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>

            <div class="ansarea" id="answer_box<?php echo e($question->id); ?>">
                <p id="answer_message<?php echo e($question->id); ?>"></p>
                <p class="ansexp" id="answer_explain<?php echo e($question->id); ?>"></p>
            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </body>
    <script src="/js/main.js"></script>
</html>
<?php /**PATH /work/backend/resources/views/quiz.blade.php ENDPATH**/ ?>