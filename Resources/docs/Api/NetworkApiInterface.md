# melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\NetworkApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**networkList**](NetworkApiInterface.md#networkList) | **POST** /network/list | Get List of Available Networks
[**networkOptions**](NetworkApiInterface.md#networkOptions) | **POST** /network/options | Get Network Options
[**networkStatus**](NetworkApiInterface.md#networkStatus) | **POST** /network/status | Get Network Status


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.network:
        class: Acme\MyBundle\Api\NetworkApi
        tags:
            - { name: "open_api_server.api", api: "network" }
    # ...
```

## **networkList**
> melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkListResponse networkList($metadataRequest)

Get List of Available Networks

This endpoint returns a list of NetworkIdentifiers that the Rosetta server can handle.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/NetworkApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\NetworkApiInterface;

class NetworkApi implements NetworkApiInterface
{

    // ...

    /**
     * Implementation of NetworkApiInterface#networkList
     */
    public function networkList(MetadataRequest $metadataRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **metadataRequest** | [**melmccann\rosettaserverstubs\RosettaServerStubsModel\MetadataRequest**](../Model/MetadataRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkListResponse**](../Model/NetworkListResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **networkOptions**
> melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkOptionsResponse networkOptions($networkRequest)

Get Network Options

This endpoint returns the version information and allowed network-specific types for a NetworkIdentifier. Any NetworkIdentifier returned by /network/list should be accessible here.  Because options are retrievable in the context of a NetworkIdentifier, it is possible to define unique options for each network.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/NetworkApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\NetworkApiInterface;

class NetworkApi implements NetworkApiInterface
{

    // ...

    /**
     * Implementation of NetworkApiInterface#networkOptions
     */
    public function networkOptions(NetworkRequest $networkRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **networkRequest** | [**melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkRequest**](../Model/NetworkRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkOptionsResponse**](../Model/NetworkOptionsResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

## **networkStatus**
> melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkStatusResponse networkStatus($networkRequest)

Get Network Status

This endpoint returns the current status of the network requested. Any NetworkIdentifier returned by /network/list should be accessible here.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/NetworkApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\NetworkApiInterface;

class NetworkApi implements NetworkApiInterface
{

    // ...

    /**
     * Implementation of NetworkApiInterface#networkStatus
     */
    public function networkStatus(NetworkRequest $networkRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **networkRequest** | [**melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkRequest**](../Model/NetworkRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\RosettaServerStubsModel\NetworkStatusResponse**](../Model/NetworkStatusResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

