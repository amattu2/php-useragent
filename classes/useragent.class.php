<?php
/*
	Produced 2019-2020
	By https://amattu.com/links/github
	Copy Alec M.
	License GNU Affero General Public License v3.0
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

	/**
	 * Class Constructor
	 *
	 * @param string $useragent
	 * @throws None
	 * @author Alec M. <https://amattu.com>
	 * @date 2020-03-26T19:19:18-040
	 */
	public function __construct(string $useragent) {
		$this->userAgent = $useragent;
	}

	/**
	 * Get User Agent String
	 *
	 * @return String User Agent
	 * @throws None
	 * @author Alec M. <https://amattu.com>
	 * @date 2020-03-26T19:19:48-040
	 */
	public function get() : string {
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
