<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Decorator;

use LogicException;
use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\DecoratorInterface;

trait AwareTrait
{
    protected $ValidatorVisitorDecorator;

    public function setValidatorVisitorDecorator(DecoratorInterface $Decorator): self
    {
        if ($this->hasValidatorVisitorDecorator()) {
            throw new LogicException('ValidatorVisitorDecorator is already set.');
        }
        $this->ValidatorVisitorDecorator = $Decorator;

        return $this;
    }

    protected function getValidatorVisitorDecorator(): DecoratorInterface
    {
        if (!$this->hasValidatorVisitorDecorator()) {
            throw new LogicException('ValidatorVisitorDecorator is not set.');
        }

        return $this->ValidatorVisitorDecorator;
    }

    protected function hasValidatorVisitorDecorator(): bool
    {
        return isset($this->ValidatorVisitorDecorator);
    }

    protected function unsetValidatorVisitorDecorator(): self
    {
        if (!$this->hasValidatorVisitorDecorator()) {
            throw new LogicException('ValidatorVisitorDecorator is not set.');
        }
        unset($this->ValidatorVisitorDecorator);

        return $this;
    }
}
