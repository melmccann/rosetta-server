# melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\AccountApiInterface

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountBalance**](AccountApiInterface.md#accountBalance) | **POST** /account/balance | Get an Account Balance


## Service Declaration
```yaml
# src/Acme/MyBundle/Resources/services.yml
services:
    # ...
    acme.my_bundle.api.account:
        class: Acme\MyBundle\Api\AccountApi
        tags:
            - { name: "open_api_server.api", api: "account" }
    # ...
```

## **accountBalance**
> melmccann\rosettaserverstubs\RosettaServerStubsModel\AccountBalanceResponse accountBalance($accountBalanceRequest)

Get an Account Balance

Get an array of all Account Balances for an Account Identifier and the Block Identifier at which the balance lookup was performed.  Some consumers of account balance data need to know at which block the balance was calculated to reconcile account balance changes.  To get all balances associated with an account, it may be necessary to perform multiple balance requests with unique Account Identifiers.  If the client supports it, passing nil AccountIdentifier metadata to the request should fetch all balances (if applicable).  It is also possible to perform a historical balance lookup (if the server supports it) by passing in an optional BlockIdentifier.

### Example Implementation
```php
<?php
// src/Acme/MyBundle/Api/AccountApiInterface.php

namespace Acme\MyBundle\Api;

use melmccann\rosettaserverstubs\melmccann\rosetta-server-stubs\AccountApiInterface;

class AccountApi implements AccountApiInterface
{

    // ...

    /**
     * Implementation of AccountApiInterface#accountBalance
     */
    public function accountBalance(AccountBalanceRequest $accountBalanceRequest)
    {
        // Implement the operation ...
    }

    // ...
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accountBalanceRequest** | [**melmccann\rosettaserverstubs\RosettaServerStubsModel\AccountBalanceRequest**](../Model/AccountBalanceRequest.md)|  |

### Return type

[**melmccann\rosettaserverstubs\RosettaServerStubsModel\AccountBalanceResponse**](../Model/AccountBalanceResponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

