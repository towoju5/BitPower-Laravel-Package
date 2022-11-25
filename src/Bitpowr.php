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
        $this->baseUrl  = "https://developers.bitpowr.com/api/v1/";
        $this->key      = getenv('BIT_POWR_TOKEN');
        $this->curl     = curl_init();
        $curl_options   = [
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 20,
            CURLOPT_TIMEOUT => 300
        ];

        curl_setopt_array($this->curl, $curl_options);
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
        return $this->run_curl("addresses", "GET", $data);
    }

    /**
     * @param string addressId : The uid of the address you want to get.
     */
    public function getAddressById($addressId)
    {
        return $this->run_curl("addresses/$addressId", "GET", []);
    }

    /**
     * @param string addressId : The addressId of the transaction you want to get.
     */
    public function getAddressTransactions($addressId)
    {
        return $this->run_curl("addresses/$addressId/transactions", "GET", []);
    }

    /**
     * @param string addressId : The addressId of the balance you want to get.
     */
    public function getAddressBalance($addressId)
    {
        return $this->run_curl("addresses/$addressId/balance", "GET", []);
    }

    /**
     * @param string Fait : Base currency.
     */
    public function getMarketPrice($fait="USD")
    {
        return $this->run_curl("market/price", "GET", []);
    }



    private function run_curl($endpoint, $method, array $data=[])
    {
        // run curl request
        $method = strtoupper($method);
        $curl_url = $this->baseUrl . $endpoint;
        // Set URL & Header
        $headers = array(
            "Authorization: Bearer $this->key",
            'accept: application/json',
            'content-type: application/x-www-form-urlencoded'
        );

        // make request
        curl_setopt($this->curl, CURLOPT_HTTPHEADER, $headers);

        // Set URL & Header
        curl_setopt($this->curl, CURLOPT_URL, $curl_url);

        //Add post vars
        if ($method == "POST") {
            curl_setopt($this->curl, CURLOPT_POST, 1);
            curl_setopt($this->curl, CURLOPT_POSTFIELDS, json_encode($data));
        }

        //Get result
        $result = curl_exec($this->curl);
        // var_dump($result); exit;
        if ($result === false)
            throw new \Exception('CURL error: ' . curl_error($this->curl));

        // decode results
        $result = json_decode($result, true);
        if (!is_array($result) || json_last_error())
            throw new \Exception('JSON decode error');

        return $result;
    }
}
