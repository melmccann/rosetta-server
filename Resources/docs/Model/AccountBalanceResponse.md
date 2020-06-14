# AccountBalanceResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blockIdentifier** | [**OpenAPI\Server\Model\BlockIdentifier**](BlockIdentifier.md) |  | 
**balances** | [**OpenAPI\Server\Model\Amount**](Amount.md) | A single account may have a balance in multiple currencies. | 
**metadata** | [**array**](.md) | Account-based blockchains that utilize a nonce or sequence number should include that number in the metadata. This number could be unique to the identifier or global across the account address. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


