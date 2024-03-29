<?php
  require_once(realpath(dirname(__FILE__) . "/../confing.php"));


  function renderLayoutWithContentFile($contentFile, $variables = array()){
    $contentFileFullPath = TEMPLATES_PATH . "/" . $contentFile;

    if(count($variables) > 0){
      foreach($variables as $key => $value){
        if(strlen($key) > 0){
          ${$key} = $value;
        }
      }
    }

    require_once(TEMPLATES_PATH . "/header.php");

    echo "<div id = \"container\">\n" . "\t<div id=\"content\">\n";

    if(file_exists($contentFileFullPath)){
      require_once($contentFileFullPath);
    }else{
      require_once(TEMPLATES_PATH . "/error.php");

    }

    echo "\t</div>\n";

    require_once(TEMPLATES_PATH . "/rightPanel.php");
    
    echo "</div>\n";

    require_once(TEMPLATES_PATH . "/footer.php");

  }
?>