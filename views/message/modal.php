<div id="ko3msg" class="modal fade">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-body">

            <div class="<?php echo $message->type ?>">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
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

         </div>
      </div>
   </div>
</div>
<script>$('#ko3msg').modal({});</script>