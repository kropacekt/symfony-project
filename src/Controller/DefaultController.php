<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 16.01.2018
 * Time: 19:56
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {
        return new Response('<html><body>Vítej na hlavní stránce</body></html>');
    }

}