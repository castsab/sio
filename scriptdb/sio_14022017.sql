-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-02-2017 a las 14:43:50
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `sio`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `activity`
--

CREATE TABLE IF NOT EXISTS `activity` (
  `id` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text,
  `order` int(11) NOT NULL DEFAULT '0',
  `state` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `activity`
--

INSERT INTO `activity` (`id`, `id_service`, `code`, `name`, `description`, `order`, `state`) VALUES
(1, 1, 11, 'Recolección de informacion', '', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_assignment`
--

CREATE TABLE IF NOT EXISTS `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('root', '1', 1476568841);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item`
--

CREATE TABLE IF NOT EXISTS `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/admin/*', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/admin/assignment/*', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/assignment/assign', 2, NULL, NULL, NULL, 1476571982, 1476571982),
('/admin/assignment/index', 2, NULL, NULL, NULL, 1476571982, 1476571982),
('/admin/assignment/search', 2, NULL, NULL, NULL, 1476571982, 1476571982),
('/admin/assignment/view', 2, NULL, NULL, NULL, 1476571982, 1476571982),
('/admin/default/*', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/default/index', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/menu/*', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/menu/create', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/menu/delete', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/menu/index', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/menu/update', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/menu/view', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/permission/*', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/permission/assign', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/permission/create', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/permission/delete', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/permission/index', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/permission/search', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/permission/update', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/permission/view', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/role/*', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/role/assign', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/role/create', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/role/delete', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/role/index', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/role/search', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/role/update', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/role/view', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/route/*', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/route/assign', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/route/create', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/route/index', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/route/search', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/rule/*', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/admin/rule/create', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/admin/rule/delete', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/admin/rule/index', 2, NULL, NULL, NULL, 1476571983, 1476571983),
('/admin/rule/update', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/admin/rule/view', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/client/*', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/client/client-contact/*', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client-contact/create', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client-contact/delete', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client-contact/index', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client-contact/update', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client-contact/view', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client/*', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client/create', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client/delete', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client/index', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client/update', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/client/view', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/client/default/*', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/client/default/index', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/debug/*', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/debug/default/*', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/debug/default/index', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/debug/default/view', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/gii/*', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/gii/default/*', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/gii/default/action', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/gii/default/diff', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/gii/default/index', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/gii/default/preview', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/gii/default/view', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/quote/*', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/default/*', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/default/index', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote-service/*', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote-service/create', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote-service/delete', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote-service/index', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote-service/update', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote-service/view', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote/*', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote/create', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote/delete', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote/export-quote', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote/index', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote/update', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/quote/quote/view', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/reportico/*', 2, NULL, NULL, NULL, 1479571427, 1479571427),
('/reportico/default/*', 2, NULL, NULL, NULL, 1479571427, 1479571427),
('/reportico/default/index', 2, NULL, NULL, NULL, 1479571427, 1479571427),
('/reportico/default/login', 2, NULL, NULL, NULL, 1479571427, 1479571427),
('/reportico/mode/*', 2, NULL, NULL, NULL, 1479571427, 1479571427),
('/reportico/mode/admin', 2, NULL, NULL, NULL, 1479571427, 1479571427),
('/reportico/mode/execute', 2, NULL, NULL, NULL, 1479571427, 1479571427),
('/reportico/mode/menu', 2, NULL, NULL, NULL, 1479571427, 1479571427),
('/reportico/mode/prepare', 2, NULL, NULL, NULL, 1479571427, 1479571427),
('/reportico/mode/reportico', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/reportico/reportico/*', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/reportico/reportico/ajax', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/reportico/reportico/dbimage', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/reportico/reportico/graph', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/reportico/reportico/reportico', 2, NULL, NULL, NULL, 1479571426, 1479571426),
('/setting/*', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/activity/*', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/activity/create', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/activity/delete', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/activity/index', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/activity/list-activities', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/activity/update', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/activity/view', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/combo/*', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/combo/create', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/combo/delete', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/combo/index', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/combo/update', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/combo/view', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/default/*', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/default/index', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/option/*', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/option/create', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/option/delete', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/option/index', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/option/update', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/option/view', 2, NULL, NULL, NULL, 1479571424, 1479571424),
('/setting/person/*', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/person/create', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/person/delete', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/person/index', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/person/update', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/person/view', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/setting/service/*', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/service/create', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/service/delete', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/service/index', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/service/update', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/service/view', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/user/*', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/user/create', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/user/delete', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/user/index', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/user/update', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/setting/user/view', 2, NULL, NULL, NULL, 1479571425, 1479571425),
('/site/*', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/about', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/captcha', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/contact', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/error', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/index', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/login', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/logout', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/register-user', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('/site/request-password-reset', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/reset-password', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/signup', 2, NULL, NULL, NULL, 1476571984, 1476571984),
('/site/validate-person', 2, NULL, NULL, NULL, 1486993551, 1486993551),
('Administration', 2, 'admin', NULL, 'i:1;', 1478472205, 1478474729),
('Configuration', 2, 'setting', NULL, 'i:1;', 1478472451, 1478472451),
('Customers', 2, 'client', NULL, 'i:1;', 1478472496, 1478472496),
('Quotes', 2, 'quote', NULL, 'i:1;', 1478472519, 1478472519),
('root', 1, NULL, NULL, NULL, 1446051897, 1446219470);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_item_child`
--

CREATE TABLE IF NOT EXISTS `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('root', 'Administration'),
('root', 'Configuration'),
('root', 'Customers'),
('root', 'Quotes');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_rule`
--

CREATE TABLE IF NOT EXISTS `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` text COLLATE utf8_unicode_ci,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `type_document` smallint(2) NOT NULL,
  `document` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `type_client` smallint(2) NOT NULL,
  `city_origin` varchar(50) NOT NULL,
  `name_company` varchar(200) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `web_site` varchar(100) DEFAULT NULL,
  `fax` varchar(50) DEFAULT NULL,
  `pbx` varchar(50) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `office_address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cell_phone` int(10) DEFAULT NULL,
  `local_phone` int(10) DEFAULT NULL,
  `extension` int(5) DEFAULT NULL,
  `contact_project` smallint(2) NOT NULL,
  `contact_business` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `client`
--

INSERT INTO `client` (`type_document`, `document`, `id_user`, `type_client`, `city_origin`, `name_company`, `address`, `web_site`, `fax`, `pbx`, `status`, `created_at`, `updated_at`, `first_name`, `last_name`, `office_address`, `email`, `cell_phone`, `local_phone`, `extension`, `contact_project`, `contact_business`) VALUES
(1, 1024472653, 1, 1, '1101', 'wwww', 'dddd@dd.com', '', '', '', 1, 1478649998, 1478649998, 'Diego Armando', 'Castellanos Sabogal', '', '', 2147483647, NULL, NULL, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `client_contact`
--

CREATE TABLE IF NOT EXISTS `client_contact` (
  `id` int(11) NOT NULL,
  `document` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `office_address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `cell_phone` int(10) DEFAULT NULL,
  `local_phone` int(10) DEFAULT NULL,
  `extension` int(5) DEFAULT NULL,
  `contact_project` smallint(2) NOT NULL,
  `contact_business` smallint(2) NOT NULL,
  `status` int(2) DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `combo`
--

CREATE TABLE IF NOT EXISTS `combo` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `state` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `combo`
--

INSERT INTO `combo` (`id`, `name`, `description`, `state`) VALUES
(1, 'Estado de los registros en la base', '', 1),
(2, 'Líneas de negocio', '', 1),
(3, 'Tipos de documentos', '', 1),
(4, 'Tipos de cliente', '', 1),
(5, 'Lista de si o no', '', 1),
(6, 'Estados de la cotización', '', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `department`
--

INSERT INTO `department` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(5, 'ANTIOQUIA', 10, 2016, 2016),
(8, 'ATLÁNTICO', 10, 2016, 2016),
(11, 'BOGOTÁ, D. C.', 10, 2016, 2016),
(13, 'BOLÍVAR', 10, 2016, 2016),
(15, 'BOYACÁ', 10, 2016, 2016),
(17, 'CALDAS', 10, 2016, 2016),
(18, 'CAQUETÁ', 10, 2016, 2016),
(19, 'CAUCA', 10, 2016, 2016),
(20, 'CESAR', 10, 2016, 2016),
(23, 'CÓRDOBA', 10, 2016, 2016),
(25, 'CUNDINAMARCA', 10, 2016, 2016),
(27, 'CHOCÓ', 10, 2016, 2016),
(41, 'HUILA', 10, 2016, 2016),
(44, 'LA GUAJIRA', 10, 2016, 2016),
(47, 'MAGDALENA', 10, 2016, 2016),
(50, 'META', 10, 2016, 2016),
(52, 'NARIÑO', 10, 2016, 2016),
(54, 'NORTE DE SANTANDER', 10, 2016, 2016),
(63, 'QUINDÍO', 10, 2016, 2016),
(66, 'RISARALDA', 10, 2016, 2016),
(68, 'SANTANDER', 10, 2016, 2016),
(70, 'SUCRE', 10, 2016, 2016),
(73, 'TOLIMA', 10, 2016, 2016),
(76, 'VALLE DEL CAUCA', 10, 2016, 2016),
(81, 'ARAUCA', 10, 2016, 2016),
(85, 'CASANARE', 10, 2016, 2016),
(86, 'PUTUMAYO', 10, 2016, 2016),
(88, 'ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA', 10, 2016, 2016),
(91, 'AMAZONAS', 10, 2016, 2016),
(94, 'GUAINÍA', 10, 2016, 2016),
(95, 'GUAVIARE', 10, 2016, 2016),
(97, 'VAUPÉS', 10, 2016, 2016),
(99, 'VICHADA', 10, 2016, 2016);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE IF NOT EXISTS `menu` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `parent` int(11) DEFAULT NULL,
  `route` varchar(256) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  `data` text
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id`, `name`, `parent`, `route`, `order`, `data`) VALUES
(3, 'Assignments', NULL, '/admin/assignment/index', 1, 'admin'),
(4, 'Roles', NULL, '/admin/role/index', 2, 'admin'),
(5, 'Routes', NULL, '/admin/route/index', 3, 'admin'),
(6, 'Menu', NULL, '/admin/menu/index', 5, 'admin'),
(7, 'Permissions', NULL, '/admin/permission/index', 4, 'admin'),
(8, 'People', NULL, '/setting/person/index', 1, 'setting'),
(9, 'Quotes', NULL, '/quote/quote/index', 1, 'quote');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1476566182),
('m130524_201442_init', 1476566807),
('m140506_102106_rbac_init', 1476566212),
('m140602_111327_create_menu_table', 1476566184),
('m161015_215700_rbac_init', 1476568707),
('m161016_121702_create_client', 1476709593),
('m161017_115155_create_line_business', 1476709594),
('m161017_115948_create_service', 1476709595),
('m161017_120521_create_quote', 1476709595),
('m161017_121333_create_quote_service', 1476709706),
('m161017_125031_create_client_contact', 1476709707),
('m161029_113526_create_combo', 1477741028),
('m161029_113616_create_option', 1477741028),
('m161029_121746_populate_combo', 1477743749),
('m161031_212428_populate_service', 1478464886),
('m161031_214312_alter_service', 1478464887),
('m161101_134321_alter_service', 1478464887),
('m161101_134835_delete_line_business', 1478464887),
('m161101_142158_alter_user', 1478464888),
('m161101_210820_populate_combo', 1478464888),
('m161101_211548_populate_combo', 1478464888),
('m161101_213108_alter_client', 1478464890),
('m161102_133949_create_department', 1478464890),
('m161102_134207_create_municipality', 1478464891),
('m161102_134357_populate_department', 1478464891),
('m161102_134718_populate_municipality', 1478464892),
('m161102_143241_alter_client', 1478464894),
('m161104_134038_alter_quote', 1478648389),
('m161104_154105_populate_combo', 1478648389),
('m161109_014822_alter_quote', 1478656447),
('m161114_224934_populate_combo', 1479164999),
('m170112_015141_create_activity', 1485380497),
('m170121_095609_alter_quote_service', 1485380497),
('m170121_152600_alter_quote_service', 1485380497),
('m170211_114936_create_person', 1486993703),
('m170211_160218_alter_user', 1486993703),
('m170213_145217_alter_quote', 1486998028);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipality`
--

CREATE TABLE IF NOT EXISTS `municipality` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_department` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipality`
--

INSERT INTO `municipality` (`id`, `id_department`, `name`, `status`, `created_at`, `updated_at`) VALUES
(511, 5, 'CIUDAD BOLÍVAR', 1, 2016, 2016),
(517, 5, 'BRICEÑO', 1, 2016, 2016),
(531, 5, 'GÓMEZ PLATA', 1, 2016, 2016),
(1101, 11, 'BOGOTÁ, D.C.', 1, 2016, 2016),
(1381, 13, 'TIQUISIO', 1, 2016, 2016),
(1514, 15, 'BOYACÁ', 1, 2016, 2016),
(1516, 15, 'BRICEÑO', 1, 2016, 2016),
(1519, 15, 'BUENAVISTA', 1, 2016, 2016),
(1581, 15, 'TIPACOQUE', 1, 2016, 2016),
(1841, 18, 'LA MONTAÑITA', 1, 2016, 2016),
(1861, 18, 'SAN JOSÉ DEL FRAGUA', 1, 2016, 2016),
(1910, 19, 'BOLÍVAR', 1, 2016, 2016),
(1911, 19, 'BUENOS AIRES', 1, 2016, 2016),
(2031, 20, 'GONZÁLEZ', 1, 2016, 2016),
(2071, 20, 'SAN ALBERTO', 1, 2016, 2016),
(2781, 27, 'UNIÓN PANAMERICANA', 1, 2016, 2016),
(4101, 41, 'NEIVA', 1, 2016, 2016),
(4106, 41, 'ACEVEDO', 1, 2016, 2016),
(4113, 41, 'AGRADO', 1, 2016, 2016),
(4116, 41, 'AIPE', 1, 2016, 2016),
(4120, 41, 'ALGECIRAS', 1, 2016, 2016),
(4126, 41, 'ALTAMIRA', 1, 2016, 2016),
(4178, 41, 'BARAYA', 1, 2016, 2016),
(4411, 44, 'EL MOLINO', 1, 2016, 2016),
(5001, 5, 'MEDELLÍN', 1, 2016, 2016),
(5002, 5, 'ABEJORRAL', 1, 2016, 2016),
(5004, 5, 'ABRIAQUÍ', 1, 2016, 2016),
(5011, 50, 'BARRANCA DE UPÍA', 1, 2016, 2016),
(5021, 5, 'ALEJANDRÍA', 1, 2016, 2016),
(5030, 5, 'AMAGÁ', 1, 2016, 2016),
(5031, 5, 'AMALFI', 1, 2016, 2016),
(5034, 5, 'ANDES', 1, 2016, 2016),
(5036, 5, 'ANGELÓPOLIS', 1, 2016, 2016),
(5038, 5, 'ANGOSTURA', 1, 2016, 2016),
(5040, 5, 'ANORÍ', 1, 2016, 2016),
(5042, 5, 'SANTAFÉ DE ANTIOQUIA', 1, 2016, 2016),
(5044, 5, 'ANZA', 1, 2016, 2016),
(5045, 5, 'APARTADÓ', 1, 2016, 2016),
(5051, 5, 'ARBOLETES', 1, 2016, 2016),
(5055, 5, 'ARGELIA', 1, 2016, 2016),
(5059, 5, 'ARMENIA', 1, 2016, 2016),
(5079, 5, 'BARBOSA', 1, 2016, 2016),
(5086, 5, 'BELMIRA', 1, 2016, 2016),
(5088, 5, 'BELLO', 1, 2016, 2016),
(5091, 5, 'BETANIA', 1, 2016, 2016),
(5093, 5, 'BETULIA', 1, 2016, 2016),
(5113, 5, 'BURITICÁ', 1, 2016, 2016),
(5120, 5, 'CÁCERES', 1, 2016, 2016),
(5125, 5, 'CAICEDO', 1, 2016, 2016),
(5129, 5, 'CALDAS', 1, 2016, 2016),
(5134, 5, 'CAMPAMENTO', 1, 2016, 2016),
(5138, 5, 'CAÑASGORDAS', 1, 2016, 2016),
(5142, 5, 'CARACOLÍ', 1, 2016, 2016),
(5145, 5, 'CARAMANTA', 1, 2016, 2016),
(5147, 5, 'CAREPA', 1, 2016, 2016),
(5148, 5, 'EL CARMEN DE VIBORAL', 1, 2016, 2016),
(5150, 5, 'CAROLINA', 1, 2016, 2016),
(5154, 5, 'CAUCASIA', 1, 2016, 2016),
(5172, 5, 'CHIGORODÓ', 1, 2016, 2016),
(5190, 5, 'CISNEROS', 1, 2016, 2016),
(5197, 5, 'COCORNÁ', 1, 2016, 2016),
(5206, 5, 'CONCEPCIÓN', 1, 2016, 2016),
(5209, 5, 'CONCORDIA', 1, 2016, 2016),
(5211, 52, 'BUESACO', 1, 2016, 2016),
(5212, 5, 'COPACABANA', 1, 2016, 2016),
(5221, 52, 'CONTADERO', 1, 2016, 2016),
(5234, 5, 'DABEIBA', 1, 2016, 2016),
(5237, 5, 'DONMATÍAS', 1, 2016, 2016),
(5240, 5, 'EBÉJICO', 1, 2016, 2016),
(5250, 5, 'EL BAGRE', 1, 2016, 2016),
(5264, 5, 'ENTRERRIOS', 1, 2016, 2016),
(5266, 5, 'ENVIGADO', 1, 2016, 2016),
(5282, 5, 'FREDONIA', 1, 2016, 2016),
(5284, 5, 'FRONTINO', 1, 2016, 2016),
(5306, 5, 'GIRALDO', 1, 2016, 2016),
(5308, 5, 'GIRARDOTA', 1, 2016, 2016),
(5313, 5, 'GRANADA', 1, 2016, 2016),
(5315, 5, 'GUADALUPE', 1, 2016, 2016),
(5318, 5, 'GUARNE', 1, 2016, 2016),
(5321, 5, 'GUATAPE', 1, 2016, 2016),
(5347, 5, 'HELICONIA', 1, 2016, 2016),
(5353, 5, 'HISPANIA', 1, 2016, 2016),
(5360, 5, 'ITAGUI', 1, 2016, 2016),
(5361, 5, 'ITUANGO', 1, 2016, 2016),
(5364, 5, 'JARDÍN', 1, 2016, 2016),
(5368, 5, 'JERICÓ', 1, 2016, 2016),
(5376, 5, 'LA CEJA', 1, 2016, 2016),
(5380, 5, 'LA ESTRELLA', 1, 2016, 2016),
(5390, 5, 'LA PINTADA', 1, 2016, 2016),
(5400, 5, 'LA UNIÓN', 1, 2016, 2016),
(5411, 5, 'LIBORINA', 1, 2016, 2016),
(5419, 54, 'BUCARASICA', 1, 2016, 2016),
(5425, 5, 'MACEO', 1, 2016, 2016),
(5440, 5, 'MARINILLA', 1, 2016, 2016),
(5467, 5, 'MONTEBELLO', 1, 2016, 2016),
(5475, 5, 'MURINDÓ', 1, 2016, 2016),
(5480, 5, 'MUTATÁ', 1, 2016, 2016),
(5481, 54, 'TIBÚ', 1, 2016, 2016),
(5483, 5, 'NARIÑO', 1, 2016, 2016),
(5490, 5, 'NECOCLÍ', 1, 2016, 2016),
(5495, 5, 'NECHÍ', 1, 2016, 2016),
(5501, 5, 'OLAYA', 1, 2016, 2016),
(5541, 5, 'PEÑOL', 1, 2016, 2016),
(5543, 5, 'PEQUE', 1, 2016, 2016),
(5576, 5, 'PUEBLORRICO', 1, 2016, 2016),
(5579, 5, 'PUERTO BERRÍO', 1, 2016, 2016),
(5585, 5, 'PUERTO NARE', 1, 2016, 2016),
(5591, 5, 'PUERTO TRIUNFO', 1, 2016, 2016),
(5604, 5, 'REMEDIOS', 1, 2016, 2016),
(5607, 5, 'RETIRO', 1, 2016, 2016),
(5615, 5, 'RIONEGRO', 1, 2016, 2016),
(5628, 5, 'SABANALARGA', 1, 2016, 2016),
(5631, 5, 'SABANETA', 1, 2016, 2016),
(5642, 5, 'SALGAR', 1, 2016, 2016),
(5647, 5, 'SAN ANDRÉS DE CUERQUÍA', 1, 2016, 2016),
(5649, 5, 'SAN CARLOS', 1, 2016, 2016),
(5652, 5, 'SAN FRANCISCO', 1, 2016, 2016),
(5656, 5, 'SAN JERÓNIMO', 1, 2016, 2016),
(5658, 5, 'SAN JOSÉ DE LA MONTAÑA', 1, 2016, 2016),
(5659, 5, 'SAN JUAN DE URABÁ', 1, 2016, 2016),
(5660, 5, 'SAN LUIS', 1, 2016, 2016),
(5664, 5, 'SAN PEDRO DE LOS MILAGROS', 1, 2016, 2016),
(5665, 5, 'SAN PEDRO DE URABA', 1, 2016, 2016),
(5667, 5, 'SAN RAFAEL', 1, 2016, 2016),
(5670, 5, 'SAN ROQUE', 1, 2016, 2016),
(5674, 5, 'SAN VICENTE FERRER', 1, 2016, 2016),
(5679, 5, 'SANTA BÁRBARA', 1, 2016, 2016),
(5686, 5, 'SANTA ROSA DE OSOS', 1, 2016, 2016),
(5690, 5, 'SANTO DOMINGO', 1, 2016, 2016),
(5697, 5, 'EL SANTUARIO', 1, 2016, 2016),
(5736, 5, 'SEGOVIA', 1, 2016, 2016),
(5756, 5, 'SONSON', 1, 2016, 2016),
(5761, 5, 'SOPETRÁN', 1, 2016, 2016),
(5789, 5, 'TÁMESIS', 1, 2016, 2016),
(5790, 5, 'TARAZÁ', 1, 2016, 2016),
(5792, 5, 'TARSO', 1, 2016, 2016),
(5809, 5, 'TITIRIBÍ', 1, 2016, 2016),
(5819, 5, 'TOLEDO', 1, 2016, 2016),
(5837, 5, 'TURBO', 1, 2016, 2016),
(5842, 5, 'URAMITA', 1, 2016, 2016),
(5847, 5, 'URRAO', 1, 2016, 2016),
(5854, 5, 'VALDIVIA', 1, 2016, 2016),
(5856, 5, 'VALPARAÍSO', 1, 2016, 2016),
(5858, 5, 'VEGACHÍ', 1, 2016, 2016),
(5861, 5, 'VENECIA', 1, 2016, 2016),
(5873, 5, 'VIGÍA DEL FUERTE', 1, 2016, 2016),
(5885, 5, 'YALÍ', 1, 2016, 2016),
(5887, 5, 'YARUMAL', 1, 2016, 2016),
(5890, 5, 'YOLOMBÓ', 1, 2016, 2016),
(5893, 5, 'YONDÓ', 1, 2016, 2016),
(5895, 5, 'ZARAGOZA', 1, 2016, 2016),
(6811, 68, 'BOLÍVAR', 1, 2016, 2016),
(7011, 70, 'BUENAVISTA', 1, 2016, 2016),
(7610, 76, 'BOLÍVAR', 1, 2016, 2016),
(7619, 76, 'BUENAVENTURA', 1, 2016, 2016),
(8001, 8, 'BARRANQUILLA', 1, 2016, 2016),
(8078, 8, 'BARANOA', 1, 2016, 2016),
(8101, 81, 'ARAUCA', 1, 2016, 2016),
(8137, 8, 'CAMPO DE LA CRUZ', 1, 2016, 2016),
(8141, 8, 'CANDELARIA', 1, 2016, 2016),
(8165, 81, 'ARAUQUITA', 1, 2016, 2016),
(8296, 8, 'GALAPA', 1, 2016, 2016),
(8372, 8, 'JUAN DE ACOSTA', 1, 2016, 2016),
(8421, 8, 'LURUACO', 1, 2016, 2016),
(8433, 8, 'MALAMBO', 1, 2016, 2016),
(8436, 8, 'MANATÍ', 1, 2016, 2016),
(8501, 85, 'AGUAZUL', 1, 2016, 2016),
(8520, 8, 'PALMAR DE VARELA', 1, 2016, 2016),
(8541, 85, 'TAURAMENA', 1, 2016, 2016),
(8549, 8, 'PIOJÓ', 1, 2016, 2016),
(8558, 8, 'POLONUEVO', 1, 2016, 2016),
(8560, 8, 'PONEDERA', 1, 2016, 2016),
(8573, 8, 'PUERTO COLOMBIA', 1, 2016, 2016),
(8606, 8, 'REPELÓN', 1, 2016, 2016),
(8634, 8, 'SABANAGRANDE', 1, 2016, 2016),
(8638, 8, 'SABANALARGA', 1, 2016, 2016),
(8675, 8, 'SANTA LUCÍA', 1, 2016, 2016),
(8685, 8, 'SANTO TOMÁS', 1, 2016, 2016),
(8758, 8, 'SOLEDAD', 1, 2016, 2016),
(8770, 8, 'SUAN', 1, 2016, 2016),
(8832, 8, 'TUBARÁ', 1, 2016, 2016),
(8849, 8, 'USIACURÍ', 1, 2016, 2016),
(9101, 91, 'LETICIA', 1, 2016, 2016),
(13001, 13, 'CARTAGENA', 1, 2016, 2016),
(13006, 13, 'ACHÍ', 1, 2016, 2016),
(13030, 13, 'ALTOS DEL ROSARIO', 1, 2016, 2016),
(13042, 13, 'ARENAL', 1, 2016, 2016),
(13052, 13, 'ARJONA', 1, 2016, 2016),
(13062, 13, 'ARROYOHONDO', 1, 2016, 2016),
(13074, 13, 'BARRANCO DE LOBA', 1, 2016, 2016),
(13140, 13, 'CALAMAR', 1, 2016, 2016),
(13160, 13, 'CANTAGALLO', 1, 2016, 2016),
(13188, 13, 'CICUCO', 1, 2016, 2016),
(13212, 13, 'CÓRDOBA', 1, 2016, 2016),
(13222, 13, 'CLEMENCIA', 1, 2016, 2016),
(13244, 13, 'EL CARMEN DE BOLÍVAR', 1, 2016, 2016),
(13248, 13, 'EL GUAMO', 1, 2016, 2016),
(13268, 13, 'EL PEÑÓN', 1, 2016, 2016),
(13300, 13, 'HATILLO DE LOBA', 1, 2016, 2016),
(13430, 13, 'MAGANGUÉ', 1, 2016, 2016),
(13433, 13, 'MAHATES', 1, 2016, 2016),
(13440, 13, 'MARGARITA', 1, 2016, 2016),
(13442, 13, 'MARÍA LA BAJA', 1, 2016, 2016),
(13458, 13, 'MONTECRISTO', 1, 2016, 2016),
(13468, 13, 'MOMPÓS', 1, 2016, 2016),
(13473, 13, 'MORALES', 1, 2016, 2016),
(13490, 13, 'NOROSÍ', 1, 2016, 2016),
(13549, 13, 'PINILLOS', 1, 2016, 2016),
(13580, 13, 'REGIDOR', 1, 2016, 2016),
(13600, 13, 'RÍO VIEJO', 1, 2016, 2016),
(13620, 13, 'SAN CRISTÓBAL', 1, 2016, 2016),
(13647, 13, 'SAN ESTANISLAO', 1, 2016, 2016),
(13650, 13, 'SAN FERNANDO', 1, 2016, 2016),
(13654, 13, 'SAN JACINTO', 1, 2016, 2016),
(13655, 13, 'SAN JACINTO DEL CAUCA', 1, 2016, 2016),
(13657, 13, 'SAN JUAN NEPOMUCENO', 1, 2016, 2016),
(13667, 13, 'SAN MARTÍN DE LOBA', 1, 2016, 2016),
(13670, 13, 'SAN PABLO', 1, 2016, 2016),
(13673, 13, 'SANTA CATALINA', 1, 2016, 2016),
(13683, 13, 'SANTA ROSA', 1, 2016, 2016),
(13688, 13, 'SANTA ROSA DEL SUR', 1, 2016, 2016),
(13744, 13, 'SIMITÍ', 1, 2016, 2016),
(13760, 13, 'SOPLAVIENTO', 1, 2016, 2016),
(13780, 13, 'TALAIGUA NUEVO', 1, 2016, 2016),
(13836, 13, 'TURBACO', 1, 2016, 2016),
(13838, 13, 'TURBANÁ', 1, 2016, 2016),
(13873, 13, 'VILLANUEVA', 1, 2016, 2016),
(13894, 13, 'ZAMBRANO', 1, 2016, 2016),
(15001, 15, 'TUNJA', 1, 2016, 2016),
(15022, 15, 'ALMEIDA', 1, 2016, 2016),
(15047, 15, 'AQUITANIA', 1, 2016, 2016),
(15051, 15, 'ARCABUCO', 1, 2016, 2016),
(15087, 15, 'BELÉN', 1, 2016, 2016),
(15090, 15, 'BERBEO', 1, 2016, 2016),
(15092, 15, 'BETÉITIVA', 1, 2016, 2016),
(15097, 15, 'BOAVITA', 1, 2016, 2016),
(15114, 15, 'BUSBANZÁ', 1, 2016, 2016),
(15131, 15, 'CALDAS', 1, 2016, 2016),
(15135, 15, 'CAMPOHERMOSO', 1, 2016, 2016),
(15162, 15, 'CERINZA', 1, 2016, 2016),
(15172, 15, 'CHINAVITA', 1, 2016, 2016),
(15176, 15, 'CHIQUINQUIRÁ', 1, 2016, 2016),
(15180, 15, 'CHISCAS', 1, 2016, 2016),
(15183, 15, 'CHITA', 1, 2016, 2016),
(15185, 15, 'CHITARAQUE', 1, 2016, 2016),
(15187, 15, 'CHIVATÁ', 1, 2016, 2016),
(15189, 15, 'CIÉNEGA', 1, 2016, 2016),
(15204, 15, 'CÓMBITA', 1, 2016, 2016),
(15212, 15, 'COPER', 1, 2016, 2016),
(15215, 15, 'CORRALES', 1, 2016, 2016),
(15218, 15, 'COVARACHÍA', 1, 2016, 2016),
(15223, 15, 'CUBARÁ', 1, 2016, 2016),
(15224, 15, 'CUCAITA', 1, 2016, 2016),
(15226, 15, 'CUÍTIVA', 1, 2016, 2016),
(15232, 15, 'CHÍQUIZA', 1, 2016, 2016),
(15236, 15, 'CHIVOR', 1, 2016, 2016),
(15238, 15, 'DUITAMA', 1, 2016, 2016),
(15244, 15, 'EL COCUY', 1, 2016, 2016),
(15248, 15, 'EL ESPINO', 1, 2016, 2016),
(15272, 15, 'FIRAVITOBA', 1, 2016, 2016),
(15276, 15, 'FLORESTA', 1, 2016, 2016),
(15293, 15, 'GACHANTIVÁ', 1, 2016, 2016),
(15296, 15, 'GAMEZA', 1, 2016, 2016),
(15299, 15, 'GARAGOA', 1, 2016, 2016),
(15317, 15, 'GUACAMAYAS', 1, 2016, 2016),
(15322, 15, 'GUATEQUE', 1, 2016, 2016),
(15325, 15, 'GUAYATÁ', 1, 2016, 2016),
(15332, 15, 'GÜICÁN', 1, 2016, 2016),
(15362, 15, 'IZA', 1, 2016, 2016),
(15367, 15, 'JENESANO', 1, 2016, 2016),
(15368, 15, 'JERICÓ', 1, 2016, 2016),
(15377, 15, 'LABRANZAGRANDE', 1, 2016, 2016),
(15380, 15, 'LA CAPILLA', 1, 2016, 2016),
(15401, 15, 'LA VICTORIA', 1, 2016, 2016),
(15403, 15, 'LA UVITA', 1, 2016, 2016),
(15407, 15, 'VILLA DE LEYVA', 1, 2016, 2016),
(15425, 15, 'MACANAL', 1, 2016, 2016),
(15442, 15, 'MARIPÍ', 1, 2016, 2016),
(15455, 15, 'MIRAFLORES', 1, 2016, 2016),
(15464, 15, 'MONGUA', 1, 2016, 2016),
(15466, 15, 'MONGUÍ', 1, 2016, 2016),
(15469, 15, 'MONIQUIRÁ', 1, 2016, 2016),
(15476, 15, 'MOTAVITA', 1, 2016, 2016),
(15480, 15, 'MUZO', 1, 2016, 2016),
(15491, 15, 'NOBSA', 1, 2016, 2016),
(15494, 15, 'NUEVO COLÓN', 1, 2016, 2016),
(15500, 15, 'OICATÁ', 1, 2016, 2016),
(15507, 15, 'OTANCHE', 1, 2016, 2016),
(15511, 15, 'PACHAVITA', 1, 2016, 2016),
(15514, 15, 'PÁEZ', 1, 2016, 2016),
(15516, 15, 'PAIPA', 1, 2016, 2016),
(15518, 15, 'PAJARITO', 1, 2016, 2016),
(15522, 15, 'PANQUEBA', 1, 2016, 2016),
(15531, 15, 'PAUNA', 1, 2016, 2016),
(15533, 15, 'PAYA', 1, 2016, 2016),
(15537, 15, 'PAZ DE RÍO', 1, 2016, 2016),
(15542, 15, 'PESCA', 1, 2016, 2016),
(15550, 15, 'PISBA', 1, 2016, 2016),
(15572, 15, 'PUERTO BOYACÁ', 1, 2016, 2016),
(15580, 15, 'QUÍPAMA', 1, 2016, 2016),
(15599, 15, 'RAMIRIQUÍ', 1, 2016, 2016),
(15600, 15, 'RÁQUIRA', 1, 2016, 2016),
(15621, 15, 'RONDÓN', 1, 2016, 2016),
(15632, 15, 'SABOYÁ', 1, 2016, 2016),
(15638, 15, 'SÁCHICA', 1, 2016, 2016),
(15646, 15, 'SAMACÁ', 1, 2016, 2016),
(15660, 15, 'SAN EDUARDO', 1, 2016, 2016),
(15664, 15, 'SAN JOSÉ DE PARE', 1, 2016, 2016),
(15667, 15, 'SAN LUIS DE GACENO', 1, 2016, 2016),
(15673, 15, 'SAN MATEO', 1, 2016, 2016),
(15676, 15, 'SAN MIGUEL DE SEMA', 1, 2016, 2016),
(15681, 15, 'SAN PABLO DE BORBUR', 1, 2016, 2016),
(15686, 15, 'SANTANA', 1, 2016, 2016),
(15690, 15, 'SANTA MARÍA', 1, 2016, 2016),
(15693, 15, 'SANTA ROSA DE VITERBO', 1, 2016, 2016),
(15696, 15, 'SANTA SOFÍA', 1, 2016, 2016),
(15720, 15, 'SATIVANORTE', 1, 2016, 2016),
(15723, 15, 'SATIVASUR', 1, 2016, 2016),
(15740, 15, 'SIACHOQUE', 1, 2016, 2016),
(15753, 15, 'SOATÁ', 1, 2016, 2016),
(15755, 15, 'SOCOTÁ', 1, 2016, 2016),
(15757, 15, 'SOCHA', 1, 2016, 2016),
(15759, 15, 'SOGAMOSO', 1, 2016, 2016),
(15761, 15, 'SOMONDOCO', 1, 2016, 2016),
(15762, 15, 'SORA', 1, 2016, 2016),
(15763, 15, 'SOTAQUIRÁ', 1, 2016, 2016),
(15764, 15, 'SORACÁ', 1, 2016, 2016),
(15774, 15, 'SUSACÓN', 1, 2016, 2016),
(15776, 15, 'SUTAMARCHÁN', 1, 2016, 2016),
(15778, 15, 'SUTATENZA', 1, 2016, 2016),
(15790, 15, 'TASCO', 1, 2016, 2016),
(15798, 15, 'TENZA', 1, 2016, 2016),
(15804, 15, 'TIBANÁ', 1, 2016, 2016),
(15806, 15, 'TIBASOSA', 1, 2016, 2016),
(15808, 15, 'TINJACÁ', 1, 2016, 2016),
(15814, 15, 'TOCA', 1, 2016, 2016),
(15816, 15, 'TOGÜÍ', 1, 2016, 2016),
(15820, 15, 'TÓPAGA', 1, 2016, 2016),
(15822, 15, 'TOTA', 1, 2016, 2016),
(15832, 15, 'TUNUNGUÁ', 1, 2016, 2016),
(15835, 15, 'TURMEQUÉ', 1, 2016, 2016),
(15837, 15, 'TUTA', 1, 2016, 2016),
(15839, 15, 'TUTAZÁ', 1, 2016, 2016),
(15842, 15, 'UMBITA', 1, 2016, 2016),
(15861, 15, 'VENTAQUEMADA', 1, 2016, 2016),
(15879, 15, 'VIRACACHÁ', 1, 2016, 2016),
(15897, 15, 'ZETAQUIRA', 1, 2016, 2016),
(17001, 17, 'MANIZALES', 1, 2016, 2016),
(17013, 17, 'AGUADAS', 1, 2016, 2016),
(17042, 17, 'ANSERMA', 1, 2016, 2016),
(17050, 17, 'ARANZAZU', 1, 2016, 2016),
(17088, 17, 'BELALCÁZAR', 1, 2016, 2016),
(17174, 17, 'CHINCHINÁ', 1, 2016, 2016),
(17272, 17, 'FILADELFIA', 1, 2016, 2016),
(17380, 17, 'LA DORADA', 1, 2016, 2016),
(17388, 17, 'LA MERCED', 1, 2016, 2016),
(17433, 17, 'MANZANARES', 1, 2016, 2016),
(17442, 17, 'MARMATO', 1, 2016, 2016),
(17444, 17, 'MARQUETALIA', 1, 2016, 2016),
(17446, 17, 'MARULANDA', 1, 2016, 2016),
(17486, 17, 'NEIRA', 1, 2016, 2016),
(17495, 17, 'NORCASIA', 1, 2016, 2016),
(17513, 17, 'PÁCORA', 1, 2016, 2016),
(17524, 17, 'PALESTINA', 1, 2016, 2016),
(17541, 17, 'PENSILVANIA', 1, 2016, 2016),
(17614, 17, 'RIOSUCIO', 1, 2016, 2016),
(17616, 17, 'RISARALDA', 1, 2016, 2016),
(17653, 17, 'SALAMINA', 1, 2016, 2016),
(17662, 17, 'SAMANÁ', 1, 2016, 2016),
(17665, 17, 'SAN JOSÉ', 1, 2016, 2016),
(17777, 17, 'SUPÍA', 1, 2016, 2016),
(17867, 17, 'VICTORIA', 1, 2016, 2016),
(17873, 17, 'VILLAMARÍA', 1, 2016, 2016),
(17877, 17, 'VITERBO', 1, 2016, 2016),
(18001, 18, 'FLORENCIA', 1, 2016, 2016),
(18029, 18, 'ALBANIA', 1, 2016, 2016),
(18094, 18, 'BELÉN DE LOS ANDAQUÍES', 1, 2016, 2016),
(18150, 18, 'CARTAGENA DEL CHAIRÁ', 1, 2016, 2016),
(18205, 18, 'CURILLO', 1, 2016, 2016),
(18247, 18, 'EL DONCELLO', 1, 2016, 2016),
(18256, 18, 'EL PAUJIL', 1, 2016, 2016),
(18460, 18, 'MILÁN', 1, 2016, 2016),
(18479, 18, 'MORELIA', 1, 2016, 2016),
(18592, 18, 'PUERTO RICO', 1, 2016, 2016),
(18753, 18, 'SAN VICENTE DEL CAGUÁN', 1, 2016, 2016),
(18756, 18, 'SOLANO', 1, 2016, 2016),
(18785, 18, 'SOLITA', 1, 2016, 2016),
(18860, 18, 'VALPARAÍSO', 1, 2016, 2016),
(19001, 19, 'POPAYÁN', 1, 2016, 2016),
(19022, 19, 'ALMAGUER', 1, 2016, 2016),
(19050, 19, 'ARGELIA', 1, 2016, 2016),
(19075, 19, 'BALBOA', 1, 2016, 2016),
(19130, 19, 'CAJIBÍO', 1, 2016, 2016),
(19137, 19, 'CALDONO', 1, 2016, 2016),
(19142, 19, 'CALOTO', 1, 2016, 2016),
(19212, 19, 'CORINTO', 1, 2016, 2016),
(19256, 19, 'EL TAMBO', 1, 2016, 2016),
(19290, 19, 'FLORENCIA', 1, 2016, 2016),
(19300, 19, 'GUACHENÉ', 1, 2016, 2016),
(19318, 19, 'GUAPI', 1, 2016, 2016),
(19355, 19, 'INZÁ', 1, 2016, 2016),
(19364, 19, 'JAMBALÓ', 1, 2016, 2016),
(19392, 19, 'LA SIERRA', 1, 2016, 2016),
(19397, 19, 'LA VEGA', 1, 2016, 2016),
(19418, 19, 'LÓPEZ', 1, 2016, 2016),
(19450, 19, 'MERCADERES', 1, 2016, 2016),
(19455, 19, 'MIRANDA', 1, 2016, 2016),
(19473, 19, 'MORALES', 1, 2016, 2016),
(19513, 19, 'PADILLA', 1, 2016, 2016),
(19517, 19, 'PAEZ', 1, 2016, 2016),
(19532, 19, 'PATÍA', 1, 2016, 2016),
(19533, 19, 'PIAMONTE', 1, 2016, 2016),
(19548, 19, 'PIENDAMÓ', 1, 2016, 2016),
(19573, 19, 'PUERTO TEJADA', 1, 2016, 2016),
(19585, 19, 'PURACÉ', 1, 2016, 2016),
(19622, 19, 'ROSAS', 1, 2016, 2016),
(19693, 19, 'SAN SEBASTIÁN', 1, 2016, 2016),
(19698, 19, 'SANTANDER DE QUILICHAO', 1, 2016, 2016),
(19701, 19, 'SANTA ROSA', 1, 2016, 2016),
(19743, 19, 'SILVIA', 1, 2016, 2016),
(19760, 19, 'SOTARA', 1, 2016, 2016),
(19780, 19, 'SUÁREZ', 1, 2016, 2016),
(19785, 19, 'SUCRE', 1, 2016, 2016),
(19807, 19, 'TIMBÍO', 1, 2016, 2016),
(19809, 19, 'TIMBIQUÍ', 1, 2016, 2016),
(19821, 19, 'TORIBIO', 1, 2016, 2016),
(19824, 19, 'TOTORÓ', 1, 2016, 2016),
(19845, 19, 'VILLA RICA', 1, 2016, 2016),
(20001, 20, 'VALLEDUPAR', 1, 2016, 2016),
(20011, 20, 'AGUACHICA', 1, 2016, 2016),
(20013, 20, 'AGUSTÍN CODAZZI', 1, 2016, 2016),
(20032, 20, 'ASTREA', 1, 2016, 2016),
(20045, 20, 'BECERRIL', 1, 2016, 2016),
(20060, 20, 'BOSCONIA', 1, 2016, 2016),
(20175, 20, 'CHIMICHAGUA', 1, 2016, 2016),
(20178, 20, 'CHIRIGUANÁ', 1, 2016, 2016),
(20228, 20, 'CURUMANÍ', 1, 2016, 2016),
(20238, 20, 'EL COPEY', 1, 2016, 2016),
(20250, 20, 'EL PASO', 1, 2016, 2016),
(20295, 20, 'GAMARRA', 1, 2016, 2016),
(20383, 20, 'LA GLORIA', 1, 2016, 2016),
(20400, 20, 'LA JAGUA DE IBIRICO', 1, 2016, 2016),
(20443, 20, 'MANAURE', 1, 2016, 2016),
(20517, 20, 'PAILITAS', 1, 2016, 2016),
(20550, 20, 'PELAYA', 1, 2016, 2016),
(20570, 20, 'PUEBLO BELLO', 1, 2016, 2016),
(20614, 20, 'RÍO DE ORO', 1, 2016, 2016),
(20621, 20, 'LA PAZ', 1, 2016, 2016),
(20750, 20, 'SAN DIEGO', 1, 2016, 2016),
(20770, 20, 'SAN MARTÍN', 1, 2016, 2016),
(20787, 20, 'TAMALAMEQUE', 1, 2016, 2016),
(23001, 23, 'MONTERÍA', 1, 2016, 2016),
(23068, 23, 'AYAPEL', 1, 2016, 2016),
(23079, 23, 'BUENAVISTA', 1, 2016, 2016),
(23090, 23, 'CANALETE', 1, 2016, 2016),
(23162, 23, 'CERETÉ', 1, 2016, 2016),
(23168, 23, 'CHIMÁ', 1, 2016, 2016),
(23182, 23, 'CHINÚ', 1, 2016, 2016),
(23189, 23, 'CIÉNAGA DE ORO', 1, 2016, 2016),
(23300, 23, 'COTORRA', 1, 2016, 2016),
(23350, 23, 'LA APARTADA', 1, 2016, 2016),
(23417, 23, 'LORICA', 1, 2016, 2016),
(23419, 23, 'LOS CÓRDOBAS', 1, 2016, 2016),
(23464, 23, 'MOMIL', 1, 2016, 2016),
(23466, 23, 'MONTELÍBANO', 1, 2016, 2016),
(23500, 23, 'MOÑITOS', 1, 2016, 2016),
(23555, 23, 'PLANETA RICA', 1, 2016, 2016),
(23570, 23, 'PUEBLO NUEVO', 1, 2016, 2016),
(23574, 23, 'PUERTO ESCONDIDO', 1, 2016, 2016),
(23580, 23, 'PUERTO LIBERTADOR', 1, 2016, 2016),
(23586, 23, 'PURÍSIMA', 1, 2016, 2016),
(23660, 23, 'SAHAGÚN', 1, 2016, 2016),
(23670, 23, 'SAN ANDRÉS DE SOTAVENTO', 1, 2016, 2016),
(23672, 23, 'SAN ANTERO', 1, 2016, 2016),
(23675, 23, 'SAN BERNARDO DEL VIENTO', 1, 2016, 2016),
(23678, 23, 'SAN CARLOS', 1, 2016, 2016),
(23682, 23, 'SAN JOSÉ DE URÉ', 1, 2016, 2016),
(23686, 23, 'SAN PELAYO', 1, 2016, 2016),
(23807, 23, 'TIERRALTA', 1, 2016, 2016),
(23815, 23, 'TUCHÍN', 1, 2016, 2016),
(23855, 23, 'VALENCIA', 1, 2016, 2016),
(25001, 25, 'AGUA DE DIOS', 1, 2016, 2016),
(25019, 25, 'ALBÁN', 1, 2016, 2016),
(25035, 25, 'ANAPOIMA', 1, 2016, 2016),
(25040, 25, 'ANOLAIMA', 1, 2016, 2016),
(25053, 25, 'ARBELÁEZ', 1, 2016, 2016),
(25086, 25, 'BELTRÁN', 1, 2016, 2016),
(25095, 25, 'BITUIMA', 1, 2016, 2016),
(25099, 25, 'BOJACÁ', 1, 2016, 2016),
(25120, 25, 'CABRERA', 1, 2016, 2016),
(25123, 25, 'CACHIPAY', 1, 2016, 2016),
(25126, 25, 'CAJICÁ', 1, 2016, 2016),
(25148, 25, 'CAPARRAPÍ', 1, 2016, 2016),
(25151, 25, 'CAQUEZA', 1, 2016, 2016),
(25154, 25, 'CARMEN DE CARUPA', 1, 2016, 2016),
(25168, 25, 'CHAGUANÍ', 1, 2016, 2016),
(25175, 25, 'CHÍA', 1, 2016, 2016),
(25178, 25, 'CHIPAQUE', 1, 2016, 2016),
(25181, 25, 'CHOACHÍ', 1, 2016, 2016),
(25183, 25, 'CHOCONTÁ', 1, 2016, 2016),
(25200, 25, 'COGUA', 1, 2016, 2016),
(25214, 25, 'COTA', 1, 2016, 2016),
(25224, 25, 'CUCUNUBÁ', 1, 2016, 2016),
(25245, 25, 'EL COLEGIO', 1, 2016, 2016),
(25258, 25, 'EL PEÑÓN', 1, 2016, 2016),
(25260, 25, 'EL ROSAL', 1, 2016, 2016),
(25269, 25, 'FACATATIVÁ', 1, 2016, 2016),
(25279, 25, 'FOMEQUE', 1, 2016, 2016),
(25281, 25, 'FOSCA', 1, 2016, 2016),
(25286, 25, 'FUNZA', 1, 2016, 2016),
(25288, 25, 'FÚQUENE', 1, 2016, 2016),
(25290, 25, 'FUSAGASUGÁ', 1, 2016, 2016),
(25293, 25, 'GACHALA', 1, 2016, 2016),
(25295, 25, 'GACHANCIPÁ', 1, 2016, 2016),
(25297, 25, 'GACHETÁ', 1, 2016, 2016),
(25299, 25, 'GAMA', 1, 2016, 2016),
(25307, 25, 'GIRARDOT', 1, 2016, 2016),
(25312, 25, 'GRANADA', 1, 2016, 2016),
(25317, 25, 'GUACHETÁ', 1, 2016, 2016),
(25320, 25, 'GUADUAS', 1, 2016, 2016),
(25322, 25, 'GUASCA', 1, 2016, 2016),
(25324, 25, 'GUATAQUÍ', 1, 2016, 2016),
(25326, 25, 'GUATAVITA', 1, 2016, 2016),
(25328, 25, 'GUAYABAL DE SIQUIMA', 1, 2016, 2016),
(25335, 25, 'GUAYABETAL', 1, 2016, 2016),
(25339, 25, 'GUTIÉRREZ', 1, 2016, 2016),
(25368, 25, 'JERUSALÉN', 1, 2016, 2016),
(25372, 25, 'JUNÍN', 1, 2016, 2016),
(25377, 25, 'LA CALERA', 1, 2016, 2016),
(25386, 25, 'LA MESA', 1, 2016, 2016),
(25394, 25, 'LA PALMA', 1, 2016, 2016),
(25398, 25, 'LA PEÑA', 1, 2016, 2016),
(25402, 25, 'LA VEGA', 1, 2016, 2016),
(25407, 25, 'LENGUAZAQUE', 1, 2016, 2016),
(25426, 25, 'MACHETA', 1, 2016, 2016),
(25430, 25, 'MADRID', 1, 2016, 2016),
(25436, 25, 'MANTA', 1, 2016, 2016),
(25438, 25, 'MEDINA', 1, 2016, 2016),
(25473, 25, 'MOSQUERA', 1, 2016, 2016),
(25483, 25, 'NARIÑO', 1, 2016, 2016),
(25486, 25, 'NEMOCÓN', 1, 2016, 2016),
(25488, 25, 'NILO', 1, 2016, 2016),
(25489, 25, 'NIMAIMA', 1, 2016, 2016),
(25491, 25, 'NOCAIMA', 1, 2016, 2016),
(25506, 25, 'VENECIA', 1, 2016, 2016),
(25513, 25, 'PACHO', 1, 2016, 2016),
(25518, 25, 'PAIME', 1, 2016, 2016),
(25524, 25, 'PANDI', 1, 2016, 2016),
(25530, 25, 'PARATEBUENO', 1, 2016, 2016),
(25535, 25, 'PASCA', 1, 2016, 2016),
(25572, 25, 'PUERTO SALGAR', 1, 2016, 2016),
(25580, 25, 'PULÍ', 1, 2016, 2016),
(25592, 25, 'QUEBRADANEGRA', 1, 2016, 2016),
(25594, 25, 'QUETAME', 1, 2016, 2016),
(25596, 25, 'QUIPILE', 1, 2016, 2016),
(25599, 25, 'APULO', 1, 2016, 2016),
(25612, 25, 'RICAURTE', 1, 2016, 2016),
(25645, 25, 'SAN ANTONIO DEL TEQUENDAMA', 1, 2016, 2016),
(25649, 25, 'SAN BERNARDO', 1, 2016, 2016),
(25653, 25, 'SAN CAYETANO', 1, 2016, 2016),
(25658, 25, 'SAN FRANCISCO', 1, 2016, 2016),
(25662, 25, 'SAN JUAN DE RÍO SECO', 1, 2016, 2016),
(25718, 25, 'SASAIMA', 1, 2016, 2016),
(25736, 25, 'SESQUILÉ', 1, 2016, 2016),
(25740, 25, 'SIBATÉ', 1, 2016, 2016),
(25743, 25, 'SILVANIA', 1, 2016, 2016),
(25745, 25, 'SIMIJACA', 1, 2016, 2016),
(25754, 25, 'SOACHA', 1, 2016, 2016),
(25758, 25, 'SOPÓ', 1, 2016, 2016),
(25769, 25, 'SUBACHOQUE', 1, 2016, 2016),
(25772, 25, 'SUESCA', 1, 2016, 2016),
(25777, 25, 'SUPATÁ', 1, 2016, 2016),
(25779, 25, 'SUSA', 1, 2016, 2016),
(25781, 25, 'SUTATAUSA', 1, 2016, 2016),
(25785, 25, 'TABIO', 1, 2016, 2016),
(25793, 25, 'TAUSA', 1, 2016, 2016),
(25797, 25, 'TENA', 1, 2016, 2016),
(25799, 25, 'TENJO', 1, 2016, 2016),
(25805, 25, 'TIBACUY', 1, 2016, 2016),
(25807, 25, 'TIBIRITA', 1, 2016, 2016),
(25815, 25, 'TOCAIMA', 1, 2016, 2016),
(25817, 25, 'TOCANCIPÁ', 1, 2016, 2016),
(25823, 25, 'TOPAIPÍ', 1, 2016, 2016),
(25839, 25, 'UBALÁ', 1, 2016, 2016),
(25841, 25, 'UBAQUE', 1, 2016, 2016),
(25843, 25, 'VILLA DE SAN DIEGO DE UBATE', 1, 2016, 2016),
(25845, 25, 'UNE', 1, 2016, 2016),
(25851, 25, 'ÚTICA', 1, 2016, 2016),
(25862, 25, 'VERGARA', 1, 2016, 2016),
(25867, 25, 'VIANÍ', 1, 2016, 2016),
(25871, 25, 'VILLAGÓMEZ', 1, 2016, 2016),
(25873, 25, 'VILLAPINZÓN', 1, 2016, 2016),
(25875, 25, 'VILLETA', 1, 2016, 2016),
(25878, 25, 'VIOTÁ', 1, 2016, 2016),
(25885, 25, 'YACOPÍ', 1, 2016, 2016),
(25898, 25, 'ZIPACÓN', 1, 2016, 2016),
(25899, 25, 'ZIPAQUIRÁ', 1, 2016, 2016),
(27001, 27, 'QUIBDÓ', 1, 2016, 2016),
(27006, 27, 'ACANDÍ', 1, 2016, 2016),
(27025, 27, 'ALTO BAUDÓ', 1, 2016, 2016),
(27050, 27, 'ATRATO', 1, 2016, 2016),
(27073, 27, 'BAGADÓ', 1, 2016, 2016),
(27075, 27, 'BAHÍA SOLANO', 1, 2016, 2016),
(27077, 27, 'BAJO BAUDÓ', 1, 2016, 2016),
(27086, 27, 'BELÉN DE BAJIRÁ', 1, 2016, 2016),
(27099, 27, 'BOJAYA', 1, 2016, 2016),
(27135, 27, 'EL CANTÓN DEL SAN PABLO', 1, 2016, 2016),
(27150, 27, 'CARMEN DEL DARIÉN', 1, 2016, 2016),
(27160, 27, 'CÉRTEGUI', 1, 2016, 2016),
(27205, 27, 'CONDOTO', 1, 2016, 2016),
(27245, 27, 'EL CARMEN DE ATRATO', 1, 2016, 2016),
(27250, 27, 'EL LITORAL DEL SAN JUAN', 1, 2016, 2016),
(27361, 27, 'ISTMINA', 1, 2016, 2016),
(27372, 27, 'JURADÓ', 1, 2016, 2016),
(27413, 27, 'LLORÓ', 1, 2016, 2016),
(27425, 27, 'MEDIO ATRATO', 1, 2016, 2016),
(27430, 27, 'MEDIO BAUDÓ', 1, 2016, 2016),
(27450, 27, 'MEDIO SAN JUAN', 1, 2016, 2016),
(27491, 27, 'NÓVITA', 1, 2016, 2016),
(27495, 27, 'NUQUÍ', 1, 2016, 2016),
(27580, 27, 'RÍO IRÓ', 1, 2016, 2016),
(27600, 27, 'RÍO QUITO', 1, 2016, 2016),
(27615, 27, 'RIOSUCIO', 1, 2016, 2016),
(27660, 27, 'SAN JOSÉ DEL PALMAR', 1, 2016, 2016),
(27745, 27, 'SIPÍ', 1, 2016, 2016),
(27787, 27, 'TADÓ', 1, 2016, 2016),
(27800, 27, 'UNGUÍA', 1, 2016, 2016),
(41132, 41, 'CAMPOALEGRE', 1, 2016, 2016),
(41206, 41, 'COLOMBIA', 1, 2016, 2016),
(41244, 41, 'ELÍAS', 1, 2016, 2016),
(41298, 41, 'GARZÓN', 1, 2016, 2016),
(41306, 41, 'GIGANTE', 1, 2016, 2016),
(41319, 41, 'GUADALUPE', 1, 2016, 2016),
(41349, 41, 'HOBO', 1, 2016, 2016),
(41357, 41, 'IQUIRA', 1, 2016, 2016),
(41359, 41, 'ISNOS', 1, 2016, 2016),
(41378, 41, 'LA ARGENTINA', 1, 2016, 2016),
(41396, 41, 'LA PLATA', 1, 2016, 2016),
(41483, 41, 'NÁTAGA', 1, 2016, 2016),
(41503, 41, 'OPORAPA', 1, 2016, 2016),
(41518, 41, 'PAICOL', 1, 2016, 2016),
(41524, 41, 'PALERMO', 1, 2016, 2016),
(41530, 41, 'PALESTINA', 1, 2016, 2016),
(41548, 41, 'PITAL', 1, 2016, 2016),
(41551, 41, 'PITALITO', 1, 2016, 2016),
(41615, 41, 'RIVERA', 1, 2016, 2016),
(41660, 41, 'SALADOBLANCO', 1, 2016, 2016),
(41668, 41, 'SAN AGUSTÍN', 1, 2016, 2016),
(41676, 41, 'SANTA MARÍA', 1, 2016, 2016),
(41770, 41, 'SUAZA', 1, 2016, 2016),
(41791, 41, 'TARQUI', 1, 2016, 2016),
(41797, 41, 'TESALIA', 1, 2016, 2016),
(41799, 41, 'TELLO', 1, 2016, 2016),
(41801, 41, 'TERUEL', 1, 2016, 2016),
(41807, 41, 'TIMANÁ', 1, 2016, 2016),
(41872, 41, 'VILLAVIEJA', 1, 2016, 2016),
(41885, 41, 'YAGUARÁ', 1, 2016, 2016),
(44001, 44, 'RIOHACHA', 1, 2016, 2016),
(44035, 44, 'ALBANIA', 1, 2016, 2016),
(44078, 44, 'BARRANCAS', 1, 2016, 2016),
(44090, 44, 'DIBULLA', 1, 2016, 2016),
(44098, 44, 'DISTRACCIÓN', 1, 2016, 2016),
(44279, 44, 'FONSECA', 1, 2016, 2016),
(44378, 44, 'HATONUEVO', 1, 2016, 2016),
(44420, 44, 'LA JAGUA DEL PILAR', 1, 2016, 2016),
(44430, 44, 'MAICAO', 1, 2016, 2016),
(44560, 44, 'MANAURE', 1, 2016, 2016),
(44650, 44, 'SAN JUAN DEL CESAR', 1, 2016, 2016),
(44847, 44, 'URIBIA', 1, 2016, 2016),
(44855, 44, 'URUMITA', 1, 2016, 2016),
(44874, 44, 'VILLANUEVA', 1, 2016, 2016),
(47001, 47, 'SANTA MARTA', 1, 2016, 2016),
(47030, 47, 'ALGARROBO', 1, 2016, 2016),
(47053, 47, 'ARACATACA', 1, 2016, 2016),
(47058, 47, 'ARIGUANÍ', 1, 2016, 2016),
(47161, 47, 'CERRO SAN ANTONIO', 1, 2016, 2016),
(47170, 47, 'CHIVOLO', 1, 2016, 2016),
(47189, 47, 'CIÉNAGA', 1, 2016, 2016),
(47205, 47, 'CONCORDIA', 1, 2016, 2016),
(47245, 47, 'EL BANCO', 1, 2016, 2016),
(47258, 47, 'EL PIÑON', 1, 2016, 2016),
(47268, 47, 'EL RETÉN', 1, 2016, 2016),
(47288, 47, 'FUNDACIÓN', 1, 2016, 2016),
(47318, 47, 'GUAMAL', 1, 2016, 2016),
(47460, 47, 'NUEVA GRANADA', 1, 2016, 2016),
(47541, 47, 'PEDRAZA', 1, 2016, 2016),
(47545, 47, 'PIJIÑO DEL CARMEN', 1, 2016, 2016),
(47551, 47, 'PIVIJAY', 1, 2016, 2016),
(47555, 47, 'PLATO', 1, 2016, 2016),
(47570, 47, 'PUEBLOVIEJO', 1, 2016, 2016),
(47605, 47, 'REMOLINO', 1, 2016, 2016),
(47660, 47, 'SABANAS DE SAN ANGEL', 1, 2016, 2016),
(47675, 47, 'SALAMINA', 1, 2016, 2016),
(47692, 47, 'SAN SEBASTIÁN DE BUENAVISTA', 1, 2016, 2016),
(47703, 47, 'SAN ZENÓN', 1, 2016, 2016),
(47707, 47, 'SANTA ANA', 1, 2016, 2016),
(47720, 47, 'SANTA BÁRBARA DE PINTO', 1, 2016, 2016),
(47745, 47, 'SITIONUEVO', 1, 2016, 2016),
(47798, 47, 'TENERIFE', 1, 2016, 2016),
(47960, 47, 'ZAPAYÁN', 1, 2016, 2016),
(47980, 47, 'ZONA BANANERA', 1, 2016, 2016),
(50001, 50, 'VILLAVICENCIO', 1, 2016, 2016),
(50006, 50, 'ACACÍAS', 1, 2016, 2016),
(50124, 50, 'CABUYARO', 1, 2016, 2016),
(50150, 50, 'CASTILLA LA NUEVA', 1, 2016, 2016),
(50223, 50, 'SAN LUIS DE CUBARRAL', 1, 2016, 2016),
(50226, 50, 'CUMARAL', 1, 2016, 2016),
(50245, 50, 'EL CALVARIO', 1, 2016, 2016),
(50251, 50, 'EL CASTILLO', 1, 2016, 2016),
(50270, 50, 'EL DORADO', 1, 2016, 2016),
(50287, 50, 'FUENTE DE ORO', 1, 2016, 2016),
(50313, 50, 'GRANADA', 1, 2016, 2016),
(50318, 50, 'GUAMAL', 1, 2016, 2016),
(50325, 50, 'MAPIRIPÁN', 1, 2016, 2016),
(50330, 50, 'MESETAS', 1, 2016, 2016),
(50350, 50, 'LA MACARENA', 1, 2016, 2016),
(50370, 50, 'URIBE', 1, 2016, 2016),
(50400, 50, 'LEJANÍAS', 1, 2016, 2016),
(50450, 50, 'PUERTO CONCORDIA', 1, 2016, 2016),
(50568, 50, 'PUERTO GAITÁN', 1, 2016, 2016),
(50573, 50, 'PUERTO LÓPEZ', 1, 2016, 2016),
(50577, 50, 'PUERTO LLERAS', 1, 2016, 2016),
(50590, 50, 'PUERTO RICO', 1, 2016, 2016),
(50606, 50, 'RESTREPO', 1, 2016, 2016),
(50680, 50, 'SAN CARLOS DE GUAROA', 1, 2016, 2016),
(50683, 50, 'SAN JUAN DE ARAMA', 1, 2016, 2016),
(50686, 50, 'SAN JUANITO', 1, 2016, 2016),
(50689, 50, 'SAN MARTÍN', 1, 2016, 2016),
(50711, 50, 'VISTAHERMOSA', 1, 2016, 2016),
(52001, 52, 'PASTO', 1, 2016, 2016),
(52019, 52, 'ALBÁN', 1, 2016, 2016),
(52022, 52, 'ALDANA', 1, 2016, 2016),
(52036, 52, 'ANCUYÁ', 1, 2016, 2016),
(52051, 52, 'ARBOLEDA', 1, 2016, 2016),
(52079, 52, 'BARBACOAS', 1, 2016, 2016),
(52083, 52, 'BELÉN', 1, 2016, 2016),
(52203, 52, 'COLÓN', 1, 2016, 2016),
(52207, 52, 'CONSACÁ', 1, 2016, 2016),
(52215, 52, 'CÓRDOBA', 1, 2016, 2016),
(52224, 52, 'CUASPUD', 1, 2016, 2016),
(52227, 52, 'CUMBAL', 1, 2016, 2016),
(52233, 52, 'CUMBITARA', 1, 2016, 2016),
(52240, 52, 'CHACHAGÜÍ', 1, 2016, 2016),
(52250, 52, 'EL CHARCO', 1, 2016, 2016),
(52254, 52, 'EL PEÑOL', 1, 2016, 2016),
(52256, 52, 'EL ROSARIO', 1, 2016, 2016),
(52258, 52, 'EL TABLÓN DE GÓMEZ', 1, 2016, 2016),
(52260, 52, 'EL TAMBO', 1, 2016, 2016),
(52287, 52, 'FUNES', 1, 2016, 2016),
(52317, 52, 'GUACHUCAL', 1, 2016, 2016),
(52320, 52, 'GUAITARILLA', 1, 2016, 2016),
(52323, 52, 'GUALMATÁN', 1, 2016, 2016),
(52352, 52, 'ILES', 1, 2016, 2016),
(52354, 52, 'IMUÉS', 1, 2016, 2016),
(52356, 52, 'IPIALES', 1, 2016, 2016),
(52378, 52, 'LA CRUZ', 1, 2016, 2016),
(52381, 52, 'LA FLORIDA', 1, 2016, 2016),
(52385, 52, 'LA LLANADA', 1, 2016, 2016),
(52390, 52, 'LA TOLA', 1, 2016, 2016),
(52399, 52, 'LA UNIÓN', 1, 2016, 2016),
(52405, 52, 'LEIVA', 1, 2016, 2016),
(52411, 52, 'LINARES', 1, 2016, 2016),
(52418, 52, 'LOS ANDES', 1, 2016, 2016),
(52427, 52, 'MAGÜI', 1, 2016, 2016),
(52435, 52, 'MALLAMA', 1, 2016, 2016),
(52473, 52, 'MOSQUERA', 1, 2016, 2016),
(52480, 52, 'NARIÑO', 1, 2016, 2016),
(52490, 52, 'OLAYA HERRERA', 1, 2016, 2016),
(52506, 52, 'OSPINA', 1, 2016, 2016),
(52520, 52, 'FRANCISCO PIZARRO', 1, 2016, 2016),
(52540, 52, 'POLICARPA', 1, 2016, 2016),
(52560, 52, 'POTOSÍ', 1, 2016, 2016),
(52565, 52, 'PROVIDENCIA', 1, 2016, 2016),
(52573, 52, 'PUERRES', 1, 2016, 2016),
(52585, 52, 'PUPIALES', 1, 2016, 2016),
(52612, 52, 'RICAURTE', 1, 2016, 2016),
(52621, 52, 'ROBERTO PAYÁN', 1, 2016, 2016),
(52678, 52, 'SAMANIEGO', 1, 2016, 2016),
(52683, 52, 'SANDONÁ', 1, 2016, 2016),
(52685, 52, 'SAN BERNARDO', 1, 2016, 2016),
(52687, 52, 'SAN LORENZO', 1, 2016, 2016),
(52693, 52, 'SAN PABLO', 1, 2016, 2016),
(52694, 52, 'SAN PEDRO DE CARTAGO', 1, 2016, 2016),
(52696, 52, 'SANTA BÁRBARA', 1, 2016, 2016),
(52699, 52, 'SANTACRUZ', 1, 2016, 2016),
(52720, 52, 'SAPUYES', 1, 2016, 2016),
(52786, 52, 'TAMINANGO', 1, 2016, 2016),
(52788, 52, 'TANGUA', 1, 2016, 2016),
(52835, 52, 'SAN ANDRES DE TUMACO', 1, 2016, 2016),
(52838, 52, 'TÚQUERRES', 1, 2016, 2016),
(52885, 52, 'YACUANQUER', 1, 2016, 2016),
(54001, 54, 'CÚCUTA', 1, 2016, 2016),
(54003, 54, 'ABREGO', 1, 2016, 2016),
(54051, 54, 'ARBOLEDAS', 1, 2016, 2016),
(54099, 54, 'BOCHALEMA', 1, 2016, 2016),
(54125, 54, 'CÁCOTA', 1, 2016, 2016),
(54128, 54, 'CACHIRÁ', 1, 2016, 2016),
(54172, 54, 'CHINÁCOTA', 1, 2016, 2016),
(54174, 54, 'CHITAGÁ', 1, 2016, 2016),
(54206, 54, 'CONVENCIÓN', 1, 2016, 2016),
(54223, 54, 'CUCUTILLA', 1, 2016, 2016),
(54239, 54, 'DURANIA', 1, 2016, 2016),
(54245, 54, 'EL CARMEN', 1, 2016, 2016),
(54250, 54, 'EL TARRA', 1, 2016, 2016),
(54261, 54, 'EL ZULIA', 1, 2016, 2016),
(54313, 54, 'GRAMALOTE', 1, 2016, 2016),
(54344, 54, 'HACARÍ', 1, 2016, 2016),
(54347, 54, 'HERRÁN', 1, 2016, 2016),
(54377, 54, 'LABATECA', 1, 2016, 2016),
(54385, 54, 'LA ESPERANZA', 1, 2016, 2016),
(54398, 54, 'LA PLAYA', 1, 2016, 2016),
(54405, 54, 'LOS PATIOS', 1, 2016, 2016),
(54418, 54, 'LOURDES', 1, 2016, 2016),
(54480, 54, 'MUTISCUA', 1, 2016, 2016),
(54498, 54, 'OCAÑA', 1, 2016, 2016),
(54518, 54, 'PAMPLONA', 1, 2016, 2016),
(54520, 54, 'PAMPLONITA', 1, 2016, 2016),
(54553, 54, 'PUERTO SANTANDER', 1, 2016, 2016),
(54599, 54, 'RAGONVALIA', 1, 2016, 2016),
(54660, 54, 'SALAZAR', 1, 2016, 2016),
(54670, 54, 'SAN CALIXTO', 1, 2016, 2016),
(54673, 54, 'SAN CAYETANO', 1, 2016, 2016),
(54680, 54, 'SANTIAGO', 1, 2016, 2016),
(54720, 54, 'SARDINATA', 1, 2016, 2016),
(54743, 54, 'SILOS', 1, 2016, 2016),
(54800, 54, 'TEORAMA', 1, 2016, 2016),
(54820, 54, 'TOLEDO', 1, 2016, 2016),
(54871, 54, 'VILLA CARO', 1, 2016, 2016),
(54874, 54, 'VILLA DEL ROSARIO', 1, 2016, 2016),
(63001, 63, 'ARMENIA', 1, 2016, 2016),
(63111, 63, 'BUENAVISTA', 1, 2016, 2016),
(63130, 63, 'CALARCA', 1, 2016, 2016),
(63190, 63, 'CIRCASIA', 1, 2016, 2016),
(63212, 63, 'CÓRDOBA', 1, 2016, 2016),
(63272, 63, 'FILANDIA', 1, 2016, 2016),
(63302, 63, 'GÉNOVA', 1, 2016, 2016),
(63401, 63, 'LA TEBAIDA', 1, 2016, 2016),
(63470, 63, 'MONTENEGRO', 1, 2016, 2016),
(63548, 63, 'PIJAO', 1, 2016, 2016),
(63594, 63, 'QUIMBAYA', 1, 2016, 2016),
(63690, 63, 'SALENTO', 1, 2016, 2016),
(66001, 66, 'PEREIRA', 1, 2016, 2016),
(66045, 66, 'APÍA', 1, 2016, 2016),
(66075, 66, 'BALBOA', 1, 2016, 2016),
(66088, 66, 'BELÉN DE UMBRÍA', 1, 2016, 2016),
(66170, 66, 'DOSQUEBRADAS', 1, 2016, 2016),
(66318, 66, 'GUÁTICA', 1, 2016, 2016),
(66383, 66, 'LA CELIA', 1, 2016, 2016),
(66400, 66, 'LA VIRGINIA', 1, 2016, 2016),
(66440, 66, 'MARSELLA', 1, 2016, 2016),
(66456, 66, 'MISTRATÓ', 1, 2016, 2016),
(66572, 66, 'PUEBLO RICO', 1, 2016, 2016),
(66594, 66, 'QUINCHÍA', 1, 2016, 2016),
(66682, 66, 'SANTA ROSA DE CABAL', 1, 2016, 2016),
(66687, 66, 'SANTUARIO', 1, 2016, 2016),
(68001, 68, 'BUCARAMANGA', 1, 2016, 2016),
(68013, 68, 'AGUADA', 1, 2016, 2016),
(68020, 68, 'ALBANIA', 1, 2016, 2016),
(68051, 68, 'ARATOCA', 1, 2016, 2016),
(68077, 68, 'BARBOSA', 1, 2016, 2016),
(68079, 68, 'BARICHARA', 1, 2016, 2016),
(68081, 68, 'BARRANCABERMEJA', 1, 2016, 2016),
(68092, 68, 'BETULIA', 1, 2016, 2016),
(68121, 68, 'CABRERA', 1, 2016, 2016),
(68132, 68, 'CALIFORNIA', 1, 2016, 2016),
(68147, 68, 'CAPITANEJO', 1, 2016, 2016),
(68152, 68, 'CARCASÍ', 1, 2016, 2016),
(68160, 68, 'CEPITÁ', 1, 2016, 2016),
(68162, 68, 'CERRITO', 1, 2016, 2016),
(68167, 68, 'CHARALÁ', 1, 2016, 2016),
(68169, 68, 'CHARTA', 1, 2016, 2016),
(68176, 68, 'CHIMA', 1, 2016, 2016),
(68179, 68, 'CHIPATÁ', 1, 2016, 2016),
(68190, 68, 'CIMITARRA', 1, 2016, 2016),
(68207, 68, 'CONCEPCIÓN', 1, 2016, 2016),
(68209, 68, 'CONFINES', 1, 2016, 2016),
(68211, 68, 'CONTRATACIÓN', 1, 2016, 2016),
(68217, 68, 'COROMORO', 1, 2016, 2016),
(68229, 68, 'CURITÍ', 1, 2016, 2016),
(68235, 68, 'EL CARMEN DE CHUCURÍ', 1, 2016, 2016),
(68245, 68, 'EL GUACAMAYO', 1, 2016, 2016),
(68250, 68, 'EL PEÑÓN', 1, 2016, 2016),
(68255, 68, 'EL PLAYÓN', 1, 2016, 2016),
(68264, 68, 'ENCINO', 1, 2016, 2016),
(68266, 68, 'ENCISO', 1, 2016, 2016),
(68271, 68, 'FLORIÁN', 1, 2016, 2016),
(68276, 68, 'FLORIDABLANCA', 1, 2016, 2016),
(68296, 68, 'GALÁN', 1, 2016, 2016),
(68298, 68, 'GAMBITA', 1, 2016, 2016),
(68307, 68, 'GIRÓN', 1, 2016, 2016),
(68318, 68, 'GUACA', 1, 2016, 2016),
(68320, 68, 'GUADALUPE', 1, 2016, 2016),
(68322, 68, 'GUAPOTÁ', 1, 2016, 2016),
(68324, 68, 'GUAVATÁ', 1, 2016, 2016),
(68327, 68, 'GÜEPSA', 1, 2016, 2016),
(68344, 68, 'HATO', 1, 2016, 2016),
(68368, 68, 'JESÚS MARÍA', 1, 2016, 2016),
(68370, 68, 'JORDÁN', 1, 2016, 2016),
(68377, 68, 'LA BELLEZA', 1, 2016, 2016),
(68385, 68, 'LANDÁZURI', 1, 2016, 2016),
(68397, 68, 'LA PAZ', 1, 2016, 2016),
(68406, 68, 'LEBRIJA', 1, 2016, 2016),
(68418, 68, 'LOS SANTOS', 1, 2016, 2016),
(68425, 68, 'MACARAVITA', 1, 2016, 2016),
(68432, 68, 'MÁLAGA', 1, 2016, 2016),
(68444, 68, 'MATANZA', 1, 2016, 2016),
(68464, 68, 'MOGOTES', 1, 2016, 2016),
(68468, 68, 'MOLAGAVITA', 1, 2016, 2016),
(68498, 68, 'OCAMONTE', 1, 2016, 2016),
(68500, 68, 'OIBA', 1, 2016, 2016),
(68502, 68, 'ONZAGA', 1, 2016, 2016),
(68522, 68, 'PALMAR', 1, 2016, 2016),
(68524, 68, 'PALMAS DEL SOCORRO', 1, 2016, 2016),
(68533, 68, 'PÁRAMO', 1, 2016, 2016),
(68547, 68, 'PIEDECUESTA', 1, 2016, 2016),
(68549, 68, 'PINCHOTE', 1, 2016, 2016),
(68572, 68, 'PUENTE NACIONAL', 1, 2016, 2016),
(68573, 68, 'PUERTO PARRA', 1, 2016, 2016),
(68575, 68, 'PUERTO WILCHES', 1, 2016, 2016),
(68615, 68, 'RIONEGRO', 1, 2016, 2016),
(68655, 68, 'SABANA DE TORRES', 1, 2016, 2016),
(68669, 68, 'SAN ANDRÉS', 1, 2016, 2016),
(68673, 68, 'SAN BENITO', 1, 2016, 2016),
(68679, 68, 'SAN GIL', 1, 2016, 2016),
(68682, 68, 'SAN JOAQUÍN', 1, 2016, 2016),
(68684, 68, 'SAN JOSÉ DE MIRANDA', 1, 2016, 2016),
(68686, 68, 'SAN MIGUEL', 1, 2016, 2016),
(68689, 68, 'SAN VICENTE DE CHUCURÍ', 1, 2016, 2016),
(68705, 68, 'SANTA BÁRBARA', 1, 2016, 2016),
(68720, 68, 'SANTA HELENA DEL OPÓN', 1, 2016, 2016),
(68745, 68, 'SIMACOTA', 1, 2016, 2016),
(68755, 68, 'SOCORRO', 1, 2016, 2016),
(68770, 68, 'SUAITA', 1, 2016, 2016),
(68773, 68, 'SUCRE', 1, 2016, 2016),
(68780, 68, 'SURATÁ', 1, 2016, 2016),
(68820, 68, 'TONA', 1, 2016, 2016),
(68855, 68, 'VALLE DE SAN JOSÉ', 1, 2016, 2016),
(68861, 68, 'VÉLEZ', 1, 2016, 2016),
(68867, 68, 'VETAS', 1, 2016, 2016),
(68872, 68, 'VILLANUEVA', 1, 2016, 2016),
(68895, 68, 'ZAPATOCA', 1, 2016, 2016),
(70001, 70, 'SINCELEJO', 1, 2016, 2016),
(70124, 70, 'CAIMITO', 1, 2016, 2016),
(70204, 70, 'COLOSO', 1, 2016, 2016),
(70215, 70, 'COROZAL', 1, 2016, 2016),
(70221, 70, 'COVEÑAS', 1, 2016, 2016),
(70230, 70, 'CHALÁN', 1, 2016, 2016),
(70233, 70, 'EL ROBLE', 1, 2016, 2016),
(70235, 70, 'GALERAS', 1, 2016, 2016),
(70265, 70, 'GUARANDA', 1, 2016, 2016),
(70400, 70, 'LA UNIÓN', 1, 2016, 2016),
(70418, 70, 'LOS PALMITOS', 1, 2016, 2016),
(70429, 70, 'MAJAGUAL', 1, 2016, 2016),
(70473, 70, 'MORROA', 1, 2016, 2016),
(70508, 70, 'OVEJAS', 1, 2016, 2016),
(70523, 70, 'PALMITO', 1, 2016, 2016),
(70670, 70, 'SAMPUÉS', 1, 2016, 2016),
(70678, 70, 'SAN BENITO ABAD', 1, 2016, 2016),
(70702, 70, 'SAN JUAN DE BETULIA', 1, 2016, 2016),
(70708, 70, 'SAN MARCOS', 1, 2016, 2016),
(70713, 70, 'SAN ONOFRE', 1, 2016, 2016),
(70717, 70, 'SAN PEDRO', 1, 2016, 2016),
(70742, 70, 'SAN LUIS DE SINCÉ', 1, 2016, 2016),
(70771, 70, 'SUCRE', 1, 2016, 2016),
(70820, 70, 'SANTIAGO DE TOLÚ', 1, 2016, 2016),
(70823, 70, 'TOLÚ VIEJO', 1, 2016, 2016),
(73001, 73, 'IBAGUÉ', 1, 2016, 2016),
(73024, 73, 'ALPUJARRA', 1, 2016, 2016),
(73026, 73, 'ALVARADO', 1, 2016, 2016),
(73030, 73, 'AMBALEMA', 1, 2016, 2016),
(73043, 73, 'ANZOÁTEGUI', 1, 2016, 2016),
(73055, 73, 'ARMERO', 1, 2016, 2016),
(73067, 73, 'ATACO', 1, 2016, 2016),
(73124, 73, 'CAJAMARCA', 1, 2016, 2016),
(73148, 73, 'CARMEN DE APICALÁ', 1, 2016, 2016),
(73152, 73, 'CASABIANCA', 1, 2016, 2016),
(73168, 73, 'CHAPARRAL', 1, 2016, 2016),
(73200, 73, 'COELLO', 1, 2016, 2016),
(73217, 73, 'COYAIMA', 1, 2016, 2016),
(73226, 73, 'CUNDAY', 1, 2016, 2016),
(73236, 73, 'DOLORES', 1, 2016, 2016),
(73268, 73, 'ESPINAL', 1, 2016, 2016),
(73270, 73, 'FALAN', 1, 2016, 2016),
(73275, 73, 'FLANDES', 1, 2016, 2016),
(73283, 73, 'FRESNO', 1, 2016, 2016),
(73319, 73, 'GUAMO', 1, 2016, 2016),
(73347, 73, 'HERVEO', 1, 2016, 2016),
(73349, 73, 'HONDA', 1, 2016, 2016),
(73352, 73, 'ICONONZO', 1, 2016, 2016),
(73408, 73, 'LÉRIDA', 1, 2016, 2016),
(73411, 73, 'LÍBANO', 1, 2016, 2016),
(73443, 73, 'SAN SEBASTIÁN DE MARIQUITA', 1, 2016, 2016),
(73449, 73, 'MELGAR', 1, 2016, 2016),
(73461, 73, 'MURILLO', 1, 2016, 2016),
(73483, 73, 'NATAGAIMA', 1, 2016, 2016),
(73504, 73, 'ORTEGA', 1, 2016, 2016),
(73520, 73, 'PALOCABILDO', 1, 2016, 2016),
(73547, 73, 'PIEDRAS', 1, 2016, 2016),
(73555, 73, 'PLANADAS', 1, 2016, 2016),
(73563, 73, 'PRADO', 1, 2016, 2016),
(73585, 73, 'PURIFICACIÓN', 1, 2016, 2016),
(73616, 73, 'RIOBLANCO', 1, 2016, 2016),
(73622, 73, 'RONCESVALLES', 1, 2016, 2016),
(73624, 73, 'ROVIRA', 1, 2016, 2016),
(73671, 73, 'SALDAÑA', 1, 2016, 2016),
(73675, 73, 'SAN ANTONIO', 1, 2016, 2016),
(73678, 73, 'SAN LUIS', 1, 2016, 2016),
(73686, 73, 'SANTA ISABEL', 1, 2016, 2016),
(73770, 73, 'SUÁREZ', 1, 2016, 2016),
(73854, 73, 'VALLE DE SAN JUAN', 1, 2016, 2016),
(73861, 73, 'VENADILLO', 1, 2016, 2016),
(73870, 73, 'VILLAHERMOSA', 1, 2016, 2016),
(73873, 73, 'VILLARRICA', 1, 2016, 2016),
(76001, 76, 'CALI', 1, 2016, 2016),
(76020, 76, 'ALCALÁ', 1, 2016, 2016),
(76036, 76, 'ANDALUCÍA', 1, 2016, 2016),
(76041, 76, 'ANSERMANUEVO', 1, 2016, 2016),
(76054, 76, 'ARGELIA', 1, 2016, 2016),
(76111, 76, 'GUADALAJARA DE BUGA', 1, 2016, 2016),
(76113, 76, 'BUGALAGRANDE', 1, 2016, 2016),
(76122, 76, 'CAICEDONIA', 1, 2016, 2016),
(76126, 76, 'CALIMA', 1, 2016, 2016),
(76130, 76, 'CANDELARIA', 1, 2016, 2016),
(76147, 76, 'CARTAGO', 1, 2016, 2016),
(76233, 76, 'DAGUA', 1, 2016, 2016),
(76243, 76, 'EL ÁGUILA', 1, 2016, 2016),
(76246, 76, 'EL CAIRO', 1, 2016, 2016),
(76248, 76, 'EL CERRITO', 1, 2016, 2016),
(76250, 76, 'EL DOVIO', 1, 2016, 2016),
(76275, 76, 'FLORIDA', 1, 2016, 2016),
(76306, 76, 'GINEBRA', 1, 2016, 2016),
(76318, 76, 'GUACARÍ', 1, 2016, 2016),
(76364, 76, 'JAMUNDÍ', 1, 2016, 2016),
(76377, 76, 'LA CUMBRE', 1, 2016, 2016),
(76400, 76, 'LA UNIÓN', 1, 2016, 2016),
(76403, 76, 'LA VICTORIA', 1, 2016, 2016),
(76497, 76, 'OBANDO', 1, 2016, 2016),
(76520, 76, 'PALMIRA', 1, 2016, 2016),
(76563, 76, 'PRADERA', 1, 2016, 2016),
(76606, 76, 'RESTREPO', 1, 2016, 2016),
(76616, 76, 'RIOFRÍO', 1, 2016, 2016),
(76622, 76, 'ROLDANILLO', 1, 2016, 2016),
(76670, 76, 'SAN PEDRO', 1, 2016, 2016),
(76736, 76, 'SEVILLA', 1, 2016, 2016),
(76823, 76, 'TORO', 1, 2016, 2016),
(76828, 76, 'TRUJILLO', 1, 2016, 2016),
(76834, 76, 'TULUÁ', 1, 2016, 2016),
(76845, 76, 'ULLOA', 1, 2016, 2016),
(76863, 76, 'VERSALLES', 1, 2016, 2016),
(76869, 76, 'VIJES', 1, 2016, 2016),
(76890, 76, 'YOTOCO', 1, 2016, 2016),
(76892, 76, 'YUMBO', 1, 2016, 2016),
(76895, 76, 'ZARZAL', 1, 2016, 2016),
(81220, 81, 'CRAVO NORTE', 1, 2016, 2016),
(81300, 81, 'FORTUL', 1, 2016, 2016),
(81591, 81, 'PUERTO RONDÓN', 1, 2016, 2016),
(81736, 81, 'SARAVENA', 1, 2016, 2016),
(81794, 81, 'TAME', 1, 2016, 2016),
(85001, 85, 'YOPAL', 1, 2016, 2016),
(85015, 85, 'CHAMEZA', 1, 2016, 2016),
(85125, 85, 'HATO COROZAL', 1, 2016, 2016),
(85136, 85, 'LA SALINA', 1, 2016, 2016),
(85139, 85, 'MANÍ', 1, 2016, 2016),
(85162, 85, 'MONTERREY', 1, 2016, 2016),
(85225, 85, 'NUNCHÍA', 1, 2016, 2016),
(85230, 85, 'OROCUÉ', 1, 2016, 2016),
(85250, 85, 'PAZ DE ARIPORO', 1, 2016, 2016),
(85263, 85, 'PORE', 1, 2016, 2016),
(85279, 85, 'RECETOR', 1, 2016, 2016),
(85300, 85, 'SABANALARGA', 1, 2016, 2016),
(85315, 85, 'SÁCAMA', 1, 2016, 2016),
(85325, 85, 'SAN LUIS DE PALENQUE', 1, 2016, 2016),
(85400, 85, 'TÁMARA', 1, 2016, 2016),
(85430, 85, 'TRINIDAD', 1, 2016, 2016),
(85440, 85, 'VILLANUEVA', 1, 2016, 2016),
(86001, 86, 'MOCOA', 1, 2016, 2016),
(86219, 86, 'COLÓN', 1, 2016, 2016),
(86320, 86, 'ORITO', 1, 2016, 2016),
(86568, 86, 'PUERTO ASÍS', 1, 2016, 2016),
(86569, 86, 'PUERTO CAICEDO', 1, 2016, 2016),
(86571, 86, 'PUERTO GUZMÁN', 1, 2016, 2016),
(86573, 86, 'PUERTO LEGUÍZAMO', 1, 2016, 2016),
(86749, 86, 'SIBUNDOY', 1, 2016, 2016),
(86755, 86, 'SAN FRANCISCO', 1, 2016, 2016),
(86757, 86, 'SAN MIGUEL', 1, 2016, 2016),
(86760, 86, 'SANTIAGO', 1, 2016, 2016),
(86865, 86, 'VALLE DEL GUAMUEZ', 1, 2016, 2016),
(86885, 86, 'VILLAGARZÓN', 1, 2016, 2016),
(88001, 88, 'SAN ANDRÉS', 1, 2016, 2016),
(88564, 88, 'PROVIDENCIA', 1, 2016, 2016),
(91263, 91, 'EL ENCANTO', 1, 2016, 2016),
(91405, 91, 'LA CHORRERA', 1, 2016, 2016),
(91407, 91, 'LA PEDRERA', 1, 2016, 2016),
(91460, 91, 'MIRITI - PARANÁ', 1, 2016, 2016),
(91530, 91, 'PUERTO ALEGRÍA', 1, 2016, 2016),
(91536, 91, 'PUERTO ARICA', 1, 2016, 2016),
(91540, 91, 'PUERTO NARIÑO', 1, 2016, 2016),
(91669, 91, 'PUERTO SANTANDER', 1, 2016, 2016),
(91798, 91, 'TARAPACÁ', 1, 2016, 2016),
(94001, 94, 'INÍRIDA', 1, 2016, 2016),
(94343, 94, 'BARRANCO MINAS', 1, 2016, 2016),
(94663, 94, 'MAPIRIPANA', 1, 2016, 2016),
(94883, 94, 'SAN FELIPE', 1, 2016, 2016),
(94884, 94, 'PUERTO COLOMBIA', 1, 2016, 2016),
(94885, 94, 'LA GUADALUPE', 1, 2016, 2016),
(94886, 94, 'CACAHUAL', 1, 2016, 2016),
(94887, 94, 'PANA PANA', 1, 2016, 2016),
(94888, 94, 'MORICHAL', 1, 2016, 2016),
(95001, 95, 'SAN JOSÉ DEL GUAVIARE', 1, 2016, 2016),
(95015, 95, 'CALAMAR', 1, 2016, 2016),
(95025, 95, 'EL RETORNO', 1, 2016, 2016),
(95200, 95, 'MIRAFLORES', 1, 2016, 2016),
(97001, 97, 'MITÚ', 1, 2016, 2016),
(97161, 97, 'CARURU', 1, 2016, 2016),
(97511, 97, 'PACOA', 1, 2016, 2016),
(97666, 97, 'TARAIRA', 1, 2016, 2016),
(97889, 97, 'YAVARATÉ', 1, 2016, 2016),
(99001, 99, 'PUERTO CARREÑO', 1, 2016, 2016),
(99524, 99, 'LA PRIMAVERA', 1, 2016, 2016),
(99624, 99, 'SANTA ROSALÍA', 1, 2016, 2016),
(99773, 99, 'CUMARIBO', 1, 2016, 2016);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `option`
--

CREATE TABLE IF NOT EXISTS `option` (
  `id` int(11) NOT NULL,
  `id_combo` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '0',
  `state` int(2) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `option`
--

INSERT INTO `option` (`id`, `id_combo`, `code`, `name`, `description`, `order`, `state`) VALUES
(2, 1, 0, 'Inactivo', '', 2, 1),
(4, 1, 1, 'Activo', '', 1, 1),
(5, 2, 1, 'Desarrollo web', NULL, 1, 1),
(6, 2, 2, 'Diseño gráfico', NULL, 2, 1),
(7, 3, 1, 'Cedula de Ciudadanía', NULL, 1, 1),
(8, 3, 2, 'Nit', NULL, 2, 1),
(9, 4, 1, 'Persona natural', NULL, 1, 1),
(10, 4, 2, 'Establecimiento comercial', NULL, 2, 1),
(11, 4, 3, 'Apoyo a tercero', NULL, 2, 1),
(12, 5, 1, 'Si', NULL, 1, 1),
(13, 5, 2, 'No', NULL, 2, 1),
(14, 6, 1, 'Pendiente', NULL, 1, 1),
(15, 6, 2, 'Aprovada', NULL, 2, 1),
(16, 6, 3, 'Cerrada', NULL, 3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `person`
--

CREATE TABLE IF NOT EXISTS `person` (
  `type_document` smallint(2) NOT NULL,
  `document` bigint(20) NOT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `quote_person_natural` smallint(2) DEFAULT '0',
  `active_user` smallint(2) DEFAULT '0',
  `status` smallint(2) DEFAULT '1',
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `person`
--

INSERT INTO `person` (`type_document`, `document`, `first_name`, `last_name`, `email`, `phone`, `quote_person_natural`, `active_user`, `status`, `created_at`, `updated_at`) VALUES
(1, 1024472653, 'Diego Armando', 'Castellanos Sabogal', 'castsabproyectos@gmail.com', '31334473686', 1, 1, 1, 1486993800, 1486993830);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quote`
--

CREATE TABLE IF NOT EXISTS `quote` (
  `id` bigint(20) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `document` bigint(20) NOT NULL,
  `discount` smallint(2) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `apply_discount` smallint(2) DEFAULT '0',
  `status_quote` smallint(2) DEFAULT NULL,
  `vbma` int(11) DEFAULT NULL,
  `document_person` bigint(20) DEFAULT NULL,
  `quote_person_natural` smallint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `quote`
--

INSERT INTO `quote` (`id`, `id_user`, `document`, `discount`, `status`, `created_at`, `updated_at`, `apply_discount`, `status_quote`, `vbma`, `document_person`, `quote_person_natural`) VALUES
(1, 1, 1024472653, 5, 1, 1478650026, 1478650026, 1, 1, 500000, NULL, 0),
(2, 1, 1024472653, NULL, 1, 1478656586, 1478656586, 2, 1, 500000, NULL, 0),
(3, 1, 1024472653, 5, 1, 1487015420, 1487015420, 1, 1, 737717, 1024472653, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quote_service`
--

CREATE TABLE IF NOT EXISTS `quote_service` (
  `id` bigint(20) NOT NULL,
  `id_quote` bigint(20) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_service` int(11) NOT NULL,
  `estimate_hours` smallint(5) DEFAULT NULL,
  `status` smallint(2) DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `activity` varchar(255) DEFAULT NULL,
  `value_basis_service` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `quote_service`
--

INSERT INTO `quote_service` (`id`, `id_quote`, `id_user`, `id_service`, `estimate_hours`, `status`, `created_at`, `updated_at`, `activity`, `value_basis_service`) VALUES
(2, 2, 1, 1, 10, 1, 1478656670, 1478656670, NULL, '250000'),
(3, 1, 1, 1, 10, 1, 1486758097, 1486758097, 'Recolección de informacion', '150000'),
(4, 3, 1, 1, 10, 1, 1487016632, 1487016632, 'Recolección de informacion', '221315');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `id` int(11) NOT NULL DEFAULT '0',
  `id_user` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(100) DEFAULT NULL,
  `status` int(2) DEFAULT '1',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `id_line_business` smallint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `service`
--

INSERT INTO `service` (`id`, `id_user`, `name`, `description`, `status`, `created_at`, `updated_at`, `id_line_business`) VALUES
(1, 1, 'Construcción de lading page', '', 1, 1478650085, 1478650085, 1),
(2, 1, 'Construcción de paginas web', NULL, 1, 1478650085, 1478650085, 1),
(3, 1, 'Carga de contenidos', NULL, 1, 1478650085, 1478650085, 1),
(4, 1, 'Actualización de cotenidos', NULL, 1, 1478650085, 1478650085, 1),
(5, 1, 'Soporte y mantenimiento de portales o paginas web ', NULL, 1, 1478650085, 1478650085, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `first_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `document` bigint(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `first_name`, `last_name`, `document`) VALUES
(1, 'root@example.com', 'OVC9jFcj8v3Sf333l3vYgH6TuRzC6w6n', '$2y$13$4idVTvuJdb2ZprRn0.lxTux6VfcSCshI3Bbs5SDAP2BHolTEs1HoC', NULL, 'root@example.com', 1, 1476568841, 1476568841, NULL, NULL, NULL),
(4, 'castsabproyectos@gmail.com', 'nIsH9VbPpb-5ngMKa24d9uerP_GEGDYd', '$2y$13$xHu7thHwoOO8opew0zcwTOhOiEic2zaqS/lyUbQ./s6y/Ry7vzVxu', NULL, 'castsabproyectos@gmail.com', 1, 1486993830, 1486993830, NULL, NULL, 1024472653);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_id_service` (`id_service`);

--
-- Indices de la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`);

--
-- Indices de la tabla `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`), ADD KEY `rule_name` (`rule_name`), ADD KEY `idx-auth_item-type` (`type`);

--
-- Indices de la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`), ADD KEY `child` (`child`);

--
-- Indices de la tabla `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- Indices de la tabla `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`document`), ADD KEY `fk_client_user` (`id_user`);

--
-- Indices de la tabla `client_contact`
--
ALTER TABLE `client_contact`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_client_contact_client` (`document`), ADD KEY `fk_client_contact_user` (`id_user`);

--
-- Indices de la tabla `combo`
--
ALTER TABLE `combo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`), ADD KEY `parent` (`parent`);

--
-- Indices de la tabla `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `municipality`
--
ALTER TABLE `municipality`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_id_department` (`id_department`);

--
-- Indices de la tabla `option`
--
ALTER TABLE `option`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_id_combo` (`id_combo`);

--
-- Indices de la tabla `person`
--
ALTER TABLE `person`
  ADD PRIMARY KEY (`document`);

--
-- Indices de la tabla `quote`
--
ALTER TABLE `quote`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_quote_user` (`id_user`), ADD KEY `fk_quote_client` (`document`);

--
-- Indices de la tabla `quote_service`
--
ALTER TABLE `quote_service`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_quote_service_quote` (`id_quote`), ADD KEY `fk_quote_service_user` (`id_user`), ADD KEY `fk_quote_service_service` (`id_service`);

--
-- Indices de la tabla `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`), ADD KEY `fk_service_user` (`id_user`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `username` (`username`), ADD UNIQUE KEY `email` (`email`), ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `client_contact`
--
ALTER TABLE `client_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT de la tabla `option`
--
ALTER TABLE `option`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT de la tabla `quote_service`
--
ALTER TABLE `quote_service`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `activity`
--
ALTER TABLE `activity`
ADD CONSTRAINT `fk_id_service` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`);

--
-- Filtros para la tabla `auth_assignment`
--
ALTER TABLE `auth_assignment`
ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item`
--
ALTER TABLE `auth_item`
ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `auth_item_child`
--
ALTER TABLE `auth_item_child`
ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `client`
--
ALTER TABLE `client`
ADD CONSTRAINT `fk_client_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `client_contact`
--
ALTER TABLE `client_contact`
ADD CONSTRAINT `fk_client_contact_client` FOREIGN KEY (`document`) REFERENCES `client` (`document`),
ADD CONSTRAINT `fk_client_contact_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `menu` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipality`
--
ALTER TABLE `municipality`
ADD CONSTRAINT `fk_id_department` FOREIGN KEY (`id_department`) REFERENCES `department` (`id`);

--
-- Filtros para la tabla `option`
--
ALTER TABLE `option`
ADD CONSTRAINT `fk_id_combo` FOREIGN KEY (`id_combo`) REFERENCES `combo` (`id`);

--
-- Filtros para la tabla `quote`
--
ALTER TABLE `quote`
ADD CONSTRAINT `fk_quote_client` FOREIGN KEY (`document`) REFERENCES `client` (`document`),
ADD CONSTRAINT `fk_quote_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `quote_service`
--
ALTER TABLE `quote_service`
ADD CONSTRAINT `fk_quote_service_quote` FOREIGN KEY (`id_quote`) REFERENCES `quote` (`id`),
ADD CONSTRAINT `fk_quote_service_service` FOREIGN KEY (`id_service`) REFERENCES `service` (`id`),
ADD CONSTRAINT `fk_quote_service_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `service`
--
ALTER TABLE `service`
ADD CONSTRAINT `fk_service_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
