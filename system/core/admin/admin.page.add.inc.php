<?PHP

/* ====================
Seditio - Website engine
Copyright Neocrome & Seditio Team
https://seditio.org
[BEGIN_SED]
File=admin.page.add.inc.php
Version=179
Updated=2022-jul-15
Type=Core.admin
Author=Amro
Description=Pages
[END_SED]
==================== */

if (!defined('SED_CODE') || !defined('SED_ADMIN')) {
    die('Wrong URL.');
}

// ---------- Breadcrumbs
$urlpaths = array();
$urlpaths[sed_url("admin", "m=page")] =  $L['Pages'];
$urlpaths[sed_url("admin", "m=page&s=add")] =  $L['addnewentry'];

$admintitle = $L['addnewentry'];

require(SED_ROOT . '/system/core/page/page.add.inc.php');
