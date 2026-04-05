<?php

class _Comm
/*
 * $head_title
 * $Page_title
 * */
{
	static private $site_name = 'Boulder UI';

	static public function getHeadTitle()
	{
		global $_page_title;

		if ($_page_title != '') {
			return "$_page_title | " . self::getSiteName();
		}

		return self::getSiteName();
	}

	static public function getSiteName()
	{
		global $_site_name;

		if ($_site_name != '') {
			return $_site_name;
		}

		return self::$site_name;

	}

	static public function getCommRoot()
	{
		return $_SERVER['DOCUMENT_ROOT'] . '/boulder-ui/-';
	}

	static public function getCssRoot()
	{
		return self::getCommRoot() . '/styles';
	}

	static public function getJsRoot()
	{
		return self::getCommRoot() . '/imgs';
	}

	static public function getProgramRoot()
	{
		return self::getCommRoot() . '/programs';
	}
}

function _show($text)
{
	$text = <<<EOT
		<div style="background: white; position: absolute; top: 0; left: 0;z-index: 9999; border: solid 1px silver; border-radius: 8px; padding: 15px; background: #fff;">
			$text
		</div>
	EOT;
	echo $text;
}

function _showVal($keyName, $key)
{
	$text = <<<EOT
		<p>
			$keyName: $key <br>
		</p>
	EOT;
	echo $text;
}
