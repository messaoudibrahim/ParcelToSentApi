<?php
/**
 * Created by PhpStorm.
 * User: Brahim
 * Date: 24/09/2018
 * Time: 22:04
 */

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations

/**
 * Class UserController
 * @package AppBundle\Controller
 */
class UserController extends Controller
{

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED, serializerGroups={"user"})
     * @Rest\Get("/users")
     * @param Request $request
     * @return void
     */
    public function getUsersAction(Request $request)
    {
        exit('test');
    }

}