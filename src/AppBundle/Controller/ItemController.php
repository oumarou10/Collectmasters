<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Item;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;

class ItemController extends Controller
{
    /**
     * @Route("/item", name="item")
     */
    public function addAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_USER');

        $form = $this->createFormBuilder()
            ->add('title', TextType::class)
            ->add('description', TextType::class)
            ->add('code', TextType::class)
            ->add('collection', TextType::class)
            ->add('submit', SubmitType::class)
            ->getForm()
        ;

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $item = new Item();

            $item->setTitle($data['title']);
            $item->setDescription($data['description']);
            $item->setCode($data['code']);
            $item->setCollection($data['collection']);

            $em = $this->getDoctrine()->getManager();
            $em->persist($item);
            $em->flush();

            return $this->redirectToRoute('items');
        }

        // replace this example code with whatever you need
        return $this->render('item/add.html.twig', ['form' => $form->createView()]);
    }

    /**
     * @Route("/items", name="items")
     */
    public function itemsAction (Request $request)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $items = $repository->findAll();

        return $this->render('item/list.html.twig', ['items' => $items]);
    }

    /**
     * @Route("/item/{id}", name="oneItem")
     */
    public function onItemAction (Request $request, $id)
    {
        $repository = $this->getDoctrine()->getRepository('AppBundle:Item');
        $item = $repository->find($id);

        return $this->render('item/one.html.twig', ['item' => $item]);
    }

    /**
     * @Route("/item/remove/{id}", name="removeItem")
     */
    public function removeAction (Request $request, $id)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN');

        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $repository = $doctrine->getRepository('AppBundle:Item');

        $item = $repository->find($id);
        $em->remove($item);
        $em->flush();

        return $this->redirectToRoute('items');
    }
}
