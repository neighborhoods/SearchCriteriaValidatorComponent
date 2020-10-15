<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor;

use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitorInterface;

interface BuilderInterface
{
    public function build(): ValidatorVisitorInterface;

    public function setRecord(array $record): BuilderInterface;
}
