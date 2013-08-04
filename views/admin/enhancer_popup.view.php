<?php
/**
 * HTML code - An application to insert HTML code in WYSIWYG for Novius OS
 *
 * @copyright 2013 Gilles FELIX
 * @license GNU Affero General Public License v3 or (at your option) any later version
 * http://www.gnu.org/licenses/agpl-3.0.html
 */
?>
<div class="expander">
    <h3>Enter your HTML code</h3>
    <div>
        <textarea name="html_code" rows="20" style="width: 100%;height:300px;"><?= e(\Arr::get($enhancer_args, 'html_code', '')) ?></textarea>
    </div>
</div>
