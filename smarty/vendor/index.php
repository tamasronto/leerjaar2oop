<?php

require_once "vendor/autoload.php";

use Smarty\Smarty;

$template = new Smarty();


$template->display("template/layout.tpl");
