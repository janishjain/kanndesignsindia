<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    function get_subcategories($category)
    {
        $data = [];
        $db = \Config\Database::connect();
        $query = $db->query("SELECT subcategory FROM categories WHERE category = '$category'");
        $result = $query->getResultArray();

        if (!empty($result))
        {
            foreach ($result as $value)
            {
                $data[] = $value['subcategory']; 
            }
        }

        return $data;
    }
}