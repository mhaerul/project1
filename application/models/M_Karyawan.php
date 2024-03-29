<?php 
    class M_Karyawan extends CI_Model{
        function tampil_data(){
            $this->db->select("karyawan.*, divisi.divisi as division");
            $this->db->from("karyawan");
            $this->db->join('divisi','karyawan.divisi = divisi.id','left');
            return $this->db->get()->result();
        }
        
        function getData($where,$table) {
            return $this->db->get_where($table,$where)->result();
        }

        function get_divisi() {
            return $this->db->get('divisi')->result();
        }

        function tambah($data,$table) {
            $this->db->insert($table,$data);
        }

        function hapus($where,$table) {
            $this->db->where($where);
            $this->db->delete($table);
        }

        function update_data($where,$data,$table){
            $this->db->where($where);
            $this->db->update($table,$data);
        }	
    }
?>