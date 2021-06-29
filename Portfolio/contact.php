<?php
    $titre='contact';
    require_once 'header.php';
?>

    <div class="left_contact">
        <h5>Mes informations</h5>
            <ul>
                <li>Email : melany.lascoux@gmail.com</li>
                <li>Tél : 06 59 61 49 47</li>
                <li>Adresse : 86000 Poitiers</li>
            </ul>
    </div>

    <div class="right_contact">
        <form action="traitement.php" method="GET">
            <h5>Formulaire</h5>
                <div class="form_nom">
                    <label for="prenom">Prénom:</label>
                    <input type="text" id="prenom" name="prenom">
                    <label for="nom:">Nom:</label>
                    <input type="text" id="nom" name="nom">
                </div>
                <div class="form_contact">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                    <label for="phone">Téléphone:</label>
                    <input type="tel" id="phone" name="phone">
                </div>
                <div class="form_gender">
                    <label for="sex_select">Genre :</label>
                    <select name="gender" id="sex_select">
                        <option value="female">Femme</option>
                        <option value="male">Homme</option>
                        <option value="other">Autre</option>
                    </select>            
                </div>
                <div class="form_date">
                    <label for="datemax">Date de naissance:</label>
                    <input type="date" id="date_min_max" name="date_min_max" min="1900-12-31" max="2020-12-31">
                </div>
                <div class="form_message">
                    <label for="message">Message:</label><br>
                    <textarea name="message" rows="5" cols="70"></textarea>
                </div>
                <div class="file">
                    <label for="file">Charger document:</label>
                    <input type="file"  id="file"   name="file">
                </div>
                <div class="form_boutons">
                    <input type="submit" value="Envoyez">
                    <input type="reset" value="Réinitialiser">
        </form>
    </div>

<?php
    require_once 'footer.php';
?>