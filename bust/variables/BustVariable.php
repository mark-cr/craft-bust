<?php
namespace Craft;

class BustVariable
{
	private var $availableMethods = array('querystring','filename');

	public function er($file,$method="querystring")
	{
		$availableMethods = array('querystring','filename');
		$hash = substr(sha1(filemtime($_SERVER['DOCUMENT_ROOT'] . $file)),0,8);

		if ( in_array($method, $availableMethods) ) {
			switch ($method) {
				case 'querystring':
					return $file . '?' . $hash;

				case 'filename':
					$lastpos = strrpos($file, '.');
					$left = substr($file, 0, $lastpos + 1);
					$right = substr($file, $lastpos);
					return $left . $hash . $right;
			}
		}

		return $file;
	}
}
