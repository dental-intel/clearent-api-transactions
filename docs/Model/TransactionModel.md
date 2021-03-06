# # TransactionModel

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **string** | The transaction amount. | [optional]
**authorization_code** | **string** | The authorization code from card issuers. | [optional]
**avs_result_code** | [**\ClearentTransactionsApi\Model\AvsResultCode**](AvsResultCode.md) |  | [optional]
**avs_result_code_description** | **string** | The description for the AVS match. | [optional]
**avs_street** | **string** | The billing address street. | [optional]
**avs_zip** | **string** | The billing address ZIP code. | [optional]
**base_amount** | **string** | When there is no &#39;service-fee&#39;, then this is the same as &#39;original-amount&#39;. When there is a &#39;service-fee&#39;, then this is the &#39;original-amount&#39; minus the &#39;service-fee&#39; applied. | [optional]
**batch_string_id** | **string** | The string value of the batch ID. | [optional]
**billing** | [**\ClearentTransactionsApi\Model\Address**](Address.md) |  | [optional]
**billing_is_shipping** | [**\ClearentTransactionsApi\Model\BillingIsShipping**](BillingIsShipping.md) |  | [optional]
**card** | **string** | The last four digits of the credit card associated with this transaction. | [optional]
**card_type** | [**\ClearentTransactionsApi\Model\CardType**](CardType.md) |  | [optional]
**cash_back_amount** | **string** | The cash back amount when using EBT cash benefits. | [optional]
**check_field_duplicate** | **bool** | True if you send a &#39;check-field&#39; in the request and a duplicate transaction is found. | [optional]
**client_ip** | **string** | The client IP address. | [optional]
**comments** | **string** | The transaction comments. | [optional]
**contactless** | [**\ClearentTransactionsApi\Model\Contactless**](Contactless.md) |  | [optional]
**contactless_device** | [**\ClearentTransactionsApi\Model\ContactlessDevice**](ContactlessDevice.md) |  | [optional]
**created** | **string** | The datetime in UTC when the transaction was initiated. | [optional]
**csc** | **string** | The CSC. | [optional]
**csc_result_code** | [**\ClearentTransactionsApi\Model\CscResultCode**](CscResultCode.md) |  | [optional]
**csc_result_code_description** | **string** | The description for the CSC match. | [optional]
**customer_first_name** | **string** | The first name of the customer. | [optional]
**customer_id** | **string** | The customer ID. | [optional]
**customer_last_name** | **string** | The last name of the customer. | [optional]
**cvm** | [**\ClearentTransactionsApi\Model\Cvm**](Cvm.md) |  | [optional]
**description** | **string** | The transaction description. | [optional]
**display_message** | **string** | The displayable message about the transaction result. | [optional]
**ebt_additional_amounts** | [**\ClearentTransactionsApi\Model\EBTAdditionalAmount[]**](EBTAdditionalAmount.md) | When the transaction is an EBT it will contain additional amount information. | [optional]
**email_address** | **string** | The email address associated with the transaction. | [optional]
**emv** | [**\ClearentTransactionsApi\Model\EMV**](EMV.md) |  | [optional]
**emv_data** | **string** | The EMV data passed from the terminal. | [optional]
**emv_data_response** | **string** | The EMV response data from the card issuer. | [optional]
**emv_entry_method** | [**\ClearentTransactionsApi\Model\EmvEntryMethod**](EmvEntryMethod.md) |  | [optional]
**entry_method** | **string** | The method used to enter the transaction. | [optional]
**exp_date** | **string** | The expiration date of the credit card in MMYY format. | [optional]
**first_recurring_transaction** | **string** | True if it is the first recurring transaction on a plan. | [optional]
**id** | **string** | The ID of the transaction. | [optional]
**invoice** | **string** | The invoice number. | [optional]
**key_serial_number** | **string** | The serial number of the encrypted device. | [optional]
**last_four** | **string** | The last four digits of the credit card. | [optional]
**level3** | [**\ClearentTransactionsApi\Model\ClearentLevel3**](ClearentLevel3.md) |  | [optional]
**merchant_id** | **string** | The merchant ID of the transaction. | [optional]
**order_id** | **string** | The order ID of the transaction. | [optional]
**original_amount** | **string** | The original amount of the transaction prior to any modification. | [optional]
**partial_approved** | **bool** | True if partial authorization has been approved. | [optional]
**partial_authorization** | **bool** | True if you would like to check partial authorization. | [optional]
**pending** | [**\ClearentTransactionsApi\Model\Pending**](Pending.md) |  | [optional]
**plan_name** | **string** | The name of plan the transaction was ran under. | [optional]
**platform_fees** | [**\ClearentTransactionsApi\Model\PlatformFee[]**](PlatformFee.md) | True if the batch was settled. | [optional]
**purchase_order** | **string** | The transaction purchase order. | [optional]
**ref_id** | **string** | The reference ID of a related transaction. | [optional]
**result** | [**\ClearentTransactionsApi\Model\Result**](Result.md) |  | [optional]
**result_code** | **string** | The result code associated with transaction result. | [optional]
**sales_tax_amount** | **string** | The amount of the sales tax. | [optional]
**sales_tax_type** | [**\ClearentTransactionsApi\Model\SalesTaxType**](SalesTaxType.md) |  | [optional]
**server_id** | **string** |  | [optional]
**service_fee** | **string** | The service fee applied to the transaction. | [optional]
**settled** | [**\ClearentTransactionsApi\Model\Settled**](Settled.md) |  | [optional]
**shipping** | [**\ClearentTransactionsApi\Model\Address**](Address.md) |  | [optional]
**signature_base_64_image** | **string** | The signature from the EMV device. | [optional]
**software_type** | **string** | The reference to the software name you are building. | [optional]
**software_type_version** | **string** | Optional field to help with troubleshooting. | [optional]
**status** | **string** | The status of the transaction. | [optional]
**surcharge_applied** | **bool** | True if you send a &#39;surcharge&#39; in the request and the system determines it will be used. | [optional]
**terminal_id** | **string** | The terminal ID of the transaction. | [optional]
**tip_adjusted** | **string** | True if the tip was adjusted. | [optional]
**tip_adjusted_amount** | **string** | The amount of the new tip after a tip adjust. | [optional]
**tip_amount** | **string** | The tip amount for the transaction. | [optional]
**token_description** | **string** | The description of the token. | [optional]
**type** | [**\ClearentTransactionsApi\Model\Type**](Type.md) |  | [optional]
**voided** | [**\ClearentTransactionsApi\Model\Voided**](Voided.md) |  | [optional]
**voided_auth** | [**\ClearentTransactionsApi\Model\VoidedAuth**](VoidedAuth.md) |  | [optional]
**voucher_approval_code** | **string** |  | [optional]
**voucher_serial_number** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
