<?php

// src/ac/CmsAdminBundle/Controller/SecurityController.php;
namespace ac\CmsAdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use ac\CmsAdminBundle\Form\LoginType;

class SecurityController extends Controller
{
    public function loginAction(Request $request)
    {
        $session = $request->getSession();
        
       
       
        // get the login error if there is one
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                Security::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(Security::AUTHENTICATION_ERROR)) {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(Security::LAST_USERNAME);
        $form   = $this->createCreateForm();
        return $this->render(
            'acCmsAdminBundle:Security:login.html.twig',
            array(
                // last username entered by the user
                'last_username' => $lastUsername,
                'error'         => $error,
                'form'   => $form->createView(),
            )
        );
    }
    private function createCreateForm()
    {
        $form = $this->createForm(new LoginType());

        $form->add('submit', 'submit', array('label' => 'Login'));

        return $form;
    }
}
