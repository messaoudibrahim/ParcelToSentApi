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
use Nelmio\ApiDocBundle\Annotation\ApiDoc;


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
     * @ApiDoc(
     *  description="Returns a collection of Object",
     *  requirements={
     *      {
     *          "name"="limit",
     *          "dataType"="integer",
     *          "requirement"="\d+",
     *          "description"="how many objects to return"
     *      }
     *  },
     *  parameters={
     *      {"name"="categoryId", "dataType"="integer", "required"=true, "description"="category id"}
     *  },
     *      parameters={
     *      {"name"="user", "dataType"="integer", "required"=true, "description"="category id"}
     *  },
     *  output={"collection"=true, "collectionName"="classes", "class"="Your\Namespace\Class"}
     * )
     */
    public function getUsersAction(Request $request)
    {
        exit('test');
    }




}