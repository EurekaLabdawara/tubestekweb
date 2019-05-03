<?php
class VendorModel extends CI_Model
{
    public function get_toko($vendorID)
    {
        $query = $this->db->get_where('vendors', array('vendorID' => $vendorID), 1);
        return $query->result();
    }

    public function create_toko($userID, $input)
    {
        //membuat data post baru 
        $this->db->insert('vendors', $input);
        $this->db->select('vendorID');
        return $this->db->get_where('vendors', array('userID' => $userID), 1);
    }

    public function delete_user($id)
    {
        // menghapus post yang dipilih

        // $this->db->where('idPost', $id);
        // $this->db->delete('posts');
    }
}