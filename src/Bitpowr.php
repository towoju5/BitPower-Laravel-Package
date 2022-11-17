<?php
/**
 * @author Towoju5
 * @author url https://towoju.com.ng
 * @orginazation Woju Technologies
 */


namespace Towoju5\Bitpowr;

class Bitpowr
{
    public function __construct()
    {
        $this->baseUrl = "https://developers.bitpowr.com/api/v1/";
    }

    /**
     * This endpoints allows you to create a whitelist address
     * @param array accountId =>   "50ec9b81-ad6c-4db2-98b8-e88025ceabf8"
     */
    public function createWhitelistAddress($data)
    {
        return $this->run_curl("addresses/whitelist", "POST", $data);
    }

    /**
     * @param array data [
     *      @param string label required
     *      @param string asset required
     *      @param string accountId required
     *      @param string addressType
     * ]
     */
    public function createAddress(array $data)
    {
        return $this->run_curl("addresses", "POST", $data);
    }

    /**
     * This endpoint generates a list of all created address for a sub account
     * @param array data [
     *      @param string assetId :The assetId of the addresses you want to get.
     *      @param string accountId : The accountId of the addresses you want to get.
     *      @param string subAccountId : The subAccountId of the addresses you want to get.
     * ]
     */
    public function getAddress($data)
    {
        return $this->run_curl("addresses", "GET", array $data);
    }

    /**
     * @param string addressId : The uid of the address you want to get.
     */
    public function getAddressById($addressId)
    {
        return $this->run_curl("addresses/$addressId", "GET", NULL);
    }

    /**
     * @param string addressId : The addressId of the transaction you want to get.
     */
    public function getAddressTransactions($addressId)
    {
        return $this->run_curl("addresses/$addressId/transactions", "GET", NULL);
    }

    /**
     * @param string addressId : The addressId of the balance you want to get.
     */
    public function getAddressBalance($addressId)
    {
        return $this->run_curl("addresses/$addressId/balance", "GET", NULL);
    }
}
