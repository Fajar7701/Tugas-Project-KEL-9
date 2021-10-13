<?php
defined('BASEPATH') or exit ('no direct script access allowed');
class Project extends CI_Controller{
   public function index()
   {
      $this->load->view('beranda');
      $this->load->view('tengah');
      $this->load->view('bawah');
   }

   public function f_action()
   {
      $this->load->view('beranda');
      $this->load->view('action');
      $this->load->view('bawah');
   }

   public function f_drama()
   {
      $this->load->view('beranda');
      $this->load->view('drama');
      $this->load->view('bawah');
   }

   public function f_adventure()
   {
      $this->load->view('beranda');
      $this->load->view('adventure');
      $this->load->view('bawah');
   }

   public function f_about()
   {
      $this->load->view('beranda');
      $this->load->view('about');
      $this->load->view('bawah');
   }

   public function f_ff8()
   {
      $this->load->view('h_ff8');
      $this->load->view('ff8');
      $this->load->view('bawah');
   }

   public function f_ipman4()
   {
      $this->load->view('h_ipman4');
      $this->load->view('ipman4');
      $this->load->view('bawah');
   }

   public function f_maze()
   {
      $this->load->view('h_maze');
      $this->load->view('maze');
      $this->load->view('bawah');
   }

   public function f_abc()
   {
      $this->load->view('h_abc');
      $this->load->view('abc');
      $this->load->view('bawah');
   }

   public function f_cllb()
   {
      $this->load->view('h_cllb');
      $this->load->view('cllb');
      $this->load->view('bawah');
   }

   public function f_rudy()
   {
      $this->load->view('h_rudy');
      $this->load->view('rudy');
      $this->load->view('bawah');
   }

   public function f_aladdin()
   {
      $this->load->view('h_aladdin');
      $this->load->view('aladdin');
      $this->load->view('bawah');
   }

   public function f_jungle()
   {
      $this->load->view('h_jungle');
      $this->load->view('jungle');
      $this->load->view('bawah');
   }

   public function f_kingkong()
   {
      $this->load->view('h_kingkong');
      $this->load->view('kingkong');
      $this->load->view('bawah');
   }

   public function f_fajar()
   {
      $this->load->view('h_fajar');
      $this->load->view('fajar');
      $this->load->view('bawah');
   }

   public function f_fuad()
   {
      $this->load->view('h_fuad');
      $this->load->view('fuad');
      $this->load->view('bawah');
   }

   public function f_juna()
   {
      $this->load->view('h_juna');
      $this->load->view('juna');
      $this->load->view('bawah');
   }

   public function f_rizky()
   {
      $this->load->view('h_rizky');
      $this->load->view('rizky');
      $this->load->view('bawah');
   }
}
?>