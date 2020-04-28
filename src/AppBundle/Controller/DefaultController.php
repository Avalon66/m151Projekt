<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

require_once('DefaultModel.php');
require('template.html.php');


class DefaultController extends Controller
{
  /**
    *@Route("/")
  */
    public function indexAction(Request $request)
    {
      return $this->render("template.html.php");
    }
}
