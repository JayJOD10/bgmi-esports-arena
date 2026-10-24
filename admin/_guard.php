<?php
require_once __DIR__.'/../config/database.php';
require_once __DIR__.'/../config/app.php';
// Protected admin pages must never be served from browser history/cache after logout.
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Cache-Control: post-check=0, pre-check=0', false);
header('Pragma: no-cache');
header('Expires: Thu, 01 Jan 1970 00:00:00 GMT');
if (!admin()) {
    unset($_SESSION['admin_id'], $_SESSION['admin_username']);
    flash('warning', 'Please log in to access the admin control room.');
    go('/bgmi-esports-arena/admin/login.php');
}
