<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function index()
    {
        $M_admin = new \App\Models\M_admin();
        $login = $this->request->getPost('login');


        if ($login) {
            $member_username = $this->request->getPost('member_username');
            $member_password = $this->request->getPost('member_password');

            if ($member_username ==  '' || $member_password == '') {
                $err = "Silahkan masukkan username dan password!";
            }

            if (empty($err)) {
                $dataMember = $M_admin->where("unm", $member_username)->first();
                if (empty($dataMember)) {
                    $err = "Username invalid!";
                } else
                if ($dataMember['u_p'] != SHA1($member_password)) {
                    $err = "Password tidak sesuai!";
                }
            }

            if (empty($err)) {
                $dataSesi = [
                    'member_id' => $dataMember['id'],
                    'member_username' => $dataMember['unm'],
                    'member_password' => $dataMember['u_p'],
                ];
                session()->set($dataSesi);
                return redirect()->to('admin');
            }

            if ($err) {
                session()->setFlashdata('member_username', $member_username);
                session()->setFlashdata('error', $err);
                return redirect()->to("login");
            }
        }

        return view('v_login');
    }
}
