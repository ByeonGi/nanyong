<?php


  $config = array(
    "db" => array(),
    "urls" => array(),
    "paths" => array(
      "resources" => "/path/to/resources",
      "images" => $_SERVER["DOCUMENT_ROOT"] . "/img",
    )
  );


  defined("LIBRARY_PATH")
      or define("LIBRARY_PATH", realpath(dirname(__FILE__) . "/lib"));

  
  defined("TEMPLATES_PATH")
      or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . "/templates"));
  
  // init_set("error_reporting", "true");
  // error_reporting(E_ALL|E_STRCT);
  
?>