<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }


    #[Route('/showTeacher/{name}', name:'show_teacher')]
    public function showTeacherWithName($name){
        return new Response ('bonjour'.$name);
    }

    #[Route('/showTeacherTwig', name:'show_teacher_twig')]
    public function showTWING(){
        $title='list of teachers';
        $teachers= array (
            array('id'=>1,'name'=> 'teacher1' , 'nb_class'=>4),
            array('id'=>2,'name'=> 'teacher2' , 'nb_class'=>2),
            array('id'=>3,'name'=> 'teacher3' , 'nb_class'=>3)
        );
        return $this-> render('teacher/show.html.twig', ['t'=>$title, 'tt'=>$teachers]);
    }

}
