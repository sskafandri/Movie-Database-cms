<?php namespace Lib\Services\Validation;

class TVNetworkValidator extends AbstractValidator
{

	public $rules = array(

		'name'    => 'required|min:2|max:50|unique:tv_networks',
		'description' => 'required',
		'website' => 'required',
		'logo' => 'image|max:3072|mimes:jpeg,jpg,gif,png',
		'cover_photo' => 'image|max:3072|mimes:jpeg,jpg,gif,png'

		);

	protected $messages = array(
		'exists' => 'Could not find a tv network with information provided.'
		);

	protected $logo = array('logo' => 'required|image|max:3072|mimes:jpeg,jpg,gif,png');

	protected $cover_photo = array('cover_photo' => 'required|image|max:3072|mimes:jpeg,jpg,gif,png');

	/**
	 * Changes default rules on validator.
	 * 
	 * @param string $name
	 */
	public function setRules($name)
	{
		$this->rules = $this->$name;

		return $this;
	}
}