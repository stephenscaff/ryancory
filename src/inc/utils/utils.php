<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Bail if accessed directly

require_once('class-acf-modules.php');
require_once('conditionals.php');
require_once('dynamic-classes.php');
require_once('index-fields.php');
require_once('nav.php');
require_once('paths.php');
require_once('styles-scripts.php');
require_once('utils.php');


function jumpoff_unautop($s)
{
    //remove any new lines already in there
    $s = str_replace("\n", "", $s);

    //remove all <p>
    $s = str_replace("<p>", "", $s);

    //replace <br /> with \n
    $s = str_replace(array("<br />", "<br>", "<br/>"), "\n", $s);

    //replace </p> with \n\n
    $s = str_replace("</p>", "\n\n", $s);

    return $s;
}
