<?php
function config($key = '')
{
  $config = [
       'name' => 'DevOps for php using azure devops',
       'version'=>'1.0'
  ];

  return isset($config[$key]) ? $config[$key]: null ;
}