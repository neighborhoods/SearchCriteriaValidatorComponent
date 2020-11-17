<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor;

use LogicException;
use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitorInterface;
use Neighborhoods\SearchCriteriaValidatorComponent\ValidatorVisitor\Decorator\FactoryInterface as DecoratorFactoryInterface;

final class Builder implements BuilderInterface
{
    use Factory\AwareTrait;

    /** @var array  */
    protected $decoratorFactories = [];

    public function build(): ValidatorVisitorInterface
    {
        $ValidatorVisitor = $this->getValidatorVisitorFactory()->create();

        foreach ($this->decoratorFactories as $decoratorFactory) {
            $ValidatorVisitor = $decoratorFactory->create()->setThrowableDiagnostic($ValidatorVisitor);
        }

        return $ValidatorVisitor;
    }

    public function addFactory(DecoratorFactoryInterface $decoratorFactory): BuilderInterface
    {
        $factoryKey = str_replace('\\', '', get_class($decoratorFactory));
        if (isset($this->decoratorFactories[$factoryKey])) {
            throw new LogicException(sprintf('Factory with key, "%s", is already set.', $factoryKey));
        }
        $this->decoratorFactories[$factoryKey] = $decoratorFactory;

        return $this;
    }
}
