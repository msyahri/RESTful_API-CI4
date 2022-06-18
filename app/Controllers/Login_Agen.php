<?php

namespace App\Controllers;

class Login_Agen extends BaseController
{
    public function index()
    {
        $ModelMember = new \App\Models\MA_member();
        $login = $this->request->getPost('login');

        if ($login) {
            $member_email = $this->request->getPost('member_email');
            $member_password = $this->request->getPost('member_password');

            if ($member_email ==  '' || $member_password == '') {
                $err = "Silahkan masukkan username dan password!";
            }

            if (empty($err)) {
                $dataMember = $ModelMember->where("email", $member_email)->first();
                if (empty($dataMember)) {
                    $err = "Username invalid!";
                } else
                if ($dataMember['password'] != SHA1($member_password)) {
                    $err = "Password tidak sesuai!";
                }
            }

            if (empty($err)) {
                $dataSesi = [
                    'member_id' => $dataMember['id'],
                    'member_email' => $dataMember['email'],
                    'member_password' => $dataMember['password'],
                ];
                session()->set($dataSesi);
                // return redirect()->to('RestClient');
                return redirect()->to('agen');
            }

            if ($err) {
                session()->setFlashdata('member_email', $member_email);
                session()->setFlashdata('error', $err);
                return redirect()->to("login_agen");
            }
        }
        return view('agen/v_login');
    }
}
