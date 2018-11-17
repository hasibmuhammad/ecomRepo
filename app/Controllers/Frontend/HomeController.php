<?php
namespace App\Controllers\Frontend;

use App\Controllers\Controller;
use Respect\Validation\Validator;

class HomeController extends Controller{
    public function getIndex(){
        $this->view('home');
    }
    public function getRegister(){
        $this->view('register');
    }
    public function postRegister(){
        $validator = new Validator();
    }
}
