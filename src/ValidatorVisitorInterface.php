<?php
declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent;

use Neighborhoods\SearchCriteriaValidatorComponent\Prefab5\SearchCriteriaInterface;
use Neighborhoods\SearchCriteriaValidatorComponent\Prefab5\SearchCriteria\VisitorInterface;

interface ValidatorVisitorInterface extends VisitorInterface
{
    public function validate(SearchCriteriaInterface $searchCriteria) : void;
}
