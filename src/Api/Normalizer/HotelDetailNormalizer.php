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

class HotelDetailNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Concur\\Api\\Model\\HotelDetail';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Concur\\Api\\Model\\HotelDetail';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Concur\Api\Model\HotelDetail();
        if (property_exists($data, 'AverageDailyRoomRate')) {
            $object->setAverageDailyRoomRate($data->{'AverageDailyRoomRate'});
        }
        if (property_exists($data, 'CheckinDateTime')) {
            $object->setCheckinDateTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'CheckinDateTime'}));
        }
        if (property_exists($data, 'CheckoutDateTime')) {
            $object->setCheckoutDateTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'CheckoutDateTime'}));
        }
        if (property_exists($data, 'ConfirmationNumber')) {
            $object->setConfirmationNumber($data->{'ConfirmationNumber'});
        }
        if (property_exists($data, 'GNR')) {
            $object->setGNR($data->{'GNR'});
        }
        if (property_exists($data, 'LineItems')) {
            $object->setLineItems($this->denormalizer->denormalize($data->{'LineItems'}, 'Concur\\Api\\Model\\LineItem', 'json', $context));
        }
        if (property_exists($data, 'NumberInParty')) {
            $object->setNumberInParty($data->{'NumberInParty'});
        }
        if (property_exists($data, 'RatePlanType')) {
            $object->setRatePlanType($data->{'RatePlanType'});
        }
        if (property_exists($data, 'RoomNumber')) {
            $object->setRoomNumber($data->{'RoomNumber'});
        }
        if (property_exists($data, 'RoomType')) {
            $object->setRoomType($data->{'RoomType'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAverageDailyRoomRate()) {
            $data->{'AverageDailyRoomRate'} = $object->getAverageDailyRoomRate();
        }
        if (null !== $object->getCheckinDateTime()) {
            $data->{'CheckinDateTime'} = $object->getCheckinDateTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getCheckoutDateTime()) {
            $data->{'CheckoutDateTime'} = $object->getCheckoutDateTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getConfirmationNumber()) {
            $data->{'ConfirmationNumber'} = $object->getConfirmationNumber();
        }
        if (null !== $object->getGNR()) {
            $data->{'GNR'} = $object->getGNR();
        }
        if (null !== $object->getLineItems()) {
            $data->{'LineItems'} = $this->normalizer->normalize($object->getLineItems(), 'json', $context);
        }
        if (null !== $object->getNumberInParty()) {
            $data->{'NumberInParty'} = $object->getNumberInParty();
        }
        if (null !== $object->getRatePlanType()) {
            $data->{'RatePlanType'} = $object->getRatePlanType();
        }
        if (null !== $object->getRoomNumber()) {
            $data->{'RoomNumber'} = $object->getRoomNumber();
        }
        if (null !== $object->getRoomType()) {
            $data->{'RoomType'} = $object->getRoomType();
        }

        return $data;
    }
}
