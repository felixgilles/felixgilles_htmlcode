<?php
/**
 * HTML code - An application to insert HTML code in WYSIWYG for Novius OS
 *
 * @copyright 2013 Gilles FELIX
 * @license GNU Affero General Public License v3 or (at your option) any later version
 * http://www.gnu.org/licenses/agpl-3.0.html
 */

namespace Gif;

use Nos\Controller_Front_Application;

class Controller_Front extends Controller_Front_Application
{
    public function action_index($args = array())
    {
        $html_code = \Arr::get($args, 'html_code', '');

        return $html_code;
    }
}
