<?php
class ia
{
//PROPIEDADES
  public $tipo="nave";
  public $mapaCol=4;
  public $mapaFil=4;
  public $numNaves=3;


//ARRAYS
//NAVES HUMANAS Y ARTIFICIALES
  public $navesHumano=[];
  public $navesIA=[

];



//GETTERS
  public function getColumna(){
    return $this->mapaCol;
  }
  public function getFila(){
    return $this->mapaFil;
  }
  public function getNave(){
    return $this->numNaves;
  }
  public function getNaveshumano(){
    return $this->navesHumano;
  }
  public function getNavesIA(){
  	$this->navesIA[1]["fil"]=1;
    return $this->navesIA;
  }




//SETTERS
  public function setMapaCol($mapaCol){
      if($mapaCol>3){
         $this->mapaCol=3;
      }elseif ($mapaCol<0){
        $this->mapaCol=0;
      }else{
        $this->mapaCol=$mapaCol;
      }
  }
  public function setMapaFil($mapaFil){
      if($mapaFil>3){
         $this->mapaFil=3;
 }    elseif($mapaFil<0){
        $this->mapaFil=0;
 }    else{
        $this->mapaFil=$mapaFil;
 }
 }
  public function setNaveHumana($id,$tipo,$col,$fil){
    $this->navesHumano[]=[
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
      "id"=>$id,
    ];
 }
  public function setNaveIA($id,$tipo,$col,$fil){
    $this->navesIA[]=[
      "tipo"=>$tipo,
      "col"=>$col,
      "fil"=>$fil,
      "id"=>$id,
    ];
 }
 public function setNavesIA($navesIA)
{
	return $this->navesIA;
}




//RANDOM
  public function randompos(){
	$this->columna=rand(0,3);
	$this->fila=rand(0,3);
 }
}
?>
