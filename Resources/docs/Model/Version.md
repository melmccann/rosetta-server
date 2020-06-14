# Version

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**rosettaVersion** | **string** | The rosetta_version is the version of the Rosetta interface the implementation adheres to. This can be useful for clients looking to reliably parse responses. | 
**nodeVersion** | **string** | The node_version is the canonical version of the node runtime. This can help clients manage deployments. | 
**middlewareVersion** | **string** | When a middleware server is used to adhere to the Rosetta interface, it should return its version here. This can help clients manage deployments. | [optional] 
**metadata** | [**array**](.md) | Any other information that may be useful about versioning of dependent services should be returned here. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


