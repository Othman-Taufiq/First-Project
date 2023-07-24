
<section class="ajoute-annonce space-from-nav section-width-padding grey-background">
    <h2 class="blackFormHeading ajoute-heading">Poster ton Annonce</h2>
    <p class="error-message"><?=$notification[1]?? ""?></p>
    <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="ajoute_annonce"> 
        <div class="ajoute-annonce-box ajoute-annonce-box-special">
            <p class="blackInfoPara">Ajoutes min 1 photo et max 5 photos*</p>
            <input type="file" name="photos[]" accept ="image/jpeg, image/png, image/jpg" multiple required>
            <div class="display-image">
            </div>
        </div>
        <div class="ajoute-annonce-box">
            <p class="ajoute-p">Titre</p>
            <div class="ajoute-inp">
                <input type="text" name="titre" placeholder="ex: Chausseurs Nike" value= "<?php if(!empty($_POST["titre"])) echo htmlentities($_POST["titre"]) ?>" required>
            </div>
        </div>
        <div class="ajoute-annonce-box">
            <p class="ajoute-p">Déscription</p>
            <div class="ajoute-inp">
                <textarea name="description" id="" cols="30" rows="10" value = "<?php if(!empty($_POST["description"])) echo htmlentities($_POST["description"]) ?>" required ></textarea>
            </div>
        </div>
        <div class="ajoute-annonce-box">
            <p class="ajoute-p">Catégories</p>
            <div class="ajoute-inp">
                <select id="category" name="id_categorie" class="ajoute-sel">
                    <option value="" selected disabled hidden  required>Sélectionne une catégorie</option>
                    <?php foreach($categories as $categorie): ?>
                    <option value="<?=$categorie["id"] ?>">
                    <?= htmlentities($categorie["nom_categorie"]);?> (<?= htmlentities($categorie['description']);?>)
                    </option>
                    <?php endforeach;?>
                </select>
            </div>
        </div>
        <div class="ajoute-annonce-box">
            <p class="ajoute-p">Etat</p>
            <div class="ajoute-inp">
                <select class='ajoute-sel' name='id_etat'> 
                <option value="" selected disabled hidden>Sélectionne une état</option>
                <?php foreach ($etats as $etat) : ?>
                <option value="<?= $etat['id'] ?>" required>
                    <?= htmlentities($etat['libelle_etat']);?> (<?= htmlentities($etat['description']); ?>)
                </option>
                <?php endforeach; ?>    
                </select>
            </div>
        </div>
        <div class="ajoute-annonce-box">
            <p class="ajoute-p">Prix</p>
            <div class="ajoute-inp">
                <input type="text" name="prix" placeholder="ex: 0,00€" value= "<?php if(!empty($_POST["prix"])) echo htmlentities($_POST["prix"]) ?>" required>
            </div>
        </div>
        <div class="ajoute-annonce-box">
            <p class="ajoute-p">Durée de publication</p>
            <div class="ajoute-inp">
                <input type="number" name="duree_publication" placeholder="ex: 1 semaine (une semaine coûte 1€)" min ="1" value= "<?php if(!empty($_POST["duree_publication"])) echo htmlentities($_POST["duree_publication"]) ?>" required>
            </div>
        </div>
        <div class="text-align-right">
            <input type="submit" value="Ajouter" class="big-button-colored">
        </div>
    </form>
</section>