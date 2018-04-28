<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Db_model extends CI_Model {
    public function getLoginData($usr, $pwd) {
        // $u = mysql_real_escape_string($usr);
        // $u = md5(mysql_real_escape_string($pwd));

        // $u = $mysqli->real_escape_string($usr);
        // $u = md5($mysqli->real_escape_string($pwd));

        $u = $usr;
        $p = md5($pwd);

        $cek_login = $this->db->get_where('user', array('username' => $u, 'password' => $p));
        if($cek_login->num_rows() > 0) {
            $qad = $cek_login->row();
            if($u == $qad->username && $p == $qad->password) {
                $sess = array(
                    'username'  => $qad->username,
                    'stts'      => $qad->status,
                );
                $this->session->set_userdata($sess);
                if($qad->status == 'admin') {
                    header('location:'.base_url().'welcome');
                } else {
                    header('location:'.base_url().'user');
                }
            }
        } else {
            echo "<script>alert('Username/password salah, silahkan coba lagi.....');";
            echo "windows.location.href = '" .base_url(). "';";
            echo "</script>";
        }
    }
}



