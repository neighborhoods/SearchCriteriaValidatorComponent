<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Decorator;

use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\DecoratorInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): DecoratorInterface
    {
        return clone $this->getValidatorVisitorDecorator();
    }
}
