# Assets Adapter for Bloqs

Assets Adapter for Bloqs is a third-party add-on that enables use of an
[Assets][assets] field within a [Bloqs][eebloqs] block.

After installing the Assets Adapter for Bloqs extension, Assets will appear
in the fieldtype selector when setting up block types.


## Requirements

* Assets 3.1 or greater
* Bloqs 3.0 or greater
* ExpressionEngine 3.0 or greater


## Installation

* Copy `user/addons/assets_adapter_for_bloqs` to `system/user/addons/assets_adapter_for_bloqs`.
* Click "Install" next to Assets Adapter for Bloqs under the Add-ons screen.


## How it Works

Bloqs fieldtypes are based strongly on Grid fieldtype support. Assets has
Grid fieldtype support and is very close to supporting Bloqs.

Assets Adapter for Bloqs creates a shim that augments Assets with the few
small remaining changes that enable it to work seamlessly with Bloqs.

The best part: if Assets ever supports Bloqs in the future, Assets Adapter
for Bloqs simply shuts itself off.


[assets]: https://devot-ee.com/add-ons/assets
[eebloqs]: https://eebloqs.com
[aafb]: https://github.com/litzinger/assets-adapter-for-bloqs
