<section class="contact-page grid2col">
    <div class="leftGrid flex-center-all">
        <form method="post" enctype="text/plain">
            <h3 class=" blackFormHeading">Contacter Nous</h3>
            <div class="flex-dir-col">
                <input type="hidden" name ="action" value ="contact">
                <input type="text" placeholder="Nom" value="<?php if(!empty($_POST["nom"])) echo htmlentities($_POST["nom"]) ?>" required class="big-input">
                <input type="email" placeholder="Email" value="<?php if(!empty($_POST["email"])) echo htmlentities($_POST["email"]) ?>" required class="big-input" required>
                <textarea name="contact-Message" id="" cols="30" rows="10" placeholder="Message" class="text-area" required></textarea>
                <input type="submit" value="Envoyer" class="big-button-colored">
            </div>
        </form>
    </div>
    <div class="rightGrid flex-center-all">
        <div>
            <div class="contact-details">
                <i class="fa-solid fa-location-dot"></i>
                <p class="medWhitePara">Nice, FRANCE</p>
            </div>
            <div class="contact-details">
                <i class="fa-solid fa-phone"></i>
                <p class="medWhitePara">+33 911 122 222 </p>
            </div>
            <div class="contact-details">
                <i class="fa-solid fa-envelope"></i>
                <p class="medWhitePara">info@mespetitesannonces.fr</p>
            </div>
            <div class="contact-details last-contact-details">
                <p class="medWhitePara">Contactez-nous et nous vous contacterons dans <br> les plus brefs délais.</p>
            </div>
        </div>
    </div>
</section>