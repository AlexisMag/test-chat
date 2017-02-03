<div class='messages'>
    <?php foreach($messages as $message) { ?>
    <div class='message'>
        <b>
            <?php echo $message->pseudo ?>
        </b>
        <br>
        <?php echo nl2br($message->content) ?> 
    </div>
    <hr>
    <?php } ?>
</div>
    
<form method='post' action='/post_message'>
    
    <textarea placeholder="Votre message" name='content'></textarea>
    <br>
    <button type='submit'>
        Envoyer
    </button>
</form>