<?php

namespace AppBundle\Repository;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllSorted()
	{
		return $this->getEntityManager()->createQuery('SELECT c FROM AppBundle:Client c
		ORDER BY c.name ASC ')->getResult();
	}
}
