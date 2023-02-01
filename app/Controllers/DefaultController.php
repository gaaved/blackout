<?php
namespace App\Controllers;
class DefaultController
{
    public function homepage()
    {
       include('../resources/views/form.html');
    }

    public function about()
    {
        echo 'about';
    }

    public function contacts()
    {
        echo 'contacts';
    }

}