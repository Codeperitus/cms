<?php

namespace ac\CmsAdminBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class LoginType extends AbstractType {

    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
                ->add('_username', 'text', array('attr' => array('autocomplete' => 'off')))
                ->add('_password', 'password')
        ;
    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver) {
//        $resolver->setDefaults(array(
//            'data_class' => 'ac\DataBundle\Entity\User'
//        ));
    }

    /**
     * @return string
     */
    public function getName() {
//        return 'ac_cmsfrontbundle_login';
    }

}
