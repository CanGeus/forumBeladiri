<?php

namespace App\Controllers;

use App\Models\DiskusiModel;
use App\Models\UserModel;

class User extends BaseController
{
    protected $usermodel, $diskusimodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
        $this->diskusimodel = new DiskusiModel();
    }

    public function register()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[4]|max_length[20]|is_unique[users.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'repassword' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[4]|max_length[100]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 100 Karakter',
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->usermodel->save([
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT),
            'name' => $this->request->getVar('name')
        ]);
        return redirect()->to('Pages/login')->with('massage', 'Pendaftaran berhasil dilakaun, Silahkan untuk Login !');
    }

    public function login()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');

        $data = $this->usermodel->where('username', $username)->first();
        if ($data) {
            $session = session();
            if (password_verify($password, $data['password'])) {
                //create session
                $login = [
                    'islogin' => true,
                    'username' => $data['username'],
                    'name' => $data['name']
                ];
                $session->set($login);
                return redirect()->to('Pages/forum');
            } else {
                return redirect()->to('Pages/login')->with('massage', 'Username/Password Salah');
            }
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url());
    }

    public function diskusi($id)
    {
        if (!$this->validate([
            'pesan' => [
                'rules' => 'required|max_length[500]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'max_length' => '{field} Maksimal 500 Karakter',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->to('Pages/forum_about/' . $id)->withInput();
        }
        $this->diskusimodel->save([
            'username' => $this->request->getVar('username'),
            'kode' => $this->request->getVar('kode'),
            'pesan' => $this->request->getVar('pesan')
        ]);
        return redirect()->to('Pages/forum_about/' . $id)->with('massage', 'Diskusi Berhasil Di tambahkan');
    }

    public function updateProfile()
    {
        if (!$this->validate([
            'img' => [
                'rules' => 'uploaded[img]|max_size[img,1024]|is_image[img]|mime_in[img,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'pilih gambar terlebih dahulu',
                    'max_size' => 'ukuran gambar terlalu besar',
                    'is_image' => 'yang anda pilin bukan file gambar',
                    'mime_in' => 'yang anda pilin bukan file gambar',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $fileimg = $this->request->getFile('img');
        $fileimg->move('img/core-img');
        $namaimg = $fileimg->getName();
        $this->usermodel->save([
            'username' => session()->get('username'),
            'img' => $namaimg,
        ]);
        // $fileimg->move('img/core-img', $namaimg);
        return redirect()->back()->with('massage', 'Data Berhasil di Simpan');
    }
}
