# melmccann\rosettaserverstubs\Api\ConstructionApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**constructionMetadata**](ConstructionApiInterface.md#constructionMetadata) | **POST** /construction/metadata | Get Transaction Construction Metadata
[**constructionSubmit**](ConstructionApiInterface.md#constructionSubmit) | **POST** /construction/submit | Submit a Signed Transaction


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.construction:
        class: Acme\MyBundle\Api\ConstructionApi
        tags:
            - { name: "open_api_server.api", api: "construction" }
    # ...
```

## **constructionMetadata**
> melmccann\rosettaserverstubs\Model\ConstructionMetadataResponse constructionMetadata($constructionMetadataRequest)

Get Transaction Construction Metadata

Get any information required to construct a transaction for a specific network. Metadata returned here could be a recent hash to use, an account sequence number, or even arbitrary chain state. It is up to the client to correctly populate the options object with any network-specific details to ensure the correct metadata is retrieved.  It is important to clarify that this endpoint should not pre-construct any transactions for the client (this should happen in the SDK). This endpoint is left purposely unstructured because of the wide scope of metadata that could be required.  In a future version of the spec, we plan to pass an array of Rosetta Operations to specify which metadata should be received and to create a transaction in an accompanying SDK. This will help to insulate the client from chain-specific details that are currently required here.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ConstructionApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\Api\ConstructionApiInterface;

class ConstructionApi implements ConstructionApiInterface
{

    // ...

    /**
     * Implementation of ConstructionApiInterface#constructionMetadata
     */
    public function constructionMetadata(ConstructionMetadataRequest $constructionMetadataRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constructionMetadataRequest** | [**melmccann\rosettaserverstubs\Model\ConstructionMetadataRequest**](../Model/ConstructionMetadataRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\Model\ConstructionMetadataResponse**](../Model/ConstructionMetadataResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **constructionSubmit**
> melmccann\rosettaserverstubs\Model\ConstructionSubmitResponse constructionSubmit($constructionSubmitRequest)

Submit a Signed Transaction

Submit a pre-signed transaction to the node. This call should not block on the transaction being included in a block. Rather, it should return immediately with an indication of whether or not the transaction was included in the mempool.  The transaction submission response should only return a 200 status if the submitted transaction could be included in the mempool. Otherwise, it should return an error.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/ConstructionApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\Api\ConstructionApiInterface;

class ConstructionApi implements ConstructionApiInterface
{

    // ...

    /**
     * Implementation of ConstructionApiInterface#constructionSubmit
     */
    public function constructionSubmit(ConstructionSubmitRequest $constructionSubmitRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **constructionSubmitRequest** | [**melmccann\rosettaserverstubs\Model\ConstructionSubmitRequest**](../Model/ConstructionSubmitRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\Model\ConstructionSubmitResponse**](../Model/ConstructionSubmitResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

