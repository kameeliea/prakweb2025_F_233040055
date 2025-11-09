<?php
class User extends Controller
{
    public function index()
    {
        $data['users'] = $this->model('User_model')->getAllUsers();
        $this->view('user/index', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model('User_model')->addUser($_POST);
            header('Location: /User');
            exit;
        }
        $this->view('user/add');
    }

    public function edit($id)
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->model('User_model')->updateUser($_POST);
            header('Location: /User');
            exit;
        }
        $data['user'] = $this->model('User_model')->getUserById($id);
        $this->view('user/edit', $data);
    }

    public function delete($id)
    {
        $this->model('User_model')->deleteUser($id);
        header('Location: /User');
        exit;
    }
}
