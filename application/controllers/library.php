<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Library extends CI_Controller {

	public function index()
	{
		$this->load->model('model_library');

		/*$authors = array(
			'authors' => array(
				array(
					'author_id' => 1,
					'author_name' => 'Pushkin',
				),
				array(
					'author_id' => 2,
					'author_name' => 'Esenin',
				),
				array(
					'author_id' => 3,
					'author_name' => 'Pupkin',
				),
			),
		));*/

		$authors = $this->model_library->getAuthors();

		$this->load->view('library', array(
			'authors' => $authors,
		));
	}
	public function books($author_id) {

		$this->load->model('model_library');
		$books = $this->model_library->getBooks($author_id);
		$this->load->view('books', array(
			'books' => $books,
		));
	}
}
