<section class="login-page grid2col">

    <div class="login-left flex-center-all">
        <div>
            <h2 class="whiteFormHeading">Heureux de vous revoir</h2>
            <p class="whiteInfoPara"><i class="fa-sharp fa-solid fa-heart"></i> Publier votre annonce maintenant</p>
            <p class="whiteInfoPara"><i class="fa-sharp fa-solid fa-comments-dollar"></i> Achetez au prix le moins cher</p>
            <p class="whiteInfoPara"><i class="fa-sharp fa-solid fa-truck-fast"></i> Livraison la plus rapide possible</p>
        </div>
    </div>

    <div class="login-right flex-center-all">
        <form method= "post" class="login-form">
            <h2 class="blackFormHeading">Se connecter</h2>
            <p class="blackInfoPara">Créer un compte? <a href="?p=signup"> S'inscrire</a></p>
            <p class="error-message"><?=$notification[1]?? ""?></p>
            <div class="input-col">
                <input type="hidden" name="action" value="login"> 
                <input class="big-input" type="email" name ="email" id="email" placeholder="Votre Email" value="<?php if(!empty($_POST["email"])) echo htmlentities($_POST["email"]) ?>" required>
                <input class="big-input" type="password" name ="password" id="password"placeholder="Votre Password" value="<?php if(!empty($_POS["password"])) echo htmlentities($_POST["password"]) ?>"required>
                <input type="submit" value ="Se connecter" class="big-button-colored">
                <div class="option">Mot de Passe oubli?<a href="?p=waitReset">Réinitialiser</a></div>
            </div>
            
        </form>
    </div>
</section>
