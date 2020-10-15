<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor;

use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitorInterface;

class Factory implements FactoryInterface
{
    use AwareTrait;

    public function create(): ValidatorVisitorInterface
    {
        return clone $this->getValidatorVisitor();
    }
}
