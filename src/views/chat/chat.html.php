<div class='messages list-group pre-scrollable' style="height: 1000px">
    <?php foreach($messages as $message) { 
        include ("message.html.php");
    } ?>
</div>
<hr>
<form method='post' action='/post_message'>
    <div class="form-group">
        <textarea placeholder="Votre message" class="form-control" name='content' rows="4"></textarea>
    </div>
    <br>
    <button type='submit' class="btn btn-primary">
        Envoyer
    </button>
</form>

<script src='assets/js/jquery.js'></script>    
<script src='assets/js/chat/chat.js'></script>
    