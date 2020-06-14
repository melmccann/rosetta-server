# melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\MempoolApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mempool**](MempoolApiInterface.md#mempool) | **POST** /mempool | Get All Mempool Transactions
[**mempoolTransaction**](MempoolApiInterface.md#mempoolTransaction) | **POST** /mempool/transaction | Get a Mempool Transaction


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.mempool:
        class: Acme\MyBundle\Api\MempoolApi
        tags:
            - { name: "open_api_server.api", api: "mempool" }
    # ...
```

## **mempool**
> melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolResponse mempool($mempoolRequest)

Get All Mempool Transactions

Get all Transaction Identifiers in the mempool

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MempoolApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\MempoolApiInterface;

class MempoolApi implements MempoolApiInterface
{

    // ...

    /**
     * Implementation of MempoolApiInterface#mempool
     */
    public function mempool(MempoolRequest $mempoolRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mempoolRequest** | [**melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolRequest**](../Model/MempoolRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolResponse**](../Model/MempoolResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **mempoolTransaction**
> melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionResponse mempoolTransaction($mempoolTransactionRequest)

Get a Mempool Transaction

Get a transaction in the mempool by its Transaction Identifier. This is a separate request than fetching a block transaction (/block/transaction) because some blockchain nodes need to know that a transaction query is for something in the mempool instead of a transaction in a block.  Transactions may not be fully parsable until they are in a block (ex: may not be possible to determine the fee to pay before a transaction is executed). On this endpoint, it is ok that returned transactions are only estimates of what may actually be included in a block.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/MempoolApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\MempoolApiInterface;

class MempoolApi implements MempoolApiInterface
{

    // ...

    /**
     * Implementation of MempoolApiInterface#mempoolTransaction
     */
    public function mempoolTransaction(MempoolTransactionRequest $mempoolTransactionRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mempoolTransactionRequest** | [**melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionRequest**](../Model/MempoolTransactionRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\RosettaServerStubsModel\MempoolTransactionResponse**](../Model/MempoolTransactionResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

