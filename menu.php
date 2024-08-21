<?php
include_once("url.php");
?>
<nav class="menu">
    <ul>
        <!-- <li><a href="index.php">About</a></li>
        <li><a href="contact.php">Contact</a></li> -->
        <li><a href="<?= $BASE_URL ?>index.php" class="nav-link">Home</a></li>
        <li><a href="<?= $BASE_URL ?>about.php" class="nav-link">About</a></li>
        <li><a href="<?= $BASE_URL ?>contact.php" class="nav-link">Contact</a></li>

        <!-- <li>
            <span class="icon flag-icon-br">icon</span>
            <select name="idioma" id="idioma" class="idioma-select">
                <span class="flag-icon flag-icon-ad flag-icon-squared"></span>
                <option value="pt">Português</option>
                <option value="it">Italiano</option>
                <option value="en">English</option>
                <option value="es">Espanhol</option>
                <option value="fr">Francês</option>
            </select>
        <li><a href="cambio.php">Teste</a></li>
        </li> -->
    </ul>
</nav>