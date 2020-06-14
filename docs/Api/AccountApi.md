# melmccannosettaserverstubs\AccountApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBalance**](AccountApi.md#accountBalance) | **POST** /account/balance | Get an Account Balance



## accountBalance

> \melmccannosettaserverstubs\RosettaServerStubsModel\AccountBalanceResponse accountBalance($account_balance_request)

Get an Account Balance

Get an array of all Account Balances for an Account Identifier and the Block Identifier at which the balance lookup was performed.  Some consumers of account balance data need to know at which block the balance was calculated to reconcile account balance changes.  To get all balances associated with an account, it may be necessary to perform multiple balance requests with unique Account Identifiers.  If the client supports it, passing nil AccountIdentifier metadata to the request should fetch all balances (if applicable).  It is also possible to perform a historical balance lookup (if the server supports it) by passing in an optional BlockIdentifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccannosettaserverstubs\Api\AccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$account_balance_request = new \melmccannosettaserverstubs\RosettaServerStubsModel\AccountBalanceRequest(); // \melmccannosettaserverstubs\RosettaServerStubsModel\AccountBalanceRequest | 

try {
    $result = $apiInstance->accountBalance($account_balance_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AccountApi->accountBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **account_balance_request** | [**\melmccannosettaserverstubs\RosettaServerStubsModel\AccountBalanceRequest**](../Model/AccountBalanceRequest.md)|  |

### Return type

[**\melmccannosettaserverstubs\RosettaServerStubsModel\AccountBalanceResponse**](../Model/AccountBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

