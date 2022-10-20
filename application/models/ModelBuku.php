<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelBuku extends CI_Model
{
    // manajemen buku
    public function getBuku()
    {
        return $this->db->get('buku');
    }

    public function bukuWhere($where)
    {
        return $this->db->get_where('buku', $where);
    }

    public function simpanBuku($data = null)
    {
        return $this->db->insert('user', $data);
    }

    public function updateBuku($data = null, $where = null)
    {
        return $this->db->update('buku', $data, $where);
    }

    public function hapusBuku($where = null)
    {
        return $this->db->delete('buku', $where);
    }

    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }

        $this->db->form('buku');
        return $this->db->get()->row($field);
    }

    // manajemen kategori
    public function getKategori()
    {
        return $this->db->get('kategori');
    }

    public function kategoriWhere($where)
    {
        return $this->db->get_where('kategori', $where);
    }

    public function simpanKategori($data = null)
    {
        return $this->db->insert('kategori', $data);
    }

    public function hapusKategori($where = null)
    {
        return $this->db->delete('kategori', $where);
    }

    public function updateKategori($where = null, $data = null)
    {
        return $this->db->update('kategori', $data, $where);
    }

    // join
    public function joinKategori($where)
    {
        $this->db->select('buku.id_kategori, kategori.kategori');
        $this->db->from('buku');
        $this->db->join('kategori', 'kategori.id=buku.id_kategori');
        $this->db->where($where);
        return $this->db->get();
    }
}
