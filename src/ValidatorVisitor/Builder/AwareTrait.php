<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Builder;

use LogicException;
use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\BuilderInterface;

trait AwareTrait
{
    protected $ValidatorVisitorBuilder;

    public function setValidatorVisitorBuilder(BuilderInterface $ValidatorVisitorBuilder): self
    {
        if ($this->hasValidatorVisitorBuilder()) {
            throw new LogicException('ValidatorVisitorBuilder is already set.');
        }
        $this->ValidatorVisitorBuilder = $ValidatorVisitorBuilder;

        return $this;
    }

    protected function getValidatorVisitorBuilder(): BuilderInterface
    {
        if (!$this->hasValidatorVisitorBuilder()) {
            throw new LogicException('ValidatorVisitorBuilder is not set.');
        }

        return $this->ValidatorVisitorBuilder;
    }

    protected function hasValidatorVisitorBuilder(): bool
    {
        return isset($this->ValidatorVisitorBuilder);
    }

    protected function unsetValidatorVisitorBuilder(): self
    {
        if (!$this->hasValidatorVisitorBuilder()) {
            throw new LogicException('ValidatorVisitorBuilder is not set.');
        }
        unset($this->ValidatorVisitorBuilder);

        return $this;
    }
}
