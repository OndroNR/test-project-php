<?php

class ValidationResult {
	public bool $isValid = true;
	public array $errors = [];

	public function addError($title) {
		$this->isValid = false;
		$this->errors[] = $title;
	}
}