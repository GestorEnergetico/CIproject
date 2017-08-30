<?php

public function profile_image($img){
  if(count($img)>0){
    return "http://admin.gestor-energetico.es/images/profile/".$img;
  }
  return 'http://admin.gestor-energetico.es/images/profile/noimage.png';
}

 ?>
