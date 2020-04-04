<?php
/*
	Produced 2019
	By https://github.com/amattu2
	Copy Alec M.
	License GNU Affero General Public License v3.0
*/

// Files
require(dirname(__FILE__) . "/classes/useragent.class.php");

// Tests
$agent1 = UserAgent::get($_SERVER['HTTP_USER_AGENT']);
$agent2 = UserAgent::get("Mozilla/5.0 (iPhone; CPU iPhone OS 12_2 like Mac OS X) AppleWebKit/605.1.15 (KHTML, like Gecko) Mobile/15E148");
$agent3 = UserAgent::get("Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36");

echo $agent1 . "<br/>"; // Your Operating System
echo $agent2 . "<br/>"; // iPhone
echo $agent3 . "<br/>"; // Windows 10
?>
