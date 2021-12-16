

CREATE TABLE `appointments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bay` varchar(255) DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `time_from` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `time_to` varchar(255) DEFAULT NULL,
  `account_number` varchar(255) DEFAULT NULL,
  `make` varchar(255) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `derivative` varchar(255) DEFAULT NULL,
  `chassis_number` varchar(255) DEFAULT NULL,
  `engine_cc` varchar(255) DEFAULT NULL,
  `fuel_type` varchar(255) DEFAULT NULL,
  `engine_no` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `paint_code` varchar(255) DEFAULT NULL,
  `key_code` varchar(255) DEFAULT NULL,
  `radio_code` varchar(255) DEFAULT NULL,
  `acc_number` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` char(50) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `house_no` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `road` varchar(255) DEFAULT NULL,
  `locality` varchar(255) DEFAULT NULL,
  `town` varchar(255) DEFAULT NULL,
  `county` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;



CREATE TABLE `bank_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bsb` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `account_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `limitfrom` double NOT NULL,
  `limitto` double NOT NULL,
  `iban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `merchantid` text COLLATE utf8mb4_unicode_ci,
  `password` text COLLATE utf8mb4_unicode_ci,
  `returnurl` text COLLATE utf8mb4_unicode_ci,
  `posturl` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `bal` double(20,2) DEFAULT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `is_default` int(11) NOT NULL DEFAULT '0',
  `verification_required` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `bays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) DEFAULT NULL,
  `url_page` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `checkout_carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `client_informations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `current_languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `house_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `road` text COLLATE utf8mb4_unicode_ci,
  `locality` text COLLATE utf8mb4_unicode_ci,
  `town` text COLLATE utf8mb4_unicode_ci,
  `county` text COLLATE utf8mb4_unicode_ci,
  `telephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `customer_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `credit_limit` varchar(191) DEFAULT NULL,
  `credit_terms` varchar(191) DEFAULT NULL,
  `alternate_contact_1` varchar(191) DEFAULT NULL,
  `telephone_1` varchar(191) DEFAULT NULL,
  `alternate_contact_2` varchar(191) DEFAULT NULL,
  `telephone_2` varchar(191) DEFAULT NULL,
  `alternate_contact_3` varchar(191) DEFAULT NULL,
  `telephone_3` varchar(191) DEFAULT NULL,
  `further_info_1` text,
  `further_info_2` text,
  `further_info_3` text,
  `how_found_us` text,
  `last_invoiced` varchar(191) DEFAULT NULL,
  `description` text,
  `labour_rate` varchar(191) DEFAULT NULL,
  `labour_discount` varchar(191) DEFAULT NULL,
  `trade_parts_rate` int(11) DEFAULT NULL,
  `parts_discount` varchar(191) DEFAULT NULL,
  `force_tax_code_usage` varchar(191) DEFAULT NULL,
  `credit_account` int(11) DEFAULT '0',
  `allow_remainders` int(11) NOT NULL DEFAULT '0',
  `allow_mass_mailings` int(11) NOT NULL DEFAULT '0',
  `allow_indivual_email` int(11) NOT NULL DEFAULT '0',
  `allow_indivual_sms` int(11) NOT NULL DEFAULT '0',
  `settings` int(11) NOT NULL DEFAULT '0',
  `customer_type` varchar(191) DEFAULT NULL,
  `notes` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `customer_tyre_not_founds` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `database_backup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `backup_name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;



CREATE TABLE `dealer_signups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `drivers_datas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `estimates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_no` varchar(191) NOT NULL,
  `model` text NOT NULL,
  `derivative` varchar(191) NOT NULL,
  `chassis` varchar(191) NOT NULL,
  `engine_cc` varchar(191) NOT NULL,
  `fuel_type` varbinary(191) NOT NULL,
  `engine_code` varchar(191) NOT NULL,
  `engine_no` varchar(191) NOT NULL,
  `color` varchar(191) NOT NULL,
  `paint_code` varchar(191) NOT NULL,
  `key_code` varchar(191) NOT NULL,
  `radio_code` varchar(191) NOT NULL,
  `mileage` varchar(191) NOT NULL,
  `date_reg` date NOT NULL,
  `acc_number` varchar(191) NOT NULL,
  `company` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `house_no` varchar(191) NOT NULL,
  `post_code` varchar(191) NOT NULL,
  `road` varchar(191) NOT NULL,
  `locality` varchar(191) NOT NULL,
  `town` varchar(191) NOT NULL,
  `county` varchar(191) NOT NULL,
  `telephone` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `is_email` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `extra_order_items` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `price_to` double NOT NULL,
  `price_from` double NOT NULL,
  `tax` double DEFAULT NULL,
  `description` text NOT NULL,
  `image` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `finance_providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `finance_providers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `fitment_locations_areas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `fitment_locations_area_centers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `home_deliveries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `inqueries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `invoices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier` int(11) DEFAULT NULL,
  `type` varchar(191) NOT NULL,
  `account_number` varchar(191) DEFAULT NULL,
  `contact_name` varchar(191) DEFAULT NULL,
  `address` text,
  `post_code` int(11) DEFAULT NULL,
  `telephone` double DEFAULT NULL,
  `fax` double DEFAULT NULL,
  `invoice_date` date DEFAULT NULL,
  `invoice_number` varchar(191) DEFAULT NULL,
  `nominal_category` varchar(191) DEFAULT NULL,
  `nominal_code` varchar(191) DEFAULT NULL,
  `reference` text,
  `description` text,
  `t_code` varchar(191) DEFAULT NULL,
  `gross` varchar(191) DEFAULT NULL,
  `net` varchar(191) DEFAULT NULL,
  `t_code_net` varchar(191) DEFAULT NULL,
  `vat_net` varchar(191) DEFAULT NULL,
  `receipts` double DEFAULT NULL,
  `balance` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `invoice_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_no` varchar(191) NOT NULL,
  `model` text NOT NULL,
  `derivative` varchar(191) NOT NULL,
  `chassis` varchar(191) NOT NULL,
  `engine_cc` varchar(191) NOT NULL,
  `fuel_type` varbinary(191) NOT NULL,
  `engine_code` varchar(191) NOT NULL,
  `engine_no` varchar(191) NOT NULL,
  `color` varchar(191) NOT NULL,
  `paint_code` varchar(191) NOT NULL,
  `key_code` varchar(191) NOT NULL,
  `radio_code` varchar(191) NOT NULL,
  `mileage` varchar(191) NOT NULL,
  `date_reg` date NOT NULL,
  `acc_number` varchar(191) NOT NULL,
  `company` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `house_no` varchar(191) NOT NULL,
  `post_code` varchar(191) NOT NULL,
  `road` varchar(191) NOT NULL,
  `locality` varchar(191) NOT NULL,
  `town` varchar(191) NOT NULL,
  `county` varchar(191) NOT NULL,
  `telephone` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `is_email` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `jobsheets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `registration_no` varchar(191) NOT NULL,
  `model` text NOT NULL,
  `derivative` varchar(191) NOT NULL,
  `chassis` varchar(191) NOT NULL,
  `engine_cc` varchar(191) NOT NULL,
  `fuel_type` varbinary(191) NOT NULL,
  `engine_code` varchar(191) NOT NULL,
  `engine_no` varchar(191) NOT NULL,
  `color` varchar(191) NOT NULL,
  `paint_code` varchar(191) NOT NULL,
  `key_code` varchar(191) NOT NULL,
  `radio_code` varchar(191) NOT NULL,
  `mileage` varchar(191) NOT NULL,
  `date_reg` date NOT NULL,
  `acc_number` varchar(191) NOT NULL,
  `company` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `house_no` varchar(191) NOT NULL,
  `post_code` varchar(191) NOT NULL,
  `road` varchar(191) NOT NULL,
  `locality` varchar(191) NOT NULL,
  `town` varchar(191) NOT NULL,
  `county` varchar(191) NOT NULL,
  `telephone` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `is_email` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `languages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `order_summary` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `session_id` text,
  `price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `pages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` varchar(191) NOT NULL,
  `method` varchar(191) NOT NULL,
  `amount` double NOT NULL,
  `date` date NOT NULL,
  `description` text,
  `allocated` double DEFAULT NULL,
  `balance` double DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `pay_pals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `postcodes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `postcode` varchar(8) DEFAULT NULL,
  `eastings` varchar(8) DEFAULT NULL,
  `northings` varchar(9) DEFAULT NULL,
  `latitude` varchar(8) DEFAULT NULL,
  `longitude` varchar(9) DEFAULT NULL,
  `town` varchar(40) DEFAULT NULL,
  `region` varchar(28) DEFAULT NULL,
  `uk_region` varchar(24) DEFAULT NULL,
  `country` varchar(7) DEFAULT NULL,
  `country_string` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2858 DEFAULT CHARSET=utf8;



CREATE TABLE `promotions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `promo_codes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `promo_codes_values` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `regions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `country_id` int(11) NOT NULL,
  `url` text NOT NULL,
  `nick` varchar(191) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `requests_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `role_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `role_users_user_id_role_id_unique` (`user_id`,`role_id`),
  KEY `role_users_role_id_foreign` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `selected_fitment_centers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `seo_tools` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `route` text COLLATE utf8mb4_unicode_ci,
  `writer` text COLLATE utf8mb4_unicode_ci,
  `handler` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `title` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=181 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `key_term` varchar(191) NOT NULL,
  `value` text,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;



CREATE TABLE `shipping_addresses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci,
  `address2` text COLLATE utf8mb4_unicode_ci,
  `postal_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direct_shipment_discount` double NOT NULL,
  `longitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `shipping_methods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `distance_from` double NOT NULL,
  `distance_to` double NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `sites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `sliders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `file` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `sms` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `social_facebook_accounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `stock` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `supplier` varchar(191) DEFAULT NULL,
  `category` varchar(191) DEFAULT NULL,
  `sub` varchar(191) DEFAULT NULL,
  `manufacturer` varchar(191) DEFAULT NULL,
  `part_number` varchar(191) DEFAULT NULL,
  `barcode` varchar(191) DEFAULT NULL,
  `barcode_img` text,
  `description` varchar(191) DEFAULT NULL,
  `cost_net` varchar(191) DEFAULT NULL,
  `select_cost_net` varchar(191) DEFAULT NULL,
  `trade_markup` varchar(191) DEFAULT NULL,
  `trade_net` varchar(191) DEFAULT NULL,
  `taxcode` varchar(191) DEFAULT NULL,
  `retail_markup` varchar(191) DEFAULT NULL,
  `retail_net` varchar(191) DEFAULT NULL,
  `gurantee` varchar(191) DEFAULT NULL,
  `gurantee_custom` varchar(191) DEFAULT NULL,
  `location` varchar(191) DEFAULT NULL,
  `keywords` varchar(191) DEFAULT NULL,
  `class` varchar(191) DEFAULT NULL,
  `width` varchar(191) DEFAULT NULL,
  `economy` varchar(191) DEFAULT NULL,
  `wet_grip` varchar(191) DEFAULT NULL,
  `noise` varchar(191) DEFAULT NULL,
  `level` varchar(191) DEFAULT NULL,
  `track_item` int(11) DEFAULT '0',
  `actual_stock_level` varchar(191) DEFAULT NULL,
  `low_stock_below` varchar(191) DEFAULT NULL,
  `minimum_order_quantity` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_At` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;



CREATE TABLE `sub_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `url_page` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `supliers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_number` varchar(191) NOT NULL,
  `name` varchar(191) NOT NULL,
  `company` varchar(191) NOT NULL,
  `address` text NOT NULL,
  `post_code` varchar(15) NOT NULL,
  `telephone` varchar(191) NOT NULL,
  `fax` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `website` varchar(191) NOT NULL,
  `stock_supplier` int(11) NOT NULL DEFAULT '1',
  `nominal_code` varchar(191) NOT NULL,
  `credit_account` int(11) NOT NULL DEFAULT '0',
  `notes` text NOT NULL,
  `credit_limit` int(11) DEFAULT NULL,
  `credit_terms` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `tax_methods` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tyres` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `truck` int(11) NOT NULL,
  `otr` int(11) NOT NULL,
  `pattern_id` int(11) NOT NULL,
  `width` double NOT NULL,
  `profile` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rim_size` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `load_index` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speed_index` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `attributes` int(11) NOT NULL,
  `fitment_in` int(11) NOT NULL,
  `tyre_category_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `min_quantity` int(11) NOT NULL,
  `stock_available` int(11) NOT NULL,
  `max_order_quantity` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `make_id` int(11) NOT NULL,
  `series_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `on_sale` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `features` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock_low_quantity_notify_to_user` int(11) NOT NULL,
  `run_flat` int(11) NOT NULL,
  `suv_tyre` int(11) NOT NULL,
  `fuel_efficient_tyre` int(11) NOT NULL,
  `recommend` int(11) NOT NULL,
  `our_pick` int(11) NOT NULL,
  `ceo_choice` int(11) NOT NULL,
  `recommend_type` int(11) NOT NULL,
  `tyre_size` int(11) NOT NULL,
  `fit_tomorrow` int(11) NOT NULL,
  `eco_freindly` int(11) NOT NULL,
  `position` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tra_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `benefits` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tyres_brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tyres_brands_patterns` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_id` int(11) NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tyres_discounts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tyre_attributes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tyre_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `tyre_series` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `tyre_sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `referral_id` int(11) DEFAULT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `membership_id` int(10) unsigned NOT NULL DEFAULT '1',
  `membership_started` date DEFAULT NULL,
  `membership_expired` date DEFAULT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `occupation` text COLLATE utf8mb4_unicode_ci,
  `address` text COLLATE utf8mb4_unicode_ci,
  `about` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci,
  `api_token` text COLLATE utf8mb4_unicode_ci,
  `d_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `verified` int(11) DEFAULT '0',
  `verification_level` int(11) NOT NULL DEFAULT '0',
  `verification_status` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `user_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `vehicles_models` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` int(11) NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `vehicles_series` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `vehicle_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `url_page` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;



CREATE TABLE `vehicle_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `vehicle_id` int(11) NOT NULL,
  `name` varchar(191) DEFAULT NULL,
  `telephone` varchar(191) DEFAULT NULL,
  `mobile` varchar(191) DEFAULT NULL,
  `origin` varchar(191) DEFAULT NULL,
  `model_series` varchar(191) DEFAULT NULL,
  `seats` varchar(191) DEFAULT NULL,
  `features` text,
  `general_checkbox` text,
  `body_style` varchar(191) DEFAULT NULL,
  `gears` varchar(191) DEFAULT NULL,
  `transmission` varchar(191) DEFAULT NULL,
  `drive_axle` varchar(191) DEFAULT NULL,
  `drive_type` varchar(191) DEFAULT NULL,
  `fuel_delivery` varchar(191) DEFAULT NULL,
  `aspiration` varchar(191) DEFAULT NULL,
  `cylinders` varchar(191) DEFAULT NULL,
  `valves_per_cyl` varchar(191) DEFAULT NULL,
  `bore` varchar(191) DEFAULT NULL,
  `kerb_weight` varchar(191) DEFAULT NULL,
  `max` varchar(191) DEFAULT NULL,
  `gross` varchar(191) DEFAULT NULL,
  `height_mm` varchar(191) DEFAULT NULL,
  `width` varchar(191) DEFAULT NULL,
  `roof` varchar(191) DEFAULT NULL,
  `combined` varchar(191) DEFAULT NULL,
  `urban` varchar(191) DEFAULT NULL,
  `cold` varchar(191) DEFAULT NULL,
  `bhp` varchar(191) DEFAULT NULL,
  `torque` varchar(191) DEFAULT NULL,
  `top_speed` varchar(191) DEFAULT NULL,
  `zero_sixty` varchar(191) DEFAULT NULL,
  `c02` varchar(191) DEFAULT NULL,
  `custom_field1` varchar(191) DEFAULT NULL,
  `custom_field2` varchar(191) DEFAULT NULL,
  `custom_field3` varchar(191) DEFAULT NULL,
  `custom_field4` varchar(191) DEFAULT NULL,
  `custom_field5` varchar(191) DEFAULT NULL,
  `custom_field6` varchar(191) DEFAULT NULL,
  `custom_field7` varchar(191) DEFAULT NULL,
  `custom_field8` varchar(191) DEFAULT NULL,
  `notes` text,
  `type_of_vehicles` varchar(191) DEFAULT NULL,
  `last_invoiced` varchar(191) DEFAULT NULL,
  `previous` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;



CREATE TABLE `vehicle_make` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_number` varchar(191) DEFAULT NULL,
  `make` varchar(191) DEFAULT NULL,
  `model` varchar(191) DEFAULT NULL,
  `derivative` varchar(191) DEFAULT NULL,
  `chassis_number` varchar(191) DEFAULT NULL,
  `engine_cc` varchar(191) DEFAULT NULL,
  `fuel_type` varchar(191) DEFAULT NULL,
  `engine_no` varchar(191) DEFAULT NULL,
  `color` varchar(191) DEFAULT NULL,
  `paint_code` varchar(191) DEFAULT NULL,
  `key_code` varchar(191) DEFAULT NULL,
  `radio_code` varchar(191) DEFAULT NULL,
  `date_manufactured` varchar(191) DEFAULT NULL,
  `date_reg` varchar(191) DEFAULT NULL,
  `tyre_size_front` varchar(191) DEFAULT NULL,
  `tyre_size_back` varchar(191) DEFAULT NULL,
  `tyre_depth_front` varchar(191) DEFAULT NULL,
  `tyre_depth_back` varchar(191) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;


INSERT INTO appointments (`id`, `bay`, `from_date`, `time_from`, `status`, `to_date`, `time_to`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `acc_number`, `company`, `first_name`, `middle_name`, `last_name`, `house_no`, `postcode`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `created_at`, `updated_at`, `email`, `description`) VALUES 
('1','test1','2021-08-07','00:15','MOT','2021-08-07','00:45','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','','test','test','test','test','test','test','2021-08-04 23:01:06','2021-08-04 23:01:06','','');

INSERT INTO appointments (`id`, `bay`, `from_date`, `time_from`, `status`, `to_date`, `time_to`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `acc_number`, `company`, `first_name`, `middle_name`, `last_name`, `house_no`, `postcode`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `created_at`, `updated_at`, `email`, `description`) VALUES 
('2','test1','2021-08-07','01:45','MOT','2021-08-07','02:30','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','','test','test','test','test','test','test','2021-08-04 23:02:11','2021-08-04 23:02:11','','');

INSERT INTO appointments (`id`, `bay`, `from_date`, `time_from`, `status`, `to_date`, `time_to`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `acc_number`, `company`, `first_name`, `middle_name`, `last_name`, `house_no`, `postcode`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `created_at`, `updated_at`, `email`, `description`) VALUES 
('3','','2021-09-07','01:45','Cancellation','2021-09-07','01:45','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','','test','test','test','test','test','test','2021-09-07 17:46:56','2021-09-07 17:46:56','','');

INSERT INTO appointments (`id`, `bay`, `from_date`, `time_from`, `status`, `to_date`, `time_to`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `acc_number`, `company`, `first_name`, `middle_name`, `last_name`, `house_no`, `postcode`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `created_at`, `updated_at`, `email`, `description`) VALUES 
('4','','2021-09-07','02:30','Cancellation','2021-09-07','01:45','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','','test','test','test','test','test','test','2021-09-07 17:46:56','2021-09-07 17:46:56','','');

INSERT INTO appointments (`id`, `bay`, `from_date`, `time_from`, `status`, `to_date`, `time_to`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `acc_number`, `company`, `first_name`, `middle_name`, `last_name`, `house_no`, `postcode`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `created_at`, `updated_at`, `email`, `description`) VALUES 
('5','','2021-09-07','02:30','Cancellation','2021-09-07','02:30','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','1','testst marys ave','test','test','test','test','test','2021-09-07 17:51:39','2021-09-07 17:51:39','','');

INSERT INTO appointments (`id`, `bay`, `from_date`, `time_from`, `status`, `to_date`, `time_to`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `acc_number`, `company`, `first_name`, `middle_name`, `last_name`, `house_no`, `postcode`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `created_at`, `updated_at`, `email`, `description`) VALUES 
('6','','2021-09-07','09:10','Cancellation','2021-09-07','10:10','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','','test','test','test','test','test','test','2021-09-07 20:44:27','2021-09-07 20:44:27','','');

INSERT INTO appointments (`id`, `bay`, `from_date`, `time_from`, `status`, `to_date`, `time_to`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `acc_number`, `company`, `first_name`, `middle_name`, `last_name`, `house_no`, `postcode`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `created_at`, `updated_at`, `email`, `description`) VALUES 
('7','','2021-10-01','02:30','Cancellation','2021-09-08','02:30','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','2021-09-08 22:49:28','2021-09-08 22:49:28','','');

INSERT INTO appointments (`id`, `bay`, `from_date`, `time_from`, `status`, `to_date`, `time_to`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `acc_number`, `company`, `first_name`, `middle_name`, `last_name`, `house_no`, `postcode`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `created_at`, `updated_at`, `email`, `description`) VALUES 
('8','Bay 1','2021-09-09','00:12','Complete','2021-09-10','22:02','12','yes','1594','yes','956','4565','margin','4565','white','123','123','123','3265987845','fabulas','ajmal','ajmal','ajmal','14','51310','test','yes','sialkto','pakistan','03043000','03043000','2021-09-09 20:21:39','2021-09-09 20:21:39','ajmal@gmail.com','');

INSERT INTO bank_accounts (`id`, `bsb`, `uid`, `name`, `account_name`, `image`, `limitfrom`, `limitto`, `iban`, `branch_code`, `account_number`, `merchantid`, `password`, `returnurl`, `posturl`, `address`, `bal`, `date`, `status`, `is_default`, `verification_required`, `created_at`, `updated_at`) VALUES 
('2','test','13fa2e51c84e55b74681e5fc3a65c21a','Test','Test','','0','0','','','879779079797','','','','','','0.00','2021-05-08','1','0','0','2021-05-08 19:51:28','2021-05-08 19:51:28');

INSERT INTO bays (`id`, `name`, `created_at`, `updated_at`) VALUES 
('1','test1','2021-08-05 23:18:20','');

INSERT INTO bays (`id`, `name`, `created_at`, `updated_at`) VALUES 
('2','test2','2021-08-05 23:18:26','');

INSERT INTO categories (`id`, `name`, `url`, `category_id`, `url_page`, `created_at`, `updated_at`) VALUES 
('1','Tes','test','','1','2021-05-08 19:38:32','2021-05-08 19:38:32');

INSERT INTO categories (`id`, `name`, `url`, `category_id`, `url_page`, `created_at`, `updated_at`) VALUES 
('2','Test 2','','1','1','2021-05-08 19:40:13','2021-05-08 19:40:13');

INSERT INTO countries (`id`, `name`, `active`, `created_at`, `updated_at`) VALUES 
('1','Pakistan','1','2021-05-08 19:52:11','2021-05-08 19:52:11');

INSERT INTO customers (`id`, `account_number`, `company`, `first_name`, `middle_name`, `last_name`, `company_name`, `house_no`, `postal_code`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `email`, `active`, `created_at`, `updated_at`) VALUES 
('1','7769196','test','Muhammad','','Arbaz','test','test','46000','test','test','test','test','test','+923205038329','mohammad.arbaz001@gmail.com','0','2021-06-09 20:02:00','2021-06-09 23:24:46');

INSERT INTO customers (`id`, `account_number`, `company`, `first_name`, `middle_name`, `last_name`, `company_name`, `house_no`, `postal_code`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `email`, `active`, `created_at`, `updated_at`) VALUES 
('3','test','test','test','test','test','','test','46000','test','test','test','test','test','test','mohammad.arbaz0011@gmail.com','0','2021-06-28 22:03:43','2021-06-28 22:03:43');

INSERT INTO customer_details (`id`, `customer_id`, `credit_limit`, `credit_terms`, `alternate_contact_1`, `telephone_1`, `alternate_contact_2`, `telephone_2`, `alternate_contact_3`, `telephone_3`, `further_info_1`, `further_info_2`, `further_info_3`, `how_found_us`, `last_invoiced`, `description`, `labour_rate`, `labour_discount`, `trade_parts_rate`, `parts_discount`, `force_tax_code_usage`, `credit_account`, `allow_remainders`, `allow_mass_mailings`, `allow_indivual_email`, `allow_indivual_sms`, `settings`, `customer_type`, `notes`, `created_at`, `updated_at`) VALUES 
('1','1','10','10','Test','Test','Test','Test','Test','Test','Test','Test','Test','EC Existing Customer','Test','','15','15','1','15','T5 VAT FREE 20%','0','1','1','1','1','0','Retail Customer','','2021-06-09 23:21:05','2021-06-09 23:24:46');

INSERT INTO customer_details (`id`, `customer_id`, `credit_limit`, `credit_terms`, `alternate_contact_1`, `telephone_1`, `alternate_contact_2`, `telephone_2`, `alternate_contact_3`, `telephone_3`, `further_info_1`, `further_info_2`, `further_info_3`, `how_found_us`, `last_invoiced`, `description`, `labour_rate`, `labour_discount`, `trade_parts_rate`, `parts_discount`, `force_tax_code_usage`, `credit_account`, `allow_remainders`, `allow_mass_mailings`, `allow_indivual_email`, `allow_indivual_sms`, `settings`, `customer_type`, `notes`, `created_at`, `updated_at`) VALUES 
('2','3','test','test','test','test','test','test','test','test','test','test','test','','test','','test','test','0','test','-','','1','1','1','1','0','Retail Customer','test','2021-06-28 22:03:43','2021-06-28 22:03:43');

INSERT INTO database_backup (`id`, `backup_name`, `created_at`, `updated_at`) VALUES 
('1','database-backups/database_backup_on_2021-09-07.sql','2021-09-07 13:00:56','2021-09-07 13:00:56');

INSERT INTO database_backup (`id`, `backup_name`, `created_at`, `updated_at`) VALUES 
('2','database-backups/database_backup_on_2021-09-07.sql','2021-09-07 13:03:25','2021-09-07 13:03:25');

INSERT INTO estimates (`id`, `registration_no`, `model`, `derivative`, `chassis`, `engine_cc`, `fuel_type`, `engine_code`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `mileage`, `date_reg`, `acc_number`, `company`, `name`, `house_no`, `post_code`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `is_email`, `email`, `status`, `created_at`, `updated_at`) VALUES 
('1','test','a:2:{i:0;s:4:\"test\";i:1;s:4:\"test\";}','test','test','test','test','test','test','test','test','test','test','test','2021-06-22','test','test','a:3:{i:0;s:4:\"test\";i:1;s:4:\"test\";i:2;s:4:\"test\";}','test','test','test','test','test','test','test','test','on','test','mot','2021-06-18 21:22:11','2021-06-19 00:13:51');

INSERT INTO extra_order_items (`id`, `name`, `price_to`, `price_from`, `tax`, `description`, `image`, `created_at`, `updated_at`) VALUES 
('1','test','50','50','','50test','https://localhost/tyres/public/images/tyres/162049197527282.jpg','2021-05-08 21:39:35','2021-05-08 21:39:35');

INSERT INTO finance_providers (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES 
('1','Test','test@gmail.com','2021-05-08 20:28:36','2021-05-08 20:28:36');

INSERT INTO finance_providers (`id`, `name`, `email`, `created_at`, `updated_at`) VALUES 
('1','Test','test@gmail.com','2021-05-08 20:28:36','2021-05-08 20:28:36');

INSERT INTO invoices (`id`, `supplier`, `type`, `account_number`, `contact_name`, `address`, `post_code`, `telephone`, `fax`, `invoice_date`, `invoice_number`, `nominal_category`, `nominal_code`, `reference`, `description`, `t_code`, `gross`, `net`, `t_code_net`, `vat_net`, `receipts`, `balance`, `created_at`, `updated_at`) VALUES 
('2','1','','test','test','a:4:{i:0;s:4:\"test\";i:1;s:4:\"test\";i:2;s:4:\"test\";i:3;s:4:\"test\";}','46000','3205038329','3205038329','2020-05-20','','General','5000 | General','','','T1 EXC VAT 20%','45000','4000','T1 EXC VAT 20%','40000','0','0','2021-06-17 23:43:12','2021-06-17 23:43:12');

INSERT INTO invoice_table (`id`, `registration_no`, `model`, `derivative`, `chassis`, `engine_cc`, `fuel_type`, `engine_code`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `mileage`, `date_reg`, `acc_number`, `company`, `name`, `house_no`, `post_code`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `is_email`, `email`, `status`, `created_at`, `updated_at`) VALUES 
('1','test','a:2:{i:0;s:4:\"test\";i:1;s:4:\"test\";}','test','test','test','test','test','test','test','test','test','test','test','2021-06-23','test','test','a:3:{i:0;s:4:\"test\";i:1;s:4:\"test\";i:2;s:4:\"test\";}','test','test','test','test','test','test','test','test','on','test@gmail.com','service','2021-06-21 20:25:23','2021-06-21 20:25:23');

INSERT INTO jobsheets (`id`, `registration_no`, `model`, `derivative`, `chassis`, `engine_cc`, `fuel_type`, `engine_code`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `mileage`, `date_reg`, `acc_number`, `company`, `name`, `house_no`, `post_code`, `road`, `locality`, `town`, `county`, `telephone`, `mobile`, `is_email`, `email`, `status`, `created_at`, `updated_at`) VALUES 
('1','test200','a:2:{i:0;s:4:\"test\";i:1;s:4:\"test\";}','test','test','test','test','test','test','test','test','test','test','test','2021-06-15','test','test','a:3:{i:0;s:4:\"test\";i:1;s:4:\"test\";i:2;s:4:\"test\";}','test','test','test','test','test','test','test','test','on','mohammad.arbaz001@gmail.com','complete','2021-06-19 00:03:50','2021-06-26 22:04:20');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('1','2019_10_05_004132_create_settings_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('2','2019_12_02_142148_create_practitioner_settings_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('3','2019_12_03_100139_create_practitioner_reports_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('4','2019_12_04_145713_create_client_informations_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('5','2019_12_04_155255_create_reports_details_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('6','2019_12_04_220718_create_reports_notes_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('7','2019_12_12_141431_create_wellness_indices_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('8','2019_12_12_205646_create_physical_activities_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('9','2019_12_12_210500_create_physical_activity_exercises_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('10','2019_12_12_215401_create_diet_and_digestives_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('11','2019_12_12_223752_create_diet_and_digestive_exercises_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('12','2019_12_12_224415_create_stress_systems_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('13','2019_12_13_113055_create_stress_and_system_exercises_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('14','2019_12_13_114621_create_brain_markers_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('15','2019_12_13_120710_create_brain_markers_symptoms_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('16','2019_12_13_121217_create_cardio_vasculars_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('17','2019_12_13_121309_create_cardio_vascular_symptoms_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('18','2020_01_07_231321_create_user_permissions_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('19','2020_01_09_134856_create_physiological_foci_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('20','2020_01_09_181554_create_physiological_notes_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('21','2020_01_09_182509_create_advice_tables_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('22','2020_01_09_183135_create_advice_notes_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('23','2020_01_09_193117_create_physical_activity_extras_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('24','2020_01_09_193225_create_physical_activity_extra_notes_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('25','2020_01_09_230101_create_nutrition_supliments_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('26','2020_01_09_233047_create_treatments_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('27','2020_01_09_234958_create_appointments_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('28','2020_01_11_092053_create_suggested_tests_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('29','2020_01_11_095448_create_life_style_surveys_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('30','2020_01_11_101602_create_life_style_survey_templates_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('31','2020_01_11_124229_create_life_style_survey_summaries_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('32','2020_02_11_145816_create_languages_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('33','2020_02_11_153951_create_current_languages_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('34','2020_03_22_190340_create_requests_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('35','2020_03_22_201631_create_requests_details_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('36','2020_03_23_121633_create_sms_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('37','2020_04_14_234655_create_categories_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('38','2020_04_14_235155_create_sub_categories_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('39','2020_04_17_194350_create_tyres_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('40','2020_04_17_194830_create_tyres_categories_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('41','2020_04_17_200300_create_tyres_brands_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('42','2020_04_17_205141_create_tyres_brands_patterns_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('43','2020_04_17_210840_create_vehicles_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('44','2020_04_20_211210_create_promotions_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('45','2020_04_20_232540_create_pages_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('46','2020_04_22_001000_create_sites_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('47','2020_04_26_154626_create_tyre_attributes_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('48','2020_04_30_234831_create_checkout_carts_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('49','2020_05_01_000400_create_home_deliveries_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('50','2020_05_01_004605_create_customer_details_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('51','2020_05_02_134806_create_vehicles_models_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('52','2020_05_02_174406_create_vehicles_series_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('53','2020_05_03_002733_create_drivers_datas_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('54','2020_05_04_181910_create_tyre_series_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('55','2020_05_05_013854_create_vehicle_categories_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('56','2020_05_05_205051_create_customer_tyre_not_founds_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('57','2020_05_07_014133_create_banks_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('58','2020_05_07_152333_create_order_summaries_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('59','2020_05_08_012253_create_pay_pals_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('60','2020_05_08_230552_create_tyres_discounts_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('61','2020_05_10_164046_create_dealer_signups_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('62','2020_05_10_172302_create_fitment_locations_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('63','2020_05_10_172551_create_fitment_locations_areas_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('64','2020_05_10_195559_create_fitment_locations_area_centers_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('65','2020_05_12_231253_create_promo_codes_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('66','2020_05_12_235654_create_promo_codes_values_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('67','2020_05_14_154222_create_social_facebook_accounts_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('68','2020_05_21_161314_create_tyre_sizes_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('69','2020_05_23_001701_create_finance_providers_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('70','2020_05_27_160113_create_shipping_addresses_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('71','2020_05_27_170319_create_shipping_methods_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('72','2020_05_27_175118_create_tax_methods_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('73','2020_05_29_215847_create_selected_fitment_centers_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('74','2020_06_19_004127_create_inqueries_table','1');

INSERT INTO migrations (`id`, `migration`, `batch`) VALUES 
('75','2020_09_08_164055_create_seo_tools_table','1');

INSERT INTO payments (`id`, `payment_id`, `method`, `amount`, `date`, `description`, `allocated`, `balance`, `created_at`, `updated_at`) VALUES 
('3','0005','amex','4500','2021-06-26','test','0','0','2021-06-28 23:19:51','2021-09-07 17:56:56');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2','AB10','392900','804900','57.13514','-2.11731','Aberdeen','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('3','AB11','394500','805300','57.13875','-2.09089','Aberdeen','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('4','AB12','393300','801100','57.101','-2.1106','Aberdeen','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('5','AB13','385600','801900','57.10801','-2.23776','Milltimber','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('6','AB14','383600','801100','57.10076','-2.27073','Peterculter','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('7','AB15','390000','805300','57.13868','-2.16525','Aberdeen','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('8','AB16','390600','807800','57.16115','-2.15543','Aberdeen','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('9','AB21','387900','813200','57.2096','-2.20033','Aberdeen Airport','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('10','AB22','392800','810700','57.18724','-2.11913','Bridge of Don','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('11','AB23','394700','813500','57.21242','-2.08776','Aberdeen','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('12','AB24','393308','808004','57.16284','-2.11228','Aberdeen','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('13','AB25','393200','806900','57.15311','-2.11241','Aberdeen','Aberdeen City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('14','AB30','370900','772900','56.84678','-2.47712','Laurencekirk','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('15','AB31','368100','798300','57.07479','-2.52623','Banchory','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('16','AB32','380800','807200','57.15545','-2.31742','Westhill','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('17','AB33','355200','815100','57.22464','-2.74203','Alford','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('18','AB34','350800','800600','57.09393','-2.81204','Aboyne','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('19','AB35','330300','794700','57.03829','-3.14869','Ballatar','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('20','AB36','335600','812300','57.19715','-3.06589','Strathdon','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('21','AB37','318700','827500','57.33098','-3.35051','Ballindalloch','Moray','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('22','AB38','326500','844600','57.48589','-3.2261','Aberlour','Moray','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('23','AB39','386800','787400','56.97778','-2.21718','Stonehaven','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('24','AB41','393700','831700','57.37592','-2.10478','Ellon','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('25','AB42','406700','845600','57.50079','-1.88819','Peterhead','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('26','AB43','397400','863000','57.65714','-2.04358','Fraserburgh','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('27','AB44','370700','864400','57.66877','-2.49122','Macduff','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('28','AB45','366200','862500','57.65139','-2.56639','Banff','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('29','AB51','375600','822100','57.28907','-2.40485','Inverurie','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('30','AB52','363500','828300','57.34396','-2.60651','Insch','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('31','AB53','376400','848400','57.52537','-2.3941','Turriff','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('32','AB54','354200','840600','57.45361','-2.76333','Huntly','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('33','AB55','340700','848600','57.5239','-2.99024','','Moray','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('34','AB56','344800','865300','57.67442','-2.92559','','Moray','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('35','AL1','515800','206900','51.74836','-0.32237','St Albans','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('36','AL10','522200','208300','51.75958','-0.2292','Hatfield','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('37','AL2','515100','203800','51.72064','-0.33353','St Albans','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('38','AL3','512400','210100','51.77781','-0.37057','Redbourn','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('39','AL4','517700','209500','51.77133','-0.29398','Sandridge','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('40','AL5','513600','214400','51.81622','-0.35177','Harpenden','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('41','AL6','524200','216300','51.83104','-0.19737','Welwyn','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('42','AL7','525100','212500','51.79669','-0.18569','Welwyn Garden City','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('43','AL8','523500','213200','51.80334','-0.20863','Welwyn Garden City','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('44','AL9','524400','206700','51.74472','-0.19791','Hatfield','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('45','B1','406300','286800','52.47872','-1.90723','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('46','B10','410100','285800','52.46967','-1.8513','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('47','B11','409600','284100','52.4544','-1.85871','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('48','B12','408000','284700','52.45982','-1.88225','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('49','B13','408300','282100','52.43644','-1.8779','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('50','B14','407600','280000','52.41757','-1.88824','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('51','B15','405200','285400','52.46615','-1.92345','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('52','B16','404500','286500','52.47604','-1.93374','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('53','B17','402700','284800','52.46077','-1.96026','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('54','B18','405200','288200','52.49132','-1.92341','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('55','B19','406500','288800','52.4967','-1.90425','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('56','B2','407000','286800','52.47871','-1.89692','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('57','B20','405600','290700','52.51379','-1.91747','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('58','B21','404100','289900','52.50661','-1.93959','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('59','B23','409900','292300','52.52812','-1.85405','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('60','B24','411700','291300','52.51909','-1.82755','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('61','B25','412200','285300','52.46513','-1.8204','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('62','B26','414300','284800','52.46059','-1.78951','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('63','B27','412100','283000','52.44446','-1.82196','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('64','B28','410800','281000','52.4265','-1.84115','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('65','B29','403600','282200','52.43739','-1.94704','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('66','B3','406700','287000','52.48051','-1.90134','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('67','B30','404900','280500','52.42209','-1.92794','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('68','B31','401900','278900','52.40772','-1.97207','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('69','B32','400500','283400','52.44819','-1.99264','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('70','B33','414500','287000','52.48036','-1.78647','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('71','B34','414900','288700','52.49564','-1.78051','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('72','B35','414400','291300','52.51903','-1.78776','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('73','B36','415000','289600','52.50373','-1.77899','Castle Bromwich','Solihull','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('74','B37','417600','286800','52.47847','-1.74083','Chelmsley Wood','Solihull','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('75','B38','404500','278000','52.39962','-1.93385','Tees Grove','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('76','B4','407200','287200','52.48231','-1.89397','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('77','B40','418900','284600','52.45865','-1.72181','Bickenhill','Solihull','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('78','B42','406000','292900','52.53357','-1.91154','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('79','B43','404800','294500','52.54797','-1.92921','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('80','B44','407900','294200','52.54523','-1.88349','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('81','B45','399400','276700','52.38795','-2.00882','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('82','B46','420800','290100','52.50803','-1.69351','Coleshill','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('83','B47','408200','276600','52.38699','-1.8795','Wythall','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('84','B48','403500','273100','52.35557','-1.9486','Alvechurch','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('85','B49','409100','257700','52.21704','-1.86679','Alcester','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('86','B5','407100','285800','52.46972','-1.89547','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('87','B50','410000','252300','52.16847','-1.85377','Bidford-on-Avon','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('88','B6','407800','289600','52.50388','-1.88508','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('89','B60','396600','269800','52.3259','-2.04989','Bromsgrove','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('90','B61','395400','271900','52.34477','-2.06753','Bromsgrove','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('91','B62','397800','284300','52.45628','-2.03238','Hurst Green','Dudley','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('92','B63','395500','283800','52.45177','-2.06622','Hurst Green','Dudley','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('93','B64','395400','286100','52.47244','-2.06773','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('94','B65','397100','287300','52.48325','-2.04271','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('95','B66','402400','288400','52.49314','-1.96465','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('96','B67','401600','287600','52.48595','-1.97644','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('97','B68','400000','286800','52.47876','-2','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('98','B69','398100','289400','52.50213','-2.02799','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('99','B7','408700','288400','52.49307','-1.87185','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('100','B70','399800','291400','52.52012','-2.00295','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('101','B71','400700','293100','52.5354','-1.98968','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('102','B72','412100','294900','52.55145','-1.82153','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('103','B73','410700','295000','52.55238','-1.84217','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('104','B74','409600','298400','52.58297','-1.8583','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('105','B75','413000','297900','52.5784','-1.80813','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('106','B76','414500','294200','52.5451','-1.78616','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('107','B77','422500','302400','52.61855','-1.66762','Tamworth','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('108','B78','422100','301000','52.60598','-1.67362','Tamworth','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('109','B79','421600','305900','52.65005','-1.68069','Wigginton','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('110','B8','410800','288100','52.49034','-1.84092','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('111','B80','407100','264300','52.27641','-1.89593','Studley','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('112','B9','410300','286700','52.47776','-1.84833','','Birmingham','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('113','B90','412000','278100','52.4004','-1.82361','','Solihull','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('114','B91','414800','279600','52.41382','-1.78238','','Solihull','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('115','B92','415400','282100','52.43628','-1.77345','','Solihull','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('116','B93','417500','275900','52.38048','-1.74288','Dorridge','Solihull','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('117','B94','414200','272600','52.3509','-1.7915','Tanworth-in-Arden','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('118','B95','415000','265300','52.28524','-1.78008','Henley-in-Arden','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('119','B96','402700','261600','52.25217','-1.96044','Redditch','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('120','B97','403100','266800','52.29893','-1.95454','Redditch','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('121','B98','405900','267300','52.3034','-1.91346','Redditch','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('122','BA1','375000','165900','51.39109','-2.35934','Bath','Bath and North East Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('123','BA10','368800','135000','51.11291','-2.44576','Bruton','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('124','BA11','377300','148700','51.23652','-2.32519','Frome','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('125','BA12','386900','141400','51.17117','-2.1874','Longbridge Deverill','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('126','BA13','387500','151500','51.26201','-2.17917','Westbury','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('127','BA14','386000','157800','51.31863','-2.20092','Trowbridge','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('128','BA15','381600','161400','51.35088','-2.26425','Bradford-on-Avon','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('129','BA16','348000','136500','51.12489','-2.74313','Street','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('130','BA2','373800','162400','51.35957','-2.37633','Bath','Bath and North East Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('131','BA20','354900','115600','50.93753','-2.64193','Yeovil','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('132','BA21','355500','117100','50.95107','-2.63358','Yeovil','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('133','BA22','355300','119000','50.96814','-2.63666','Mudford','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('134','BA3','367000','153000','51.27468','-2.47313','Kilmersdon','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('135','BA4','362900','141500','51.17102','-2.53073','Shepton Mallet','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('136','BA5','354400','146200','51.21266','-2.65291','St Cuthbert Out','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('137','BA6','350700','138200','51.14042','-2.70478','Glastonbury','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('138','BA7','363700','132300','51.08833','-2.51835','Castle Cary','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('139','BA8','371200','122300','50.99883','-2.41046','Templecombe','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('140','BA9','371300','128800','51.05729','-2.40955','Wincanton','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('141','BB1','369500','429000','53.75625','-2.46265','Darwen','Blackburn with Darwen','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('142','BB10','385600','433700','53.79919','-2.21865','Burnley','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('143','BB11','383400','431900','53.78294','-2.25196','Burnley','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('144','BB12','380900','434200','53.80353','-2.29005','Ightenhill','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('145','BB18','388800','446500','53.91433','-2.17053','Salterforth','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('146','BB2','367000','427400','53.74171','-2.50039','Darwen','Blackburn with Darwen','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('147','BB3','369300','422500','53.69781','-2.46503','Darwen','Blackburn with Darwen','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('148','BB4','380900','423100','53.70376','-2.28936','Rawtenstall','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('149','BB5','375500','428800','53.75477','-2.37162','Accrington','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('150','BB6','372600','433000','53.79238','-2.41598','Accrington','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('151','BB7','374600','442000','53.87338','-2.38636','Clitheroe','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('152','BB8','389300','440200','53.85771','-2.1627','Newchurch','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('153','BB9','385900','437900','53.83695','-2.21429','Newchurch','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('154','BD1','416300','433300','53.79554','-1.75252','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('155','BD10','418100','437300','53.83143','-1.72496','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('156','BD11','421400','428400','53.75131','-1.67543','Dewsbury','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('157','BD12','415800','427800','53.74611','-1.76039','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('158','BD13','409300','432200','53.78582','-1.85883','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('159','BD14','412100','431800','53.78217','-1.81635','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('160','BD15','410800','434800','53.80917','-1.83597','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('161','BD16','411000','439200','53.84871','-1.83278','Bingley','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('162','BD17','415300','439000','53.84681','-1.76742','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('163','BD18','414700','437300','53.83154','-1.77662','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('164','BD19','419000','425700','53.72713','-1.712','Dewsbury','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('165','BD2','417500','435400','53.81438','-1.73418','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('166','BD20','403500','444500','53.89646','-1.94673','Steeton','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('167','BD21','406200','440900','53.86407','-1.90571','Keighley','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('168','BD22','403100','438800','53.84522','-1.95288','Keighley','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('169','BD23','396500','455200','53.99264','-2.05339','Thorlby','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('170','BD24','382100','464700','54.07773','-2.27361','Langcliffe','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('171','BD3','418000','433600','53.79818','-1.72669','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('172','BD4','418600','431100','53.77569','-1.71773','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('173','BD5','416000','431400','53.77847','-1.75717','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('174','BD6','414300','429800','53.76414','-1.78305','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('175','BD7','414400','431900','53.78301','-1.78143','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('176','BD8','414400','433900','53.80099','-1.78134','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('177','BD9','413900','435100','53.81179','-1.78888','Queensbury','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('178','BH1','409900','91700','50.72427','-1.85973','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('179','BH10','407700','95500','50.75847','-1.89082','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('180','BH11','405900','95800','50.76119','-1.91634','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('181','BH12','405200','93100','50.73692','-1.9263','','Poole','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('182','BH13','405800','90100','50.70993','-1.91785','','Poole','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('183','BH14','404000','91400','50.72164','-1.94333','','Poole','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('184','BH15','401100','91400','50.72165','-1.98442','','Poole','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('185','BH16','396900','93200','50.73783','-2.04394','Upton','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('186','BH17','401800','94100','50.74593','-1.97449','','Poole','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('187','BH18','400500','95500','50.75853','-1.99291','','Poole','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('188','BH19','402200','79100','50.61102','-1.9689','Swanage','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('189','BH2','408400','91400','50.72159','-1.88099','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('190','BH20','389700','87500','50.68648','-2.14582','Wareham','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('191','BH21','401900','101500','50.81248','-1.97303','Colehill','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('192','BH22','407900','100700','50.80524','-1.88787','Ferndown','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('193','BH23','417400','94100','50.74567','-1.75335','Burton','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('194','BH24','415100','105000','50.84377','-1.78551','Ringwood','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('195','BH25','424200','94800','50.75173','-1.65692','New Milton','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('196','BH3','408500','92900','50.73508','-1.87954','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('197','BH31','409000','108500','50.87537','-1.87207','Verwood','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('198','BH4','407200','91300','50.72071','-1.89799','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('199','BH5','411700','91800','50.72513','-1.83422','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('200','BH6','413800','92000','50.72688','-1.80446','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('201','BH7','411900','92900','50.73502','-1.83135','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('202','BH8','410500','93500','50.74044','-1.85118','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('203','BH9','409100','94500','50.74946','-1.871','','Bournemouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('204','BL0','379200','416600','53.64526','-2.31468','Ramsbottom','Bury','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('205','BL1','370600','410500','53.59002','-2.44421','','Bolton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('206','BL2','373900','410200','53.58749','-2.39432','','Bolton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('207','BL3','371400','407700','53.56489','-2.43186','','Bolton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('208','BL4','373500','405700','53.54702','-2.39999','','Bolton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('209','BL5','365900','406000','53.54928','-2.51473','Westhoughton','Bolton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('210','BL6','364300','410700','53.59142','-2.53941','Horwich','Bolton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('211','BL7','372100','414900','53.62965','-2.42194','','Bolton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('212','BL8','378400','412100','53.60478','-2.32647','','Bury','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('213','BL9','381100','410600','53.5914','-2.28557','','Bury','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('214','BN1','531100','106100','50.839','-0.13786','Brighton','Brighton and Hove','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('215','BN10','541100','101500','50.7953','0.00232','Peacehaven','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('216','BN11','514400','102800','50.81288','-0.37599','Worthing','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('217','BN12','511000','102800','50.81354','-0.42423','Worthing','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('218','BN13','512300','104700','50.83037','-0.40521','Worthing','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('219','BN14','514100','104900','50.83181','-0.37959','Worthing','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('220','BN15','518000','104800','50.83013','-0.32426','Lancing','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('221','BN16','506100','102800','50.81446','-0.49377','Rustington','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('222','BN17','503200','102700','50.81408','-0.53495','Littlehampton','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('223','BN18','500000','106500','50.84881','-0.57933','Arundel','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('224','BN2','533600','104500','50.82405','-0.10296','Brighton','Brighton and Hove','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('225','BN20','559000','99700','50.77449','0.25536','Eastbourne','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('226','BN21','560500','99500','50.77228','0.27653','Eastbourne','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('227','BN22','561000','101300','50.78832','0.2844','','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('228','BN23','563000','102400','50.79764','0.31325','Eastbourne','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('229','BN24','564200','104500','50.81618','0.3312','Westham','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('230','BN25','548700','99600','50.77633','0.10932','Seaford','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('231','BN26','556600','104800','50.82098','0.22352','Long Man','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('232','BN27','559300','110500','50.87146','0.2643','Hailsham','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('233','BN3','528500','105500','50.83419','-0.17498','Brighton','Brighton and Hove','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('234','BN41','525700','106100','50.8402','-0.21452','Brighton','Brighton and Hove','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('235','BN42','524500','105700','50.83686','-0.23169','Shoreham-by-Sea','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('236','BN43','522100','105500','50.83557','-0.26583','Shoreham-by-Sea','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('237','BN44','518000','111500','50.89036','-0.3221','Steyning','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('238','BN45','527700','111600','50.8892','-0.18421','Newtimber','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('239','BN5','521700','115600','50.92645','-0.26815','Henfield','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('240','BN6','529800','116100','50.92918','-0.15276','Clayton','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('241','BN7','540700','110600','50.87719','0.00014','Lewes','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('242','BN8','544200','114700','50.91318','0.05148','Ringmer','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('243','BN9','544500','101600','50.79536','0.05058','Newhaven','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('244','BR1','540600','170000','51.41107','0.02192','Bromley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('245','BR2','540700','167500','51.38858','0.02237','Bromley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('246','BR3','537000','169000','51.40297','-0.0302','Bromley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('247','BR4','538700','166000','51.37559','-0.00695','Bromley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('248','BR5','546400','167800','51.38983','0.10436','Bromley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('249','BR6','545700','165100','51.36575','0.0932','Bromley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('250','BR7','544100','170000','51.41019','0.07222','Bromley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('251','BR8','551400','168800','51.39751','0.1766','Swanley','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('252','BS1','358800','172900','51.45309','-2.593','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('253','BS10','357700','178800','51.50606','-2.60954','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('254','BS11','353200','177800','51.49672','-2.67425','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('255','BS13','357500','168300','51.41163','-2.61116','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('256','BS14','361000','168400','51.41278','-2.56084','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('257','BS15','364900','173500','51.4589','-2.50527','Kingswood','South Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('258','BS16','364600','176400','51.48496','-2.50988','Kingswood','South Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('259','BS2','359700','173600','51.45945','-2.58013','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('260','BS20','347800','175900','51.47916','-2.75176','Portbury','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('261','BS21','341000','171000','51.43443','-2.84886','Clevedon','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('262','BS22','335300','162800','51.36008','-2.92936','Weston-Super-Mare','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('263','BS23','332400','160900','51.34266','-2.97065','Weston-Super-Mare','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('264','BS24','335100','159200','51.32769','-2.93158','Hutton','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('265','BS25','342500','158300','51.32039','-2.82522','Winscombe','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('266','BS26','340400','153800','51.27971','-2.85461','Weare','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('267','BS27','346300','152800','51.27131','-2.76987','Cheddar','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('268','BS28','343200','147700','51.22515','-2.81349','Wedmore','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('269','BS29','338900','159500','51.33081','-2.87709','Banwell','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('270','BS3','358200','171200','51.43776','-2.60144','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('271','BS30','367200','171900','51.44465','-2.47201','Bitton','South Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('272','BS31','365800','167800','51.4077','-2.49176','Keynsham','Bath and North East Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('273','BS32','361200','182800','51.54228','-2.55955','Bradley Stoke','South Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('274','BS34','360900','180700','51.52338','-2.56364','Stoke Gifford','South Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('275','BS35','362000','188800','51.59629','-2.54866','Aust','South Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('276','BS36','366300','180900','51.52553','-2.48582','Frampton Cotterell','South Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('277','BS37','371100','182400','51.53928','-2.41675','Yate','South Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('278','BS39','363000','158900','51.32749','-2.53109','Clutton','Bath and North East Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('279','BS4','361000','170800','51.43437','-2.56111','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('280','BS40','351900','161100','51.34644','-2.69071','Nempnett Thrubwell','Bath and North East Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('281','BS41','354700','169500','51.42221','-2.65158','Long Ashton','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('282','BS48','348000','169900','51.42523','-2.748','Nailsea','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('283','BS49','343100','164900','51.3798','-2.81767','Yatton','North Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('284','BS5','361800','173800','51.4614','-2.54992','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('285','BS6','358400','174800','51.47015','-2.59898','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('286','BS7','359700','176600','51.48643','-2.58047','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('287','BS8','356900','173400','51.45745','-2.62041','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('288','BS9','356600','176700','51.4871','-2.62513','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('289','BS99','360200','173400','51.45769','-2.57291','Bristol','City of Bristol','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('290','BT1','146300','529800','54.59941','-5.92838','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('291','BT10','142500','525600','54.55983','-5.98338','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('292','BT11','141700','527400','54.57556','-5.9973','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('293','BT12','144500','529100','54.59223','-5.95557','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('294','BT13','144400','530600','54.60563','-5.95842','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('295','BT14','144300','532300','54.62082','-5.96144','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('296','BT15','146300','532500','54.62362','-5.93071','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('297','BT16','154700','528400','54.591','-5.79746','Dundonald','Castlereagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('298','BT17','140300','525100','54.55423','-6.01688','Dunmurry','Lisburn','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('299','BT18','153500','534100','54.64154','-5.82079','Holywood','North Down','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('300','BT19','163500','534700','54.6517','-5.66663','Bangor','North Down','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('301','BT2','146200','529100','54.59309','-5.92932','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('302','BT20','163700','535400','54.65808','-5.6641','Bangor','North Down','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('303','BT21','171300','532800','54.63826','-5.54448','Donaghadee','Ards','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('304','BT22','172200','517700','54.5032','-5.51886','','Ards','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('305','BT23','159900','525000','54.56301','-5.71437','','Ards','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('306','BT24','148800','509300','54.41683','-5.87232','','Down','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('307','BT25','133200','507800','54.39545','-6.11078','','Banbridge','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('308','BT26','136800','513900','54.45201','-6.06088','','Lisburn','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('309','BT27','139800','520200','54.51004','-6.02027','','Lisburn','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('310','BT28','135500','521900','54.52305','-6.08804','','Lisburn','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('311','BT29','129300','533100','54.62018','-6.1939','','Antrim','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('312','BT3','148000','532000','54.61999','-5.90401','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('313','BT30','159200','499500','54.33396','-5.70444','Downpatrick','Down','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('314','BT31','141600','494200','54.27783','-5.96992','','Banbridge','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('315','BT32','124100','501600','54.33502','-6.24483','','Banbridge','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('316','BT33','146200','487600','54.22095','-5.89385','Newcastle','Down','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('317','BT34','127100','481300','54.15466','-6.18034','','Newry and Mourne','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('318','BT35','110000','483500','54.16501','-6.44355','','Newry and Mourne','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('319','BT36','145100','538500','54.67682','-5.95448','','Newtownabbey','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('320','BT37','148200','538300','54.67658','-5.90634','Whiteabbey','Newtownabbey','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('321','BT38','155500','543800','54.7295','-5.79799','','Carrickfergus','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('322','BT39','141500','546300','54.74491','-6.0171','','Newtownabbey','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('323','BT4','150300','529900','54.6023','-5.86668','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('324','BT40','154700','556900','54.84659','-5.82146','','Larne','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('325','BT41','125800','545900','54.73301','-6.25997','Mill Town','Antrim','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('326','BT42','125200','559500','54.85458','-6.28215','','Ballymena','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('327','BT43','126500','563400','54.89024','-6.26565','','Ballymena','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('328','BT44','125900','572800','54.97416','-6.28394','','Ballymena','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('329','BT45','101600','550500','54.76045','-6.63935','','Magherafelt','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('330','BT46','100800','562300','54.86568','-6.66393','','Magherafelt','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('331','BT47','66600','576800','54.97386','-7.21151','','Derry','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('332','BT48','59500','581300','55.00933','-7.32731','Londonderry','Derry','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('333','BT49','83800','583800','55.04774','-6.95153','','Limavady','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('334','BT5','150000','528400','54.5887','-5.87004','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('335','BT51','101200','583700','55.05761','-6.68','','Coleraine','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('336','BT52','103500','592100','55.13423','-6.65285','','Coleraine','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('337','BT53','114600','585900','55.08519','-6.47305','','Ballymoney','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('338','BT54','129100','597800','55.19997','-6.25787','Ballycastle','Moyle','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('339','BT55','100200','597400','55.17971','-6.71005','Portstewart','Coleraine','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('340','BT56','104200','599200','55.19824','-6.64932','Portrush','Coleraine','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('341','BT57','112600','599000','55.2014','-6.51755','Bushmills','Moyle','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('342','BT6','148200','527500','54.57974','-5.89706','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('343','BT60','97500','498500','54.29219','-6.64951','','County Armagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('344','BT61','99800','506800','54.3679','-6.62264','','County Armagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('345','BT62','110400','511100','54.41256','-6.46416','Portadown','Craigavon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('346','BT63','115200','509800','54.40362','-6.38916','','Craigavon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('347','BT64','115300','514900','54.44938','-6.39252','','Craigavon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('348','BT65','117000','514300','54.44496','-6.36581','','Craigavon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('349','BT66','119200','515300','54.45514','-6.33292','Lurgan','Craigavon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('350','BT67','123600','518600','54.48713','-6.26832','','Craigavon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('351','BT68','85200','507600','54.36626','-6.84743','','Dungannon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('352','BT69','79100','514500','54.42425','-6.94843','','Dungannon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('353','BT7','146500','527800','54.58158','-5.92356','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('354','BT70','83800','524300','54.51495','-6.88672','','Dungannon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('355','BT71','95600','523300','54.51322','-6.70402','','Dungannon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('356','BT74','32000','509000','54.3432','-7.66425','','County Fermanagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('357','BT75','54900','510800','54.37531','-7.31559','Fivemiletown','Dungannon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('358','BT76','63300','515100','54.41941','-7.19167','','Dungannon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('359','BT77','68200','515600','54.42711','-7.11701','','Dungannon','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('360','BT78','52800','532900','54.57165','-7.37371','','Omagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('361','BT79','64400','537900','54.62422','-7.20073','','Omagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('362','BT8','147500','523100','54.53994','-5.90409','Carryduff','Castlereagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('363','BT80','93700','538100','54.64464','-6.74869','','Cookstown','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('364','BT81','38400','547700','54.69395','-7.61369','','Strabane','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('365','BT82','51500','561400','54.82576','-7.42777','','Strabane','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('366','BT9','144800','526800','54.57176','-5.94894','','Belfast','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('367','BT92','44100','494600','54.22294','-7.46184','','County Fermanagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('368','BT93','22600','523400','54.4651','-7.8264','','County Fermanagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('369','BT94','40300','512000','54.37595','-7.54078','','County Fermanagh','Northern Ireland','NIR','Northern Ireland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('370','CA1','341600','554900','54.88535','-2.91046','Carlisle','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('371','CA10','357400','524200','54.61104','-2.65966','Cliburn','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('372','CA11','349300','530200','54.66422','-2.78611','Catterlen','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('373','CA12','326800','523600','54.60214','-3.13326','Keswick','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('374','CA13','311900','530300','54.65997','-3.36589','Cockermouth','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('375','CA14','300800','527700','54.63454','-3.53704','Workington','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('376','CA15','304600','536200','54.71165','-3.48096','Maryport','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('377','CA16','368800','520000','54.57413','-2.48269','Appleby-in-Westmorland','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('378','CA17','377300','509300','54.47841','-2.35037','Kirkby Stephen','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('379','CA18','309700','496300','54.35408','-3.38958','Muncaster','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('380','CA19','310200','499900','54.38651','-3.38297','Muncaster','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('381','CA2','339100','554800','54.88415','-2.9494','Carlisle','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('382','CA20','305200','502600','54.40987','-3.46081','Gosforth','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('383','CA21','301800','506600','54.44516','-3.51451','Beckermet','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('384','CA22','300800','510500','54.48001','-3.53123','Egremont','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('385','CA23','303400','514300','54.51465','-3.49236','Cleator Moor','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('386','CA24','300200','514400','54.51493','-3.54181','Egremont','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('387','CA25','301800','515200','54.52243','-3.51737','Cleator Moor','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('388','CA26','304200','517600','54.54445','-3.48108','Arlecdon','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('389','CA27','296900','511800','54.49091','-3.59186','St Bees','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('390','CA28','298000','517600','54.54324','-3.57689','Whitehaven','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('391','CA3','339800','557400','54.9076','-2.93904','Carlisle','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('392','CA4','346500','550500','54.84636','-2.83326','Wetheral','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('393','CA5','334800','551600','54.85485','-3.0157','Orton','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('394','CA6','342900','567000','54.99423','-2.8926','Kirklinton','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('395','CA7','320500','546500','54.80696','-3.23702','Waverton','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('396','CA8','356100','560700','54.93895','-2.68531','Brampton','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('397','CA9','373100','545300','54.80176','-2.4185','Alston','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('398','CB1','549700','255400','52.17611','0.18955','Fulbourn','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('399','CB10','555400','239300','52.02989','0.26551','Saffron Walden','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('400','CB11','552000','235800','51.99938','0.21443','Newport','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('401','CB2','545900','253800','52.16276','0.13333','Great Shelford','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('402','CB21','557100','250712','52.13194','0.29553','Balsham','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('403','CB22','545719','249835','52.12718','0.12898','Little Shelford','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('404','CB23','535114','259140','52.21349','-0.02215','Highfields','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('405','CB24','538196','270565','52.31538','0.02762','Over','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('406','CB25','552595','264917','52.26083','0.23615','Lode','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('407','CB3','538300','259200','52.21324','0.02448','Hardwick','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('408','CB4','544400','262700','52.24312','0.11521','Impington','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('409','CB5','550900','262400','52.23868','0.21021','Stow cum Quy','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('410','CB6','551300','280800','52.40388','0.22434','Downham','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('411','CB7','558000','276800','52.36606','0.32087','Soham','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('412','CB8','565700','262000','52.23083','0.42659','Woodditton','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('413','CB9','567300','245500','52.08212','0.44187','Haverhill','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('414','CF10','318300','175700','51.47387','-3.17648','Butetown','Cardiff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('415','CF11','317200','175600','51.47281','-3.19229','Grangetown','Cardiff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('416','CF14','316600','180800','51.51947','-3.20216','Rhiwbina','Cardiff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('417','CF15','311700','182500','51.53401','-3.27319','Pentyrch','Cardiff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('418','CF23','320200','180300','51.5155','-3.15016','Pentwyn','Cardiff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('419','CF24','319200','176900','51.48479','-3.16379','Adamsdown','Cardiff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('420','CF3','322900','180700','51.51947','-3.11134','Trowbridge','Cardiff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('421','CF31','290700','180100','51.50876','-3.57514','','Bridgend','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('422','CF32','290300','185800','51.55992','-3.58268','Garw Valley','Bridgend','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('423','CF33','282700','182000','51.52424','-3.69101','Cynffig','Bridgend','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('424','CF34','285700','191500','51.61024','-3.65087','Maesteg','Bridgend','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('425','CF35','294700','181500','51.52211','-3.51793','Pencoed','Bridgend','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('426','CF36','282100','177600','51.48456','-3.69818','Porthcawl','Bridgend','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('427','CF37','307700','190200','51.6026','-3.33288','Pontypridd','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('428','CF38','307700','185500','51.56034','-3.33164','Llantwit Fardre','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('429','CF39','301400','190200','51.60153','-3.42382','Cymmer','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('430','CF40','299600','192300','51.62009','-3.45041','Tonypandy','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('431','CF41','297500','195400','51.64758','-3.48164','Ystrad','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('432','CF42','294800','197600','51.66685','-3.52132','Treorchy','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('433','CF43','299800','196500','51.65788','-3.44872','Ferndale','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('434','CF44','299300','203200','51.71802','-3.45788','Aberdare','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('435','CF45','305900','197600','51.66882','-3.36085','Penrhiwceiber','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('436','CF46','310100','197100','51.66501','-3.3','Treharris','Merthyr Tydfil','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('437','CF47','305100','206800','51.75139','-3.37492','Town','Merthyr Tydfil','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('438','CF48','305500','205600','51.74067','-3.3688','Town','Merthyr Tydfil','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('439','CF5','313800','176700','51.48219','-3.2415','Ely','Cardiff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('440','CF61','297100','168700','51.40748','-3.47962','Llantwit Major','The Vale of Glamorgan','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('441','CF62','309000','168100','51.40412','-3.30841','Barry','The Vale of Glamorgan','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('442','CF63','312700','168900','51.4119','-3.25542','Barry','The Vale of Glamorgan','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('443','CF64','317400','171200','51.43328','-3.18838','Penarth','The Vale of Glamorgan','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('444','CF71','299000','174700','51.46176','-3.45402','Cowbridge','The Vale of Glamorgan','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('445','CF72','303000','182200','51.52989','-3.39852','Llanharan','Rhondda Cynon Taff','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('446','CF81','314100','200900','51.6998','-3.24311','Bargoed','Caerphilly','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('447','CF82','314500','195500','51.65132','-3.236','Gelligaer','Caerphilly','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('448','CF83','315700','188200','51.58587','-3.2169','','Caerphilly','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('449','CH1','339400','367600','53.20173','-2.90732','Chester','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('450','CH2','342000','369200','53.2164','-2.86869','Upton','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('451','CH3','345100','363600','53.1664','-2.8213','Waverton','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('452','CH4','337300','363900','53.16823','-2.93803','Saltney','Flintshire','Wales','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('453','CH41','331500','389100','53.39402','-3.03022','Birkenhead','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('454','CH42','332100','386900','53.37433','-3.02073','Birkenhead','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('455','CH43','329600','387900','53.38299','-3.05853','Birkenhead','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('456','CH44','331100','391500','53.41554','-3.03676','Wallasey','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('457','CH45','330200','392900','53.42801','-3.05061','Wallasey','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('458','CH46','326200','390200','53.40319','-3.11018','Birkenhead','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('459','CH47','322300','389500','53.39634','-3.16866','Hoylake','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('460','CH48','322200','386700','53.37116','-3.16947','Hoylake','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('461','CH49','326700','387700','53.38079','-3.10208','Birkenhead','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('462','CH5','330500','368000','53.20424','-3.04064','Shotton','Flintshire','Wales','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('463','CH6','323600','373200','53.25003','-3.14518','Flint','Flintshire','Wales','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('464','CH60','327100','381600','53.32602','-3.09466','Heswall','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('465','CH61','326700','384000','53.34754','-3.10122','Heswall','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('466','CH62','334700','382400','53.33421','-2.98072','Birkenhead','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('467','CH63','332700','383600','53.34474','-3.01101','Birkenhead','Wirral','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('468','CH64','330200','377300','53.28779','-3.04717','Ellesmere Port','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('469','CH65','339900','376000','53.27729','-2.90142','Ellesmere Port','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('470','CH66','337700','376000','53.27704','-2.93442','Ellesmere Port','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('471','CH7','324300','364200','53.16924','-3.13256','Mold','Flintshire','Wales','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('472','CH8','317300','376800','53.28144','-3.24053','Holywell','Flintshire','Wales','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('473','CM0','596200','199800','51.66221','0.83719','Southminster','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('474','CM1','569600','208000','51.74454','0.45694','Chelmsford','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('475','CM11','569300','194500','51.62335','0.44605','','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('476','CM12','567200','194900','51.62757','0.41593','Billericay','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('477','CM13','561900','193400','51.61564','0.33872','Brentwood','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('478','CM14','558700','193600','51.61835','0.29263','Brentwood','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('479','CM15','559500','196400','51.64328','0.30545','Brentwood','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('480','CM16','546600','202300','51.69981','0.12161','Epping','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('481','CM17','548000','210200','51.77043','0.14522','Harlow','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('482','CM18','545400','208500','51.75584','0.10685','Harlow','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('483','CM19','543200','208900','51.76','0.07515','Harlow','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('484','CM2','571800','205500','51.72141','0.48754','Great Baddow','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('485','CM20','545200','210600','51.77476','0.10483','Harlow','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('486','CM21','548000','214800','51.81177','0.14718','Sawbridgeworth','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('487','CM22','553000','220500','51.86164','0.22218','Great Hallingbury','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('488','CM23','548700','221500','51.87178','0.16021','Bishops Stortford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('489','CM24','551800','224600','51.8988','0.20657','Stansted Mountfitchet','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('490','CM3','578500','205500','51.71932','0.58445','Danbury','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('491','CM4','565400','200000','51.67392','0.39235','Ingatestone','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('492','CM5','555300','204900','51.72083','0.24857','Ongar','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('493','CM6','562900','222500','51.8768','0.36678','Great Dunmow','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('494','CM7','574600','225200','51.89752','0.53797','Braintree','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('495','CM77','574000','221200','51.86224','0.52554','Braintree','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('496','CM8','581900','215200','51.80536','0.6387','Witham','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('497','CM9','586500','208200','51.74097','0.70159','Heybridge','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('498','CO1','600200','225200','51.88891','0.9096','Colchester','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('499','CO10','586700','243400','52.05706','0.72355','Sudbury','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('500','CO11','611600','231500','51.94126','1.0789','Mistley','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('501','CO12','623700','230900','51.93115','1.25427','Harwich','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('502','CO13','623100','220500','51.83802','1.23884','Frinton and Walton','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('503','CO14','625100','221900','51.84979','1.26873','Frinton and Walton','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('504','CO15','617600','215600','51.7962','1.15605','Clacton-on-Sea','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('505','CO16','615400','218200','51.82039','1.1258','Little Clacton','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('506','CO2','599300','223000','51.86947','0.89527','Colchester','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('507','CO3','597000','224600','51.88466','0.86281','Colchester','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('508','CO4','601100','227200','51.90654','0.92383','Colchester','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('509','CO5','594500','216700','51.81459','0.82209','Layer Breton','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('510','CO6','591800','228800','51.92419','0.78968','Fordham','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('511','CO7','606800','224900','51.8838','1.0052','Elmstead','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('512','CO8','590100','234200','51.97328','0.76797','Bures Hamlet','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('513','CO9','579300','233300','51.96878','0.61043','Sible Hedingham','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('514','CR0','534000','165500','51.37223','-0.07463','Croydon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('515','CR2','533700','163000','51.34983','-0.07988','Croydon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('516','CR3','533900','156000','51.28687','-0.07964','Whyteleafe','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('517','CR4','528100','168900','51.40415','-0.15813','Merton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('518','CR5','529700','158700','51.31211','-0.13886','Croydon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('519','CR6','535800','158400','51.30799','-0.05149','Whyteleafe','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('520','CR7','532000','168000','51.39517','-0.10242','Croydon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('521','CR8','531600','161400','51.33594','-0.11061','Croydon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('522','CR9','534000','165500','51.37223','-0.07463','Croydon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('523','CT1','615300','157700','51.27719','1.08733','Canterbury','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('524','CT10','638800','168200','51.36208','1.43073','Broadstairs','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('525','CT11','637800','165200','51.33557','1.41438','Margate','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('526','CT12','634900','165800','51.34216','1.37322','Manston','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('527','CT13','632300','157300','51.26692','1.33042','Sandwich','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('528','CT14','636500','151800','51.21582','1.38689','Dover','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('529','CT15','629500','146500','51.17109','1.28343','Whitfield','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('530','CT16','631000','143100','51.13996','1.30267','Dover','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('531','CT17','630600','141800','51.12845','1.29613','Dover','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('532','CT18','620500','139800','51.11447','1.15078','Hawkinge','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('533','CT19','622000','136900','51.08785','1.1704','Folkestone','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('534','CT2','614900','159400','51.29261','1.08262','Canterbury','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('535','CT20','621700','135900','51.07899','1.16551','Folkestone','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('536','CT21','615600','134900','51.07233','1.07795','Hythe','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('537','CT3','624000','158100','51.27743','1.21213','Wingham','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('538','CT4','614200','151800','51.22462','1.06805','Lower Hardres','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('539','CT5','611400','166000','51.35318','1.03641','Canterbury','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('540','CT6','617900','167500','51.3642','1.13054','Canterbury','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('541','CT7','629700','168800','51.37122','1.30062','Birchington','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('542','CT8','632500','169900','51.37996','1.3415','Margate','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('543','CT9','635900','170400','51.38304','1.3906','Margate','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('544','CV1','433600','279200','52.40939','-1.506','','Coventry','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('545','CV10','433900','292100','52.52535','-1.50028','Nuneaton','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('546','CV11','437100','291400','52.51885','-1.45318','Nuneaton','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('547','CV12','435800','286400','52.47399','-1.47288','Bedworth','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('548','CV13','439700','301800','52.61217','-1.41362','Market Bosworth','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('549','CV2','436400','280700','52.4227','-1.46467','','Coventry','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('550','CV21','449400','274700','52.36774','-1.27438','Rugby','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('551','CV22','448600','273300','52.35522','-1.28633','Rugby','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('552','CV23','447100','274000','52.36165','-1.30826','Dunchurch','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('553','CV3','435300','277400','52.3931','-1.48119','','Coventry','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('554','CV31','432500','264600','52.27819','-1.52358','Leamington Spa','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('555','CV32','432000','266600','52.2962','-1.53072','Leamington Spa','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('556','CV33','435200','262300','52.25735','-1.48424','Radford Semele','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('557','CV34','428700','265100','52.2829','-1.57924','Warwick','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('558','CV35','427700','259100','52.229','-1.5944','Wasperton','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('559','CV36','425700','241100','52.06726','-1.62504','Shipston-on-Stour','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('560','CV37','419600','254200','52.1853','-1.71328','Stratford-Upon-Avon','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('561','CV4','429600','277900','52.39794','-1.56492','','Coventry','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('562','CV47','442000','259700','52.23349','-1.38494','Ladbroke','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('563','CV5','430600','279500','52.41227','-1.55008','','Coventry','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('564','CV6','433500','281700','52.43188','-1.50722','','Coventry','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('565','CV7','429700','283000','52.44378','-1.563','Hawkes End','Coventry','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('566','CV8','431100','272700','52.3511','-1.54336','Kenilworth','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('567','CV9','429900','298700','52.58493','-1.55864','Atherstone','Warwickshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('568','CW1','370900','356300','53.10281','-2.43469','Crewe','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('569','CW10','370200','365900','53.18907','-2.44604','Middlewich','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('570','CW11','375600','360700','53.1426','-2.36482','Sandbach','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('571','CW12','385900','363100','53.16455','-2.21093','Congleton','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('572','CW2','370100','353900','53.08119','-2.44642','Crewe','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('573','CW3','372800','344800','52.99952','-2.40534','Bridgemere','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('574','CW4','376800','367800','53.20648','-2.34739','Holmes Chapel','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('575','CW5','365100','351800','53.062','-2.52084','Nantwich','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('576','CW6','355500','363000','53.16197','-2.66565','Tarporley','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('577','CW7','364800','366100','53.19054','-2.52688','Winsford','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('578','CW8','362400','373100','53.2533','-2.56363','Weaverham','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('579','CW9','366600','373700','53.25897','-2.50074','Northwich','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('580','DA1','553500','174300','51.44637','0.20915','Dartford','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('581','DA10','560400','174300','51.44445','0.30837','Swanscombe','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('582','DA11','563600','173300','51.43455','0.35392','Gravesend','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('583','DA12','566000','172600','51.42757','0.38809','Gravesend','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('584','DA13','563900','167500','51.38235','0.35555','Meopham Station','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('585','DA14','546900','171700','51.42475','0.11316','Bexley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('586','DA15','545900','173400','51.44029','0.09948','Bexley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('587','DA16','546500','176100','51.4644','0.10923','Bexley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('588','DA17','549200','178700','51.48706','0.14917','Crayford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('589','DA18','548800','179200','51.49165','0.14363','Crayford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('590','DA2','555300','172700','51.4315','0.23433','Darenth','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('591','DA3','560700','167600','51.38417','0.30965','Hartley','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('592','DA4','555300','168200','51.39106','0.23236','Horton Kirby','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('593','DA5','549200','173500','51.44033','0.14698','Bexley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('594','DA6','548700','175100','51.45484','0.14046','Bexley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('595','DA7','549100','176300','51.46552','0.14672','Crayford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('596','DA8','551200','177500','51.47574','0.17745','Crayford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('597','DA9','558400','174600','51.44771','0.27975','Stone','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('598','DD1','339800','730300','56.4611','-2.97702','Dundee','Dundee City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('599','DD10','373900','761800','56.74724','-2.4268','','Aberdeenshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('600','DD11','363300','742500','56.57312','-2.59738','Kirkton','Angus','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('601','DD2','336700','731300','56.46968','-3.02756','Dundee','Dundee City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('602','DD3','339100','732700','56.48257','-2.98894','Dundee','Dundee City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('603','DD4','342400','732600','56.48209','-2.93534','Dundee','Dundee City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('604','DD5','346900','732100','56.47812','-2.86217','Dundee','Dundee City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('605','DD6','342900','727600','56.43723','-2.92612','','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('606','DD7','355800','734800','56.5033','-2.71814','Carnoustie','Angus','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('607','DD8','343500','752000','56.6565','-2.92171','','Angus','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('608','DD9','359200','762000','56.74798','-2.6672','','Angus','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('609','DE1','435300','336000','52.91994','-1.47492','','Derby','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('610','DE11','430100','319700','52.77372','-1.55377','Swadlincote','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('611','DE12','430200','314300','52.72516','-1.55279','Overseal','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('612','DE13','421000','323400','52.80741','-1.68844','Branston','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('613','DE14','424300','323100','52.80457','-1.6395','Burton upon Trent','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('614','DE15','426400','322500','52.79908','-1.6084','Burton upon Trent','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('615','DE21','438200','337500','52.93322','-1.43161','','Derby','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('616','DE22','433900','337500','52.93351','-1.49559','','Derby','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('617','DE23','434000','333900','52.90114','-1.49448','','Derby','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('618','DE24','436900','332700','52.89016','-1.4515','','Derby','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('619','DE3','430900','334700','52.90852','-1.54049','Mickleover','Derby','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('620','DE4','429200','359000','53.12707','-1.56357','Matlock Bath','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('621','DE45','421600','368700','53.21464','-1.6765','Bakewell','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('622','DE5','440100','349900','53.04456','-1.4018','Ripley','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('623','DE55','442100','356200','53.10104','-1.37114','Alfreton','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('624','DE56','435300','347300','53.02152','-1.47369','Belper','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('625','DE6','419000','344100','52.99358','-1.7169','Osmaston','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('626','DE65','426300','330000','52.86651','-1.60927','Hilton','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('627','DE7','445600','341900','52.9722','-1.32089','Ilkeston','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('628','DE72','443100','333100','52.8933','-1.35929','Draycott','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('629','DE73','438000','327900','52.84694','-1.43571','Swarkestone','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('630','DE74','445200','327600','52.84368','-1.32884','Lockington','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('631','DE75','443400','346400','53.01284','-1.35305','Heanor','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('632','DG1','299100','576600','55.07353','-3.58045','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('633','DG10','308800','603800','55.31977','-3.43735','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('634','DG11','314800','580700','55.11331','-3.33584','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('635','DG12','320000','566800','54.98928','-3.25044','Annan','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('636','DG13','334500','587000','55.17291','-3.02849','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('637','DG14','337100','576700','55.08069','-2.98539','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('638','DG16','331700','567500','54.99731','-3.06777','Gretna','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('639','DG2','294200','575700','55.06442','-3.65683','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('640','DG3','285600','595100','55.23678','-3.79927','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('641','DG4','276300','610800','55.37555','-3.95236','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('642','DG5','284000','560100','54.92201','-3.81016','Dalbeattie','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('643','DG6','268000','551100','54.83721','-4.05555','Kirkcudbright','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('644','DG7','271200','565500','54.96738','-4.01219','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('645','DG8','238600','556000','54.87259','-4.51567','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('646','DG9','206200','557900','54.87815','-5.02123','','Dumfries and Galloway','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('647','DH1','427900','543000','54.78103','-1.56616','Durham','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('648','DH2','425900','551700','54.85933','-1.59648','Chester-le-Street','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('649','DH3','427800','553100','54.87181','-1.56675','North Lodge','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('650','DH4','432700','551200','54.85444','-1.4906','Houghton-le-Spring','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('651','DH5','435100','547800','54.82372','-1.45363','Hetton','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('652','DH6','434500','539900','54.75276','-1.46391','Shadforth','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('653','DH7','421600','543900','54.78943','-1.66406','Esh','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('654','DH8','410000','551200','54.85541','-1.84422','Burnhope','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('655','DH9','418800','552600','54.86773','-1.70704','Stanley','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('656','DL1','430000','515100','54.53016','-1.53637','','Darlington','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('657','DL10','420100','502100','54.41381','-1.69025','Skeeby','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('658','DL11','408100','504800','54.43841','-1.8751','Marske','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('659','DL12','401000','519700','54.57239','-1.98453','Cotherstone','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('660','DL13','403000','535700','54.71619','-1.95343','Stanhope','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('661','DL14','420000','528600','54.65199','-1.68999','Lcp Stanhope and Wolsingham Parishes And','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('662','DL15','417500','535000','54.7096','-1.72836','Lcp Stanhope and Wolsingham Parishes And','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('663','DL16','425500','533800','54.69848','-1.60429','Spennymoor','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('664','DL17','429600','531900','54.68118','-1.54086','Ferryhill','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('665','DL2','425800','514900','54.5286','-1.6013','Halnaby Ave','Darlington','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('666','DL3','427800','515300','54.53209','-1.57035','','Darlington','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('667','DL4','423000','526200','54.63029','-1.64368','Shildon','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('668','DL5','427400','524800','54.61749','-1.57565','Great Aycliffe','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('669','DL6','439700','497400','54.37042','-1.38885','Winton','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('670','DL7','433500','493700','54.33761','-1.48471','Yafforth','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('671','DL8','414000','488600','54.29267','-1.78489','Spennithorne','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('672','DL9','418900','497800','54.37521','-1.70902','Colburn','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('673','DN1','457700','403200','53.52205','-1.1296','','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('674','DN10','470200','392800','53.42705','-0.94339','Everton','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('675','DN11','460900','395400','53.45158','-1.08284','Tickhill','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('676','DN12','451700','398800','53.48313','-1.22082','Conisbrough','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('677','DN14','470200','424000','53.70747','-0.93638','Airmyn','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('678','DN15','489300','414000','53.61469','-0.64994','','North Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('679','DN16','490100','408800','53.56782','-0.63935','','North Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('680','DN17','486000','409200','53.5721','-0.70114','Burringham','North Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('681','DN18','502600','421600','53.68055','-0.44643','Barton-Upon-Humber','North Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('682','DN19','508400','422100','53.68387','-0.35847','Barrow-Upon-Humber','North Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('683','DN2','459500','404400','53.53264','-1.10222','','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('684','DN20','499000','407800','53.55723','-0.50531','Broughton','North Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('685','DN21','486300','392200','53.41927','-0.70129','Corringham','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('686','DN22','471500','381300','53.32352','-0.92643','Clumber and Hardwick','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('687','DN3','462400','405900','53.54578','-1.05817','Edenthorpe','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('688','DN31','526700','409900','53.57014','-0.08648','','North East Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('689','DN32','527900','409100','53.56266','-0.06869','','North East Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('690','DN33','526100','406500','53.53974','-0.09691','','North East Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('691','DN34','525100','408400','53.55705','-0.11123','','North East Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('692','DN35','530100','408300','53.55494','-0.03583','Cleethorpes','North East Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('693','DN36','530200','403400','53.51089','-0.03636','Tetney','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('694','DN37','523600','406500','53.54033','-0.13461','Bradley','North East Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('695','DN38','506500','408400','53.56115','-0.39192','Bigby','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('696','DN39','510200','414700','53.617','-0.33385','Ulceby','North Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('697','DN4','458300','401400','53.50581','-1.12088','','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('698','DN40','517500','415300','53.6208','-0.22331','Immingham','North East Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('699','DN41','519500','411200','53.58351','-0.19466','Stallingborough','North East Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('700','DN5','454900','404900','53.53763','-1.17153','Brodsworth','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('701','DN6','454500','411400','53.5961','-1.17643','Owston','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('702','DN7','465200','409900','53.58139','-1.01508','Hatfield','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('703','DN8','469100','413600','53.61415','-0.95535','Thorne','Doncaster','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('704','DN9','473400','401700','53.50661','-0.89316','Haxey','North Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('705','DT1','368900','90300','50.71093','-2.44052','Dorchester','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('706','DT10','376600','115400','50.93702','-2.33306','Sturminster Newton','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('707','DT11','387300','106900','50.86091','-2.18047','Bryanston','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('708','DT2','368000','94600','50.74955','-2.45365','Charminster','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('709','DT3','367000','82500','50.64067','-2.46674','Weymouth','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('710','DT4','367200','79000','50.60921','-2.4636','Weymouth','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('711','DT5','368800','72100','50.54724','-2.44041','Portland','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('712','DT6','345300','93600','50.73886','-2.77528','Allington','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('713','DT7','333200','92600','50.7286','-2.94657','Lyme Regis','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('714','DT8','346600','102200','50.81632','-2.7581','Beaminster','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('715','DT9','363800','115900','50.94086','-2.51529','Castleton','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('716','DY1','393500','291000','52.51648','-2.0958','','Dudley','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('717','DY10','384700','276500','52.38594','-2.22483','Kidderminster','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('718','DY11','382300','276400','52.38496','-2.26009','Kidderminster','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('719','DY12','377600','276500','52.38569','-2.32916','Upper Arley','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('720','DY13','380900','271000','52.33637','-2.28035','Stourport-on-Severn','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('721','DY14','368500','275900','52.37985','-2.46282','Cleobury Mortimer','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('722','DY2','394500','288800','52.49671','-2.08102','','Dudley','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('723','DY3','391300','292500','52.52994','-2.12826','','Dudley','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('724','DY4','396400','292800','52.53269','-2.05308','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('725','DY5','391700','287000','52.48049','-2.12223','','Dudley','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('726','DY6','388900','289000','52.49842','-2.16353','','Dudley','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('727','DY7','384800','285400','52.46596','-2.22376','Kinver','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('728','DY8','389500','284700','52.45978','-2.15455','','Dudley','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('729','DY9','391700','282000','52.43554','-2.1221','','Dudley','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('730','E1','534700','181700','51.51766','-0.05841','Poplar','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('731','E10','537800','187400','51.56814','-0.01153','Walthamstow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('732','E11','539600','187400','51.56769','0.01443','Walthamstow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('733','E12','542400','185500','51.54992','0.05404','Stratford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('734','E13','540600','182900','51.527','0.02705','East Ham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('735','E14','537500','180500','51.5062','-0.01855','Poplar','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('736','E15','538900','184200','51.53911','0.00307','Stratford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('737','E16','540600','181100','51.51083','0.02633','East Ham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('738','E17','537300','189400','51.58623','-0.01796','Walthamstow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('739','E18','540400','190100','51.59176','0.02705','Ilford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('740','E1W','534800','180600','51.50775','-0.05739','Poplar','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('741','E2','534500','183000','51.52939','-0.0608','Poplar','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('742','E20','538350','184500','51.54593','0.09248','Queen Elizabeth Olympic Park','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('743','E3','537000','182900','51.52789','-0.02482','Poplar','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('744','E4','538200','193400','51.62196','-0.00339','Walthamstow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('745','E5','535000','186300','51.55893','-0.05233','Hackney','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('746','E6','542600','182800','51.5256','0.05583','East Ham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('747','E7','540600','185100','51.54678','0.02793','Stratford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('748','E8','534300','184400','51.54202','-0.06315','Hackney','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('749','E9','535700','184500','51.54258','-0.04293','Hackney','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('750','EC1','531700','182200','51.52286','-0.10144','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('751','EC1A','531600','181900','51.52019','-0.103','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('752','EC1M','531700','182000','51.52106','-0.10152','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('753','EC1N','531300','181900','51.52026','-0.10732','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('754','EC1R','531300','182400','51.52475','-0.10713','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('755','EC1V','532000','182500','51.52549','-0.09701','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('756','EC1Y','532300','182200','51.52272','-0.0928','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('757','EC2','532600','181900','51.51995','-0.08859','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('758','EC2A','532800','182200','51.5226','-0.0856','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('759','EC2M','532800','181700','51.51811','-0.08578','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('760','EC2N','532800','181500','51.51631','-0.08586','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('761','EC2P','532378','181476','51.5167','-0.09356','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('762','EC2R','532400','181500','51.5164','-0.09162','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('763','EC2V','532300','181400','51.51553','-0.0931','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('764','EC2Y','532100','181900','51.52007','-0.09579','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('765','EC3','533000','181200','51.51357','-0.08309','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('766','EC3A','533100','181400','51.51534','-0.08158','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('767','EC3M','533000','181100','51.51267','-0.08313','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('768','EC3N','533300','181100','51.5126','-0.07881','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('769','EC3P','531700','181900','51.52016','-0.10156','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('770','EC3R','532900','181000','51.51179','-0.08461','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('771','EC3V','532800','181200','51.51361','-0.08597','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('772','EC4','531800','181300','51.51475','-0.10034','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('773','EC4A','531300','181400','51.51576','-0.10751','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('774','EC4M','531800','181300','51.51475','-0.10034','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('775','EC4N','532300','181300','51.51463','-0.09314','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('776','EC4R','532400','181000','51.51191','-0.09181','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('777','EC4V','531900','181100','51.51293','-0.09897','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('778','EC4Y','531300','181200','51.51397','-0.10758','','City of London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('779','EH1','325800','673900','55.95243','-3.1884','Old Town','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('780','EH10','324400','670400','55.92077','-3.20984','Morningside, Braid Hill and Swanston','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('781','EH11','322000','671900','55.93387','-3.24867','Gorgie, Stenhouse and Sighthill','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('782','EH12','320600','672900','55.94262','-3.27137','Murrayfield, Corstorphine and Gogar','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('783','EH13','322400','669000','55.90788','-3.24144','Colinton and Oxgangs','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('784','EH14','319800','669200','55.90925','-3.28308','Juniper Green, Currie and Balerno','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('785','EH15','330600','673200','55.94686','-3.11136','Portobello','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('786','EH16','327900','670500','55.92221','-3.15387','Liberton and Craigmillar','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('787','EH17','328600','668800','55.90704','-3.14222','Moredun','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('788','EH18','329800','665400','55.87667','-3.12215','Bonnyrigg and Lasswade','Midlothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('789','EH19','330900','665000','55.87324','-3.10446','Bonnyrigg and Lasswade','Midlothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('790','EH2','325400','674100','55.95417','-3.19486','New Town','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('791','EH20','327700','665700','55.87905','-3.15579','Loanhead','Midlothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('792','EH21','334700','672200','55.93845','-3.04548','Musselburgh','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('793','EH22','333700','666200','55.88441','-3.06001','Dalkeith','Midlothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('794','EH23','334200','661200','55.83956','-3.05081','Arniston','Midlothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('795','EH24','329100','662500','55.85051','-3.13257','Rosewell','Midlothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('796','EH25','326500','663400','55.85821','-3.17434','Roslin','Midlothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('797','EH26','323400','660600','55.83257','-3.22307','Penicuik','Midlothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('798','EH27','311000','667300','55.89063','-3.42319','Kirknewton','West Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('799','EH28','313400','671700','55.9306','-3.38624','Newbridge and Ratho','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('800','EH29','312700','674600','55.95652','-3.39838','Kirkliston','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('801','EH3','325100','674100','55.95412','-3.19967','Inverleith, New Town and Fountainbridge','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('802','EH30','313700','677700','55.98455','-3.38336','Queensferry','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('803','EH31','348500','682900','56.03627','-2.82661','Gullane','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('804','EH32','340800','675400','55.96799','-2.94853','Cockenzie and Port Seton','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('805','EH33','341000','672500','55.94196','-2.94469','Tranent','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('806','EH34','345000','668800','55.90919','-2.8799','Pencaitland','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('807','EH35','341100','669000','55.91053','-2.94233','Ormiston','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('808','EH36','346700','662900','55.85637','-2.85155','Humbie','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('809','EH37','340000','663600','55.86188','-2.95873','Pathhead','Midlothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('810','EH38','339800','655200','55.78638','-2.96006','Heriot','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('811','EH39','354500','684100','56.04766','-2.73052','North Berwick','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('812','EH4','321500','675100','55.96253','-3.25761','Davidson\'s Mains, Barnton and Cramond','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('813','EH40','359100','677700','55.99057','-2.6557','East Linton','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('814','EH41','351600','673100','55.94854','-2.7751','Haddington and Gifford','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('815','EH42','367300','678000','55.99389','-2.52428','Dunbar','East Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('816','EH43','336400','637200','55.62422','-3.0101','Walkerburn','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('817','EH44','332900','636800','55.62015','-3.06558','Innerleithen','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('818','EH45','325000','640800','55.65494','-3.19209','Peebles','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('819','EH46','315300','650100','55.73689','-3.3491','West Linton and Dolphinton','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('820','EH47','295900','664200','55.85976','-3.66336','Blackburn, Whitburn and Fauldhouse','West Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('821','EH48','296000','668800','55.9011','-3.66353','Bathgate','West Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('822','EH49','300300','677100','55.97656','-3.59785','Linlithgow','West Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('823','EH5','324100','676400','55.97463','-3.21633','Granton and Trinity','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('824','EH51','300000','681000','56.01153','-3.6041','Grangepans','Falkirk','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('825','EH52','307400','672600','55.93756','-3.48256','Broxburn','West Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('826','EH53','307700','667700','55.8936','-3.47608','Livingston','West Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('827','EH54','304700','667600','55.89212','-3.524','Livingston','West Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('828','EH55','301600','662700','55.84748','-3.57178','West Calder','West Lothian','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('829','EH6','326700','676000','55.97144','-3.17456','Newhaven and Leith','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('830','EH7','327300','674800','55.96075','-3.16463','Bonnington, Lochend and Craigentinny','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('831','EH8','327400','673500','55.94909','-3.16268','South Bridge, Holyrood and Willowbrae','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('832','EH9','326000','671800','55.9336','-3.18463','Marchmont and Blackford','City of Edinburgh','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('833','EN1','533700','196800','51.6536','-0.06707','Enfield','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('834','EN10','536700','206500','51.74005','-0.01992','Broxbourne','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('835','EN11','537500','209300','51.76502','-0.00723','Hoddesdon','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('836','EN2','532000','197300','51.6585','-0.09144','Enfield','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('837','EN3','535700','197400','51.65852','-0.03794','Enfield','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('838','EN4','527300','196000','51.6479','-0.15983','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('839','EN5','524900','196100','51.64934','-0.19447','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('840','EN6','526000','201700','51.69942','-0.17656','Potters Bar','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('841','EN7','533600','203100','51.71025','-0.0661','Broxbourne','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('842','EN8','536000','201800','51.69799','-0.03189','Broxbourne','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('843','EN9','539200','201500','51.69451','0.01427','Waltham Abbey','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('844','EX1','293800','92900','50.72543','-3.50479','Exeter','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('845','EX10','312100','88900','50.69252','-3.24461','Sidmouth','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('846','EX11','309200','94900','50.74603','-3.28714','Ottery St Mary','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('847','EX12','323700','90200','50.70585','-3.08066','Seaton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('848','EX13','329000','99100','50.78655','-3.00733','Axminster','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('849','EX14','316200','102200','50.81272','-3.1896','Honiton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('850','EX15','305800','109500','50.87675','-3.33907','Kentisbeare','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('851','EX16','295200','114800','50.92258','-3.49122','Tiverton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('852','EX17','280100','102800','50.81176','-3.70205','Sandford','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('853','EX18','267300','113100','50.90155','-3.88739','Chawleigh','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('854','EX19','259000','110600','50.87712','-4.0044','Dowland','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('855','EX2','292900','91200','50.70998','-3.51705','Exeter','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('856','EX20','257600','96500','50.75004','-4.01882','Okehampton Hamlets','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('857','EX21','244400','103000','50.80507','-4.20857','Black Torrington','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('858','EX22','233300','105900','50.82804','-4.3673','Holsworthy Hamlets','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('859','EX23','221600','105800','50.82366','-4.53323','Bude','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('860','EX24','323200','93800','50.73816','-3.08849','Colyton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('861','EX3','297000','88500','50.68645','-3.45824','Exeter','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('862','EX31','255500','133900','51.08566','-4.06339','Barnstaple','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('863','EX32','258600','132200','51.07115','-4.01849','Barnstaple','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('864','EX33','248200','137200','51.11343','-4.16894','Braunton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('865','EX34','253100','146500','51.19829','-4.10278','Ilfracombe','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('866','EX35','272400','148800','51.2236','-3.82749','Lynton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('867','EX36','274300','125700','51.01638','-3.79224','Bishops Nympton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('868','EX37','263000','121800','50.97875','-3.95179','High Bickington','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('869','EX38','248900','118300','50.94376','-4.15107','Little Torrington','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('870','EX39','242500','126300','51.01394','-4.24557','Abbotsham','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('871','EX4','292300','93500','50.73055','-3.52621','Exeter','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('872','EX5','298500','96300','50.75684','-3.43916','Broad Clyst','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('873','EX6','287200','87700','50.67744','-3.59668','Doddiscombsleigh','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('874','EX7','295800','78000','50.59183','-3.47227','Dawlish','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('875','EX8','300900','82100','50.62958','-3.40133','Exmouth','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('876','EX9','306500','83000','50.6386','-3.32239','Budleigh Salterton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('877','FK1','288100','678400','55.98555','-3.79381','','Falkirk','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('878','FK10','289300','692800','56.11516','-3.78053','Alloa','Clackmannanshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('879','FK11','285100','696800','56.15009','-3.84977','Menstrie','Clackmannanshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('880','FK12','288200','697000','56.15263','-3.79998','Alva','Clackmannanshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('881','FK13','291900','696700','56.15078','-3.74032','Tillicoultry','Clackmannanshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('882','FK14','296900','698200','56.16536','-3.66044','','Clackmannanshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('883','FK15','279100','702800','56.20249','-3.94903','','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('884','FK16','272200','701700','56.19081','-4.05966','Doune','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('885','FK17','262500','707500','56.24019','-4.21887','Callander','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('886','FK18','256100','717100','56.32448','-4.32728','Strathyre','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('887','FK19','257100','722200','56.37057','-4.3139','','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('888','FK2','290600','680500','56.00499','-3.75461','Hope St','Falkirk','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('889','FK20','237700','726900','56.4065','-4.63059','','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('890','FK21','257100','732800','56.46574','-4.31969','Killin','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('891','FK3','292800','681100','56.01087','-3.71958','Grangemouth','Falkirk','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('892','FK4','281100','679900','55.99734','-3.90662','Dennyloanhead','Falkirk','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('893','FK5','286700','682900','56.02564','-3.81814','','Falkirk','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('894','FK6','280700','682600','56.02149','-3.91423','Stoneywood','Falkirk','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('895','FK7','280800','691000','56.09695','-3.91636','','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('896','FK8','272600','695000','56.13075','-4.05001','','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('897','FK9','279500','696100','56.14242','-3.93955','Bridge of Allan','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('898','FY1','331200','436000','53.81551','-3.04509','','Blackpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('899','FY2','331700','439300','53.84524','-3.03823','','Blackpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('900','FY3','332800','436600','53.82111','-3.02092','','Blackpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('901','FY4','332300','433300','53.79139','-3.02779','','Blackpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('902','FY5','332900','442500','53.87415','-3.02069','Hardhorn and Thornton','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('903','FY6','335500','441800','53.86819','-2.981','Hardhorn and Thornton','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('904','FY7','332600','447200','53.91635','-3.02629','Hardhorn and Thornton','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('905','FY8','334000','428700','53.75026','-3.001','Lytham Saint Annes','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('906','G1','259400','665300','55.86038','-4.24671','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('907','G11','255400','666900','55.87356','-4.31142','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('908','G12','256100','667600','55.88006','-4.30061','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('909','G13','253300','669200','55.89358','-4.3462','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('910','G14','253100','667800','55.88095','-4.34864','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('911','G15','252200','671000','55.9094','-4.36476','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('912','G2','258900','665700','55.86382','-4.2549','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('913','G20','257300','668200','55.8858','-4.28176','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('914','G21','261100','667500','55.88063','-4.22069','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('915','G22','259300','668600','55.88998','-4.25002','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('916','G23','257200','670000','55.90193','-4.28431','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('917','G3','257800','666000','55.86619','-4.27262','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('918','G31','261800','664900','55.85748','-4.20819','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('919','G32','264600','663800','55.8484','-4.16293','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('920','G33','264500','666600','55.87351','-4.16593','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('921','G34','267900','665900','55.86817','-4.11128','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('922','G4','259100','666200','55.86837','-4.25196','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('923','G40','260900','663900','55.84824','-4.22204','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('924','G41','257100','662900','55.83815','-4.28216','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('925','G42','258700','662200','55.83234','-4.25627','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('926','G43','256600','660700','55.81825','-4.28898','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('927','G44','258700','660200','55.81438','-4.25523','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('928','G45','260200','659100','55.80494','-4.23074','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('929','G46','255500','659200','55.80446','-4.30573','Thornliebank','East Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('930','G5','259000','663900','55.84769','-4.25237','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('931','G51','255200','665100','55.85734','-4.31365','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('932','G52','253000','664100','55.8477','-4.34823','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('933','G53','252700','661200','55.82157','-4.35145','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('934','G60','246700','672600','55.92205','-4.45358','Clydebank','West Dunbartonshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('935','G61','254400','672000','55.91905','-4.33014','Milngavie','East Dunbartonshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('936','G62','255100','674600','55.94261','-4.32034','Milngavie','East Dunbartonshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('937','G63','252700','685800','56.04243','-4.36487','Killearn','Stirling','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('938','G64','261500','670900','55.91127','-4.21604','Bishopbriggs','East Dunbartonshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('939','G65','271600','677500','55.97334','-4.0577','Kilsyth','North Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('940','G66','265500','674000','55.94024','-4.15364','Kirkintilloch','East Dunbartonshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('941','G67','276000','674500','55.94755','-3.98586','Cumbernauld','North Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('942','G68','274500','675200','55.95345','-4.01019','Balloch','North Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('943','G69','268500','666500','55.87372','-4.10199','Glasgow','Glasgow City','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('944','G71','270200','660700','55.8221','-4.07206','','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('945','G72','266600','658800','55.80406','-4.12856','','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('946','G73','261800','660700','55.81977','-4.20605','Cambuslang','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('947','G74','263700','655000','55.76912','-4.17289','East Kilbride','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('948','G76','257500','656200','55.77811','-4.27227','Thornliebank','East Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('949','G77','253900','655800','55.77345','-4.32941','Newton Mearns','East Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('950','G78','249000','658100','55.79259','-4.40873','','East Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('951','G81','249600','671500','55.91309','-4.4066','Clydebank','West Dunbartonshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('952','G82','239300','676200','55.95195','-4.57403','Dumbarton','West Dunbartonshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('953','G83','238900','682900','56.01196','-4.58444','Alexandria','West Dunbartonshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('954','G84','228400','683500','56.0137','-4.75306','Helensburgh','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('955','GL1','383500','218000','51.8599','-2.23962','Gloucester','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('956','GL10','380400','205000','51.7429','-2.28391','Stonehouse','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('957','GL11','375400','199000','51.68875','-2.35591','Dursley','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('958','GL12','373400','191900','51.62482','-2.3843','Kingswood','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('959','GL13','368300','199500','51.69289','-2.45867','Berkeley','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('960','GL14','367000','213300','51.81691','-2.47879','Littledean','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('961','GL15','362000','204400','51.73656','-2.55036','Lydney','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('962','GL16','357900','211000','51.79561','-2.61054','Coleford','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('963','GL17','364600','217600','51.85542','-2.51405','Drybrook','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('964','GL18','371500','227100','51.94124','-2.41464','Oxenhall','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('965','GL19','380300','227200','51.94252','-2.28662','Ashleworth','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('966','GL2','381600','216500','51.84635','-2.26714','Gloucester','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('967','GL20','391100','233900','52.00304','-2.12966','Ashchurch','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('968','GL3','387800','218500','51.86451','-2.17719','Hucclecote','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('969','GL4','385100','216000','51.84196','-2.2163','Gloucester','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('970','GL5','384900','204500','51.73855','-2.2187','Rodborough','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('971','GL50','394500','222400','51.89968','-2.07995','Cheltenham','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('972','GL51','392600','222300','51.89876','-2.10756','Cheltenham','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('973','GL52','396000','224200','51.91588','-2.05816','Prestbury','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('974','GL53','395400','220300','51.88081','-2.06684','Cheltenham','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('975','GL54','409400','222100','51.89693','-1.86338','Naunton','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('976','GL55','415900','240300','52.06043','-1.76806','Chipping Campden','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('977','GL56','420300','232300','51.98836','-1.70435','Moreton-in-Marsh','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('978','GL6','386800','204100','51.735','-2.19117','Thrupp','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('979','GL7','407100','201600','51.71263','-1.89723','Ampney St Mary','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('980','GL8','388200','193700','51.64151','-2.17054','Tetbury','Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('981','GL9','379400','184400','51.55763','-2.29718','Hawkesbury','South Gloucestershire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('982','GU1','500200','150300','51.24255','-0.56436','Guildford','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('983','GU10','484100','145000','51.1975','-0.79622','Farnham','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('984','GU11','486400','150700','51.24841','-0.76194','Aldershot','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('985','GU12','488600','151100','51.25167','-0.73032','Ash','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('986','GU13','481100','153500','51.27436','-0.83723','Fleet','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('987','GU14','486400','155600','51.29246','-0.76075','Farnborough','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('988','GU15','487800','160300','51.3345','-0.73952','Camberley','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('989','GU16','488600','157700','51.311','-0.72868','Camberley','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('990','GU17','484600','159700','51.32959','-0.78559','Blackwater and Hawley','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('991','GU18','492600','161900','51.34813','-0.67021','Windlesham','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('992','GU19','491200','163100','51.35914','-0.69','Windlesham','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('993','GU2','498300','150500','51.24468','-0.59152','Guildford','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('994','GU20','493500','164100','51.36776','-0.65671','Windlesham','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('995','GU21','499100','158900','51.32006','-0.57773','Woking','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('996','GU22','501100','158000','51.31162','-0.54929','Woking','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('997','GU23','504000','156400','51.29671','-0.50816','Ripley','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('998','GU24','495700','159900','51.32963','-0.62625','Bisley','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('999','GU25','499500','167900','51.4009','-0.56948','Virginia Water','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1000','GU26','487800','135600','51.11243','-0.74557','Haslemere','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1001','GU27','489800','132200','51.08155','-0.71785','Haslemere','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1002','GU28','496200','122200','50.99061','-0.62915','Tillington','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1003','GU29','488000','121300','50.98383','-0.74619','Midhurst','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1004','GU3','496100','150600','51.24596','-0.62301','Worplesdon','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1005','GU30','483900','131300','51.07435','-0.80228','Liphook','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1006','GU31','477000','122500','50.9962','-0.90263','Petersfield','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1007','GU32','472300','123800','51.00849','-0.96934','Stroud','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1008','GU33','477700','128400','51.04915','-0.89139','Liss','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1009','GU34','471100','138300','51.13902','-0.98359','Alton','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1010','GU35','480700','135900','51.11617','-0.84692','Lindford','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1011','GU4','501900','150400','51.24315','-0.53999','Guildford','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1012','GU46','481800','160500','51.3372','-0.82559','Yateley','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1013','GU47','484400','161700','51.34761','-0.78799','Sandhurst','Bracknell Forest','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1014','GU5','503700','145900','51.20237','-0.51551','Wonersh','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1015','GU51','480900','154500','51.28338','-0.83987','Fleet','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1016','GU52','481100','152400','51.26447','-0.83748','Fleet','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1017','GU6','506200','139100','51.14078','-0.48174','Cranleigh','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1018','GU7','497100','144300','51.18915','-0.61039','Godalming','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1019','GU8','495100','140000','51.15082','-0.64014','Witley','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1020','GU9','484300','147300','51.21815','-0.79282','Farnham','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1021','GY1','361100','-48888','49.45856','-2.53684','St Peter Port','Guernsey','Crown Dependencies','GG','Guernsey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1022','GY2','364319','-35553','49.57871','-2.49362','St Sampson','Guernsey','Crown Dependencies','GG','Guernsey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1023','GY3','366845','-41123','49.52875','-2.45821','St Sampson','Guernsey','Crown Dependencies','GG','Guernsey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1024','GY4','366845','-41123','49.52875','-2.45821','Carmel','Guernsey','Crown Dependencies','GG','Guernsey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1025','GY5','357920','-46192','49.4826','-2.58101','ALBecq','Guernsey','Crown Dependencies','GG','Guernsey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1026','GY6','366845','-41123','49.52875','-2.45821','L\'Islet','Guernsey','Crown Dependencies','GG','Guernsey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1027','GY7','366845','-41123','49.52875','-2.45821','Richmond','Guernsey','Crown Dependencies','GG','Guernsey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1028','GY8','366845','-41123','49.52875','-2.45821','Mouilpied','Guernsey','Crown Dependencies','GG','Guernsey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1029','GY9','379581','-36396','49.57183','-2.28244','nr Mouilpied','Guernsey','Crown Dependencies','GG','Guernsey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1030','HA0','517600','184900','51.55024','-0.3037','Brent','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1031','HA1','515300','188100','51.57948','-0.33581','Harrow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1032','HA2','513800','187400','51.57349','-0.35768','Harrow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1033','HA3','516400','189600','51.59274','-0.31945','Harrow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1034','HA4','510200','186900','51.56971','-0.40977','Hillingdon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1035','HA5','511900','189700','51.59455','-0.38436','Harrow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1036','HA6','509400','191400','51.61032','-0.41991','Hillingdon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1037','HA7','517200','191500','51.60965','-0.30727','Harrow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1038','HA8','519600','191700','51.61094','-0.27255','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1039','HA9','518800','185900','51.55898','-0.28606','Brent','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1040','HD1','414000','416700','53.64639','-1.78819','Huddersfield','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1041','HD2','414900','419100','53.66794','-1.77446','Huddersfield','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1042','HD3','411400','417400','53.65274','-1.8275','Huddersfield','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1043','HD4','413500','414500','53.62662','-1.79585','Huddersfield','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1044','HD5','416800','416800','53.6472','-1.74583','Huddersfield','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1045','HD6','414400','422800','53.70121','-1.78186','Halifax','Calderdale','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1046','HD7','408200','414200','53.62404','-1.87601','Huddersfield','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1047','HD8','421200','411700','53.6012','-1.6796','Kirkburton','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1048','HD9','413600','409300','53.57988','-1.79457','Holme','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1049','HG1','430600','456100','53.99983','-1.53313','Harrogate','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1050','HG2','431100','454700','53.98722','-1.52565','Harrogate','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1051','HG3','425100','459500','54.03069','-1.61676','Clint','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1052','HG4','428300','473500','54.15636','-1.5666','North Stainley','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1053','HG5','435600','457600','54.013','-1.45668','Knaresborough','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1054','HP1','504400','207400','51.75509','-0.48731','Hemel Hempstead','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1055','HP10','489900','190900','51.60928','-0.70159','Chepping Wycombe','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1056','HP11','486900','192500','51.62413','-0.74451','High Wycombe','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1057','HP12','484600','192600','51.62538','-0.77771','High Wycombe','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1058','HP13','487100','193500','51.63309','-0.74137','High Wycombe','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1059','HP14','481000','195100','51.64839','-0.82913','Bledlow-cum-Saunderton','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1060','HP15','489100','196100','51.65615','-0.71182','Hazlemere','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1061','HP16','488600','201200','51.70208','-0.71775','Great Missenden','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1062','HP17','478000','209200','51.77558','-0.86933','Dinton','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1063','HP18','470200','213300','51.81347','-0.98155','Ashendon','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1064','HP19','481000','214400','51.8219','-0.82464','Aylesbury','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1065','HP2','506800','208300','51.76273','-0.45227','Hemel Hempstead','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1066','HP20','482500','214100','51.81898','-0.80295','Aylesbury','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1067','HP21','482400','212700','51.80641','-0.80473','Aylesbury','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1068','HP22','485100','212700','51.80601','-0.76558','Weston Turville','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1069','HP23','492400','211600','51.79496','-0.66001','Tring','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1070','HP27','480800','203000','51.71944','-0.83019','Princes Risborough','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1071','HP3','505600','205400','51.73689','-0.47054','Hemel Hempstead','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1072','HP4','498900','208600','51.76688','-0.56663','Berkhamsted','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1073','HP5','496200','202500','51.71251','-0.60744','Chesham','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1074','HP6','496900','198700','51.67823','-0.59836','Amersham','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1075','HP7','496200','197200','51.66487','-0.6089','Amersham','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1076','HP8','498700','194800','51.64286','-0.57344','Chalfont St Giles','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1077','HP9','494300','191100','51.61035','-0.63801','Beaconsfield','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1078','HR1','354100','240900','52.06415','-2.66963','Hampton Bishop','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1079','HR2','346200','234900','52.0095','-2.78393','Allensmore','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1080','HR3','326400','244500','52.09353','-3.07446','Clifford','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1081','HR4','347500','243600','52.08784','-2.76632','Burghill','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1082','HR5','329800','255400','52.19196','-3.02708','Kington Rural','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1083','HR6','347400','259700','52.23258','-2.77028','Leominster','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1084','HR7','364400','254400','52.18629','-2.52079','Bromyard','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1085','HR8','369600','238600','52.04454','-2.44331','Ledbury','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1086','HR9','360000','223500','51.90816','-2.58153','Ross-on-Wye','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1087','HS1','142700','933300','58.21347','-6.38138','Stornoway','Eilean Siar','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1088','HS2','137900','937600','58.24916','-6.46768','','Eilean Siar','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1089','HS3','112300','898000','57.87876','-6.85387','','Eilean Siar','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1090','HS4','121900','896300','57.86961','-6.69056','','Eilean Siar','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1091','HS5','105300','889700','57.79992','-6.96123','Leverburgh','Eilean Siar','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1092','HS6','83500','869100','57.6008','-7.29943','','Eilean Siar','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1093','HS7','79800','852200','57.44703','-7.33888','','Eilean Siar','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1094','HS8','77500','828400','57.23253','-7.34593','','Eilean Siar','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1095','HS9','67600','800000','56.97148','-7.47153','','Eilean Siar','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1096','HU1','509800','428700','53.74288','-0.33494','Hull','City of Kingston-upon-Hull','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1097','HU10','502800','429500','53.75149','-0.44078','Cottingham','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1098','HU11','517200','438100','53.82572','-0.21921','Ellerby','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1099','HU12','523300','426900','53.72369','-0.13105','Burstwick','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1100','HU13','503200','426500','53.72446','-0.43572','Hessle','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1101','HU14','498900','426800','53.72799','-0.50078','North Ferriby','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1102','HU15','490900','428900','53.74831','-0.62139','Ellerker','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1103','HU16','504100','432900','53.78179','-0.41993','Cottingham','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1104','HU17','503500','440100','53.8466','-0.42661','Cottingham','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1105','HU18','520400','447500','53.90944','-0.16692','Hornsea','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1106','HU19','534300','427100','53.72277','0.03566','Withernsea','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1107','HU2','509600','429500','53.75011','-0.33769','Hull','City of Kingston-upon-Hull','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1108','HU20','498000','433500','53.78836','-0.51229','Rowley','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1109','HU3','507900','428500','53.74148','-0.36381','Hull','City of Kingston-upon-Hull','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1110','HU4','505500','427800','53.73568','-0.40043','Hull','City of Kingston-upon-Hull','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1111','HU5','507100','430500','53.75961','-0.37524','Hull','City of Kingston-upon-Hull','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1112','HU6','507500','432900','53.7811','-0.36834','Hull','City of Kingston-upon-Hull','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1113','HU7','510300','433800','53.7886','-0.32554','Hull','City of Kingston-upon-Hull','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1114','HU8','512100','431600','53.76845','-0.29903','Hull','City of Kingston-upon-Hull','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1115','HU9','513000','430200','53.75567','-0.28589','Hull','City of Kingston-upon-Hull','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1116','HX1','408600','425000','53.72111','-1.86966','Halifax','Calderdale','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1117','HX2','406300','426800','53.73733','-1.90448','Halifax','Calderdale','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1118','HX3','410300','425600','53.72648','-1.84387','Halifax','Calderdale','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1119','HX4','407900','420400','53.67978','-1.88039','Halifax','Calderdale','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1120','HX5','410900','421100','53.68601','-1.83494','Halifax','Calderdale','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1121','HX6','405000','422400','53.69779','-1.92426','Halifax','Calderdale','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1122','HX7','399500','427000','53.73916','-2.00758','Hebden Royd','Calderdale','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1123','IG1','543800','186500','51.55855','0.07463','Ilford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1124','IG10','542900','196400','51.64775','0.06569','Loughton','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1125','IG11','545200','184000','51.53573','0.09378','Barking','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1126','IG2','544200','188200','51.57373','0.08109','Ilford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1127','IG3','545600','186900','51.56168','0.10074','Ilford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1128','IG4','542400','188500','51.57688','0.05525','Ilford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1129','IG5','543100','189700','51.58749','0.06584','Ilford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1130','IG6','544700','190300','51.59247','0.08917','Ilford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1131','IG7','544600','192600','51.61316','0.08867','Loughton','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1132','IG8','540800','191800','51.60694','0.0335','Ilford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1133','IG9','541200','193700','51.62391','0.04004','Loughton','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1134','IM1','237942','475605','54.15048','-4.48174','Douglas, Braddan','IOM','Crown Dependencies','IM','Isle of Man');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1135','IM2','238912','478736','54.17891','-4.46857','Douglas, Braddan','IOM','Crown Dependencies','IM','Isle of Man');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1136','IM3','239997','477950','54.17219','-4.45155','Onchan','IOM','Crown Dependencies','IM','Isle of Man');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1137','IM4','234728','479459','54.18407','-4.53302','Peel, German','IOM','Crown Dependencies','IM','Isle of Man');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1138','IM5','223450','480890','54.19316','-4.7065','Baldrine, Loman','IOM','Crown Dependencies','IM','Isle of Man');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1139','IM6','232056','490973','54.28659','-4.58037','Kirk Michael','IOM','Crown Dependencies','IM','Isle of Man');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1140','IM7','243266','494980','54.32613','-4.41041','St Judes, Andreas','IOM','Crown Dependencies','IM','Isle of Man');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1141','IM8','264281','488951','54.278','-4.08474','Ramsay','IOM','Crown Dependencies','IM','Isle of Man');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1142','IM9','224521','469564','54.09184','-4.68352','Arbory','IOM','Crown Dependencies','IM','Isle of Man');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1143','IP1','615300','245600','52.06644','1.14151','Ipswich','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1144','IP10','624300','240700','52.01888','1.26939','Levington','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1145','IP11','629000','235500','51.97028','1.3343','Felixstowe','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1146','IP12','631000','249200','52.09243','1.37262','Bromeswell','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1147','IP13','627000','259300','52.18475','1.32107','Kettleburgh','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1148','IP14','607300','260800','52.20597','1.03423','Stowupland','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1149','IP15','646000','257100','52.15686','1.59688','Aldeburgh','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1150','IP16','645000','262300','52.20397','1.58604','Leiston','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1151','IP17','639200','264900','52.22985','1.50316','Kelsale','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1152','IP18','650200','276600','52.32995','1.67259','Southwold','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1153','IP19','638100','277100','52.33982','1.4957','Halesworth','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1154','IP2','615000','243200','52.04501','1.13563','Ipswich','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1155','IP20','625900','283900','52.40601','1.3215','Harleston','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1156','IP21','620300','279000','52.36431','1.23608','Syleham','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1157','IP22','607800','279700','52.37548','1.05319','Wortham','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1158','IP23','613000','272200','52.30615','1.12472','Eye','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1159','IP24','587600','283700','52.41869','0.75903','Thetford','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1160','IP25','592300','302500','52.58588','0.83892','Ovington','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1161','IP26','574900','293100','52.50733','0.57739','Methwold','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1162','IP27','575800','284500','52.4298','0.5861','Brandon','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1163','IP28','573700','272900','52.32627','0.54924','Tuddenham','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1164','IP29','582000','258300','52.19245','0.66303','Whepstead','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1165','IP3','618600','243000','52.0418','1.18792','Ipswich','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1166','IP30','593800','260600','52.20909','0.83679','Hessett','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1167','IP31','592900','269600','52.29023','0.82877','Pakenham','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1168','IP32','585500','265200','52.25326','0.71797','Bury St Edmunds','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1169','IP33','584900','263900','52.24178','0.70848','Bury St Edmunds','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1170','IP4','618000','245000','52.06','1.18046','Ipswich','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1171','IP5','622200','245300','52.06102','1.24182','Kesgrave','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1172','IP6','613200','252700','52.131','1.11536','Hemingstone','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1173','IP7','602100','245300','52.06872','0.94901','Aldham','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1174','IP8','611300','244900','52.06169','1.0828','Sproughton','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1175','IP9','616200','237200','51.99067','1.14931','Holbrook','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1176','IV1','266300','846300','57.4874','-4.23059','Inverness','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1177','IV10','272900','857000','57.58536','-4.12616','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1178','IV11','278500','867100','57.67758','-4.03762','Cromarty','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1179','IV12','288500','855300','57.57422','-3.86458','Nairn','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1180','IV13','278900','829800','57.3428','-4.01239','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1181','IV14','247700','857900','57.58564','-4.54783','Strathpeffer','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1182','IV15','254800','859200','57.59965','-4.42996','Dingwall','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1183','IV16','260600','866200','57.66431','-4.33703','Evanton','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1184','IV17','265300','870000','57.69985','-4.26043','Alness','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1185','IV18','271600','870000','57.70169','-4.15479','Invergordon','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1186','IV19','277500','881300','57.80478','-4.06162','Tain','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1187','IV2','268600','844100','57.46833','-4.19107','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1188','IV20','286600','879000','57.78653','-3.90748','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1189','IV21','178500','876500','57.72377','-5.72019','Gairloch','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1190','IV22','191300','877800','57.74156','-5.50682','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1191','IV23','221000','879900','57.77322','-5.01018','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1192','IV24','260400','891500','57.89133','-4.35512','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1193','IV25','278900','890900','57.89135','-4.04295','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1194','IV26','212100','896200','57.91578','-5.17243','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1195','IV27','235800','935400','58.27684','-4.80032','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1196','IV28','272600','904900','58.01527','-4.15668','Rogart','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1197','IV3','265400','845200','57.47726','-4.24499','Inverness','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1198','IV30','320800','863500','57.65468','-3.32732','Elgin','Moray','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1199','IV31','323200','870400','57.71706','-3.28931','Lossiemouth','Moray','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1200','IV32','333700','860700','57.63161','-3.11041','Mosstodloch','Moray','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1201','IV36','304200','859000','57.61104','-3.60363','Forres','Moray','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1202','IV4','248000','842600','57.44843','-4.53328','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1203','IV40','180000','826300','57.27446','-5.64981','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1204','IV41','174800','826500','57.27372','-5.73605','Kyleakin','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1205','IV42','169000','823000','57.23946','-5.82877','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1206','IV43','169600','813600','57.1555','-5.81015','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1207','IV44','165500','809300','57.11488','-5.87374','Saasaig','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1208','IV45','163300','804100','57.06714','-5.90508','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1209','IV46','158800','809600','57.1141','-5.98441','Ferrindonald','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1210','IV47','138400','831000','57.29467','-6.34284','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1211','IV48','153300','831900','57.31102','-6.09713','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1212','IV49','161800','822100','57.2277','-5.94693','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1213','IV5','255400','844500','57.4679','-4.4112','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1214','IV51','145500','851300','57.48055','-6.24636','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1215','IV52','180300','833300','57.33737','-5.65106','Plockton','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1216','IV53','186200','833800','57.34465','-5.55367','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1217','IV54','183000','843600','57.43101','-5.61538','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1218','IV55','123500','850300','57.45873','-6.611','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1219','IV56','133800','839300','57.36636','-6.4279','Isle of Skye','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1220','IV6','252900','851100','57.52634','-4.45682','Muir of Ord','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1221','IV63','249200','828500','57.32228','-4.50465','Lewiston','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1222','IV7','257500','857400','57.58435','-4.38376','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1223','IV8','264500','853800','57.55419','-4.26477','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1224','IV9','269800','855300','57.56922','-4.17706','Avoch','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1225','JE1','391286','-78769','49.19094','-2.11961','St Helier','Jersey','Crown Dependencies','JE','Jersey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1226','JE2','392192','-77560','49.20183','-2.10719','St Helier','Jersey','Crown Dependencies','JE','Jersey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1227','JE3','390223','-79337','49.18581','-2.13418','St+F2813 Ouen','Jersey','Crown Dependencies','JE','Jersey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1228','JE4','393368','-78440','49.19392','-2.09104','St Helier','Jersey','Crown Dependencies','JE','Jersey');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1229','KA1','242800','636400','55.5958','-4.49509','Kilmarnock','East Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1230','KA10','233000','631600','55.54945','-4.64755','Troon','South Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1231','KA11','234700','639100','55.61736','-4.62512','Irvine','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1232','KA12','232300','639400','55.61923','-4.66337','Irvine','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1233','KA13','230200','643500','55.6553','-4.69921','Kilwinning','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1234','KA14','232300','652900','55.74041','-4.67162','Glengarnock','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1235','KA15','235200','653700','55.74859','-4.62596','Beith','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1236','KA16','253200','637300','55.60713','-4.33065','Newmilns','East Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1237','KA17','256300','637600','55.61075','-4.28164','Darvel','East Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1238','KA18','258400','619700','55.45063','-4.23917','Cumnock','East Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1239','KA19','230900','609000','55.34585','-4.66707','','South Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1240','KA2','238500','636600','55.59619','-4.56338','Gatehead','East Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1241','KA20','226900','642100','55.64157','-4.75072','Stevenston','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1242','KA21','224900','642200','55.64176','-4.78253','Ardrossan','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1243','KA22','223400','643200','55.65019','-4.80697','Ardrossan','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1244','KA23','220600','647900','55.69135','-4.85449','West Kilbride','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1245','KA24','229500','649600','55.70981','-4.71412','Dalry','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1246','KA25','231300','654300','55.75263','-4.6884','Kilbirnie','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1247','KA26','219800','595300','55.21894','-4.83313','','South Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1248','KA27','199900','631800','55.5388','-5.17162','','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1249','KA28','216600','655100','55.75447','-4.92287','Millport','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1250','KA29','221000','655200','55.75701','-4.85291','Fairlie','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1251','KA3','243000','641800','55.64435','-4.49499','','East Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1252','KA30','220600','659700','55.79725','-4.86224','Largs','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1253','KA4','249900','636500','55.59894','-4.38256','Galston','East Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1254','KA5','249300','626600','55.50987','-4.38668','Mauchline','East Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1255','KA6','241500','616400','55.41582','-4.50427','','South Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1256','KA7','233800','620200','55.44739','-4.62805','Ayr','South Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1257','KA8','234900','622800','55.4711','-4.61222','Ayr','South Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1258','KA9','235500','625700','55.49734','-4.60446','Ayr','South Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1259','KT1','518500','169000','51.40713','-0.29606','Kingston Upon Thames','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1260','KT10','514600','164500','51.36749','-0.35357','Esher','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1261','KT11','511300','160000','51.32769','-0.40237','Cobham','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1262','KT12','510900','165500','51.37721','-0.40639','West Molesey','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1263','KT13','508000','164400','51.36788','-0.44838','West Molesey','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1264','KT14','505500','161100','51.33869','-0.48526','','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1265','KT15','504800','163800','51.36309','-0.49451','Addlestone','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1266','KT16','503400','166000','51.38312','-0.51398','','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1267','KT17','522000','161700','51.34078','-0.24827','Epsom','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1268','KT18','521100','159000','51.3167','-0.2621','','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1269','KT19','520600','162800','51.35096','-0.26799','Epsom','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1270','KT2','519000','170000','51.41602','-0.28854','Kingston Upon Thames','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1271','KT20','523400','155600','51.28564','-0.23029','Reigate and Banstead','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1272','KT21','518400','158300','51.31098','-0.30106','Leatherhead','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1273','KT22','515900','157100','51.3007','-0.33731','Leatherhead','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1274','KT23','513700','154900','51.28137','-0.36956','Dorking','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1275','KT24','509600','153400','51.26869','-0.42879','East Horsley','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1276','KT3','521300','168200','51.39935','-0.25609','Kingston Upon Thames','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1277','KT4','522300','165800','51.37757','-0.24255','Sutton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1278','KT5','519200','167300','51.39171','-0.28657','Kingston Upon Thames','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1279','KT6','518300','167000','51.3892','-0.2996','Kingston Upon Thames','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1280','KT7','516400','167000','51.38959','-0.3269','Esher','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1281','KT8','513900','168200','51.40089','-0.36243','West Molesey','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1282','KT9','518200','164200','51.36405','-0.30197','Kingston Upon Thames','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1283','KW1','334600','952700','58.45801','-3.12092','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1284','KW10','283200','900100','57.97509','-3.975','Golspie','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1285','KW11','275200','937100','58.30505','-4.12991','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1286','KW12','313100','958500','58.50634','-3.49149','Halkirk','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1287','KW13','289400','953400','58.45518','-3.89556','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1288','KW14','309600','967800','58.58913','-3.55523','Thurso','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1289','KW15','344900','1010700','58.9803','-2.95862','Kirkwall','Orkney Islands','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1290','KW16','326800','1008700','58.95963','-3.27278','Stromness','Orkney Islands','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1291','KW17','342500','1017600','59.04195','-3.00217','Gorseness','Orkney Islands','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1292','KW2','331900','940600','58.34893','-3.16359','Whaligoe','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1293','KW3','325100','936100','58.30741','-3.27829','Lybster','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1294','KW5','319000','934000','58.28747','-3.38163','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1295','KW6','315400','929800','58.24908','-3.44148','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1296','KW7','311800','922900','58.18641','-3.50018','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1297','KW8','302000','915300','58.11611','-3.6636','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1298','KW9','290300','904200','58.0137','-3.85692','Brora','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1299','KY1','329300','693400','56.12815','-3.1375','Kirkcaldy','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1300','KY10','356600','704400','56.23024','-2.70011','','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1301','KY11','311900','684700','56.0471','-3.4145','','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1302','KY12','307100','688100','56.07674','-3.49272','Dunfermline','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1303','KY13','311200','702700','56.20866','-3.43173','Kinross','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1304','KY14','323300','713800','56.31048','-3.23992','','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1305','KY15','335000','712500','56.30055','-3.0505','','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1306','KY16','349400','716900','56.34184','-2.81865','','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1307','KY2','326500','692800','56.12234','-3.18238','Kirkcaldy','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1308','KY3','323400','686300','56.06346','-3.23037','Burntisland','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1309','KY4','315400','692100','56.11421','-3.36066','','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1310','KY5','319600','695500','56.14548','-3.29416','','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1311','KY6','325700','701100','56.19678','-3.19756','Glenrothes','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1312','KY7','328400','701100','56.19719','-3.15405','Glenrothes','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1313','KY8','337300','701000','56.19755','-3.01061','Leven','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1314','KY9','348300','702200','56.20965','-2.83356','Kilconquhar','Fife','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1315','L1','334900','390000','53.40254','-2.97928','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1316','L10','338500','397900','53.47398','-2.92668','Aintree','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1317','L11','339300','395000','53.44801','-2.91407','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1318','L12','340600','393500','53.43467','-2.89421','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1319','L13','338900','391600','53.4174','-2.91943','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1320','L14','341600','391700','53.41861','-2.87883','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1321','L15','338900','389400','53.39763','-2.91901','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1322','L16','341000','389500','53.39876','-2.88744','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1323','L17','337500','387200','53.37769','-2.93962','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1324','L18','339700','387500','53.38064','-2.90661','Garston','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1325','L19','340000','385100','53.3591','-2.90165','Garston','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1326','L2','334300','390500','53.40696','-2.98841','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1327','L20','334400','395600','53.45281','-2.98797','Southport','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1328','L21','333700','397600','53.4707','-2.99893','Southport','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1329','L22','331900','398300','53.47676','-3.0262','Southport','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1330','L23','332200','399900','53.49118','-3.02203','Crosby','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1331','L24','344300','383300','53.34339','-2.83672','Garston','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1332','L25','342600','387200','53.37827','-2.86296','Garston','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1333','L26','344600','385600','53.3641','-2.83262','Halewood','Knowsley','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1334','L27','344300','388200','53.38744','-2.83758','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1335','L28','342600','393500','53.4349','-2.86411','','Knowsley','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1336','L29','334800','401600','53.50679','-2.98319','','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1337','L3','334600','390700','53.4088','-2.98394','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1338','L30','335600','399100','53.48442','-2.97062','Southport','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1339','L31','337900','402300','53.51346','-2.93659','Maghull','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1340','L32','341000','398300','53.47786','-2.88909','Kirkby','Knowsley','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1341','L33','341900','399600','53.48965','-2.87577','Kirkby','Knowsley','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1342','L34','345900','393600','53.43614','-2.81445','','Knowsley','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1343','L35','348000','391200','53.41478','-2.78244','Rainhill','St Helens','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1344','L36','344200','391200','53.41439','-2.83962','Hyton','Knowsley','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1345','L37','329600','407300','53.55735','-3.06288','Southport','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1346','L38','330400','403600','53.5242','-3.04998','Southport','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1347','L39','340700','407600','53.56142','-2.89537','Ormskirk','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1348','L4','336200','393900','53.43775','-2.96052','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1349','L40','344400','412100','53.60227','-2.84032','Burscough','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1350','L5','335200','392500','53.42505','-2.97529','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1351','L6','336900','391800','53.41896','-2.94956','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1352','L69','335300','390500','53.40709','-2.97337','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1353','L7','337000','390300','53.40549','-2.94776','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1354','L70','335500','390700','53.40891','-2.9704','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1355','L8','336000','388600','53.39009','-2.96246','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1356','L9','336800','396500','53.4612','-2.95201','','Liverpool','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1357','LA1','347700','461500','54.04663','-2.79885','Lancaster','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1358','LA10','367900','491100','54.31433','-2.49348','Sedbergh','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1359','LA11','339700','478700','54.20034','-2.92446','Grange-over-Sands','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1360','LA12','329400','479200','54.20351','-3.08246','Ulverston','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1361','LA13','321700','469800','54.11792','-3.19805','Dalton-in-Furness','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1362','LA14','319600','469900','54.1185','-3.2302','Dalton-in-Furness','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1363','LA15','323100','474000','54.15588','-3.1777','Dalton Town with Newton','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1364','LA16','321600','477400','54.1862','-3.20155','Ireleth','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1365','LA17','323400','483200','54.2386','-3.17545','Kirkby Ireleth','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1366','LA18','316900','480700','54.21512','-3.27448','Millom','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1367','LA19','310500','489500','54.29312','-3.37523','Bootle','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1368','LA2','355900','463500','54.06537','-2.6739','Caton','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1369','LA20','321600','489400','54.29404','-3.20469','Broughton West','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1370','LA21','330300','497100','54.3645','-3.07283','Coniston','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1371','LA22','336000','503500','54.42276','-2.98649','Lakes','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1372','LA23','340800','497700','54.37122','-2.91136','Windermere','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1373','LA3','342600','462000','54.05058','-2.87683','Lancaster','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1374','LA4','344300','464100','54.06964','-2.85125','Lancaster','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1375','LA5','348400','472200','54.14287','-2.78998','Warton','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1376','LA6','360100','475700','54.17537','-2.61134','Whittingham','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1377','LA7','349700','481400','54.22568','-2.77162','Milnthorpe','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1378','LA8','350600','492300','54.32373','-2.75961','Kendal','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1379','LA9','351700','492500','54.32563','-2.74273','Kendal','Cumbria','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1380','LD1','306800','263400','52.26047','-3.3657','Llandrindod Wells','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1381','LD2','304700','250200','52.14145','-3.39275','Duhonw','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1382','LD3','305800','230000','51.96006','-3.37111','Llanddew','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1383','LD4','293600','247800','52.11786','-3.55416','Llangamarch','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1384','LD5','289400','248900','52.12692','-3.61584','Treflys','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1385','LD6','297200','269000','52.30909','-3.50804','Rhayader','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1386','LD7','326100','273300','52.3524','-3.08513','Knighton','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1387','LD8','328800','263800','52.26735','-3.04348','Presteigne','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1388','LE1','459000','304400','52.63379','-1.12812','Leicester','Leicester','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1389','LE10','442900','293400','52.53641','-1.36744','Hinckley','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1390','LE11','452900','319400','52.76927','-1.21584','Loughborough','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1391','LE12','454500','319100','52.76641','-1.19217','Loughborough','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1392','LE13','475200','319300','52.76572','-0.88536','Melton Mowbray','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1393','LE14','474500','321300','52.7838','-0.89527','Melton Mowbray','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1394','LE15','487900','307300','52.65594','-0.70037','Hambleton','Rutland','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1395','LE16','475200','288200','52.48616','-0.89244','Dingley','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1396','LE17','455900','285800','52.4669','-1.17706','Gilmorton','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1397','LE18','460200','298800','52.58332','-1.11141','Wigston','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1398','LE19','453600','298000','52.57718','-1.21047','Narborough','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1399','LE2','459900','301700','52.60942','-1.11531','Oadby','Leicester','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1400','LE3','455500','303800','52.62876','-1.17993','Leicester','Leicester','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1401','LE4','459300','307700','52.66342','-1.12309','Leicester','Leicester','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1402','LE5','461900','304700','52.63616','-1.08521','Leicester','Leicester','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1403','LE6','451300','307500','52.66244','-1.24141','Groby','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1404','LE65','435900','316900','52.74819','-1.4681','Ashby-de-la-Zouch','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1405','LE67','443200','313400','52.71619','-1.36041','Coalville','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1406','LE7','463000','309300','52.67739','-1.06808','Barkby','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1407','LE8','461200','295400','52.55264','-1.09728','Kilby','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1408','LE9','448300','297200','52.57012','-1.28728','Hinckley','Leicestershire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1409','LL11','330700','352300','53.06314','-3.03425','Broughton','Wrexham','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1410','LL12','333800','354800','53.08601','-2.98851','Gresford','Wrexham','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1411','LL13','335700','349200','53.0359','-2.95902','Abenbury','Wrexham','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1412','LL14','329500','344400','52.99198','-3.05043','Ruabon','Wrexham','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1413','LL15','312000','357000','53.10263','-3.31455','Ruthin','Denbighshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1414','LL16','304300','366300','53.18489','-3.43231','Denbigh','Denbighshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1415','LL17','304300','373900','53.25319','-3.4346','St Asaph','Denbighshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1416','LL18','301700','380300','53.31023','-3.47554','Rhyl','Denbighshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1417','LL19','306200','382500','53.33082','-3.40866','Prestatyn','Denbighshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1418','LL20','322100','340900','52.95949','-3.15982','Llangollen','Denbighshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1419','LL21','305400','344600','52.99006','-3.40947','Corwen','Denbighshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1420','LL22','293800','375800','53.26827','-3.59257','Betws-yn-Rhos','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1421','LL23','292400','335400','52.90493','-3.60003','Bala','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1422','LL24','280400','352600','53.05695','-3.78474','Bro Machno','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1423','LL25','274100','352500','53.0546','-3.87866','Dolwyddelan','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1424','LL26','280600','361700','53.13877','-3.78514','Llanrwst','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1425','LL27','278100','362700','53.14718','-3.82288','Trefriw','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1426','LL28','282700','378200','53.28749','-3.75983','Mochdre','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1427','LL29','286200','378300','53.28916','-3.70738','Old Colwyn','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1428','LL30','279100','381700','53.31813','-3.81514','Llandudno','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1429','LL31','279400','378600','53.29035','-3.80946','Deganwy','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1430','LL32','277300','375300','53.26022','-3.83968','Henryd','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1431','LL33','267900','374400','53.24987','-3.98015','Llanfairfechan','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1432','LL34','272500','376600','53.27076','-3.91212','Penmaenmawr','Conwy','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1433','LL35','261600','296300','52.54657','-4.04127','Aberdovey','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1434','LL36','260300','302700','52.60374','-4.06313','Bryncrug','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1435','LL37','259200','309600','52.66546','-4.0823','Llangelynin','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1436','LL38','262200','313100','52.69767','-4.03943','Arthog','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1437','LL39','264200','314500','52.71076','-4.01043','Arthog','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1438','LL40','273500','319300','52.75614','-3.87468','Brithdir','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1439','LL41','269900','343100','52.96914','-3.9375','Ffestiniog','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1440','LL42','261300','316200','52.7253','-4.05405','Barmouth','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1441','LL43','258900','321700','52.77409','-4.09193','Dyffryn Ardudwy','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1442','LL44','258700','323600','52.79111','-4.09572','Dyffryn Ardudwy','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1443','LL45','258800','326800','52.81989','-4.09562','Llanbedr','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1444','LL46','258200','330700','52.85477','-4.10621','Harlech','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1445','LL47','261300','335800','52.9014','-4.06237','Talsarnau','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1446','LL48','260900','339600','52.93544','-4.06994','Penrhyndeudraeth','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1447','LL49','256300','339000','52.92883','-4.13808','Porthmadog','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1448','LL51','249800','344200','52.97377','-4.23712','Dolbenmaen','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1449','LL52','249400','338700','52.92425','-4.24052','Criccieth','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1450','LL53','232400','334800','52.88418','-4.49117','Buan','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1451','LL54','246900','353700','53.05829','-4.28478','Llanllyfni','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1452','LL55','252600','361900','53.13355','-4.20355','Llanrug','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1453','LL56','253100','367800','53.18669','-4.19879','Y Felinheli','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1454','LL57','259100','369900','53.20718','-4.10998','Llandygai','Gwynedd','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1455','LL58','260100','378000','53.28022','-4.09857','Beaumaris','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1456','LL59','255900','373000','53.23417','-4.15926','Cwm Cadnant','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1457','LL60','248500','371100','53.21505','-4.26915','Llanfihangel Ysgeifiog','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1458','LL61','248900','368900','53.1954','-4.26212','Llanidan','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1459','LL62','240700','370800','53.21007','-4.38572','Bodorgan','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1460','LL63','235100','371900','53.21824','-4.47007','Aberffraw','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1461','LL64','232000','373100','53.22805','-4.51709','Rhosneigr','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1462','LL65','228800','381300','53.30067','-4.5694','Valley','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1463','LL66','240100','389800','53.38055','-4.40427','Rhosybol','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1464','LL67','236800','393300','53.41097','-4.45565','Llanbadrig','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1465','LL68','242000','391700','53.39818','-4.37668','Amlwch','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1466','LL69','245800','390200','53.38583','-4.31883','Penysarn','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1467','LL70','247800','387700','53.36396','-4.28758','Moelfre','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1468','LL71','242300','383800','53.32732','-4.36823','Llannerch-Y-Medd','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1469','LL72','250900','386000','53.34957','-4.24023','Moelfre','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1470','LL73','250600','384400','53.33511','-4.24397','Llaneugrad','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1471','LL74','251300','382300','53.31645','-4.23248','Llanfair-Mathafarn-Eithaf','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1472','LL75','252100','378600','53.28343','-4.21876','Pentraeth','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1473','LL76','250900','380500','53.30017','-4.23764','Llanfair-Mathafarn-Eithaf','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1474','LL77','245900','376200','53.26011','-4.31053','Llangefni','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1475','LL78','249300','382400','53.31678','-4.26253','Llanfair-Mathafarn-Eithaf','Isle of Anglesey','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1476','LN1','494300','374500','53.25883','-0.58621','Burton','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1477','LN10','519200','363900','53.15858','-0.21703','Woodhall Spa','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1478','LN11','534700','388200','53.3732','0.02496','Louth','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1479','LN12','550900','383800','53.3293','0.2662','Mablethorpe','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1480','LN13','545700','376500','53.26518','0.18482','Alford','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1481','LN2','499500','374100','53.25429','-0.5084','Nettleham','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1482','LN3','505500','373000','53.24325','-0.41885','Fiskerton','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1483','LN4','508000','362700','53.15018','-0.38489','Dunston','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1484','LN5','496500','364800','53.17126','-0.55617','Waddington','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1485','LN6','493900','368300','53.20319','-0.59403','Lincoln','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1486','LN7','509900','400800','53.49216','-0.34327','Caistor','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1487','LN8','511500','387600','53.37321','-0.32384','Linwood','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1488','LN9','526100','370600','53.21719','-0.11124','Horncastle','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1489','LS1','429800','433500','53.79674','-1.54754','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1490','LS10','430900','429600','53.76162','-1.53123','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1491','LS11','429300','431200','53.77609','-1.55535','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1492','LS12','426600','432800','53.79062','-1.59618','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1493','LS13','424100','435000','53.81052','-1.63396','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1494','LS14','435800','437000','53.82782','-1.45604','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1495','LS15','436600','434600','53.80619','-1.44417','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1496','LS16','426200','439500','53.85086','-1.60169','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1497','LS17','431100','440500','53.85958','-1.52709','Harewood','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1498','LS18','423600','438300','53.8402','-1.6413','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1499','LS19','420900','440400','53.8592','-1.6822','Guiseley','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1500','LS2','429900','434000','53.80123','-1.54597','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1501','LS20','418900','442000','53.87365','-1.71251','Guiseley','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1502','LS21','421100','446200','53.91132','-1.67876','Otley','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1503','LS22','439800','448600','53.93179','-1.39375','Wetherby','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1504','LS23','442400','445500','53.90372','-1.35458','Boston Spa','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1505','LS24','449200','441800','53.86987','-1.25168','Grimston','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1506','LS25','444100','432400','53.78584','-1.33059','Micklefield','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1507','LS26','436400','428600','53.75227','-1.44791','Rothwell','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1508','LS27','426200','428100','53.74839','-1.60266','Gildersome','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1509','LS28','421800','434000','53.80163','-1.66897','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1510','LS29','412900','447200','53.92058','-1.80356','Ilkley','Bradford','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1511','LS3','429000','434000','53.80128','-1.55964','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1512','LS4','427600','434900','53.80944','-1.58082','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1513','LS5','426200','435900','53.81851','-1.60199','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1514','LS6','428500','436000','53.81928','-1.56704','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1515','LS7','430300','435900','53.81828','-1.53971','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1516','LS8','432300','436600','53.82445','-1.50926','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1517','LS9','432400','433800','53.79928','-1.50803','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1518','LU1','508500','220800','51.87476','-0.42373','','Luton','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1519','LU2','510400','222700','51.89147','-0.39553','','Luton','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1520','LU3','507100','224500','51.90829','-0.44291','','Luton','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1521','LU4','505500','223400','51.89871','-0.4665','','Luton','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1522','LU5','502300','224400','51.90829','-0.5127','Thorn','Central Bedfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1523','LU6','500800','220900','51.87711','-0.53552','Dunstable','Central Bedfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1524','LU7','491900','224300','51.90921','-0.66388','Leighton-Linslade','Central Bedfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1525','M1','384400','397900','53.47734','-2.23508','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1526','M11','388100','398000','53.47834','-2.17933','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1527','M12','386600','396500','53.46482','-2.20187','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1528','M13','385800','396000','53.4603','-2.21389','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1529','M14','385100','394600','53.4477','-2.22437','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1530','M15','383400','396600','53.46563','-2.25008','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1531','M16','382500','395400','53.45481','-2.26357','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1532','M17','378900','397000','53.46906','-2.31789','Urmston','Trafford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1533','M18','388800','396100','53.46127','-2.16871','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1534','M19','387100','393400','53.43696','-2.19421','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1535','M2','383900','398200','53.48003','-2.24263','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1536','M20','384700','392100','53.42521','-2.23027','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1537','M21','382000','393500','53.43771','-2.27099','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1538','M22','382800','387700','53.3856','-2.25863','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1539','M23','380900','389200','53.39902','-2.28729','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1540','M24','387000','406100','53.55113','-2.19624','Middleton','Rochdale','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1541','M25','381800','403600','53.5285','-2.27459','','Bury','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1542','M26','377900','407300','53.56161','-2.33369','','Bury','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1543','M27','377700','401800','53.51216','-2.33631','','Salford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1544','M28','373700','402100','53.51467','-2.39666','Walkden','Salford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1545','M29','369700','401400','53.50816','-2.45692','Pemberton','Wigan','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1546','M3','383400','398600','53.48361','-2.25018','','Salford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1547','M30','376500','398700','53.48424','-2.35418','','Salford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1548','M31','372000','391500','53.4193','-2.42136','Partington','Trafford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1549','M32','379500','394900','53.45021','-2.30872','Urmston','Trafford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1550','M33','378400','391600','53.4205','-2.32506','','Trafford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1551','M34','392200','395500','53.45594','-2.11748','Ashton-under-Lyne','Tameside','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1552','M35','389900','401200','53.50714','-2.1523','','Oldham','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1553','M38','372100','404000','53.53167','-2.42096','Walkden','Salford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1554','M4','384800','398700','53.48455','-2.22909','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1555','M40','387400','400800','53.50349','-2.18999','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1556','M41','375900','395000','53.45095','-2.36294','Urmston','Trafford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1557','M43','390200','398600','53.48378','-2.1477','Ashton-under-Lyne','Tameside','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1558','M44','371700','393900','53.44086','-2.42609','','Salford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1559','M45','380900','405700','53.54734','-2.28829','','Bury','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1560','M46','367500','403400','53.52601','-2.49031','Pemberton','Wigan','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1561','M5','381100','398100','53.47903','-2.28482','','Salford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1562','M6','380300','399500','53.49159','-2.29696','','Salford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1563','M60','384900','398900','53.48635','-2.22759','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1564','M7','382700','401000','53.50516','-2.26086','','Salford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1565','M8','384200','401400','53.5088','-2.23827','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1566','M9','385900','402800','53.52143','-2.21269','Manchester','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1567','M90','381600','385200','53.36309','-2.27653','Ringway','Greater Manchester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1568','ME1','574000','166700','51.37216','0.50017','Rochester','Medway','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1569','ME10','590600','164000','51.34258','0.73697','Sittingbourne','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1570','ME11','591100','171800','51.41247','0.74833','Queenborough','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1571','ME12','595000','173100','51.42282','0.80507','Sittingbourne','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1572','ME13','601900','160000','51.30275','0.89675','Faversham','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1573','ME14','577200','156600','51.28043','0.54108','Maidstone','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1574','ME15','576800','153700','51.2545','0.53392','Maidstone','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1575','ME16','574300','155800','51.27414','0.49915','Maidstone','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1576','ME17','582200','151700','51.23484','0.61021','Leeds','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1577','ME18','569100','152300','51.24426','0.42301','West Farleigh','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1578','ME19','568100','157700','51.29307','0.41123','West Malling','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1579','ME2','572900','168800','51.39136','0.4854','Strood','Medway','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1580','ME20','571400','159100','51.30467','0.45919','Ditton','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1581','ME3','577000','173600','51.43322','0.54668','Hoo St Werburgh','Medway','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1582','ME4','576100','167700','51.3805','0.53081','Rochester','Medway','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1583','ME5','576400','164200','51.34896','0.53338','Rochester','Medway','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1584','ME6','570100','161500','51.32662','0.4417','Snodland','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1585','ME7','577900','167600','51.37904','0.5566','Gillingham','Medway','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1586','ME8','580900','165700','51.36102','0.5987','Gillingham','Medway','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1587','ME9','589800','162900','51.33297','0.72491','Sittingbourne','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1588','MK1','487400','234900','52.00522','-0.72659','Bletchley','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1589','MK10','489300','238700','52.03908','-0.69792','','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1590','MK11','479500','240000','52.05226','-0.84048','Stony Stratford','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1591','MK12','481200','240600','52.05741','-0.81555','Stony Stratford','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1592','MK13','483400','240100','52.05258','-0.78359','Bradwell','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1593','MK14','484900','240900','52.05955','-0.76152','Stantonbury','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1594','MK15','487200','240700','52.05739','-0.72802','Willen','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1595','MK16','487600','244200','52.08879','-0.72129','Newport Pagnell','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1596','MK17','489200','233500','51.99235','-0.70074','Bow Brickhill','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1597','MK18','470800','231800','51.97972','-0.96904','Buckingham','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1598','MK19','478700','242200','52.07215','-0.85164','Cosgrove','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1599','MK2','487600','233200','51.98991','-0.72411','Bletchley','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1600','MK3','485600','233900','51.99651','-0.75306','Bletchley','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1601','MK4','483900','234700','52.00397','-0.77762','Shenley Brook End','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1602','MK40','504600','250000','52.13797','-0.47145','Bedford','Bedford Borough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1603','MK41','506300','251500','52.15113','-0.44614','Bedford','Bedford Borough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1604','MK42','504500','248000','52.12002','-0.47352','Kempston','Bedford Borough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1605','MK43','498800','247700','52.11837','-0.55684','Kempston Rural','Bedford Borough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1606','MK44','507600','256300','52.19402','-0.42563','Wilden','Bedford Borough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1607','MK45','505100','237400','52.02462','-0.46803','Maulden','Central Bedfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1608','MK46','489500','251500','52.15411','-0.69165','Clifton Reynes','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1609','MK5','483500','236500','52.02021','-0.78301','Shenley Church End','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1610','MK6','486300','237600','52.02967','-0.74193','Woughton On The Green','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1611','MK7','489900','236500','52.01921','-0.68976','Walton','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1612','MK8','482100','238200','52.0357','-0.803','Bradwell Abbey','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1613','MK9','485100','238800','52.04064','-0.75912','','Milton Keynes','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1614','ML1','276200','658000','55.79943','-3.97512','Motherwell','North Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1615','ML10','269900','644900','55.68013','-4.06932','Strathaven','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1616','ML11','287700','642900','55.66661','-3.78555','New Lanark','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1617','ML12','299400','631500','55.56677','-3.59544','','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1618','ML2','280100','655400','55.77706','-3.91179','Wishaw','North Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1619','ML3','271200','654900','55.77028','-4.05337','Hamilton','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1620','ML4','273400','660200','55.81846','-4.02078','Motherwell','North Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1621','ML5','272900','664800','55.85964','-4.03091','Coatbridge','North Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1622','ML6','277200','665500','55.86704','-3.96257','Airdrie','North Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1623','ML7','287700','661100','55.83008','-3.79303','','North Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1624','ML8','284400','650100','55.7305','-3.84103','Carluke','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1625','ML9','276500','649700','55.72496','-3.96658','Larkhall','South Lanarkshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1626','N1','532000','183800','51.53717','-0.09652','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1627','N10','528600','190000','51.59368','-0.14325','Tottenham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1628','N11','528900','192200','51.61338','-0.13812','Enfield','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1629','N12','526300','192300','51.61487','-0.17561','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1630','N13','531400','192900','51.6191','-0.10176','Enfield','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1631','N14','529500','194500','51.63392','-0.1286','Enfield','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1632','N15','532900','188800','51.5819','-0.08166','Tottenham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1633','N16','533400','186700','51.5629','-0.07525','Hackney','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1634','N17','533600','190600','51.59791','-0.07088','Tottenham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1635','N18','534000','192300','51.61309','-0.06446','Enfield','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1636','N19','529800','186800','51.56464','-0.12712','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1637','N1C','530091','183594','51.53626','-0.12572','King\'s Cross','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1638','N2','526900','189500','51.58957','-0.16797','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1639','N20','526400','193900','51.62923','-0.17359','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1640','N21','531600','194800','51.63612','-0.09816','Enfield','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1641','N22','530900','190700','51.59944','-0.1098','Tottenham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1642','N3','525200','190600','51.59984','-0.1921','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1643','N4','531600','187500','51.57052','-0.1009','Hackney','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1644','N5','531900','185600','51.55337','-0.09729','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1645','N6','528800','187500','51.57116','-0.14129','Tottenham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1646','N7','530600','185500','51.55277','-0.11607','Islington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1647','N8','530500','188900','51.58335','-0.11625','Tottenham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1648','N9','534500','194000','51.62825','-0.05659','Enfield','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1649','NE1','424900','564300','54.97262','-1.61097','','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1650','NE10','428600','561500','54.94726','-1.55345','','Gateshead','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1651','NE11','423600','560800','54.94123','-1.63157','Wickham and Dunston','Gateshead','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1652','NE12','427600','570100','55.0246','-1.56823','Longbenton','North Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1653','NE13','422700','572500','55.04642','-1.64469','Brunswick','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1654','NE15','417900','565500','54.9837','-1.72026','Newburn','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1655','NE16','419800','559800','54.9324','-1.69096','Wickham and Dunston','Gateshead','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1656','NE17','411800','557700','54.91378','-1.81591','Blaydon','Gateshead','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1657','NE18','408900','571500','55.03787','-1.86072','Stamfordham','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1658','NE19','393900','587200','55.17901','-2.0958','Elsdon','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1659','NE2','425300','565900','54.98698','-1.60458','Byker','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1660','NE20','413700','573200','55.05304','-1.78553','Ponteland','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1661','NE21','418000','562600','54.95764','-1.71888','Blaydon','Gateshead','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1662','NE22','426500','582500','55.1361','-1.58428','Wansbeck','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1663','NE23','426700','576300','55.08037','-1.58173','Blyth','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1664','NE24','430600','581000','55.12238','-1.52013','Blyth','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1665','NE25','432800','572900','55.04945','-1.48656','','North Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1666','NE26','434700','573200','55.05201','-1.45679','','North Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1667','NE27','431300','571000','55.03247','-1.51025','','North Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1668','NE28','430800','567400','55.00015','-1.51846','','North Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1669','NE29','434300','568700','55.0116','-1.46359','','North Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1670','NE3','423500','568500','55.01043','-1.6325','','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1671','NE30','435800','569800','55.02138','-1.44','','North Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1672','NE31','431300','564200','54.97136','-1.511','','South Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1673','NE32','433100','563800','54.96765','-1.48292','','South Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1674','NE33','436600','566400','54.99077','-1.42792','','South Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1675','NE34','437100','564300','54.97186','-1.42037','','South Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1676','NE35','434600','562100','54.95227','-1.4597','','South Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1677','NE36','436000','561300','54.94498','-1.43794','','South Tyneside','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1678','NE37','430400','557700','54.913','-1.52574','Washington','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1679','NE38','430500','555600','54.89412','-1.52441','Washington','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1680','NE39','415500','558800','54.92357','-1.75813','Blaydon','Gateshead','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1681','NE4','422900','564400','54.97361','-1.64221','','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1682','NE40','414600','563500','54.96584','-1.77193','Blaydon','Gateshead','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1683','NE41','411600','564600','54.9758','-1.81875','Wylam','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1684','NE42','409300','563100','54.96237','-1.85474','Prudhoe','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1685','NE43','406100','561500','54.94804','-1.90475','Stocksfield','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1686','NE44','401400','560900','54.94268','-1.97814','Broomhaugh and Riding','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1687','NE45','399000','564700','54.97683','-2.01563','Corbridge','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1688','NE46','393200','565000','54.97948','-2.10626','Hexham','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1689','NE47','383900','559400','54.92894','-2.25127','Allendale','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1690','NE48','383600','581900','55.13114','-2.25724','Bellingham','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1691','NE49','370600','563700','54.96698','-2.45927','Haltwhistle','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1692','NE5','420000','566900','54.99621','-1.68735','Newburn','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1693','NE6','427900','564800','54.97695','-1.56405','Byker','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1694','NE61','419800','587400','55.18045','-1.68905','Morpeth','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1695','NE62','426000','585300','55.16129','-1.59187','Wansbeck','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1696','NE63','427900','587100','55.17736','-1.56187','Wansbeck','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1697','NE64','430900','587900','55.18437','-1.51467','Wansbeck','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1698','NE65','415800','602100','55.3127','-1.75104','Newton on the Moor','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1699','NE66','417000','615000','55.42858','-1.73135','Denwick','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1700','NE67','419400','626700','55.53363','-1.6926','Ellingham','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1701','NE68','421600','631200','55.57398','-1.65739','North Sunderland','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1702','NE69','417900','634600','55.60468','-1.71586','Bamburgh','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1703','NE7','427000','567300','54.99947','-1.57788','Byker','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1704','NE70','411600','633400','55.59409','-1.81591','Belford','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1705','NE71','397200','629100','55.55558','-2.04439','Akeld','Northumberland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1706','NE8','425400','562400','54.95552','-1.60333','','Gateshead','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1707','NE9','426700','559700','54.93118','-1.58328','','Gateshead','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1708','NE99','424800','563700','54.96723','-1.61259','','Newcastle Upon Tyne','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1709','NG1','457300','340000','52.954','-1.147','','Nottingham','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1710','NG10','448300','333900','52.90005','-1.28187','Ilkeston','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1711','NG11','455600','333900','52.89934','-1.17335','Clifton','Nottingham','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1712','NG12','463600','335300','52.91104','-1.05415','Cotgrave','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1713','NG13','472500','339500','52.94767','-0.92087','Bingham','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1714','NG14','464600','346900','53.01519','-1.03696','Lowdham','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1715','NG15','453400','350100','53.04519','-1.20338','Sutton in Ashfield','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1716','NG16','447400','348000','53.02688','-1.29319','Greasley','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1717','NG17','449500','357900','53.11569','-1.26035','Sutton in Ashfield','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1718','NG18','454600','360400','53.13766','-1.18373','Mansfield','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1719','NG19','453700','362800','53.15933','-1.19678','Mansfield','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1720','NG2','458400','337900','52.935','-1.131','West Bridgford','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1721','NG20','454500','368400','53.20958','-1.18386','Warsop','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1722','NG21','459900','360800','53.14069','-1.10443','Rainworth','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1723','NG22','468800','365100','53.17826','-0.97046','Ompton','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1724','NG23','480300','358300','53.11553','-0.80012','North Muskham','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1725','NG24','480500','353200','53.06966','-0.79841','Newark-on-Trent','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1726','NG25','470000','353400','53.07294','-0.95506','Southwell','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1727','NG3','458500','341500','52.96735','-1.12887','','Nottingham','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1728','NG31','491500','336100','52.9142','-0.6391','Grantham','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1729','NG32','490700','340000','52.94939','-0.64991','Great Gonerby','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1730','NG33','495800','325500','52.81819','-0.57829','Burton Coggles','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1731','NG34','508000','344600','52.98753','-0.39096','Sleaford','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1732','NG4','461400','341900','52.97062','-1.08561','Carlton','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1733','NG5','457500','344800','52.99713','-1.14317','','Nottingham','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1734','NG6','454300','344800','52.99746','-1.19085','','Nottingham','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1735','NG7','455400','340400','52.95779','-1.17521','','Nottingham','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1736','NG8','452900','341100','52.96434','-1.21231','','Nottingham','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1737','NG9','451400','336800','52.92583','-1.23533','Beeston','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1738','NN1','476000','261000','52.24154','-0.88682','Northampton','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1739','NN10','495700','266900','52.2915','-0.59668','Rushden','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1740','NN11','456100','260600','52.24033','-1.17833','Badby','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1741','NN12','468600','248200','52.12744','-0.99778','Towcester','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1742','NN13','458500','237500','52.0324','-1.14715','Brackley','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1743','NN14','489000','279900','52.40948','-0.69145','Warkton','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1744','NN15','488100','277100','52.38446','-0.70542','Kettering','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1745','NN16','487000','279400','52.40531','-0.72098','Kettering','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1746','NN17','489000','290000','52.50026','-0.68876','Corby','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1747','NN18','487300','287700','52.47986','-0.7144','Corby','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1748','NN2','475400','263300','52.2623','-0.89509','Northampton','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1749','NN29','491200','263300','52.2599','-0.66362','Wollaston','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1750','NN3','478800','263300','52.26182','-0.84528','Northampton','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1751','NN4','475400','258200','52.21645','-0.89623','Northampton','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1752','NN5','473100','261600','52.24732','-0.92916','Duston','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1753','NN6','472000','269900','52.32208','-0.9435','Spratton','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1754','NN7','473300','257400','52.20954','-0.92714','Northampton','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1755','NN8','488800','268000','52.30254','-0.69754','Wellingborough','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1756','NN9','495500','271500','52.33288','-0.59831','Irthlingborough','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1757','NP10','327600','187300','51.57943','-3.04497','Graig','Newport','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1758','NP11','321800','194400','51.64249','-3.13025','Abercarn','Caerphilly','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1759','NP12','317200','197400','51.6688','-3.19743','Blackwood','Caerphilly','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1760','NP13','321300','204600','51.73412','-3.13977','Abertillery','Blaenau Gwent','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1761','NP15','338800','203400','51.72552','-2.88616','Gwehelog Fawr','Monmouthshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1762','NP16','352400','194800','51.64951','-2.68808','St Arvans','Monmouthshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1763','NP18','334700','190200','51.60637','-2.94305','Caerleon','Newport','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1764','NP19','333300','188300','51.58913','-2.9629','Alway','Newport','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1765','NP20','330400','188500','51.59057','-3.0048','Allt-yr-yn','Newport','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1766','NP22','313300','208800','51.7707','-3.25665','Tredegar','Blaenau Gwent','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1767','NP23','317500','210300','51.78482','-3.19615','Ebbw Vale','Blaenau Gwent','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1768','NP24','314500','203100','51.71964','-3.23786','New Tredegar','Caerphilly','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1769','NP25','350200','211900','51.80307','-2.72232','Monmouth','Monmouthshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1770','NP26','346200','188300','51.59051','-2.77669','Rogiet','Monmouthshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1771','NP4','327800','202800','51.71882','-3.04528','Trevethin','Torfaen','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1772','NP44','329000','195200','51.65064','-3.02637','Cwmbran','Torfaen','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1773','NP7','330500','215000','51.82884','-3.00864','Abergavenny','Monmouthshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1774','NP8','321100','218600','51.85996','-3.14586','Llangattock','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1775','NR1','624000','308400','52.62671','1.31012','Norwich','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1776','NR10','619100','320400','52.73642','1.24582','Hevingham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1777','NR11','620600','332200','52.84173','1.27596','Erpingham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1778','NR12','634200','323700','52.75971','1.47144','Smallburgh','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1779','NR13','635000','309700','52.63372','1.47327','Blofield','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1780','NR14','629100','301700','52.56445','1.3807','Alpington','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1781','NR15','621900','294900','52.50639','1.2701','Hempnall','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1782','NR16','607900','290900','52.476','1.06162','Old Buckenham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1783','NR17','603300','295100','52.51544','0.99655','Attleborough','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1784','NR18','610800','301600','52.57095','1.11105','Wymondham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1785','NR19','598000','312700','52.67542','0.92907','Scarning','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1786','NR2','622300','308700','52.6301','1.28524','Norwich','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1787','NR20','601300','318300','52.72449','0.98124','Swanton Morley','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1788','NR21','592100','330900','52.84097','0.85257','Fakenham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1789','NR22','592900','336800','52.89366','0.86793','Walsingham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1790','NR23','592100','342900','52.94872','0.85966','Wells-next-the-Sea','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1791','NR24','605400','333400','52.85851','1.05135','Briston','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1792','NR25','607400','340300','52.91969','1.08541','Holt','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1793','NR26','616100','342400','52.93511','1.21602','Sheringham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1794','NR27','621900','341500','52.92467','1.30157','Cromer','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1795','NR28','629100','330400','52.82203','1.40068','North Walsham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1796','NR29','645900','316800','52.6926','1.63932','Great Yarmouth','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1797','NR3','622900','310200','52.64332','1.29511','Norwich','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1798','NR30','652400','308900','52.61874','1.72926','Great Yarmouth','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1799','NR31','651400','304100','52.57614','1.71087','Great Yarmouth','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1800','NR32','653500','294500','52.48903','1.73448','Oulton Broad','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1801','NR33','652700','290600','52.45441','1.71976','Oulton Broad','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1802','NR34','643600','288300','52.43791','1.58442','Weston','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1803','NR35','633300','290400','52.46125','1.43463','Bungay','Suffolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1804','NR4','621000','306800','52.61357','1.26479','Norwich','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1805','NR5','618800','309700','52.6405','1.23427','Norwich','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1806','NR6','622000','312100','52.66074','1.2831','Norwich','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1807','NR7','625700','311100','52.65063','1.33521','Norwich','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1808','NR8','617100','313800','52.67798','1.21188','Taverham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1809','NR9','610400','308800','52.63574','1.10973','Marlingford','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1810','NW1','528800','183200','51.53252','-0.14286','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1811','NW10','521600','183800','51.53951','-0.24641','Brent','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1812','NW11','525000','188200','51.57831','-0.19584','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1813','NW2','523500','185900','51.55797','-0.21829','Brent','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1814','NW3','526800','185300','51.55184','-0.17093','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1815','NW4','523100','189100','51.58682','-0.22294','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1816','NW5','528800','185300','51.55139','-0.14209','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1817','NW6','525200','184100','51.54142','-0.19442','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1818','NW7','522200','192200','51.61488','-0.23484','Barnet','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1819','NW8','526800','183000','51.53117','-0.17175','Paddington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1820','NW9','520900','189000','51.5864','-0.25472','Brent','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1821','OL1','393000','405900','53.54944','-2.10566','','Oldham','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1822','OL10','385300','410500','53.59064','-2.22211','Heywood','Rochdale','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1823','OL11','388500','412200','53.606','-2.17382','','Rochdale','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1824','OL12','389100','415500','53.63567','-2.16487','','Rochdale','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1825','OL13','386600','422700','53.70034','-2.20299','Rawtenstall','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1826','OL14','393500','424200','53.71395','-2.0985','Todmorden','Calderdale','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1827','OL15','393400','416400','53.64384','-2.09985','','Rochdale','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1828','OL16','391300','412900','53.61234','-2.13152','','Rochdale','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1829','OL2','392800','408400','53.57191','-2.10874','Shaw','Oldham','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1830','OL3','399400','406300','53.55309','-2.00906','Saddleworth','Oldham','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1831','OL4','395200','405100','53.54228','-2.07244','','Oldham','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1832','OL5','397500','402300','53.51712','-2.03771','Mossley','Tameside','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1833','OL6','394300','399700','53.49372','-2.08593','Ashton-under-Lyne','Tameside','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1834','OL7','393000','399300','53.49011','-2.10552','Ashton-under-Lyne','Tameside','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1835','OL8','392300','403300','53.52606','-2.11616','','Oldham','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1836','OL9','390600','404800','53.53952','-2.14186','','Oldham','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1837','OX1','451100','205400','51.74451','-1.25978','Oxford','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1838','OX10','460500','190300','51.60781','-1.12625','Wallingford','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1839','OX11','452200','189300','51.59965','-1.24626','Didcot','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1840','OX12','439800','188600','51.59437','-1.42537','Wantage','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1841','OX13','445100','198000','51.67849','-1.34765','Marcham','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1842','OX14','450100','196800','51.66728','-1.2755','Culham','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1843','OX15','440700','237300','52.03219','-1.40666','Tadmarton','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1844','OX16','445200','240700','52.06241','-1.34061','Banbury','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1845','OX17','448700','241900','52.07291','-1.28938','Middleton Cheney','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1846','OX18','428200','207200','51.76232','-1.59134','Carterton','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1847','OX2','449900','207600','51.7644','-1.27685','Oxford','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1848','OX20','444200','217800','51.85659','-1.35814','Woodstock','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1849','OX25','454200','222800','51.90067','-1.21216','Chesterton','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1850','OX26','458400','222900','51.90114','-1.15109','Bicester','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1851','OX27','458600','226900','51.93709','-1.14751','Fringford','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1852','OX28','435400','209800','51.78529','-1.48675','Witney','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1853','OX29','439200','210800','51.79403','-1.43154','Eynsham','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1854','OX3','454200','207300','51.76131','-1.21458','Oxford','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1855','OX33','458900','207000','51.75813','-1.14653','Holton','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1856','OX39','475100','200800','51.70045','-0.91317','Chinnor','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1857','OX4','454200','203800','51.72984','-1.21513','Oxford','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1858','OX44','460100','200600','51.70046','-1.13025','Cuddesdon','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1859','OX49','469200','195100','51.64996','-0.99967','Watlington','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1860','OX5','449600','214800','51.82917','-1.28016','Kidlington','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1861','OX6','457300','223700','51.90845','-1.16695','Bicester','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1862','OX7','432500','223800','51.91135','-1.52747','Chadlington','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1863','OX8','437600','210300','51.78964','-1.4548','South Leigh','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1864','OX9','470300','204900','51.73794','-0.9818','Thame','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1865','PA1','248700','663900','55.84457','-4.41674','Paisley','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1866','PA10','240200','663000','55.83375','-4.55184','Kilbarchan','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1867','PA11','238400','665600','55.85649','-4.5821','Ranfurly','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1868','PA12','235600','658900','55.7954','-4.62273','Lochwinnoch','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1869','PA13','235600','669700','55.89235','-4.62927','Kilmacolm','Inverclyde','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1870','PA14','233600','673700','55.92757','-4.66368','Greenock','Inverclyde','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1871','PA15','228400','675600','55.94279','-4.74802','Greenock','Inverclyde','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1872','PA16','225400','675800','55.94351','-4.79613','Greenock','Inverclyde','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1873','PA17','219700','667300','55.86512','-4.88162','Skelmorlie','North Ayrshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1874','PA18','219500','670000','55.88928','-4.88661','Wemyss Bay','Inverclyde','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1875','PA19','223800','676900','55.9528','-4.82244','Greenock','Inverclyde','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1876','PA2','247600','662200','55.82896','-4.43334','Paisley','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1877','PA20','208600','664400','55.83482','-5.0567','Rothesay','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1878','PA21','197000','672400','55.90186','-5.24762','Tighnabruaich','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1879','PA22','203000','679800','55.97074','-5.1572','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1880','PA23','217000','677400','55.95474','-4.93154','Port Riddell','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1881','PA24','219600','699800','56.15675','-4.90504','Lochgoilhead','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1882','PA25','211500','706700','56.21553','-5.04017','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1883','PA26','218100','711100','56.25758','-4.9369','Cairndow','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1884','PA27','208500','700000','56.15422','-5.08365','Strachur','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1885','PA28','172100','621700','55.43603','-5.60305','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1886','PA29','182100','662300','55.80476','-5.47741','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1887','PA3','246800','664800','55.85205','-4.44757','Paisley','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1888','PA30','185100','685400','56.0133','-5.44799','Ardrishaig','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1889','PA31','184400','689800','56.05245','-5.46273','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1890','PA32','206700','705500','56.20284','-5.11658','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1891','PA33','211300','723900','56.36978','-5.05569','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1892','PA34','184100','728800','56.4021','-5.49931','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1893','PA35','201100','728300','56.40507','-5.22391','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1894','PA36','229600','739900','56.52032','-4.77019','Bridge of Orchy','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1895','PA37','191400','735800','56.46816','-5.38681','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1896','PA38','195300','749400','56.59186','-5.33433','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1897','PA4','250100','667200','55.87464','-4.39623','Renfrew','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1898','PA41','164800','648700','55.6747','-5.74115','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1899','PA42','136600','646400','55.63962','-6.18624','Port Ellen','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1900','PA43','131300','659700','55.7559','-6.28324','Bowmore','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1901','PA44','131000','664400','55.79785','-6.29265','Blackrock','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1902','PA45','139100','666300','55.81932','-6.1656','Ballygrant','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1903','PA46','142300','670900','55.86226','-6.11902','Port Askaig','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1904','PA47','117000','652400','55.68236','-6.50288','Portnahaven','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1905','PA48','124900','658100','55.73797','-6.38332','Port Charlotte','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1906','PA49','124600','663100','55.7826','-6.39313','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1907','PA5','242900','662600','55.83105','-4.50854','Johnstone','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1908','PA6','241400','666300','55.86377','-4.53462','','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1909','PA60','155300','672100','55.87979','-5.91287','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1910','PA61','138600','694500','56.07177','-6.20088','Scalasaig','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1911','PA62','162200','725200','56.35932','-5.85014','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1912','PA63','170700','727300','56.38234','-5.71469','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1913','PA64','173500','733400','56.43838','-5.67471','Lochdon','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1914','PA65','170400','737000','56.46916','-5.72805','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1915','PA66','130900','723700','56.32913','-6.35382','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1916','PA67','138300','721500','56.31356','-6.23228','Bunessan','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1917','PA68','144700','734800','56.43624','-6.14202','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1918','PA69','147600','728400','56.38044','-6.08894','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1919','PA7','243800','671300','55.90944','-4.49919','Bishopton','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1920','PA70','150900','726400','56.36426','-6.03373','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1921','PA71','154900','739200','56.48108','-5.98112','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1922','PA72','156200','743200','56.51761','-5.96381','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1923','PA73','142600','741700','56.49693','-6.18279','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1924','PA74','140000','745900','56.53313','-6.22911','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1925','PA75','147100','754300','56.61228','-6.12216','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1926','PA76','128500','724400','56.33403','-6.39324','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1927','PA77','99500','744300','56.49469','-6.8835','Crossapol','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1928','PA78','121300','757300','56.62454','-6.54449','','Argyll and Bute','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1929','PA8','246700','670300','55.9014','-4.45228','','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1930','PA9','240100','660300','55.80948','-4.55184','Howwood','Renfrewshire','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1931','PE1','519300','300300','52.58704','-0.23885','','Peterborough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1932','PE10','509500','321200','52.77693','-0.3765','Bourne','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1933','PE11','523600','324900','52.80714','-0.16616','Pinchbeck','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1934','PE12','536800','322600','52.78328','0.0286','Fleet','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1935','PE13','544600','310100','52.66895','0.13868','Wisbech','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1936','PE14','549600','306900','52.63884','0.21112','Emneth','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1937','PE15','541500','295200','52.53589','0.08649','March','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1938','PE16','539300','286000','52.45379','0.05022','Chatteris','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1939','PE19','518900','261900','52.24203','-0.2584','St Neots','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1940','PE2','517700','297300','52.56043','-0.26352','','Peterborough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1941','PE20','527600','338900','52.932','-0.10136','Swineshead','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1942','PE21','532800','343800','52.97477','-0.02203','Boston','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1943','PE22','537100','352100','53.04826','0.0455','Old Leake','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1944','PE23','539800','366000','53.17244','0.09181','Spilsby','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1945','PE24','551600','365600','53.16561','0.26804','Burgh Le Marsh','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1946','PE25','556200','364300','53.15261','0.33616','Skegness','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1947','PE26','528200','285600','52.45292','-0.1132','Ramsey','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1948','PE27','531100','272400','52.33361','-0.07572','St Ives','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1949','PE28','523500','274900','52.35784','-0.18629','The Stukeleys','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1950','PE29','524100','272200','52.33345','-0.17848','Huntingdon','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1951','PE3','516800','300300','52.58758','-0.27573','','Peterborough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1952','PE30','563200','320800','52.75978','0.41884','King\'s Lynn','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1953','PE31','572700','334000','52.87538','0.56647','Snettisham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1954','PE32','577400','318000','52.73016','0.62756','West Acre','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1955','PE33','567000','308500','52.64814','0.46886','Shouldham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1956','PE34','558000','316700','52.7245','0.33986','Wiggenhall St Germans','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1957','PE35','569200','328300','52.8253','0.51155','Sandringham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1958','PE36','568500','340600','52.936','0.50754','Old Hunstanton','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1959','PE37','582200','308600','52.64414','0.69336','Swaffham','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1960','PE38','561000','301800','52.58977','0.37698','Denver','Norfolk','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1961','PE4','517400','303100','52.61262','-0.26589','','Peterborough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1962','PE5','512200','299200','52.57867','-0.34398','Ailsworth','Peterborough','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1963','PE6','518000','307900','52.65562','-0.25531','Deeping St James','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1964','PE7','522200','295000','52.53877','-0.19801','Farcet','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1965','PE8','505700','293300','52.52694','-0.44176','Tansor','Northamptonshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1966','PE9','502800','307400','52.65422','-0.48012','Stamford','Lincolnshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1967','PH1','309000','726400','56.42113','-3.47537','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1968','PH10','316500','747100','56.60845','-3.36046','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1969','PH11','324300','750400','56.63942','-3.23438','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1970','PH12','329200','743200','56.57551','-3.15253','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1971','PH13','321700','739100','56.53749','-3.27335','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1972','PH14','326900','729600','56.45299','-3.18614','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1973','PH15','280900','748100','56.60974','-3.94063','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1974','PH16','289200','758700','56.70697','-3.81003','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1975','PH17','254100','757600','56.68745','-4.3823','Killichonan','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1976','PH18','284600','766300','56.7741','-3.88855','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1977','PH19','262800','784800','56.93428','-4.255','Dalwhinnie','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1978','PH2','313300','722500','56.38691','-3.40439','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1979','PH20','269300','797900','57.05377','-4.15504','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1980','PH21','277500','801500','57.08834','-4.02169','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1981','PH22','290900','813400','57.19857','-3.80587','Aviemore','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1982','PH23','291500','823300','57.28761','-3.80028','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1983','PH24','294500','819500','57.25419','-3.74891','Boat of Garten','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1984','PH25','300700','820200','57.26187','-3.64646','Nethy Bridge','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1985','PH26','303400','827700','57.3298','-3.60464','Grantown-on-Spey','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1986','PH3','294600','713500','56.30228','-3.70355','Auchterarder','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1987','PH30','241200','769700','56.79185','-4.6002','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1988','PH31','228500','781400','56.89234','-4.81575','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1989','PH32','237700','809100','57.14424','-4.68275','Fort Augustus','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1990','PH33','210100','774300','56.82148','-5.11207','Fort William','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1991','PH34','221900','785400','56.92574','-4.92676','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1992','PH35','222400','802100','57.07578','-4.93032','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1993','PH36','163500','765500','56.72124','-5.86584','Kentra','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1994','PH38','171500','778900','56.84536','-5.74736','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1995','PH39','166200','786700','56.91265','-5.84124','Arisaig','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1996','PH4','289600','709000','56.26072','-3.78244','Blackford','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1997','PH40','169900','792200','56.96381','-5.7856','','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1998','PH41','167300','796800','57.00374','-5.83251','Mallaig','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('1999','PH42','147900','786600','56.90217','-6.14094','Isle of Eigg','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2000','PH43','140200','799700','57.01529','-6.28049','Isle of Rum','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2001','PH44','127000','805200','57.05693','-6.50319','Isle of Canna','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2002','PH49','209500','758000','56.675','-5.10977','Glencoe','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2003','PH5','287000','716700','56.32927','-3.8277','Muthill','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2004','PH50','218600','762000','56.71451','-4.96427','Kinlochleven','Highland','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2005','PH6','276800','721700','56.37162','-3.99491','Comrie','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2006','PH7','287200','721600','56.37332','-3.82657','Crieff','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2007','PH8','301800','742300','56.56249','-3.59805','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2008','PH9','296300','752300','56.65112','-3.69152','','Perth and Kinross','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2009','PL1','246900','54600','50.37074','-4.15317','','Plymouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2010','PL10','242700','51900','50.34537','-4.21106','Rame','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2011','PL11','240000','55000','50.3725','-4.2503','Antony','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2012','PL12','240300','60200','50.41932','-4.2483','Saltash','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2013','PL13','224000','53800','50.35715','-4.47456','Looe','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2014','PL14','225100','65600','50.46351','-4.4646','Liskeard','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2015','PL15','230300','84200','50.63218','-4.39987','South Petherwin','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2016','PL16','239700','85400','50.64562','-4.26757','Lifton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2017','PL17','236600','71100','50.51625','-4.3051','Callington','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2018','PL18','242700','70800','50.51523','-4.21899','Calstock','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2019','PL19','247400','75200','50.55602','-4.15454','Tavistock','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2020','PL2','246300','56600','50.38856','-4.16242','','Plymouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2021','PL20','251100','69000','50.50125','-4.09986','Horrabridge','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2022','PL21','263700','55800','50.38566','-3.91748','Ivybridge','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2023','PL22','211600','59300','50.40273','-4.65146','Lostwithiel','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2024','PL23','212500','51900','50.33653','-4.63513','Fowey','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2025','PL24','207300','54100','50.35461','-4.70925','St Blaise','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2026','PL25','202300','52700','50.34038','-4.77872','St Austell','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2027','PL26','199000','53000','50.34196','-4.8252','St Mewan','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2028','PL27','196300','73200','50.52248','-4.87408','St Breock','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2029','PL28','189800','74700','50.53366','-4.96651','Padstow','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2030','PL29','199700','80100','50.58564','-4.82988','St Endellion','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2031','PL3','248900','56400','50.38744','-4.12578','','Plymouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2032','PL30','206600','70300','50.49992','-4.72743','Helland','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2033','PL31','206900','66800','50.46858','-4.7214','Bodmin','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2034','PL32','211900','84900','50.63282','-4.66015','Camelford','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2035','PL33','206900','83800','50.6213','-4.73021','St Teath','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2036','PL34','206200','88100','50.6597','-4.74234','Tintagel','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2037','PL35','210400','90700','50.68444','-4.68431','Forrabury and Minster','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2038','PL4','248700','55000','50.3748','-4.12803','','Plymouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2039','PL5','246100','59000','50.41008','-4.16621','','Plymouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2040','PL6','249700','59700','50.4173','-4.11586','','Plymouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2041','PL7','254700','56700','50.3916','-4.04436','Plympton','Plymouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2042','PL8','256800','50400','50.33548','-4.01243','Yealmpton','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2043','PL9','251500','52600','50.35394','-4.08773','Plymstock','Plymouth','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2044','PO1','464300','100400','50.79903','-1.08749','','Portsmouth','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2045','PO10','475400','106300','50.85074','-0.92878','Hermitage','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2046','PO11','472200','99700','50.7918','-0.97553','South Hayling','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2047','PO12','460500','100200','50.79764','-1.14144','Gosport','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2048','PO13','457900','101800','50.81229','-1.17808','Gosport','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2049','PO14','455000','104500','50.83685','-1.21884','','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2050','PO15','455000','107300','50.86203','-1.21842','','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2051','PO16','459200','106000','50.84993','-1.15895','','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2052','PO17','458500','110400','50.88957','-1.16819','Wickham','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2053','PO18','483400','107900','50.86403','-0.81478','Funtington','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2054','PO19','486100','105000','50.83756','-0.7771','Chichester','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2055','PO2','465000','102300','50.81603','-1.07722','','Portsmouth','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2056','PO20','485600','98900','50.78278','-0.78563','Sidlesham','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2057','PO21','491900','99100','50.78362','-0.69622','Aldwick','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2058','PO22','495300','100800','50.79835','-0.64756','Felpham','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2059','PO3','466300','102300','50.81589','-1.05877','','Portsmouth','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2060','PO30','448500','88200','50.69085','-1.3133','Newport','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2061','PO31','449000','95100','50.75286','-1.30531','Cowes','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2062','PO32','450800','94900','50.75091','-1.27982','Newport','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2063','PO33','458600','91700','50.72139','-1.16976','Newport','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2064','PO34','462700','91100','50.71557','-1.11178','Nettlestone','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2065','PO35','464700','87900','50.68657','-1.08401','Bembridge','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2066','PO36','459200','84600','50.65748','-1.1624','Sandown','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2067','PO37','458200','81700','50.63151','-1.177','Shanklin','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2068','PO38','453700','78600','50.60406','-1.24108','Ventnor','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2069','PO39','432600','86900','50.68027','-1.53853','Totland','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2070','PO4','466100','99400','50.78983','-1.06213','','Portsmouth','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2071','PO40','433900','87100','50.68199','-1.52011','Freshwater','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2072','PO41','436900','89100','50.69979','-1.47744','Yarmouth','Isle of Wight','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2073','PO5','464500','99200','50.78821','-1.08486','','Portsmouth','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2074','PO6','465600','105600','50.84564','-1.06811','','Portsmouth','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2075','PO7','467700','109700','50.88227','-1.03753','Southwick','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2076','PO8','469400','112900','50.91084','-1.01275','Horndean','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2077','PO9','471600','107600','50.86291','-0.9825','Havant','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2078','PR1','353800','429300','53.75779','-2.70082','Preston','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2079','PR2','353400','431500','53.77753','-2.70722','Preston','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2080','PR25','354300','422200','53.69402','-2.69219','Leyland','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2081','PR26','351100','421500','53.68743','-2.74054','Leyland','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2082','PR3','352900','441600','53.86826','-2.71636','Claughton','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2083','PR4','345100','428900','53.75335','-2.83271','Freckleton','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2084','PR5','356700','426300','53.73107','-2.65641','Bamber Bridge','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2085','PR6','359700','419200','53.66749','-2.61001','Chorley','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2086','PR7','356900','416700','53.6448','-2.65205','Chorley','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2087','PR8','333200','414900','53.62613','-3.01016','Southport','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2088','PR9','336000','418600','53.65974','-2.96859','Southport','Sefton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2089','RG1','471600','173300','51.45366','-0.96942','','Reading','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2090','RG10','479000','176400','51.48055','-0.86224','Twyford','Wokingham','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2091','RG12','487000','168300','51.40655','-0.74904','Bracknell','Bracknell Forest','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2092','RG14','447200','167000','51.39957','-1.32143','Newbury','West Berkshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2093','RG17','435600','171400','51.43998','-1.48775','Hungerford','West Berkshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2094','RG18','452700','170800','51.43326','-1.2418','Bucklebury','West Berkshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2095','RG19','452800','166400','51.39368','-1.24102','Thatcham','West Berkshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2096','RG2','472700','170300','51.42655','-0.95421','','Reading','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2097','RG20','446200','167400','51.40325','-1.33575','Newbury','West Berkshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2098','RG21','463500','152300','51.2658','-1.08974','Basingstoke','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2099','RG22','461300','150500','51.24986','-1.12159','Basingstoke','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2100','RG23','459600','151700','51.26083','-1.14574','Basingstoke','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2101','RG24','464800','154000','51.28094','-1.0708','Basingstoke','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2102','RG25','458500','148000','51.22767','-1.16211','Dummer','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2103','RG26','461400','161600','51.34966','-1.11824','Pamber','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2104','RG27','473800','156200','51.29963','-0.94132','Hook','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2105','RG28','446500','148500','51.23327','-1.33391','Whitchurch','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2106','RG29','473600','150400','51.24751','-0.94538','Odiham','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2107','RG30','468600','173000','51.45133','-1.01265','','Reading','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2108','RG31','466600','173500','51.45607','-1.04134','','Reading','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2109','RG4','471600','176300','51.48063','-0.96882','','Reading','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2110','RG40','481100','167400','51.39933','-0.83406','','Wokingham','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2111','RG41','479500','169200','51.41574','-0.85666','','Wokingham','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2112','RG42','486600','170600','51.42729','-0.75423','Warfield','Bracknell Forest','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2113','RG45','483500','164700','51.37471','-0.8002','Wokingham Without','Wokingham','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2114','RG5','476000','173200','51.45219','-0.90612','Woodley','Wokingham','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2115','RG6','474300','171700','51.43893','-0.9309','Earley','Wokingham','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2116','RG7','464200','167000','51.3979','-1.07706','Sulhamstead','West Berkshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2117','RG8','462100','178900','51.50513','-1.10516','Whitchurch-on-Thames','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2118','RG9','474700','183400','51.54407','-0.92267','Rotherfield Greys','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2119','RH1','528700','150300','51.23683','-0.15623','Reigate and Banstead','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2120','RH10','528900','137000','51.11724','-0.15813','Crawley','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2121','RH11','525600','136200','51.11079','-0.20554','Crawley','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2122','RH12','516800','132100','51.07579','-0.33254','Horsham','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2123','RH13','517400','127800','51.03701','-0.32537','Southwater','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2124','RH14','506400','127000','51.03197','-0.48245','Wisborough Green','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2125','RH15','531100','119200','50.95675','-0.13316','Burgess Hill','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2126','RH16','533500','124300','51.00204','-0.09713','Haywards Heath','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2127','RH17','532200','126400','51.02122','-0.11488','Cuckfield Rural','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2128','RH18','542200','135100','51.09702','0.03104','Forest Row','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2129','RH19','539100','138100','51.12474','-0.01205','East Grinstead','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2130','RH2','525500','150000','51.23485','-0.20215','Reigate and Banstead','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2131','RH20','507500','116400','50.93647','-0.4699','Storrington','West Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2132','RH3','520100','149600','51.23242','-0.2796','Brockham','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2133','RH4','516300','149100','51.22871','-0.33418','Dorking','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2134','RH5','515900','145300','51.19463','-0.34113','Capel','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2135','RH6','528500','143000','51.17126','-0.1617','Horley','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2136','RH7','538700','143600','51.17427','-0.01564','Lingfield','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2137','RH8','539800','152200','51.2513','0.00344','Limpsfield','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2138','RH9','534800','150300','51.23543','-0.06889','Godstone','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2139','RM1','551300','189300','51.58175','0.18395','Romford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2140','RM10','549700','185100','51.54443','0.15909','Barking','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2141','RM11','553800','188000','51.56939','0.21944','Romford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2142','RM12','553100','186100','51.55251','0.20852','Romford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2143','RM13','552300','182900','51.52397','0.19561','Romford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2144','RM14','557000','186600','51.55593','0.26496','Romford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2145','RM15','558100','181300','51.508','0.27843','','Thurrock','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2146','RM16','562500','179600','51.49148','0.341','','Thurrock','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2147','RM17','561800','178200','51.4791','0.33029','','Thurrock','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2148','RM18','565100','176900','51.46646','0.37716','','Thurrock','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2149','RM19','556100','178400','51.4825','0.24835','','Thurrock','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2150','RM2','552600','189500','51.5832','0.20279','Romford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2151','RM20','558900','178000','51.47812','0.28847','','Thurrock','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2152','RM3','554200','191600','51.60163','0.22679','Romford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2153','RM4','549500','194900','51.63255','0.16038','Stapleford Abbotts','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2154','RM5','550000','191200','51.59917','0.16602','Romford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2155','RM6','547800','188500','51.57549','0.13313','Barking','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2156','RM7','550400','188500','51.5748','0.17063','Romford','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2157','RM8','547800','186400','51.55662','0.13225','Barking','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2158','RM9','548100','184600','51.54036','0.13582','Barking','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2159','S1','435400','387200','53.3802','-1.46777','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2160','S10','432100','386800','53.37681','-1.51742','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2161','S11','432900','385100','53.36148','-1.50557','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2162','S12','439600','383700','53.34844','-1.40507','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2163','S13','441100','385500','53.36451','-1.3823','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2164','S14','437100','383400','53.34592','-1.44266','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2165','S17','431600','380600','53.32111','-1.52556','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2166','S18','435200','378200','53.29931','-1.47178','Dronfield','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2167','S2','436800','386000','53.36932','-1.44686','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2168','S20','443200','382200','53.33467','-1.35119','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2169','S21','444100','379700','53.31213','-1.33802','Eckington','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2170','S25','452300','386100','53.36891','-1.21389','Dinnington','Rotherham','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2171','S26','447500','384700','53.35678','-1.28624','Todwick','Rotherham','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2172','S3','435100','388000','53.38741','-1.47219','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2173','S32','424100','377600','53.29454','-1.63839','Grindleford','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2174','S33','418600','382800','53.3415','-1.72061','Aston','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2175','S35','433500','395800','53.45763','-1.49542','Ecclesfield','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2176','S36','425700','400800','53.50302','-1.61249','Hunshelf','Barnsley','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2177','S4','436600','389300','53.399','-1.44949','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2178','S40','437000','370900','53.23356','-1.44562','Chesterfield','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2179','S41','438200','372400','53.24696','-1.42746','Chesterfield','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2180','S42','438600','367200','53.20019','-1.42209','Wingerworth','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2181','S43','443900','374700','53.2672','-1.34172','Staveley','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2182','S44','445900','370000','53.22478','-1.31241','Bolsover','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2183','S45','438700','363400','53.16602','-1.42106','Clay Cross','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2184','S5','435800','391800','53.42152','-1.46124','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2185','S6','432600','389600','53.40195','-1.50962','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2186','S60','443400','391000','53.41376','-1.34698','','Rotherham','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2187','S61','440300','394300','53.44367','-1.3932','','Rotherham','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2188','S62','443400','396700','53.465','-1.34619','Rawmarsh','Rotherham','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2189','S63','444500','402600','53.51794','-1.32879','','Barnsley','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2190','S64','446500','399600','53.4908','-1.29907','','Rotherham','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2191','S65','445200','393400','53.43518','-1.31955','','Rotherham','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2192','S66','450400','391800','53.42033','-1.24153','Bramley','Rotherham','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2193','S7','434000','384300','53.35422','-1.48913','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2194','S70','434900','405100','53.54114','-1.4733','','Barnsley','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2195','S71','436000','408700','53.57342','-1.45629','','Barnsley','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2196','S72','440300','409300','53.57851','-1.39127','Brierley','Barnsley','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2197','S73','440200','403300','53.52458','-1.39355','Darfield','Barnsley','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2198','S74','437200','400600','53.50053','-1.43913','Hoyland','Barnsley','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2199','S75','431800','407400','53.56201','-1.51985','','Barnsley','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2200','S8','434900','382700','53.33978','-1.47578','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2201','S80','456700','377600','53.29205','-1.14928','Clumber and Hardwick','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2202','S81','458500','382700','53.3377','-1.12134','Carlton in Lindrick','Nottinghamshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2203','S9','438800','389200','53.39794','-1.41641','Norton','Sheffield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2204','SA1','265800','193900','51.62742','-3.93905','Landore','Swansea','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2205','SA10','275700','200300','51.68722','-3.79836','Blaenhonddan','Neath Port Talbot','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2206','SA11','278200','198800','51.67428','-3.76168','Tonna','Neath Port Talbot','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2207','SA12','275800','191400','51.60725','-3.79375','Baglan','Neath Port Talbot','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2208','SA13','280600','191100','51.60559','-3.72436','Bryn','Neath Port Talbot','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2209','SA14','254500','205900','51.73245','-4.10721','Llannon','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2210','SA15','250300','202400','51.69989','-4.16648','Llanelli Rural','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2211','SA16','244100','201400','51.68922','-4.25569','Cefn Sidan','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2212','SA17','242300','209100','51.7579','-4.2852','Kidwelly','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2213','SA18','265000','212900','51.79798','-3.95796','Betws','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2214','SA19','266200','230100','51.95284','-3.94723','Talley','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2215','SA2','262000','193200','51.62021','-3.99364','Sketty','Swansea','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2216','SA20','277400','236200','52.01025','-3.78651','Llandovery','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2217','SA3','257900','188800','51.57965','-4.05105','Bishopston','Swansea','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2218','SA31','241100','220100','51.85639','-4.30762','Carmarthen','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2219','SA32','250600','223100','51.88597','-4.17106','Llanegwad','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2220','SA33','232300','219700','51.85022','-4.4351','Meidrim','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2221','SA34','219700','220400','51.85258','-4.61822','Llanfallteg','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2222','SA35','224200','233700','51.97349','-4.55974','Clydau','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2223','SA36','220900','232000','51.95717','-4.60684','Crymych','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2224','SA37','222100','238600','52.01684','-4.59282','Boncath','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2225','SA38','230400','240900','52.0401','-4.47312','Newcastle Emlyn','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2226','SA39','246200','238100','52.01955','-4.24166','Llanfihangel-Ar-Arth','Carmarthenshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2227','SA4','258400','198900','51.67054','-4.04792','Gorseinon','Swansea','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2228','SA40','251100','245100','52.08378','-4.17335','Llanwenog','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2229','SA41','214200','236700','51.99718','-4.70679','Eglwyswrw','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2230','SA42','204300','239100','52.01534','-4.8522','Newport','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2231','SA43','219900','246400','52.08619','-4.62896','Llangoedmor','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2232','SA44','237500','245800','52.08625','-4.37201','Troedyraur','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2233','SA45','238900','259300','52.20794','-4.358','New Quay','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2234','SA46','246400','261800','52.23254','-4.24945','Aberaeron','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2235','SA47','243100','257200','52.19028','-4.29561','Llanarth','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2236','SA48','255600','251600','52.14338','-4.11048','Llangybi','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2237','SA5','263800','196300','51.64851','-3.96886','Penderry','Swansea','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2238','SA6','267200','199200','51.67539','-3.92084','Morriston','Swansea','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2239','SA61','195000','215400','51.79916','-4.97345','Haverfordwest','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2240','SA62','189000','220300','51.84093','-5.06333','Nolton','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2241','SA63','203600','223400','51.87409','-4.85342','Wiston','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2242','SA64','193300','238000','52.00147','-5.01162','Pencaer','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2243','SA65','196200','236400','51.98818','-4.96848','Fishguard','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2244','SA66','211200','223900','51.88121','-4.74342','Maenclochog','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2245','SA67','211600','212800','51.78165','-4.73157','Narberth','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2246','SA68','209000','207000','51.72867','-4.76603','Jeffreyston','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2247','SA69','213100','204800','51.71029','-4.70555','Saundersfoot','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2248','SA7','269300','197600','51.6615','-3.88989','Llansamlet','Swansea','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2249','SA70','210700','200600','51.67176','-4.73797','Penally','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2250','SA71','197500','200600','51.66716','-4.92863','Pembroke','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2251','SA72','197200','203300','51.6913','-4.93453','Pembroke Dock','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2252','SA73','192000','206300','51.71634','-5.01146','Milford Haven','Pembrokeshire','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2253','SA8','272400','204200','51.72153','-3.8475','Pontardawe','Neath Port Talbot','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2254','SA9','278100','210700','51.78122','-3.76729','Ystradgynlais','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2255','SE1','532600','179500','51.49838','-0.08949','Camberwell','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2256','SE10','538800','177800','51.48162','-0.00089','Greenwich','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2257','SE11','531300','178400','51.4888','-0.10862','Lambeth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2258','SE12','540700','173700','51.4443','0.02483','Greenwich','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2259','SE13','538300','175200','51.45837','-0.0091','Lewisham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2260','SE14','536000','177000','51.47511','-0.0415','Lewisham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2261','SE15','534400','176600','51.47189','-0.06468','Camberwell','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2262','SE16','535200','179300','51.49597','-0.05213','Camberwell','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2263','SE17','532400','178300','51.48764','-0.09282','Camberwell','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2264','SE18','544000','178200','51.48391','0.07412','Eltham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2265','SE19','533200','170500','51.41735','-0.08424','Croydon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2266','SE2','547000','178900','51.48943','0.11759','Eltham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2267','SE20','535100','169900','51.41151','-0.05716','Bromley','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2268','SE21','533000','172800','51.43807','-0.08626','Camberwell','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2269','SE22','534000','174600','51.45401','-0.07119','Camberwell','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2270','SE23','535600','173100','51.44015','-0.04875','Lewisham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2271','SE24','532100','174600','51.45446','-0.09853','Camberwell','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2272','SE25','533900','168300','51.39742','-0.07501','Croydon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2273','SE26','535300','171600','51.42674','-0.05364','Lewisham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2274','SE27','532000','171900','51.43022','-0.10097','Lambeth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2275','SE28','546300','180300','51.50219','0.10809','Eltham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2276','SE3','540300','176400','51.46866','0.02015','Greenwich','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2277','SE4','536600','175400','51.46058','-0.03348','Lewisham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2278','SE5','532600','176700','51.47322','-0.09055','Camberwell','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2279','SE6','538000','172900','51.43777','-0.01432','Lewisham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2280','SE7','541300','178100','51.48369','0.03521','Greenwich','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2281','SE8','536900','177700','51.48118','-0.02828','Lewisham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2282','SE9','542900','173800','51.44465','0.05651','Eltham','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2283','SG1','524200','225200','51.91103','-0.19417','Stevenage','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2284','SG10','542700','218300','51.8446','0.07178','Much Hadham','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2285','SG11','539900','222300','51.88125','0.03278','Standon','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2286','SG12','536700','214700','51.81375','-0.01669','Ware','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2287','SG13','533200','211600','51.78673','-0.06863','Hertford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2288','SG14','531600','213800','51.80688','-0.09098','Hertford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2289','SG15','519300','236400','52.01276','-0.26149','Arlesey','Central Bedfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2290','SG16','516900','236600','52.01507','-0.29638','Henlow','Central Bedfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2291','SG17','514500','238700','52.03445','-0.33063','Shefford','Central Bedfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2292','SG18','518800','244100','52.08208','-0.26609','Biggleswade','Central Bedfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2293','SG19','520400','250500','52.13925','-0.24049','Everton','Central Bedfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2294','SG2','526200','223600','51.8962','-0.16569','Stevenage','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2295','SG3','525300','219600','51.86046','-0.18022','Knebworth','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2296','SG4','519700','226200','51.921','-0.25922','Ippollitts','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2297','SG5','517700','231300','51.96727','-0.28654','Ickleford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2298','SG6','522200','232700','51.97888','-0.22057','Hitchin','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2299','SG7','525300','235500','52.00335','-0.17443','Bygrave','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2300','SG8','536200','242500','52.06369','-0.01293','Melbourn','Cambridgeshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2301','SG9','536900','229400','51.9458','-0.00796','Buntingford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2302','SK1','390000','390100','53.40736','-2.15044','','Stockport','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2303','SK10','391400','375700','53.27793','-2.12899','Macclesfield','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2304','SK11','390500','372200','53.24646','-2.14238','Macclesfield','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2305','SK12','393900','383900','53.35169','-2.09165','Poynton','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2306','SK13','402400','394600','53.4479','-1.96386','Glossop','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2307','SK14','396400','395000','53.45149','-2.05422','Ashton-under-Lyne','Tameside','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2308','SK15','396900','398900','53.48655','-2.04672','','Tameside','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2309','SK16','394600','397500','53.47395','-2.08137','Ashton-under-Lyne','Tameside','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2310','SK17','408100','371900','53.24378','-1.87861','King Sterndale','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2311','SK2','391200','388700','53.3948','-2.13235','','Stockport','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2312','SK22','401000','386200','53.3724','-1.98497','New Mills','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2313','SK23','403400','381200','53.32744','-1.94895','Chapel-en-le-Frith','Derbyshire','East Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2314','SK3','388700','389100','53.39835','-2.16996','','Stockport','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2315','SK4','388100','391400','53.41901','-2.17908','','Stockport','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2316','SK5','389900','393100','53.43433','-2.15204','','Stockport','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2317','SK6','394700','389900','53.40563','-2.07973','','Stockport','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2318','SK7','390600','385900','53.36962','-2.14129','Cheadle','Stockport','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2319','SK8','386200','387000','53.37941','-2.20748','','Stockport','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2320','SK9','384700','381200','53.32723','-2.22975','Macclesfield','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2321','SL0','503100','181700','51.52431','-0.51371','Iver','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2322','SL1','495800','180800','51.51751','-0.61916','Colnbrook with Poyle','Slough','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2323','SL2','496900','182600','51.5335','-0.60281','Colnbrook with Poyle','Slough','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2324','SL3','500500','178900','51.49961','-0.55198','Colnbrook with Poyle','Slough','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2325','SL4','495500','176100','51.4753','-0.62475','Windsor','Windsor and Maidenhead','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2326','SL5','493100','168200','51.40468','-0.66138','Sunninghill','Windsor and Maidenhead','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2327','SL6','488400','181200','51.52231','-0.72569','Maidenhead','Windsor and Maidenhead','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2328','SL7','484800','186900','51.57411','-0.7762','Marlow','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2329','SL8','489600','187400','51.57786','-0.70682','Wooburn','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2330','SL9','500100','189700','51.59677','-0.55467','Chalfont St Peter','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2331','SM1','525900','164600','51.36599','-0.19127','Sutton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2332','SM2','525600','163100','51.35258','-0.19611','Sutton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2333','SM3','524400','165000','51.36992','-0.21267','Sutton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2334','SM4','525300','167500','51.39219','-0.19886','Merton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2335','SM5','527600','164800','51.36741','-0.16679','Sutton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2336','SM6','529300','164000','51.35984','-0.14267','Sutton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2337','SM7','525400','159800','51.32296','-0.20014','Reigate and Banstead','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2338','SN1','415700','184300','51.55689','-1.77351','','Swindon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2339','SN10','400900','159700','51.33589','-1.98708','Roundway','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2340','SN11','400100','171200','51.43931','-1.99856','Calne','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2341','SN12','390500','163700','51.37178','-2.13649','Melksham','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2342','SN13','385400','169500','51.42383','-2.21001','Corsham','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2343','SN14','386500','175200','51.47511','-2.1944','Yatton Keynell','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2344','SN15','394500','174900','51.47255','-2.0792','Bremhill','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2345','SN16','393800','188300','51.59304','-2.08951','Malmesbury','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2346','SN2','415100','186800','51.57939','-1.78206','','Swindon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2347','SN25','414100','188100','51.5911','-1.79644','Haydon Wick','Swindon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2348','SN26','415000','190300','51.61086','-1.78335','Blunsdon St Andrew','Swindon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2349','SN3','417800','184800','51.56132','-1.74319','','Swindon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2350','SN4','412500','181400','51.53089','-1.81978','Wroughton','Swindon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2351','SN5','411300','185200','51.56509','-1.83696','','Swindon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2352','SN6','417900','191400','51.62067','-1.74141','Stanton Fitzwarren','Swindon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2353','SN7','430200','194600','51.64892','-1.56345','Shellingford','Oxfordshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2354','SN8','421900','167700','51.40741','-1.6851','Savernake','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2355','SN9','414900','158400','51.324','-1.78614','Manningford','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2356','SO14','442500','112300','50.90805','-1.39546','','Southampton','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2357','SO15','440500','113200','50.91629','-1.42381','','Southampton','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2358','SO16','440000','115300','50.93521','-1.43069','','Southampton','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2359','SO17','442600','114300','50.92603','-1.3938','','Southampton','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2360','SO18','445000','114100','50.92405','-1.35968','','Southampton','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2361','SO19','445400','111700','50.90244','-1.35429','','Southampton','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2362','SO20','434700','135100','51.11361','-1.50422','Longstock','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2363','SO21','448100','130900','51.07488','-1.31334','Winchester','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2364','SO22','446800','129800','51.06509','-1.33204','Winchester','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2365','SO23','448500','130100','51.06765','-1.30774','Winchester','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2366','SO24','459800','132000','51.08367','-1.14615','Bishops Sutton','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2367','SO30','448800','113600','50.91924','-1.30568','Hedge End','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2368','SO31','449600','108000','50.86882','-1.29506','Locks Heath','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2369','SO32','455600','116800','50.9474','-1.20845','Bishops Waltham','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2370','SO40','435100','113000','50.91484','-1.50065','Totton','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2371','SO41','430700','95200','50.75502','-1.56473','Lymington','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2372','SO42','432800','101300','50.80976','-1.53442','Denny Lodge','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2373','SO43','429300','109900','50.88729','-1.58341','Lyndhurst','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2374','SO45','442700','105600','50.84778','-1.3934','Hythe','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2375','SO50','446400','119100','50.9689','-1.33912','Eastleigh','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2376','SO51','434800','121800','50.994','-1.50407','Romsey','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2377','SO52','439300','119900','50.97663','-1.44015','North Baddesley','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2378','SO53','443500','120800','50.98442','-1.38022','Eastleigh','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2379','SP1','414800','130600','51.074','-1.78873','Salisbury','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2380','SP10','436100','145900','51.21065','-1.48314','Andover','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2381','SP11','434000','147700','51.22696','-1.51303','Charlton','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2382','SP2','412300','130600','51.07406','-1.82441','Salisbury','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2383','SP3','399600','133600','51.10117','-2.00571','Dinton','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2384','SP4','416500','140700','51.16479','-1.764','Amesbury','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2385','SP5','416000','124900','51.02271','-1.77185','Downton','Wiltshire','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2386','SP6','414000','115200','50.93553','-1.80074','Fordingbridge','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2387','SP7','387200','122800','51.0039','-2.18245','Shaftesbury','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2388','SP8','379700','126500','51.03696','-2.28956','Gillingham','Dorset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2389','SP9','423700','148000','51.23018','-1.66053','South Tidworth','Hampshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2390','SR1','439800','557100','54.90695','-1.37919','','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2391','SR2','440000','554900','54.88716','-1.37638','','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2392','SR3','437500','553800','54.87747','-1.41549','Houghton-le-Spring','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2393','SR4','436900','556400','54.90088','-1.42451','Houghton-le-Spring','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2394','SR5','436900','558900','54.92334','-1.42419','Castletown','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2395','SR6','439800','560200','54.9348','-1.37876','','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2396','SR7','441000','548600','54.83046','-1.36168','Dalton-le-Dale','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2397','SR8','442800','541500','54.7665','-1.33471','Peterlee','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2398','SR9','440100','556600','54.90243','-1.37458','','Sunderland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2399','SS0','586600','186500','51.54602','0.69146','','Southend-on-Sea','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2400','SS1','589500','185600','51.53697','0.73275','','Southend-on-Sea','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2401','SS11','575700','193800','51.6151','0.53807','Wickford','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2402','SS12','574600','192700','51.60556','0.52164','Wickford','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2403','SS13','573900','189200','51.57433','0.50981','Basildon','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2404','SS14','571500','189200','51.57507','0.47521','Basildon','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2405','SS15','568500','189300','51.57687','0.432','Basildon','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2406','SS16','570100','187700','51.56201','0.4543','Basildon','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2407','SS17','569300','183100','51.52093','0.44055','Corringham','Thurrock','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2408','SS2','588400','187000','51.54991','0.71766','','Southend-on-Sea','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2409','SS3','593600','186400','51.54276','0.79224','','Southend-on-Sea','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2410','SS4','588000','191900','51.59406','0.71452','Rochford','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2411','SS5','583500','193200','51.60722','0.6503','Hockley','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2412','SS6','580700','190900','51.58746','0.60872','Rayleigh','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2413','SS7','578800','188000','51.56202','0.57984','Canvey Island','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2414','SS8','579700','183600','51.5222','0.59057','Canvey Island','Essex','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2415','SS9','583900','187300','51.55409','0.65298','','Southend-on-Sea','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2416','ST1','388500','347700','53.02616','-2.17148','','Stoke-on-Trent','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2417','ST10','402500','343600','52.98942','-1.96275','Cheadle','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2418','ST11','395600','341100','52.96693','-2.06552','Forsbrook','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2419','ST12','388500','339000','52.94795','-2.17117','Barlaston','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2420','ST13','398800','356000','53.1009','-2.01793','Leek','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2421','ST14','408900','334000','52.90304','-1.86767','Uttoxeter','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2422','ST15','390100','333700','52.90033','-2.14719','Stone','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2423','ST16','392000','324000','52.81315','-2.11871','Stafford','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2424','ST17','393300','321300','52.7889','-2.09936','Stafford','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2425','ST18','394500','324100','52.81408','-2.08161','Hopton','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2426','ST19','390100','312800','52.71243','-2.14656','Penkridge','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2427','ST2','390900','347800','53.02711','-2.1357','','Stoke-on-Trent','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2428','ST20','382300','322400','52.79854','-2.26255','Gnosall','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2429','ST21','382600','330100','52.86777','-2.25851','Eccleshall','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2430','ST3','391800','342600','52.98037','-2.12214','','Stoke-on-Trent','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2431','ST4','387700','344200','52.99468','-2.18328','','Stoke-on-Trent','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2432','ST5','384100','346500','53.01526','-2.23703','Newcastle-under-Lyme','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2433','ST6','387300','351200','53.0576','-2.18951','','Stoke-on-Trent','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2434','ST7','382200','354600','53.08802','-2.2658','Kidsgrove','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2435','ST8','388800','357600','53.11517','-2.16735','Biddulph','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2436','ST9','393400','350400','53.05052','-2.09847','Bagnall','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2437','SW1','529200','179100','51.49558','-0.1386','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2438','SW10','526300','177700','51.48365','-0.18086','Kensington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2439','SW11','527500','175800','51.4663','-0.16427','Wandsworth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2440','SW12','528700','173500','51.44536','-0.14784','Wandsworth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2441','SW13','521900','176600','51.47473','-0.24458','Richmond','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2442','SW14','520500','175500','51.46514','-0.26511','Richmond','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2443','SW15','523300','174700','51.45734','-0.22509','Wandsworth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2444','SW16','530200','170900','51.42165','-0.12722','Lambeth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2445','SW17','527700','171800','51.4303','-0.16283','Wandsworth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2446','SW18','525800','173900','51.4496','-0.18941','Wandsworth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2447','SW19','524900','170900','51.42284','-0.20341','Merton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2448','SW1A','529700','179900','51.50265','-0.13111','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2449','SW1E','529200','179300','51.49737','-0.13853','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2450','SW1H','529600','179400','51.49818','-0.13273','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2451','SW1P','529600','179100','51.49548','-0.13284','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2452','SW1V','529300','178500','51.49016','-0.13738','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2453','SW1W','528600','178800','51.49302','-0.14735','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2454','SW1X','528200','179300','51.4976','-0.15293','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2455','SW1Y','529500','180200','51.50539','-0.13388','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2456','SW2','530700','174000','51.44939','-0.11889','Lambeth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2457','SW20','523400','169500','51.41058','-0.22547','Merton','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2458','SW3','527400','178400','51.48969','-0.16477','Kensington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2459','SW4','529500','175200','51.46045','-0.13571','Lambeth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2460','SW5','525800','178400','51.49005','-0.18781','Kensington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2461','SW6','525000','176900','51.47675','-0.19986','Hammersmith','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2462','SW7','526700','179100','51.49614','-0.1746','Kensington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2463','SW8','529800','176900','51.47566','-0.13077','Lambeth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2464','SW9','531100','176200','51.46907','-0.11232','Lambeth','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2465','SY1','350000','314200','52.7228','-2.74039','Shrewsbury','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2466','SY10','324500','327100','52.83579','-3.12089','Oswestry Rural','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2467','SY11','330800','330400','52.8663','-3.02808','Oswestry','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2468','SY12','339900','334400','52.90335','-2.89364','Ellesmere','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2469','SY13','353700','339600','52.95147','-2.68921','Whitchurch Rural','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2470','SY14','348900','348300','53.02924','-2.76203','Malpas','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2471','SY15','323400','295900','52.55518','-3.12995','Montgomery','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2472','SY16','311000','292200','52.52004','-3.31183','Llanllwchaiarn','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2473','SY17','300600','292000','52.51644','-3.46501','Caersws','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2474','SY18','294800','283700','52.44076','-3.54784','Llanidloes','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2475','SY19','290800','298600','52.57388','-3.61156','Llanbrynmair','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2476','SY2','350800','312400','52.70669','-2.72827','Shrewsbury','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2477','SY20','276900','303400','52.61405','-3.81838','Glantwymyn','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2478','SY21','318500','307400','52.65784','-3.20505','Castle Caereinion','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2479','SY22','320000','318300','52.75604','-3.18553','Llansantffraid','Powys','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2480','SY23','260400','278000','52.38184','-4.05129','Llanfarian','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2481','SY24','262600','287800','52.47045','-4.02302','Geneur Glyn','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2482','SY25','267800','261800','52.2381','-3.93626','Tregaron','Ceredigion','Wales','WLS','Wales');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2483','SY3','348000','311600','52.69923','-2.76959','Shrewsbury','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2484','SY4','349400','322300','52.79556','-2.75052','Myddle','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2485','SY5','344000','306500','52.65299','-2.82791','Longden','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2486','SY6','346400','293800','52.53906','-2.79038','Church Stretton','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2487','SY7','339700','281200','52.42508','-2.88688','Hopesay','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2488','SY8','352700','274400','52.36523','-2.69474','Ludlow','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2489','SY9','333100','289400','52.49803','-2.98558','Lydham','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2490','TA1','322700','124300','51.01234','-3.10203','Taunton','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2491','TA10','342200','126300','51.03262','-2.82438','Langport','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2492','TA11','350800','129300','51.06039','-2.70214','Somerton','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2493','TA12','345800','119800','50.97452','-2.77207','Martock','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2494','TA13','343100','116700','50.94638','-2.81004','South Petherton','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2495','TA14','347300','116600','50.94588','-2.75024','Norton Sub Hamdon','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2496','TA15','349600','117100','50.95058','-2.71757','Montacute','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2497','TA16','344300','112300','50.90693','-2.79229','Merriott','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2498','TA17','341300','112400','50.90753','-2.83497','Hinton St George','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2499','TA18','344700','109600','50.88269','-2.78619','Crewkerne','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2500','TA19','335800','115400','50.93392','-2.91373','Ilminster','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2501','TA2','322800','126600','51.03303','-3.10109','Staplegrove','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2502','TA20','332400','108700','50.87329','-2.96087','Chard','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2503','TA21','312600','120500','50.97673','-3.24507','Wellington','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2504','TA22','291700','128500','51.0451','-3.54509','Dulverton','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2505','TA23','305500','141200','51.16171','-3.3516','Williton','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2506','TA24','294500','143600','51.18137','-3.50957','Wootton Courtenay','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2507','TA3','327100','122200','50.99403','-3.03889','Stoke St Mary','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2508','TA4','311200','131000','51.07092','-3.26758','Lydeard St Lawrence','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2509','TA5','322800','139200','51.14633','-3.10379','Spaxton','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2510','TA6','330100','136700','51.12479','-2.99895','Bridgwater','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2511','TA7','336200','137200','51.12999','-2.91187','Stawell','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2512','TA8','330700','150000','51.24445','-2.99294','Burnham-on-Sea','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2513','TA9','333300','147900','51.22588','-2.9553','Burnham Without','Somerset','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2514','TD1','349000','637000','55.6239','-2.80997','Galashiels','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2515','TD10','371800','646600','55.71203','-2.44887','Greenlaw','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2516','TD11','380200','655000','55.78792','-2.31578','','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2517','TD12','385000','640000','55.65331','-2.2384','Cornhill-on-Tweed','Northumberland','North East England','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2518','TD13','376900','670800','55.92975','-2.36975','Cockburnspath','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2519','TD14','392300','663800','55.86735','-2.12305','','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2520','TD15','399200','650400','55.74699','-2.01275','Berwick-upon-Tweed','Northumberland','North East England','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2521','TD2','352700','649100','55.733','-2.7533','','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2522','TD3','364100','645400','55.70073','-2.57127','','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2523','TD4','357800','638900','55.64182','-2.67051','Earlston','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2524','TD5','373800','632700','55.58723','-2.41571','','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2525','TD6','356300','632300','55.58238','-2.6933','Newtown St Boswells','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2526','TD7','345000','627300','55.53631','-2.87156','','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2527','TD8','365800','620300','55.47531','-2.54111','Jedburgh','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2528','TD9','350900','611800','55.39766','-2.77533','','The Scottish Borders','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2529','TF1','366000','311800','52.70246','-2.50323','Wellington','Telford and Wrekin','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2530','TF10','374000','319200','52.76943','-2.38541','Newport','Telford and Wrekin','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2531','TF11','375700','307300','52.66253','-2.35933','Shifnal','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2532','TF12','367500','301700','52.61175','-2.48003','Broseley','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2533','TF13','360600','298000','52.57803','-2.5815','Much Wenlock','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2534','TF2','370300','311500','52.70002','-2.43956','St Georges and Priorslee','Telford and Wrekin','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2535','TF3','370000','307500','52.66404','-2.44363','Hollinswood','Telford and Wrekin','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2536','TF4','368400','307200','52.66125','-2.46726','Telford','Telford and Wrekin','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2537','TF5','363800','313200','52.7149','-2.53594','Wellington','Telford and Wrekin','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2538','TF6','362600','315500','52.7355','-2.55397','Rodington','Telford and Wrekin','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2539','TF7','369600','304300','52.63525','-2.44925','Madeley','Telford and Wrekin','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2540','TF8','367600','303700','52.62974','-2.47875','The Gorge','Telford and Wrekin','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2541','TF9','368500','333500','52.8977','-2.46832','Sutton upon Tern','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2542','TN1','558800','139800','51.1349','0.27002','Royal Tunbridge Wells','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2543','TN10','559700','148200','51.21013','0.28661','Tonbridge','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2544','TN11','558500','147700','51.20597','0.26922','Tonbridge','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2545','TN12','570600','144300','51.17194','0.44067','Yalding','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2546','TN13','552400','155300','51.27593','0.18519','Sevenoaks','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2547','TN14','550700','157400','51.29525','0.16172','Dunton Green','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2548','TN15','558200','158100','51.29951','0.26953','Wrotham','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2549','TN16','543100','157000','51.29362','0.05262','','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2550','TN17','577700','136100','51.0961','0.5381','Cranbrook','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2551','TN18','577100','130200','51.04328','0.52665','Four Throws','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2552','TN19','568900','125400','51.00262','0.40754','Burwash','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2553','TN2','560000','140100','51.13726','0.28729','Royal Tunbridge Wells','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2554','TN20','558200','127700','51.02633','0.25615','Mayfield','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2555','TN21','559000','120200','50.95871','0.26427','Heathfield','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2556','TN22','547400','122300','50.98067','0.10005','Uckfield','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2557','TN23','600100','141700','51.13902','0.86075','Ashford','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2558','TN24','601900','142900','51.14917','0.88712','Ashford','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2559','TN25','605600','142500','51.14426','0.93972','Wye','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2560','TN26','596400','137200','51.09988','0.80547','Shadoxhurst','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2561','TN27','589200','144200','51.16519','0.70642','Smarden','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2562','TN28','607200','124500','50.98202','0.95226','New Romney','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2563','TN29','605900','125700','50.99327','0.93444','St Mary In The Marsh','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2564','TN3','557600','138400','51.12265','0.25227','Royal Tunbridge Wells','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2565','TN30','589000','132700','51.06195','0.69753','Tenterden','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2566','TN31','588700','121600','50.96233','0.68748','Peasmarsh','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2567','TN32','574800','123000','50.9793','0.4904','Salehurst','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2568','TN33','574100','115300','50.91032','0.47676','Battle','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2569','TN34','581800','110400','50.86393','0.58374','Hastings','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2570','TN35','583800','112300','50.88036','0.61309','Hastings','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2571','TN36','589900','117000','50.92061','0.70216','Icklesham','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2572','TN37','580000','111200','50.87168','0.55858','Hastings','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2573','TN38','579100','110200','50.86297','0.54531','Hastings','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2574','TN39','572800','108100','50.84602','0.45488','Bexhill','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2575','TN4','558000','141000','51.1459','0.25912','Royal Tunbridge Wells','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2576','TN40','574900','108000','50.84449','0.48463','Bexhill','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2577','TN5','565500','132200','51.06471','0.36223','Wadhurst','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2578','TN6','552400','130400','51.05216','0.17464','Crowborough','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2579','TN7','547700','134700','51.09204','0.10938','Hartfield','East Sussex','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2580','TN8','545300','146000','51.1942','0.07969','Edenbridge','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2581','TN9','559100','146000','51.19053','0.27705','Tonbridge','Kent','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2582','TQ1','292000','64700','50.47156','-3.52209','Torquay','Torbay','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2583','TQ10','270800','59900','50.42412','-3.81906','South Brent','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2584','TQ11','273600','66200','50.48137','-3.78179','Buckfast','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2585','TQ12','285800','71200','50.52882','-3.61142','Newton Abbot','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2586','TQ13','278400','78500','50.59296','-3.71817','Bovey Tracey','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2587','TQ14','293300','73400','50.55002','-3.50626','Teignmouth','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2588','TQ2','290500','65000','50.47398','-3.54331','Torquay','Torbay','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2589','TQ3','288200','61600','50.44298','-3.57469','Torquay','Torbay','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2590','TQ4','288500','59400','50.42326','-3.56982','Torquay','Torbay','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2591','TQ5','291800','55800','50.39151','-3.52234','','Torbay','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2592','TQ6','287000','50900','50.34655','-3.58837','Dartmouth','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2593','TQ7','273000','44100','50.28256','-3.78278','Kingsbridge','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2594','TQ8','273700','39000','50.23686','-3.77125','Salcombe','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2595','TQ9','280000','58800','50.41619','-3.68924','Totnes','Devon','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2596','TR1','182400','44800','50.26241','-5.05347','Truro','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2597','TR10','177400','34300','50.16624','-5.11736','Penryn','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2598','TR11','179500','32300','50.14907','-5.08684','Falmouth','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2599','TR12','172400','20800','50.0431','-5.17923','St Keverne','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2600','TR13','165200','28500','50.10945','-5.28435','Helston','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2601','TR14','164800','39700','50.20987','-5.29686','Camborne','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2602','TR15','169200','42000','50.23225','-5.23669','Redruth','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2603','TR16','170400','42000','50.23272','-5.21988','Redruth','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2604','TR17','152200','30800','50.12482','-5.46735','Marazion','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2605','TR18','146900','30100','50.1163','-5.54089','Penzance','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2606','TR19','140600','28600','50.10012','-5.62783','Sancreed','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2607','TR2','189600','43500','50.25334','-4.95186','Tregoney','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2608','TR20','150700','31600','50.13138','-5.48882','Ludgvan','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2609','TR21','94600','12000','49.92936','-6.25622','Isles of Scilly','Isles of Scilly','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2610','TR22','88100','8200','49.89192','-6.34346','Isles of Scilly','Isles of Scilly','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2611','TR23','87900','15000','49.95281','-6.35174','Isles of Scilly','Isles of Scilly','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2612','TR24','89200','15200','49.95528','-6.33383','Isles of Scilly','Isles of Scilly','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2613','TR25','92200','16000','49.96401','-6.29276','Isles of Scilly','Isles of Scilly','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2614','TR26','151800','39500','50.20276','-5.4786','St Ives','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2615','TR27','157100','36900','50.18162','-5.4028','Hayle','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2616','TR3','178200','39900','50.21684','-5.10944','Perranarworthal','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2617','TR4','176600','47400','50.28359','-5.13626','Kenwyn','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2618','TR5','172800','50300','50.30819','-5.19127','St Agnes','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2619','TR6','175800','53900','50.34167','-5.15134','Perranporth','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2620','TR7','181700','61600','50.41304','-5.073','Newquay','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2621','TR8','184200','59900','50.39869','-5.03689','Colan','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2622','TR9','191400','61300','50.41387','-4.93648','St Columb Major','Cornwall','South West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2623','TS1','449300','519900','54.57179','-1.23733','','Middlesbrough','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2624','TS10','460200','523900','54.60656','-1.06791','Redcar','Redcar and Cleveland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2625','TS11','463000','521800','54.58734','-1.02501','Saltburn Marske and New Marske','Redcar and Cleveland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2626','TS12','466900','519100','54.56258','-0.96528','Skelton','Redcar and Cleveland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2627','TS13','474100','517800','54.54989','-0.85427','Loftus','Redcar and Cleveland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2628','TS14','460800','515600','54.53189','-1.06034','Guisborough','Redcar and Cleveland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2629','TS15','443400','510900','54.49144','-1.32992','Kirklevington','Stockton-on-Tees','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2630','TS16','441900','514500','54.52393','-1.35257','Egglescliffe','Stockton-on-Tees','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2631','TS17','445100','516000','54.53713','-1.30289','Thornaby','Stockton-on-Tees','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2632','TS18','443800','518800','54.56241','-1.32257','','Stockton-on-Tees','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2633','TS19','442400','520500','54.57781','-1.34398','','Stockton-on-Tees','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2634','TS2','449400','521300','54.58436','-1.23555','','Middlesbrough','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2635','TS20','444400','521400','54.58572','-1.3129','Norton','Stockton-on-Tees','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2636','TS21','437100','525900','54.62676','-1.42529','Sedgefield','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2637','TS22','444300','525000','54.61809','-1.3139','Trindon','Stockton-on-Tees','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2638','TS23','446200','523900','54.60803','-1.28465','Billingham','Stockton-on-Tees','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2639','TS24','450900','533800','54.69655','-1.21016','','Hartlepool','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2640','TS25','450100','530100','54.66338','-1.22321','','Hartlepool','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2641','TS26','449700','532800','54.68768','-1.22895','','Hartlepool','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2642','TS27','445900','536700','54.72309','-1.28728','Monk Hesleden','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2643','TS28','440400','536900','54.72536','-1.37265','Hutton Henry','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2644','TS29','437400','535200','54.71032','-1.41945','Trimdon','County Durham','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2645','TS3','452000','518700','54.56073','-1.19578','','Middlesbrough','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2646','TS4','450300','518100','54.55551','-1.22217','','Middlesbrough','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2647','TS5','448500','517600','54.5512','-1.25008','','Middlesbrough','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2648','TS6','454800','519300','54.56583','-1.15236','Redcar','Redcar and Cleveland','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2649','TS7','452800','515700','54.53369','-1.18394','','Middlesbrough','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2650','TS8','449800','514300','54.52141','-1.23054','Stainton','Middlesbrough','North East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2651','TS9','454200','508200','54.46614','-1.16368','Great and Little Broughton','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2652','TW1','516400','173700','51.44982','-0.3247','Richmond','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2653','TW10','518000','173700','51.44949','-0.30168','Richmond','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2654','TW11','516000','171100','51.42653','-0.33131','Richmond','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2655','TW12','513400','170500','51.42166','-0.36888','Richmond','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2656','TW13','511200','172300','51.43828','-0.39995','Hounslow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2657','TW14','509900','173800','51.45202','-0.41818','Hounslow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2658','TW15','507400','171300','51.43002','-0.45491','Staines','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2659','TW16','510200','169700','51.4151','-0.41514','Staines','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2660','TW17','508100','167700','51.39753','-0.44594','Staines','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2661','TW18','503800','171000','51.428','-0.50677','Staines','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2662','TW19','504100','173700','51.45221','-0.50166','','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2663','TW2','514700','173300','51.44657','-0.34929','Richmond','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2664','TW20','500800','170800','51.42674','-0.54997','Egham','Surrey','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2665','TW3','513800','175600','51.46742','-0.36149','Hounslow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2666','TW4','512300','175400','51.46593','-0.38314','Hounslow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2667','TW5','512400','177000','51.48029','-0.3812','Hounslow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2668','TW6','507900','175700','51.46948','-0.44638','Hillingdon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2669','TW7','515800','176300','51.47331','-0.33248','Hounslow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2670','TW8','517600','177700','51.48552','-0.30611','Hounslow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2671','TW9','518500','175700','51.46736','-0.29382','Richmond','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2672','UB1','512900','180800','51.51435','-0.37278','Southall','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2673','UB10','507300','184400','51.5478','-0.45236','Hillingdon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2674','UB11','507000','181200','51.51909','-0.45766','Hillingdon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2675','UB2','512500','179100','51.49915','-0.37909','Southall','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2676','UB3','509500','179700','51.50513','-0.42211','Hillingdon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2677','UB4','510500','181800','51.52381','-0.40704','Hillingdon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2678','UB5','512700','184000','51.54315','-0.37464','Southall','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2679','UB6','514900','183600','51.53911','-0.34306','Southall','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2680','UB7','506200','179700','51.50576','-0.46964','Hillingdon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2681','UB8','505900','182900','51.53458','-0.473','Hillingdon','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2682','UB9','504600','188100','51.58157','-0.49019','Denham Green','Buckinghamshire','South East England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2683','W1','528900','181200','51.51452','-0.14215','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2684','W10','523900','181800','51.52103','-0.21397','Kensington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2685','W11','524600','180800','51.51189','-0.20424','Kensington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2686','W12','522900','180300','51.50777','-0.2289','Hammersmith','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2687','W13','516600','180700','51.5127','-0.31951','Ealing','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2688','W14','524300','178900','51.49488','-0.20923','Hammersmith','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2689','W1B','529100','181100','51.51357','-0.13931','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2690','W1C','528500','181100','51.51371','-0.14795','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2691','W1D','529700','181100','51.51344','-0.13066','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2692','W1F','529400','181000','51.51261','-0.13502','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2693','W1G','528600','181600','51.51818','-0.14633','Paddington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2694','W1H','527700','181400','51.51659','-0.15936','Paddington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2695','W1J','528800','180400','51.50735','-0.14388','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2696','W1K','528400','180800','51.51104','-0.1495','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2697','W1M','528400','181600','51.51823','-0.14921','Paddington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2698','W1S','529000','180800','51.5109','-0.14086','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2699','W1T','529400','181800','51.5198','-0.13473','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2700','W1U','528200','181600','51.51827','-0.15209','Paddington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2701','W1W','529100','181700','51.51897','-0.13909','Paddington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2702','W2','526400','181200','51.51508','-0.17816','Paddington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2703','W3','520200','180400','51.50925','-0.26775','Ealing','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2704','W4','520600','178400','51.49118','-0.26268','Hounslow','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2705','W5','517900','180700','51.51243','-0.30078','Ealing','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2706','W6','523000','178600','51.49246','-0.22805','Hammersmith','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2707','W7','515600','180500','51.5111','-0.33398','Ealing','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2708','W8','525400','179500','51.50003','-0.19317','Kensington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2709','W9','525500','182400','51.52607','-0.1907','Paddington','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2710','WA1','362200','388800','53.39442','-2.5685','Birchwood','Warrington','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2711','WA10','349900','395500','53.45362','-2.75454','','St Helens','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2712','WA11','352300','398100','53.47721','-2.71879','','St Helens','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2713','WA12','358100','395400','53.45343','-2.63104','','St Helens','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2714','WA13','368800','387400','53.38226','-2.46911','Lymm','Warrington','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2715','WA14','376200','387800','53.38624','-2.35788','','Trafford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2716','WA15','378400','387500','53.38364','-2.32478','','Trafford','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2717','WA16','375300','378500','53.3026','-2.37068','Knutsford','Cheshire East','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2718','WA2','361400','390600','53.41054','-2.58075','Birchwood','Warrington','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2719','WA3','363600','395400','53.45384','-2.54821','Croft','Warrington','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2720','WA4','361800','385500','53.36472','-2.57412','Appleton','Warrington','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2721','WA5','357700','389300','53.39857','-2.63624','Great Sankey','Warrington','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2722','WA6','351800','375300','53.27222','-2.72285','Frodsham','Cheshire West and Chester','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2723','WA7','353200','381700','53.32987','-2.7028','Runcorn','Halton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2724','WA8','350700','386400','53.37189','-2.74107','Runcorn','Halton','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2725','WA9','352300','393600','53.43676','-2.71811','','St Helens','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2726','WC1','530300','182000','51.52139','-0.12169','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2727','WC1A','530100','181500','51.51694','-0.12475','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2728','WC1B','530000','181700','51.51876','-0.12612','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2729','WC1E','529600','181900','51.52065','-0.13181','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2730','WC1H','530000','182300','51.52415','-0.1259','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2731','WC1N','530400','182000','51.52136','-0.12025','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2732','WC1R','530700','181700','51.5186','-0.11604','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2733','WC1V','530500','181500','51.51685','-0.11899','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2734','WC1X','530700','182400','51.52489','-0.11578','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2735','WC2','530200','181100','51.51332','-0.12346','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2736','WC2A','530800','181400','51.51588','-0.11471','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2737','WC2B','530300','181300','51.5151','-0.12195','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2738','WC2E','530200','181000','51.51242','-0.1235','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2739','WC2H','529900','181100','51.51339','-0.12778','Camden Town','Greater London','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2740','WC2N','530100','180700','51.50975','-0.12505','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2741','WC2R','530500','180900','51.51145','-0.11921','','Westminster','London','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2742','WD1','510700','195500','51.64692','-0.39984','Watford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2743','WD17','510300','197100','51.66138','-0.40512','Watford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2744','WD18','509700','195600','51.64801','-0.41426','Watford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2745','WD19','511400','193800','51.6315','-0.39027','Watford Rural','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2746','WD2','512200','197800','51.6673','-0.37743','Potters Bar','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2747','WD23','513100','195400','51.64554','-0.3652','Potters Bar','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2748','WD24','510800','198100','51.67027','-0.39757','Watford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2749','WD25','511400','199600','51.68363','-0.38842','Watford','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2750','WD3','505100','195200','51.6453','-0.48085','Chorleywood','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2751','WD4','506700','202300','51.70882','-0.45556','Kings Langley','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2752','WD5','509400','201900','51.7047','-0.41662','Abbots Langley','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2753','WD6','519300','196800','51.65684','-0.27514','Borehamwood','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2754','WD7','516900','200000','51.68611','-0.30876','Radlett','Hertfordshire','East of England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2755','WF1','433600','421300','53.68684','-1.49117','','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2756','WF10','443300','425500','53.72388','-1.3437','','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2757','WF11','449100','424100','53.71078','-1.25602','','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2758','WF12','425100','420900','53.68373','-1.61992','Dewsbury','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2759','WF13','423400','421900','53.69279','-1.64559','Dewsbury','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2760','WF14','420300','420500','53.68034','-1.69263','Mirfield','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2761','WF15','419900','423600','53.70822','-1.69849','Dewsbury','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2762','WF16','421900','423800','53.70994','-1.66817','Dewsbury','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2763','WF17','423700','424800','53.71885','-1.64082','Dewsbury','Kirklees','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2764','WF2','432300','419700','53.67254','-1.51102','','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2765','WF3','431400','425300','53.72294','-1.52408','','Leeds','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2766','WF4','431800','416900','53.64741','-1.51888','Crigglestone','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2767','WF5','428000','420500','53.67998','-1.57605','','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2768','WF6','438700','422800','53.69997','-1.41375','Normanton','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2769','WF7','442900','419100','53.66639','-1.35065','Featherstone','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2770','WF8','446300','421200','53.68497','-1.29887','','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2771','WF9','445000','412400','53.60599','-1.31983','North Elmsall','Wakefield','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2772','WN1','358500','406600','53.55414','-2.6265','Pemberton','Wigan','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2773','WN2','361400','404600','53.53639','-2.58248','Pemberton','Wigan','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2774','WN3','357300','403800','53.52888','-2.64423','Pemberton','Wigan','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2775','WN4','357400','400000','53.49473','-2.64221','Pemberton','Wigan','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2776','WN5','354600','404100','53.53135','-2.68501','Pemberton','Wigan','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2777','WN6','355700','408800','53.57369','-2.66908','Pemberton','Wigan','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2778','WN7','365700','400300','53.49803','-2.51712','Leigh','Wigan','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2779','WN8','349100','406500','53.55242','-2.76838','Ormskirk','Lancashire','North West England','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2780','WR1','385200','255500','52.19713','-2.21656','Worcester','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2781','WR10','395600','246300','52.11459','-2.06426','Wick','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2782','WR11','404900','244100','52.09481','-1.92847','Evesham','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2783','WR12','408700','238300','52.04261','-1.87314','Broadway','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2784','WR13','376600','244100','52.09433','-2.34161','Colwall','Herefordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2785','WR14','378200','246200','52.11328','-2.31839','Great Malvern','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2786','WR15','361300','267600','52.30476','-2.56764','Tenbury','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2787','WR2','383500','254700','52.18989','-2.24139','Worcester','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2788','WR3','385600','257600','52.21603','-2.21079','Worcester','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2789','WR4','387400','256300','52.20438','-2.1844','Worcester','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2790','WR5','386400','253300','52.17738','-2.19891','Worcester','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2791','WR6','374700','258900','52.22732','-2.37045','Martley','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2792','WR7','396400','255400','52.19642','-2.05268','North Piddle','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2793','WR8','386100','242700','52.08207','-2.20287','Worcester','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2794','WR9','389300','263400','52.26826','-2.15682','Droitwich','Worcestershire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2795','WS1','401500','298000','52.57945','-1.97786','','Walsall','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2796','WS10','398600','295900','52.56057','-2.02065','West Bromwich','Sandwell','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2797','WS11','398800','310200','52.68914','-2.01776','Cannock','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2798','WS12','400100','312100','52.70623','-1.99852','Cannock','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2799','WS13','412300','310500','52.6917','-1.818','Lichfield','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2800','WS14','412600','307300','52.66292','-1.81368','Swinfen and Packington','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2801','WS15','405600','317900','52.75834','-1.91701','Brereton','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2802','WS2','399900','299000','52.58845','-2.00148','','Walsall','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2803','WS3','400700','302300','52.61812','-1.98966','Willenhall','Walsall','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2804','WS4','402800','300900','52.60552','-1.95865','','Walsall','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2805','WS5','402800','296700','52.56776','-1.95869','','Walsall','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2806','WS6','398500','306700','52.65767','-2.02218','Great Wyrley','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2807','WS7','405900','309200','52.68012','-1.91272','Burntwood','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2808','WS8','404500','305400','52.64597','-1.93348','Brownhills','Walsall','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2809','WS9','405600','301300','52.6091','-1.91729','Aldridge','Walsall','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2810','WV1','392200','298700','52.58569','-2.11514','','Wolverhampton','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2811','WV10','392400','302200','52.61716','-2.11227','Wednesfield','Wolverhampton','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2812','WV11','395200','301400','52.61','-2.07089','Wednesfield','Wolverhampton','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2813','WV12','397300','300900','52.60552','-2.03987','Willenhall','Walsall','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2814','WV13','395900','298600','52.58484','-2.06052','Willenhall','Walsall','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2815','WV14','394700','295500','52.55695','-2.07818','Wednesfield','Wolverhampton','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2816','WV15','374600','291000','52.51593','-2.37435','Bridgnorth','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2817','WV16','370100','290500','52.5112','-2.44062','Chetton','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2818','WV2','392000','297400','52.574','-2.11806','','Wolverhampton','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2819','WV3','389800','298000','52.57936','-2.15054','','Wolverhampton','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2820','WV4','390400','296100','52.56229','-2.14163','','Wolverhampton','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2821','WV5','385800','292900','52.53342','-2.20936','Wombourne','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2822','WV6','387700','299800','52.5955','-2.18161','','Wolverhampton','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2823','WV7','381700','304000','52.63309','-2.27043','Albrighton','Shropshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2824','WV8','387600','302900','52.62337','-2.1832','Bilbrook','Staffordshire','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2825','WV9','390500','304000','52.63332','-2.14039','','Wolverhampton','West Midlands','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2826','YO1','460300','451800','53.95857','-1.0809','','York','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2827','YO10','461800','450900','53.95031','-1.05822','Heslington','York','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2828','YO11','504500','486700','54.26511','-0.39535','Scarborough','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2829','YO12','502700','487600','54.27356','-0.42267','Scarborough','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2830','YO13','497900','489100','54.28798','-0.49587','Stainton Dale','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2831','YO14','511100','479500','54.19903','-0.29672','Muston','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2832','YO15','519200','468000','54.0939','-0.17715','Bridlington','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2833','YO16','517700','468100','54.09514','-0.20004','Bridlington','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2834','YO17','481400','471900','54.13631','-0.75397','Settrington','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2835','YO18','480300','485500','54.2587','-0.76717','Pickering','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2836','YO19','464300','446500','53.91046','-1.02105','Wheldrake','York','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2837','YO21','483500','509800','54.47654','-0.71123','Hutton Mulgrave','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2838','YO22','489400','507000','54.45038','-0.62104','Snainton','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2839','YO23','457700','448100','53.92562','-1.12122','Copmanthorpe','York','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2840','YO24','458100','450400','53.94624','-1.11469','','York','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2841','YO25','504000','457700','54.00465','-0.41302','Driffield','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2842','YO26','454300','453500','53.97452','-1.17204','Upper Poppleton','York','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2843','YO30','458100','454800','53.98579','-1.11385','Rawcliffe','York','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2844','YO31','461400','453000','53.96923','-1.06389','','York','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2845','YO32','461700','457700','54.01143','-1.05837','Earswick','York','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2846','YO41','472000','453200','53.96966','-0.90227','Catton','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2847','YO42','479400','448100','53.92274','-0.7908','Barmby Moor','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2848','YO43','486200','440100','53.84976','-0.68952','Market Weighton','East Riding of Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2849','YO51','440800','465300','54.08182','-1.37628','Boroughbridge','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2850','YO60','469300','465700','54.08237','-0.94057','Thornton-le-Clay','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2851','YO61','452700','469200','54.11579','-1.1937','Easingwold','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2852','YO62','465600','483500','54.24282','-0.99325','Nawton','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2853','YO7','442400','481100','54.2237','-1.3496','Sowerby','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2854','YO8','462100','432100','53.7813','-1.05745','Selby','North Yorkshire','Yorkshire and the Humber','ENG','England');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2855','ZE1','446200','1141100','60.15232','-1.16779','Sound','Shetland Islands','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2856','ZE2','442800','1160900','60.33047','-1.22484','','Shetland Islands','Scotland','SCT','Scotland');

INSERT INTO postcodes (`id`, `postcode`, `eastings`, `northings`, `latitude`, `longitude`, `town`, `region`, `uk_region`, `country`, `country_string`) VALUES 
('2857','ZE3','439000','1111100','59.88369','-1.30316','Toab','Shetland Islands','Scotland','SCT','Scotland');

INSERT INTO promotions (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES 
('1','Test','<p>test</p>','2021-05-08 20:32:19','2021-05-08 20:32:19');

INSERT INTO regions (`id`, `name`, `country_id`, `url`, `nick`, `status`, `created_at`, `updated_at`) VALUES 
('1','Punjab','1','Punjab','Punjab','1','2021-05-08 19:53:56','2021-05-08 19:53:56');

INSERT INTO roles (`id`, `name`, `slug`, `permissions`, `created_at`, `updated_at`) VALUES 
('1','Admin','admin','{\"admin\":true}','2021-03-09 05:53:34','2021-03-09 05:53:34');

INSERT INTO roles (`id`, `name`, `slug`, `permissions`, `created_at`, `updated_at`) VALUES 
('2','User','user','{\"user\":true}','2021-03-09 05:53:34','2021-03-09 05:53:34');

INSERT INTO role_users (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES 
('1','1','1','2021-01-28 05:00:00','');

INSERT INTO role_users (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES 
('5','2','2','2021-01-28 05:00:00','');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('1','api/user','test','test','test','test','twqetetewtetwewqtewtewetwq,ew,ew,wqe,wqe,e,ewe,wqe,w','2021-05-08 19:54:04','2021-05-08 19:56:38');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('2','test_email','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('3','order_test','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('4','/','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('5','page/{slug}','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('6','offers-mobile-fitment','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('7','customer-service-price-match-guarantee','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('8','customer-service-same-day-next-day-offers','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('9','whybuyonline','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('10','customer-service','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('11','customer-service-fitting-and-balancing','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('12','purchasing-tyres-delivery-information','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('13','customer-service-tyre-roadside-assist','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('14','customer-service-warranty','','','','','','2021-05-08 19:54:04','2021-05-08 19:54:04');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('15','customer-service-promotions','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('16','customer-service-lowest-price-guarantee','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('17','customer-service-zipmoney','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('18','help-faq','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('19','help-tyre-buying-guide','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('20','purchasing-tyres-tyre-size-guide','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('21','home','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('22','login','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('23','login_here','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('24','register','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('25','logout','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('26','account.verify/{uid}','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('27','forgot_password','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('28','reset_password/{uid}/{token}/{email}','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('29','tyre/size','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('30','brand/size','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('31','tyre/size/view/{slug}','','','','','','2021-05-08 19:54:05','2021-05-08 19:54:05');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('32','tyres','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('33','tyres/brand/pattern','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('34','vehicles','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('35','truck','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('36','truck/size/{slug}','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('37','otr','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('38','otr/size/{slug}','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('39','customer-service/zipmoney','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('40','offers/current-promotions','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('41','customer-service/tyre-roadside-assist','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('42','offers/mobile-fitment','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('43','fitment-centres','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('44','customer-service/same-day-next-day-offers','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('45','customer-service/price-match-guarantee','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('46','search','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('47','buy','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('48','buy/tyre/{brand}/{pattern}/{tyre}/{id}','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('49','checkout/{token}','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('50','vehicle/search','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('51','search/brand','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('52','otr/search','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('53','truck/search','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('54','vehicles/make/{slug}','','','','','','2021-05-08 19:54:06','2021-05-08 19:54:06');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('55','vehicle/{make}/{model}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('56','runflat','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('57','tyres/runflat/{slug}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('58','tyres/runflat/tyre/{brand}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('59','dealer-signup','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('60','fitment-locations','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('61','fitment-centers/{state}/{slug}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('62','fitment-area-centers/{state}/{slug}/{area_slug}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('63','paywithpaypal/{session}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('64','cancel','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('65','paypal-success','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('66','facebookredirect','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('67','facebookcallback','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('68','googleredirect','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('69','googlecallback','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('70','contact-us','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('71','faqs','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('72','help/faqs/section','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('73','help/faqs/section/article/{url}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('74','tyre/suv','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('75','tyres/suv/{url}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('76','runflat/view/tyre/{url}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('77','suv/view/tyre/{url}','','','','','','2021-05-08 19:54:07','2021-05-08 19:54:07');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('78','tyres/fuelefficient','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('79','fuel-efficient/view/tyre/{url}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('80','help-ask-an-expert','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('81','admin/dashboard','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('82','admin/edit-profile','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('83','admin/users-list','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('84','admin/user-delete/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('85','admin/settings/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('86','admin/sections.settings/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('87','admin/about_us','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('88','admin/add-about-us/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('89','admin/area','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('90','admin/add_area','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('91','admin/area-active/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('92','admin/faqs','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('93','admin/add_faqs','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('94','admin/sliders','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('95','admin/add_sliders','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('96','admin/slider.delete.image/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('97','admin/countries','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('98','admin/add_countries','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('99','admin/countries-active/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('100','admin/country-delete/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('101','admin/view-region-areas/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('102','admin/region-delete/{id}','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('103','admin/queries','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('104','admin/regions','','','','','','2021-05-08 19:54:08','2021-05-08 19:54:08');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('105','admin/region-active/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('106','admin/categories','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('107','admin/vehicle_categories','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('108','admin/tyres-brands','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('109','admin/brands-delete/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('110','admin/brands-patterns/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('111','admin/brands-patterns-delete/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('112','admin/tyres-categories','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('113','admin/tyres','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('114','admin/add.tyre','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('115','admin/tyre.edit/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('116','admin/pages','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('117','admin/pages-delete/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('118','admin/pages-data/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('119','admin/tyres-attributes','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('120','admin/tyres_attributes-delete/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('121','admin/tyres-delete/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('122','admin/vehicles','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('123','admin/vehicles.model','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('124','admin/vehicles.model.series','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('125','admin/tyre-not-found','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('126','admin/tyres-not-found-delete/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('127','admin/tyres-not-found-reply/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('128','admin/bank','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('129','admin/bank/view_balance_sheet/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('130','admin/bank-delete/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('131','admin/bank-default/{id}','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('132','admin/orders','','','','','','2021-05-08 19:54:09','2021-05-08 19:54:09');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('133','admin/promotions','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('134','admin/promotions-add','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('135','admin/promotions-delete/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('136','admin/promotions-edit/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('137','admin/fitment.centers','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('138','admin/fitment.area/{slug}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('139','admin/fitment.center/{slug}/{url}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('140','admin/fitments.center/{area_slug}/{slug}/{url}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('141','admin/fitment-location.delete/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('142','admin/fitment-area.delete/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('143','admin/edit.fitment.center/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('144','admin/fitment-area_center.delete/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('145','admin/promo.codes','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('146','admin/promo-codes-add','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('147','admin/promocode-edit/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('148','admin/promocode-delete/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('149','admin/vehicles-delete/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('150','admin/vehicle-series-delete/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('151','admin/dealer.signup','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('152','admin/tyres-sizes','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('153','admin/finance.provider','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('154','admin/provider-delete/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('155','admin/promocode-send/{id}','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('156','admin/shipping.address','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('157','admin/shipping.methods','','','','','','2021-05-08 19:54:10','2021-05-08 19:54:10');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('158','admin/add_shipment_methods','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('159','admin/shipping.method-delete/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('160','admin/shipping.method.edit/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('161','admin/extra.order.items','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('162','admin/add_extra.order.items','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('163','admin/extra.order.items-delete/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('164','admin/extra.order.items.edit/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('165','admin/inqueries','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('166','admin/inquery-reply/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('167','admin/inquery-delete/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('168','admin/site.discount','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('169','admin/order.view/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('170','admin/order.completed/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('171','admin/contact_us','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('172','admin/contactus-reply/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('173','admin/category.delete/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('174','admin/vehicle.category.delete/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('175','admin/seo_tools','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('176','admin/seo-data','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('177','admin/add.categories','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('178','admin/edit.category/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('179','admin/update.category','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO seo_tools (`id`, `route`, `writer`, `handler`, `description`, `title`, `keywords`, `created_at`, `updated_at`) VALUES 
('180','admin/edit.subcategory/{id}','','','','','','2021-05-08 19:54:11','2021-05-08 19:54:11');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('13','3','app_name','Tyres','','','2020-06-19 16:47:59','2020-06-21 03:51:24');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('14','3','currency','PKR','','','2020-06-19 16:47:59','2020-06-21 03:51:24');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('15','3','color_scheme','orangered','','','2020-06-19 16:47:59','2020-06-21 03:51:24');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('16','8','currency','PKR','','','2020-10-14 16:00:37','2020-10-15 14:15:28');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('17','8','color_scheme','blue','','','2020-10-14 16:00:37','2020-10-15 14:15:28');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('18','6','currency','PKR','','','2020-10-20 12:50:02','2020-10-20 12:50:13');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('19','6','color_scheme','brown','','','2020-10-20 12:50:02','2020-10-20 12:50:14');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('20','0','site_discounts','1','','','2021-05-08 20:23:21','2021-05-08 20:23:21');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('21','0','site_discounts_name','Test','','','2021-05-08 20:23:21','2021-05-08 20:23:21');

INSERT INTO settings (`id`, `user_id`, `key_term`, `value`, `phone`, `email`, `created_at`, `updated_at`) VALUES 
('22','0','site_discounts_value','50','','','2021-05-08 20:23:21','2021-05-08 20:23:21');

INSERT INTO shipping_addresses (`id`, `uid`, `address1`, `address2`, `postal_code`, `country`, `state`, `city`, `direct_shipment_discount`, `longitude`, `latitude`, `created_at`, `updated_at`) VALUES 
('1','e09cc8fd323e87dec2e77138a8ff5a85','Test','test','12345','1','1','Rawalpindi','5','73.0641','33.599148','2021-05-08 21:28:09','2021-05-08 21:28:09');

INSERT INTO shipping_methods  (`id`, `name`, `distance_from`, `distance_to`, `price`, `created_at`, `updated_at`) VALUES 
('1','test','5','15','1500','2021-05-08 21:31:09','2021-05-08 21:31:09');

INSERT INTO sliders (`id`, `name`, `file`, `created_at`, `updated_at`) VALUES 
('1','full','https://localhost/tyres/public/images/front/sliders/162049202326735.jpg','2021-05-08 21:40:23','2021-05-08 21:40:23');

INSERT INTO stock (`id`, `supplier`, `category`, `sub`, `manufacturer`, `part_number`, `barcode`, `barcode_img`, `description`, `cost_net`, `select_cost_net`, `trade_markup`, `trade_net`, `taxcode`, `retail_markup`, `retail_net`, `gurantee`, `gurantee_custom`, `location`, `keywords`, `class`, `width`, `economy`, `wet_grip`, `noise`, `level`, `track_item`, `actual_stock_level`, `low_stock_below`, `minimum_order_quantity`, `created_at`, `updated_At`) VALUES 
('1','test','test','test','test','test','742975361583','','test','test','t1','test','test','t1','test','test','','test','test','tesst','C2','test','C','D','test','test','1','-30','test','test','2021-06-24 21:33:43','2021-06-24 22:05:04');

INSERT INTO stock (`id`, `supplier`, `category`, `sub`, `manufacturer`, `part_number`, `barcode`, `barcode_img`, `description`, `cost_net`, `select_cost_net`, `trade_markup`, `trade_net`, `taxcode`, `retail_markup`, `retail_net`, `gurantee`, `gurantee_custom`, `location`, `keywords`, `class`, `width`, `economy`, `wet_grip`, `noise`, `level`, `track_item`, `actual_stock_level`, `low_stock_below`, `minimum_order_quantity`, `created_at`, `updated_At`) VALUES 
('2','test','test','test','test','test','742975361583','','test','test','t1','test','test','t1','test','test','','test','test','tesst','C2','test','C','D','test','test','1','-30','test','test','2021-06-24 21:33:43','2021-06-24 22:05:04');

INSERT INTO stock (`id`, `supplier`, `category`, `sub`, `manufacturer`, `part_number`, `barcode`, `barcode_img`, `description`, `cost_net`, `select_cost_net`, `trade_markup`, `trade_net`, `taxcode`, `retail_markup`, `retail_net`, `gurantee`, `gurantee_custom`, `location`, `keywords`, `class`, `width`, `economy`, `wet_grip`, `noise`, `level`, `track_item`, `actual_stock_level`, `low_stock_below`, `minimum_order_quantity`, `created_at`, `updated_At`) VALUES 
('3','test','test','test','test','test','742975361583','','test','test','t1','test','test','t1','test','test','','test','test','tesst','C2','test','C','D','test','test','1','-30','test','test','2021-06-24 21:33:43','2021-06-24 22:05:04');

INSERT INTO stock (`id`, `supplier`, `category`, `sub`, `manufacturer`, `part_number`, `barcode`, `barcode_img`, `description`, `cost_net`, `select_cost_net`, `trade_markup`, `trade_net`, `taxcode`, `retail_markup`, `retail_net`, `gurantee`, `gurantee_custom`, `location`, `keywords`, `class`, `width`, `economy`, `wet_grip`, `noise`, `level`, `track_item`, `actual_stock_level`, `low_stock_below`, `minimum_order_quantity`, `created_at`, `updated_At`) VALUES 
('4','test','test','test','test','test','742975361583','','test','test','t1','test','test','t1','test','test','','test','test','tesst','C2','test','C','D','test','test','1','-30','test','test','2021-06-24 21:33:43','2021-06-24 22:05:04');

INSERT INTO sub_categories (`id`, `name`, `category_id`, `url`, `url_page`, `created_at`, `updated_at`) VALUES 
('1','test 3','2','test 44','1','2021-05-08 19:40:35','2021-05-08 19:40:35');

INSERT INTO supliers (`id`, `account_number`, `name`, `company`, `address`, `post_code`, `telephone`, `fax`, `email`, `website`, `stock_supplier`, `nominal_code`, `credit_account`, `notes`, `credit_limit`, `credit_terms`, `created_at`, `updated_at`) VALUES 
('1','test','test','test','a:5:{i:0;s:4:\"test\";i:1;s:4:\"test\";i:2;s:4:\"test\";i:3;s:4:\"test\";i:4;s:4:\"test\";}','46000','03205038329','test','arbaz@gmail.com','test','0','5000 | General: General','0','150','1501','150','2021-06-16 23:33:42','2021-06-17 20:40:41');

INSERT INTO tyres (`id`, `name`, `truck`, `otr`, `pattern_id`, `width`, `profile`, `rim_size`, `load_index`, `speed_index`, `price`, `attributes`, `fitment_in`, `tyre_category_id`, `quantity`, `min_quantity`, `stock_available`, `max_order_quantity`, `year`, `vehicle_id`, `make_id`, `series_id`, `brand_id`, `on_sale`, `description`, `features`, `video`, `stock_low_quantity_notify_to_user`, `run_flat`, `suv_tyre`, `fuel_efficient_tyre`, `recommend`, `our_pick`, `ceo_choice`, `recommend_type`, `tyre_size`, `fit_tomorrow`, `eco_freindly`, `position`, `tra_code`, `benefits`, `url`, `image`, `created_at`, `updated_at`) VALUES 
('1','test','1','1','1','50','50','50','50','50','50','1','0','1','50','5','50','5','2014','1','1','1','1','0','<p>test</p>','<p>test</p>','etst.com','5','0','0','0','0','0','0','0','1','0','0','Drive','tra','test','test','https://localhost/tyres/public/images/tyres/162049293731312.jpg','2021-05-08 21:55:37','2021-05-08 21:55:37');

INSERT INTO tyres_brands (`id`, `name`, `description`, `url`, `image`, `created_at`, `updated_at`) VALUES 
('1','test','<p>test</p>','test','https://localhost/tyres/public/images/tyres_brands/162048630195674.jpg','2021-05-08 20:05:01','2021-05-08 20:05:01');

INSERT INTO tyres_brands_patterns (`id`, `name`, `brand_id`, `url`, `created_at`, `updated_at`) VALUES 
('1','test','1','test','2021-05-08 21:46:25','2021-05-08 21:46:25');

INSERT INTO tyre_attributes (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES 
('1','test','test','2021-05-08 20:13:44','2021-05-08 20:13:44');

INSERT INTO tyre_categories (`id`, `name`, `created_at`, `updated_at`) VALUES 
('1','Test','2021-05-08 20:05:56','2021-05-08 20:05:56');

INSERT INTO tyre_categories (`id`, `name`, `created_at`, `updated_at`) VALUES 
('2','test 2','2021-05-08 20:06:04','2021-05-08 20:06:04');

INSERT INTO tyre_sizes (`id`, `name`, `created_at`, `updated_at`) VALUES 
('1','test','2021-05-08 20:05:36','2021-05-08 20:05:36');

INSERT INTO users (`id`, `name`, `referral_id`, `admin`, `email`, `phone`, `image`, `password`, `membership_id`, `membership_started`, `membership_expired`, `token`, `city`, `occupation`, `address`, `about`, `country`, `postcode`, `state`, `address2`, `api_token`, `d_code`, `active`, `verified`, `verification_level`, `verification_status`, `remember_token`, `created_at`, `updated_at`) VALUES 
('1','Admin','','1','admin@gmail.com','','https://www.pngfind.com/pngs/m/470-4703547_icon-user-icon-hd-png-download.png','$2a$10$rP/7La6bv7AcB0GsbJKQiOFq.vwm9jiCTaKf4hH009iKUhwQjZJRS','15','2020-09-28','2020-12-28','1afb0fd5c0f9933936df2827b4f5c6e5','','','','','','','','','','','1','1','4','1','2iPEGo0ZyRMX3DM6Gla3rl8tAIbIoo62fckZcASa5rQLTn3kD2jDQUOUYNqI','2020-02-20 22:45:22','2021-04-21 06:06:14');

INSERT INTO users (`id`, `name`, `referral_id`, `admin`, `email`, `phone`, `image`, `password`, `membership_id`, `membership_started`, `membership_expired`, `token`, `city`, `occupation`, `address`, `about`, `country`, `postcode`, `state`, `address2`, `api_token`, `d_code`, `active`, `verified`, `verification_level`, `verification_status`, `remember_token`, `created_at`, `updated_at`) VALUES 
('2','User','','0','user@gmail.com','','https://www.pngfind.com/pngs/m/470-4703547_icon-user-icon-hd-png-download.png','$2a$10$rP/7La6bv7AcB0GsbJKQiOFq.vwm9jiCTaKf4hH009iKUhwQjZJRS','15','2020-09-28','2020-12-28','1afb0fd5c0f9933936df2827b4f5c6e5','','','','','','','','','','','1','1','4','1','2iPEGo0ZyRMX3DM6Gla3rl8tAIbIoo62fckZcASa5rQLTn3kD2jDQUOUYNqI','2020-02-20 22:45:22','2021-04-21 06:06:14');

INSERT INTO vehicles (`id`, `name`, `created_at`, `updated_at`) VALUES 
('1','Toyota 123','2021-06-28 20:45:58','2021-06-28 21:35:43');

INSERT INTO vehicles (`id`, `name`, `created_at`, `updated_at`) VALUES 
('2','Honda','2021-06-28 20:45:58','');

INSERT INTO vehicles (`id`, `name`, `created_at`, `updated_at`) VALUES 
('3','Lexus','2021-06-28 21:09:36','2021-06-28 21:09:36');

INSERT INTO vehicles_models (`id`, `name`, `year`, `url`, `vehicle_id`, `created_at`, `updated_at`) VALUES 
('1','test','2021','test','1','2021-05-08 20:19:38','2021-05-08 20:19:38');

INSERT INTO vehicles_series (`id`, `name`, `model_id`, `vehicle_id`, `url`, `created_at`, `updated_at`) VALUES 
('1','test','1','1','test','2021-05-08 20:23:00','2021-05-08 20:23:00');

INSERT INTO vehicle_categories (`id`, `name`, `category_id`, `url`, `url_page`, `created_at`, `updated_at`) VALUES 
('1','test','1','test','1','2021-05-08 19:42:55','2021-05-08 19:42:55');

INSERT INTO vehicle_details (`id`, `vehicle_id`, `name`, `telephone`, `mobile`, `origin`, `model_series`, `seats`, `features`, `general_checkbox`, `body_style`, `gears`, `transmission`, `drive_axle`, `drive_type`, `fuel_delivery`, `aspiration`, `cylinders`, `valves_per_cyl`, `bore`, `kerb_weight`, `max`, `gross`, `height_mm`, `width`, `roof`, `combined`, `urban`, `cold`, `bhp`, `torque`, `top_speed`, `zero_sixty`, `c02`, `custom_field1`, `custom_field2`, `custom_field3`, `custom_field4`, `custom_field5`, `custom_field6`, `custom_field7`, `custom_field8`, `notes`, `type_of_vehicles`, `last_invoiced`, `previous`, `created_at`, `updated_at`) VALUES 
('1','1','test','test','test','test','test','test','a:14:{i:0;s:15:\"Climate Control\";i:1;s:14:\"Cruise Control\";i:2;s:16:\"Electric Mirrors\";i:3;s:14:\"Electric Seats\";i:4;s:13:\"Heated Screen\";i:5;s:12:\"Heated Seats\";i:6;s:14:\"Power Steering\";i:7;s:12:\"Rain Sensors\";i:8;s:16:\"Traction Control\";i:9;s:13:\"Speed Limiter\";i:10;s:16:\"Sunroof (normal)\";i:11;s:19:\"Sunroof (Panaromic)\";i:12;s:10:\"DVD System\";i:13;s:10:\"MP3 Player\";}','a:3:{i:0;s:16:\"Air Conditioning\";i:1;s:16:\"Traction COntrol\";i:2;s:12:\"Vented Discs\";}','test','test','test','test','test','test','test','a:3:{i:0;s:4:\"test\";i:1;s:4:\"test\";i:2;s:4:\"test\";}','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','','car','test','a:3:{i:0;s:4:\"test\";i:1;s:4:\"test\";i:2;s:4:\"test\";}','2021-06-21 22:38:06','2021-06-21 23:05:54');

INSERT INTO vehicle_details (`id`, `vehicle_id`, `name`, `telephone`, `mobile`, `origin`, `model_series`, `seats`, `features`, `general_checkbox`, `body_style`, `gears`, `transmission`, `drive_axle`, `drive_type`, `fuel_delivery`, `aspiration`, `cylinders`, `valves_per_cyl`, `bore`, `kerb_weight`, `max`, `gross`, `height_mm`, `width`, `roof`, `combined`, `urban`, `cold`, `bhp`, `torque`, `top_speed`, `zero_sixty`, `c02`, `custom_field1`, `custom_field2`, `custom_field3`, `custom_field4`, `custom_field5`, `custom_field6`, `custom_field7`, `custom_field8`, `notes`, `type_of_vehicles`, `last_invoiced`, `previous`, `created_at`, `updated_at`) VALUES 
('2','3','test','test','test','test','test','test','a:14:{i:0;s:15:\"Climate Control\";i:1;s:14:\"Cruise Control\";i:2;s:16:\"Electric Mirrors\";i:3;s:14:\"Electric Seats\";i:4;s:13:\"Heated Screen\";i:5;s:12:\"Heated Seats\";i:6;s:14:\"Power Steering\";i:7;s:12:\"Rain Sensors\";i:8;s:16:\"Traction Control\";i:9;s:13:\"Speed Limiter\";i:10;s:16:\"Sunroof (normal)\";i:11;s:19:\"Sunroof (Panaromic)\";i:12;s:10:\"DVD System\";i:13;s:10:\"MP3 Player\";}','a:2:{i:0;s:16:\"Air Conditioning\";i:1;s:16:\"Traction COntrol\";}','test','test','test','test','test','test','test','a:3:{i:0;s:4:\"test\";i:1;s:4:\"test\";i:2;s:4:\"test\";}','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','test','','car','test','a:3:{i:0;s:4:\"test\";i:1;s:4:\"test\";i:2;s:4:\"test\";}','2021-06-21 22:38:51','2021-06-21 22:38:51');

INSERT INTO vehicle_make  (`id`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `date_manufactured`, `date_reg`, `tyre_size_front`, `tyre_size_back`, `tyre_depth_front`, `tyre_depth_back`, `created_at`, `updated_at`) VALUES 
('1','test','1','Corolla','test','test','test','test','test','test','test','test','test','','','test','test','test','test','2021-06-21 22:36:09','2021-06-21 22:36:09');

INSERT INTO vehicle_make  (`id`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `date_manufactured`, `date_reg`, `tyre_size_front`, `tyre_size_back`, `tyre_depth_front`, `tyre_depth_back`, `created_at`, `updated_at`) VALUES 
('3','test','2','City','test','test','test','test','test','test','test','test','test','','','test','test','test','test','2021-06-21 22:38:51','2021-06-21 22:38:51');

INSERT INTO vehicle_make  (`id`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `date_manufactured`, `date_reg`, `tyre_size_front`, `tyre_size_back`, `tyre_depth_front`, `tyre_depth_back`, `created_at`, `updated_at`) VALUES 
('4','test','1','Prado','test','test','test','test','test','test','test','test','test','','','test','test','test','test','2021-06-21 22:49:07','2021-06-21 22:49:07');

INSERT INTO vehicle_make  (`id`, `account_number`, `make`, `model`, `derivative`, `chassis_number`, `engine_cc`, `fuel_type`, `engine_no`, `color`, `paint_code`, `key_code`, `radio_code`, `date_manufactured`, `date_reg`, `tyre_size_front`, `tyre_size_back`, `tyre_depth_front`, `tyre_depth_back`, `created_at`, `updated_at`) VALUES 
('5','test','2','Civic','test','test','test','test','test','test','test','test','test','','','test','test','test','test','2021-06-21 22:49:11','2021-06-21 22:49:11');
