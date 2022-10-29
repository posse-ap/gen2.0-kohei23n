<form action="/rest" method="post">
<table>
  <?php echo csrf_field(); ?>
  <tr>
    <th>message:</th>
    <td><input type="text" name="message" value="<?php echo e(old('message')); ?>"></td>
    <th>url:</th>
    <td><input type="text" name="url" value="<?php echo e(old('url')); ?>"></td>
    <th></th>
    <td><input type="submit" value="send"></td>
  </tr> 
</table>
</form><?php /**PATH /work/backend/resources/views/rest/create.blade.php ENDPATH**/ ?>