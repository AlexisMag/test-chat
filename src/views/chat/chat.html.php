<div class='messages'>
    <?php foreach($messages as $message) { 
        include ("message.html.php");
    } ?>
</div>
    
<form method='post' action='/post_message'>
    
    <textarea placeholder="Votre message" name='content'></textarea>
    <br>
    <button type='submit'>
        Envoyer
    </button>
</form>

<script src='assets/js/jquery.js'></script>    
<script src='assets/js/chat/chat.js'></script>
    