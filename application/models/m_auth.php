<?php
class m_auth extends CI_Model{
    public function register($name,$email,$nis,$year,$jurusan,$phone_number,$password){
        $register_data=array(
            'name'=>$name,
            'email'=>$email,
            'nis'=>$nis,
            'graduate_year'=>$year,
            'jurusan'=>$jurusan,
            'phone_number'=>$phone_number,
            'password'=>$password,
            
            'user_role'=>2
        );
        $this->db->insert('user',$register_data);
    }
    public function login($email){
       return  $this->db->get_where('user',['email'=>$email])->row_array();

    }
}