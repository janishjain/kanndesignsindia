<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\CategoryModel;

class Category extends Controller
{
	public function index($category, $subcategory)
	{
        $categoryModel = new CategoryModel();
        $data['category'] = $category;
        $data['subcategory'] = $subcategory;
        $data['subcategories'] = $categoryModel->get_subcategories($category);
		echo view('header');
		echo view('category', $data);
		echo view('footer');
	}
}
