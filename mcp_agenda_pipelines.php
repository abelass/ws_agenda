<?php
/**
 * Plugin My Chacra - Pack &Eacute;tendu
 * (c) 2012 My Chacra
 * Licence GNU/GPL
 */

if (!defined('_ECRIRE_INC_VERSION')) return;

// La feuille de style
function mcp_agenda_insert_head($flux){
    $flux .= '<link rel="stylesheet" href="'.find_in_path('css/mcp_agenda_styles.css').'" type="text/css" media="all" />';
    return $flux;
}



?>
