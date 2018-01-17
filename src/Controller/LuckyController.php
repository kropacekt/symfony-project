<?php
/**
 * Created by PhpStorm.
 * User: Tomáš Kropáček
 * Date: 16.01.2018
 * Time: 19:56
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;

class LuckyController
{
    public function number()
    {
        return new Response('<html><body>Lucky number: ' . rand(1, 500) . '</body></html>');
    }
}