<?php namespace App\Models;
use CodeIgniter\Model;

class loginModel extends Model
{
        protected $table = 'users';
        protected $allowedFields = ['name', 'email', 'password'];
}