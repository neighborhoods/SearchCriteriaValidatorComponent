<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Builder;

use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\BuilderInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): BuilderInterface
    {
        return clone $this->getValidatorVisitorBuilder();
    }
}
