<?php
class ItemModel extends CI_Model
{
    public function get_item($idBarang)
    {
        // model untuk mendapatkan item sesuai dengan idBarang
        $query = $this->db->get_where('items', array('idBarang' => $idBarang), 1);
        return $query->result();
    }

    public function get_item_coverimages($idBarang)
    {
        $query = $this->db->get_where('itemimages', array('idBarang' => $idBarang, 'asCover' => 1));
        return $query->result();
    }

    public function get_item_presetimages($idBarang)
    {
        $query = $this->db->get_where('itemimages', array('idBarang' => $idBarang, 'asPreset' => 1));
        return $query->result();
    }

    public function get_item_frameimages($idBarang)
    {
        $query = $this->db->get_where('itemimages', array('idBarang' => $idBarang, 'asFrame' => 1));
        return $query->result();
    }

    public function search_item_byKeyword()
    {
        // model untuk mendapatkan item sesuai dengan nama dan atau kategori yang mirip (like)

    }

    public function search_item_byVendor($vendorID)
    {
        // model untuk mendapatkan item sesuai dengan id Vendor
        $query = $this->db->get_where('items', array('vendorID' => $vendorID));
        return $query->result();
    }

    public function create_item($userid, $input)
    {
        //membuat data item baru 
        // $this->db->insert('items', $input);
    }

    public function delete_item($id)
    {
        // menghapus item yang dipilih
    }

    public function add_new_preset()
    {
        # code...
    }

    public function update_item_desc()
    {
        // model function untuk mengupdate deskripsi, nama, harga
    }
    public function update_item_images()
    {
        // model function untuk mengupdate gambar pada item
    }

    public function update_item_stok()
    {
        // model function untuk mengupdate jumlah stok pada item
    }
}