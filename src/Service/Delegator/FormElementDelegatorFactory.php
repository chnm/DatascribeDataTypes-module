<?php
namespace DatascribeDataTypes\Service\Delegator;

use DatascribeDataTypes\Form\Element as DatascribeDataTypesElement;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\DelegatorFactoryInterface;

class FormElementDelegatorFactory implements DelegatorFactoryInterface
{
    public function __invoke(ContainerInterface $container, $name,
        callable $callback, array $options = null
    ) {
        $formElement = $callback();
        $formElement->addClass(DatascribeDataTypesElement\PopulatedPlaceSelect::class, 'formDatascribeDataTypesPopulatedPlaceSelect');
        return $formElement;
    }
}
