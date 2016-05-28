<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    public function indexAction()
    {
        /*
         * The action's view can be rendered using render() method
         * or @Template annotation as demonstrated in DemoController.
         *
         */

        //render the response from the template
        $response = $this->render( 'AcmeDemoBundle:Welcome:index.html.twig' );

        //this will return the HTML code as a plain textfile!
      //$response->headers->set( 'Content-Type', 'text/plain' );

        //return the response
        return $response;
    }
}
