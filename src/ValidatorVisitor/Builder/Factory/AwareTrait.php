<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Builder\Factory;

use LogicException;
use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Builder\FactoryInterface;

trait AwareTrait
{
    protected $ValidatorVisitorBuilderFactory;

    public function setValidatorVisitorBuilderFactory(FactoryInterface $ValidatorVisitorBuilderFactory): self
    {
        if ($this->hasValidatorVisitorBuilderFactory()) {
            throw new LogicException('ValidatorVisitorBuilderFactory is already set.');
        }
        $this->ValidatorVisitorBuilderFactory = $ValidatorVisitorBuilderFactory;

        return $this;
    }

    protected function getValidatorVisitorBuilderFactory(): FactoryInterface
    {
        if (!$this->hasValidatorVisitorBuilderFactory()) {
            throw new LogicException('ValidatorVisitorBuilderFactory is not set.');
        }

        return $this->ValidatorVisitorBuilderFactory;
    }

    protected function hasValidatorVisitorBuilderFactory(): bool
    {
        return isset($this->ValidatorVisitorBuilderFactory);
    }

    protected function unsetValidatorVisitorBuilderFactory(): self
    {
        if (!$this->hasValidatorVisitorBuilderFactory()) {
            throw new LogicException('ValidatorVisitorBuilderFactory is not set.');
        }
        unset($this->ValidatorVisitorBuilderFactory);

        return $this;
    }
}
