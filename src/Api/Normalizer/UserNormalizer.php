<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Concur\Api\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class UserNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Concur\\Api\\Model\\User';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Concur\\Api\\Model\\User';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Concur\Api\Model\User();
        if (property_exists($data, 'Active')) {
            $object->setActive($data->{'Active'});
        }
        if (property_exists($data, 'CellPhoneNumber')) {
            $object->setCellPhoneNumber($data->{'CellPhoneNumber'});
        }
        if (property_exists($data, 'EmployeeID')) {
            $object->setEmployeeID($data->{'EmployeeID'});
        }
        if (property_exists($data, 'FirstName')) {
            $object->setFirstName($data->{'FirstName'});
        }
        if (property_exists($data, 'ID')) {
            $object->setID($data->{'ID'});
        }
        if (property_exists($data, 'LastName')) {
            $object->setLastName($data->{'LastName'});
        }
        if (property_exists($data, 'LoginID')) {
            $object->setLoginID($data->{'LoginID'});
        }
        if (property_exists($data, 'MiddleName')) {
            $object->setMiddleName($data->{'MiddleName'});
        }
        if (property_exists($data, 'OrganizationUnit')) {
            $object->setOrganizationUnit($data->{'OrganizationUnit'});
        }
        if (property_exists($data, 'PrimaryEmail')) {
            $object->setPrimaryEmail($data->{'PrimaryEmail'});
        }
        if (property_exists($data, 'URI')) {
            $object->setURI($data->{'URI'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getActive()) {
            $data->{'Active'} = $object->getActive();
        }
        $data->{'CellPhoneNumber'} = $object->getCellPhoneNumber();
        $data->{'EmployeeID'} = $object->getEmployeeID();
        $data->{'FirstName'} = $object->getFirstName();
        $data->{'ID'} = $object->getID();
        $data->{'LastName'} = $object->getLastName();
        $data->{'LoginID'} = $object->getLoginID();
        $data->{'MiddleName'} = $object->getMiddleName();
        $data->{'OrganizationUnit'} = $object->getOrganizationUnit();
        $data->{'PrimaryEmail'} = $object->getPrimaryEmail();
        $data->{'URI'} = $object->getURI();

        return $data;
    }
}
