<?php

/**
 * Return remote ip
 * This script will return the remote ip as json.
 * 
 * PHP version 7.3
 * 
 * @category RequestInfo
 * @package  RequestIP
 * @author   twij <twij@pm.me>
 * @license  https://www.opensource.org/licenses/mit-license.html MIT License
 * @version  GIT: 0.1.0
 * @link     https://github.com/twij GitHub
 */

header('Content-type: application/json');
echo json_encode(['IP' => $_SERVER['REMOTE_ADDR']]);