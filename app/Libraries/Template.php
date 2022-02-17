<?php

namespace App\Libraries;

/*
 * Name: ci4-template-view
*/

class Template
{
	/**
	 * Contents page
	 *
	 * @var array
	 */
	protected $templateData = [];

	/**
	 * Set content
	 *
	 * @param string $name
	 * @param string $value
	 */
	private function set(string $name, string $data): void
	{
		//set name data
		$this->templateData[$name] = $data;
	}

	/**
	 * Loading template
	 *
	 * @param		string	$template
	 * @param		string	$view
	 * @param		array		$view_data
	 * @param		array		$option
	 * @return	string
	 */
	public function load(string $template = '', string $view = '', array $viewData, array $options = []): string
	{
		//set variable $contents in template
		$this->set('contents', view($view, $viewData));

		//return template + view
		return view($template, $this->templateData, $options);
	}
}
