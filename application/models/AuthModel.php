<?php
class AuthModel extends CI_Model
{

    public function get_user($email)
    {
        //mengambil semua data post yang ada di table post
		$this->db->select('email, password');
        $query = $this->db->get_where('users', array ('email' => $email), 1));
        return $query->result();
    }

    public function create_user($input)
    {
        //membuat data post baru 
         $this->db->insert('users', $input);
    }

    public function update_user($input)
    {
        //mengubah data post yang dicari / dipilih

        // $this->db->set('author', $input['author']);
        // $this->db->set('deskripsi', $input['deskripsi']);
        // $this->db->where('idPost', $input['id']);
        // $this->db->update('posts');
    }

    public function delete_user($id)
    {
        // menghapus post yang dipilih

        // $this->db->where('idPost', $id);
        // $this->db->delete('posts');
    }
}