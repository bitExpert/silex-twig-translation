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
 * Custom extension to add the translation tag which is used in the templates
 * to translate keys to their respective representation.
 *
 * @author	Stephan Hochdoerfer <S.Hochdoerfer@bitExpert.de>
 */


class bitExpert_Silex_Twig_Translation_Extension extends Twig_Extension
{
	/**
	 * @see Twig_ExtensionInterface::getName()
	 */
	public function getName()
	{
		return 'Hyundai';
	}


	/**
	 * @see Twig_Extension::getTokenParsers()
	 */
	public function getTokenParsers()
	{
		return array(new bitExpert_Silex_Twig_Translation_TokenParser_Translate());
	}
}


/**
 * The translation function which is called from within the template code that
 * will take care of translating the given strings.
 *
 * @param $msg
 */
function bitExpert_Silex_Twig_Translation_translate($msg)
{
	global $app;
	echo $app['translator']->trans($msg);
}