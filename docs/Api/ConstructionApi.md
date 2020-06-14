# melmccannosettaserverstubs\ConstructionApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**constructionMetadata**](ConstructionApi.md#constructionMetadata) | **POST** /construction/metadata | Get Transaction Construction Metadata
[**constructionSubmit**](ConstructionApi.md#constructionSubmit) | **POST** /construction/submit | Submit a Signed Transaction



## constructionMetadata

> \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataResponse constructionMetadata($construction_metadata_request)

Get Transaction Construction Metadata

Get any information required to construct a transaction for a specific network. Metadata returned here could be a recent hash to use, an account sequence number, or even arbitrary chain state. It is up to the client to correctly populate the options object with any network-specific details to ensure the correct metadata is retrieved.  It is important to clarify that this endpoint should not pre-construct any transactions for the client (this should happen in the SDK). This endpoint is left purposely unstructured because of the wide scope of metadata that could be required.  In a future version of the spec, we plan to pass an array of Rosetta Operations to specify which metadata should be received and to create a transaction in an accompanying SDK. This will help to insulate the client from chain-specific details that are currently required here.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccannosettaserverstubs\Api\ConstructionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$construction_metadata_request = new \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataRequest(); // \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataRequest | 

try {
    $result = $apiInstance->constructionMetadata($construction_metadata_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstructionApi->constructionMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **construction_metadata_request** | [**\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataRequest**](../Model/ConstructionMetadataRequest.md)|  |

### Return type

[**\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionMetadataResponse**](../Model/ConstructionMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)


## constructionSubmit

> \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitResponse constructionSubmit($construction_submit_request)

Submit a Signed Transaction

Submit a pre-signed transaction to the node. This call should not block on the transaction being included in a block. Rather, it should return immediately with an indication of whether or not the transaction was included in the mempool.  The transaction submission response should only return a 200 status if the submitted transaction could be included in the mempool. Otherwise, it should return an error.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


$apiInstance = new melmccannosettaserverstubs\Api\ConstructionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$construction_submit_request = new \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitRequest(); // \melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitRequest | 

try {
    $result = $apiInstance->constructionSubmit($construction_submit_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConstructionApi->constructionSubmit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters


Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **construction_submit_request** | [**\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitRequest**](../Model/ConstructionSubmitRequest.md)|  |

### Return type

[**\melmccannosettaserverstubs\RosettaServerStubsModel\ConstructionSubmitResponse**](../Model/ConstructionSubmitResponse.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: application/json
- **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints)
[[Back to Model list]](../../README.md#documentation-for-models)
[[Back to README]](../../README.md)

