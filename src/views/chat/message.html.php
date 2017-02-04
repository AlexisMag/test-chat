<div class='message panel panel-default' data-timestamp='<?php echo $message->timestamp; ?>'>
    <div class="panel-heading">
        <b class="list-group-item-heading">
            <?php echo $message->pseudo ?>
        </b>        
    </div>
    <div class="panel-body">
        <?php echo nl2br($message->content) ?>         
    </div>
</div>
