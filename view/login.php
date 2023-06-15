<div class="login-page">
    <div class="login"> 
        <div class="login-left">
            <img src="../asset/images/login.jpg" alt="login-image">
        </div>
        <form method= "post" class="login-right">
            <h2>Se connecter</h2>
            <p>Créer un compte? <a href="?p=signup"> S'inscrire</a></p>
            <p><?=$notification[1]?? ""?></p>
            <input type="hidden" name="action" value="login"> 
            <input type="email" name ="email" id="email" placeholder="Votre Email" value="<?php if(!empty($_POST["email"])) echo htmlentities($_POST["email"]) ?>" required>
            <input type="password" name ="password" id="password" placeholder="Votre Password" value="<?php if(!empty($_POST["password"])) echo htmlentities($_POST["password"]) ?>" required>
            <input type="submit" value ="Se connecter" class="button">
            <a href="?p=waitReset" class="forgotPass">Mot de Passe oubli?</a>
        </form>
    </div>
</div>
</body>
