CREATE DATABASE `autodeploy` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ipVM` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subnetVM` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `projects_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `partitionings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `hosts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `macaddress` varchar(17) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) unsigned NOT NULL,
  `partitioning_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `hosts_name_unique` (`name`),
  KEY `hosts_project_id_foreign` (`project_id`),
  KEY `hosts_partitioning_id_foreign` (`partitioning_id`),
  CONSTRAINT `hosts_partitioning_id_foreign` FOREIGN KEY (`partitioning_id`) REFERENCES `partitionings` (`id`),
  CONSTRAINT `hosts_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `netdevices` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pcislot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linkstatus` tinyint(1) NOT NULL DEFAULT '0',
  `isbondmaster` tinyint(1) NOT NULL DEFAULT '0',
  `bondslave` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ipaddr` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `netmask` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gateway` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bcksubnet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bckmask` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `host_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `netdevices_host_id_foreign` (`host_id`),
  CONSTRAINT `netdevices_host_id_foreign` FOREIGN KEY (`host_id`) REFERENCES `hosts` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `diskobjects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `device` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `devicetype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` int(11) NOT NULL DEFAULT '0',
  `fstype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logicalname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `partitioning_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `diskobjects_partitioning_id_foreign` (`partitioning_id`),
  CONSTRAINT `diskobjects_partitioning_id_foreign` FOREIGN KEY (`partitioning_id`) REFERENCES `partitionings` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
