<?php

namespace AppBundle\Model;

use Symfony\Bundle\FrameworkBundle\Controller\Model;

class DefaultModel extends Model
{
  public function DbConnection(){
    $conection = mysqli_connect('http://www.login-67.hoststar.ch/phpMyAdmin/?db=inf17s','inf17s',jL6LCigmf!YB8Hh','inf17s')
  }
}
