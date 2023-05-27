<?php

/**
 * This is just a basic example of using the template in code, like you would in a controller for instance.
 */

require_once __DIR__ . '/../vendor/autoload.php';

$template = new AKTemplate\Template();
$template->setTemplatePath(__DIR__);

$template->props['rando'] = rand(1, 100);
$superSecretVariable = "This is not visible in the template.";

try {
    ob_start();
    echo $template->render('index.tpl.php');
    ob_end_flush();
} catch (Exception $e) {
    echo $e->getMessage();
}
