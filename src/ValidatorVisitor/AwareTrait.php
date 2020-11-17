<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor;

use LogicException;
use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitorInterface;

trait AwareTrait
{
    protected $ValidatorVisitor;

    public function setValidatorVisitor(ValidatorVisitorInterface $ValidatorVisitor): self
    {
        if ($this->hasValidatorVisitor()) {
            throw new LogicException('ValidatorVisitor is already set.');
        }
        $this->ValidatorVisitor = $ValidatorVisitor;

        return $this;
    }

    protected function getValidatorVisitor(): ValidatorVisitorInterface
    {
        if (!$this->hasValidatorVisitor()) {
            throw new LogicException('ValidatorVisitor is not set.');
        }

        return $this->ValidatorVisitor;
    }

    protected function hasValidatorVisitor(): bool
    {
        return isset($this->ValidatorVisitor);
    }

    protected function unsetValidatorVisitor(): self
    {
        if (!$this->hasValidatorVisitor()) {
            throw new LogicException('ValidatorVisitor is not set.');
        }
        unset($this->ValidatorVisitor);

        return $this;
    }
}
