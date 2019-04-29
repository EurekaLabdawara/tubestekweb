<?php
class VendorModel extends CI_Model
{
    public function get_toko($vendorID)
    {
        $query = $this->db->get_where('vendors', array('vendorID' => $vendorID), 1);
        return $query->result();
    }

    public function create_toko($userid, $input)
    {
        //membuat data post baru 
        $this->db->insert('vendors', $input);

        $this->db->select('vendorID');
        $query = $this->db->get_where('vendors', array('userID' => $userid), 1);
        // print_r($query->result());
        $vendorid = $query->result()[0]->vendorID;
        // print_r($vendorid);

        $this->db->set('vendorID', $vendorid, FALSE);
        $this->db->where('userID', $userid);
        $this->db->update('users');

        return $vendorid;
    }

    public function delete_user($id)
    {
        // menghapus post yang dipilih

        // $this->db->where('idPost', $id);
        // $this->db->delete('posts');
    }
}