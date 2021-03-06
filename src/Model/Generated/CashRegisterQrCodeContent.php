<?php
namespace bunq\Model\Generated;

use bunq\Context\ApiContext;
use bunq\Http\ApiClient;
use bunq\Http\BunqResponse;
use bunq\Model\BunqModel;

/**
 * Show the raw contents of a QR code. First you need to created a QR code
 * using ../cash-register/{id}/qr-code.
 *
 * @generated
 */
class CashRegisterQrCodeContent extends BunqModel
{
    /**
     * Endpoint constants.
     */
    const ENDPOINT_URL_LISTING = 'user/%s/monetary-account/%s/cash-register/%s/qr-code/%s/content';

    /**
     * Object type.
     */
    const OBJECT_TYPE = 'CashRegisterQrCodeContent';

    /**
     * Show the raw contents of a QR code
     *
     * This method is called "listing" because "list" is a restricted PHP word
     * and cannot be used as constants, class names, function or method names.
     *
     * @param ApiContext $apiContext
     * @param int $userId
     * @param int $monetaryAccountId
     * @param int $cashRegisterId
     * @param int $qrCodeId
     * @param string[] $customHeaders
     *
     * @return BunqResponse<string>
     */
    public static function listing(ApiContext $apiContext, $userId, $monetaryAccountId, $cashRegisterId, $qrCodeId, array $customHeaders = [])
    {
        $apiClient = new ApiClient($apiContext);
        $responseRaw = $apiClient->get(
            vsprintf(
                self::ENDPOINT_URL_LISTING,
                [$userId, $monetaryAccountId, $cashRegisterId, $qrCodeId]
            ),
            [],
            $customHeaders
        );

        return new BunqResponse($responseRaw->getBodyString(), $responseRaw->getHeaders());
    }
}
