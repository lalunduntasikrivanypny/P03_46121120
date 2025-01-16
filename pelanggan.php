<?php

class pelanggan extends controller
{
    public function index()
    {
      $jimm['pelanggan']=$this->gunakan_model("m_pelanggan")->semua_barang();
        $this->tampilkan_view("f_pelanggan/v_pelanggan_120",$jimm);
    }
  
}
