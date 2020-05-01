<?php
/**
 * Copyright (c) 2020. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
 * Morbi non lorem porttitor neque feugiat blandit. Ut vitae ipsum eget quam lacinia accumsan.
 * Etiam sed turpis ac ipsum condimentum fringilla. Maecenas magna.
 * Proin dapibus sapien vel ante. Aliquam erat volutpat. Pellentesque sagittis ligula eget metus.
 * Vestibulum commodo. Ut rhoncus gravida arcu.
 */

namespace App\Controller;

use App\Form\MerchantServicesAppType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class HomepageController extends AbstractController
{
    public function index(Request $request)
    {
        $form = $this->createForm(MerchantServicesAppType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            //make PDF and return
        }

        return $this->render('base.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}