<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;
use App\Models\M_auth;

class Auth extends BaseController
{
	use ResponseTrait;
	public function index()
	{
		$validation = \Config\Services::validation();
		$rule = [
			'email' => [
				'rules' => 'required|valid_email',
				'errors' => [
					'required' => 'Silahkan masukkan email!',
					'valid_email' => 'Silahkan masukkan email yang valid'
				]
			],
			'password' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Silahkan masukkan password',

				]
			]
		];
		$validation->setRules($rule);
		if (!$validation->withRequest($this->request)->run()) {
			return $this->fail($validation->getErrors());
		}

		$model = new M_auth();

		$email = $this->request->getVar('email');
		$password = $this->request->getVar('password');

		$data = $model->getEmail($email);
		if ($data['password'] != SHA1($password)) {
			return $this->fail("Password tidak sesuai");
		}

		helper('jwt');
		$response = [
			'message' => 'Authentication Successful, Granted',
			'data' => $data,
			'access_token' => createJWT($email)
		];
		return $this->respond($response);
	}
}
