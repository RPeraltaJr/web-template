<?php

$page = (object) array(
    "type"      => "page-home",
    "name"      => str_replace('.php', '', basename($_SERVER['PHP_SELF'])),
    "meta"      => [
        "title" => "Home",
        "desc"  => "",
    ],
    "plugins"   => [],
);

include "includes/site-settings.php";
include "includes/form-settings.php";

// header
include "components/global/header/header.php";

// navbar
include "components/global/navbar/navbar.php";

// hero
include "components/home/hero/hero.php";

// footer
include "components/global/footer/footer-nav.php";
include "components/global/footer/footer.php";