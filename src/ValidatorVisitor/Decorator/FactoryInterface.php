<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Decorator;

use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\DecoratorInterface;

interface FactoryInterface
{
    public function create(): DecoratorInterface;
}
