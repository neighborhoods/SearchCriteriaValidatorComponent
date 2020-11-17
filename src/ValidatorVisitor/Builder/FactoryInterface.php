<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Builder;

use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\BuilderInterface;

interface FactoryInterface
{
    public function create(): BuilderInterface;
}
