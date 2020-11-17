<?php

declare(strict_types=1);

namespace Neighborhoods\SearchCriteriaValidatorComponent;

use Neighborhoods\SearchCriteriaValidatorComponent\Prefab5\SearchCriteria\FilterInterface;
use Neighborhoods\SearchCriteriaValidatorComponent\Prefab5\SearchCriteriaInterface;
use Neighborhoods\SearchCriteriaValidatorComponent\Prefab5\SearchCriteria\SortOrderInterface;
use Neighborhoods\SearchCriteriaValidatorComponent\Prefab5\SearchCriteria\VisitorInterface;

final class ValidatorVisitor implements ValidatorVisitorInterface
{
    public function validate(SearchCriteriaInterface $searchCriteria): void
    {
        // @todo include request?
        throw (new ValidationException())->addMessage('No validators approved of this request.');
    }

    public function addFilter(FilterInterface $filter): VisitorInterface
    {
        return $this;
    }

    public function addSortOrder(SortOrderInterface $sortOrder): VisitorInterface
    {
        return $this;
    }

    public function setPageSize(int $pageSize): VisitorInterface
    {
        return $this;
    }

    public function setCurrentPage(int $currentPage): VisitorInterface
    {
        return $this;
    }
}
