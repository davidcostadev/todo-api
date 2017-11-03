<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\User;


class UsersController extends Controller
{
    public function index() {
        return User::All();
    }
}
