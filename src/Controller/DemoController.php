<?php

declare(strict_types = 1);

namespace App\Controller;

use App\Form\DemoType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function __invoke()
    {
        $date = new \DateTime('2018-09-21 10:00:00', new \DateTimeZone('UTC'));
        $form = $this->createForm(DemoType::class, [
            'choice' => $date,
            'single_text' => $date,
        ]);

        return $this->render('demo.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
