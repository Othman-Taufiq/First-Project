<section class="waitReset wholePageLayout">
    <h1 class="blackFormHeading">Réinitialiser Password</h1>
    <p class="blackInfoPara">Entrez un email associé à votre compte et nous vous <br> enverrons un lien pour réinitialiser votre mot de passe</p>
    <p><?=$notification[1]?? ""?></p>
    <form action="" method="post">
        <input type="hidden" name = "action" value = "waitReset">
        <input type="email" name = "email" placeholder="Votre Email" value="<?php if(!empty($_POST["email"])) echo htmlentities($_POST["email"]) ?>">
        <input type="submit" value="Envoyer">
    </form>
</section>