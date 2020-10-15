<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor;

use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitorInterface;

interface FactoryInterface
{
    public function create(): ValidatorVisitorInterface;
}
