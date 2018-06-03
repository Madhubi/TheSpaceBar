<?php
/**
 * Created by PhpStorm.
 * User: Madhubi
 * Date: 6/3/2018
 * Time: 5:16 PM
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */

    Public function homepage()
    {
        return new Response("Oh! my first page");
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf(
            'Future page to show article: %s',
            $slug
        ));
    }
}