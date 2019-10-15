<?php
declare(strict_types=1);

namespace LoyaltyCorp\CoreBundle\Pagination;

use Symfony\Component\Serializer\Annotation\Groups;

interface CustomPaginatorInterface
{
    /** @var string */
    public const OPERATION_NAME = 'get';

    /** @var string */
    public const OPERATION_TYPE = 'collection';

    /** @var string */
    public const SERIALIZER_GROUP = 'resource:pagination';

    /**
     * Returns paginated items.
     *
     * @return mixed[]
     *
     * @Groups({CustomPaginatorInterface::SERIALIZER_GROUP})
     */
    public function getItems(): array;

    /**
     * Returns pagination data.
     *
     * @return mixed[]
     *
     * @Groups({CustomPaginatorInterface::SERIALIZER_GROUP})
     */
    public function getPagination(): array;
}
