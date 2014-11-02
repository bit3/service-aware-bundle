<?php

namespace Bit3\Symfony\ServiceAwareBundle\Symfony\FrameworkBundle\Form;

use Symfony\Component\Form\FormFactoryInterface;

abstract class FormFactoryAware implements FormFactoryAwareInterface
{
    /**
     * The form factory.
     *
     * @var FormFactoryInterface
     */
    protected $formFactory;

    /**
     * {@inheritdoc}
     */
    public function setFormFactory(FormFactoryInterface $formFactory)
    {
        $this->formFactory = $formFactory;
    }
}
