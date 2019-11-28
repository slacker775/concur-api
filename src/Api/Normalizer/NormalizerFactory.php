<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Concur\Api\Normalizer;

class NormalizerFactory
{
    public static function create()
    {
        $normalizers = [];
        $normalizers[] = new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer();
        $normalizers[] = new CreateResponseNormalizer();
        $normalizers[] = new GeneralDetailNormalizer();
        $normalizers[] = new CustomFieldNormalizer();
        $normalizers[] = new EntryCollectionNormalizer();
        $normalizers[] = new EntryGetNormalizer();
        $normalizers[] = new EntryPostNormalizer();
        $normalizers[] = new EntryPutNormalizer();
        $normalizers[] = new JourneyNormalizer();
        $normalizers[] = new ReportCollectionNormalizer();
        $normalizers[] = new ReportGetNormalizer();
        $normalizers[] = new ReportPostNormalizer();
        $normalizers[] = new ReportPutNormalizer();
        $normalizers[] = new ListItemGetNormalizer();
        $normalizers[] = new ListItemGetCollectionNormalizer();
        $normalizers[] = new ListItemPostNormalizer();
        $normalizers[] = new ListItemPutNormalizer();
        $normalizers[] = new ListGetNormalizer();
        $normalizers[] = new ListGetCollectionNormalizer();
        $normalizers[] = new ListPostNormalizer();
        $normalizers[] = new UserNormalizer();
        $normalizers[] = new UserCollectionNormalizer();
        $normalizers[] = new HotelDetailNormalizer();
        $normalizers[] = new LineItemNormalizer();
        $normalizers[] = new LocationNormalizer();
        $normalizers[] = new MatchingFactNormalizer();
        $normalizers[] = new MerchantNormalizer();
        $normalizers[] = new PaymentCardNormalizer();
        $normalizers[] = new ReceiptCustomFieldNormalizer();
        $normalizers[] = new ReceiptImageNormalizer();
        $normalizers[] = new ReceiptImageCollectionNormalizer();
        $normalizers[] = new ReceiptPostNormalizer();
        $normalizers[] = new RideDetailNormalizer();

        return $normalizers;
    }
}
