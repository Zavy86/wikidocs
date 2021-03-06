<?php
/**
 * WikiDocs
 *
 * @package WikiDocs
 * @author  Manuel Zavatta <manuel.zavatta@gmail.com>
 * @link    https://github.com/Zavy86/wikidocs
 */

 // include functions
 require_once("functions.inc.php");
 // mode definition
 $mode="view";
 if(isset($_GET['auth'])){$mode="auth";}
 if(isset($_GET['print'])){$mode="print";}
 if(isset($_GET['search'])){$mode="search";}
 if(isset($_GET['edit'])){if(wdf_authenticated()==2){$mode="edit";}else{$mode="auth";}}
 if(isset($_GET['exit'])){session_destroy();wdf_session_start();}
 // check for authentication
 if(strlen(VIEWCODE) && wdf_authenticated()==0){$mode="auth";}
 // mode definition
 define("MODE",$mode);
 // initialize application
 $APP=new WikiDocs();
 // initialize document
 $DOC=new Document(DOC);
 // initialize markdown parser
 require_once(DIR."helpers/parsedown-1.7.1/Parsedown.php");
 $PARSER=new Parsedown();
 $PARSER->setMarkupEscaped(true);
 // include web or print template
 if(MODE=="print"){require_once(DIR."print.inc.php");}else{require_once(DIR."template.inc.php");}
?>
