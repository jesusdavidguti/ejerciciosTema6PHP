<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Pelicula;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MainController extends AbstractController
{

    function demoIndex() {
        return $this->render('demoIndex.html.twig');
    }
    
    function demoVerPelicula() {
        return $this->render('demoVerPelicula.html.twig');
    }

    function listarPeliculas() {
        $entityManager = $this->getDoctrine()->getManager();

        $peliculas= $entityManager->getRepository(Pelicula::class)->findAll();

        return $this->render('index.html.twig', array(
            'pelicula' => $peliculas,
        ));
    }

    function verPelicula($id) {
            $entityManager = $this->getDoctrine()->getManager();
    
            $pelicula= $entityManager->getRepository(Pelicula::class)->find($id);
    
            if (!$pelicula){
                throw $this->createNotFoundException(
                    'No existe ninguna pelicula con id '.$id
                );
            }
    
            return $this->render('pelicula.html.twig', array(
                'pelicula' => $pelicula,
            ));
    }

}