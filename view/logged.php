<section class="section-width-padding">
    <div class="logged-banner margin-bottom">
        <div class="logged-banner-box">
            <h3 class="blackFormHeading">Les stocks d'été sont là</h3>
            <p class="blackInfoPara">L'été stylé, here we go!</p>
            <a href="#" class="colored-button">Explorer</a>
        </div>
    </div>
    <div class="annonces-wrapper">
        <?php  foreach($annonces as $annonce): ?>
        <div class="annonce">
            <h4 class="anno-username">username</h4>
            <div class="annonce-photo">
                <img src="<?= $annonce["url_photo"]?>">
            </div>
            <p class="anno-titre"><?= $annonce["titre"]?></p>
            <p class="anno-prix"><?= $annonce["prix_vente"]?>€</p>
        </div>
        <?php endforeach;?>
    </div>
</section>