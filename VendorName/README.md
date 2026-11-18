##Module Template

#Namespacing
- Change root folder to module main modules namespacing ie:VendorName for proj
- Change module name to functionality specific naming; note namespacing in `module.xml`, `registration.php` etc.

#Registration:
- `bin/magento module:enable [VendorName]_[ModuleName]`
- Next flush cache `bin/magento cache:flush` OR `bin/magento setup:upgrade` depending on dependencies.
- Verify all modules with `bin/magento module:status`