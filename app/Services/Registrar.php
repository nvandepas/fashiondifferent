<?php namespace FashionDifferent\Services;

use FashionDifferent\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		$newUser = User::create([
			'name' => $data['name'],
			'email' => $data['email'],
			'password' => $data['password'],
		]);

		if (array_key_exists('image', $data))
			$this->dispatch(new ProcessImage('profile-images', $newUser));

		return $newUser;
	}

}
