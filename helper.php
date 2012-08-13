<?php
// No direct access.
defined('_JEXEC') or die;

abstract class avgLoadHelper
{

	public static function getExecInfo()
	{
		return trim(@exec('uptime')) ? trim(@exec('uptime')) : 'your have no rights to execute system commands';
	}
}
