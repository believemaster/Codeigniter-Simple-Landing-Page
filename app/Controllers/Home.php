<?php namespace App\Controllers;
use App\Models\contactModal;

class Home extends BaseController
{
	//--------------------------------------------------------------------
	public function index($page='home')
	{
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		
        echo view('templates/header');
        echo view('pages/'.$page);
        echo view('templates/footer');
	}

	public function about($page='about')
	{
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		
        echo view('templates/header');
        echo view('pages/'.$page);
        echo view('templates/footer');
	}

	public function works($page='works')
	{
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		
        echo view('templates/header');
        echo view('pages/'.$page);
        echo view('templates/footer');
	}

	public function contact($page='contact')
	{
		if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
		}
		
        echo view('templates/header');
        echo view('pages/'.$page);
        echo view('templates/footer');
	}

}
