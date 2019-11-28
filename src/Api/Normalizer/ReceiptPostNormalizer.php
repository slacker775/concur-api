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

class ReceiptPostNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Concur\\Api\\Model\\ReceiptPost';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Concur\\Api\\Model\\ReceiptPost';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        $object = new \Concur\Api\Model\ReceiptPost();
        if (property_exists($data, 'Amount')) {
            $object->setAmount($data->{'Amount'});
        }
        if (property_exists($data, 'CurrencyCode')) {
            $object->setCurrencyCode($data->{'CurrencyCode'});
        }
        if (property_exists($data, 'CustomFields')) {
            $object->setCustomFields($this->denormalizer->denormalize($data->{'CustomFields'}, 'Concur\\Api\\Model\\ReceiptCustomField', 'json', $context));
        }
        if (property_exists($data, 'FormofPaymentCode')) {
            $object->setFormofPaymentCode($data->{'FormofPaymentCode'});
        }
        if (property_exists($data, 'GeneralDetail')) {
            $object->setGeneralDetail($this->denormalizer->denormalize($data->{'GeneralDetail'}, 'Concur\\Api\\Model\\GeneralDetail', 'json', $context));
        }
        if (property_exists($data, 'HotelDetail')) {
            $object->setHotelDetail($this->denormalizer->denormalize($data->{'HotelDetail'}, 'Concur\\Api\\Model\\HotelDetail', 'json', $context));
        }
        if (property_exists($data, 'ImageBase64')) {
            $object->setImageBase64($data->{'ImageBase64'});
        }
        if (property_exists($data, 'MatchingFact')) {
            $object->setMatchingFact($this->denormalizer->denormalize($data->{'MatchingFact'}, 'Concur\\Api\\Model\\MatchingFact', 'json', $context));
        }
        if (property_exists($data, 'Merchant')) {
            $object->setMerchant($this->denormalizer->denormalize($data->{'Merchant'}, 'Concur\\Api\\Model\\Merchant', 'json', $context));
        }
        if (property_exists($data, 'PaymentCard')) {
            $object->setPaymentCard($this->denormalizer->denormalize($data->{'PaymentCard'}, 'Concur\\Api\\Model\\PaymentCard', 'json', $context));
        }
        if (property_exists($data, 'RideDetail')) {
            $object->setRideDetail($this->denormalizer->denormalize($data->{'RideDetail'}, 'Concur\\Api\\Model\\RideDetail', 'json', $context));
        }
        if (property_exists($data, 'TransactionDateTime')) {
            $object->setTransactionDateTime(\DateTime::createFromFormat("Y-m-d\TH:i:sP", $data->{'TransactionDateTime'}));
        }
        if (property_exists($data, 'Type')) {
            $object->setType($data->{'Type'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getAmount()) {
            $data->{'Amount'} = $object->getAmount();
        }
        if (null !== $object->getCurrencyCode()) {
            $data->{'CurrencyCode'} = $object->getCurrencyCode();
        }
        if (null !== $object->getCustomFields()) {
            $data->{'CustomFields'} = $this->normalizer->normalize($object->getCustomFields(), 'json', $context);
        }
        if (null !== $object->getFormofPaymentCode()) {
            $data->{'FormofPaymentCode'} = $object->getFormofPaymentCode();
        }
        if (null !== $object->getGeneralDetail()) {
            $data->{'GeneralDetail'} = $this->normalizer->normalize($object->getGeneralDetail(), 'json', $context);
        }
        if (null !== $object->getHotelDetail()) {
            $data->{'HotelDetail'} = $this->normalizer->normalize($object->getHotelDetail(), 'json', $context);
        }
        if (null !== $object->getImageBase64()) {
            $data->{'ImageBase64'} = $object->getImageBase64();
        }
        if (null !== $object->getMatchingFact()) {
            $data->{'MatchingFact'} = $this->normalizer->normalize($object->getMatchingFact(), 'json', $context);
        }
        if (null !== $object->getMerchant()) {
            $data->{'Merchant'} = $this->normalizer->normalize($object->getMerchant(), 'json', $context);
        }
        if (null !== $object->getPaymentCard()) {
            $data->{'PaymentCard'} = $this->normalizer->normalize($object->getPaymentCard(), 'json', $context);
        }
        if (null !== $object->getRideDetail()) {
            $data->{'RideDetail'} = $this->normalizer->normalize($object->getRideDetail(), 'json', $context);
        }
        if (null !== $object->getTransactionDateTime()) {
            $data->{'TransactionDateTime'} = $object->getTransactionDateTime()->format("Y-m-d\TH:i:sP");
        }
        if (null !== $object->getType()) {
            $data->{'Type'} = $object->getType();
        }

        return $data;
    }
}
