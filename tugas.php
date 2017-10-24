<?php
 class tugas {
 	public $bil1,$bil2;
 	function set_nilai ($bilangan1,$bilangan2){
 		$this->bil1 = $bilangan1;
 		$this->bil2 =$bilangan2;
 	}
 	function get_nilai1(){
 		return $this->bil1 + $this->bil2;
 	}
 	function get_nilai2(){
 		return $this->bil1 - $this->bil2;
 	}
 	function get_nilai3(){
 		return $this->bil1 * $this->bil2;
 }
 function get_nilai4(){
 		return $this->bil1 / $this->bil2;
 	}
 }
 $tugas1 = new tugas;
 $tugas1->set_nilai(6,12);
 echo "hasil penjumlahan 6+12 = ".$tugas1->get_nilai1().'<br>';
 echo "hasil penjumlahan 6-12 = ".$tugas1->get_nilai2().'<br>';
  echo "hasil penjumlahan 6*12 = ".$tugas1->get_nilai3().'<br>';
   echo "hasil penjumlahan 6/12 = ".$tugas1->get_nilai4().'<br>';
 ?>