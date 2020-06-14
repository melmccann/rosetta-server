# melmccann\rosettaserverstubs\Api\BlockApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**block**](BlockApiInterface.md#block) | **POST** /block | Get a Block
[**blockTransaction**](BlockApiInterface.md#blockTransaction) | **POST** /block/transaction | Get a Block Transaction


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.block:
        class: Acme\MyBundle\Api\BlockApi
        tags:
            - { name: "open_api_server.api", api: "block" }
    # ...
```

## **block**
> melmccann\rosettaserverstubs\Model\BlockResponse block($blockRequest)

Get a Block

Get a block by its Block Identifier. If transactions are returned in the same call to the node as fetching the block, the response should include these transactions in the Block object. If not, an array of Transaction Identifiers should be returned so /block/transaction fetches can be done to get all transaction information.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BlockApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\Api\BlockApiInterface;

class BlockApi implements BlockApiInterface
{

    // ...

    /**
     * Implementation of BlockApiInterface#block
     */
    public function block(BlockRequest $blockRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockRequest** | [**melmccann\rosettaserverstubs\Model\BlockRequest**](../Model/BlockRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\Model\BlockResponse**](../Model/BlockResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **blockTransaction**
> melmccann\rosettaserverstubs\Model\BlockTransactionResponse blockTransaction($blockTransactionRequest)

Get a Block Transaction

Get a transaction in a block by its Transaction Identifier. This endpoint should only be used when querying a node for a block does not return all transactions contained within it.  All transactions returned by this endpoint must be appended to any transactions returned by the /block method by consumers of this data. Fetching a transaction by hash is considered an Explorer Method (which is classified under the Future Work section).  Calling this endpoint requires reference to a BlockIdentifier because transaction parsing can change depending on which block contains the transaction. For example, in Bitcoin it is necessary to know which block contains a transaction to determine the destination of fee payments. Without specifying a block identifier, the node would have to infer which block to use (which could change during a re-org).  Implementations that require fetching previous transactions to populate the response (ex: Previous UTXOs in Bitcoin) may find it useful to run a cache within the Rosetta server in the /data directory (on a path that does not conflict with the node).

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/BlockApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\Api\BlockApiInterface;

class BlockApi implements BlockApiInterface
{

    // ...

    /**
     * Implementation of BlockApiInterface#blockTransaction
     */
    public function blockTransaction(BlockTransactionRequest $blockTransactionRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **blockTransactionRequest** | [**melmccann\rosettaserverstubs\Model\BlockTransactionRequest**](../Model/BlockTransactionRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\Model\BlockTransactionResponse**](../Model/BlockTransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

