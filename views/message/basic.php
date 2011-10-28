<div class="<?php echo $message->type ?> alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php if (is_array($message->message)): ?>
    <ul>
      <?php foreach ($message->message as $msg): ?>
        <?php echo $msg; ?>
      <?php endforeach; ?>
    </ul>
  <?php else: ?>
    <?php echo $message->message; ?>
  <?php endif; ?>
</div>