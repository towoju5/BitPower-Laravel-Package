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
     *      @param string label
     *      @param string asset
     *      @param string accountId
     *      @param string addressType
     * ]
     */
    public function createAddress(array $data)
    {
        return $this->run_curl("addresses", "POST", $data);
    }

    /**
     * This endpoint generates a list of all created address for a sub account
     */
    public function getAddress($data)
    {
        return $this->run_curl("addresses", "GET", $data);
    }

    public function getAddressById($data)
    {
        return $this->run_curl("addresses", "GET", $data);
    }

    public function getAddressTransactions()
    {
        return $this->run_curl("addresses", "GET", $data);
    }

    public function getAddressBalance()
    {
        return $this->run_curl("addresses", "GET", $data);
    }
}
