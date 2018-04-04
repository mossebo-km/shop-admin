<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DRIVER', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |Last login: Mon Apr  2 10:06:38 on ttys001
ZEP-2:mossebo-shop-admin Urij$
ZEP-2:mossebo-shop-admin Urij$
ZEP-2:mossebo-shop-admin Urij$
ZEP-2:mossebo-shop-admin Urij$
ZEP-2:mossebo-shop-admin Urij$
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900820_create_supplier_products_table
Rolled back:  2018_02_27_900820_create_supplier_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000810_create_suppliers_i18_table
Rolled back:  2018_02_27_000810_create_suppliers_i18_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Migration not found: 2018_02_27_000400_create_images_table
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create SupplierProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000810_create_suppliers_i18_table
Migrated:  2018_02_27_000810_create_suppliers_i18_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900820_create_supplier_products_table
Migrated:  2018_02_27_900820_create_supplier_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding Categories
Seeding: ProductsSeeder
Seeding Products
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ php artisan make:controller Suppliers
Controller created successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan make:controller "Api\Suppliers"
Controller created successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan make:controller "Api\SuppliersController"
Controller created successfully.
ZEP-2:mossebo-shop-admin Urij$ php artsian make:supplier
Could not open input file: artsian
ZEP-2:mossebo-shop-admin Urij$ php artsian make:model "Models\Supplier"
Could not open input file: artsian
ZEP-2:mossebo-shop-admin Urij$ php artisan make:model "Models\Supplier"
Model created successfully.
ZEP-2:mossebo-shop-admin Urij$ php artsian migrate:refresh
Could not open input file: artsian
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900820_create_supplier_products_table
Rolled back:  2018_02_27_900820_create_supplier_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000810_create_suppliers_i18_table
Rolled back:  2018_02_27_000810_create_suppliers_i18_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Migration not found: 2018_02_27_000400_create_images_table
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create SupplierProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000810_create_suppliers_i18_table
Migrated:  2018_02_27_000810_create_suppliers_i18_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900820_create_supplier_products_table
Migrated:  2018_02_27_900820_create_supplier_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding Categories
Seeding: ProductsSeeder
Seeding Products
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900820_create_supplier_products_table
Rolled back:  2018_02_27_900820_create_supplier_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000810_create_suppliers_i18_table
Rolled back:  2018_02_27_000810_create_suppliers_i18_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Migration not found: 2018_02_27_000400_create_images_table
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create SupplierProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000810_create_suppliers_i18_table
Migrated:  2018_02_27_000810_create_suppliers_i18_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900820_create_supplier_products_table
Migrated:  2018_02_27_900820_create_supplier_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding Categories
Seeding: ProductsSeeder
Seeding Products
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ php artsian make:model "Models\SupplierProducts"
Could not open input file: artsian
ZEP-2:mossebo-shop-admin Urij$ php artisan make:model "Models\SupplierProducts"
Model created successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh

   Illuminate\Database\QueryException  : SQLSTATE[23000]: Integrity constraint violation: 1217 Cannot delete or update a parent row: a foreign key constraint fails (SQL: drop table if exists `shop_suppliers`)

  at /Users/Urij/code/mossebo-shop-admin/vendor/laravel/framework/src/Illuminate/Database/Connection.php: 664
    660|         // If an exception occurs when attempting to run a query, we'll format the error
    661|         // message to include the bindings with SQL, which will make this exception a
    662|         // lot more helpful to the developer instead of just the database's errors.
    663|         catch (Exception $e) {
  > 664|             throw new QueryException(
    665|                 $query, $this->prepareBindings($bindings), $e
    666|             );
    667|         }
    668|

  Exception trace:

  1   Doctrine\DBAL\Driver\PDOException::("SQLSTATE[23000]: Integrity constraint violation: 1217 Cannot delete or update a parent row: a foreign key constraint fails")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 107

  2   PDOException::("SQLSTATE[23000]: Integrity constraint violation: 1217 Cannot delete or update a parent row: a foreign key constraint fails")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 105

  Please use the argument -v to see more details.
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
\Migration table not found.
Migration table created successfully.
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding Categories
Seeding: ProductsSeeder
Seeding Products

   Illuminate\Database\QueryException  : SQLSTATE[42S22]: Column not found: 1054 Unknown column 'slug' in 'field list' (SQL: insert into `shop_products` (`slug`, `quantity`, `is_new`, `created_at`, `updated_at`) values (taburet-1, 1, 1, 2018-04-02 07:39:24, 2018-04-02 07:39:24))

  at /Users/Urij/code/mossebo-shop-admin/vendor/laravel/framework/src/Illuminate/Database/Connection.php: 664
    660|         // If an exception occurs when attempting to run a query, we'll format the error
    661|         // message to include the bindings with SQL, which will make this exception a
    662|         // lot more helpful to the developer instead of just the database's errors.
    663|         catch (Exception $e) {
  > 664|             throw new QueryException(
    665|                 $query, $this->prepareBindings($bindings), $e
    666|             );
    667|         }
    668|

  Exception trace:

  1   Doctrine\DBAL\Driver\PDOException::("SQLSTATE[42S22]: Column not found: 1054 Unknown column 'slug' in 'field list'")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php : 79

  2   PDOException::("SQLSTATE[42S22]: Column not found: 1054 Unknown column 'slug' in 'field list'")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOConnection.php : 77

  Please use the argument -v to see more details.
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins

   Illuminate\Database\QueryException  : SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`mossebyi_market`.`admins`, CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL) (SQL: insert into `admins` (`role_id`, `name`, `email`, `password`, `created_at`, `updated_at`, `api_token`) values (1, Admin, admin@admin.ru, $2y$10$0maXzm.DSCN8G99R6KGb8eLokqD2rR6b0NfuMtO.7q/PxwoOqZbK2, 2018-04-02 07:39:56, 2018-04-02 07:39:56, G42gToaAkpmevnZCaWvH92dYi3iQfiKLIh98a9XlFXAwnGcpxcXycek9Y6RY))

  at /Users/Urij/code/mossebo-shop-admin/vendor/laravel/framework/src/Illuminate/Database/Connection.php: 664
    660|         // If an exception occurs when attempting to run a query, we'll format the error
    661|         // message to include the bindings with SQL, which will make this exception a
    662|         // lot more helpful to the developer instead of just the database's errors.
    663|         catch (Exception $e) {
  > 664|             throw new QueryException(
    665|                 $query, $this->prepareBindings($bindings), $e
    666|             );
    667|         }
    668|

  Exception trace:

  1   Doctrine\DBAL\Driver\PDOException::("SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`mossebyi_market`.`admins`, CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL)")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 107

  2   PDOException::("SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`mossebyi_market`.`admins`, CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL)")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 105

  Please use the argument -v to see more details.
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding Categories
Seeding: ProductsSeeder
Seeding Products

   ErrorException  : Undefined index: slug

  at /Users/Urij/code/mossebo-shop-admin/database/seeds/ProductsSeeder.php: 104
    100|         $productsI18Table = DB::table(Config::get('migrations.ProductsI18'));
    101|
    102|         for ($i = 1; $i < 11; $i++) {
    103|             foreach ($this->data as $product) {
  > 104|                 $product['slug'] .= "-$i";
    105|
    106|                 $translations = $product['i18'];
    107|                 unset($product['i18']);
    108|

  Exception trace:

  1   Illuminate\Foundation\Bootstrap\HandleExceptions::handleError("Undefined index: slug", "/Users/Urij/code/mossebo-shop-admin/database/seeds/ProductsSeeder.php", [Object(Illuminate\Database\Query\Builder), Object(Illuminate\Database\Query\Builder)])
      /Users/Urij/code/mossebo-shop-admin/database/seeds/ProductsSeeder.php : 104

  2   ProductsSeeder::run()
      /Users/Urij/code/mossebo-shop-admin/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php : 29

  Please use the argument -v to see more details.
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins

   Illuminate\Database\QueryException  : SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`mossebyi_market`.`admins`, CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL) (SQL: insert into `admins` (`role_id`, `name`, `email`, `password`, `created_at`, `updated_at`, `api_token`) values (1, Admin, admin@admin.ru, $2y$10$0maXzm.DSCN8G99R6KGb8eLokqD2rR6b0NfuMtO.7q/PxwoOqZbK2, 2018-04-02 07:40:36, 2018-04-02 07:40:36, ymYWNvmcK6yUmzH7mODtSCLWSE0zxJ9oga0ftDnUWtaLozygQ5R5pTcNvEAP))

  at /Users/Urij/code/mossebo-shop-admin/vendor/laravel/framework/src/Illuminate/Database/Connection.php: 664
    660|         // If an exception occurs when attempting to run a query, we'll format the error
    661|         // message to include the bindings with SQL, which will make this exception a
    662|         // lot more helpful to the developer instead of just the database's errors.
    663|         catch (Exception $e) {
  > 664|             throw new QueryException(
    665|                 $query, $this->prepareBindings($bindings), $e
    666|             );
    667|         }
    668|

  Exception trace:

  1   Doctrine\DBAL\Driver\PDOException::("SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`mossebyi_market`.`admins`, CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL)")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 107

  2   PDOException::("SQLSTATE[23000]: Integrity constraint violation: 1452 Cannot add or update a child row: a foreign key constraint fails (`mossebyi_market`.`admins`, CONSTRAINT `admins_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE SET NULL)")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 105

  Please use the argument -v to see more details.
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding Categories
Seeding: ProductsSeeder
Seeding Products
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ php artisan make:resource SupplierEditResource
Resource created successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan make:request SupplierSaveRequest
Request created successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan make:resource SupplierEditResource
Resource created successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan cache:clear
Cache cleared successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cachephp artisan config:cache


  Command "config:cachephp" is not defined.

  Did you mean one of these?
      config:cache
      config:clear


ZEP-2:mossebo-shop-admin Urij$ php artisan cache:clear
Cache cleared successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ git add .
warning: CRLF will be replaced by LF in public_html/js/app.js.
The file will have its original line endings in your working directory.
ZEP-2:mossebo-shop-admin Urij$ git commit -m 'suppliers'
[master fdad0e0] suppliers
g 2910 files changed, 14500 insertions(+), 13365 deletions(-)
 create mode 100644 app/Http/Controllers/Api/SupplierController.php
 create mode 100644 app/Http/Requests/SupplierSaveRequest.php
 rewrite app/Http/Resources/ProductEditResource.php (66%)
 create mode 100644 app/Http/Resources/SupplierEditResource.php
 create mode 100644 app/Models/Supplier.php
 delete mode 100755 database/migrations/2018_02_27_000810_create_suppliers_i18_table.php
 delete mode 100755 database/migrations/2018_02_27_900820_create_supplier_products_table.php
 delete mode 100755 public/uploads/1.jpg
 rename {public => public_html}/.htaccess (100%)
 rename {public => public_html}/css/app.css (99%)
 rename {public => public_html}/css/bootstrap.min.css (100%)
 rename {public => public_html}/css/fonts/Glyphicons PRO (License).txt (100%)
 rename {public => public_html}/css/fonts/fontawesome/FontAwesome.otf (100%)
 rename {public => public_html}/css/fonts/fontawesome/fontawesome-webfont.eot (100%)
 rename {public => public_html}/css/fonts/fontawesome/fontawesome-webfont.svg (100%)
 rename {public => public_html}/css/fonts/fontawesome/fontawesome-webfont.ttf (100%)
 rename {public => public_html}/css/fonts/fontawesome/fontawesome-webfont.woff (100%)
 rename {public => public_html}/css/fonts/fontawesome/fontawesome-webfont.woff2 (100%)
 rename {public => public_html}/css/fonts/glyphicons.filetypes.pro/glyphicons-filetypes-regular.eot (100%)
 rename {public => public_html}/css/fonts/glyphicons.filetypes.pro/glyphicons-filetypes-regular.svg (100%)
 rename {public => public_html}/css/fonts/glyphicons.filetypes.pro/glyphicons-filetypes-regular.ttf (100%)
 rename {public => public_html}/css/fonts/glyphicons.filetypes.pro/glyphicons-filetypes-regular.woff (100%)
 rename {public => public_html}/css/fonts/glyphicons.halflings.pro/glyphicons-halflings-regular.eot (100%)
 rename {public => public_html}/css/fonts/glyphicons.halflings.pro/glyphicons-halflings-regular.svg (100%)
 rename {public => public_html}/css/fonts/glyphicons.halflings.pro/glyphicons-halflings-regular.ttf (100%)
 rename {public => public_html}/css/fonts/glyphicons.halflings.pro/glyphicons-halflings-regular.woff (100%)
 rename {public => public_html}/css/fonts/glyphicons.pro/glyphicons-regular.eot (100%)
 rename {public => public_html}/css/fonts/glyphicons.pro/glyphicons-regular.svg (100%)
 rename {public => public_html}/css/fonts/glyphicons.pro/glyphicons-regular.ttf (100%)
 rename {public => public_html}/css/fonts/glyphicons.pro/glyphicons-regular.woff (100%)
 rename {public => public_html}/css/fonts/glyphicons.social.pro/glyphicons-social-regular.eot (100%)
 rename {public => public_html}/css/fonts/glyphicons.social.pro/glyphicons-social-regular.svg (100%)
 rename {public => public_html}/css/fonts/glyphicons.social.pro/glyphicons-social-regular.ttf (100%)
 rename {public => public_html}/css/fonts/glyphicons.social.pro/glyphicons-social-regular.woff (100%)
 rename {public => public_html}/css/main.css (100%)
 rename {public => public_html}/css/plugins.css (100%)
 rename {public => public_html}/css/themes.css (100%)
 rename {public => public_html}/css/themes/amethyst.css (100%)
 rename {public => public_html}/css/themes/autumn.css (100%)
 rename {public => public_html}/css/themes/blackberry.css (100%)
 rename {public => public_html}/css/themes/coral.css (100%)
 rename {public => public_html}/css/themes/emerald.css (100%)
 rename {public => public_html}/css/themes/fancy.css (100%)
 rename {public => public_html}/css/themes/fire.css (100%)
 rename {public => public_html}/css/themes/flatie.css (100%)
 rename {public => public_html}/css/themes/forest.css (100%)
 rename {public => public_html}/css/themes/lake.css (100%)
 rename {public => public_html}/css/themes/modern.css (100%)
 rename {public => public_html}/css/themes/night.css (100%)
 rename {public => public_html}/css/themes/spring.css (100%)
 rename {public => public_html}/css/themes/waterlily.css (100%)
 rename {public => public_html}/img/favicons/favicon.ico (100%)
 rename {public => public_html}/img/favicons/favicon.png (100%)
 rename {public => public_html}/img/icon114.png (100%)
 rename {public => public_html}/img/icon120.png (100%)
 rename {public => public_html}/img/icon144.png (100%)
 rename {public => public_html}/img/icon152.png (100%)
 rename {public => public_html}/img/icon180.png (100%)
 rename {public => public_html}/img/icon57.png (100%)
 rename {public => public_html}/img/icon72.png (100%)
 rename {public => public_html}/img/icon76.png (100%)
 rename {public => public_html}/img/jquery.chosen/chosen-sprite.png (100%)
 rename {public => public_html}/img/jquery.chosen/chosen-sprite@2x.png (100%)
 rename {public => public_html}/img/jquery.colorpicker/alpha-horizontal.png (100%)
 rename {public => public_html}/img/jquery.colorpicker/alpha.png (100%)
 rename {public => public_html}/img/jquery.colorpicker/hue-horizontal.png (100%)
 rename {public => public_html}/img/jquery.colorpicker/hue.png (100%)
 rename {public => public_html}/img/jquery.colorpicker/saturation.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_asc.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_asc@2x.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_asc_disabled.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_asc_disabled@2x.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_both.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_both@2x.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_desc.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_desc@2x.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_desc_disabled.png (100%)
 rename {public => public_html}/img/jquery.datatables/sort_desc_disabled@2x.png (100%)
 rename {public => public_html}/img/logo-white.png (100%)
 rename {public => public_html}/img/logo-white@2x.png (100%)
 rename {public => public_html}/img/logo.png (100%)
 rename {public => public_html}/img/logo@2x.png (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar1.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar10.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar10@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar11.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar11@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar12.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar12@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar13.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar13@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar14.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar14@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar15.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar15@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar16.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar16@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar1@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar2.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar2@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar3.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar3@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar4.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar4@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar5.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar5@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar6.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar6@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar7.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar7@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar8.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar8@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar9.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar9@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/avatar@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/avatars/readme.txt (100%)
 rename {public => public_html}/img/placeholders/backgrounds/coming_soon_full_bg.jpg (100%)
 rename {public => public_html}/img/placeholders/backgrounds/lock_full_bg.jpg (100%)
 rename {public => public_html}/img/placeholders/backgrounds/login_full_bg-2.jpg (100%)
 rename {public => public_html}/img/placeholders/backgrounds/login_full_bg.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/article_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/dashboard_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/lock_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/login_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/profile_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/widget1_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/widget2_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/widget3_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/widget4_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/widget5_header.jpg (100%)
 rename {public => public_html}/img/placeholders/headers/widget6_header.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo1.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo10.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo10@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo11.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo11@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo12.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo12@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo13.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo13@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo14.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo14@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo15.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo15@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo16.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo16@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo17.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo17@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo18.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo18@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo19.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo19@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo1@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo2.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo20.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo20@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo21.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo21@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo22.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo22@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo23.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo23@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo24.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo24@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo2@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo3.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo3@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo4.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo4@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo5.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo5@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo6.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo6@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo7.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo7@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo8.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo8@2x.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo9.jpg (100%)
 rename {public => public_html}/img/placeholders/photos/photo9@2x.jpg (100%)
 rename {public => public_html}/index.php (100%)
 rename {public => public_html}/js/app.js (98%)
 mode change 100755 => 100644
 rename {public => public_html}/js/plugins.js (100%)
 rename {public => public_html}/js/vendor/bootstrap.min.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/CHANGES.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/LICENSE.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/README.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/adapters/jquery.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/bower.json (100%)
 rename {public => public_html}/js/vendor/ckeditor/ckeditor.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/composer.json (100%)
 rename {public => public_html}/js/vendor/ckeditor/config.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/contents.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/_translationstatus.txt (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/package.json (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/a11yhelp.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/_translationstatus.txt (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/about/dialogs/about.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/about/dialogs/hidpi/logo_ckeditor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/about/dialogs/logo_ckeditor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/adobeair/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/ajax/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autoembed/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autogrow/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/autolink/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloonpanel/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloonpanel/skins/kama/balloonpanel.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono-lisa/balloonpanel.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono-lisa/images/close.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono-lisa/images/hidpi/close.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono/balloonpanel.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono/images/close.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono/images/hidpi/close.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloontoolbar/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloontoolbar/skins/default.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloontoolbar/skins/kama/balloontoolbar.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloontoolbar/skins/moono-lisa/balloontoolbar.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/balloontoolbar/skins/moono/balloontoolbar.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bbcode/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/icons/bidiltr.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/icons/bidirtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/icons/hidpi/bidiltr.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/icons/hidpi/bidirtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/bidi/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/clipboard/dialogs/paste.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/cloudservices/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/dialogs/codesnippet.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/icons/codesnippet.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/icons/hidpi/codesnippet.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/CHANGES.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/LICENSE (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/README.ru.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/arta.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/ascetic.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-dune.dark.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-dune.light.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-forest.dark.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-forest.light.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-heath.dark.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-heath.light.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-lakeside.dark.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-lakeside.light.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-seaside.dark.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-seaside.light.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/brown_paper.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/brown_papersq.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/dark.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/default.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/docco.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/far.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/foundation.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/github.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/googlecode.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/idea.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/ir_black.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/magula.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/mono-blue.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/obsidian.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/paraiso.dark.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/paraiso.light.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/pojoaque.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/pojoaque.jpg (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/railscasts.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/rainbow.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/school_book.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/school_book.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/solarized_dark.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/solarized_light.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/sunburst.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow-night-blue.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow-night-bright.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow-night-eighties.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow-night.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/vs.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/xcode.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/zenburn.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippet/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/codesnippetgeshi/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/icons/bgcolor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/icons/hidpi/bgcolor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/icons/hidpi/textcolor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/icons/textcolor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colorbutton/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/dialogs/colordialog.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/dialogs/colordialog.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/colordialog/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/cursors/cursor-disabled.svg (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/cursors/cursor.svg (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/icons/copyformatting.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/icons/hidpi/copyformatting.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/copyformatting/styles/copyformatting.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/_translationstatus.txt (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/devtools/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/dialog/dialogDefinition.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/dialogadvtab/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/dialogs/div.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/icons/creatediv.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/icons/hidpi/creatediv.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/div/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/divarea/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/dialogs/docprops.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/icons/docprops-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/icons/docprops.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/icons/hidpi/docprops-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/icons/hidpi/docprops.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/docprops/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/dialogs/easyimagealt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagealigncenter.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagealignleft.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagealignright.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagealt.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagefull.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/easyimageside.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/easyimageupload.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagealigncenter.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagealignleft.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagealignright.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagealt.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagefull.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimageside.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimageupload.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/easyimage/styles/easyimage.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embed/icons/embed.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embed/icons/hidpi/embed.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embed/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/dialogs/embedbase.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedbase/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedsemantic/icons/embedsemantic.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedsemantic/icons/hidpi/embedsemantic.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/embedsemantic/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/dialogs/find.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/icons/find-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/icons/find.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/icons/hidpi/find-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/icons/hidpi/find.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/icons/hidpi/replace.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/icons/replace.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/find/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/dialogs/flash.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/icons/flash.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/icons/hidpi/flash.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/images/placeholder.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/flash/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/font/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/dialogs/button.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/dialogs/checkbox.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/dialogs/form.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/dialogs/hiddenfield.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/dialogs/radio.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/dialogs/select.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/dialogs/textarea.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/dialogs/textfield.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/button.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/checkbox.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/form.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hiddenfield.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/button.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/checkbox.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/form.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/hiddenfield.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/imagebutton.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/radio.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/select-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/select.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/textarea-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/textarea.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/textfield-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/hidpi/textfield.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/imagebutton.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/radio.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/select-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/select.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/textarea-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/textarea.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/textfield-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/icons/textfield.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/images/hiddenfield.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/forms/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/icons.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/icons_hidpi.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/dialogs/iframe.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/icons/hidpi/iframe.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/icons/iframe.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/images/placeholder.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframe/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/iframedialog/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image/dialogs/image.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image/images/noimage.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/dialogs/image2.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/icons/hidpi/image.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/icons/image.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/image2/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/imagebase/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/imagebase/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/imagebase/styles/imagebase.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/indentblock/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/justify/icons/hidpi/justifyblock.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/justify/icons/hidpi/justifycenter.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/justify/icons/hidpi/justifyleft.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/justify/icons/hidpi/justifyright.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/justify/icons/justifyblock.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/justify/icons/justifycenter.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/justify/icons/justifyleft.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/justify/icons/justifyright.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/justify/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/icons/hidpi/language.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/icons/language.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/language/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/link/dialogs/anchor.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/link/dialogs/link.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/link/images/anchor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/link/images/hidpi/anchor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/dialogs/liststyle.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/liststyle/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/magicline/images/hidpi/icon-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/magicline/images/hidpi/icon.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/magicline/images/icon-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/magicline/images/icon.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/dialogs/mathjax.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/icons/hidpi/mathjax.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/icons/mathjax.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/images/loader.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/mathjax/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/icons/hidpi/newpage-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/icons/hidpi/newpage.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/icons/newpage-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/icons/newpage.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/newpage/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/icons/hidpi/pagebreak-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/icons/hidpi/pagebreak.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/icons/pagebreak-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/icons/pagebreak.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/images/pagebreak.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pagebreak/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/panelbutton/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/pastefromword/filter/default.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/dialogs/placeholder.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/icons/hidpi/placeholder.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/icons/placeholder.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/placeholder/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/icons/hidpi/preview-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/icons/hidpi/preview.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/icons/preview-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/icons/preview.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/preview/preview.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/icons/hidpi/print.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/icons/print.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/print/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/icons/hidpi/save.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/icons/save.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/save/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/scayt/CHANGELOG.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/scayt/LICENSE.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/scayt/dialogs/dialog.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/scayt/dialogs/options.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/scayt/dialogs/toolbar.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/icons/hidpi/selectall.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/icons/selectall.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/selectall/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sharedspace/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/icons/hidpi/showblocks-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/icons/hidpi/showblocks.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/icons/showblocks-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/icons/showblocks.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_address.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_blockquote.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_div.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_h1.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_h2.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_h3.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_h4.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_h5.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_h6.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_p.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/images/block_pre.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/showblocks/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/dialogs/smiley.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/icons/hidpi/smiley.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/icons/smiley.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/angel_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/angel_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/angry_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/angry_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/broken_heart.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/broken_heart.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/confused_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/confused_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/cry_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/cry_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/devil_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/devil_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/embaressed_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/embarrassed_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/embarrassed_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/envelope.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/envelope.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/heart.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/heart.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/kiss.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/kiss.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/lightbulb.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/lightbulb.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/omg_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/omg_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/regular_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/regular_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/sad_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/sad_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/shades_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/shades_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/teeth_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/teeth_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/thumbs_down.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/thumbs_down.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/thumbs_up.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/thumbs_up.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/tongue_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/tongue_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/tounge_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/whatchutalkingabout_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/whatchutalkingabout_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/wink_smile.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/images/wink_smile.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/smiley/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/dialogs/sourcedialog.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/icons/hidpi/sourcedialog-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/icons/hidpi/sourcedialog.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/icons/sourcedialog-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/icons/sourcedialog.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/sourcedialog/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/_translationstatus.txt (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/specialchar/dialogs/specialchar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/stylesheetparser/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/table/dialogs/table.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/tableresize/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/tableselection/styles/tableselection.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/tabletools/dialogs/tableCell.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/dialogs/templates.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/dialogs/templates.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/icons/hidpi/templates-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/icons/hidpi/templates.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/icons/templates-rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/icons/templates.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/bn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/bs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/en-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/fo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/gu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/hi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/is.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ka.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/lt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/mn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ms.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/sr-latn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/sr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/th.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/templates/default.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/templates/images/template1.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/templates/images/template2.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/templates/templates/images/template3.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/dialogs/uicolor.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/dialogs/uicolor.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/icons/hidpi/uicolor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/icons/uicolor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/_translationstatus.txt (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/af.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/ar.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/az.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/bg.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/cs.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/cy.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/da.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/de-ch.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/de.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/el.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/en-au.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/en-gb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/en.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/eo.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/es-mx.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/es.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/et.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/eu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/fa.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/fi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/fr-ca.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/fr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/gl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/he.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/hr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/hu.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/id.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/it.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/ja.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/km.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/ko.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/ku.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/lv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/mk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/nb.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/nl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/no.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/oc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/pl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/pt-br.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/pt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/ro.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/ru.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/si.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/sk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/sl.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/sq.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/sv.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/tr.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/tt.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/ug.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/uk.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/vi.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/zh-cn.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/lang/zh.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uicolor/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/uploadfile/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/widget/images/handle.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/wsc/LICENSE.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/wsc/dialogs/ciframe.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/wsc/dialogs/tmpFrameset.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/wsc/dialogs/wsc.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/wsc/dialogs/wsc.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/wsc/dialogs/wsc_ie.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/plugins/xml/plugin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/css/samples.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/img/github-top.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/img/header-bg.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/img/header-separator.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/img/logo.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/img/logo.svg (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/img/navigation-tip.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/index.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/js/sample.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/js/sf.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/ajax.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/api.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/appendto.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/assets/inlineall/logo.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/assets/outputxhtml/outputxhtml.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/assets/posteddata.php (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/assets/sample.jpg (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/assets/uilanguages/languages.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/autogrow/autogrow.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/bbcode/bbcode.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/codesnippet/codesnippet.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/datafiltering.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/devtools/devtools.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/dialog/assets/my_dialog.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/dialog/dialog.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/divarea/divarea.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/divreplace.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/docprops/docprops.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/easyimage/easyimage.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/enterkey/enterkey.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/htmlwriter/assets/outputforflash/outputforflash.fla (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/htmlwriter/assets/outputforflash/outputforflash.swf (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/htmlwriter/assets/outputforflash/swfobject.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/htmlwriter/outputforflash.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/htmlwriter/outputhtml.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/image2/assets/image1.jpg (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/image2/assets/image2.jpg (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/image2/image2.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/index.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/inlineall.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/inlinebycode.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/inlinetextarea.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/jquery.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/magicline/magicline.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/mathjax/mathjax.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/placeholder/placeholder.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/readonly.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/replacebyclass.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/replacebycode.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/sample.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/sample.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/sample_posteddata.php (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/sharedspace/sharedspace.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/sourcedialog/sourcedialog.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/stylesheetparser/assets/sample.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/stylesheetparser/stylesheetparser.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/tabindex.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/tableresize/tableresize.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/toolbar/toolbar.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/uicolor.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/uicolor/uicolor.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/uilanguages.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/wysiwygarea/fullpage.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/old/xhtmlstyle.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/css/fontello.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/font/LICENSE.txt (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/font/config.json (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/font/fontello.eot (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/font/fontello.svg (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/font/fontello.ttf (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/font/fontello.woff (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/index.html (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/js/abstracttoolbarmodifier.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/js/fulltoolbareditor.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/js/toolbarmodifier.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/js/toolbartextmodifier.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/LICENSE (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/codemirror.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/codemirror.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/javascript.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/show-hint.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/show-hint.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/dialog.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/dialog_ie.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/dialog_ie7.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/dialog_ie8.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/dialog_iequirks.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/editor.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/editor_ie.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/editor_ie7.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/editor_ie8.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/editor_iequirks.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/icons.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/icons_hidpi.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/images/dialog_sides.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/images/dialog_sides.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/images/dialog_sides_rtl.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/images/mini.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/images/spinner.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/images/sprites.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/images/sprites_ie6.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/images/toolbar_start.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/readme.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/kama/skin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/dialog.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/dialog_ie.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/dialog_ie8.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/dialog_iequirks.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/editor.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/editor_gecko.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/editor_ie.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/editor_ie8.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/editor_iequirks.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/icons.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/icons_hidpi.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/arrow.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/close.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/hidpi/close.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/hidpi/lock-open.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/hidpi/lock.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/hidpi/refresh.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/lock-open.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/lock.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/refresh.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/images/spinner.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono-lisa/readme.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/dialog.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/dialog_ie.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/dialog_ie7.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/dialog_ie8.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/dialog_iequirks.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/editor.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/editor_gecko.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/editor_ie.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/editor_ie7.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/editor_ie8.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/editor_iequirks.css (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/icons.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/icons_hidpi.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/anchor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/arrow.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/close.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/hidpi/anchor.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/hidpi/close.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/hidpi/lock-open.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/hidpi/lock.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/hidpi/refresh.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/lock-open.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/lock.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/refresh.png (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/images/spinner.gif (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/readme.md (100%)
 rename {public => public_html}/js/vendor/ckeditor/skins/moono/skin.js (100%)
 rename {public => public_html}/js/vendor/ckeditor/styles.js (100%)
 rename {public => public_html}/js/vendor/jquery.min.js (100%)
 rename {public => public_html}/js/vendor/modernizr.min.js (100%)
 rename {public => public_html}/mix-manifest.json (100%)
 rename {public => public_html}/robots.txt (100%)
 create mode 120000 public_html/storage
 delete mode 100644 resources/assets/js/components/shop/manufacturers/ManufacturerEdit.vue
 delete mode 100644 resources/assets/js/components/shop/manufacturers/ManufacturersTable.vue
 create mode 100644 resources/assets/js/components/shop/suppliers/SupplierEdit.vue
 create mode 100644 resources/assets/js/components/shop/suppliers/SuppliersTable.vue
 create mode 100644 resources/assets/js/mixins/Sortable.js
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 67, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (67/67), done.
Writing objects: 100% (67/67), 584.14 KiB | 5.51 MiB/s, done.
Total 67 (delta 43), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   ce003c4..fdad0e0  master -> master
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
^[[ACreate Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
^[[ACreate Orders
^[[ACreate CategoryProducts
^[[ACreate OrderProducts
^[[AMigrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding Categories
Seeding: ProductsSeeder
Seeding Products
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins

   Illuminate\Database\QueryException  : SQLSTATE[HY000]: General error: 1364 Field 'api_token' doesn't have a default value (SQL: insert into `admins` (`name`, `email`, `password`, `updated_at`, `created_at`) values (Admin, admin@admin.ru, $2y$10$6Y6VVAbgLtk4hJlpiKPhLehxcW2MLs1opMWXdAREKFgYIMiGBAIny, 2018-04-02 12:10:43, 2018-04-02 12:10:43))

  at /Users/Urij/code/mossebo-shop-admin/vendor/laravel/framework/src/Illuminate/Database/Connection.php: 664
    660|         // If an exception occurs when attempting to run a query, we'll format the error
    661|         // message to include the bindings with SQL, which will make this exception a
    662|         // lot more helpful to the developer instead of just the database's errors.
    663|         catch (Exception $e) {
  > 664|             throw new QueryException(
    665|                 $query, $this->prepareBindings($bindings), $e
    666|             );
    667|         }
    668|

  Exception trace:

  1   Doctrine\DBAL\Driver\PDOException::("SQLSTATE[HY000]: General error: 1364 Field 'api_token' doesn't have a default value")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 107

  2   PDOException::("SQLSTATE[HY000]: General error: 1364 Field 'api_token' doesn't have a default value")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 105

  Please use the argument -v to see more details.
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding Categories
Seeding: ProductsSeeder
Seeding Products
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$
ZEP-2:mossebo-shop-admin Urij$
ZEP-2:mossebo-shop-admin Urij$
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding Categories
Seeding: ProductsSeeder
Seeding Products
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding: ProductsSeeder
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ git add .
warning: CRLF will be replaced by LF in public_html/js/app.js.
The file will have its original line endings in your working directory.
ZEP-2:mossebo-shop-admin Urij$ git commit -m 'release 0.01'
[master 4ad8d59] release 0.01
 15 files changed, 272 insertions(+), 213 deletions(-)
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 34, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (34/34), done.
Writing objects: 100% (34/34), 4.90 KiB | 2.45 MiB/s, done.
Total 34 (delta 25), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   fdad0e0..4ad8d59  master -> master
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding: ProductsSeeder
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Rolling back: 2018_03_20_071139_create_media_table
Rolled back:  2018_03_20_071139_create_media_table
Rolling back: 2018_02_27_900920_create_order_products_table
Rolled back:  2018_02_27_900920_create_order_products_table
Rolling back: 2018_02_27_900620_create_category_products_table
Rolled back:  2018_02_27_900620_create_category_products_table
Rolling back: 2018_02_27_000910_create_orders_table
Rolled back:  2018_02_27_000910_create_orders_table
Rolling back: 2018_02_27_000900_create_order_statuses_table
Rolled back:  2018_02_27_000900_create_order_statuses_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding: ProductsSeeder
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh

   Illuminate\Database\QueryException  : SQLSTATE[2BP01]: Dependent objects still exist: 7 ERROR:  cannot drop table shop_suppliers because other objects depend on it
DETAIL:  constraint shop_suppliers_i18_supplier_id_foreign on table shop_suppliers_i18 depends on table shop_suppliers
constraint shop_supplier_products_supplier_id_foreign on table shop_supplier_products depends on table shop_suppliers
HINT:  Use DROP ... CASCADE to drop the dependent objects too. (SQL: drop table if exists "shop_suppliers")

  at /Users/Urij/code/mossebo-shop-admin/vendor/laravel/framework/src/Illuminate/Database/Connection.php: 664
    660|         // If an exception occurs when attempting to run a query, we'll format the error
    661|         // message to include the bindings with SQL, which will make this exception a
    662|         // lot more helpful to the developer instead of just the database's errors.
    663|         catch (Exception $e) {
  > 664|             throw new QueryException(
    665|                 $query, $this->prepareBindings($bindings), $e
    666|             );
    667|         }
    668|

  Exception trace:

  1   Doctrine\DBAL\Driver\PDOException::("SQLSTATE[2BP01]: Dependent objects still exist: 7 ERROR:  cannot drop table shop_suppliers because other objects depend on it
DETAIL:  constraint shop_suppliers_i18_supplier_id_foreign on table shop_suppliers_i18 depends on table shop_suppliers
constraint shop_supplier_products_supplier_id_foreign on table shop_supplier_products depends on table shop_suppliers
HINT:  Use DROP ... CASCADE to drop the dependent objects too.")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 107

  2   PDOException::("SQLSTATE[2BP01]: Dependent objects still exist: 7 ERROR:  cannot drop table shop_suppliers because other objects depend on it
DETAIL:  constraint shop_suppliers_i18_supplier_id_foreign on table shop_suppliers_i18 depends on table shop_suppliers
constraint shop_supplier_products_supplier_id_foreign on table shop_supplier_products depends on table shop_suppliers
HINT:  Use DROP ... CASCADE to drop the dependent objects too.")
      /Users/Urij/code/mossebo-shop-admin/vendor/doctrine/dbal/lib/Doctrine/DBAL/Driver/PDOStatement.php : 105

  Please use the argument -v to see more details.
ZEP-2:mossebo-shop-admin Urij$ php artisan migrate:refresh
Migration not found: 2018_02_27_900820_create_supplier_products_table
Migration not found: 2018_02_27_000810_create_suppliers_i18_table
Rolling back: 2018_02_27_000800_create_suppliers_table
Rolled back:  2018_02_27_000800_create_suppliers_table
Rolling back: 2018_02_27_000710_create_products_i18_table
Rolled back:  2018_02_27_000710_create_products_i18_table
Rolling back: 2018_02_27_000700_create_products_table
Rolled back:  2018_02_27_000700_create_products_table
Rolling back: 2018_02_27_000610_create_categories_i18_table
Rolled back:  2018_02_27_000610_create_categories_i18_table
Rolling back: 2018_02_27_000600_create_categories_table
Rolled back:  2018_02_27_000600_create_categories_table
Rolling back: 2018_02_27_000510_create_prices_table
Rolled back:  2018_02_27_000510_create_prices_table
Rolling back: 2018_02_27_000500_create_price_types_table
Rolled back:  2018_02_27_000500_create_price_types_table
Migration not found: 2018_02_27_000400_create_images_table
Rolling back: 2018_02_27_000300_create_languages_table
Rolled back:  2018_02_27_000300_create_languages_table
Rolling back: 2018_02_27_000200_create_currencies_table
Rolled back:  2018_02_27_000200_create_currencies_table
Rolling back: 2018_02_27_000100_create_settings_table
Rolled back:  2018_02_27_000100_create_settings_table
Rolling back: 2018_02_27_000050_create_social_providers_table
Rolled back:  2018_02_27_000050_create_social_providers_table
Rolling back: 2018_02_27_000040_create_users_table
Rolled back:  2018_02_27_000040_create_users_table
Rolling back: 2018_02_27_000030_create_admins_table
Rolled back:  2018_02_27_000030_create_admins_table
Rolling back: 2018_02_27_000020_create_password_resets_table
Rolled back:  2018_02_27_000020_create_password_resets_table
Rolling back: 2018_02_27_000010_create_roles_table
Rolled back:  2018_02_27_000010_create_roles_table
Rolling back: 2018_02_27_000000_clear_tables
Rolled back:  2018_02_27_000000_clear_tables
Migration not found: 2016_06_01_000005_create_oauth_personal_access_clients_table
Migration not found: 2016_06_01_000004_create_oauth_clients_table
Migration not found: 2016_06_01_000003_create_oauth_refresh_tokens_table
Migration not found: 2016_06_01_000002_create_oauth_access_tokens_table
Migration not found: 2016_06_01_000001_create_oauth_auth_codes_table
Create Roles
Create PasswordResets
Create Admins
Create Users
Create SocialProviders
Create Settings
Create Currencies
Create Languages
Create PriceTypes
Create Prices
Create Categories
Create CategoriesI18
Create Products
Create ProductsI18
Create Suppliers
Create OrderStatuses
Create Orders
Create CategoryProducts
Create OrderProducts
Migrating: 2018_02_27_000000_clear_tables
Migrated:  2018_02_27_000000_clear_tables
Migrating: 2018_02_27_000010_create_roles_table
Migrated:  2018_02_27_000010_create_roles_table
Migrating: 2018_02_27_000020_create_password_resets_table
Migrated:  2018_02_27_000020_create_password_resets_table
Migrating: 2018_02_27_000030_create_admins_table
Migrated:  2018_02_27_000030_create_admins_table
Migrating: 2018_02_27_000040_create_users_table
Migrated:  2018_02_27_000040_create_users_table
Migrating: 2018_02_27_000050_create_social_providers_table
Migrated:  2018_02_27_000050_create_social_providers_table
Migrating: 2018_02_27_000100_create_settings_table
Migrated:  2018_02_27_000100_create_settings_table
Migrating: 2018_02_27_000200_create_currencies_table
Migrated:  2018_02_27_000200_create_currencies_table
Migrating: 2018_02_27_000300_create_languages_table
Migrated:  2018_02_27_000300_create_languages_table
Migrating: 2018_02_27_000500_create_price_types_table
Migrated:  2018_02_27_000500_create_price_types_table
Migrating: 2018_02_27_000510_create_prices_table
Migrated:  2018_02_27_000510_create_prices_table
Migrating: 2018_02_27_000600_create_categories_table
Migrated:  2018_02_27_000600_create_categories_table
Migrating: 2018_02_27_000610_create_categories_i18_table
Migrated:  2018_02_27_000610_create_categories_i18_table
Migrating: 2018_02_27_000700_create_products_table
Migrated:  2018_02_27_000700_create_products_table
Migrating: 2018_02_27_000710_create_products_i18_table
Migrated:  2018_02_27_000710_create_products_i18_table
Migrating: 2018_02_27_000800_create_suppliers_table
Migrated:  2018_02_27_000800_create_suppliers_table
Migrating: 2018_02_27_000900_create_order_statuses_table
Migrated:  2018_02_27_000900_create_order_statuses_table
Migrating: 2018_02_27_000910_create_orders_table
Migrated:  2018_02_27_000910_create_orders_table
Migrating: 2018_02_27_900620_create_category_products_table
Migrated:  2018_02_27_900620_create_category_products_table
Migrating: 2018_02_27_900920_create_order_products_table
Migrated:  2018_02_27_900920_create_order_products_table
Migrating: 2018_03_20_071139_create_media_table
Migrated:  2018_03_20_071139_create_media_table
ZEP-2:mossebo-shop-admin Urij$ php artisan db:seed
Seeding: RolesSeeder
Seeding Roles
Seeding: AdminsSeeder
Seeding Admins
Seeding: CurrenciesSeeder
Seeding Currencies
Seeding: LanguagesSeeder
Seeding Languages
Seeding: CategoriesSeeder
Seeding: ProductsSeeder
Seeding: CategoryProductsSeeder
Seeding CategoryProducts
Seeding: PriceTypesSeeder
Seeding PriceTypes
Seeding: PricesSeeder
Seeding Prices
ZEP-2:mossebo-shop-admin Urij$ git add .
warning: CRLF will be replaced by LF in public_html/js/app.js.
The file will have its original line endings in your working directory.
ZEP-2:mossebo-shop-admin Urij$ git commit -m 'hotfix'
[master ee32e98] hotfix
 7 files changed, 11 insertions(+), 7 deletions(-)
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 26, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (25/25), done.
Writing objects: 100% (26/26), 2.09 KiB | 2.09 MiB/s, done.
Total 26 (delta 19), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   4ad8d59..ee32e98  master -> master
ZEP-2:mossebo-shop-admin Urij$ git add .
ZEP-2:mossebo-shop-admin Urij$ git status
On branch master
Your branch is up-to-date with 'origin/master'.

Changes to be committed:
  (use "git reset HEAD <file>..." to unstage)

	modified:   public_html/.htaccess

ZEP-2:mossebo-shop-admin Urij$ git commit -m 'htaccess'
[master c0b474f] htaccess
 1 file changed, 6 insertions(+), 2 deletions(-)
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 445 bytes | 445.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   ee32e98..c0b474f  master -> master
ZEP-2:mossebo-shop-admin Urij$ git status
On branch master
Your branch is up-to-date with 'origin/master'.

Changes not staged for commit:
  (use "git add <file>..." to update what will be committed)
  (use "git checkout -- <file>..." to discard changes in working directory)

	modified:   public_html/.htaccess

no changes added to commit (use "git add" and/or "git commit -a")
ZEP-2:mossebo-shop-admin Urij$ git add .
ZEP-2:mossebo-shop-admin Urij$ git commit -m 'htaccess'
[master d717645] htaccess
 1 file changed, 1 insertion(+), 1 deletion(-)
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 4, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (4/4), done.
Writing objects: 100% (4/4), 374 bytes | 374.00 KiB/s, done.
Total 4 (delta 3), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   c0b474f..d717645  master -> master
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ php artisan cache:clear
Cache cleared successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ php artisan cache:clear
Cache cleared successfully.
ZEP-2:mossebo-shop-admin Urij$ git add .
warning: CRLF will be replaced by LF in public/js/app.js.
The file will have its original line endings in your working directory.
ZEP-2:mossebo-shop-admin Urij$ git commit -m 'public_html to public'
[master 677ec41] public_html to public
git  2876 files changed, 8 insertions(+), 14 deletions(-)
 rename {public_html => public}/.htaccess (80%)
 rename {public_html => public}/css/app.css (100%)
 rename {public_html => public}/css/bootstrap.min.css (100%)
 rename {public_html => public}/css/fonts/Glyphicons PRO (License).txt (100%)
 rename {public_html => public}/css/fonts/fontawesome/FontAwesome.otf (100%)
 rename {public_html => public}/css/fonts/fontawesome/fontawesome-webfont.eot (100%)
 rename {public_html => public}/css/fonts/fontawesome/fontawesome-webfont.svg (100%)
 rename {public_html => public}/css/fonts/fontawesome/fontawesome-webfont.ttf (100%)
 rename {public_html => public}/css/fonts/fontawesome/fontawesome-webfont.woff (100%)
 rename {public_html => public}/css/fonts/fontawesome/fontawesome-webfont.woff2 (100%)
 rename {public_html => public}/css/fonts/glyphicons.filetypes.pro/glyphicons-filetypes-regular.eot (100%)
 rename {public_html => public}/css/fonts/glyphicons.filetypes.pro/glyphicons-filetypes-regular.svg (100%)
 rename {public_html => public}/css/fonts/glyphicons.filetypes.pro/glyphicons-filetypes-regular.ttf (100%)
 rename {public_html => public}/css/fonts/glyphicons.filetypes.pro/glyphicons-filetypes-regular.woff (100%)
 rename {public_html => public}/css/fonts/glyphicons.halflings.pro/glyphicons-halflings-regular.eot (100%)
 rename {public_html => public}/css/fonts/glyphicons.halflings.pro/glyphicons-halflings-regular.svg (100%)
 rename {public_html => public}/css/fonts/glyphicons.halflings.pro/glyphicons-halflings-regular.ttf (100%)
 rename {public_html => public}/css/fonts/glyphicons.halflings.pro/glyphicons-halflings-regular.woff (100%)
 rename {public_html => public}/css/fonts/glyphicons.pro/glyphicons-regular.eot (100%)
 rename {public_html => public}/css/fonts/glyphicons.pro/glyphicons-regular.svg (100%)
 rename {public_html => public}/css/fonts/glyphicons.pro/glyphicons-regular.ttf (100%)
 rename {public_html => public}/css/fonts/glyphicons.pro/glyphicons-regular.woff (100%)
 rename {public_html => public}/css/fonts/glyphicons.social.pro/glyphicons-social-regular.eot (100%)
 rename {public_html => public}/css/fonts/glyphicons.social.pro/glyphicons-social-regular.svg (100%)
 rename {public_html => public}/css/fonts/glyphicons.social.pro/glyphicons-social-regular.ttf (100%)
 rename {public_html => public}/css/fonts/glyphicons.social.pro/glyphicons-social-regular.woff (100%)
 rename {public_html => public}/css/main.css (100%)
 rename {public_html => public}/css/plugins.css (100%)
 rename {public_html => public}/css/themes.css (100%)
 rename {public_html => public}/css/themes/amethyst.css (100%)
 rename {public_html => public}/css/themes/autumn.css (100%)
 rename {public_html => public}/css/themes/blackberry.css (100%)
 rename {public_html => public}/css/themes/coral.css (100%)
 rename {public_html => public}/css/themes/emerald.css (100%)
 rename {public_html => public}/css/themes/fancy.css (100%)
 rename {public_html => public}/css/themes/fire.css (100%)
 rename {public_html => public}/css/themes/flatie.css (100%)
 rename {public_html => public}/css/themes/forest.css (100%)
 rename {public_html => public}/css/themes/lake.css (100%)
 rename {public_html => public}/css/themes/modern.css (100%)
 rename {public_html => public}/css/themes/night.css (100%)
 rename {public_html => public}/css/themes/spring.css (100%)
 rename {public_html => public}/css/themes/waterlily.css (100%)
 rename {public_html => public}/img/favicons/favicon.ico (100%)
 rename {public_html => public}/img/favicons/favicon.png (100%)
 rename {public_html => public}/img/icon114.png (100%)
 rename {public_html => public}/img/icon120.png (100%)
 rename {public_html => public}/img/icon144.png (100%)
 rename {public_html => public}/img/icon152.png (100%)
 rename {public_html => public}/img/icon180.png (100%)
 rename {public_html => public}/img/icon57.png (100%)
 rename {public_html => public}/img/icon72.png (100%)
 rename {public_html => public}/img/icon76.png (100%)
 rename {public_html => public}/img/jquery.chosen/chosen-sprite.png (100%)
 rename {public_html => public}/img/jquery.chosen/chosen-sprite@2x.png (100%)
 rename {public_html => public}/img/jquery.colorpicker/alpha-horizontal.png (100%)
 rename {public_html => public}/img/jquery.colorpicker/alpha.png (100%)
 rename {public_html => public}/img/jquery.colorpicker/hue-horizontal.png (100%)
 rename {public_html => public}/img/jquery.colorpicker/hue.png (100%)
 rename {public_html => public}/img/jquery.colorpicker/saturation.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_asc.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_asc@2x.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_asc_disabled.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_asc_disabled@2x.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_both.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_both@2x.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_desc.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_desc@2x.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_desc_disabled.png (100%)
 rename {public_html => public}/img/jquery.datatables/sort_desc_disabled@2x.png (100%)
 rename {public_html => public}/img/logo-white.png (100%)
 rename {public_html => public}/img/logo-white@2x.png (100%)
 rename {public_html => public}/img/logo.png (100%)
 rename {public_html => public}/img/logo@2x.png (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar1.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar10.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar10@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar11.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar11@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar12.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar12@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar13.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar13@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar14.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar14@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar15.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar15@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar16.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar16@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar1@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar2.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar2@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar3.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar3@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar4.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar4@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar5.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar5@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar6.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar6@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar7.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar7@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar8.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar8@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar9.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar9@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/avatar@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/avatars/readme.txt (100%)
 rename {public_html => public}/img/placeholders/backgrounds/coming_soon_full_bg.jpg (100%)
 rename {public_html => public}/img/placeholders/backgrounds/lock_full_bg.jpg (100%)
 rename {public_html => public}/img/placeholders/backgrounds/login_full_bg-2.jpg (100%)
 rename {public_html => public}/img/placeholders/backgrounds/login_full_bg.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/article_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/dashboard_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/lock_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/login_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/profile_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/widget1_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/widget2_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/widget3_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/widget4_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/widget5_header.jpg (100%)
 rename {public_html => public}/img/placeholders/headers/widget6_header.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo1.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo10.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo10@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo11.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo11@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo12.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo12@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo13.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo13@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo14.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo14@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo15.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo15@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo16.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo16@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo17.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo17@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo18.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo18@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo19.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo19@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo1@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo2.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo20.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo20@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo21.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo21@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo22.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo22@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo23.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo23@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo24.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo24@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo2@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo3.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo3@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo4.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo4@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo5.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo5@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo6.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo6@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo7.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo7@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo8.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo8@2x.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo9.jpg (100%)
 rename {public_html => public}/img/placeholders/photos/photo9@2x.jpg (100%)
 rename {public_html => public}/index.php (100%)
 rename {public_html => public}/js/app.js (100%)
 rename {public_html => public}/js/plugins.js (100%)
 rename {public_html => public}/js/vendor/bootstrap.min.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/CHANGES.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/LICENSE.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/README.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/adapters/jquery.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/bower.json (100%)
 rename {public_html => public}/js/vendor/ckeditor/ckeditor.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/composer.json (100%)
 rename {public_html => public}/js/vendor/ckeditor/config.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/contents.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/_translationstatus.txt (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/package.json (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/a11yhelp.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/_translationstatus.txt (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/a11yhelp/dialogs/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/about/dialogs/about.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/about/dialogs/hidpi/logo_ckeditor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/about/dialogs/logo_ckeditor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/adobeair/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/ajax/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autoembed/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autogrow/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/autolink/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloonpanel/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloonpanel/skins/kama/balloonpanel.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono-lisa/balloonpanel.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono-lisa/images/close.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono-lisa/images/hidpi/close.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono/balloonpanel.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono/images/close.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloonpanel/skins/moono/images/hidpi/close.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloontoolbar/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloontoolbar/skins/default.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloontoolbar/skins/kama/balloontoolbar.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloontoolbar/skins/moono-lisa/balloontoolbar.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/balloontoolbar/skins/moono/balloontoolbar.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bbcode/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/icons/bidiltr.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/icons/bidirtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/icons/hidpi/bidiltr.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/icons/hidpi/bidirtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/bidi/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/clipboard/dialogs/paste.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/cloudservices/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/dialogs/codesnippet.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/icons/codesnippet.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/icons/hidpi/codesnippet.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/CHANGES.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/LICENSE (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/README.ru.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/highlight.pack.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/arta.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/ascetic.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-dune.dark.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-dune.light.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-forest.dark.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-forest.light.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-heath.dark.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-heath.light.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-lakeside.dark.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-lakeside.light.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-seaside.dark.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/atelier-seaside.light.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/brown_paper.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/brown_papersq.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/dark.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/default.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/docco.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/far.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/foundation.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/github.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/googlecode.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/idea.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/ir_black.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/magula.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/mono-blue.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/monokai_sublime.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/obsidian.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/paraiso.dark.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/paraiso.light.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/pojoaque.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/pojoaque.jpg (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/railscasts.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/rainbow.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/school_book.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/school_book.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/solarized_dark.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/solarized_light.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/sunburst.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow-night-blue.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow-night-bright.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow-night-eighties.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow-night.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/tomorrow.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/vs.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/xcode.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/lib/highlight/styles/zenburn.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippet/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/codesnippetgeshi/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/icons/bgcolor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/icons/hidpi/bgcolor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/icons/hidpi/textcolor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/icons/textcolor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colorbutton/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/dialogs/colordialog.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/dialogs/colordialog.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/colordialog/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/cursors/cursor-disabled.svg (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/cursors/cursor.svg (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/icons/copyformatting.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/icons/hidpi/copyformatting.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/copyformatting/styles/copyformatting.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/_translationstatus.txt (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/devtools/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/dialog/dialogDefinition.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/dialogadvtab/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/dialogs/div.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/icons/creatediv.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/icons/hidpi/creatediv.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/div/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/divarea/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/dialogs/docprops.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/icons/docprops-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/icons/docprops.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/icons/hidpi/docprops-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/icons/hidpi/docprops.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/docprops/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/dialogs/easyimagealt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagealigncenter.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagealignleft.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagealignright.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagealt.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/easyimagefull.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/easyimageside.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/easyimageupload.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagealigncenter.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagealignleft.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagealignright.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagealt.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimagefull.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimageside.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/icons/hidpi/easyimageupload.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/easyimage/styles/easyimage.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embed/icons/embed.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embed/icons/hidpi/embed.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embed/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/dialogs/embedbase.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedbase/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedsemantic/icons/embedsemantic.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedsemantic/icons/hidpi/embedsemantic.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/embedsemantic/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/dialogs/find.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/icons/find-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/icons/find.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/icons/hidpi/find-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/icons/hidpi/find.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/icons/hidpi/replace.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/icons/replace.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/find/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/dialogs/flash.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/icons/flash.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/icons/hidpi/flash.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/images/placeholder.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/flash/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/font/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/dialogs/button.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/dialogs/checkbox.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/dialogs/form.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/dialogs/hiddenfield.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/dialogs/radio.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/dialogs/select.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/dialogs/textarea.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/dialogs/textfield.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/button.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/checkbox.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/form.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hiddenfield.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/button.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/checkbox.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/form.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/hiddenfield.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/imagebutton.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/radio.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/select-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/select.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/textarea-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/textarea.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/textfield-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/hidpi/textfield.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/imagebutton.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/radio.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/select-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/select.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/textarea-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/textarea.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/textfield-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/icons/textfield.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/images/hiddenfield.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/forms/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/icons.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/icons_hidpi.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/dialogs/iframe.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/icons/hidpi/iframe.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/icons/iframe.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/images/placeholder.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframe/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/iframedialog/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image/dialogs/image.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image/images/noimage.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/dialogs/image2.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/icons/hidpi/image.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/icons/image.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/image2/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/imagebase/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/imagebase/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/imagebase/styles/imagebase.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/indentblock/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/justify/icons/hidpi/justifyblock.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/justify/icons/hidpi/justifycenter.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/justify/icons/hidpi/justifyleft.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/justify/icons/hidpi/justifyright.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/justify/icons/justifyblock.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/justify/icons/justifycenter.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/justify/icons/justifyleft.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/justify/icons/justifyright.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/justify/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/icons/hidpi/language.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/icons/language.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/language/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/link/dialogs/anchor.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/link/dialogs/link.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/link/images/anchor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/link/images/hidpi/anchor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/dialogs/liststyle.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/liststyle/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/magicline/images/hidpi/icon-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/magicline/images/hidpi/icon.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/magicline/images/icon-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/magicline/images/icon.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/dialogs/mathjax.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/icons/hidpi/mathjax.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/icons/mathjax.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/images/loader.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/mathjax/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/icons/hidpi/newpage-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/icons/hidpi/newpage.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/icons/newpage-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/icons/newpage.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/newpage/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/icons/hidpi/pagebreak-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/icons/hidpi/pagebreak.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/icons/pagebreak-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/icons/pagebreak.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/images/pagebreak.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pagebreak/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/panelbutton/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/pastefromword/filter/default.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/dialogs/placeholder.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/icons/hidpi/placeholder.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/icons/placeholder.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/placeholder/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/icons/hidpi/preview-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/icons/hidpi/preview.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/icons/preview-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/icons/preview.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/preview/preview.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/icons/hidpi/print.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/icons/print.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/print/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/icons/hidpi/save.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/icons/save.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/save/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/scayt/CHANGELOG.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/scayt/LICENSE.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/scayt/dialogs/dialog.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/scayt/dialogs/options.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/scayt/dialogs/toolbar.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/icons/hidpi/selectall.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/icons/selectall.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/selectall/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sharedspace/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/icons/hidpi/showblocks-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/icons/hidpi/showblocks.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/icons/showblocks-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/icons/showblocks.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_address.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_blockquote.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_div.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_h1.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_h2.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_h3.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_h4.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_h5.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_h6.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_p.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/images/block_pre.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/showblocks/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/dialogs/smiley.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/icons/hidpi/smiley.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/icons/smiley.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/angel_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/angel_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/angry_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/angry_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/broken_heart.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/broken_heart.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/confused_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/confused_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/cry_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/cry_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/devil_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/devil_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/embaressed_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/embarrassed_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/embarrassed_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/envelope.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/envelope.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/heart.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/heart.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/kiss.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/kiss.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/lightbulb.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/lightbulb.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/omg_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/omg_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/regular_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/regular_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/sad_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/sad_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/shades_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/shades_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/teeth_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/teeth_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/thumbs_down.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/thumbs_down.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/thumbs_up.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/thumbs_up.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/tongue_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/tongue_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/tounge_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/whatchutalkingabout_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/whatchutalkingabout_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/wink_smile.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/images/wink_smile.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/smiley/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/dialogs/sourcedialog.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/icons/hidpi/sourcedialog-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/icons/hidpi/sourcedialog.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/icons/sourcedialog-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/icons/sourcedialog.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/sourcedialog/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/_translationstatus.txt (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/specialchar/dialogs/specialchar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/stylesheetparser/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/table/dialogs/table.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/tableresize/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/tableselection/styles/tableselection.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/tabletools/dialogs/tableCell.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/dialogs/templates.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/dialogs/templates.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/icons/hidpi/templates-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/icons/hidpi/templates.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/icons/templates-rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/icons/templates.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/bn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/bs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/en-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/fo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/gu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/hi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/is.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ka.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/lt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/mn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ms.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/sr-latn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/sr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/th.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/templates/default.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/templates/images/template1.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/templates/images/template2.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/templates/templates/images/template3.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/dialogs/uicolor.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/dialogs/uicolor.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/icons/hidpi/uicolor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/icons/uicolor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/_translationstatus.txt (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/af.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/ar.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/az.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/bg.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/cs.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/cy.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/da.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/de-ch.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/de.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/el.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/en-au.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/en-gb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/en.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/eo.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/es-mx.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/es.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/et.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/eu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/fa.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/fi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/fr-ca.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/fr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/gl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/he.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/hr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/hu.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/id.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/it.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/ja.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/km.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/ko.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/ku.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/lv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/mk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/nb.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/nl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/no.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/oc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/pl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/pt-br.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/pt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/ro.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/ru.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/si.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/sk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/sl.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/sq.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/sv.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/tr.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/tt.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/ug.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/uk.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/vi.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/zh-cn.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/lang/zh.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uicolor/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/uploadfile/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/widget/images/handle.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/wsc/LICENSE.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/wsc/dialogs/ciframe.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/wsc/dialogs/tmpFrameset.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/wsc/dialogs/wsc.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/wsc/dialogs/wsc.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/wsc/dialogs/wsc_ie.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/plugins/xml/plugin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/css/samples.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/img/github-top.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/img/header-bg.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/img/header-separator.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/img/logo.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/img/logo.svg (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/img/navigation-tip.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/index.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/js/sample.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/js/sf.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/ajax.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/api.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/appendto.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/assets/inlineall/logo.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/assets/outputxhtml/outputxhtml.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/assets/posteddata.php (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/assets/sample.jpg (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/assets/uilanguages/languages.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/autogrow/autogrow.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/bbcode/bbcode.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/codesnippet/codesnippet.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/datafiltering.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/devtools/devtools.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/dialog/assets/my_dialog.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/dialog/dialog.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/divarea/divarea.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/divreplace.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/docprops/docprops.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/easyimage/easyimage.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/enterkey/enterkey.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/htmlwriter/assets/outputforflash/outputforflash.fla (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/htmlwriter/assets/outputforflash/outputforflash.swf (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/htmlwriter/assets/outputforflash/swfobject.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/htmlwriter/outputforflash.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/htmlwriter/outputhtml.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/image2/assets/image1.jpg (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/image2/assets/image2.jpg (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/image2/image2.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/index.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/inlineall.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/inlinebycode.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/inlinetextarea.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/jquery.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/magicline/magicline.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/mathjax/mathjax.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/placeholder/placeholder.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/readonly.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/replacebyclass.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/replacebycode.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/sample.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/sample.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/sample_posteddata.php (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/sharedspace/sharedspace.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/sourcedialog/sourcedialog.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/stylesheetparser/assets/sample.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/stylesheetparser/stylesheetparser.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/tabindex.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/tableresize/tableresize.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/toolbar/toolbar.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/uicolor.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/uicolor/uicolor.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/uilanguages.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/wysiwygarea/fullpage.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/old/xhtmlstyle.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/css/fontello.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/font/LICENSE.txt (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/font/config.json (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/font/fontello.eot (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/font/fontello.svg (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/font/fontello.ttf (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/font/fontello.woff (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/index.html (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/js/abstracttoolbarmodifier.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/js/fulltoolbareditor.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/js/toolbarmodifier.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/js/toolbartextmodifier.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/LICENSE (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/codemirror.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/codemirror.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/javascript.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/show-hint.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/samples/toolbarconfigurator/lib/codemirror/show-hint.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/dialog.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/dialog_ie.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/dialog_ie7.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/dialog_ie8.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/dialog_iequirks.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/editor.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/editor_ie.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/editor_ie7.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/editor_ie8.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/editor_iequirks.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/icons.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/icons_hidpi.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/images/dialog_sides.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/images/dialog_sides.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/images/dialog_sides_rtl.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/images/mini.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/images/spinner.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/images/sprites.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/images/sprites_ie6.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/images/toolbar_start.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/readme.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/kama/skin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/dialog.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/dialog_ie.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/dialog_ie8.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/dialog_iequirks.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/editor.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/editor_gecko.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/editor_ie.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/editor_ie8.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/editor_iequirks.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/icons.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/icons_hidpi.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/arrow.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/close.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/hidpi/close.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/hidpi/lock-open.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/hidpi/lock.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/hidpi/refresh.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/lock-open.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/lock.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/refresh.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/images/spinner.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono-lisa/readme.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/dialog.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/dialog_ie.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/dialog_ie7.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/dialog_ie8.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/dialog_iequirks.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/editor.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/editor_gecko.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/editor_ie.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/editor_ie7.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/editor_ie8.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/editor_iequirks.css (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/icons.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/icons_hidpi.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/anchor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/arrow.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/close.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/hidpi/anchor.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/hidpi/close.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/hidpi/lock-open.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/hidpi/lock.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/hidpi/refresh.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/lock-open.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/lock.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/refresh.png (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/images/spinner.gif (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/readme.md (100%)
 rename {public_html => public}/js/vendor/ckeditor/skins/moono/skin.js (100%)
 rename {public_html => public}/js/vendor/ckeditor/styles.js (100%)
 rename {public_html => public}/js/vendor/jquery.min.js (100%)
 rename {public_html => public}/js/vendor/modernizr.min.js (100%)
 rename {public_html => public}/mix-manifest.json (100%)
 rename {public_html => public}/robots.txt (100%)
 delete mode 120000 public_html/storage
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 8, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (8/8), done.
Writing objects: 100% (8/8), 1.06 KiB | 1.06 MiB/s, done.
Total 8 (delta 4), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   d717645..677ec41  master -> master
ZEP-2:mossebo-shop-admin Urij$ git add .
ZEP-2:mossebo-shop-admin Urij$ git commit -m 'image filename generation'
[master c7ad459] image filename generation
 1 file changed, 1 insertion(+), 1 deletion(-)
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 7, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (7/7), done.
Writing objects: 100% (7/7), 633 bytes | 633.00 KiB/s, done.
Total 7 (delta 6), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   677ec41..c7ad459  master -> master
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ git add .
ZEP-2:mossebo-shop-admin Urij$ git commit -m 'uploads folder'
[master 1facfef] uploads folder
 14 files changed, 11 insertions(+), 2 deletions(-)
 create mode 100644 public/uploads/12/5ac230c80958c527776896.jpeg
 create mode 100644 public/uploads/12/conversions/5ac230c80958c527776896-large.jpg
 create mode 100644 public/uploads/12/conversions/5ac230c80958c527776896-medium.jpg
 create mode 100644 public/uploads/12/conversions/5ac230c80958c527776896-small.jpg
 create mode 100644 public/uploads/12/conversions/5ac230c80958c527776896-thumb.jpg
 create mode 100644 public/uploads/12/responsive-images/5ac230c80958c527776896___large_1280_720.jpeg
 create mode 100644 public/uploads/12/responsive-images/5ac230c80958c527776896___large_640_360.jpeg
 create mode 100644 public/uploads/12/responsive-images/5ac230c80958c527776896___medium_400_225.jpeg
 create mode 100644 public/uploads/12/responsive-images/5ac230c80958c527776896___medium_800_450.jpeg
 create mode 100644 public/uploads/12/responsive-images/5ac230c80958c527776896___small_280_158.jpeg
 create mode 100644 public/uploads/12/responsive-images/5ac230c80958c527776896___small_560_316.jpeg
 create mode 100644 public/uploads/12/responsive-images/5ac230c80958c527776896___thumb_160_90.jpeg
 create mode 100644 public/uploads/12/responsive-images/5ac230c80958c527776896___thumb_320_180.jpeg
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 19, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (18/18), done.
Writing objects: 100% (19/19), 436.63 KiB | 29.11 MiB/s, done.
Total 19 (delta 4), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   c7ad459..1facfef  master -> master
ZEP-2:mossebo-shop-admin Urij$ httpd -v
Server version: Apache/2.4.28 (Unix)
Server built:   Oct  9 2017 19:54:20
ZEP-2:mossebo-shop-admin Urij$ httpd
AH00558: httpd: Could not reliably determine the server's fully qualified domain name, using ZEP-2.local. Set the 'ServerName' directive globally to suppress this message
(13)Permission denied: AH00072: make_sock: could not bind to address [::]:80
(13)Permission denied: AH00072: make_sock: could not bind to address 0.0.0.0:80
no listening sockets available, shutting down
AH00015: Unable to open logs
ZEP-2:mossebo-shop-admin Urij$ httpd -h
Usage: httpd [-D name] [-d directory] [-f file]
             [-C "directive"] [-c "directive"]
             [-k start|restart|graceful|graceful-stop|stop]
             [-v] [-V] [-h] [-l] [-L] [-t] [-T] [-S] [-X]
Options:
  -D name            : define a name for use in <IfDefine name> directives
  -d directory       : specify an alternate initial ServerRoot
  -f file            : specify an alternate ServerConfigFile
  -C "directive"     : process directive before reading config files
  -c "directive"     : process directive after reading config files
  -e level           : show startup errors of level (see LogLevel)
  -E file            : log startup errors to file
  -v                 : show version number
  -V                 : show compile settings
  -h                 : list available command line options (this page)
  -l                 : list compiled in modules
  -L                 : list available configuration directives
  -t -D DUMP_VHOSTS  : show parsed vhost settings
  -t -D DUMP_RUN_CFG : show parsed run settings
  -S                 : a synonym for -t -D DUMP_VHOSTS -D DUMP_RUN_CFG
  -t -D DUMP_MODULES : show all loaded modules
  -M                 : a synonym for -t -D DUMP_MODULES
  -t -D DUMP_INCLUDES: show all included configuration files
  -t                 : run syntax check for config files
  -T                 : start without DocumentRoot(s) check
  -X                 : debug mode (only one worker, do not detach)
ZEP-2:mossebo-shop-admin Urij$ httpd -config
AH00526: Syntax error on line 1 of -c/-C directives:
Invalid command 'onfig', perhaps misspelled or defined by a module not included in the server configuration
ZEP-2:mossebo-shop-admin Urij$ httpd -V
Server version: Apache/2.4.28 (Unix)
Server built:   Oct  9 2017 19:54:20
Server's Module Magic Number: 20120211:68
Server loaded:  APR 1.5.2, APR-UTIL 1.5.4
Compiled using: APR 1.5.2, APR-UTIL 1.5.4
Architecture:   64-bit
Server MPM:     prefork
  threaded:     no
    forked:     yes (variable process count)
Server compiled with....
 -D APR_HAS_SENDFILE
 -D APR_HAS_MMAP
 -D APR_HAVE_IPV6 (IPv4-mapped addresses enabled)
 -D APR_USE_FLOCK_SERIALIZE
 -D APR_USE_PTHREAD_SERIALIZE
 -D SINGLE_LISTEN_UNSERIALIZED_ACCEPT
 -D APR_HAS_OTHER_CHILD
 -D AP_HAVE_RELIABLE_PIPED_LOGS
 -D DYNAMIC_MODULE_LIMIT=256
 -D HTTPD_ROOT="/usr"
 -D SUEXEC_BIN="/usr/bin/suexec"
 -D DEFAULT_PIDLOG="/private/var/run/httpd.pid"
 -D DEFAULT_SCOREBOARD="logs/apache_runtime_status"
 -D DEFAULT_ERRORLOG="logs/error_log"
 -D AP_TYPES_CONFIG_FILE="/private/etc/apache2/mime.types"
 -D SERVER_CONFIG_FILE="/private/etc/apache2/httpd.conf"
ZEP-2:mossebo-shop-admin Urij$ sublime /private/etc/apache2/httpd.conf
ZEP-2:mossebo-shop-admin Urij$ sublime /etc/hosts
hosts        hosts.equiv  hosts~orig
ZEP-2:mossebo-shop-admin Urij$ sublime /etc/hosts
hosts        hosts.equiv  hosts~orig
ZEP-2:mossebo-shop-admin Urij$ sublime /etc/hosts
ZEP-2:mossebo-shop-admin Urij$ apachectl restart
This operation requires root.
ZEP-2:mossebo-shop-admin Urij$ sudo !!
sudo apachectl restart
Password:
ZEP-2:mossebo-shop-admin Urij$ sublime /private/etc/apache2/httpd.conf
ZEP-2:mossebo-shop-admin Urij$ sublime /private/etc/apache2/extra/httpd-vhosts.conf
ZEP-2:mossebo-shop-admin Urij$ sudo apachectl restart
ZEP-2:mossebo-shop-admin Urij$ cd ~/code/mossebo-shop-
mossebo-shop-admin/ mossebo-shop-core/
ZEP-2:mossebo-shop-admin Urij$ cd ~/code/mossebo-shop-admin/public/
ZEP-2:public Urij$ sudo chmod -R 777 .
ZEP-2:public Urij$ sudo apachectl restart
ZEP-2:public Urij$ sudo apachectl restart
ZEP-2:public Urij$ sudo apachectl restart
ZEP-2:public Urij$ sudo apachectl restart
ZEP-2:public Urij$ sublime /private/var/log/apache2/mossebo-shop-admin.test-error_log
ZEP-2:public Urij$ sudo apachectl restart
ZEP-2:public Urij$ cd ..
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ php artisan cache:clear
Cache cleared successfully.
ZEP-2:mossebo-shop-admin Urij$ httpd restart
Usage: httpd [-D name] [-d directory] [-f file]
             [-C "directive"] [-c "directive"]
             [-k start|restart|graceful|graceful-stop|stop]
             [-v] [-V] [-h] [-l] [-L] [-t] [-T] [-S] [-X]
Options:
  -D name            : define a name for use in <IfDefine name> directives
  -d directory       : specify an alternate initial ServerRoot
  -f file            : specify an alternate ServerConfigFile
  -C "directive"     : process directive before reading config files
  -c "directive"     : process directive after reading config files
  -e level           : show startup errors of level (see LogLevel)
  -E file            : log startup errors to file
  -v                 : show version number
  -V                 : show compile settings
  -h                 : list available command line options (this page)
  -l                 : list compiled in modules
  -L                 : list available configuration directives
  -t -D DUMP_VHOSTS  : show parsed vhost settings
  -t -D DUMP_RUN_CFG : show parsed run settings
  -S                 : a synonym for -t -D DUMP_VHOSTS -D DUMP_RUN_CFG
  -t -D DUMP_MODULES : show all loaded modules
  -M                 : a synonym for -t -D DUMP_MODULES
  -t -D DUMP_INCLUDES: show all included configuration files
  -t                 : run syntax check for config files
  -T                 : start without DocumentRoot(s) check
  -X                 : debug mode (only one worker, do not detach)
ZEP-2:mossebo-shop-admin Urij$ httpd stop
Usage: httpd [-D name] [-d directory] [-f file]
             [-C "directive"] [-c "directive"]
             [-k start|restart|graceful|graceful-stop|stop]
             [-v] [-V] [-h] [-l] [-L] [-t] [-T] [-S] [-X]
Options:
  -D name            : define a name for use in <IfDefine name> directives
  -d directory       : specify an alternate initial ServerRoot
  -f file            : specify an alternate ServerConfigFile
  -C "directive"     : process directive before reading config files
  -c "directive"     : process directive after reading config files
  -e level           : show startup errors of level (see LogLevel)
  -E file            : log startup errors to file
  -v                 : show version number
  -V                 : show compile settings
  -h                 : list available command line options (this page)
  -l                 : list compiled in modules
  -L                 : list available configuration directives
  -t -D DUMP_VHOSTS  : show parsed vhost settings
  -t -D DUMP_RUN_CFG : show parsed run settings
  -S                 : a synonym for -t -D DUMP_VHOSTS -D DUMP_RUN_CFG
  -t -D DUMP_MODULES : show all loaded modules
  -M                 : a synonym for -t -D DUMP_MODULES
  -t -D DUMP_INCLUDES: show all included configuration files
  -t                 : run syntax check for config files
  -T                 : start without DocumentRoot(s) check
  -X                 : debug mode (only one worker, do not detach)
ZEP-2:mossebo-shop-admin Urij$ sudo apachectl restart
ZEP-2:mossebo-shop-admin Urij$ apachectl
AH00558: httpd: Could not reliably determine the server's fully qualified domain name, using ZEP-2.local. Set the 'ServerName' directive globally to suppress this message
(13)Permission denied: AH00072: make_sock: could not bind to address [::]:80
(13)Permission denied: AH00072: make_sock: could not bind to address 0.0.0.0:80
no listening sockets available, shutting down
AH00015: Unable to open logs
ZEP-2:mossebo-shop-admin Urij$ apachectl status
Go to http://localhost:80/server-status in the web browser of your choice.
Note that mod_status must be enabled for this to work.
ZEP-2:mossebo-shop-admin Urij$ ls
app			node_modules		server.php
artisan			package-lock.json	storage
bootstrap		package.json		tests
composer.json		phpunit.xml		vendor
composer.lock		public			webpack.mix.js
config			resources		yarn.lock
database		routes
ZEP-2:mossebo-shop-admin Urij$ ps
  PID TTY           TIME CMD
  916 ttys000    0:00.08 -bash
 1079 ttys001    0:00.15 -bash
 1161 ttys002    0:00.37 -bash
ZEP-2:mossebo-shop-admin Urij$ apachectl status
Go to http://localhost:80/server-status in the web browser of your choice.
Note that mod_status must be enabled for this to work.
ZEP-2:mossebo-shop-admin Urij$ sublime /etc/httpd/conf/extra/httpd-info.conf
ZEP-2:mossebo-shop-admin Urij$ cd /usr/local
ZEP-2:local Urij$ ls
bin				mysql-5.7.21-macos10.13-x86_64
include				remotedesktop
lib				share
mysql
ZEP-2:local Urij$ apachectl status
Go to http://localhost:80/server-status in the web browser of your choice.
Note that mod_status must be enabled for this to work.
ZEP-2:local Urij$ sudo apachectl restart
Password:
ZEP-2:local Urij$ apachectl configtest
Syntax OK
ZEP-2:local Urij$ sublime /private/etc/apache2/other/*.conf
ZEP-2:local Urij$ httpd -v
Server version: Apache/2.4.28 (Unix)
Server built:   Oct  9 2017 19:54:20
ZEP-2:local Urij$ sudo apachectl restart
ZEP-2:local Urij$ ps
  PID TTY           TIME CMD
  916 ttys000    0:00.08 -bash
 1079 ttys001    0:00.15 -bash
 1161 ttys002    0:00.40 -bash
ZEP-2:local Urij$ sudo apachectl restart
ZEP-2:local Urij$ sudo apachectl restart
ZEP-2:local Urij$ git status
fatal: Not a git repository (or any of the parent directories): .git
ZEP-2:local Urij$ php artisan cache:clear
Could not open input file: artisan
ZEP-2:local Urij$ cd ~/code/
.DS_Store           mossebo-shop-admin/ shopping/
aimeos/             mossebo-shop-core/  test.test/
mossebo-shop/       mossebo-shop.test/
ZEP-2:local Urij$ cd ~/code/mossebo-shop-admin/
ZEP-2:mossebo-shop-admin Urij$ php artisan cache:clear
Cache cleared successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ php artisan cache:clear
Cache cleared successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ git add .
warning: CRLF will be replaced by LF in public/js/app.js.
The file will have its original line endings in your working directory.
ZEP-2:mossebo-shop-admin Urij$ git commit -m 'pole v confige'
[master 200a082] pole v confige
 37 files changed, 4 insertions(+), 3 deletions(-)
 mode change 100644 => 100755 public/img/favicons/favicon.ico
 mode change 100644 => 100755 public/img/favicons/favicon.png
 mode change 100644 => 100755 public/img/logo-white.png
 mode change 100644 => 100755 public/img/logo-white@2x.png
 mode change 100644 => 100755 public/img/logo.png
 mode change 100644 => 100755 public/img/logo@2x.png
 mode change 100644 => 100755 public/img/placeholders/backgrounds/login_full_bg.jpg
 mode change 100644 => 100755 public/js/app.js
 mode change 100644 => 100755 public/uploads/12/5ac230c80958c527776896.jpeg
 mode change 100644 => 100755 public/uploads/12/conversions/5ac230c80958c527776896-large.jpg
 mode change 100644 => 100755 public/uploads/12/conversions/5ac230c80958c527776896-medium.jpg
 mode change 100644 => 100755 public/uploads/12/conversions/5ac230c80958c527776896-small.jpg
 mode change 100644 => 100755 public/uploads/12/conversions/5ac230c80958c527776896-thumb.jpg
 mode change 100644 => 100755 public/uploads/12/responsive-images/5ac230c80958c527776896___large_1280_720.jpeg
 mode change 100644 => 100755 public/uploads/12/responsive-images/5ac230c80958c527776896___large_640_360.jpeg
 mode change 100644 => 100755 public/uploads/12/responsive-images/5ac230c80958c527776896___medium_400_225.jpeg
 mode change 100644 => 100755 public/uploads/12/responsive-images/5ac230c80958c527776896___medium_800_450.jpeg
 mode change 100644 => 100755 public/uploads/12/responsive-images/5ac230c80958c527776896___small_280_158.jpeg
 mode change 100644 => 100755 public/uploads/12/responsive-images/5ac230c80958c527776896___small_560_316.jpeg
 mode change 100644 => 100755 public/uploads/12/responsive-images/5ac230c80958c527776896___thumb_160_90.jpeg
 mode change 100644 => 100755 public/uploads/12/responsive-images/5ac230c80958c527776896___thumb_320_180.jpeg
 create mode 100644 public/uploads/18/5ac24daa1a145716513471.jpeg
 create mode 100644 public/uploads/18/conversions/5ac24daa1a145716513471-large.jpg
 create mode 100644 public/uploads/18/conversions/5ac24daa1a145716513471-medium.jpg
 create mode 100644 public/uploads/18/conversions/5ac24daa1a145716513471-small.jpg
 create mode 100644 public/uploads/18/conversions/5ac24daa1a145716513471-thumb.jpg
 create mode 100644 public/uploads/18/responsive-images/5ac24daa1a145716513471___large_1280_720.jpeg
 create mode 100644 public/uploads/18/responsive-images/5ac24daa1a145716513471___large_640_360.jpeg
 create mode 100644 public/uploads/18/responsive-images/5ac24daa1a145716513471___medium_400_225.jpeg
 create mode 100644 public/uploads/18/responsive-images/5ac24daa1a145716513471___medium_800_450.jpeg
 create mode 100644 public/uploads/18/responsive-images/5ac24daa1a145716513471___small_280_158.jpeg
 create mode 100644 public/uploads/18/responsive-images/5ac24daa1a145716513471___small_560_316.jpeg
 create mode 100644 public/uploads/18/responsive-images/5ac24daa1a145716513471___thumb_160_90.jpeg
 create mode 100644 public/uploads/18/responsive-images/5ac24daa1a145716513471___thumb_320_180.jpeg
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 23, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (23/23), done.
Writing objects: 100% (23/23), 2.14 KiB | 2.14 MiB/s, done.
Total 23 (delta 15), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   1facfef..200a082  master -> master
ZEP-2:mossebo-shop-admin Urij$ git status
On branch master
Your branch is up-to-date with 'origin/master'.

nothing to commit, working tree clean
ZEP-2:mossebo-shop-admin Urij$ php artisan cache:clear
Cache cleared successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ composer update
-bash: composer: command not found
ZEP-2:mossebo-shop-admin Urij$ composer.phar update
Loading composer repositories with package information
Updating dependencies (including require-dev)
Package operations: 0 installs, 6 updates, 0 removals
  - Updating nesbot/carbon (1.24.2 => 1.25.0): Loading from cache
  - Updating laravel/framework (v5.6.12 => v5.6.15):Downloading (100%)         )
  - Updating spatie/laravel-medialibrary (7.0.0 => 7.1.3): Downloading (100%)     - Updating nunomaduro/collision (v2.0.0 => v2.0.2): Loading from cache
  - Updating phpunit/phpunit (7.0.2 => 7.0.3): Loading from cache
  - Updating psy/psysh (v0.8.17 => v0.8.18): Downloading (100%)
Writing lock file
Generating optimized autoload files
> Illuminate\Foundation\ComposerScripts::postAutoloadDump
> @php artisan package:discover
Discovered Package: barryvdh/laravel-debugbar
Discovered Package: fideloper/proxy
Discovered Package: intervention/image
Discovered Package: laravel/tinker
Discovered Package: nunomaduro/collision
Discovered Package: prettus/l5-repository
Discovered Package: spatie/laravel-medialibrary
Package manifest generated successfully.

What about running composer thanks now?
This will spread some 💖  by sending a ★  to the GitHub repositories of your fellow package maintainers.

ZEP-2:mossebo-shop-admin Urij$ php artisan cache:clear
Cache cleared successfully.
ZEP-2:mossebo-shop-admin Urij$ php artisan config:cache
Configuration cache cleared!
Configuration cached successfully!
ZEP-2:mossebo-shop-admin Urij$ git add .
ZEP-2:mossebo-shop-admin Urij$ git commit -m 'gorit ochag'
[master 82f8502] gorit ochag
 4 files changed, 34 insertions(+), 37 deletions(-)
ZEP-2:mossebo-shop-admin Urij$ git push
Counting objects: 7, done.
Delta compression using up to 4 threads.
Compressing objects: 100% (7/7), done.
Writing objects: 100% (7/7), 1.29 KiB | 661.00 KiB/s, done.
Total 7 (delta 6), reused 0 (delta 0)
To bitbucket.org:mossebo-cm/mossebo-shop-admin.git
   200a082..82f8502  master -> master
ZEP-2:mossebo-shop-admin Urij$ php phpinfo()
-bash: syntax error near unexpected token `('
ZEP-2:mossebo-shop-admin Urij$ php phpinfo
Could not open input file: phpinfo
ZEP-2:mossebo-shop-admin Urij$ php artisan tinjer


  Command "tinjer" is not defined.

  Did you mean this?
      tinker


ZEP-2:mossebo-shop-admin Urij$ php artisan tinker
Psy Shell v0.8.18 (PHP 7.1.7 — cli) by Justin Hileman
>>> phpinfo()
phpinfo()
PHP Version => 7.1.7

System => Darwin ZEP-2.local 17.4.0 Darwin Kernel Version 17.4.0: Sun Dec 17 09:19:54 PST 2017; root:xnu-4570.41.2~1/RELEASE_X86_64 x86_64
Build Date => Jul 15 2017 18:01:36
Configure Command =>  '/BuildRoot/Library/Caches/com.apple.xbs/Binaries/apache_mod_php/install/TempContent/Objects/php/configure'  '--prefix=/usr' '--mandir=/usr/share/man' '--infodir=/usr/share/info' '--disable-dependency-tracking' '--sysconfdir=/private/etc' '--with-libdir=lib' '--enable-cli' '--with-iconv=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-config-file-path=/etc' '--with-libxml-dir=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-openssl=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr/local/libressl' '--with-kerberos=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-zlib=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-bcmath' '--with-bz2=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-calendar' '--disable-cgi' '--with-curl=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-dba' '--with-ndbm=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-exif' '--enable-fpm' '--enable-ftp' '--with-gd' '--with-png-dir=/BuildRoot/Library/Caches/com.apple.xbs/Binaries/apache_mod_php/install/TempContent/Root/usr/local' '--with-jpeg-dir=/BuildRoot/Library/Caches/com.apple.xbs/Binaries/apache_mod_php/install/TempContent/Root/usr/local' '--enable-gd-native-ttf' '--with-icu-dir=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-ldap=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-ldap-sasl=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-libedit=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-mbstring' '--enable-mbregex' '--with-mysqli=mysqlnd' '--with-pcre-regex=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--without-pcre-jit' '--with-pdo-pgsql=/Applications/Xcode.app/Contents/Developer/Toolchains/OSX10.13.xctoolchain/usr/local/bin' '--with-pgsql=/Applications/Xcode.app/Contents/Developer/Toolchains/OSX10.13.xctoolchain/local/bin' '--without-pear' '--with-pear=no' '--with-pdo-mysql=mysqlnd' '--with-mysql-sock=/var/mysql/mysql.sock' '--disable-phpdbg' '--with-readline=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-shmop' '--with-snmp=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-soap' '--enable-sockets' '--enable-sysvmsg' '--enable-sysvsem' '--enable-sysvshm' '--with-tidy=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-wddx' '--with-xmlrpc' '--with-iconv-dir=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-xsl=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-apxs2=/Applications/Xcode.app/Contents/Developer/Toolchains/OSX10.13.xctoolchain/usr/local/bin/apxs' '--enable-zip' 'YACC=/BuildRoot/Applications/Xcode.app/Contents/Developer/Toolchains/XcodeDefault.xctoolchain/usr/bin/bison'
Server API => Command Line Interface
Virtual Directory Support => disabled
Configuration File (php.ini) Path => /etc
Loaded Configuration File => (none)
Scan this dir for additional .ini files => (none)
Additional .ini files parsed => (none)
PHP API => 20160303
PHP Extension => 20160303
Zend Extension => 320160303
Zend Extension Build => API320160303,NTS
PHP Extension Build => API20160303,NTS
Debug Build => no
Thread Safety => disabled
Zend Signal Handling => enabled
Zend Memory Manager => enabled
Zend Multibyte Support => provided by mbstring
IPv6 Support => enabled
DTrace Support => disabled

Registered PHP Streams => https, ftps, compress.zlib, compress.bzip2, php, file, glob, data, http, ftp, phar, zip
Registered Stream Socket Transports => tcp, udp, unix, udg, ssl, sslv3, tls, tlsv1.0, tlsv1.1, tlsv1.2
Registered Stream Filters => zlib.*, bzip2.*, convert.iconv.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk

This program makes use of the Zend Scripting Language Engine:
Zend Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies


 _______________________________________________________________________


Configuration

bcmath

BCMath support => enabled

Directive => Local Value => Master Value
bcmath.scale => 0 => 0

bz2

BZip2 Support => Enabled
Stream Wrapper support => compress.bzip2://
Stream Filter support => bzip2.decompress, bzip2.compress
BZip2 Version => 1.0.6, 6-Sept-2010

calendar

Calendar support => enabled

Core

PHP Version => 7.1.7

Directive => Local Value => Master Value
allow_url_fopen => On => On
allow_url_include => Off => Off
arg_separator.input => & => &
arg_separator.output => & => &
auto_append_file => no value => no value
auto_globals_jit => On => On
auto_prepend_file => no value => no value
browscap => no value => no value
default_charset => UTF-8 => UTF-8
default_mimetype => text/html => text/html
disable_classes => no value => no value
disable_functions => no value => no value
display_errors => Off => STDOUT
display_startup_errors => Off => Off
doc_root => no value => no value
docref_ext => no value => no value
docref_root => no value => no value
enable_dl => On => On
enable_post_data_reading => On => On
error_append_string => no value => no value
error_log => no value => no value
error_prepend_string => no value => no value
error_reporting => -1 => no value
expose_php => On => On
extension_dir => /usr/lib/php/extensions/no-debug-non-zts-20160303 => /usr/lib/php/extensions/no-debug-non-zts-20160303
file_uploads => On => On
hard_timeout => 2 => 2
highlight.comment => <font style="color: #FF8000">#FF8000</font> => <font style="color: #FF8000">#FF8000</font>
highlight.default => <font style="color: #0000BB">#0000BB</font> => <font style="color: #0000BB">#0000BB</font>
highlight.html => <font style="color: #000000">#000000</font> => <font style="color: #000000">#000000</font>
highlight.keyword => <font style="color: #007700">#007700</font> => <font style="color: #007700">#007700</font>
highlight.string => <font style="color: #DD0000">#DD0000</font> => <font style="color: #DD0000">#DD0000</font>
html_errors => Off => Off
ignore_repeated_errors => Off => Off
ignore_repeated_source => Off => Off
ignore_user_abort => Off => Off
implicit_flush => On => On
include_path => .: => .:
input_encoding => no value => no value
internal_encoding => no value => no value
log_errors => Off => Off
log_errors_max_len => 1024 => 1024
mail.add_x_header => Off => Off
mail.force_extra_parameters => no value => no value
mail.log => no value => no value
max_execution_time => 0 => 0
max_file_uploads => 20 => 20
max_input_nesting_level => 64 => 64
max_input_time => -1 => -1
max_input_vars => 1000 => 1000
memory_limit => 128M => 128M
open_basedir => no value => no value
output_buffering => 0 => 0
output_encoding => no value => no value
output_handler => no value => no value
post_max_size => 8M => 8M
precision => 14 => 14
realpath_cache_size => 4096K => 4096K
realpath_cache_ttl => 120 => 120
register_argc_argv => On => On
report_memleaks => On => On
report_zend_debug => Off => Off
request_order => no value => no value
sendmail_from => no value => no value
sendmail_path => /usr/sbin/sendmail -t -i  => /usr/sbin/sendmail -t -i
serialize_precision => -1 => -1
short_open_tag => On => On
SMTP => localhost => localhost
smtp_port => 25 => 25
sql.safe_mode => Off => Off
sys_temp_dir => no value => no value
track_errors => Off => Off
unserialize_callback_func => no value => no value
upload_max_filesize => 2M => 2M
upload_tmp_dir => no value => no value
user_dir => no value => no value
user_ini.cache_ttl => 300 => 300
user_ini.filename => .user.ini => .user.ini
variables_order => EGPCS => EGPCS
xmlrpc_error_number => 0 => 0
xmlrpc_errors => Off => Off
zend.assertions => 1 => 1
zend.detect_unicode => On => On
zend.enable_gc => On => On
zend.multibyte => Off => Off
zend.script_encoding => no value => no value
zend.signal_check => Off => Off

ctype

ctype functions => enabled

curl

cURL support => enabled
cURL Information => 7.54.0
Age => 3
Features
AsynchDNS => Yes
CharConv => No
Debug => No
GSS-Negotiate => No
IDN => No
IPv6 => Yes
krb4 => No
Largefile => Yes
libz => Yes
NTLM => Yes
NTLMWB => Yes
SPNEGO => Yes
SSL => Yes
SSPI => No
TLS-SRP => No
HTTP2 => Yes
GSSAPI => Yes
KERBEROS5 => Yes
UNIX_SOCKETS => Yes
PSL => No
Protocols => dict, file, ftp, ftps, gopher, http, https, imap, imaps, ldap, ldaps, pop3, pop3s, rtsp, smb, smbs, smtp, smtps, telnet, tftp
Host => x86_64-apple-darwin17.0
SSL Version => LibreSSL/2.0.20
ZLib Version => 1.2.11

date

date/time support => enabled
"Olson" Timezone Database Version => 2017.2
Timezone Database => internal
Default timezone => UTC

Directive => Local Value => Master Value
date.default_latitude => 31.7667 => 31.7667
date.default_longitude => 35.2333 => 35.2333
date.sunrise_zenith => 90.583333 => 90.583333
date.sunset_zenith => 90.583333 => 90.583333
date.timezone => no value => no value

dba

DBA support => enabled
Supported handlers => ndbm cdb cdb_make inifile flatfile

Directive => Local Value => Master Value
dba.default_handler => flatfile => flatfile

dom

DOM/XML => enabled
DOM/XML API Version => 20031129
libxml Version => 2.9.4
HTML Support => enabled
XPath Support => enabled
XPointer Support => enabled
Schema Support => enabled
RelaxNG Support => enabled

exif

EXIF Support => enabled
EXIF Version => 1.4 $Id: 8bdc0c8f27c2c9dd1f7551f1f9fe3ab57a06a4b1 $
Supported EXIF Version => 0220
Supported filetypes => JPEG,TIFF

Directive => Local Value => Master Value
exif.decode_jis_intel => JIS => JIS
exif.decode_jis_motorola => JIS => JIS
exif.decode_unicode_intel => UCS-2LE => UCS-2LE
exif.decode_unicode_motorola => UCS-2BE => UCS-2BE
exif.encode_jis => no value => no value
exif.encode_unicode => ISO-8859-15 => ISO-8859-15

fileinfo

fileinfo support => enabled
version => 1.0.5
libmagic => 522

filter

Input Validation and Filtering => enabled
Revision => $Id$

Directive => Local Value => Master Value
filter.default => unsafe_raw => unsafe_raw
filter.default_flags => no value => no value

ftp

FTP support => enabled
FTPS support => enabled

gd

GD Support => enabled
GD Version => bundled (2.1.0 compatible)
GIF Read Support => enabled
GIF Create Support => enabled
JPEG Support => enabled
libJPEG Version => 9 compatible
PNG Support => enabled
libPNG Version => 1.6.20
WBMP Support => enabled
XBM Support => enabled

Directive => Local Value => Master Value
gd.jpeg_ignore_warning => 1 => 1

hash

hash support => enabled
Hashing Engines => md2 md4 md5 sha1 sha224 sha256 sha384 sha512/224 sha512/256 sha512 sha3-224 sha3-256 sha3-384 sha3-512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost gost-crypto adler32 crc32 crc32b fnv132 fnv1a32 fnv164 fnv1a64 joaat haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5

iconv

iconv support => enabled
iconv implementation => libiconv
iconv library version => 1.11

Directive => Local Value => Master Value
iconv.input_encoding => no value => no value
iconv.internal_encoding => no value => no value
iconv.output_encoding => no value => no value

json

json support => enabled
json version => 1.5.0

ldap

LDAP Support => enabled
RCS Version => $Id$
Total Links => 0/unlimited
API Version => 3001
Vendor Name => OpenLDAP
Vendor Version => 20428
SASL Support => Enabled

Directive => Local Value => Master Value
ldap.max_links => Unlimited => Unlimited

libxml

libXML support => active
libXML Compiled Version => 2.9.4
libXML Loaded Version => 20904
libXML streams => enabled

mbstring

Multibyte Support => enabled
Multibyte string engine => libmbfl
HTTP input encoding translation => disabled
libmbfl version => 1.3.2
oniguruma version => 5.9.6

mbstring extension makes use of "streamable kanji code filter and converter", which is distributed under the GNU Lesser General Public License version 2.1.

Multibyte (japanese) regex support => enabled
Multibyte regex (oniguruma) backtrack check => On
Multibyte regex (oniguruma) version => 5.9.6

Directive => Local Value => Master Value
mbstring.detect_order => no value => no value
mbstring.encoding_translation => Off => Off
mbstring.func_overload => 0 => 0
mbstring.http_input => no value => no value
mbstring.http_output => no value => no value
mbstring.http_output_conv_mimetypes => ^(text/|application/xhtml\+xml) => ^(text/|application/xhtml\+xml)
mbstring.internal_encoding => no value => no value
mbstring.language => neutral => neutral
mbstring.strict_detection => Off => Off
mbstring.substitute_character => no value => no value

mysqli

MysqlI Support => enabled
Client API library version => mysqlnd 5.0.12-dev - 20150407 - $Id$
Active Persistent Links => 0
Inactive Persistent Links => 0
Active Links => 0

Directive => Local Value => Master Value
mysqli.allow_local_infile => On => On
mysqli.allow_persistent => On => On
mysqli.default_host => no value => no value
mysqli.default_port => 3306 => 3306
mysqli.default_pw => no value => no value
mysqli.default_socket => /var/mysql/mysql.sock => /var/mysql/mysql.sock
mysqli.default_user => no value => no value
mysqli.max_links => Unlimited => Unlimited
mysqli.max_persistent => Unlimited => Unlimited
mysqli.reconnect => Off => Off
mysqli.rollback_on_cached_plink => Off => Off

mysqlnd

mysqlnd => enabled
Version => mysqlnd 5.0.12-dev - 20150407 - $Id$
Compression => supported
core SSL => supported
extended SSL => supported
Command buffer size => 4096
Read buffer size => 32768
Read timeout => 31536000
Collecting statistics => Yes
Collecting memory statistics => No
Tracing => n/a
Loaded plugins => mysqlnd,debug_trace,auth_plugin_mysql_native_password,auth_plugin_mysql_clear_password,auth_plugin_sha256_password
API Extensions => pdo_mysql,mysqli

mysqlnd statistics =>
bytes_sent => 0
bytes_received => 0
packets_sent => 0
packets_received => 0
protocol_overhead_in => 0
protocol_overhead_out => 0
bytes_received_ok_packet => 0
bytes_received_eof_packet => 0
bytes_received_rset_header_packet => 0
bytes_received_rset_field_meta_packet => 0
bytes_received_rset_row_packet => 0
bytes_received_prepare_response_packet => 0
bytes_received_change_user_packet => 0
packets_sent_command => 0
packets_received_ok => 0
packets_received_eof => 0
packets_received_rset_header => 0
packets_received_rset_field_meta => 0
packets_received_rset_row => 0
packets_received_prepare_response => 0
packets_received_change_user => 0
result_set_queries => 0
non_result_set_queries => 0
no_index_used => 0
bad_index_used => 0
slow_queries => 0
buffered_sets => 0
unbuffered_sets => 0
ps_buffered_sets => 0
ps_unbuffered_sets => 0
flushed_normal_sets => 0
flushed_ps_sets => 0
ps_prepared_never_executed => 0
ps_prepared_once_executed => 0
rows_fetched_from_server_normal => 0
rows_fetched_from_server_ps => 0
rows_buffered_from_client_normal => 0
rows_buffered_from_client_ps => 0
rows_fetched_from_client_normal_buffered => 0
rows_fetched_from_client_normal_unbuffered => 0
rows_fetched_from_client_ps_buffered => 0
rows_fetched_from_client_ps_unbuffered => 0
rows_fetched_from_client_ps_cursor => 0
rows_affected_normal => 0
rows_affected_ps => 0
rows_skipped_normal => 0
rows_skipped_ps => 0
copy_on_write_saved => 0
copy_on_write_performed => 0
command_buffer_too_small => 0
connect_success => 0
connect_failure => 0
connection_reused => 0
reconnect => 0
pconnect_success => 0
active_connections => 0
active_persistent_connections => 0
explicit_close => 0
implicit_close => 0
disconnect_close => 0
in_middle_of_command_close => 0
explicit_free_result => 0
implicit_free_result => 0
explicit_stmt_close => 0
implicit_stmt_close => 0
mem_emalloc_count => 0
mem_emalloc_amount => 0
mem_ecalloc_count => 0
mem_ecalloc_amount => 0
mem_erealloc_count => 0
mem_erealloc_amount => 0
mem_efree_count => 0
mem_efree_amount => 0
mem_malloc_count => 0
mem_malloc_amount => 0
mem_calloc_count => 0
mem_calloc_amount => 0
mem_realloc_count => 0
mem_realloc_amount => 0
mem_free_count => 0
mem_free_amount => 0
mem_estrndup_count => 0
mem_strndup_count => 0
mem_estrdup_count => 0
mem_strdup_count => 0
mem_edupl_count => 0
mem_dupl_count => 0
proto_text_fetched_null => 0
proto_text_fetched_bit => 0
proto_text_fetched_tinyint => 0
proto_text_fetched_short => 0
proto_text_fetched_int24 => 0
proto_text_fetched_int => 0
proto_text_fetched_bigint => 0
proto_text_fetched_decimal => 0
proto_text_fetched_float => 0
proto_text_fetched_double => 0
proto_text_fetched_date => 0
proto_text_fetched_year => 0
proto_text_fetched_time => 0
proto_text_fetched_datetime => 0
proto_text_fetched_timestamp => 0
proto_text_fetched_string => 0
proto_text_fetched_blob => 0
proto_text_fetched_enum => 0
proto_text_fetched_set => 0
proto_text_fetched_geometry => 0
proto_text_fetched_other => 0
proto_binary_fetched_null => 0
proto_binary_fetched_bit => 0
proto_binary_fetched_tinyint => 0
proto_binary_fetched_short => 0
proto_binary_fetched_int24 => 0
proto_binary_fetched_int => 0
proto_binary_fetched_bigint => 0
proto_binary_fetched_decimal => 0
proto_binary_fetched_float => 0
proto_binary_fetched_double => 0
proto_binary_fetched_date => 0
proto_binary_fetched_year => 0
proto_binary_fetched_time => 0
proto_binary_fetched_datetime => 0
proto_binary_fetched_timestamp => 0
proto_binary_fetched_string => 0
proto_binary_fetched_json => 0
proto_binary_fetched_blob => 0
proto_binary_fetched_enum => 0
proto_binary_fetched_set => 0
proto_binary_fetched_geometry => 0
proto_binary_fetched_other => 0
init_command_executed_count => 0
init_command_failed_count => 0
com_quit => 0
com_init_db => 0
com_query => 0
com_field_list => 0
com_create_db => 0
com_drop_db => 0
com_refresh => 0
com_shutdown => 0
com_statistics => 0
com_process_info => 0
com_connect => 0
com_process_kill => 0
com_debug => 0
com_ping => 0
com_time => 0
com_delayed_insert => 0
com_change_user => 0
com_binlog_dump => 0
com_table_dump => 0
com_connect_out => 0
com_register_slave => 0
com_stmt_prepare => 0
com_stmt_execute => 0
com_stmt_send_long_data => 0
com_stmt_close => 0
com_stmt_reset => 0
com_stmt_set_option => 0
com_stmt_fetch => 0
com_deamon => 0
bytes_received_real_data_normal => 0
bytes_received_real_data_ps => 0

openssl

OpenSSL support => enabled
OpenSSL Library Version => LibreSSL 2.2.7
OpenSSL Header Version => LibreSSL 2.2.7
Openssl default config => /private/etc/ssl/openssl.cnf

Directive => Local Value => Master Value
openssl.cafile => no value => no value
openssl.capath => no value => no value

pcre

PCRE (Perl Compatible Regular Expressions) Support => enabled
PCRE Library Version => 8.40 2017-01-11
PCRE JIT Support => not compiled in

Directive => Local Value => Master Value
pcre.backtrack_limit => 1000000 => 1000000
pcre.recursion_limit => 100000 => 100000

PDO

PDO support => enabled
PDO drivers => mysql, pgsql, sqlite

pdo_mysql

PDO Driver for MySQL => enabled
Client API version => mysqlnd 5.0.12-dev - 20150407 - $Id$

Directive => Local Value => Master Value
pdo_mysql.default_socket => /var/mysql/mysql.sock => /var/mysql/mysql.sock

pdo_pgsql

PDO Driver for PostgreSQL => enabled
PostgreSQL(libpq) Version => 9.3.7
Module version => 7.1.7
Revision =>  $Id$

pdo_sqlite

PDO Driver for SQLite 3.x => enabled
SQLite Library => 3.15.1

pgsql

PostgreSQL Support => enabled
PostgreSQL(libpq) Version => 9.3.7
PostgreSQL(libpq)  => PostgreSQL 9.3.7 on x86_64-apple-darwin17.0, compiled by Apple LLVM version 9.0.0 (clang-900.0.31), 64-bit
Multibyte character support => enabled
SSL support => disabled
Active Persistent Links => 0
Active Links => 0

Directive => Local Value => Master Value
pgsql.allow_persistent => On => On
pgsql.auto_reset_persistent => Off => Off
pgsql.ignore_notice => Off => Off
pgsql.log_notice => Off => Off
pgsql.max_links => Unlimited => Unlimited
pgsql.max_persistent => Unlimited => Unlimited

Phar

Phar: PHP Archive support => enabled
Phar EXT version => 2.0.2
Phar API version => 1.1.1
SVN revision => $Id$
Phar-based phar archives => enabled
Tar-based phar archives => enabled
ZIP-based phar archives => enabled
gzip compression => enabled
bzip2 compression => enabled
OpenSSL support => enabled


Phar based on pear/PHP_Archive, original concept by Davey Shafik.
Phar fully realized by Gregory Beaver and Marcus Boerger.
Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.
Directive => Local Value => Master Value
phar.cache_list => no value => no value
phar.readonly => On => On
phar.require_hash => On => On

posix

Revision => $Id$

readline

Readline Support => enabled
Readline library => EditLine wrapper

Directive => Local Value => Master Value
cli.pager => no value => no value
cli.prompt => \b \>  => \b \>

Reflection

Reflection => enabled
Version => $Id$

session

Session Support => enabled
Registered save handlers => files user
Registered serializer handlers => php_serialize php php_binary wddx

Directive => Local Value => Master Value
session.auto_start => Off => Off
session.cache_expire => 180 => 180
session.cache_limiter => nocache => nocache
session.cookie_domain => no value => no value
session.cookie_httponly => Off => Off
session.cookie_lifetime => 0 => 0
session.cookie_path => / => /
session.cookie_secure => Off => Off
session.gc_divisor => 100 => 100
session.gc_maxlifetime => 1440 => 1440
session.gc_probability => 1 => 1
session.lazy_write => On => On
session.name => PHPSESSID => PHPSESSID
session.referer_check => no value => no value
session.save_handler => files => files
session.save_path => no value => no value
session.serialize_handler => php => php
session.sid_bits_per_character => 4 => 4
session.sid_length => 32 => 32
session.upload_progress.cleanup => On => On
session.upload_progress.enabled => On => On
session.upload_progress.freq => 1% => 1%
session.upload_progress.min_freq => 1 => 1
session.upload_progress.name => PHP_SESSION_UPLOAD_PROGRESS => PHP_SESSION_UPLOAD_PROGRESS
session.upload_progress.prefix => upload_progress_ => upload_progress_
session.use_cookies => On => On
session.use_only_cookies => On => On
session.use_strict_mode => Off => Off
session.use_trans_sid => 0 => 0

shmop

shmop support => enabled

SimpleXML

Simplexml support => enabled
Revision => $Id$
Schema support => enabled

snmp

NET-SNMP Support => enabled
NET-SNMP Version => 5.6.2.1
PHP SNMP Version => 0.1

soap

Soap Client => enabled
Soap Server => enabled

Directive => Local Value => Master Value
soap.wsdl_cache => 1 => 1
soap.wsdl_cache_dir => /tmp => /tmp
soap.wsdl_cache_enabled => 1 => 1
soap.wsdl_cache_limit => 5 => 5
soap.wsdl_cache_ttl => 86400 => 86400

sockets

Sockets Support => enabled

SPL

SPL support => enabled
Interfaces => Countable, OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject
Classes => AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, CallbackFilterIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveCallbackFilterIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException

sqlite3

SQLite3 support => enabled
SQLite3 module version => 7.1.7
SQLite Library => 3.15.1

Directive => Local Value => Master Value
sqlite3.extension_dir => no value => no value

standard

Dynamic Library Support => enabled
Path to sendmail => /usr/sbin/sendmail -t -i

Directive => Local Value => Master Value
assert.active => 1 => 1
assert.bail => 0 => 0
assert.callback => no value => no value
assert.exception => 0 => 0
assert.quiet_eval => 0 => 0
assert.warning => 1 => 1
auto_detect_line_endings => 0 => 0
default_socket_timeout => 60 => 60
from => no value => no value
session.trans_sid_hosts => no value => no value
session.trans_sid_tags => a=href,area=href,frame=src,form= => a=href,area=href,frame=src,form=
url_rewriter.hosts => no value => no value
url_rewriter.tags => form= => form=
user_agent => no value => no value

sysvmsg

sysvmsg support => enabled
Revision => $Id$

sysvsem

Version => 7.1.7

sysvshm

Version => 7.1.7

tidy

Tidy support => enabled
libTidy Release => 31 October 2006 - Apple Inc. build 15.18.1
Extension Version => 7.1.7 ($Id$)

Directive => Local Value => Master Value
tidy.clean_output => 0 => 0
tidy.default_config => no value => no value

tokenizer

Tokenizer Support => enabled

wddx

WDDX Support => enabled
WDDX Session Serializer => enabled

xml

XML Support => active
XML Namespace Support => active
libxml2 Version => 2.9.4

xmlreader

XMLReader => enabled

xmlrpc

core library version => xmlrpc-epi v. 0.51
php extension version => 7.1.7
author => Dan Libby
homepage => http://xmlrpc-epi.sourceforge.net
open sourced by => Epinions.com

xmlwriter

XMLWriter => enabled

xsl

XSL => enabled
libxslt Version => 1.1.29
libxslt compiled against libxml Version => 2.9.4
EXSLT => enabled
libexslt Version => 1.1.29

zip

Zip => enabled
Zip version => 1.13.5
Libzip version => 1.1.2

zlib

ZLib Support => enabled
Stream Wrapper => compress.zlib://
Stream Filter => zlib.inflate, zlib.deflate
Compiled Version => 1.2.11
Linked Version => 1.2.11

Directive => Local Value => Master Value
zlib.output_compression => Off => Off
zlib.output_compression_level => -1 => -1
zlib.output_handler => no value => no value

Additional Modules

Module Name

Environment

Variable => Value
TERM_PROGRAM => Apple_Terminal
TERM => xterm-256color
SHELL => /bin/bash
TMPDIR => /var/folders/t_/33l6kxpd7h76wpkxp11zdpy80000gp/T/
Apple_PubSub_Socket_Render => /private/tmp/com.apple.launchd.X21jMKYUJj/Render
TERM_PROGRAM_VERSION => 400
TERM_SESSION_ID => D94A26C0-2CFF-495A-B0D7-F3C2AE068263
USER => Urij
SSH_AUTH_SOCK => /private/tmp/com.apple.launchd.2T38RR2NE8/Listeners
PATH => /Users/Urij/.composer/vendor/bin:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin
PWD => /Users/Urij/code/mossebo-shop-admin
LANG => ru_RU.UTF-8
XPC_FLAGS => 0x0
XPC_SERVICE_NAME => 0
HOME => /Users/Urij
SHLVL => 1
LOGNAME => Urij
_ => /usr/bin/php
OLDPWD => /usr/local
__CF_USER_TEXT_ENCODING => 0x1F6:0x7:0x31
LINES => 21
COLUMNS => 80
SHELL_VERBOSITY => 0

PHP Variables

Variable => Value
$_SERVER['TERM_PROGRAM'] => Apple_Terminal
$_SERVER['TERM'] => xterm-256color
$_SERVER['SHELL'] => /bin/bash
$_SERVER['TMPDIR'] => /var/folders/t_/33l6kxpd7h76wpkxp11zdpy80000gp/T/
$_SERVER['Apple_PubSub_Socket_Render'] => /private/tmp/com.apple.launchd.X21jMKYUJj/Render
$_SERVER['TERM_PROGRAM_VERSION'] => 400
$_SERVER['TERM_SESSION_ID'] => D94A26C0-2CFF-495A-B0D7-F3C2AE068263
$_SERVER['USER'] => Urij
$_SERVER['SSH_AUTH_SOCK'] => /private/tmp/com.apple.launchd.2T38RR2NE8/Listeners
$_SERVER['PATH'] => /Users/Urij/.composer/vendor/bin:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin
$_SERVER['PWD'] => /Users/Urij/code/mossebo-shop-admin
$_SERVER['LANG'] => ru_RU.UTF-8
$_SERVER['XPC_FLAGS'] => 0x0
$_SERVER['XPC_SERVICE_NAME'] => 0
$_SERVER['HOME'] => /Users/Urij
$_SERVER['SHLVL'] => 1
$_SERVER['LOGNAME'] => Urij
$_SERVER['_'] => /usr/bin/php
$_SERVER['OLDPWD'] => /usr/local
$_SERVER['__CF_USER_TEXT_ENCODING'] => 0x1F6:0x7:0x31
$_SERVER['PHP_SELF'] => artisan
$_SERVER['SCRIPT_NAME'] => artisan
$_SERVER['SCRIPT_FILENAME'] => artisan
$_SERVER['PATH_TRANSLATED'] => artisan
$_SERVER['DOCUMENT_ROOT'] =>
$_SERVER['REQUEST_TIME_FLOAT'] => 1522684497.9649
$_SERVER['REQUEST_TIME'] => 1522684497
$_SERVER['argv'] => Array
(
    [0] => artisan
    [1] => tinker
)

$_SERVER['argc'] => 2
$_SERVER['SHELL_VERBOSITY'] => 0
$_ENV['TERM_PROGRAM'] => Apple_Terminal
$_ENV['TERM'] => xterm-256color
$_ENV['SHELL'] => /bin/bash
$_ENV['TMPDIR'] => /var/folders/t_/33l6kxpd7h76wpkxp11zdpy80000gp/T/
$_ENV['Apple_PubSub_Socket_Render'] => /private/tmp/com.apple.launchd.X21jMKYUJj/Render
$_ENV['TERM_PROGRAM_VERSION'] => 400
$_ENV['TERM_SESSION_ID'] => D94A26C0-2CFF-495A-B0D7-F3C2AE068263
$_ENV['USER'] => Urij
$_ENV['SSH_AUTH_SOCK'] => /private/tmp/com.apple.launchd.2T38RR2NE8/Listeners
$_ENV['PATH'] => /Users/Urij/.composer/vendor/bin:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin
$_ENV['PWD'] => /Users/Urij/code/mossebo-shop-admin
$_ENV['LANG'] => ru_RU.UTF-8
$_ENV['XPC_FLAGS'] => 0x0
$_ENV['XPC_SERVICE_NAME'] => 0
$_ENV['HOME'] => /Users/Urij
$_ENV['SHLVL'] => 1
$_ENV['LOGNAME'] => Urij
$_ENV['_'] => /usr/bin/php
$_ENV['OLDPWD'] => /usr/local
$_ENV['__CF_USER_TEXT_ENCODING'] => 0x1F6:0x7:0x31
$_ENV['SHELL_VERBOSITY'] => 0

PHP License
This program is free software; you can redistribute it and/or modify
it under the terms of the PHP License as published by the PHP Group
and included in the distribution in the file:  LICENSE

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

If you did not receive a copy of the PHP license, or have any
questions about PHP licensing, please contact license@php.net.
=> true
>>>
ZEP-2:mossebo-shop-admin Urij$ php -i
phpinfo()
PHP Version => 7.1.7

System => Darwin ZEP-2.local 17.4.0 Darwin Kernel Version 17.4.0: Sun Dec 17 09:19:54 PST 2017; root:xnu-4570.41.2~1/RELEASE_X86_64 x86_64
Build Date => Jul 15 2017 18:01:36
Configure Command =>  '/BuildRoot/Library/Caches/com.apple.xbs/Binaries/apache_mod_php/install/TempContent/Objects/php/configure'  '--prefix=/usr' '--mandir=/usr/share/man' '--infodir=/usr/share/info' '--disable-dependency-tracking' '--sysconfdir=/private/etc' '--with-libdir=lib' '--enable-cli' '--with-iconv=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-config-file-path=/etc' '--with-libxml-dir=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-openssl=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr/local/libressl' '--with-kerberos=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-zlib=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-bcmath' '--with-bz2=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-calendar' '--disable-cgi' '--with-curl=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-dba' '--with-ndbm=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-exif' '--enable-fpm' '--enable-ftp' '--with-gd' '--with-png-dir=/BuildRoot/Library/Caches/com.apple.xbs/Binaries/apache_mod_php/install/TempContent/Root/usr/local' '--with-jpeg-dir=/BuildRoot/Library/Caches/com.apple.xbs/Binaries/apache_mod_php/install/TempContent/Root/usr/local' '--enable-gd-native-ttf' '--with-icu-dir=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-ldap=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-ldap-sasl=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-libedit=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-mbstring' '--enable-mbregex' '--with-mysqli=mysqlnd' '--with-pcre-regex=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--without-pcre-jit' '--with-pdo-pgsql=/Applications/Xcode.app/Contents/Developer/Toolchains/OSX10.13.xctoolchain/usr/local/bin' '--with-pgsql=/Applications/Xcode.app/Contents/Developer/Toolchains/OSX10.13.xctoolchain/local/bin' '--without-pear' '--with-pear=no' '--with-pdo-mysql=mysqlnd' '--with-mysql-sock=/var/mysql/mysql.sock' '--disable-phpdbg' '--with-readline=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-shmop' '--with-snmp=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-soap' '--enable-sockets' '--enable-sysvmsg' '--enable-sysvsem' '--enable-sysvshm' '--with-tidy=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--enable-wddx' '--with-xmlrpc' '--with-iconv-dir=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-xsl=/BuildRoot/Applications/Xcode.app/Contents/Developer/Platforms/MacOSX.platform/Developer/SDKs/MacOSX10.13.Internal.sdk/usr' '--with-apxs2=/Applications/Xcode.app/Contents/Developer/Toolchains/OSX10.13.xctoolchain/usr/local/bin/apxs' '--enable-zip' 'YACC=/BuildRoot/Applications/Xcode.app/Contents/Developer/Toolchains/XcodeDefault.xctoolchain/usr/bin/bison'
Server API => Command Line Interface
Virtual Directory Support => disabled
Configuration File (php.ini) Path => /etc
Loaded Configuration File => (none)
Scan this dir for additional .ini files => (none)
Additional .ini files parsed => (none)
PHP API => 20160303
PHP Extension => 20160303
Zend Extension => 320160303
Zend Extension Build => API320160303,NTS
PHP Extension Build => API20160303,NTS
Debug Build => no
Thread Safety => disabled
Zend Signal Handling => enabled
Zend Memory Manager => enabled
Zend Multibyte Support => provided by mbstring
IPv6 Support => enabled
DTrace Support => disabled

Registered PHP Streams => https, ftps, compress.zlib, compress.bzip2, php, file, glob, data, http, ftp, phar, zip
Registered Stream Socket Transports => tcp, udp, unix, udg, ssl, sslv3, tls, tlsv1.0, tlsv1.1, tlsv1.2
Registered Stream Filters => zlib.*, bzip2.*, convert.iconv.*, string.rot13, string.toupper, string.tolower, string.strip_tags, convert.*, consumed, dechunk

This program makes use of the Zend Scripting Language Engine:
Zend Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies


 _______________________________________________________________________


Configuration

bcmath

BCMath support => enabled

Directive => Local Value => Master Value
bcmath.scale => 0 => 0

bz2

BZip2 Support => Enabled
Stream Wrapper support => compress.bzip2://
Stream Filter support => bzip2.decompress, bzip2.compress
BZip2 Version => 1.0.6, 6-Sept-2010

calendar

Calendar support => enabled

Core

PHP Version => 7.1.7

Directive => Local Value => Master Value
allow_url_fopen => On => On
allow_url_include => Off => Off
arg_separator.input => & => &
arg_separator.output => & => &
auto_append_file => no value => no value
auto_globals_jit => On => On
auto_prepend_file => no value => no value
browscap => no value => no value
default_charset => UTF-8 => UTF-8
default_mimetype => text/html => text/html
disable_classes => no value => no value
disable_functions => no value => no value
display_errors => STDOUT => STDOUT
display_startup_errors => Off => Off
doc_root => no value => no value
docref_ext => no value => no value
docref_root => no value => no value
enable_dl => On => On
enable_post_data_reading => On => On
error_append_string => no value => no value
error_log => no value => no value
error_prepend_string => no value => no value
error_reporting => no value => no value
expose_php => On => On
extension_dir => /usr/lib/php/extensions/no-debug-non-zts-20160303 => /usr/lib/php/extensions/no-debug-non-zts-20160303
file_uploads => On => On
hard_timeout => 2 => 2
highlight.comment => <font style="color: #FF8000">#FF8000</font> => <font style="color: #FF8000">#FF8000</font>
highlight.default => <font style="color: #0000BB">#0000BB</font> => <font style="color: #0000BB">#0000BB</font>
highlight.html => <font style="color: #000000">#000000</font> => <font style="color: #000000">#000000</font>
highlight.keyword => <font style="color: #007700">#007700</font> => <font style="color: #007700">#007700</font>
highlight.string => <font style="color: #DD0000">#DD0000</font> => <font style="color: #DD0000">#DD0000</font>
html_errors => Off => Off
ignore_repeated_errors => Off => Off
ignore_repeated_source => Off => Off
ignore_user_abort => Off => Off
implicit_flush => On => On
include_path => .: => .:
input_encoding => no value => no value
internal_encoding => no value => no value
log_errors => Off => Off
log_errors_max_len => 1024 => 1024
mail.add_x_header => Off => Off
mail.force_extra_parameters => no value => no value
mail.log => no value => no value
max_execution_time => 0 => 0
max_file_uploads => 20 => 20
max_input_nesting_level => 64 => 64
max_input_time => -1 => -1
max_input_vars => 1000 => 1000
memory_limit => 128M => 128M
open_basedir => no value => no value
output_buffering => 0 => 0
output_encoding => no value => no value
output_handler => no value => no value
post_max_size => 8M => 8M
precision => 14 => 14
realpath_cache_size => 4096K => 4096K
realpath_cache_ttl => 120 => 120
register_argc_argv => On => On
report_memleaks => On => On
report_zend_debug => Off => Off
request_order => no value => no value
sendmail_from => no value => no value
sendmail_path => /usr/sbin/sendmail -t -i  => /usr/sbin/sendmail -t -i
serialize_precision => -1 => -1
short_open_tag => On => On
SMTP => localhost => localhost
smtp_port => 25 => 25
sql.safe_mode => Off => Off
sys_temp_dir => no value => no value
track_errors => Off => Off
unserialize_callback_func => no value => no value
upload_max_filesize => 2M => 2M
upload_tmp_dir => no value => no value
user_dir => no value => no value
user_ini.cache_ttl => 300 => 300
user_ini.filename => .user.ini => .user.ini
variables_order => EGPCS => EGPCS
xmlrpc_error_number => 0 => 0
xmlrpc_errors => Off => Off
zend.assertions => 1 => 1
zend.detect_unicode => On => On
zend.enable_gc => On => On
zend.multibyte => Off => Off
zend.script_encoding => no value => no value
zend.signal_check => Off => Off

ctype

ctype functions => enabled

curl

cURL support => enabled
cURL Information => 7.54.0
Age => 3
Features
AsynchDNS => Yes
CharConv => No
Debug => No
GSS-Negotiate => No
IDN => No
IPv6 => Yes
krb4 => No
Largefile => Yes
libz => Yes
NTLM => Yes
NTLMWB => Yes
SPNEGO => Yes
SSL => Yes
SSPI => No
TLS-SRP => No
HTTP2 => Yes
GSSAPI => Yes
KERBEROS5 => Yes
UNIX_SOCKETS => Yes
PSL => No
Protocols => dict, file, ftp, ftps, gopher, http, https, imap, imaps, ldap, ldaps, pop3, pop3s, rtsp, smb, smbs, smtp, smtps, telnet, tftp
Host => x86_64-apple-darwin17.0
SSL Version => LibreSSL/2.0.20
ZLib Version => 1.2.11

date

date/time support => enabled
"Olson" Timezone Database Version => 2017.2
Timezone Database => internal
Default timezone => UTC

Directive => Local Value => Master Value
date.default_latitude => 31.7667 => 31.7667
date.default_longitude => 35.2333 => 35.2333
date.sunrise_zenith => 90.583333 => 90.583333
date.sunset_zenith => 90.583333 => 90.583333
date.timezone => no value => no value

dba

DBA support => enabled
Supported handlers => ndbm cdb cdb_make inifile flatfile

Directive => Local Value => Master Value
dba.default_handler => flatfile => flatfile

dom

DOM/XML => enabled
DOM/XML API Version => 20031129
libxml Version => 2.9.4
HTML Support => enabled
XPath Support => enabled
XPointer Support => enabled
Schema Support => enabled
RelaxNG Support => enabled

exif

EXIF Support => enabled
EXIF Version => 1.4 $Id: 8bdc0c8f27c2c9dd1f7551f1f9fe3ab57a06a4b1 $
Supported EXIF Version => 0220
Supported filetypes => JPEG,TIFF

Directive => Local Value => Master Value
exif.decode_jis_intel => JIS => JIS
exif.decode_jis_motorola => JIS => JIS
exif.decode_unicode_intel => UCS-2LE => UCS-2LE
exif.decode_unicode_motorola => UCS-2BE => UCS-2BE
exif.encode_jis => no value => no value
exif.encode_unicode => ISO-8859-15 => ISO-8859-15

fileinfo

fileinfo support => enabled
version => 1.0.5
libmagic => 522

filter

Input Validation and Filtering => enabled
Revision => $Id$

Directive => Local Value => Master Value
filter.default => unsafe_raw => unsafe_raw
filter.default_flags => no value => no value

ftp

FTP support => enabled
FTPS support => enabled

gd

GD Support => enabled
GD Version => bundled (2.1.0 compatible)
GIF Read Support => enabled
GIF Create Support => enabled
JPEG Support => enabled
libJPEG Version => 9 compatible
PNG Support => enabled
libPNG Version => 1.6.20
WBMP Support => enabled
XBM Support => enabled

Directive => Local Value => Master Value
gd.jpeg_ignore_warning => 1 => 1

hash

hash support => enabled
Hashing Engines => md2 md4 md5 sha1 sha224 sha256 sha384 sha512/224 sha512/256 sha512 sha3-224 sha3-256 sha3-384 sha3-512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru snefru256 gost gost-crypto adler32 crc32 crc32b fnv132 fnv1a32 fnv164 fnv1a64 joaat haval128,3 haval160,3 haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4 haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5

iconv

iconv support => enabled
iconv implementation => libiconv
iconv library version => 1.11

Directive => Local Value => Master Value
iconv.input_encoding => no value => no value
iconv.internal_encoding => no value => no value
iconv.output_encoding => no value => no value

json

json support => enabled
json version => 1.5.0

ldap

LDAP Support => enabled
RCS Version => $Id$
Total Links => 0/unlimited
API Version => 3001
Vendor Name => OpenLDAP
Vendor Version => 20428
SASL Support => Enabled

Directive => Local Value => Master Value
ldap.max_links => Unlimited => Unlimited

libxml

libXML support => active
libXML Compiled Version => 2.9.4
libXML Loaded Version => 20904
libXML streams => enabled

mbstring

Multibyte Support => enabled
Multibyte string engine => libmbfl
HTTP input encoding translation => disabled
libmbfl version => 1.3.2
oniguruma version => 5.9.6

mbstring extension makes use of "streamable kanji code filter and converter", which is distributed under the GNU Lesser General Public License version 2.1.

Multibyte (japanese) regex support => enabled
Multibyte regex (oniguruma) backtrack check => On
Multibyte regex (oniguruma) version => 5.9.6

Directive => Local Value => Master Value
mbstring.detect_order => no value => no value
mbstring.encoding_translation => Off => Off
mbstring.func_overload => 0 => 0
mbstring.http_input => no value => no value
mbstring.http_output => no value => no value
mbstring.http_output_conv_mimetypes => ^(text/|application/xhtml\+xml) => ^(text/|application/xhtml\+xml)
mbstring.internal_encoding => no value => no value
mbstring.language => neutral => neutral
mbstring.strict_detection => Off => Off
mbstring.substitute_character => no value => no value

mysqli

MysqlI Support => enabled
Client API library version => mysqlnd 5.0.12-dev - 20150407 - $Id$
Active Persistent Links => 0
Inactive Persistent Links => 0
Active Links => 0

Directive => Local Value => Master Value
mysqli.allow_local_infile => On => On
mysqli.allow_persistent => On => On
mysqli.default_host => no value => no value
mysqli.default_port => 3306 => 3306
mysqli.default_pw => no value => no value
mysqli.default_socket => /var/mysql/mysql.sock => /var/mysql/mysql.sock
mysqli.default_user => no value => no value
mysqli.max_links => Unlimited => Unlimited
mysqli.max_persistent => Unlimited => Unlimited
mysqli.reconnect => Off => Off
mysqli.rollback_on_cached_plink => Off => Off

mysqlnd

mysqlnd => enabled
Version => mysqlnd 5.0.12-dev - 20150407 - $Id$
Compression => supported
core SSL => supported
extended SSL => supported
Command buffer size => 4096
Read buffer size => 32768
Read timeout => 31536000
Collecting statistics => Yes
Collecting memory statistics => No
Tracing => n/a
Loaded plugins => mysqlnd,debug_trace,auth_plugin_mysql_native_password,auth_plugin_mysql_clear_password,auth_plugin_sha256_password
API Extensions => pdo_mysql,mysqli

mysqlnd statistics =>
bytes_sent => 0
bytes_received => 0
packets_sent => 0
packets_received => 0
protocol_overhead_in => 0
protocol_overhead_out => 0
bytes_received_ok_packet => 0
bytes_received_eof_packet => 0
bytes_received_rset_header_packet => 0
bytes_received_rset_field_meta_packet => 0
bytes_received_rset_row_packet => 0
bytes_received_prepare_response_packet => 0
bytes_received_change_user_packet => 0
packets_sent_command => 0
packets_received_ok => 0
packets_received_eof => 0
packets_received_rset_header => 0
packets_received_rset_field_meta => 0
packets_received_rset_row => 0
packets_received_prepare_response => 0
packets_received_change_user => 0
result_set_queries => 0
non_result_set_queries => 0
no_index_used => 0
bad_index_used => 0
slow_queries => 0
buffered_sets => 0
unbuffered_sets => 0
ps_buffered_sets => 0
ps_unbuffered_sets => 0
flushed_normal_sets => 0
flushed_ps_sets => 0
ps_prepared_never_executed => 0
ps_prepared_once_executed => 0
rows_fetched_from_server_normal => 0
rows_fetched_from_server_ps => 0
rows_buffered_from_client_normal => 0
rows_buffered_from_client_ps => 0
rows_fetched_from_client_normal_buffered => 0
rows_fetched_from_client_normal_unbuffered => 0
rows_fetched_from_client_ps_buffered => 0
rows_fetched_from_client_ps_unbuffered => 0
rows_fetched_from_client_ps_cursor => 0
rows_affected_normal => 0
rows_affected_ps => 0
rows_skipped_normal => 0
rows_skipped_ps => 0
copy_on_write_saved => 0
copy_on_write_performed => 0
command_buffer_too_small => 0
connect_success => 0
connect_failure => 0
connection_reused => 0
reconnect => 0
pconnect_success => 0
active_connections => 0
active_persistent_connections => 0
explicit_close => 0
implicit_close => 0
disconnect_close => 0
in_middle_of_command_close => 0
explicit_free_result => 0
implicit_free_result => 0
explicit_stmt_close => 0
implicit_stmt_close => 0
mem_emalloc_count => 0
mem_emalloc_amount => 0
mem_ecalloc_count => 0
mem_ecalloc_amount => 0
mem_erealloc_count => 0
mem_erealloc_amount => 0
mem_efree_count => 0
mem_efree_amount => 0
mem_malloc_count => 0
mem_malloc_amount => 0
mem_calloc_count => 0
mem_calloc_amount => 0
mem_realloc_count => 0
mem_realloc_amount => 0
mem_free_count => 0
mem_free_amount => 0
mem_estrndup_count => 0
mem_strndup_count => 0
mem_estrdup_count => 0
mem_strdup_count => 0
mem_edupl_count => 0
mem_dupl_count => 0
proto_text_fetched_null => 0
proto_text_fetched_bit => 0
proto_text_fetched_tinyint => 0
proto_text_fetched_short => 0
proto_text_fetched_int24 => 0
proto_text_fetched_int => 0
proto_text_fetched_bigint => 0
proto_text_fetched_decimal => 0
proto_text_fetched_float => 0
proto_text_fetched_double => 0
proto_text_fetched_date => 0
proto_text_fetched_year => 0
proto_text_fetched_time => 0
proto_text_fetched_datetime => 0
proto_text_fetched_timestamp => 0
proto_text_fetched_string => 0
proto_text_fetched_blob => 0
proto_text_fetched_enum => 0
proto_text_fetched_set => 0
proto_text_fetched_geometry => 0
proto_text_fetched_other => 0
proto_binary_fetched_null => 0
proto_binary_fetched_bit => 0
proto_binary_fetched_tinyint => 0
proto_binary_fetched_short => 0
proto_binary_fetched_int24 => 0
proto_binary_fetched_int => 0
proto_binary_fetched_bigint => 0
proto_binary_fetched_decimal => 0
proto_binary_fetched_float => 0
proto_binary_fetched_double => 0
proto_binary_fetched_date => 0
proto_binary_fetched_year => 0
proto_binary_fetched_time => 0
proto_binary_fetched_datetime => 0
proto_binary_fetched_timestamp => 0
proto_binary_fetched_string => 0
proto_binary_fetched_json => 0
proto_binary_fetched_blob => 0
proto_binary_fetched_enum => 0
proto_binary_fetched_set => 0
proto_binary_fetched_geometry => 0
proto_binary_fetched_other => 0
init_command_executed_count => 0
init_command_failed_count => 0
com_quit => 0
com_init_db => 0
com_query => 0
com_field_list => 0
com_create_db => 0
com_drop_db => 0
com_refresh => 0
com_shutdown => 0
com_statistics => 0
com_process_info => 0
com_connect => 0
com_process_kill => 0
com_debug => 0
com_ping => 0
com_time => 0
com_delayed_insert => 0
com_change_user => 0
com_binlog_dump => 0
com_table_dump => 0
com_connect_out => 0
com_register_slave => 0
com_stmt_prepare => 0
com_stmt_execute => 0
com_stmt_send_long_data => 0
com_stmt_close => 0
com_stmt_reset => 0
com_stmt_set_option => 0
com_stmt_fetch => 0
com_deamon => 0
bytes_received_real_data_normal => 0
bytes_received_real_data_ps => 0

openssl

OpenSSL support => enabled
OpenSSL Library Version => LibreSSL 2.2.7
OpenSSL Header Version => LibreSSL 2.2.7
Openssl default config => /private/etc/ssl/openssl.cnf

Directive => Local Value => Master Value
openssl.cafile => no value => no value
openssl.capath => no value => no value

pcre

PCRE (Perl Compatible Regular Expressions) Support => enabled
PCRE Library Version => 8.40 2017-01-11
PCRE JIT Support => not compiled in

Directive => Local Value => Master Value
pcre.backtrack_limit => 1000000 => 1000000
pcre.recursion_limit => 100000 => 100000

PDO

PDO support => enabled
PDO drivers => mysql, pgsql, sqlite

pdo_mysql

PDO Driver for MySQL => enabled
Client API version => mysqlnd 5.0.12-dev - 20150407 - $Id$

Directive => Local Value => Master Value
pdo_mysql.default_socket => /var/mysql/mysql.sock => /var/mysql/mysql.sock

pdo_pgsql

PDO Driver for PostgreSQL => enabled
PostgreSQL(libpq) Version => 9.3.7
Module version => 7.1.7
Revision =>  $Id$

pdo_sqlite

PDO Driver for SQLite 3.x => enabled
SQLite Library => 3.15.1

pgsql

PostgreSQL Support => enabled
PostgreSQL(libpq) Version => 9.3.7
PostgreSQL(libpq)  => PostgreSQL 9.3.7 on x86_64-apple-darwin17.0, compiled by Apple LLVM version 9.0.0 (clang-900.0.31), 64-bit
Multibyte character support => enabled
SSL support => disabled
Active Persistent Links => 0
Active Links => 0

Directive => Local Value => Master Value
pgsql.allow_persistent => On => On
pgsql.auto_reset_persistent => Off => Off
pgsql.ignore_notice => Off => Off
pgsql.log_notice => Off => Off
pgsql.max_links => Unlimited => Unlimited
pgsql.max_persistent => Unlimited => Unlimited

Phar

Phar: PHP Archive support => enabled
Phar EXT version => 2.0.2
Phar API version => 1.1.1
SVN revision => $Id$
Phar-based phar archives => enabled
Tar-based phar archives => enabled
ZIP-based phar archives => enabled
gzip compression => enabled
bzip2 compression => enabled
OpenSSL support => enabled


Phar based on pear/PHP_Archive, original concept by Davey Shafik.
Phar fully realized by Gregory Beaver and Marcus Boerger.
Portions of tar implementation Copyright (c) 2003-2009 Tim Kientzle.
Directive => Local Value => Master Value
phar.cache_list => no value => no value
phar.readonly => On => On
phar.require_hash => On => On

posix

Revision => $Id$

readline

Readline Support => enabled
Readline library => EditLine wrapper

Directive => Local Value => Master Value
cli.pager => no value => no value
cli.prompt => \b \>  => \b \>

Reflection

Reflection => enabled
Version => $Id$

session

Session Support => enabled
Registered save handlers => files user
Registered serializer handlers => php_serialize php php_binary wddx

Directive => Local Value => Master Value
session.auto_start => Off => Off
session.cache_expire => 180 => 180
session.cache_limiter => nocache => nocache
session.cookie_domain => no value => no value
session.cookie_httponly => Off => Off
session.cookie_lifetime => 0 => 0
session.cookie_path => / => /
session.cookie_secure => Off => Off
session.gc_divisor => 100 => 100
session.gc_maxlifetime => 1440 => 1440
session.gc_probability => 1 => 1
session.lazy_write => On => On
session.name => PHPSESSID => PHPSESSID
session.referer_check => no value => no value
session.save_handler => files => files
session.save_path => no value => no value
session.serialize_handler => php => php
session.sid_bits_per_character => 4 => 4
session.sid_length => 32 => 32
session.upload_progress.cleanup => On => On
session.upload_progress.enabled => On => On
session.upload_progress.freq => 1% => 1%
session.upload_progress.min_freq => 1 => 1
session.upload_progress.name => PHP_SESSION_UPLOAD_PROGRESS => PHP_SESSION_UPLOAD_PROGRESS
session.upload_progress.prefix => upload_progress_ => upload_progress_
session.use_cookies => On => On
session.use_only_cookies => On => On
session.use_strict_mode => Off => Off
session.use_trans_sid => 0 => 0

shmop

shmop support => enabled

SimpleXML

Simplexml support => enabled
Revision => $Id$
Schema support => enabled

snmp

NET-SNMP Support => enabled
NET-SNMP Version => 5.6.2.1
PHP SNMP Version => 0.1

soap

Soap Client => enabled
Soap Server => enabled

Directive => Local Value => Master Value
soap.wsdl_cache => 1 => 1
soap.wsdl_cache_dir => /tmp => /tmp
soap.wsdl_cache_enabled => 1 => 1
soap.wsdl_cache_limit => 5 => 5
soap.wsdl_cache_ttl => 86400 => 86400

sockets

Sockets Support => enabled

SPL

SPL support => enabled
Interfaces => Countable, OuterIterator, RecursiveIterator, SeekableIterator, SplObserver, SplSubject
Classes => AppendIterator, ArrayIterator, ArrayObject, BadFunctionCallException, BadMethodCallException, CachingIterator, CallbackFilterIterator, DirectoryIterator, DomainException, EmptyIterator, FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator, InvalidArgumentException, IteratorIterator, LengthException, LimitIterator, LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException, OutOfRangeException, OverflowException, ParentIterator, RangeException, RecursiveArrayIterator, RecursiveCachingIterator, RecursiveCallbackFilterIterator, RecursiveDirectoryIterator, RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator, RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList, SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap, SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject, UnderflowException, UnexpectedValueException

sqlite3

SQLite3 support => enabled
SQLite3 module version => 7.1.7
SQLite Library => 3.15.1

Directive => Local Value => Master Value
sqlite3.extension_dir => no value => no value

standard

Dynamic Library Support => enabled
Path to sendmail => /usr/sbin/sendmail -t -i

Directive => Local Value => Master Value
assert.active => 1 => 1
assert.bail => 0 => 0
assert.callback => no value => no value
assert.exception => 0 => 0
assert.quiet_eval => 0 => 0
assert.warning => 1 => 1
auto_detect_line_endings => 0 => 0
default_socket_timeout => 60 => 60
from => no value => no value
session.trans_sid_hosts => no value => no value
session.trans_sid_tags => a=href,area=href,frame=src,form= => a=href,area=href,frame=src,form=
url_rewriter.hosts => no value => no value
url_rewriter.tags => form= => form=
user_agent => no value => no value

sysvmsg

sysvmsg support => enabled
Revision => $Id$

sysvsem

Version => 7.1.7

sysvshm

Version => 7.1.7

tidy

Tidy support => enabled
libTidy Release => 31 October 2006 - Apple Inc. build 15.18.1
Extension Version => 7.1.7 ($Id$)

Directive => Local Value => Master Value
tidy.clean_output => 0 => 0
tidy.default_config => no value => no value

tokenizer

Tokenizer Support => enabled

wddx

WDDX Support => enabled
WDDX Session Serializer => enabled

xml

XML Support => active
XML Namespace Support => active
libxml2 Version => 2.9.4

xmlreader

XMLReader => enabled

xmlrpc

core library version => xmlrpc-epi v. 0.51
php extension version => 7.1.7
author => Dan Libby
homepage => http://xmlrpc-epi.sourceforge.net
open sourced by => Epinions.com

xmlwriter

XMLWriter => enabled

xsl

XSL => enabled
libxslt Version => 1.1.29
libxslt compiled against libxml Version => 2.9.4
EXSLT => enabled
libexslt Version => 1.1.29

zip

Zip => enabled
Zip version => 1.13.5
Libzip version => 1.1.2

zlib

ZLib Support => enabled
Stream Wrapper => compress.zlib://
Stream Filter => zlib.inflate, zlib.deflate
Compiled Version => 1.2.11
Linked Version => 1.2.11

Directive => Local Value => Master Value
zlib.output_compression => Off => Off
zlib.output_compression_level => -1 => -1
zlib.output_handler => no value => no value

Additional Modules

Module Name

Environment

Variable => Value
TERM_PROGRAM => Apple_Terminal
TERM => xterm-256color
SHELL => /bin/bash
TMPDIR => /var/folders/t_/33l6kxpd7h76wpkxp11zdpy80000gp/T/
Apple_PubSub_Socket_Render => /private/tmp/com.apple.launchd.X21jMKYUJj/Render
TERM_PROGRAM_VERSION => 400
TERM_SESSION_ID => D94A26C0-2CFF-495A-B0D7-F3C2AE068263
USER => Urij
SSH_AUTH_SOCK => /private/tmp/com.apple.launchd.2T38RR2NE8/Listeners
PATH => /Users/Urij/.composer/vendor/bin:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin
PWD => /Users/Urij/code/mossebo-shop-admin
LANG => ru_RU.UTF-8
XPC_FLAGS => 0x0
XPC_SERVICE_NAME => 0
HOME => /Users/Urij
SHLVL => 1
LOGNAME => Urij
_ => /usr/bin/php
OLDPWD => /usr/local
__CF_USER_TEXT_ENCODING => 0x1F6:0x7:0x31

PHP Variables

Variable => Value
$_SERVER['TERM_PROGRAM'] => Apple_Terminal
$_SERVER['TERM'] => xterm-256color
$_SERVER['SHELL'] => /bin/bash
$_SERVER['TMPDIR'] => /var/folders/t_/33l6kxpd7h76wpkxp11zdpy80000gp/T/
$_SERVER['Apple_PubSub_Socket_Render'] => /private/tmp/com.apple.launchd.X21jMKYUJj/Render
$_SERVER['TERM_PROGRAM_VERSION'] => 400
$_SERVER['TERM_SESSION_ID'] => D94A26C0-2CFF-495A-B0D7-F3C2AE068263
$_SERVER['USER'] => Urij
$_SERVER['SSH_AUTH_SOCK'] => /private/tmp/com.apple.launchd.2T38RR2NE8/Listeners
$_SERVER['PATH'] => /Users/Urij/.composer/vendor/bin:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin
$_SERVER['PWD'] => /Users/Urij/code/mossebo-shop-admin
$_SERVER['LANG'] => ru_RU.UTF-8
$_SERVER['XPC_FLAGS'] => 0x0
$_SERVER['XPC_SERVICE_NAME'] => 0
$_SERVER['HOME'] => /Users/Urij
$_SERVER['SHLVL'] => 1
$_SERVER['LOGNAME'] => Urij
$_SERVER['_'] => /usr/bin/php
$_SERVER['OLDPWD'] => /usr/local
$_SERVER['__CF_USER_TEXT_ENCODING'] => 0x1F6:0x7:0x31
$_SERVER['PHP_SELF'] =>
$_SERVER['SCRIPT_NAME'] =>
$_SERVER['SCRIPT_FILENAME'] =>
$_SERVER['PATH_TRANSLATED'] =>
$_SERVER['DOCUMENT_ROOT'] =>
$_SERVER['REQUEST_TIME_FLOAT'] => 1522684512.3831
$_SERVER['REQUEST_TIME'] => 1522684512
$_SERVER['argv'] => Array
(
)

$_SERVER['argc'] => 0
$_ENV['TERM_PROGRAM'] => Apple_Terminal
$_ENV['TERM'] => xterm-256color
$_ENV['SHELL'] => /bin/bash
$_ENV['TMPDIR'] => /var/folders/t_/33l6kxpd7h76wpkxp11zdpy80000gp/T/
$_ENV['Apple_PubSub_Socket_Render'] => /private/tmp/com.apple.launchd.X21jMKYUJj/Render
$_ENV['TERM_PROGRAM_VERSION'] => 400
$_ENV['TERM_SESSION_ID'] => D94A26C0-2CFF-495A-B0D7-F3C2AE068263
$_ENV['USER'] => Urij
$_ENV['SSH_AUTH_SOCK'] => /private/tmp/com.apple.launchd.2T38RR2NE8/Listeners
$_ENV['PATH'] => /Users/Urij/.composer/vendor/bin:/usr/local/bin:/usr/bin:/bin:/usr/sbin:/sbin:/usr/local/bin
$_ENV['PWD'] => /Users/Urij/code/mossebo-shop-admin
$_ENV['LANG'] => ru_RU.UTF-8
$_ENV['XPC_FLAGS'] => 0x0
$_ENV['XPC_SERVICE_NAME'] => 0
$_ENV['HOME'] => /Users/Urij
$_ENV['SHLVL'] => 1
$_ENV['LOGNAME'] => Urij
$_ENV['_'] => /usr/bin/php
$_ENV['OLDPWD'] => /usr/local
$_ENV['__CF_USER_TEXT_ENCODING'] => 0x1F6:0x7:0x31

PHP License
This program is free software; you can redistribute it and/or modify
it under the terms of the PHP License as published by the PHP Group
and included in the distribution in the file:  LICENSE

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.

If you did not receive a copy of the PHP license, or have any
questions about PHP licensing, please contact license@php.net.
ZEP-2:mossebo-shop-admin Urij$

    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => env('FILESYSTEM_CLOUD', 's3'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],



        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
        ],

//        'media' => [
//            'driver' => 'local',
//            'root' => storage_path('app/public/media'),
//            'url' => env('APP_URL').'/storage/media',
//            'visibility' => 'public',
//        ],

        'media' => [
            'driver' => 'local',
            'root' => public_path('uploads'),
            'url' => env('APP_URL').'/uploads',
            'visibility' => 'public',
        ],

    ],

];
