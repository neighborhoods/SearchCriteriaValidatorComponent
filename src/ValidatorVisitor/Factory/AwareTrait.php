<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Factory;

use LogicException;
use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\FactoryInterface;

trait AwareTrait
{
    protected $ValidatorVisitorFactory;

    public function setValidatorVisitorFactory(FactoryInterface $ValidatorVisitorFactory): self
    {
        if ($this->hasValidatorVisitorFactory()) {
            throw new LogicException('ValidatorVisitorFactory is already set.');
        }
        $this->ValidatorVisitorFactory = $ValidatorVisitorFactory;

        return $this;
    }

    protected function getValidatorVisitorFactory(): FactoryInterface
    {
        if (!$this->hasValidatorVisitorFactory()) {
            throw new LogicException('ValidatorVisitorFactory is not set.');
        }

        return $this->ValidatorVisitorFactory;
    }

    protected function hasValidatorVisitorFactory(): bool
    {
        return isset($this->ValidatorVisitorFactory);
    }

    protected function unsetValidatorVisitorFactory(): self
    {
        if (!$this->hasValidatorVisitorFactory()) {
            throw new LogicException('ValidatorVisitorFactory is not set.');
        }
        unset($this->ValidatorVisitorFactory);

        return $this;
    }
}
