<?php


namespace App\Controller;


use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

abstract class baseController extends AbstractController
{
    protected function getUser(): User
    {
        return parent::getUser();

    }

}
