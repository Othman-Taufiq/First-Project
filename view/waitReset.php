<section class="waitReset wholePageLayout flex-center-all">
    <div>
        <div class="text-align-center">
            <h1 class="blackFormHeading">Réinitialiser Password</h1>
        </div>
        <p class="blackInfoPara">Entrez un email associé à votre compte et nous vous <br> enverrons un lien pour réinitialiser votre mot de passe</p>
        <p class="error-message"><?=$notification[1]?? ""?></p>
        <form action="" method="post" class="waitReset-Form">
            <input type="hidden" name = "action" value = "waitReset">
            <input type="email" name = "email" placeholder="Votre Email" value="<?php if(!empty($_POST["email"])) echo htmlentities($_POST["email"]) ?>" class="big-input">
            <input type="submit" value="Envoyer" class="big-button-colored">
        </form>
    </div>
</section>