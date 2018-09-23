<?php
/**
 * Created by PhpStorm.
 * User: Brahim
 * Date: 23/09/2018
 * Time: 16:26
 */

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class EssaiController extends Controller
{
    /**
     * @return User
     * @Rest\View()
     */
    public function getUserAction(){

        $user = new User();
        $user->setFirstname("brahim");
        $user->setLastname("messaudi");

        return $user;
    }

}