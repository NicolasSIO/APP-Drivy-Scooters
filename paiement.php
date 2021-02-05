<?php
require_once 'header.php';
?><!doctype html>
<html lang="fr">
    <body>
        <form action="action_page.php" method="post" style="padding-top:90px;">
            <div style="text-align: center;" class="container">
                <h3 style="color:#679dd3; text-align: center; width: 100%;">Paiement</h3><br>
                <input style="width: 50%;" type="text" placeholder="Titulaire de la carte" name="titulaire" required>
                <input style="width: 50%;" type="text" placeholder="Numéro de carte" name="numero" required>
                <input style="width: 50%;" type="text" placeholder="Date d'expiration" name="date" required>
                <input style="width: 50%;" type="text" placeholder="CVV" name="cvv" required>
                <button style="width: 50%; background-color:#f6d46d!important;" type="submit">Valider</button>
        </form>
    </body>
</html>
<?php
require_once 'footer.php';
?>