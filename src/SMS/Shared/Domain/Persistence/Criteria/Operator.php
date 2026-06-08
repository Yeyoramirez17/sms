<?php

declare(strict_types=1);

namespace Src\SMS\Shared\Domain\Persistence\Criteria;

/**
 * Enumeration representing the various operators that can be used in filtering criteria for query results.
 */
enum Operator: string
{
    case EQUALS = '=';
    case NOT_EQUALS = '<>';
    case LIKE = 'LIKE';
    case NOT_LIKE = 'NOT LIKE';
    case ILIKE = 'ILIKE'; // Only PostgreSQL
    case GREATER_THAN = '>';
    case GREATER_THAN_OR_EQUALS = '>=';
    case LESS_THAN = '<';
    case LESS_THAN_OR_EQUALS = '<=';
    case IN = 'IN';
    case NOT_IN = 'NOT IN';
    case BETWEEN = 'BETWEEN';
    case NOT_BETWEEN = 'NOT BETWEEN';
    case IS_NULL = 'IS NULL';
    case IS_NOT_NULL = 'IS NOT NULL';
}
