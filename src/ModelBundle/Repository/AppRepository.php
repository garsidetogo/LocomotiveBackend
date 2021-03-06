<?php

namespace ModelBundle\Repository;

use Doctrine\ODM\MongoDB\DocumentRepository;

/**
 * AppRepository
 *
 * This class was generated by the Doctrine ODM. Add your own custom
 * repository methods below.
 */
class AppRepository extends DocumentRepository
{
    /**
     * @return mixed
     */
    public function findAllOrderedByName()
    {
        return $this->createQueryBuilder()
            ->sort('name', 'ASC')
            ->getQuery()
            ->execute();
    }

    /**
     * @param int $appId
     * @return mixed
     */
    public function findOneByAppId($appId)
    {
        return $this->createQueryBuilder()->field("appId")->equals($appId)->getQuery()->getSingleResult();
    }
}
