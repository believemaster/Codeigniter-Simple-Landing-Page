<?php namespace App\Controllers;
use App\Models\contactModel;

class Contact extends BaseController
{
    public function index() 
    {
        echo view('templates/header');
        echo view('pages/contact');
        echo view('templates/footer');
    }

	public function submit()
	{
		// if ( ! is_file(APPPATH.'/Views/pages/'.$page.'.php'))
        // {
        //     // Whoops, we don't have a page for that!
        //     throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        // }

		helper('form');
		$model = new contactModel();

		if (! $this->validate([
			'name' 		=> 'required',
			'email'  	=> 'required',
			'phone'  	=> 'required',
			'message'  	=> 'required'
		]))
		{
			echo view('templates/header');
			echo view('pages/contact', [
				'validation' => $this->validator,
		 	]);
			echo view('templates/footer');
		} else {
            $model->save([
				'name'     => $this->request->getVar('name'),
				'email'    => $this->request->getVar('email'),
				'phone'    => $this->request->getVar('phone'),
				'message'  => $this->request->getVar('message'),
            ]);
            
			echo view('templates/header');
			echo view('pages/success');
			echo view('templates/footer');
		}
        
    }
}