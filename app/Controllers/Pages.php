<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\BeladiriModel;
use App\Models\DiskusiModel;

class Pages extends BaseController
{

    protected $usermodel, $beladirimodel, $diskusimodel;
    public function __construct()
    {
        $this->usermodel = new UserModel();
        $this->beladirimodel = new BeladiriModel();
        $this->diskusimodel = new DiskusiModel();
    }

    public function index()
    {
        $data = [
            "title" => "HOME | Forum Beladiri",
            "beladiri" => $this->beladirimodel->findAll(),
        ];
        return view('home.php', $data);
    }

    public function about($id)
    {
        $data = [
            "title" => "About | Forum Beladiri",
            "beladiri" => $this->beladirimodel->getDetailBeladiri($id),
        ];
        return view('about.php', $data);
    }

    public function forum()
    {
        if (session()->get('islogin') != true) {
            return redirect()->to('Pages/login')->with('massage', 'Silahkan Login terlebih dahulu !');
        }
        $data = [
            "title" => "Forum | Forum Beladiri",
            "username" => session()->get('username'),
            "beladiri" => $this->beladirimodel->findAll(),
            "forum" => $this->beladirimodel->findAll(),
            "lastestdiskusi" => $this->diskusimodel->getLastestDiskuis(),
        ];
        return view('forum_home', $data);
    }

    public function forum_about($id)
    {
        if (session()->get('islogin') != true) {
            return redirect()->to('Pages/login')->with('massage', 'Silahkan Login terlebih dahulu !');
        }
        $data = [
            "title" => "Forum " . $id . " | Forum Beladiri",
            "forum" => $this->beladirimodel->findAll(),
            "beladiri" => $this->beladirimodel->getNamaBeladiri($id),
            "diskusi" => $this->diskusimodel->getDiskusi($id),
            "lastestdiskusi" => $this->diskusimodel->getLastestDiskuis(),
        ];
        return view('forum', $data);
    }

    public function login()
    {
        if (session()->get('islogin') != true) {
            $data = [
                "title" => "Log In | Forum Beladiri",
            ];
            return view('login', $data);
        }
        return redirect()->back();
    }

    public function register()
    {
        if (session()->get('islogin') != true) {
            $data = [
                "title" => "Register | Forum Beladiri",
            ];
            return view('register', $data);
        }
        return redirect()->back();
    }

    public function profile()
    {
        if (session()->get('islogin') != true) {
            return redirect()->to('Pages/login')->with('massage', 'Silahkan Login terlebih dahulu !');
        }
        $data = [
            "title" => "Profile | Forum Beladiri",
            "data" => $this->usermodel->getProfile(),
        ];
        return view('profile', $data);
    }
}
