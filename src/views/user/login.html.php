<div class="panel panel-default">
    <div class="panel-heading">Connexion</div>
    <div class="panel-body">
        <form method="post" action="/connect">

            <div class='form-group'>
                <label for="pseudo" class='control-label'>
                    Pseudo
                </label>
                <input type="text" name="pseudo" id="pseudo" class='form-control'>
            </div>

            <div class='form-group'>
                <label for="password" class='control-label'>
                    Mot de passe
                </label>
                <input type="password" name="password" id="password" class='form-control'>    
            </div>

            <button type="submit" class='btn btn-primary'>
                Connexion
            </button>
            <a href='/subscribe'>S'inscrire</a>
        </form>

    </div>
</div>

