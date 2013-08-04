<?php
/**
 * HTML code - An application to insert HTML code in WYSIWYG for Novius OS
 *
 * @copyright 2013 Gilles FELIX
 * @license GNU Affero General Public License v3 or (at your option) any later version
 * http://www.gnu.org/licenses/agpl-3.0.html
 */

return array(
    'name'    => 'HTML code',
    'version' => 'chiba.1',
    'provider' => array(
        'name' => 'Gilles FELIX',
    ),
    'namespace' => 'Gif',
    'permission' => array(

    ),
    'enhancers' => array(
        'felixgilles_htmlcode' => array(
            'title' => 'HTML Code',
            'desc'  => 'Insert HTML Code into WYSIWYG',
            'enhancer' => 'felixgilles_htmlcode/front/main',
            'previewUrl' => 'admin/felixgilles_htmlcode/enhancer/preview',
            'dialog' => array(
                'contentUrl' => 'admin/felixgilles_htmlcode/enhancer/popup',
                'width' => 800,
                'height' => 500,
                'ajax' => true,
            ),
        ),
    ),
    'icons' => array(
        16  => 'static/apps/felixgilles_htmlcode/img/html-16.png',
        32 => 'static/apps/felixgilles_htmlcode/img/html-32.png',
        64    => 'static/apps/felixgilles_htmlcode/img/html-64.png',
    ),
);
