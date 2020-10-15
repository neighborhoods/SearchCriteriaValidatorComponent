<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor;

use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitorInterface;

interface DecoratorInterface extends ValidatorVisitorInterface
{
    public function setValidatorVisitor(ValidatorVisitorInterface $validatorVisitor) : ValidatorVisitorInterface;
}
