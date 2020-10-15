<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor;

use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitorInterface;
use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Decorator\FactoryInterface as DecoratorFactoryInterface;

interface BuilderInterface
{
    public function build(): ValidatorVisitorInterface;

    public function addFactory(DecoratorFactoryInterface $decoratorFactory): BuilderInterface; /** @override */
}
