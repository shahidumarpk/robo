-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2019 at 06:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `magiclamp`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminmenus`
--

CREATE TABLE `adminmenus` (
  `id` int(10) UNSIGNED NOT NULL,
  `menutitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parentid` int(10) UNSIGNED DEFAULT NULL,
  `showinnav` tinyint(1) DEFAULT NULL,
  `setasdefault` tinyint(1) DEFAULT NULL,
  `iconclass` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `urllink` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `displayorder` int(11) DEFAULT NULL,
  `mselect` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adminmenus`
--

INSERT INTO `adminmenus` (`id`, `menutitle`, `slug`, `parentid`, `showinnav`, `setasdefault`, `iconclass`, `urllink`, `displayorder`, `mselect`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Dashboard', 'dashboard', NULL, 1, 1, 'fa fa-dashboard', '/dashboard', 0, 'dashboard', 1, '2018-08-09 14:00:00', '2018-08-10 06:11:19'),
(2, 'Admins', 'main-admins', NULL, 1, 1, 'fa fa-users', '#', 1, 'roles,admins, roles.edit, admins.edit, admins.create, admins.show, resetpassword, roles.create', 1, '2018-08-09 14:00:00', '2018-09-18 14:00:00'),
(3, 'Roles', 'roles-index', 2, 1, 1, NULL, '/roles', 0, 'roles, roles.edit, roles.create', 1, '2018-08-09 14:00:00', '2018-08-10 14:00:00'),
(4, 'Manage Staff/Admin', 'admins-index', 2, 1, 1, NULL, '/admins', 1, 'admins, admins.edit, admins.create, admins.show, resetpassword', 1, '2018-08-09 14:00:00', '2018-08-10 06:44:18'),
(5, 'Settings', 'settings', NULL, 1, 1, 'fa fa-gear', '#', 15, 'menu, menu.edit,, menu.create', 1, '2018-08-09 14:00:00', '2018-08-10 06:48:01'),
(6, 'Manage Menu', 'menu-index', 5, 1, 1, NULL, '/menu', 0, 'menu, menu.edit,, menu.create', 1, '2018-08-09 14:00:00', '2018-08-10 06:47:49'),
(7, 'Customers', 'customers', NULL, 1, 1, 'fa fa-users', '#', 3, 'customers, customers.edit, customers.create, customers.show, customer.resetpassword,leads,leads.edit,leads.create,createrecording,leads.show', 1, '2018-08-12 14:00:00', '2018-08-12 14:00:00'),
(28, 'Add Staff', 'create-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 14:00:00', '2018-09-21 14:00:00'),
(29, 'Staff Details', 'show-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 14:00:00', '2018-09-21 22:10:17'),
(30, 'Edit Staff', 'edit-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 14:00:00', '2018-09-21 14:00:00'),
(31, 'Change Staff Status', 'status-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 14:00:00', '2018-09-21 14:00:00'),
(32, 'Delete Staff', 'delete-staff', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 14:00:00', '2018-09-21 14:00:00'),
(33, 'Staff Reset Password', 'staff-reset-password', 2, NULL, NULL, NULL, '#', 0, NULL, 1, '2018-09-21 14:00:00', '2018-09-21 14:00:00'),
(54, 'Manage Customers', NULL, 7, 1, 1, NULL, 'customers', 0, 'customers,customers.create,customers.edit', 1, '2018-10-08 14:00:00', '2018-10-08 14:00:00'),
(55, 'Sellers/Shops', 'sellers', NULL, 1, 1, 'fa fa-users', '#', 3, 'sellers, sellers.edit, sellers.create, sellers.show, sellers.resetpassword', 1, '2018-08-12 14:00:00', '2018-10-23 14:00:00'),
(56, 'Manage Sellers/Shops', 'sellersindex', 55, 1, 1, NULL, 'sellers', 0, 'sellers,sellers.create,sellers.edit', 1, '2018-10-08 14:00:00', '2018-10-23 22:07:03'),
(57, 'Products', 'products', NULL, 1, 1, 'fa fa-users', '#', 3, 'products, products.show', 1, '2018-08-12 14:00:00', '2018-10-23 14:00:00'),
(58, 'Manage Products', 'productsindex', 57, 1, 1, NULL, 'products', 0, 'products,products.create,products.edit', 1, '2018-10-08 14:00:00', '2018-10-23 22:07:03'),
(59, 'Categories', 'categories', NULL, 1, 1, 'fa fa-list-alt', '#', 3, 'categories, categories.show', 1, '2018-08-12 14:00:00', '2018-10-23 14:00:00'),
(60, 'Manage Categories', 'categoriesindex', 59, 1, 1, NULL, 'categories', 0, 'categories,categories.create,categories.edit', 1, '2018-10-08 14:00:00', '2018-10-23 22:07:03'),
(61, 'Manage Categories Attribute', 'categoriesattributes', 59, 1, 1, NULL, 'attributes', 0, 'categories,categories.create,categories.edit,attributes', 1, '2018-10-08 14:00:00', '2018-10-24 00:10:23'),
(62, 'Orders', NULL, NULL, 1, 1, 'fa fa-shopping-cart', '#', 5, 'orders,', 1, '2018-11-06 14:00:00', '2018-11-16 14:00:00'),
(63, 'Manager Orders', NULL, 62, 1, 1, NULL, 'orders', 1, 'orders', 1, '2018-11-06 14:00:00', '2018-11-06 14:00:00'),
(64, 'Membership', NULL, NULL, 1, 1, 'fa  fa-dollar', '#', 6, 'memberships,', 1, '2018-11-06 14:00:00', '2018-11-07 00:47:43'),
(65, 'Membership Reports', NULL, 64, 1, NULL, NULL, 'membershipsreports', 1, 'memberships,', 1, '2018-11-06 14:00:00', '2018-11-07 01:56:55'),
(66, 'Manage Membership', NULL, 64, 1, NULL, NULL, 'memberships', 1, 'memberships,', 1, '2018-11-06 14:00:00', '2018-11-06 14:00:00'),
(67, 'Manage New Shop Requests', NULL, 55, 1, NULL, NULL, 'sellers/pending', 0, 'sellers.pending', 1, '2018-11-16 14:00:00', '2018-11-16 14:00:00'),
(68, 'Messages', NULL, 62, 1, 1, NULL, 'orders/messages', 0, 'orders.messages,', 1, '2018-11-16 14:00:00', '2018-11-16 14:00:00'),
(69, 'Support', NULL, NULL, 1, 1, 'fa  fa-support', 'support', 0, 'support', 1, '2018-11-16 14:00:00', '2018-11-16 14:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2014_10_12_000000_create_users_table', 1),
(4, '2014_10_12_100000_create_password_resets_table', 1),
(5, '2018_06_30_123326_update_users_table', 2),
(8, '2018_08_09_160359_create_adminmenus_table', 3),
(9, '2018_08_10_155020_update_adminmenus_table', 4),
(10, '2018_08_11_055335_create_roles_table', 5),
(11, '2018_08_11_144905_update_users_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci,
  `permission` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_modified_by` int(10) UNSIGNED NOT NULL,
  `modified_ip` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_title`, `permissions`, `permission`, `user_id`, `created_ip`, `last_modified_by`, `modified_ip`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', '{\"dashboard\":true,\"main-admins\":true,\"roles-index\":true,\"admins-index\":true,\"settings\":true,\"menu-index\":true,\"customers\":true,\"customers-index\":true,\"leads-index\":true,\"projects\":true,\"projects-index\":true,\"create-lead\":true,\"edit-lead\":true,\"status-lead\":true,\"show-lead\":true,\"delete-lead\":true,\"search-leads\":true,\"show-all-leads\":true,\"create-recording\":true,\"create-appointment\":true,\"create-doc\":true,\"create-proposal\":true,\"create-project\":true,\"upload-proposal\":true,\"edit-proposal\":true,\"create-staff\":true,\"show-staff\":true,\"edit-staff\":true,\"status-staff\":true,\"delete-staff\":true,\"staff-reset-password\":true,\"create-customer\":true,\"show-customer\":true,\"edit-customer\":true,\"status-customer\":true,\"delete-customer\":true,\"reset-customer-password\":true,\"approve-reject-lead\":true,\"for-training-lead\":true,\"training\":true,\"chapters-index\":true,\"topics\":true,\"stats-number\":true,\"lead-chart-10\":true,\"appointment-chart-10\":true,\"today-appointments\":true,\"latest-appointments\":true,\"latest-leads\":true,\"latest-recordings\":true,\"pending-proposal\":true,\"show-dashboard-calendar\":true}', '1,2,3,4,28,29,30,31,32,33,5,6,7,54,55,56,67,57,58,59,60,61,62,63,68,64,65,66,69', 1, '::1', 1, '127.0.0.1', 1, '2018-08-10 14:00:00', '2018-11-16 14:00:00'),
(2, 'User', '{\"dashboard\":true,\"main-customers\":true,\"customer-index\":true,\"leads-index\":true}', '1,7,8,9', 1, '::1', 1, '127.0.0.1', 1, '2018-08-10 14:00:00', '2018-09-18 22:40:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `otp` int(11) DEFAULT NULL,
  `iscustomer` tinyint(1) NOT NULL DEFAULT '0',
  `role_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `phonenumber`, `avatar`, `status`, `remember_token`, `created_at`, `updated_at`, `otp`, `iscustomer`, `role_id`) VALUES
(1, 'Shahid', 'Umar', 'shahid.umar@gmail.com', '$2y$10$7F5O6ls7pvQD/OQIOx2NUOAQYJJvl7xNRb9aMSS68RWYBvO4TsyAS', '123123123', '1530116687shahid.jpg', 1, 'u1m027tUqkYd6Xwx8uR7TJBc2dsKQYRTcshW4xVU4WTtDeHaGHM47hAV94Of', '2018-06-25 10:22:52', '2018-12-17 04:43:41', 0, 0, 1),
(17, 'Micheal', 'Bole', 'michealbole2@gmail.com', '$2y$10$GGF9COctFLFcn8.1i.MplOWjMpzVqyceNFsXJ5fp460hpmdLivggS', '123123123', 'default_avatar_male.jpg', 1, NULL, '2018-06-26 19:00:00', '2018-06-27 11:26:02', NULL, 0, NULL),
(19, 'Ali', 'Waqas', 'aliwaqas@abc.com', '$2y$10$GGF9COctFLFcn8.1i.MplOWjMpzVqyceNFsXJ5fp460hpmdLivggS', '0123456789', 'default_avatar_male.jpg', 1, NULL, '2018-06-26 19:00:00', '2018-06-27 11:26:02', NULL, 1, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminmenus`
--
ALTER TABLE `adminmenus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `adminmenus_slug_unique` (`slug`),
  ADD KEY `adminmenus_parentid_foreign` (`parentid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roles_user_id_foreign` (`user_id`),
  ADD KEY `roles_last_modified_by_foreign` (`last_modified_by`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminmenus`
--
ALTER TABLE `adminmenus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adminmenus`
--
ALTER TABLE `adminmenus`
  ADD CONSTRAINT `adminmenus_parentid_foreign` FOREIGN KEY (`parentid`) REFERENCES `adminmenus` (`id`);

--
-- Constraints for table `roles`
--
ALTER TABLE `roles`
  ADD CONSTRAINT `roles_last_modified_by_foreign` FOREIGN KEY (`last_modified_by`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
