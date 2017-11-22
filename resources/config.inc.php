<?php

if (!defined("WEBPAGE_CONTEXT")) {
    exit;
}

define("DB_NAME", "testowanie");
define("DB_USER", "root");
define("DB_HOST", "localhost");
define("DB_PASS", "root");

define("SITE_ROOT", "http://localhost/public_html");
define("BIO_MAX_LENGTH", 512);
define("POST_MAX_LENGTH", 512);
define("EMAIL_ENABLED", false);

date_default_timezone_set("America/Los_Angeles");

?>
