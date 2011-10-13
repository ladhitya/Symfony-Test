<?php
// src/Acme/HelloBundle/Form/Type/ProductType.php

namespace Acme\HelloBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ProductType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options) {
        $builder->add('name','text');
        $builder->add('shortcode', 'text');
        $builder->add('keyword', 'text');
        $builder->add('tag', new CampaignTagType());
        
    }
    
    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Acme\HelloBundle\Entity\Product',
        );
    }
    
    public function getName()
    {
        return 'product';
    }
    
}

?>