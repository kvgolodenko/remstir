<?php defined('SYSPATH') or die('No direct script access.');

class AVO_Validator_Vimeo_URL extends AVO_Abstract_Parametrized_Class {

	public $message;
	public $is_message_encoded = false;

	public function __construct(array $properties = array()) {
		parent::__construct($properties);
		if (!isset($properties['message'])) $this->message = __('invalid Vimeo URL');
	}

	public function validate(AVO_Field $field, AVO_Controls_List $controls = null) {
		$val = $field->value();
		if ($val === null) return true;
		$result = self::is_valid($val);
		if ($result !== false) {
			$field->value($result);
			return true;
		} else {
			return false;
		}
	}

	public static function is_valid($value) {
		if (preg_match('|^http://vimeo.com/\d+$|', $value)) {
			return str_replace('http://', 'https://', $value);
		}
		return false;
	}
}