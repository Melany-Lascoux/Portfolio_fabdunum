<?php
    $titre='Contact';
    require_once 'header.php';
?>

<br>
Bonjour
<br>
<br>

<form action="traitement.php" method="GET">
    <label for="prenom">Prénom:</label>
    <input type="text" id="prenom" name="prenom">
    <label for="nom">Nom:</label>
    <input type="text" id="nom" name="nom">
<br>
<br>
    <label for="mail">Email:</label>
    <input type="email" id="mail" name="mail">
<br>
<br>
    <label for="sujet">Sujet:</label>
    <input type="text" id="sujet" name="sujet">
<br>
<br>
    <label for="message">Message:</label><br>
    <textarea name="message" rows="3" cols="30"></textarea>
<br>
<br>
    <label for="cgu">En validant ce formulaire, vous acceptez d'être contacté.</label>
    <input type="checkbox" name="cgu">
<br>
<br>
    <input type="submit">
    <input type="reset">
</form>
<br>
<br>

Merci de votre message.

<?php
    require_once 'footer.php';
?>