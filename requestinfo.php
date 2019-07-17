<?php

/**
 * Return remote info in json.
 * This script will return the specified _SERVER variables as json.
 * 
 * PHP version 7.3
 * 
 * @category RequestInfo
 * @package  RequestInfo
 * @author   twij <twij@pm.me>
 * @license  https://www.opensource.org/licenses/mit-license.html MIT License
 * @version  GIT: 0.1.0
 * @link     https://github.com/twij GitHub
 */

$server_vars = array(
    'REMOTE_ADDR', 
    'REMOTE_HOST', 
    'REMOTE_PORT', 
    'REMOTE_USER', 
    'REDIRECT_REMOTE_USER',
    'REQUEST_TIME', 
    'REQUEST_TIME_FLOAT', 
    'HTTP_USER_AGENT', 
    'HTTPS'
);

$server = array();

foreach ($server_vars as $var) { 
    if (isset($_SERVER[$var])) { 
         $server[$var] = $_SERVER[$var];
    }
}

$server['SERVER_DATE'] = (new \DateTime());
$server['SERVER_TIMESTAMP'] = (new \DateTime())->getTimestamp();

header('Content-type: application/json');
echo json_encode($server);