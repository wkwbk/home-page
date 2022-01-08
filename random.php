<?php

  $agent = $_SERVER['HTTP_USER_AGENT'];
    //var_dump($agent);
  if(stripos($agent,'android')!==false || stripos($agent, 'iphone')!==false){
      $img_array = glob('peimg/*.{gif,jpg,png,jpeg,webp,bmp,JPG}', GLOB_BRACE);
      if (count($img_array) == 0) {
          die('没找到pe图片文件。请先上传一些图片到 ' . dirname(__FILE__) . '/peimg/ 文件夹');
      }
      header('Content-Type: image/png');
      echo file_get_contents($img_array[array_rand($img_array)]);
  }
  else {
      $img_array = glob('pcimg/*.{gif,jpg,png,jpeg,webp,bmp}', GLOB_BRACE);
      if (count($img_array) == 0) {
          die('没找到pc图片文件。请先上传一些图片到 ' . dirname(__FILE__) . '/pcimg/ 文件夹');
      }
      header('Content-Type: image/png');
      echo file_get_contents($img_array[array_rand($img_array)]);
  }