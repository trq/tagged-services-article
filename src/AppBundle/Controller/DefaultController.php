<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $data = [2000,4000,8000,10000, 'abc', 20000, 40000, 'xyz'];

        $data = $this->get('app.rule_manager')->applyRules($data);

        return $this->render('default/index.html.twig', ['data' => $data]);
    }
}