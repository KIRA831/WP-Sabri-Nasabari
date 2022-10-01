<?php
class Latihan1 extends CI_Controller
{
 public function index()
 {
    $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

 $this->load->view('view_  latihan1', $data);
 }
}