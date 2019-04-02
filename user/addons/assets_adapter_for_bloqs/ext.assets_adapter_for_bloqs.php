<?php if (! defined('BASEPATH')) exit('No direct script access allowed');

require_once PATH_THIRD.'assets_adapter_for_bloqs/addon.setup.php';
require_once PATH_THIRD.'assets_adapter_for_bloqs/adapter.php';

class Assets_adapter_for_bloqs_ext {
	var $name = AAFB_NAME;
	var $version = AAFB_VERSION;
	var $settings_exist = 'n';
	var $docs_url = '';

	public function activate_extension()
	{
		// Upon activating this extension, delete the Assets adapter for blocks
		ee()->db->query("DELETE FROM exp_extensions WHERE class = 'Assets_adapter_for_blocks_ext'");

		ee()->db->insert('extensions', array(
			'class'    => AAFB_CLASSNAME,
			'method'   => 'blocks_discover_fieldtypes',
			'hook'     => 'blocks_discover_fieldtypes',
			'settings' => '',
			'priority' => 1,
			'version'  => AAFB_VERSION,
			'enabled'  => 'y'
		));
	}

	public function update_extension($current = FALSE)
	{
		if (! $current || $current == $this->version) {
			return FALSE;
		}

		ee()->db->where('class', AAFB_CLASSNAME);
		ee()->db->update('extensions', array('version' => $this->version));
	}

	public function disable_extension()
	{
		ee()->db->query("DELETE FROM exp_extensions WHERE class = '{AAFB_CLASSNAME}'");
	}

	public function blocks_discover_fieldtypes($fieldtypes)
	{
		// Play nice with other extensions.
		if (ee()->extensions->last_call) {
			$fieldtypes = ee()->extensions->last_call;
		}

		// If Assets is already a valid fieldtype, don't do anything. I mean,
		// other than celebrate that this adapter is no longer necessary.
		foreach ($fieldtypes as $fieldtype) {
			if ($fieldtype->getType() === 'assets') {
				return $fieldtypes;
			}
		}

		// Shim Assets and add it to the valid fieldtypes list.
		$fieldtype = new stdClass();
		$fieldtype->type = 'assets';
		$fieldtype->name = 'Assets (via Assets Adapter for Bloqs)';
		$fieldtype->adapter = new AssetsAdapterForBlocks(ee());
		$fieldtypes[] = $fieldtype;

		return $fieldtypes;
	}
}
