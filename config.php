<?php
/**
 * This is the Server configuration script
 *
 * PHP version 7.2
 *
 * @category Server_Configuration
 * @package  Server_Configuration
 * @author   Benson Imoh,ST <benson@stbensonimoh.com>
 * @license  MIT https://opensource.org/licenses/MIT
 * @link     https://stbensonimoh.com
 */
// Database Configuration
$host='localhost';
$db = 'test';
$username = 'root';
$password = 'sweedypie';
// SMS Configuration
$smstoken = 'CQxlc2gLTWCUUdsunjsTrqb19FP8QcZ0BD3HybQWATlOg4t9QQ1aP40I73sL';
// Email Configuration
$emailHost = 'awlo.org';
$emailUsername = 'volunteer@awlo.org';
$emailPassword = '//defaultp++';
$SMTPDebug = 0;
$SMTPAuth = true;
$SMTPSecure = 'ssl';
$Port = 465;
// API credentials from https://login.sendpulse.com/settngs/#api
$apiUserId = 'c985aad3e046bc0f7e5f51ebf921cc03';
$apiSecret = 'aa7ae8f1b195db11ef110ca1c838768a';
define('PATH_TO_ATTACH_FILE', __FILE__);
