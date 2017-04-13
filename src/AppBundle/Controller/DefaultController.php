<?php

namespace AppBundle\Controller;

use Exchange\Command\IntroduceUserItem;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/item/new", name="introduce_item_form")
     */
    public function newItemAction(Request $request)
    {
        $command = new IntroduceUserItem('', 'item_owner@mail.com');

        $form = $this->createFormBuilder($command)
            ->add('itemName', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'Introduce Item'))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->get('exchange.items_handler')->introduce($command);

            $this->addFlash(
                'success',
                sprintf("Introduced item %s", $command->getItemName())
            );

            return $this->redirectToRoute('items_list');
        }

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }

    /**
     * @Route("/items", name="items_list")
     */
    public function itemsAction(Request $request)
    {
        return $this->render('default/items.html.twig', array(
            'items' => $this->get('exchange.items')->findAll()
        ));
    }


}
