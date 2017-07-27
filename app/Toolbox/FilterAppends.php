<?php

namespace App\Toolbox;

trait FilterAppends
{
	// Overrided appends property to be used insted of the one defined in the model
	protected static $overridedAppends=false;


	/**
	 * overrided getArrayableAppends method from Illuminate\Database\Eloquent\Model
	 * @return array 	appends array to be used by Eloquent
	 */
	protected function getArrayableAppends()
	{
		if (self::$overridedAppends !== false) {

			return self::$overridedAppends;

		}

		return parent::getArrayableAppends();
	}


	/**
	 * This is the method we add to our model to add overriding appends functionality to it.
	 * @return Illuminate\Database\Eloquent\Model 
	 */
	public static function appends()
	{
		$args = func_get_args();

		if (!count($args)) {

			$appends = [];

		} else {

			$appends = (is_array($args[0])) ? $args[0] : $args;

		}

		$instance = new static;

		self::$overridedAppends = $appends;

        return $instance;
	}
}