<?php
//if (!session_id()) session_start();
//echo '<b>header_ca</b>: 11111111115577<hr>';//exit;
if (0)
  include( '../../../wwwnewn/www/fctli/inc/inc_main_li.php' ); // Cf. Lg 21 pour voir nbr ../
if (0)
  include('rsx/class/fncCA.php');
//ob_start();
error_reporting(E_ALL);
ini_set('display_errors', true);
$tracing = debug_backtrace();
$path_parr = dirname($tracing[0]['file']);
//echo '<h2>' . dirname($path_parr) . '</h2>';
//echo $path_parr . '<hr>';
$dossier = explode(DIRECTORY_SEPARATOR, $path_parr);
$prof_dir = count($dossier) - 4;
//echo '<b>Prof_dir = ' . $prof_dir . '</b> // Ts dmn<br>'; // // Racine de ts les dmn
//var_dump(explode(DIRECTORY_SEPARATOR, dirname(__FILE__)));
$en_local = ($_SERVER["HTTP_HOST"] == 'localhost') || ($_SERVER["HTTP_HOST"] == 'cote-aspire-7750zg');
//echo $_SERVER["HTTP_HOST"] . ' => <b>' . (($en_local) ? 'Local' : 'Réel') . '</b><hr>';
$prof_path = str_repeat('../', ($prof_dir + !$en_local * 2));
//echo '<hr><h2>Prof_path = ' . $prof_path . '</h2>';

$chem_ca = ($en_local) ? 'clubadel.com' : 'wwwclub/www';

//$profpathroot = str_repeat('../', (count(explode(DIRECTORY_SEPARATOR, dirname($tracing[0]['file']))) - 3 - ( $_SERVER["HTTP_HOST"] == 'localhost')));

$profpathfctli = str_repeat('../', (count(explode(DIRECTORY_SEPARATOR, dirname($tracing[0]['file']))) - 3 - ( $_SERVER["HTTP_HOST"] == 'localhost'))) . 'wwwnewn/www/fctli/inc/'; // wamp => -2
//
//echo $profpathfctli.'<hr>';
//echo $_SERVER["HTTP_HOST"];
//$pathfncCA =
//    (($_SERVER["HTTP_HOST"] == 'localhost') ? 'C:\wamp\www\clubadel.com' : '/home/wwwclub/www')
//    . '/rsx/class/fncCA.php';
$pathfncCA =
    (($_SERVER["HTTP_HOST"] == 'localhost') ? '/opt/lampp/htdocs/clubadel.com' : '/home/wwwclub/www') . '/rsx/class/fncCA.php';
//echo $pathfncCA;
//echo 'pp: ' . $profpathroot.'<hr>';
//include_once($profpathroot. 'rsx/class/fncCA.php');
//include_once($pathfncCA);
$chemin_fncCA = $prof_path . '' . $chem_ca . '/rsx/class/fncCA.php';
include_once($chemin_fncCA); // dmn CA
//echo $chemin_fncCA . '<hr>';

$remonte_dir_theme = ($prof_dir >= 0) ? str_repeat('../' . DIRECTORY_SEPARATOR, ($prof_dir - 0 + 1)) : '';
//echo $remonte_dir_theme.' = Remonte dir_theme (h_ca lg 23)<hr>';
if (is_file($remonte_dir_theme . '/cai/header_cawp_uuu.php') && isset($param_c7[1]) && $param_c7[1] > 0) {
  include('cai/header_cawp_uuu.php');
}
//else echo '<hr>'.$profpath;
if (!defined('WPINC')) {
  error_reporting(E_ALL & ~E_STRICT);
//  require($profpathfctli . 'inc_main_li.php');
  require($prof_path . 'wwwnewn/www/fctli/inc/' . 'inc_main_li.php'); // dmn NRJH
}
else
  require($profpathfctli . 'inc_main_li.php'); // dmn NRJH
//debli($profpath,'profpath');
//debli($profpathfctli,'profdir');
// @TODO Retrouver script déjà commencé pour attribution Groupe des B
// echo 'ok'; exit;
// ####################################################################### Début
//$params = array($_SERVER["PHP_SELF"], 'cai', 'Groupe (Gestion Avancée)', 1, 1);
// Param 3 = 0 pour hors Boosteur | Param 4 : 1 si Live Page
// include_once('div/confs.php');
// include('t_script.php');
function mm_dmn ($dmn1, $dmn2) {
  if ($dmn1 == $dmn2)
    return ($dmn1 == $dmn2);
}