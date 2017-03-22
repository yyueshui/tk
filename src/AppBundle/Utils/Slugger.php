<?php
/**
 * Created by PhpStorm.
 * User: Felix
 * Date: 2017/2/24
 * Time: 下午2:25
 */

namespace AppBundle\Utils;


class Slugger
{
	public function slugify($string)
	{
		return preg_replace(
			'/[^a-z0-9]/', '-', strtolower(trim(strip_tags($string)))
		);
	}
}