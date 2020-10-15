<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor;

use LogicException;
use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitorInterface;

class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    protected $record;

    public function build(): ValidatorVisitorInterface
    {
        $ValidatorVisitor = $this->getValidatorVisitorFactory()->create();
        
        
        // @TODO - build the object.
        throw new \LogicException('Unimplemented build method.');

        return $ValidatorVisitor;
    }

    protected function getRecord(): array
    {
        if ($this->record === null) {
            throw new LogicException('Builder record has not been set.');
        }

        return $this->record;
    }

    public function setRecord(array $record): BuilderInterface
    {
        if ($this->record !== null) {
            throw new LogicException('Builder record is already set.');
        }

        $this->record = $record;

        return $this;
    }
}
