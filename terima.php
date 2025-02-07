<?php

class terima extends controller
{
    public function index()
    {
        $jimm['terima'] = $this->gunakan_model("m_terima")->semua_barang();
        $this->tampilkan_view("f_terima/v_daftar_terima_120", $jimm);
    }

    public function input()
    {
        $this->tampilkan_view("f_terima/v_input_terima_120");
    }


    public function tampil($ciaw=" ")
    {
        $jimm['pelanggan'] = $this->gunakan_model("m_pelanggan")->semua_barang();
        $jimm['barang'] = $this->gunakan_model("m_barang")->semua_barang();
        $jimm['detail_terima'] = $this->gunakan_model("m_detail_terima")->satu_barang($ciaw);
        $this->tampilkan_view("f_terima/v_tampil_terima_120",$jimm);
    }

    public function edit($ciaw=" ")
    {
        $jimm['pelanggan'] = $this->gunakan_model("m_pelanggan")->semua_barang();
        $jimm['barang'] = $this->gunakan_model("m_barang")->semua_barang();
        $jimm['detail_terima'] = $this->gunakan_model("m_detail_terima")->satu_barang($ciaw);
        $jimm['terima'] = $this->gunakan_model("m_terima")->satu_barang($ciaw);
        $this->tampilkan_view("f_terima/v_edit_terima_120",$jimm);
    }
    
    public function hapus($ciaw=" ")
    {
        $jimm['pelanggan'] = $this->gunakan_model("m_pelanggan")->semua_barang($ciaw);
        $jimm['barang'] = $this->gunakan_model("m_barang")->semua_barang();
        $jimm['detail_terima'] = $this->gunakan_model("m_detail_terima")->satu_barang($ciaw);
        $jimm['terima'] = $this->gunakan_model("m_terima")->satu_barang($ciaw);
        $this->tampilkan_view("f_terima/v_hapus_terima_120",$jimm);
    }
}
