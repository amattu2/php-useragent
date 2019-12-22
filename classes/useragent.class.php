<?php
/*
	Produced 2019
	By https://github.com/amattu2
	Copy Alec M.
	License GNU Affero General Public License v3.0
*/

/*
	Notes:
	- Based off of an unknown project from Github
*/

class UserAgent {
	// Class Variables
	private $userAgent = "";
	private $systems = Array(
		'iPhone' => '(iPhone)',
		'Windows 3.11' => 'Win16',
		'Windows 95' => '(Windows 95)|(Win95)|(Windows_95)',
		'Windows 98' => '(Windows 98)|(Win98)',
		'Windows 2000' => '(Windows NT 5.0)|(Windows 2000)',
		'Windows XP' => '(Windows NT 5.1)|(Windows XP)',
		'Windows 2003' => '(Windows NT 5.2)',
		'Windows Vista' => '(Windows NT 6.0)|(Windows Vista)',
		'Windows 7' => '(Windows NT 6.1)|(Windows 7)',
		'Windows 10' => '(Windows NT 10.0)',
		'Windows NT' => '(Windows NT 4.0)|(WinNT4.0)|(WinNT)|(Windows NT)',
		'Windows ME' => 'Windows ME',
		'Open BSD' => 'OpenBSD',
		'Sun OS' => 'SunOS',
		'Linux' => '(Linux)|(X11)',
		'Safari' => '(Safari)',
		'Mac OS' => '(Mac_PowerPC)|(Macintosh)',
		'QNX' => 'QNX',
		'BeOS' => 'BeOS',
		'OS/2' => 'OS/2',
		'Search Bot' => '(nuhk)|(Googlebot)|(Yammybot)|(Openbot)|(Slurp/cat)|(msnbot)|(ia_archiver)'
	);

	// Constructor
	function __construct($UA) {
		$this->userAgent = $UA;
	}

	// Get Operating System
	function get() {
		// Loop
		foreach($this->systems as $os => $preg_pattern) {
			if (preg_match('@' . $preg_pattern . '@', $this->userAgent)) {
				return $os;
			}
		}

		// Default
		return "NA";
	}
}
?>
