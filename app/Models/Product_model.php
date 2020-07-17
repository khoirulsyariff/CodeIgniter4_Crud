<?php

namespace App\Models;

use CodeIgniter\Model;

class Product_model extends Model
{
  protected $table = "products";

  public function insert_product($data)
  {
    return $this->db->table($this->table)->insert($data);
  }
  public function get_product($id = false)
  {
    if ($id === false) {
      return $this->table('products')->get()->getResultArray();
    } else {
      return $this->table('products')->where('product_id', $id)->get()->getRowArray();
    }
  }
  public function update_product($data, $id)
  {
    return $this->db->table($this->table)->update($data, ['product_id' => $id]);
  }
  public function delete_product($id)
  {
    return $this->db->table($this->table)->delete(['product_id' => $id]);
  }
}
