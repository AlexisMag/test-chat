<div class='message' data-timestamp='<?php echo $message->timestamp; ?>'>
    <b>
        <?php echo $message->pseudo ?>
    </b>
    <br>
    <?php echo nl2br($message->content) ?> 
</div>
<hr>