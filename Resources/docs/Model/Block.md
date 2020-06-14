# Block

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**blockIdentifier** | [**OpenAPI\Server\Model\BlockIdentifier**](BlockIdentifier.md) |  | 
**parentBlockIdentifier** | [**OpenAPI\Server\Model\BlockIdentifier**](BlockIdentifier.md) |  | 
**timestamp** | **int** | The timestamp of the block in milliseconds since the Unix Epoch. The timestamp is stored in milliseconds because some blockchains produce blocks more often than once a second. | 
**transactions** | [**OpenAPI\Server\Model\Transaction**](Transaction.md) |  | 
**metadata** | [**array**](.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


