<?php
namespace DatascribeDataTypes\Form\Element;

use Laminas\Form\Element;
use Laminas\InputFilter\InputProviderInterface;
use Laminas\Validator;

class PopulatedPlaceSelect extends Element implements InputProviderInterface
{
    public function getValidators()
    {
        $validators = [];
        return $validators;
    }

    public function getInputSpecification()
    {
        return [
            'name' => $this->getName(),
            'required' => false,
            'allow_empty' => true,
            'validators' => $this->getValidators(),
            'filters' => [],
        ];
    }
}
