<?php

class kirim extends controller
{
    public function index()
    {
        $jimm['kirim'] = $this->gunakan_model("m_kirim")->semua_barang();
        $this->tampilkan_view("f_kirim/v_daftar_kirim_120", $jimm);
    }

    public function input()
    {
        $this->tampilkan_view("f_kirim/v_input_kirim_120");
    }

    public function tampil($ciaw = " ")
    {
        $jimm['pelanggan'] = $this->gunakan_model("m_pelanggan")->semua_barang();
        $jimm['barang'] = $this->gunakan_model("m_barang")->semua_barang();
        $jimm['kirim'] = $this->gunakan_model("m_kirim")->semua_barang($ciaw);
        $this->tampilkan_view("f_kirim/v_tampil_kirim_120", $jimm);
    }

    public function edit($ciaw = " ")
    {
        $jimm['pelanggan'] = $this->gunakan_model("m_pelanggan")->semua_barang();
        $jimm['barang'] = $this->gunakan_model("m_barang")->semua_barang();
        $jimm['kirim'] = $this->gunakan_model("m_kirim")->semua_barang($ciaw);
        $this->tampilkan_view("f_kirim/v_edit_kirim_120", $jimm);
    }

    public function hapus($ciaw = " ")
    {
        $jimm['pelanggan'] = $this->gunakan_model("m_pelanggan")->semua_barang();
        $jimm['barang'] = $this->gunakan_model("m_barang")->semua_barang();
        $jimm['kirim'] = $this->gunakan_model("m_kirim")->semua_barang($ciaw);
        $this->tampilkan_view("f_kirim/v_hapus_kirim_120", $jimm);
    }
}
