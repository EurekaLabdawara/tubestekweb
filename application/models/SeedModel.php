<?php
class SeedModel extends CI_Model
{
    public function SeedUsers($input)
    {
        $input = array(
            array(
                'email' => 'eurekalabdawara@gmail.com',
                'namaLengkap' => 'Eureka Labdawara',
                'username' => 'eurekalabdawara',
                'password' => 'ekaganteng',
                'alamat'  => 'Jl. CMIIW',
                'nohp' => '081234567890'
            )
        );
        $this->db->insert('users', $input);
    }

    public function SeedVendors($input)
    {
        //mengubah data post yang dicari / dipilih

        // $this->db->set('author', $input['author']);
        // $this->db->set('deskripsi', $input['deskripsi']);
        // $this->db->where('idPost', $input['id']);
        // $this->db->update('posts');
    }
}