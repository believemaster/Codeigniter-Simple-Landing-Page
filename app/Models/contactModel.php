<?php namespace App\Models;
use CodeIgniter\Model;

class contactModel extends Model
{
        protected $table = 'contact';
        protected $allowedFields = ['name', 'email', 'phone', 'message'];
}