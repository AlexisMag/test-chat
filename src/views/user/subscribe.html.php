<div class="panel panel-default">
    <div class="panel-heading">
        Inscription
    </div>
    <div class="panel-body">
        <form method="post" action="/new_account">
            <div class='form-group'>
                <label for="pseudo" class="control-label">
                    Pseudo
                </label>
                <input type="text" name="pseudo" id="pseudo" class="form-control">
            </div>
            <div class='form-group'>
                <label for="password" class="control-label">
                    Mot de passe
                </label>
                <input type="password" name="password" id="password" class="form-control">
            </div>

            <button type='submit' class="btn btn-primary">
                S'inscrire
            </button>
            <a href="/login">Se connecter</a>

        </form>
        
    </div>
</div>

