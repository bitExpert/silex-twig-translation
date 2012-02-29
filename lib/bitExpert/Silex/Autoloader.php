<?php


/*
 * Copyright (c) 2007-2012 bitExpert AG
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */


/**
 * Autoloads Twig Extensions classes.
 *
 * @author	Stephan Hochdoerfer <S.Hochdoerfer@bitExpert.de>
 */


class bitExpert_Silex_Autoloader
{
	/**
	 * Registers Twig_Extensions_Autoloader as an SPL autoloader.
	 */
	static public function register()
	{
		ini_set('unserialize_callback_func', 'spl_autoload_call');
		spl_autoload_register(
			array(
				new self, 'autoload'
			)
		);
	}

	/**
	 * Handles autoloading of classes.
	 *
	 * @param $class
	 * @return boolean
	 */
	static public function autoload($class)
	{
		if(0 !== strpos($class, 'bitExpert_Silex'))
		{
			return;
		}

		$file = dirname(__FILE__).'/../../'.str_replace('_', '/', $class).'.php';
		if(file_exists($file))
		{
			require $file;
		}
	}
}