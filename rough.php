<?php
    <select class='custom-select' name='abo_id'>
    <?php foreach ($rows as $row) : ?>
        <option value="<?= $row['id'] ?>">
            <?= htmlentities($row['libelle_etat']) ?>
        </option>
    <?php endforeach; ?>
</select>

 <!-- <select class='ajoute-sel' name='etat_id'>
 <?php foreach ($etats as $etat) : ?>
                    <option <?= (!empty($member['etat_id']) && $member['etat_id'] == $abo['id']) ? 'selected' : '' ?> value='<?= $abo['id'] ?>'>
                        <?= htmlentities($abo['titre']) ?>
                    </option>
                <?php endforeach; ?>
                </select> -->
?>

<!-- <select id="etat" name="etat" class="ajoute-sel">
    <option value="" selected disabled hidden>Sélectionne une état</option>
    <option value="Etat correcte">Correcte</option>
    <option value="Très bonne état">Très bonne état</option>
    <option value="Parfaite état">Perfait état</option>
    <option value="Etat Satisfiante">Etat Satisfiante</option>
    <option value="Mauvaise état">Mauvaise état</option>
</select> -->

