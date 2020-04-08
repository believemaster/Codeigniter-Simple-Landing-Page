<?php namespace App\Controllers;
use App\Models\contactModal;

class Other extends BaseController
{
    public function news()
    {
        return redirect()->to('https://news.believemaster.com'); 
    }

    public function magic()
    {
        return redirect()->to('https://magic.believemaster.com'); 
    }

    public function merch()
    {
        return redirect()->to('https://merch.believemaster.com'); 
    }

    public function production()
    {
        return redirect()->to('https://production.believemaster.com'); 
    }

    public function travel()
    {
        return redirect()->to('https://travel.believemaster.com'); 
    }

    public function organisation()
    {
        return redirect()->to('https://organisation.believemaster.com'); 
    }

    public function community()
    {
        return redirect()->to('https://community.believemaster.com'); 
    }

    public function services()
    {
        return redirect()->to('https://services.believemaster.com'); 
    }
}