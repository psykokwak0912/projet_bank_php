<?php

$page_title = "Signup - MonSite.com";

// $niceData = htmlspecialchars("Bonjour je tente une piraterie <script>alert('hacked')</script>");
// $badData = "FAILLE Stored XSS <script>alert('hacked')</script>";

// on_start, c'est comme si tu ouvrais les "" pour enregistrer une grosse chaîne de caractère
ob_start();
?>
<h1>Signup</h1>

<?php
// ob_get_clean c'est la fermeture des "" pour finir la chaîne de caractère
$page_content = ob_get_clean();