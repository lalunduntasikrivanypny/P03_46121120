<?php

class barang extends controller
{
    public function index()
    {
        $jimm['barang']=$this->gunakan_model("m_barang")->semua_barang();
        $this->tampilkan_view("f_barang/v_daftar_barang_120", $jimm);
    }


    public function input()
    {
        $this->tampilkan_view("f_barang/v_input_barang_120");
    }

    public function tampil()
    {
        $this->tampilkan_view("f_barang/v_tampil_barang_120");
    }

    public function edit()
    {
        $this->tampilkan_view("f_barang/v_edit_barang_120");
    }

    public function hapus()
    {
        $this->tampilkan_view("f_barang/v_hapus_barang_120");
    }
}
