<?php

namespace Ductong\FpolyBaseWeb3014\Controllers\Admin;

use Ductong\FpolyBaseWeb3014\Commons\Controller;
use Ductong\FpolyBaseWeb3014\Commons\Helper;
use Ductong\FpolyBaseWeb3014\Models\User;

class UserController extends Controller
{
    private User $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function index()
    {
        Helper::debug($this->user->all());

        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function create()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function store()
    {
        echo __CLASS__ . '@' . __FUNCTION__;
    }

    public function show($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function edit($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function update($id)
    {
        echo __CLASS__ . '@' . __FUNCTION__ . ' - ID = ' . $id;
    }

    public function delete($id)
    {
        $this->user->delete($id);

        header('Location: ' . url('admin/users'));
        exit();
    }
}
