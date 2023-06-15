<section class="signup-section wholePageLayout">

    <div class="signup-left">
       <div class="signup-left-content">
            <h2 class="whiteFormHeading">Le monde du shopping pas cher</h2>
            <p class="whiteInfoPara">Nous avons exactement ce dont vous cherchez</p>
            <a href="?p=home" class="colored-button">Explorer <i class="fa-solid fa-arrow-right"></i></a>
       </div>
    </div>

    <div class="signup-right">
        <form action="" method="post" class="signup-form">
            <input type="hidden" name="action" value="register"> 
            <h2>Créer un compte</h2>
            <p class="error-message"><?=$message[1]?? ""?></p>
            <div>
                <input type="text" placeholder="Prénom" name="prenom" class="input-small" value="<?php if(!empty($_POST["prenom"])) echo htmlentities($_POST["prenom"]) ?>" required>
                <input type="text" placeholder="Nom" name = "fname" class="input-small input-small-right" value="<?php if(!empty($_POST["fname"])) echo htmlentities($_POST["fname"]) ?>" required>
            </div>
            <div>
                <input type="text" placeholder="Username" name="username" class="input-small" value="<?php if(!empty($_POST["username"])) echo htmlentities($_POST["username"]) ?>" required>
                <input type="date" placeholder="Date de Naissance" name="dateNaissance" class="input-small input-small-right" value="<?php if(!empty($_POST["dateNaissance"])) echo htmlentities($_POST["dateNaissance"]) ?>" required>
            </div>
            <div>
                <input type="email" placeholder="Email" name="email" class="input-small" value="<?php if(!empty($_POST["email"])) echo htmlentities($_POST["email"]) ?>" required>
                <input type="password" placeholder="Password 🔒" name = "password" class="input-small input-small-right" value="<?php if(!empty($_POST["password"])) echo htmlentities($_POST["password"]) ?>" required>
            </div>
            <div>
                <input type="text" placeholder="Adresse" name ="adressePostale" class="input-big" value="<?php if(!empty($_POST["adressePostale"])) echo htmlentities($_POST["adressePostale"]) ?>" required>
            </div>
            <div>
                <input type="text" placeholder="Numéro Téléphone" name ="numTel" class="input-big"value="<?php if(!empty($_POST["numTel"])) echo htmlentities($_POST["numTel"]) ?>"required>
            </div>
            <div>
                <input type="text" placeholder="Ville" name="ville" class="input-small" value="<?php if(!empty($_POST["ville"])) echo htmlentities($_POST["ville"]) ?>" required>
                <input type="text" placeholder="Code Postale" name ="codePostale" class="input-small input-small-right" value="<?php if(!empty($_POST["codePostale"])) echo htmlentities($_POST["codePostale"]) ?>" required>
            </div>
            <div>
                <input type="submit" value="Confirmer" class="input-big sign-up-submit">
            </div>
            <div class="signupHaveAc">Vous avez déjà un compte?<a href="?p=login">Se connecter</a></div>
        </form>
    </div>
</section>