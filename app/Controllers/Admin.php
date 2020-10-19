<?php
namespace App\Controllers;
use CodeIgniter\Controller;

class Admin extends Controller
{
	public function index()
	{
		echo view('header');
		echo view('admin');
		echo view('footer');
    }

    public function login()
	{
        helper('cookie');
		$session = session();

		if(!empty($_COOKIE['is_admin']))
		{
			$userdata = array('is_admin' => $_COOKIE['is_admin']);
			$session->set($userdata);
			return redirect()->to('/admin');
		}
		elseif (!empty($_SESSION['is_admin']))
		{
			return redirect()->to('/admin');
		}

		if (strtolower($this->request->getMethod()) == 'post')
		{
			$user = $this->request->getVar('user');
			$pass = $this->request->getVar('password');

			if (!empty($user) && !empty($pass))
			{
				$adminuser = $_ENV['USERNAME'];
				$adminpass = $_ENV['PASSWORD'];

				if ($user === $adminuser && $pass === $adminpass)
				{
					$userdata = array('is_admin' => 1);
					$session->set($userdata);

					if(!empty($this->input->post('remember')))
					{
						set_cookie('is_admin', 1, 86400);
					}

					return redirect()->to('admin/');
				}
				elseif (!empty($_SESSION['is_admin']))
				{
					return redirect()->to('admin/');
				}
			}
		}

		return redirect()->to('/');
	}
}
