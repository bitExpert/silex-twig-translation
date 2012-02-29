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
 * Represents an Translation node.
 *
 * @author	Stephan Hochdoerfer <S.Hochdoerfer@bitExpert.de>
 */


class bitExpert_Silex_Twig_Translation_Node_Translate extends Twig_Node
{
	/**
	 * Creates a new {@link bitExpert_Silex_Twig_Translation_Node_Translate}.
	 *
	 * @param $var
	 * @param $lineno
	 * @param $tag
	 */
	public function __construct($var, $lineno, $tag = null)
	{
		parent::__construct(array(), array('var' => $var), $lineno, $tag);
	}


	/**
	 * Compiles the node to PHP.
	 *
	 * @param Twig_Compiler A Twig_Compiler instance
	 */
	public function compile(Twig_Compiler $compiler)
	{
		$compiler
		->addDebugInfo($this)
		->write('bitExpert_Silex_Twig_Translation_translate( ')
		->string($this->getAttribute('var'))
		->raw(");\n")
		;
	}
}