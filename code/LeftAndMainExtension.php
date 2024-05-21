<?php

namespace SilverStripe\Admin;

use SilverStripe\Core\Extension;

/**
 * Plug-ins for additional functionality in your LeftAndMain classes.
 *
 * @template T of LeftAndMain
 * @extends Extension<T>
 */
abstract class LeftAndMainExtension extends Extension
{

    public function init()
    {
    }

    protected function accessedCMS()
    {
    }

    protected function augmentNewSiteTreeItem(&$item)
    {
    }
}
