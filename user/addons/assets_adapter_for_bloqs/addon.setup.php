<?php

/**
 * Originally written by Bryan Burgers
 * https://github.com/bryanburgers/assets-adapter-for-blocks
 *
 * Adapted to ExpressionEngine 3+ by BoldMinded
 */

if (! defined('AAFB_VERSION')) {
    define('AAFB_NAME', 'Assets Adapter for Bloqs');
    define('AAFB_TYPE', 'assets_adapter_for_bloqs');
    define('AAFB_VERSION', '1.0.0');
    define('AAFB_DESCRIPTION', 'Enable Assets to work with Bloqs');
    define('AAFB_CLASSNAME', 'Assets_adapter_for_bloqs_ext');
}

return [
    'author'        => 'BoldMinded',
    'author_url'    => '',
    'docs_url'      => '',
    'name'          => AAFB_NAME,
    'description'   => AAFB_DESCRIPTION,
    'version'       => AAFB_VERSION,
    'namespace'     => 'AssetsAdapterForBlocks',
    'settings_exist' => false,
];
