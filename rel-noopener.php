<?php
/*
* Rel Noopener
* @copyright    Copyright (C) 2019-2023, Rel Noopener - maxime.guinard.pro@gmail.com
* @link         https://maxime-guinard.fr/en/
* @since        0.0.1

* @wordpress-plugin
* Plugin Name: Rel Noopener
* Description: Adds rel="noopener" attribute to links with target="_blank"
* Version:           0.0.1
 * Plugin URI:        https://maxime-guinard.fr/en/
 * Author:            Maxime GUINARD
 * Author URI:        https://maxime-guinard.fr/en/a-propos/
 * Text Domain:       rel-noopener
*/

function add_rel_noopener($content) {
    $pattern = '/<a(.*?)href=["\'](http[s]?:\/\/[^"\']*)["\'](.*?)>/i';
    $replacement = '<a$1href="$2"$3 rel="noopener">';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
}
add_filter('the_content', 'add_rel_noopener');
