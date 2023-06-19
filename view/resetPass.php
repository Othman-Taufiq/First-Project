<section class="wholePageLayout flex-center-all">
    <div>
        <form method="post">
            <h1 class="blackFormHeading text-align-center">Réinitialiser Votre Mot de Passe</h1>
            <input type="hidden" name="action" value="resetPass">
            <p class="error-message text-align-center"><?=$notification[1]?? ""?></p>
            <div class="input-col">
                <input type="password" name="password" placeholder="Nouveau mot de passe" value="<?php if(!empty($_POS["password"])) echo htmlentities($_POST["password"]) ?>" class="big-input">
                <input type="password" name="password2" placeholder="Ré-écrire le nouveau mot de passe" value="<?php if(!empty($_POS["password2"])) echo htmlentities($_POST["password2"]) ?>" class="big-input">
                <input type="submit" value="Confirmer" class="big-button-colored">
            </div>
        </form>
    </div>
</section>
