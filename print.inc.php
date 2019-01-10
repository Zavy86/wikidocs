<?php
/**
 * Print
 *
 * @package WikiDocs
 * @author  Manuel Zavatta <manuel.zavatta@gmail.com>
 * @link    https://github.com/Zavy86/wikidocs
 */
?>
<!DOCTYPE html>
<html>
 <head>
  <link type="text/css" rel="stylesheet" href="<?php echo $WD->PATH; ?>helpers/priss-0.0.1/css/print.css" media="print,screen,projection" charset="utf-8"/>
  <title><?php echo ($DOC->ID!="homepage"?$DOC->TITLE." - ":null).$WD->TITLE; ?></title>
 </head>
 <body>
  <?php echo $PARSER->text($DOC->loadContent())."\n"; ?>
  <script type="text/javascript">window.printa();</script>
 </body>
</html>