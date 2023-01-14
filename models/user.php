<?php

require_once dirname(__FILE__) . '/../core/validation_result.php';

/**
 * User model
 */
class User extends BaseModel{
	
	// Define necessary constants, so we know from which table to load data
	const tableName = 'users';
	// ClassName constant is important for find and findOne static functions to work
	const className = 'User';
	
	// Create getter functions
	
	public function getName() {
		return $this->getField('name');
	}
	
	public function getEmail() {
		return $this->getField('email');
	}

	public function getPhone() {
		return $this->getField('phone');
	}
	
	public function getCity() {
		return $this->getField('city');
	}

	public function validate($data) {
		$data = $this->coalesce($data);
		$errors = new ValidationResult();

		if (empty($data['name'])) {
			$errors->addError('Name is missing');
		}

		if (empty($data['email'])) {
			$errors->addError('Email is missing');
		} else {
			if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
				$errors->addError('Email is invalid');
			}
		}

		if (empty($data['phone'])) {
			$errors->addError('Phone number is missing');
		} else {
			if (!preg_match("/[0-9\+ ]{6,30}/", $data['phone'])) {
				$errors->addError('Phone number is invalid');
			}
		}

		if (empty($data['city'])) {
			$errors->addError('City is missing');
		}

		return $errors;
	}

	public function coalesce($data) {
		return array_map(fn($value) => trim($value), $data);
	}
}