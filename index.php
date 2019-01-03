<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne

session_start();

$_SESSION["Couleur"] = "Rouge";


echo"Une variable de session appelée couleur a été définie<br><br>
<a href='index2.php'>Cliquez ici pour visiter index2.php</a>";






