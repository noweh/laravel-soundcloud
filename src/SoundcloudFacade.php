<?php

namespace Noweh\SoundcloudApi;

use Illuminate\Support\Facades\Facade;

class SoundcloudFacade extends Facade
{
	protected static function getFacadeAccessor()
	{
		return 'soundcloud';
	}
}
