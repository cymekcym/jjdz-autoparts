<?xml version="1.0" encoding="UTF-8"?><definitions name="AllegroWebApi"
 xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/"
 xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/"
 xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
 xmlns:xsd="http://www.w3.org/2001/XMLSchema"
 xmlns:typens="urn:AllegroWebApi"
 xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/"
 xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/"
 xmlns="http://schemas.xmlsoap.org/wsdl/"
 targetNamespace="urn:AllegroWebApi">
<types>
<xsd:schema xmlns="http://www.w3.org/2001/XMLSchema" targetNamespace="urn:AllegroWebApi"><import namespace="http://schemas.xmlsoap.org/soap/encoding/"/><xsd:complexType name="ActionDataStruct"><xsd:all><xsd:element name="action-key" type="xsd:string"/>
<xsd:element name="action-value" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="AddressInfoStruct"><xsd:all><xsd:element name="address-type" type="xsd:int"/>
<xsd:element name="address-user-data" type="typens:AddressUserDataStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="AddressUserDataStruct"><xsd:all><xsd:element name="user-company" type="xsd:string"/>
<xsd:element name="user-full-name" type="xsd:string"/>
<xsd:element name="user-address" type="xsd:string"/>
<xsd:element name="user-postcode" type="xsd:string"/>
<xsd:element name="user-city" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="AddressesInfoStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:AddressInfoStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="AlcoholDataStruct"><xsd:all><xsd:element name="alcohol-opening-date" type="xsd:string"/>
<xsd:element name="alcohol-expiration-date" type="xsd:string"/>
<xsd:element name="alcohol-shop-name" type="xsd:string"/>
<xsd:element name="alcohol-shop-address" type="xsd:string"/>
<xsd:element name="alcohol-shop-postcode" type="xsd:string"/>
<xsd:element name="alcohol-shop-city" type="xsd:string"/>
<xsd:element name="alcohol-shop-commune" type="xsd:string"/>
<xsd:element name="alcohol-shop-country-id" type="xsd:int"/>
<xsd:element name="alcohol-shop-state-id" type="xsd:int"/>
<xsd:element name="alcohol-permit-number" type="xsd:string"/>
<xsd:element name="alcohol-permit-authority" type="xsd:string"/>
<xsd:element name="alcohol-permit-info" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="AmountStruct"><xsd:all><xsd:element name="amount-value" type="xsd:float"/>
<xsd:element name="amount-currency-sign" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ArrayOfActionDataStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ActionDataStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfAttribStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:AttribStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfAttribValues"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfAuctionID"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:long[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfBankAccounts"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfBidItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:BidItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfBidList2"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:BidListStruct2[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfBilling"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:BillingDataType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfBlackListResStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:BlackListResStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfBlackListStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:BlackListStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfBuyerId"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:long[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfCancelBidsID"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:int[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfCategoryData"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:CategoryData[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfCats"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:CatInfoType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfCountries"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:CountryInfoType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfDealsStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:DealsStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFavouritesCategories"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FavouritesCategoriesStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFavouritesSellers"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FavouritesSellersStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFeedbackList"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FeedbackList[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFeedbackManyStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FeedbackManyStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFeedbacksResult"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FeedbackResultStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFieldsId"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:int[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFieldsValue"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FieldsValue[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFilterOptionsType"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FilterOptionsType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFilterValueType"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FilterValueType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFiltersListType"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FiltersListType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFinishFailureStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FinishFailureStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFinishItemsStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FinishItemsStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFinishSuccessStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:long[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfFutureItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:FutureItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemCatList"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemCatList[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemGetImage"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemGetImage[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemImageList"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemImageList[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemImagesStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemImagesStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemPriceStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemPriceStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemReminderStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemReminderStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemRemoveWatchStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemRemoveWatchStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemSurchargeStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemSurchargeStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemTemplateListStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemTemplateListStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemVariantAttributeStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemVariantAttributeStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemVariantStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemVariantStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemsAdded"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:long[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemsID"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:long[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemsNotAddedStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemsNotAddedStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfItemsPostBuyData"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemPostBuyDataStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfLocalIds"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:int[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfMyAccountList2"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:MyAccountStruct2[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfMyContactList"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:MyContactList[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfMyFeedbackList2"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:MyFeedbackListStruct2[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfNewPostBuyFormSellerStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:NewPostBuyFormSellerStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfNotSoldItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:NotSoldItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfNotWonItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:NotWonItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPackageIds"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPackageInfoStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PackageInfoStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPaymentDetailsStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PaymentDetailsStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPaymentItemsStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PaymentItemsStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPaymentMethodStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PaymentMethodStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPaymentSellersStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PaymentSellersStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPostBuyFormDataStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PostBuyFormDataStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPostBuyFormForBuyersDataStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PostBuyFormForBuyersDataStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPostBuyFormItemDealsStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PostBuyFormItemDealsStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPostBuyFormItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PostBuyFormItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPostBuyFormSellersStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PostBuyFormSellersStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPostBuyFormShipmentTrackingStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PostBuyFormShipmentTrackingStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPostBuyFormSurcharges"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:long[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPostBuyItemInfoStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PostBuyItemInfoStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfPostageStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:PostageStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfProductImagesList"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfProductParameterValues"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfProductParametersGroupStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ProductParametersGroupStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfProductParametersStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ProductParametersStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfRefundListType"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:RefundListType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfRefundsDealsListType"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:RefundsDealsListType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfRelatedItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:RelatedItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfRelationAnd"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfRelationExclude"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfRelationOr"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellForms"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellFormType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellRatingAveragePerMonth"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellRatingAveragePerMonthStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellRatingAverageStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellRatingAverageStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellRatingDetailStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellRatingDetailStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellRatingEstimationStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellRatingEstimationStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellRatingInfoStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellRatingInfoStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellRatingReasonStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellRatingReasonStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellRatingReasonSumStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellRatingReasonSumStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellRatingStatsStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellRatingStatsStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSellerShipmentDataStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SellerShipmentDataStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfShipmentDataStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ShipmentDataStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfShipmentIds"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:long[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfShipmentPaymentInfoStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ShipmentPaymentInfoStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfShipmentPriceTypeStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ShipmentPriceTypeStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfShopsTagTypeStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ShopsTagTypeStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSiteJournalDealsStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SiteJournalDealsStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSoldItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SoldItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfStateInfoStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:StateInfoStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfString"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfStructItemInfoList"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemInfoStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfStructSellAgain"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:StructSellAgain[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfStructSellFailed"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:StructSellFailed[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfSysStatus"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SysStatusType[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfTagNameStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:TagNameStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfTemplatesID"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:int[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfTransactionsID"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:long[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfUserBlackListAddResultStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:UserBlackListAddResultStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfUserBlackListStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:UserBlackListStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfUserIncomingPaymentRefundsStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:UserIncomingPaymentRefundsStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfUserIncomingPaymentStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:UserIncomingPaymentStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfUserPaymentRefundsStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:UserPaymentRefundsStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfUserPaymentStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:UserPaymentStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfUserPayoutStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:UserPayoutStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfUsersID"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:long[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfUsersPostBuyData"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:UserPostBuyDataStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfVariantQuantityStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:VariantQuantityStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfVariantStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:VariantStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfWaitFeedbackStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:WaitFeedbackStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfWatchItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:WatchItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfWatchedItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:WatchedItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ArrayOfWonItemStruct"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:WonItemStruct[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="AttribStruct"><xsd:all><xsd:element name="attrib-name" type="xsd:string"/>
<xsd:element name="attrib-values" type="typens:ArrayOfAttribValues"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="BidItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail-url" type="xsd:string"/>
<xsd:element name="item-price" type="typens:ArrayOfItemPriceStruct"/>
<xsd:element name="item-bid-quantity" type="xsd:int"/>
<xsd:element name="item-left-quantity" type="xsd:int"/>
<xsd:element name="item-quantity-type" type="xsd:int"/>
<xsd:element name="item-end-time" type="xsd:long"/>
<xsd:element name="item-end-time-left" type="xsd:string"/>
<xsd:element name="item-seller" type="typens:UserInfoStruct"/>
<xsd:element name="item-bidders-counter" type="xsd:int"/>
<xsd:element name="item-highest-bidder" type="typens:UserInfoStruct"/>
<xsd:element name="item-category-id" type="xsd:int"/>
<xsd:element name="item-views-counter" type="xsd:int"/>
<xsd:element name="item-note" type="xsd:string"/>
<xsd:element name="item-special-info" type="xsd:int"/>
<xsd:element name="item-shop-info" type="xsd:int"/>
<xsd:element name="item-product-info" type="xsd:long"/>
<xsd:element name="item-payu-info" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="BidList2"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="BidListStruct2"><xsd:all><xsd:element name="bids-array" type="typens:BidList2"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="BillingDataType"><xsd:all><xsd:element name="billing-id" type="xsd:int"/>
<xsd:element name="billing-type" type="xsd:string"/>
<xsd:element name="billing-fixperc" type="xsd:string"/>
<xsd:element name="billing-name" type="xsd:string"/>
<xsd:element name="billing-range-from" type="xsd:string"/>
<xsd:element name="billing-range-to" type="xsd:string"/>
<xsd:element name="billing-cat" type="xsd:string"/>
<xsd:element name="billing-rate" type="xsd:string"/>
<xsd:element name="billing-auction-type" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="BlackListResStruct"><xsd:all><xsd:element name="user-id" type="xsd:long"/>
<xsd:element name="result" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="BlackListStruct"><xsd:all><xsd:element name="user-id" type="xsd:long"/>
<xsd:element name="user-login" type="xsd:string"/>
<xsd:element name="user-rating" type="xsd:int"/>
<xsd:element name="user-country" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="CatInfoType"><xsd:all><xsd:element name="cat-id" type="xsd:int"/>
<xsd:element name="cat-name" type="xsd:string"/>
<xsd:element name="cat-parent" type="xsd:int"/>
<xsd:element name="cat-position" type="xsd:int"/>
<xsd:element name="cat-is-product-catalogue-enabled" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="CategoryData"><xsd:all><xsd:element name="cat-id" type="xsd:int"/>
<xsd:element name="cat-parent" type="xsd:int"/>
<xsd:element name="cat-country" type="xsd:int"/>
<xsd:element name="cat-level" type="xsd:int"/>
<xsd:element name="cat-is-leaf" type="xsd:int"/>
<xsd:element name="cat-name" type="xsd:string"/>
<xsd:element name="cat-options" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ChangedItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-fields" type="typens:ArrayOfFieldsValue"/>
<xsd:element name="item-surcharge" type="typens:ArrayOfItemSurchargeStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="CompanyExtraDataStruct"><xsd:all><xsd:element name="company-type" type="xsd:string"/>
<xsd:element name="company-nip" type="xsd:string"/>
<xsd:element name="company-regon" type="xsd:string"/>
<xsd:element name="company-krs" type="xsd:string"/>
<xsd:element name="company-activity-sort" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="CompanyInfoStruct"><xsd:all><xsd:element name="company-first-name" type="xsd:string"/>
<xsd:element name="company-last-name" type="xsd:string"/>
<xsd:element name="company-name" type="xsd:string"/>
<xsd:element name="company-address" type="xsd:string"/>
<xsd:element name="company-postcode" type="xsd:string"/>
<xsd:element name="company-city" type="xsd:string"/>
<xsd:element name="company-nip" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="CompanySecondAddressStruct"><xsd:all><xsd:element name="company-worker-first-name" type="xsd:string"/>
<xsd:element name="company-worker-last-name" type="xsd:string"/>
<xsd:element name="company-address" type="xsd:string"/>
<xsd:element name="company-postcode" type="xsd:string"/>
<xsd:element name="company-city" type="xsd:string"/>
<xsd:element name="company-country-id" type="xsd:int"/>
<xsd:element name="company-state-id" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="CountryInfoType"><xsd:all><xsd:element name="country-id" type="xsd:int"/>
<xsd:element name="country-name" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="CreatedItemTemplateStruct"><xsd:all><xsd:element name="item-template-id" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="DealsStruct"><xsd:all><xsd:element name="deal-id" type="xsd:long"/>
<xsd:element name="deal-date" type="xsd:long"/>
<xsd:element name="deal-quantity" type="xsd:int"/>
<xsd:element name="deal-amount-original" type="xsd:float"/>
<xsd:element name="deal-amount-discounted" type="xsd:float"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="DurationInfoStruct"><xsd:all><xsd:element name="duration-type" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FavouritesCategoriesStruct"><xsd:all><xsd:element name="s-category-id" type="xsd:int"/>
<xsd:element name="s-subscription-status" type="xsd:int"/>
<xsd:element name="s-position" type="xsd:int"/>
<xsd:element name="s-buy-now-only" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FavouritesSellersStruct"><xsd:all><xsd:element name="s-fav-user-id" type="xsd:int"/>
<xsd:element name="s-subscription-status" type="xsd:int"/>
<xsd:element name="s-position" type="xsd:int"/>
<xsd:element name="s-buy-now-only" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FeedbackList"><xsd:all><xsd:element name="f-id" type="xsd:int"/>
<xsd:element name="f-item-id" type="xsd:long"/>
<xsd:element name="f-from-id" type="xsd:int"/>
<xsd:element name="f-to-id" type="xsd:int"/>
<xsd:element name="f-date" type="xsd:long"/>
<xsd:element name="f-type" type="xsd:string"/>
<xsd:element name="f-desc" type="xsd:string"/>
<xsd:element name="f-correct-date" type="xsd:long"/>
<xsd:element name="f-correct-text" type="xsd:string"/>
<xsd:element name="f-receiver-type" type="xsd:string"/>
<xsd:element name="f-user-login" type="xsd:string"/>
<xsd:element name="f-user-rating" type="xsd:string"/>
<xsd:element name="f-user-country" type="xsd:string"/>
<xsd:element name="f-user-blocked" type="xsd:int"/>
<xsd:element name="f-user-sseller" type="xsd:int"/>
<xsd:element name="f-cancelled" type="xsd:long"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FeedbackManyStruct"><xsd:all><xsd:element name="fe-item-id" type="xsd:long"/>
<xsd:element name="fe-use-comment-template" type="xsd:int"/>
<xsd:element name="fe-to-user-id" type="xsd:int"/>
<xsd:element name="fe-comment" type="xsd:string"/>
<xsd:element name="fe-comment-type" type="xsd:string"/>
<xsd:element name="fe-op" type="xsd:int"/>
<xsd:element name="fe-rating" type="typens:ArrayOfSellRatingEstimationStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FeedbackResultStruct"><xsd:all><xsd:element name="fe-item-id" type="xsd:long"/>
<xsd:element name="fe-id" type="xsd:int"/>
<xsd:element name="fe-fault-code" type="xsd:string"/>
<xsd:element name="fe-fault-desc" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FieldsValue"><xsd:all><xsd:element name="fid" type="xsd:int"/>
<xsd:element name="fvalue-string" type="xsd:string"/>
<xsd:element name="fvalue-int" type="xsd:int"/>
<xsd:element name="fvalue-float" type="xsd:float"/>
<xsd:element name="fvalue-image" type="xsd:base64Binary"/>
<xsd:element name="fvalue-datetime" type="xsd:float"/>
<xsd:element name="fvalue-date" type="xsd:string"/>
<xsd:element name="fvalue-range-int" type="typens:RangeIntValueStruct"/>
<xsd:element name="fvalue-range-float" type="typens:RangeFloatValueStruct"/>
<xsd:element name="fvalue-range-date" type="typens:RangeDateValueStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FilledPostBuyFormsStruct"><xsd:all><xsd:element name="transaction-ids" type="typens:ArrayOfTransactionsID"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FilterOptionsType"><xsd:all><xsd:element name="filter-id" type="xsd:string"/>
<xsd:element name="filter-value-id" type="typens:ArrayOfString"/>
<xsd:element name="filter-value-range" type="typens:RangeValueType"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FilterPriceStruct"><xsd:all><xsd:element name="filter-price-from" type="xsd:float"/>
<xsd:element name="filter-price-to" type="xsd:float"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FilterRelationType"><xsd:all><xsd:element name="relation-and" type="typens:ArrayOfRelationAnd"/>
<xsd:element name="relation-or" type="typens:ArrayOfRelationOr"/>
<xsd:element name="relation-exclude" type="typens:ArrayOfRelationExclude"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FilterValueType"><xsd:all><xsd:element name="filter-value-id" type="xsd:string"/>
<xsd:element name="filter-value-name" type="xsd:string"/>
<xsd:element name="filter-value-count" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FiltersListType"><xsd:all><xsd:element name="filter-id" type="xsd:string"/>
<xsd:element name="filter-name" type="xsd:string"/>
<xsd:element name="filter-type" type="xsd:string"/>
<xsd:element name="filter-control-type" type="xsd:string"/>
<xsd:element name="filter-data-type" type="xsd:string"/>
<xsd:element name="filter-is-range" type="xsd:boolean"/>
<xsd:element name="filter-array-size" type="xsd:int"/>
<xsd:element name="filter-values" type="typens:ArrayOfFilterValueType"/>
<xsd:element name="filter-relations" type="typens:FilterRelationType"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FinishFailureStruct"><xsd:all><xsd:element name="finish-item-id" type="xsd:long"/>
<xsd:element name="finish-error-code" type="xsd:string"/>
<xsd:element name="finish-error-message" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FinishItemsStruct"><xsd:all><xsd:element name="finish-item-id" type="xsd:long"/>
<xsd:element name="finish-cancel-all-bids" type="xsd:int"/>
<xsd:element name="finish-cancel-reason" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FulfillmentTimeStruct"><xsd:all><xsd:element name="fulfillment-time-from" type="xsd:int"/>
<xsd:element name="fulfillment-time-to" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FutureFilterOptionsStruct"><xsd:all><xsd:element name="filter-format" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="FutureItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail-url" type="xsd:string"/>
<xsd:element name="item-price" type="typens:ArrayOfItemPriceStruct"/>
<xsd:element name="item-start-quantity" type="xsd:int"/>
<xsd:element name="item-quantity-type" type="xsd:int"/>
<xsd:element name="item-start-time" type="xsd:long"/>
<xsd:element name="item-category-id" type="xsd:int"/>
<xsd:element name="item-note" type="xsd:string"/>
<xsd:element name="item-special-info" type="xsd:int"/>
<xsd:element name="item-shop-info" type="xsd:int"/>
<xsd:element name="item-product-info" type="xsd:long"/>
<xsd:element name="item-payu-info" type="xsd:int"/>
<xsd:element name="item-status" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="InvoiceDataStruct"><xsd:all><xsd:element name="company-name" type="xsd:string"/>
<xsd:element name="company-nip" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="InvoiceInfoStruct"><xsd:all><xsd:element name="invoice-address-type" type="xsd:int"/>
<xsd:element name="invoice-address-data" type="typens:AddressUserDataStruct"/>
<xsd:element name="invoice-nip" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemBilling"><xsd:all><xsd:element name="bi-name" type="xsd:string"/>
<xsd:element name="bi-value" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemBillingList"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:ItemBilling[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="ItemCatList"><xsd:all><xsd:element name="cat-level" type="xsd:int"/>
<xsd:element name="cat-id" type="xsd:long"/>
<xsd:element name="cat-name" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemDescriptionStruct"><xsd:all><xsd:element name="description-result" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemGetImage"><xsd:all><xsd:element name="it-id" type="xsd:long"/>
<xsd:element name="it-seller-id" type="xsd:long"/>
<xsd:element name="it-foto-count" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemImageList"><xsd:all><xsd:element name="image-type" type="xsd:int"/>
<xsd:element name="image-url" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemImagesStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-images" type="typens:ArrayOfItemImageList"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemInfo"><xsd:all><xsd:element name="it-id" type="xsd:long"/>
<xsd:element name="it-country" type="xsd:int"/>
<xsd:element name="it-name" type="xsd:string"/>
<xsd:element name="it-price" type="xsd:float"/>
<xsd:element name="it-bid-count" type="xsd:int"/>
<xsd:element name="it-ending-time" type="xsd:long"/>
<xsd:element name="it-seller-id" type="xsd:long"/>
<xsd:element name="it-seller-login" type="xsd:string"/>
<xsd:element name="it-seller-rating" type="xsd:int"/>
<xsd:element name="it-starting-time" type="xsd:long"/>
<xsd:element name="it-starting-price" type="xsd:float"/>
<xsd:element name="it-quantity" type="xsd:int"/>
<xsd:element name="it-foto-count" type="xsd:int"/>
<xsd:element name="it-reserve-price" type="xsd:float"/>
<xsd:element name="it-location" type="xsd:string"/>
<xsd:element name="it-buy-now-price" type="xsd:float"/>
<xsd:element name="it-buy-now-active" type="xsd:int"/>
<xsd:element name="it-high-bidder" type="xsd:int"/>
<xsd:element name="it-high-bidder-login" type="xsd:string"/>
<xsd:element name="it-description" type="xsd:string"/>
<xsd:element name="it-options" type="xsd:int"/>
<xsd:element name="it-state" type="xsd:int"/>
<xsd:element name="it-is-eco" type="xsd:int"/>
<xsd:element name="it-hit-count" type="xsd:long"/>
<xsd:element name="it-postcode" type="xsd:string"/>
<xsd:element name="it-vat-invoice" type="xsd:int"/>
<xsd:element name="it-bank-account1" type="xsd:string"/>
<xsd:element name="it-bank-account2" type="xsd:string"/>
<xsd:element name="it-starting-quantity" type="xsd:int"/>
<xsd:element name="it-is-for-guests" type="xsd:int"/>
<xsd:element name="it-has-product" type="xsd:int"/>
<xsd:element name="it-order-fulfillment-time" type="xsd:int"/>
<xsd:element name="it-ending-info" type="xsd:int"/>
<xsd:element name="it-is-allegro-standard" type="xsd:int"/>
<xsd:element name="it-is-new-used" type="xsd:int"/>
<xsd:element name="it-is-brand-zone" type="xsd:int"/>
<xsd:element name="it-duration-info" type="typens:DurationInfoStruct"/>
<xsd:element name="it-is-fulfillment-time-active" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemInfoExt"><xsd:all><xsd:element name="it-id" type="xsd:long"/>
<xsd:element name="it-country" type="xsd:int"/>
<xsd:element name="it-name" type="xsd:string"/>
<xsd:element name="it-price" type="xsd:float"/>
<xsd:element name="it-bid-count" type="xsd:int"/>
<xsd:element name="it-ending-time" type="xsd:long"/>
<xsd:element name="it-seller-id" type="xsd:long"/>
<xsd:element name="it-seller-login" type="xsd:string"/>
<xsd:element name="it-seller-rating" type="xsd:int"/>
<xsd:element name="it-starting-time" type="xsd:long"/>
<xsd:element name="it-starting-price" type="xsd:float"/>
<xsd:element name="it-quantity" type="xsd:int"/>
<xsd:element name="it-foto-count" type="xsd:int"/>
<xsd:element name="it-reserve-price" type="xsd:float"/>
<xsd:element name="it-location" type="xsd:string"/>
<xsd:element name="it-buy-now-price" type="xsd:float"/>
<xsd:element name="it-buy-now-active" type="xsd:int"/>
<xsd:element name="it-high-bidder" type="xsd:int"/>
<xsd:element name="it-high-bidder-login" type="xsd:string"/>
<xsd:element name="it-description" type="xsd:string"/>
<xsd:element name="it-options" type="xsd:int"/>
<xsd:element name="it-state" type="xsd:int"/>
<xsd:element name="it-wire-transfer" type="xsd:float"/>
<xsd:element name="it-post-delivery" type="xsd:float"/>
<xsd:element name="it-post-info" type="xsd:string"/>
<xsd:element name="it-quantity-type" type="xsd:int"/>
<xsd:element name="it-is-eco" type="xsd:int"/>
<xsd:element name="it-hit-count" type="xsd:long"/>
<xsd:element name="it-postcode" type="xsd:string"/>
<xsd:element name="it-vat-invoice" type="xsd:int"/>
<xsd:element name="it-bank-account1" type="xsd:string"/>
<xsd:element name="it-bank-account2" type="xsd:string"/>
<xsd:element name="it-starting-quantity" type="xsd:int"/>
<xsd:element name="it-is-for-guests" type="xsd:int"/>
<xsd:element name="it-has-product" type="xsd:int"/>
<xsd:element name="it-order-fulfillment-time" type="xsd:int"/>
<xsd:element name="it-ending-info" type="xsd:int"/>
<xsd:element name="it-is-allegro-standard" type="xsd:int"/>
<xsd:element name="it-is-new-used" type="xsd:int"/>
<xsd:element name="it-is-brand-zone" type="xsd:int"/>
<xsd:element name="it-is-fulfillment-time-active" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemInfoStruct"><xsd:all><xsd:element name="item-info" type="typens:ItemInfo"/>
<xsd:element name="item-cats" type="typens:ArrayOfItemCatList"/>
<xsd:element name="item-images" type="typens:ArrayOfItemImageList"/>
<xsd:element name="item-attribs" type="typens:ArrayOfAttribStruct"/>
<xsd:element name="item-postage-options" type="typens:ArrayOfPostageStruct"/>
<xsd:element name="item-payment-options" type="typens:ItemPaymentOptions"/>
<xsd:element name="item-company-info" type="typens:CompanyInfoStruct"/>
<xsd:element name="item-product-info" type="typens:ProductStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemPaymentOptions"><xsd:all><xsd:element name="pay-option-transfer" type="xsd:int"/>
<xsd:element name="pay-option-on-delivery" type="xsd:int"/>
<xsd:element name="pay-option-allegro-pay" type="xsd:int"/>
<xsd:element name="pay-option-see-desc" type="xsd:int"/>
<xsd:element name="pay-option-payu" type="xsd:int"/>
<xsd:element name="pay-option-escrow" type="xsd:int"/>
<xsd:element name="pay-option-qiwi" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemPostBuyDataStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="users-post-buy-data" type="typens:ArrayOfUsersPostBuyData"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemPriceStruct"><xsd:all><xsd:element name="price-type" type="xsd:int"/>
<xsd:element name="price-value" type="xsd:float"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemReminderStruct"><xsd:all><xsd:element name="reminder-type" type="xsd:int"/>
<xsd:element name="reminder-time" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemRemoveWatchStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="result" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemSurchargeStruct"><xsd:all><xsd:element name="surcharge-description" type="xsd:string"/>
<xsd:element name="surcharge-amount" type="typens:AmountStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemTemplateCreateStruct"><xsd:all><xsd:element name="item-template-option" type="xsd:int"/>
<xsd:element name="item-template-name" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemTemplateListStruct"><xsd:all><xsd:element name="item-template-id" type="xsd:int"/>
<xsd:element name="item-template-name" type="xsd:string"/>
<xsd:element name="item-template-fields" type="typens:ArrayOfFieldsValue"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemTemplatesStruct"><xsd:all><xsd:element name="item-template-list" type="typens:ArrayOfItemTemplateListStruct"/>
<xsd:element name="item-template-incorrect-ids" type="typens:ArrayOfTemplatesID"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemVariantAttributeStruct"><xsd:all><xsd:element name="name" type="xsd:string"/>
<xsd:element name="value" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemVariantStruct"><xsd:all><xsd:element name="id" type="xsd:string"/>
<xsd:element name="quantity" type="xsd:int"/>
<xsd:element name="attributes" type="typens:ArrayOfItemVariantAttributeStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ItemsNotAddedStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-error-code" type="xsd:string"/>
<xsd:element name="item-error-description" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="MessageToBuyerStruct"><xsd:all><xsd:element name="message-seller-id" type="xsd:int"/>
<xsd:element name="message-content" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="MyAccountList2"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="MyAccountStruct2"><xsd:all><xsd:element name="my-account-array" type="typens:MyAccountList2"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="MyContactList"><xsd:all><xsd:element name="contact-user-id" type="xsd:int"/>
<xsd:element name="contact-nick" type="xsd:string"/>
<xsd:element name="contact-first-name" type="xsd:string"/>
<xsd:element name="contact-last-name" type="xsd:string"/>
<xsd:element name="contact-company" type="xsd:string"/>
<xsd:element name="contact-email" type="xsd:string"/>
<xsd:element name="contact-street" type="xsd:string"/>
<xsd:element name="contact-postcode" type="xsd:string"/>
<xsd:element name="contact-city" type="xsd:string"/>
<xsd:element name="contact-country" type="xsd:string"/>
<xsd:element name="contact-phone" type="xsd:string"/>
<xsd:element name="contact-phone2" type="xsd:string"/>
<xsd:element name="contact-rating" type="xsd:string"/>
<xsd:element name="contact-blocked" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="MyFeedbackList2"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="MyFeedbackListStruct2"><xsd:all><xsd:element name="feedback-array" type="typens:MyFeedbackList2"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="NewPostBuyFormCommonStruct"><xsd:all><xsd:element name="payment-method-id" type="xsd:string"/>
<xsd:element name="shipment-address-type" type="xsd:int"/>
<xsd:element name="shipment-address-data" type="typens:AddressUserDataStruct"/>
<xsd:element name="contact-phone" type="xsd:string"/>
<xsd:element name="invoice-option" type="xsd:int"/>
<xsd:element name="invoice-info" type="typens:InvoiceInfoStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="NewPostBuyFormSellerStruct"><xsd:all><xsd:element name="seller-id" type="xsd:int"/>
<xsd:element name="seller-item-ids" type="typens:ArrayOfItemsID"/>
<xsd:element name="seller-shipment-id" type="xsd:int"/>
<xsd:element name="seller-gd-id" type="xsd:int"/>
<xsd:element name="seller-shipment-amount" type="xsd:float"/>
<xsd:element name="seller-message-to" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="NotSoldFilterOptionsStruct"><xsd:all><xsd:element name="filter-format" type="xsd:int"/>
<xsd:element name="filter-from-end" type="xsd:int"/>
<xsd:element name="filter-auto-listing" type="xsd:int"/>
<xsd:element name="filter-price" type="typens:FilterPriceStruct"/>
<xsd:element name="filter-duration-type" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="NotSoldItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail-url" type="xsd:string"/>
<xsd:element name="item-price" type="typens:ArrayOfItemPriceStruct"/>
<xsd:element name="item-start-quantity" type="xsd:int"/>
<xsd:element name="item-quantity-type" type="xsd:int"/>
<xsd:element name="item-start-time" type="xsd:long"/>
<xsd:element name="item-end-time" type="xsd:long"/>
<xsd:element name="item-bidders-counter" type="xsd:int"/>
<xsd:element name="item-highest-bidder" type="typens:UserInfoStruct"/>
<xsd:element name="item-category-id" type="xsd:int"/>
<xsd:element name="item-watchers-counter" type="xsd:int"/>
<xsd:element name="item-views-counter" type="xsd:int"/>
<xsd:element name="item-note" type="xsd:string"/>
<xsd:element name="item-special-info" type="xsd:int"/>
<xsd:element name="item-shop-info" type="xsd:int"/>
<xsd:element name="item-product-info" type="xsd:long"/>
<xsd:element name="item-payu-info" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="NotWonItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail-url" type="xsd:string"/>
<xsd:element name="item-price" type="typens:ArrayOfItemPriceStruct"/>
<xsd:element name="item-left-quantity" type="xsd:int"/>
<xsd:element name="item-quantity-type" type="xsd:int"/>
<xsd:element name="item-end-time" type="xsd:long"/>
<xsd:element name="item-end-time-left" type="xsd:string"/>
<xsd:element name="item-seller" type="typens:UserInfoStruct"/>
<xsd:element name="item-bidders-counter" type="xsd:int"/>
<xsd:element name="item-highest-bidder" type="typens:UserInfoStruct"/>
<xsd:element name="item-category-id" type="xsd:int"/>
<xsd:element name="item-views-counter" type="xsd:int"/>
<xsd:element name="item-note" type="xsd:string"/>
<xsd:element name="item-special-info" type="xsd:int"/>
<xsd:element name="item-shop-info" type="xsd:int"/>
<xsd:element name="item-product-info" type="xsd:long"/>
<xsd:element name="item-payu-info" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PackageInfoStruct"><xsd:all><xsd:element name="operator-id" type="xsd:int"/>
<xsd:element name="package-id" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PaymentDetailsStruct"><xsd:all><xsd:element name="pay-trans-details-it-id" type="xsd:long"/>
<xsd:element name="pay-trans-details-price" type="xsd:float"/>
<xsd:element name="pay-trans-details-count" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PaymentItemsStruct"><xsd:all><xsd:element name="pay-trans-it-id" type="xsd:long"/>
<xsd:element name="pay-trans-it-name" type="xsd:string"/>
<xsd:element name="pay-trans-it-count" type="xsd:int"/>
<xsd:element name="pay-trans-it-price" type="xsd:float"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PaymentMethodStruct"><xsd:all><xsd:element name="payment-method-id" type="xsd:string"/>
<xsd:element name="payment-method-name" type="xsd:string"/>
<xsd:element name="payment-method-image" type="xsd:string"/>
<xsd:element name="payment-method-usage" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PaymentSellersStruct"><xsd:all><xsd:element name="pay-trans-seller-id" type="xsd:int"/>
<xsd:element name="pay-trans-seller-name" type="xsd:string"/>
<xsd:element name="pay-trans-items" type="typens:ArrayOfPaymentItemsStruct"/>
<xsd:element name="pay-trans-seller-postage-amount" type="xsd:float"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PaymentsInfoStruct"><xsd:all><xsd:element name="payments-balance" type="xsd:float"/>
<xsd:element name="payments-bank-account" type="xsd:string"/>
<xsd:element name="payments-user-data" type="typens:PaymentsUserDataStruct"/>
<xsd:element name="payments-payout" type="typens:PaymentsPayoutStruct"/>
<xsd:element name="payments-notifications" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PaymentsPayoutStruct"><xsd:all><xsd:element name="payout-type" type="xsd:int"/>
<xsd:element name="payout-auto-settings" type="typens:PayoutAutoSettingsStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PaymentsUserDataStruct"><xsd:all><xsd:element name="user-full-name" type="xsd:string"/>
<xsd:element name="user-address" type="xsd:string"/>
<xsd:element name="user-postcode" type="xsd:string"/>
<xsd:element name="user-city" type="xsd:string"/>
<xsd:element name="user-country" type="xsd:int"/>
<xsd:element name="user-phone" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PayoutAutoFrequencyStruct"><xsd:all><xsd:element name="frequency-type" type="xsd:short"/>
<xsd:element name="frequency-week-value" type="xsd:short"/>
<xsd:element name="frequency-month-value" type="xsd:short"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PayoutAutoSettingsStruct"><xsd:all><xsd:element name="payout-auto-amount" type="xsd:float"/>
<xsd:element name="payout-auto-frequency" type="typens:PayoutAutoFrequencyStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PharmacyDataStruct"><xsd:all><xsd:element name="pharmacy-opening-date" type="xsd:string"/>
<xsd:element name="pharmacy-expiration-date" type="xsd:string"/>
<xsd:element name="pharmacy-name" type="xsd:string"/>
<xsd:element name="pharmacy-pharmacist-full-name" type="xsd:string"/>
<xsd:element name="pharmacy-address" type="xsd:string"/>
<xsd:element name="pharmacy-postcode" type="xsd:string"/>
<xsd:element name="pharmacy-city" type="xsd:string"/>
<xsd:element name="pharmacy-commune" type="xsd:string"/>
<xsd:element name="pharmacy-country-id" type="xsd:int"/>
<xsd:element name="pharmacy-state-id" type="xsd:int"/>
<xsd:element name="pharmacy-permit-number" type="xsd:string"/>
<xsd:element name="pharmacy-permit-info" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PharmacyRecipientDataStruct"><xsd:all><xsd:element name="recipient-first-name" type="xsd:string"/>
<xsd:element name="recipient-last-name" type="xsd:string"/>
<xsd:element name="recipient-address" type="xsd:string"/>
<xsd:element name="recipient-postcode" type="xsd:string"/>
<xsd:element name="recipient-city" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormAddressStruct"><xsd:all><xsd:element name="post-buy-form-adr-country" type="xsd:int"/>
<xsd:element name="post-buy-form-adr-street" type="xsd:string"/>
<xsd:element name="post-buy-form-adr-postcode" type="xsd:string"/>
<xsd:element name="post-buy-form-adr-city" type="xsd:string"/>
<xsd:element name="post-buy-form-adr-full-name" type="xsd:string"/>
<xsd:element name="post-buy-form-adr-company" type="xsd:string"/>
<xsd:element name="post-buy-form-adr-phone" type="xsd:string"/>
<xsd:element name="post-buy-form-adr-nip" type="xsd:string"/>
<xsd:element name="post-buy-form-created-date" type="xsd:string"/>
<xsd:element name="post-buy-form-adr-type" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormDataStruct"><xsd:all><xsd:element name="post-buy-form-id" type="xsd:long"/>
<xsd:element name="post-buy-form-items" type="typens:ArrayOfPostBuyFormItemStruct"/>
<xsd:element name="post-buy-form-buyer-id" type="xsd:long"/>
<xsd:element name="post-buy-form-amount" type="xsd:float"/>
<xsd:element name="post-buy-form-postage-amount" type="xsd:float"/>
<xsd:element name="post-buy-form-invoice-option" type="xsd:int"/>
<xsd:element name="post-buy-form-msg-to-seller" type="xsd:string"/>
<xsd:element name="post-buy-form-invoice-data" type="typens:PostBuyFormAddressStruct"/>
<xsd:element name="post-buy-form-shipment-address" type="typens:PostBuyFormAddressStruct"/>
<xsd:element name="post-buy-form-pay-type" type="xsd:string"/>
<xsd:element name="post-buy-form-pay-id" type="xsd:long"/>
<xsd:element name="post-buy-form-pay-status" type="xsd:string"/>
<xsd:element name="post-buy-form-date-init" type="xsd:string"/>
<xsd:element name="post-buy-form-date-recv" type="xsd:string"/>
<xsd:element name="post-buy-form-date-cancel" type="xsd:string"/>
<xsd:element name="post-buy-form-shipment-id" type="xsd:int"/>
<xsd:element name="post-buy-form-gd-address" type="typens:PostBuyFormAddressStruct"/>
<xsd:element name="post-buy-form-shipment-tracking" type="typens:ArrayOfPostBuyFormShipmentTrackingStruct"/>
<xsd:element name="post-buy-form-surcharges-list" type="typens:ArrayOfPostBuyFormSurcharges"/>
<xsd:element name="post-buy-form-gd-additional-info" type="xsd:string"/>
<xsd:element name="post-buy-form-payment-amount" type="xsd:float"/>
<xsd:element name="post-buy-form-sent-by-seller" type="xsd:int"/>
<xsd:element name="post-buy-form-buyer-login" type="xsd:string"/>
<xsd:element name="post-buy-form-buyer-email" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormForBuyersDataStruct"><xsd:all><xsd:element name="post-buy-form-id" type="xsd:long"/>
<xsd:element name="post-buy-form-buyer-id" type="xsd:int"/>
<xsd:element name="post-buy-form-sellers" type="typens:ArrayOfPostBuyFormSellersStruct"/>
<xsd:element name="post-buy-form-total-amount" type="xsd:float"/>
<xsd:element name="post-buy-form-invoice-option" type="xsd:int"/>
<xsd:element name="post-buy-form-invoice-data" type="typens:PostBuyFormAddressStruct"/>
<xsd:element name="post-buy-form-shipment-address" type="typens:PostBuyFormAddressStruct"/>
<xsd:element name="post-buy-form-pay-type" type="xsd:string"/>
<xsd:element name="post-buy-form-pay-id" type="xsd:long"/>
<xsd:element name="post-buy-form-pay-status" type="xsd:string"/>
<xsd:element name="post-buy-form-date-init" type="xsd:string"/>
<xsd:element name="post-buy-form-date-recv" type="xsd:string"/>
<xsd:element name="post-buy-form-date-cancel" type="xsd:string"/>
<xsd:element name="post-buy-form-payment-amount" type="xsd:float"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormItemDealsStruct"><xsd:all><xsd:element name="deal-id" type="xsd:long"/>
<xsd:element name="deal-final-price" type="xsd:float"/>
<xsd:element name="deal-quantity" type="xsd:int"/>
<xsd:element name="deal-date" type="xsd:dateTime"/>
<xsd:element name="deal-was-discounted" type="xsd:boolean"/>
<xsd:element name="deal-variant" type="typens:PostBuyFormItemDealsVariantStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormItemDealsVariantStruct"><xsd:all><xsd:element name="variant-name" type="xsd:string"/>
<xsd:element name="variant-value" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormItemStruct"><xsd:all><xsd:element name="post-buy-form-it-quantity" type="xsd:int"/>
<xsd:element name="post-buy-form-it-amount" type="xsd:float"/>
<xsd:element name="post-buy-form-it-id" type="xsd:long"/>
<xsd:element name="post-buy-form-it-title" type="xsd:string"/>
<xsd:element name="post-buy-form-it-country" type="xsd:int"/>
<xsd:element name="post-buy-form-it-price" type="xsd:float"/>
<xsd:element name="post-buy-form-it-deals" type="typens:ArrayOfPostBuyFormItemDealsStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormPackageInfoStruct"><xsd:all><xsd:element name="package-ids-added" type="typens:ArrayOfPackageIds"/>
<xsd:element name="package-ids-not-added-incorrect-operator-id" type="typens:ArrayOfPackageIds"/>
<xsd:element name="package-ids-not-added-incorrect-package-id" type="typens:ArrayOfPackageIds"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormSellersStruct"><xsd:all><xsd:element name="post-buy-form-seller-id" type="xsd:int"/>
<xsd:element name="post-buy-form-seller-name" type="xsd:string"/>
<xsd:element name="post-buy-form-items" type="typens:ArrayOfPostBuyFormItemStruct"/>
<xsd:element name="post-buy-form-shipment-id" type="xsd:int"/>
<xsd:element name="post-buy-form-postage-amount" type="xsd:float"/>
<xsd:element name="post-buy-form-msg-to-seller" type="xsd:string"/>
<xsd:element name="post-buy-form-amount" type="xsd:float"/>
<xsd:element name="post-buy-form-surcharges-list" type="typens:ArrayOfPostBuyFormSurcharges"/>
<xsd:element name="post-buy-form-shipment-tracking" type="typens:ArrayOfPostBuyFormShipmentTrackingStruct"/>
<xsd:element name="post-buy-form-gd-address" type="typens:PostBuyFormAddressStruct"/>
<xsd:element name="post-buy-form-gd-additional-info" type="xsd:string"/>
<xsd:element name="post-buy-form-sent-by-seller" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormShipmentTrackingStruct"><xsd:all><xsd:element name="post-buy-form-operator-id" type="xsd:int"/>
<xsd:element name="post-buy-form-package-id" type="xsd:string"/>
<xsd:element name="post-buy-form-package-status" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyFormStruct"><xsd:all><xsd:element name="transaction-id" type="xsd:long"/>
<xsd:element name="transaction-package-ids" type="typens:ArrayOfTransactionsID"/>
<xsd:element name="transaction-pay-by-link" type="typens:TransactionPayByLinkStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostBuyItemInfoStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-post-buy-form-info" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="PostageStruct"><xsd:all><xsd:element name="postage-amount" type="xsd:float"/>
<xsd:element name="postage-amount-add" type="xsd:float"/>
<xsd:element name="postage-pack-size" type="xsd:int"/>
<xsd:element name="postage-id" type="xsd:int"/>
<xsd:element name="postage-free-shipping" type="xsd:int"/>
<xsd:element name="postage-free-return" type="xsd:int"/>
<xsd:element name="postage-fulfillment-time" type="typens:FulfillmentTimeStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ProductParametersGroupStruct"><xsd:all><xsd:element name="product-parameters-group-name" type="xsd:string"/>
<xsd:element name="product-parameters-list" type="typens:ArrayOfProductParametersStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ProductParametersStruct"><xsd:all><xsd:element name="product-parameter-name" type="xsd:string"/>
<xsd:element name="product-parameter-values" type="typens:ArrayOfProductParameterValues"/>
<xsd:element name="product-parameter-description" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ProductStruct"><xsd:all><xsd:element name="product-id" type="xsd:long"/>
<xsd:element name="product-name" type="xsd:string"/>
<xsd:element name="product-description" type="xsd:string"/>
<xsd:element name="product-images-list" type="typens:ArrayOfProductImagesList"/>
<xsd:element name="product-parameters-group-list" type="typens:ArrayOfProductParametersGroupStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RangeDateValueStruct"><xsd:all><xsd:element name="fvalue-range-date-min" type="xsd:string"/>
<xsd:element name="fvalue-range-date-max" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RangeFloatValueStruct"><xsd:all><xsd:element name="fvalue-range-float-min" type="xsd:float"/>
<xsd:element name="fvalue-range-float-max" type="xsd:float"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RangeIntValueStruct"><xsd:all><xsd:element name="fvalue-range-int-min" type="xsd:int"/>
<xsd:element name="fvalue-range-int-max" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RangeValueType"><xsd:all><xsd:element name="range-value-min" type="xsd:string"/>
<xsd:element name="range-value-max" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RefundDetailsType"><xsd:all><xsd:element name="refund-id" type="xsd:int"/>
<xsd:element name="refund-status" type="xsd:string"/>
<xsd:element name="refund-quantity" type="xsd:int"/>
<xsd:element name="created-date" type="xsd:dateTime"/>
<xsd:element name="consider-date" type="xsd:dateTime"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RefundListType"><xsd:all><xsd:element name="deal-id" type="xsd:long"/>
<xsd:element name="deal-date" type="xsd:dateTime"/>
<xsd:element name="buyer-id" type="xsd:int"/>
<xsd:element name="buyer-login" type="xsd:string"/>
<xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="bids-count" type="xsd:int"/>
<xsd:element name="quantity-type" type="xsd:string"/>
<xsd:element name="refund-details" type="typens:RefundDetailsType"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RefundsDealsListType"><xsd:all><xsd:element name="deal-id" type="xsd:long"/>
<xsd:element name="deal-date" type="xsd:dateTime"/>
<xsd:element name="time-left" type="xsd:int"/>
<xsd:element name="buyer-id" type="xsd:int"/>
<xsd:element name="buyer-login" type="xsd:string"/>
<xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="bids-count" type="xsd:int"/>
<xsd:element name="quantity-type" type="xsd:string"/>
<xsd:element name="payment-status" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RelatedItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail" type="xsd:string"/>
<xsd:element name="item-price" type="xsd:float"/>
<xsd:element name="item-bought-count" type="xsd:int"/>
<xsd:element name="item-amount" type="xsd:float"/>
<xsd:element name="item-payment-type" type="xsd:int"/>
<xsd:element name="item-seller-id" type="xsd:long"/>
<xsd:element name="item-seller-name" type="xsd:string"/>
<xsd:element name="item-invoice-info" type="xsd:int"/>
<xsd:element name="item-category-id" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RelatedItemsShipmentDataStruct"><xsd:all><xsd:element name="seller-shipment-data" type="typens:ArrayOfSellerShipmentDataStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RelatedItemsStruct"><xsd:all><xsd:element name="related-items-info" type="typens:ArrayOfRelatedItemStruct"/>
<xsd:element name="related-items-amount" type="xsd:float"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RelatedPersonsStruct"><xsd:all><xsd:element name="spouse-first-name" type="xsd:string"/>
<xsd:element name="spouse-last-name" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RemovedItemTemplatesStruct"><xsd:all><xsd:element name="item-template-ids" type="typens:ArrayOfTemplatesID"/>
<xsd:element name="item-template-incorrect-ids" type="typens:ArrayOfTemplatesID"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="RequestPayoutStruct"><xsd:all><xsd:element name="payout-id" type="xsd:long"/>
<xsd:element name="payout-amount" type="xsd:float"/>
<xsd:element name="payout-time" type="xsd:long"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellFilterOptionsStruct"><xsd:all><xsd:element name="filter-format" type="xsd:int"/>
<xsd:element name="filter-bids" type="xsd:int"/>
<xsd:element name="filter-to-end" type="xsd:int"/>
<xsd:element name="filter-from-start" type="xsd:int"/>
<xsd:element name="filter-auto-listing" type="xsd:int"/>
<xsd:element name="filter-price" type="typens:FilterPriceStruct"/>
<xsd:element name="filter-duration-type" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellFormFieldsForCategoryStruct"><xsd:all><xsd:element name="sell-form-fields-list" type="typens:ArrayOfSellForms"/>
<xsd:element name="sell-form-fields-version-key" type="xsd:long"/>
<xsd:element name="sell-form-fields-component-value" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellFormType"><xsd:all><xsd:element name="sell-form-id" type="xsd:int"/>
<xsd:element name="sell-form-title" type="xsd:string"/>
<xsd:element name="sell-form-cat" type="xsd:int"/>
<xsd:element name="sell-form-type" type="xsd:int"/>
<xsd:element name="sell-form-res-type" type="xsd:int"/>
<xsd:element name="sell-form-def-value" type="xsd:int"/>
<xsd:element name="sell-form-opt" type="xsd:int"/>
<xsd:element name="sell-form-pos" type="xsd:int"/>
<xsd:element name="sell-form-length" type="xsd:int"/>
<xsd:element name="sell-min-value" type="xsd:string"/>
<xsd:element name="sell-max-value" type="xsd:string"/>
<xsd:element name="sell-form-desc" type="xsd:string"/>
<xsd:element name="sell-form-opts-values" type="xsd:string"/>
<xsd:element name="sell-form-field-desc" type="xsd:string"/>
<xsd:element name="sell-form-param-id" type="xsd:int"/>
<xsd:element name="sell-form-param-values" type="xsd:string"/>
<xsd:element name="sell-form-parent-id" type="xsd:int"/>
<xsd:element name="sell-form-parent-value" type="xsd:string"/>
<xsd:element name="sell-form-unit" type="xsd:string"/>
<xsd:element name="sell-form-options" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail-url" type="xsd:string"/>
<xsd:element name="item-price" type="typens:ArrayOfItemPriceStruct"/>
<xsd:element name="item-start-quantity" type="xsd:int"/>
<xsd:element name="item-sold-quantity" type="xsd:int"/>
<xsd:element name="item-quantity-type" type="xsd:int"/>
<xsd:element name="item-start-time" type="xsd:long"/>
<xsd:element name="item-end-time" type="xsd:long"/>
<xsd:element name="item-end-time-left" type="xsd:string"/>
<xsd:element name="item-bidders-counter" type="xsd:int"/>
<xsd:element name="item-highest-bidder" type="typens:UserInfoStruct"/>
<xsd:element name="item-category-id" type="xsd:int"/>
<xsd:element name="item-watchers-counter" type="xsd:int"/>
<xsd:element name="item-views-counter" type="xsd:int"/>
<xsd:element name="item-note" type="xsd:string"/>
<xsd:element name="item-special-info" type="xsd:int"/>
<xsd:element name="item-shop-info" type="xsd:int"/>
<xsd:element name="item-product-info" type="xsd:long"/>
<xsd:element name="item-payu-info" type="xsd:int"/>
<xsd:element name="item-duration-info" type="typens:DurationInfoStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellRatingAveragePerMonthStruct"><xsd:all><xsd:element name="sell-rating-month" type="xsd:string"/>
<xsd:element name="sell-rating-average-values" type="typens:ArrayOfSellRatingStatsStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellRatingAverageStruct"><xsd:all><xsd:element name="sell-rating-group-title" type="xsd:string"/>
<xsd:element name="sell-rating-group-average" type="xsd:float"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellRatingDetailStruct"><xsd:all><xsd:element name="sell-rating-group-title" type="xsd:string"/>
<xsd:element name="sell-rating-reasons-summary" type="typens:ArrayOfSellRatingReasonSumStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellRatingEstimationStruct"><xsd:all><xsd:element name="sell-rating-group-id" type="xsd:int"/>
<xsd:element name="sell-rating-group-estimation" type="xsd:int"/>
<xsd:element name="sell-rating-reason-id" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellRatingInfoStruct"><xsd:all><xsd:element name="sell-rating-group-id" type="xsd:int"/>
<xsd:element name="sell-rating-group-title" type="xsd:string"/>
<xsd:element name="sell-rating-reasons" type="typens:ArrayOfSellRatingReasonStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellRatingReasonStruct"><xsd:all><xsd:element name="sell-rating-reason-id" type="xsd:int"/>
<xsd:element name="sell-rating-reason-title" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellRatingReasonSumStruct"><xsd:all><xsd:element name="sell-rating-reason-title" type="xsd:string"/>
<xsd:element name="sell-rating-reason-count" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellRatingStatsStruct"><xsd:all><xsd:element name="sell-rating-group-title" type="xsd:string"/>
<xsd:element name="sell-rating-group-stats" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellerPaymentInfoStruct"><xsd:all><xsd:element name="shipment-payment-info-pza" type="typens:ArrayOfShipmentPaymentInfoStruct"/>
<xsd:element name="shipment-payment-info-non-pza" type="typens:ArrayOfShipmentPaymentInfoStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SellerShipmentDataStruct"><xsd:all><xsd:element name="seller-id" type="xsd:int"/>
<xsd:element name="seller-payment-info" type="typens:SellerPaymentInfoStruct"/>
<xsd:element name="seller-other-shipment-is-active" type="xsd:int"/>
<xsd:element name="general-delivery-payment-info" type="typens:ArrayOfShipmentPaymentInfoStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ShipmentDataStruct"><xsd:all><xsd:element name="shipment-id" type="xsd:int"/>
<xsd:element name="shipment-name" type="xsd:string"/>
<xsd:element name="shipment-type" type="xsd:int"/>
<xsd:element name="shipment-time" type="typens:ShipmentTimeStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ShipmentPaymentInfoStruct"><xsd:all><xsd:element name="shipment-id" type="xsd:int"/>
<xsd:element name="shipment-name" type="xsd:string"/>
<xsd:element name="shipment-amount" type="xsd:float"/>
<xsd:element name="shipment-payment-type" type="xsd:int"/>
<xsd:element name="shipment-item-ids" type="typens:ArrayOfItemsID"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ShipmentPriceTypeStruct"><xsd:all><xsd:element name="shipment-price-type-id" type="xsd:int"/>
<xsd:element name="shipment-price-type-name" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ShipmentTimeStruct"><xsd:all><xsd:element name="shipment-time-from" type="xsd:int"/>
<xsd:element name="shipment-time-to" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ShopsTagTypeStruct"><xsd:all><xsd:element name="id" type="xsd:int"/>
<xsd:element name="code" type="xsd:string"/>
<xsd:element name="name" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="ShowUserFeedbacks"><xsd:all><xsd:element name="user-f-last-week" type="xsd:int"/>
<xsd:element name="user-f-last-month" type="xsd:int"/>
<xsd:element name="user-f-all" type="xsd:int"/>
<xsd:element name="user-f-sold-items" type="xsd:int"/>
<xsd:element name="user-f-buy-items" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SiteJournal"><xsd:all><xsd:element name="row-id" type="xsd:long"/>
<xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="change-type" type="xsd:string"/>
<xsd:element name="change-date" type="xsd:long"/>
<xsd:element name="current-price" type="xsd:float"/>
<xsd:element name="item-seller-id" type="xsd:long"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SiteJournalArray"><xsd:complexContent><xsd:restriction base="SOAP-ENC:Array"><xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="typens:SiteJournal[]"/>
</xsd:restriction>
</xsd:complexContent>
</xsd:complexType>
<xsd:complexType name="SiteJournalDealsInfoStruct"><xsd:all><xsd:element name="deal-events-count" type="xsd:int"/>
<xsd:element name="deal-last-event-time" type="xsd:long"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SiteJournalDealsStruct"><xsd:all><xsd:element name="deal-event-id" type="xsd:long"/>
<xsd:element name="deal-event-type" type="xsd:int"/>
<xsd:element name="deal-event-time" type="xsd:long"/>
<xsd:element name="deal-id" type="xsd:long"/>
<xsd:element name="deal-transaction-id" type="xsd:long"/>
<xsd:element name="deal-seller-id" type="xsd:int"/>
<xsd:element name="deal-item-id" type="xsd:long"/>
<xsd:element name="deal-buyer-id" type="xsd:int"/>
<xsd:element name="deal-quantity" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SiteJournalInfo"><xsd:all><xsd:element name="items-number" type="xsd:int"/>
<xsd:element name="last-item-date" type="xsd:long"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SoldFilterOptionsStruct"><xsd:all><xsd:element name="filter-format" type="xsd:int"/>
<xsd:element name="filter-from-end" type="xsd:int"/>
<xsd:element name="filter-auto-listing" type="xsd:int"/>
<xsd:element name="filter-price" type="typens:FilterPriceStruct"/>
<xsd:element name="filter-duration-type" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SoldItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail-url" type="xsd:string"/>
<xsd:element name="item-price" type="typens:ArrayOfItemPriceStruct"/>
<xsd:element name="item-start-quantity" type="xsd:int"/>
<xsd:element name="item-sold-quantity" type="xsd:int"/>
<xsd:element name="item-quantity-type" type="xsd:int"/>
<xsd:element name="item-start-time" type="xsd:long"/>
<xsd:element name="item-end-time" type="xsd:long"/>
<xsd:element name="item-end-time-left" type="xsd:string"/>
<xsd:element name="item-bidders-counter" type="xsd:int"/>
<xsd:element name="item-highest-bidder" type="typens:UserInfoStruct"/>
<xsd:element name="item-category-id" type="xsd:int"/>
<xsd:element name="item-watchers-counter" type="xsd:int"/>
<xsd:element name="item-views-counter" type="xsd:int"/>
<xsd:element name="item-note" type="xsd:string"/>
<xsd:element name="item-special-info" type="xsd:int"/>
<xsd:element name="item-shop-info" type="xsd:int"/>
<xsd:element name="item-product-info" type="xsd:long"/>
<xsd:element name="item-payu-info" type="xsd:int"/>
<xsd:element name="item-duration-info" type="typens:DurationInfoStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SortOptionsStruct"><xsd:all><xsd:element name="sort-type" type="xsd:int"/>
<xsd:element name="sort-order" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="StateInfoStruct"><xsd:all><xsd:element name="state-id" type="xsd:int"/>
<xsd:element name="state-name" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="StructSellAgain"><xsd:all><xsd:element name="sell-item-id" type="xsd:long"/>
<xsd:element name="sell-item-info" type="xsd:string"/>
<xsd:element name="sell-item-local-id" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="StructSellFailed"><xsd:all><xsd:element name="sell-item-id" type="xsd:long"/>
<xsd:element name="sell-fault-code" type="xsd:string"/>
<xsd:element name="sell-fault-string" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="SysStatusType"><xsd:all><xsd:element name="country-id" type="xsd:int"/>
<xsd:element name="program-version" type="xsd:string"/>
<xsd:element name="cats-version" type="xsd:string"/>
<xsd:element name="api-version" type="xsd:string"/>
<xsd:element name="attrib-version" type="xsd:string"/>
<xsd:element name="form-sell-version" type="xsd:string"/>
<xsd:element name="site-version" type="xsd:string"/>
<xsd:element name="ver-key" type="xsd:long"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="TagNameStruct"><xsd:all><xsd:element name="tag-name" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="TransactionPayByLinkStruct"><xsd:all><xsd:element name="action-http-method" type="xsd:string"/>
<xsd:element name="action-url" type="xsd:string"/>
<xsd:element name="action-data" type="typens:ArrayOfActionDataStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserBlackListAddResultStruct"><xsd:all><xsd:element name="user-id" type="xsd:int"/>
<xsd:element name="add-to-black-list-result" type="xsd:int"/>
<xsd:element name="add-to-black-list-err-code" type="xsd:string"/>
<xsd:element name="add-to-black-list-err-msg" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserBlackListStruct"><xsd:all><xsd:element name="user-id" type="xsd:int"/>
<xsd:element name="user-black-list-note" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserDataStruct"><xsd:all><xsd:element name="user-id" type="xsd:long"/>
<xsd:element name="user-login" type="xsd:string"/>
<xsd:element name="user-rating" type="xsd:int"/>
<xsd:element name="user-first-name" type="xsd:string"/>
<xsd:element name="user-last-name" type="xsd:string"/>
<xsd:element name="user-maiden-name" type="xsd:string"/>
<xsd:element name="user-company" type="xsd:string"/>
<xsd:element name="user-country-id" type="xsd:int"/>
<xsd:element name="user-state-id" type="xsd:int"/>
<xsd:element name="user-postcode" type="xsd:string"/>
<xsd:element name="user-city" type="xsd:string"/>
<xsd:element name="user-address" type="xsd:string"/>
<xsd:element name="user-email" type="xsd:string"/>
<xsd:element name="user-phone" type="xsd:string"/>
<xsd:element name="user-phone2" type="xsd:string"/>
<xsd:element name="user-ss-status" type="xsd:int"/>
<xsd:element name="site-country-id" type="xsd:int"/>
<xsd:element name="user-junior-status" type="xsd:int"/>
<xsd:element name="user-birth-date" type="xsd:long"/>
<xsd:element name="user-has-shop" type="xsd:int"/>
<xsd:element name="user-company-icon" type="xsd:int"/>
<xsd:element name="user-is-allegro-standard" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserIncomingPaymentRefundsStruct"><xsd:all><xsd:element name="pay-refund-trans-id" type="xsd:long"/>
<xsd:element name="pay-refund-it-id" type="xsd:long"/>
<xsd:element name="pay-refund-buyer-id" type="xsd:int"/>
<xsd:element name="pay-refund-value" type="xsd:float"/>
<xsd:element name="pay-refund-reason" type="xsd:string"/>
<xsd:element name="pay-refund-date" type="xsd:long"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserIncomingPaymentStruct"><xsd:all><xsd:element name="pay-trans-id" type="xsd:long"/>
<xsd:element name="pay-trans-it-id" type="xsd:long"/>
<xsd:element name="pay-trans-buyer-id" type="xsd:int"/>
<xsd:element name="pay-trans-type" type="xsd:string"/>
<xsd:element name="pay-trans-status" type="xsd:string"/>
<xsd:element name="pay-trans-amount" type="xsd:float"/>
<xsd:element name="pay-trans-create-date" type="xsd:long"/>
<xsd:element name="pay-trans-recv-date" type="xsd:long"/>
<xsd:element name="pay-trans-price" type="xsd:float"/>
<xsd:element name="pay-trans-count" type="xsd:int"/>
<xsd:element name="pay-trans-postage-amount" type="xsd:float"/>
<xsd:element name="pay-trans-details" type="typens:ArrayOfPaymentDetailsStruct"/>
<xsd:element name="pay-trans-incomplete" type="xsd:int"/>
<xsd:element name="pay-trans-main-id" type="xsd:long"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserInfoStruct"><xsd:all><xsd:element name="user-id" type="xsd:int"/>
<xsd:element name="user-login" type="xsd:string"/>
<xsd:element name="user-rating" type="xsd:int"/>
<xsd:element name="user-icons" type="xsd:int"/>
<xsd:element name="user-country" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserPaymentRefundsStruct"><xsd:all><xsd:element name="pay-refund-trans-id" type="xsd:long"/>
<xsd:element name="pay-refund-it-id" type="xsd:long"/>
<xsd:element name="pay-refund-seller-id" type="xsd:int"/>
<xsd:element name="pay-refund-value" type="xsd:float"/>
<xsd:element name="pay-refund-reason" type="xsd:string"/>
<xsd:element name="pay-refund-date" type="xsd:long"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserPaymentStruct"><xsd:all><xsd:element name="pay-trans-id" type="xsd:long"/>
<xsd:element name="pay-trans-sellers" type="typens:ArrayOfPaymentSellersStruct"/>
<xsd:element name="pay-trans-type" type="xsd:string"/>
<xsd:element name="pay-trans-status" type="xsd:string"/>
<xsd:element name="pay-trans-amount" type="xsd:float"/>
<xsd:element name="pay-trans-create-date" type="xsd:long"/>
<xsd:element name="pay-trans-price" type="xsd:float"/>
<xsd:element name="pay-trans-postage-amount" type="xsd:float"/>
<xsd:element name="pay-trans-incomplete" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserPayoutStruct"><xsd:all><xsd:element name="pay-trans-id" type="xsd:long"/>
<xsd:element name="pay-trans-status" type="xsd:string"/>
<xsd:element name="pay-trans-amount" type="xsd:float"/>
<xsd:element name="pay-trans-create-date" type="xsd:long"/>
<xsd:element name="pay-trans-recv-date" type="xsd:long"/>
<xsd:element name="pay-trans-cancel-date" type="xsd:long"/>
<xsd:element name="pay-trans-report" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserPostBuyDataStruct"><xsd:all><xsd:element name="user-data" type="typens:UserDataStruct"/>
<xsd:element name="user-sent-to-data" type="typens:UserSentToDataStruct"/>
<xsd:element name="user-bank-accounts" type="typens:ArrayOfBankAccounts"/>
<xsd:element name="company-second-address" type="typens:CompanySecondAddressStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="UserSentToDataStruct"><xsd:all><xsd:element name="user-id" type="xsd:long"/>
<xsd:element name="user-first-name" type="xsd:string"/>
<xsd:element name="user-last-name" type="xsd:string"/>
<xsd:element name="user-company" type="xsd:string"/>
<xsd:element name="user-country-id" type="xsd:int"/>
<xsd:element name="user-postcode" type="xsd:string"/>
<xsd:element name="user-city" type="xsd:string"/>
<xsd:element name="user-address" type="xsd:string"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="VariantQuantityStruct"><xsd:all><xsd:element name="mask" type="xsd:int"/>
<xsd:element name="quantity" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="VariantStruct"><xsd:all><xsd:element name="fid" type="xsd:int"/>
<xsd:element name="quantities" type="typens:ArrayOfVariantQuantityStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="WaitFeedbackStruct"><xsd:all><xsd:element name="fe-item-id" type="xsd:long"/>
<xsd:element name="fe-item-name" type="xsd:string"/>
<xsd:element name="fe-to-user-id" type="xsd:int"/>
<xsd:element name="fe-op" type="xsd:int"/>
<xsd:element name="fe-ans-comment-type" type="xsd:string"/>
<xsd:element name="fe-possibility-to-add" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="WatchItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail-url" type="xsd:string"/>
<xsd:element name="item-price" type="typens:ArrayOfItemPriceStruct"/>
<xsd:element name="item-left-quantity" type="xsd:int"/>
<xsd:element name="item-quantity-type" type="xsd:int"/>
<xsd:element name="item-end-time" type="xsd:string"/>
<xsd:element name="item-end-time-left" type="xsd:string"/>
<xsd:element name="item-seller" type="typens:UserInfoStruct"/>
<xsd:element name="item-bidders-counter" type="xsd:int"/>
<xsd:element name="item-highest-bidder" type="typens:UserInfoStruct"/>
<xsd:element name="item-category-id" type="xsd:int"/>
<xsd:element name="item-views-counter" type="xsd:int"/>
<xsd:element name="item-note" type="xsd:string"/>
<xsd:element name="item-special-info" type="xsd:int"/>
<xsd:element name="item-shop-info" type="xsd:int"/>
<xsd:element name="item-product-info" type="xsd:long"/>
<xsd:element name="item-payu-info" type="xsd:int"/>
<xsd:element name="item-reminder" type="typens:ArrayOfItemReminderStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="WatchListInfoStruct"><xsd:all><xsd:element name="items-added" type="typens:ArrayOfItemsAdded"/>
<xsd:element name="items-not-added" type="typens:ArrayOfItemsNotAddedStruct"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="WatchedItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail-url" type="xsd:string"/>
<xsd:element name="item-price" type="typens:ArrayOfItemPriceStruct"/>
<xsd:element name="item-left-quantity" type="xsd:int"/>
<xsd:element name="item-quantity-type" type="xsd:int"/>
<xsd:element name="item-end-time" type="xsd:long"/>
<xsd:element name="item-seller" type="typens:UserInfoStruct"/>
<xsd:element name="item-bidders-counter" type="xsd:int"/>
<xsd:element name="item-highest-bidder" type="typens:UserInfoStruct"/>
<xsd:element name="item-category-id" type="xsd:int"/>
<xsd:element name="item-views-counter" type="xsd:int"/>
<xsd:element name="item-note" type="xsd:string"/>
<xsd:element name="item-special-info" type="xsd:int"/>
<xsd:element name="item-shop-info" type="xsd:int"/>
<xsd:element name="item-product-info" type="xsd:long"/>
<xsd:element name="item-payu-info" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
<xsd:complexType name="WonItemStruct"><xsd:all><xsd:element name="item-id" type="xsd:long"/>
<xsd:element name="item-title" type="xsd:string"/>
<xsd:element name="item-thumbnail-url" type="xsd:string"/>
<xsd:element name="item-price" type="typens:ArrayOfItemPriceStruct"/>
<xsd:element name="item-bought-quantity" type="xsd:int"/>
<xsd:element name="item-left-quantity" type="xsd:int"/>
<xsd:element name="item-quantity-type" type="xsd:int"/>
<xsd:element name="item-end-time" type="xsd:long"/>
<xsd:element name="item-end-time-left" type="xsd:string"/>
<xsd:element name="item-seller" type="typens:UserInfoStruct"/>
<xsd:element name="item-bidders-counter" type="xsd:int"/>
<xsd:element name="item-category-id" type="xsd:int"/>
<xsd:element name="item-views-counter" type="xsd:int"/>
<xsd:element name="item-note" type="xsd:string"/>
<xsd:element name="item-special-info" type="xsd:int"/>
<xsd:element name="item-shop-info" type="xsd:int"/>
<xsd:element name="item-product-info" type="xsd:long"/>
<xsd:element name="item-payu-info" type="xsd:int"/>
</xsd:all>
</xsd:complexType>
</xsd:schema>

</types>
<message name="doAddDescToItemsRequest">
<part name="session-handle" type="xsd:string" />
<part name="items-id-array" type="typens:ArrayOfItemsID" />
<part name="it-description" type="xsd:string" />
</message>
<message name="doAddDescToItemsResponse">
<part name="array-items-add-id" type="typens:ArrayOfItemsID" />
<part name="array-items-desc-to-long" type="typens:ArrayOfItemsID" />
<part name="array-items-not-found" type="typens:ArrayOfItemsID" />
</message>
<message name="doAddPackageInfoToPostBuyFormRequest">
<part name="session-id" type="xsd:string" />
<part name="transaction-id" type="xsd:long" />
<part name="package-info" type="typens:ArrayOfPackageInfoStruct" />
</message>
<message name="doAddPackageInfoToPostBuyFormResponse">
<part name="post-buy-form-package-info" type="typens:PostBuyFormPackageInfoStruct" />
</message>
<message name="doAddToBlackListRequest">
<part name="session-handle" type="xsd:string" />
<part name="users-black-list-array" type="typens:ArrayOfUserBlackListStruct" />
</message>
<message name="doAddToBlackListResponse">
<part name="user-black-list-results-arr" type="typens:ArrayOfUserBlackListAddResultStruct" />
</message>
<message name="doAddToWatchListRequest">
<part name="session-id" type="xsd:string" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
</message>
<message name="doAddToWatchListResponse">
<part name="watch-list-info" type="typens:WatchListInfoStruct" />
</message>
<message name="doBidItemRequest">
<part name="session-handle" type="xsd:string" />
<part name="bid-it-id" type="xsd:long" />
<part name="bid-user-price" type="xsd:float" />
<part name="bid-quantity" type="xsd:long" />
<part name="bid-buy-now" type="xsd:long" />
<part name="pharmacy-recipient-data" type="typens:PharmacyRecipientDataStruct" />
<part name="variant-id" type="xsd:string" />
</message>
<message name="doBidItemResponse">
<part name="bid-price" type="xsd:string" />
</message>
<message name="doCancelBidItemRequest">
<part name="session-handle" type="xsd:string" />
<part name="cancel-item-id" type="xsd:long" />
<part name="cancel-bids-array" type="typens:ArrayOfCancelBidsID" />
<part name="cancel-bids-reason" type="xsd:string" />
<part name="cancel-add-to-black-list" type="xsd:long" />
</message>
<message name="doCancelBidItemResponse">
<part name="cancel-bid-value" type="xsd:int" />
<part name="cancelled-bids" type="typens:ArrayOfCancelBidsID" />
<part name="not-cancelled-bids" type="typens:ArrayOfCancelBidsID" />
</message>
<message name="doCancelTransactionRequest">
<part name="session-id" type="xsd:string" />
<part name="transaction-id" type="xsd:long" />
</message>
<message name="doCancelTransactionResponse">
<part name="cancellation-result" type="xsd:int" />
</message>
<message name="doChangeItemFieldsRequest">
<part name="session-id" type="xsd:string" />
<part name="item-id" type="xsd:long" />
<part name="fields-to-modify" type="typens:ArrayOfFieldsValue" />
<part name="fields-to-remove" type="typens:ArrayOfFieldsId" />
<part name="preview-only" type="xsd:int" />
<part name="variants" type="typens:ArrayOfVariantStruct" />
<part name="tags" type="typens:ArrayOfTagNameStruct" />
</message>
<message name="doChangeItemFieldsResponse">
<part name="changed-item" type="typens:ChangedItemStruct" />
</message>
<message name="doChangePriceItemRequest">
<part name="session-handle" type="xsd:string" />
<part name="item-id" type="xsd:long" />
<part name="new-starting-price" type="xsd:float" />
<part name="new-reserve-price" type="xsd:float" />
<part name="new-buy-now-price" type="xsd:float" />
</message>
<message name="doChangePriceItemResponse">
<part name="item-info" type="xsd:string" />
<part name="item-id" type="xsd:long" />
</message>
<message name="doChangeQuantityItemRequest">
<part name="session-handle" type="xsd:string" />
<part name="item-id" type="xsd:long" />
<part name="new-item-quantity" type="xsd:int" />
</message>
<message name="doChangeQuantityItemResponse">
<part name="item-id" type="xsd:long" />
<part name="item-info" type="xsd:string" />
<part name="item-quantity-left" type="xsd:int" />
<part name="item-quantity-sold" type="xsd:int" />
</message>
<message name="doCheckItemDescriptionRequest">
<part name="session-id" type="xsd:string" />
<part name="description-content" type="xsd:string" />
</message>
<message name="doCheckItemDescriptionResponse">
<part name="item-description" type="typens:ItemDescriptionStruct" />
</message>
<message name="doCheckNewAuctionExtRequest">
<part name="session-handle" type="xsd:string" />
<part name="fields" type="typens:ArrayOfFieldsValue" />
<part name="variants" type="typens:ArrayOfVariantStruct" />
<part name="tags" type="typens:ArrayOfTagNameStruct" />
</message>
<message name="doCheckNewAuctionExtResponse">
<part name="item-price" type="xsd:string" />
<part name="item-price-desc" type="xsd:string" />
<part name="item-is-allegro-standard" type="xsd:int" />
</message>
<message name="doCreateItemTemplateRequest">
<part name="session-id" type="xsd:string" />
<part name="item-template-name" type="xsd:string" />
<part name="item-template-fields" type="typens:ArrayOfFieldsValue" />
</message>
<message name="doCreateItemTemplateResponse">
<part name="created-item-template" type="typens:CreatedItemTemplateStruct" />
</message>
<message name="doFeedbackRequest">
<part name="session-handle" type="xsd:string" />
<part name="fe-item-id" type="xsd:long" />
<part name="fe-use-comment-template" type="xsd:int" />
<part name="fe-to-user-id" type="xsd:int" />
<part name="fe-comment" type="xsd:string" />
<part name="fe-comment-type" type="xsd:string" />
<part name="fe-op" type="xsd:int" />
<part name="fe-rating" type="typens:ArrayOfSellRatingEstimationStruct" />
</message>
<message name="doFeedbackResponse">
<part name="feedback-id" type="xsd:int" />
</message>
<message name="doFeedbackManyRequest">
<part name="session-handle" type="xsd:string" />
<part name="feedbacks-list" type="typens:ArrayOfFeedbackManyStruct" />
</message>
<message name="doFeedbackManyResponse">
<part name="fe-results" type="typens:ArrayOfFeedbacksResult" />
</message>
<message name="doFinishItemRequest">
<part name="session-handle" type="xsd:string" />
<part name="finish-item-id" type="xsd:long" />
<part name="finish-cancel-all-bids" type="xsd:int" />
<part name="finish-cancel-reason" type="xsd:string" />
</message>
<message name="doFinishItemResponse">
<part name="finish-value" type="xsd:int" />
</message>
<message name="doFinishItemsRequest">
<part name="session-handle" type="xsd:string" />
<part name="finish-items-list" type="typens:ArrayOfFinishItemsStruct" />
</message>
<message name="doFinishItemsResponse">
<part name="finish-items-succeed" type="typens:ArrayOfFinishSuccessStruct" />
<part name="finish-items-failed" type="typens:ArrayOfFinishFailureStruct" />
</message>
<message name="doGetAdminUserLicenceDateRequest">
<part name="admin-session-handle" type="xsd:string" />
<part name="user-lic-login" type="xsd:string" />
</message>
<message name="doGetAdminUserLicenceDateResponse">
<part name="get-date-value" type="xsd:float" />
</message>
<message name="doGetBidItem2Request">
<part name="session-handle" type="xsd:string" />
<part name="item-id" type="xsd:long" />
</message>
<message name="doGetBidItem2Response">
<part name="biditem-list" type="typens:ArrayOfBidList2" />
</message>
<message name="doGetBlackListUsersRequest">
<part name="session-handle" type="xsd:string" />
</message>
<message name="doGetBlackListUsersResponse">
<part name="black-list-users" type="typens:ArrayOfBlackListStruct" />
</message>
<message name="doGetCategoryPathRequest">
<part name="session-id" type="xsd:string" />
<part name="category-id" type="xsd:int" />
</message>
<message name="doGetCategoryPathResponse">
<part name="category-path" type="typens:ArrayOfCategoryData" />
</message>
<message name="doGetCatsDataRequest">
<part name="country-id" type="xsd:int" />
<part name="local-version" type="xsd:long" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetCatsDataResponse">
<part name="cats-list" type="typens:ArrayOfCats" />
<part name="ver-key" type="xsd:long" />
<part name="ver-str" type="xsd:string" />
</message>
<message name="doGetCatsDataCountRequest">
<part name="country-id" type="xsd:int" />
<part name="local-version" type="xsd:long" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetCatsDataCountResponse">
<part name="cats-count" type="xsd:int" />
<part name="ver-key" type="xsd:long" />
<part name="ver-str" type="xsd:string" />
</message>
<message name="doGetCatsDataLimitRequest">
<part name="country-id" type="xsd:int" />
<part name="local-version" type="xsd:long" />
<part name="webapi-key" type="xsd:string" />
<part name="offset" type="xsd:int" />
<part name="package-element" type="xsd:int" />
</message>
<message name="doGetCatsDataLimitResponse">
<part name="cats-list" type="typens:ArrayOfCats" />
<part name="ver-key" type="xsd:long" />
<part name="ver-str" type="xsd:string" />
</message>
<message name="doGetCountriesRequest">
<part name="country-code" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetCountriesResponse">
<part name="country-array" type="typens:ArrayOfCountries" />
</message>
<message name="doGetDealsRequest">
<part name="session-handle" type="xsd:string" />
<part name="item-id" type="xsd:long" />
<part name="buyer-id" type="xsd:int" />
</message>
<message name="doGetDealsResponse">
<part name="deals-list" type="typens:ArrayOfDealsStruct" />
</message>
<message name="doGetFavouriteCategoriesRequest">
<part name="session-handle" type="xsd:string" />
</message>
<message name="doGetFavouriteCategoriesResponse">
<part name="s-favourite-categories-list" type="typens:ArrayOfFavouritesCategories" />
</message>
<message name="doGetFavouriteSellersRequest">
<part name="session-handle" type="xsd:string" />
</message>
<message name="doGetFavouriteSellersResponse">
<part name="s-favourite-sellers-list" type="typens:ArrayOfFavouritesSellers" />
</message>
<message name="doGetFeedbackRequest">
<part name="session-handle" type="xsd:string" />
<part name="feedback-from" type="xsd:int" />
<part name="feedback-to" type="xsd:int" />
<part name="feedback-offset" type="xsd:int" />
<part name="feedback-kind-list" type="xsd:string" />
</message>
<message name="doGetFeedbackResponse">
<part name="feedback-list" type="typens:ArrayOfFeedbackList" />
<part name="feedback-count" type="xsd:int" />
</message>
<message name="doGetFilledPostBuyFormsRequest">
<part name="session-id" type="xsd:string" />
<part name="payment-type" type="xsd:int" />
<part name="user-role" type="xsd:int" />
<part name="filling-time-from" type="xsd:long" />
<part name="filling-time-to" type="xsd:long" />
</message>
<message name="doGetFilledPostBuyFormsResponse">
<part name="filled-post-buy-forms" type="typens:FilledPostBuyFormsStruct" />
</message>
<message name="doGetItemFieldsRequest">
<part name="session-id" type="xsd:string" />
<part name="item-id" type="xsd:long" />
</message>
<message name="doGetItemFieldsResponse">
<part name="item-fields" type="typens:ArrayOfFieldsValue" />
</message>
<message name="doGetItemTemplatesRequest">
<part name="session-id" type="xsd:string" />
<part name="item-template-ids" type="typens:ArrayOfTemplatesID" />
</message>
<message name="doGetItemTemplatesResponse">
<part name="item-templates" type="typens:ItemTemplatesStruct" />
</message>
<message name="doGetItemsImagesRequest">
<part name="session-handle" type="xsd:string" />
<part name="items-array" type="typens:ArrayOfItemGetImage" />
<part name="image-type" type="xsd:int" />
</message>
<message name="doGetItemsImagesResponse">
<part name="get_items_images_result" type="typens:ArrayOfItemImagesStruct" />
</message>
<message name="doGetItemsInfoRequest">
<part name="session-handle" type="xsd:string" />
<part name="items-id-array" type="typens:ArrayOfItemsID" />
<part name="get-desc" type="xsd:int" />
<part name="get-image-url" type="xsd:int" />
<part name="get-attribs" type="xsd:int" />
<part name="get-postage-options" type="xsd:int" />
<part name="get-company-info" type="xsd:int" />
<part name="get-product-info" type="xsd:int" />
</message>
<message name="doGetItemsInfoResponse">
<part name="array-item-list-info" type="typens:ArrayOfStructItemInfoList" />
<part name="array-items-not-found" type="typens:ArrayOfItemsID" />
<part name="array-items-admin-killed" type="typens:ArrayOfItemsID" />
</message>
<message name="doGetMessageToBuyerRequest">
<part name="session-id" type="xsd:string" />
<part name="item-id" type="xsd:long" />
</message>
<message name="doGetMessageToBuyerResponse">
<part name="message-to-buyer" type="typens:MessageToBuyerStruct" />
</message>
<message name="doGetMyAddressesRequest">
<part name="session-id" type="xsd:string" />
</message>
<message name="doGetMyAddressesResponse">
<part name="addresses-info" type="typens:AddressesInfoStruct" />
</message>
<message name="doGetMyBidItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="sort-options" type="typens:SortOptionsStruct" />
<part name="search-value" type="xsd:string" />
<part name="category-id" type="xsd:int" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
</message>
<message name="doGetMyBidItemsResponse">
<part name="bid-items-counter" type="xsd:int" />
<part name="bid-items-list" type="typens:ArrayOfBidItemStruct" />
</message>
<message name="doGetMyCurrentShipmentPriceTypeRequest">
<part name="session-id" type="xsd:string" />
</message>
<message name="doGetMyCurrentShipmentPriceTypeResponse">
<part name="shipment-price-type-id" type="xsd:int" />
</message>
<message name="doGetMyDataRequest">
<part name="session-handle" type="xsd:string" />
</message>
<message name="doGetMyDataResponse">
<part name="user-data" type="typens:UserDataStruct" />
<part name="invoice-data" type="typens:InvoiceDataStruct" />
<part name="company-extra-data" type="typens:CompanyExtraDataStruct" />
<part name="company-second-address" type="typens:CompanySecondAddressStruct" />
<part name="pharmacy-data" type="typens:PharmacyDataStruct" />
<part name="alcohol-data" type="typens:AlcoholDataStruct" />
<part name="related-persons" type="typens:RelatedPersonsStruct" />
</message>
<message name="doGetMyFutureItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="sort-options" type="typens:SortOptionsStruct" />
<part name="filter-options" type="typens:FutureFilterOptionsStruct" />
<part name="category-id" type="xsd:int" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
</message>
<message name="doGetMyFutureItemsResponse">
<part name="future-items-counter" type="xsd:int" />
<part name="future-items-list" type="typens:ArrayOfFutureItemStruct" />
</message>
<message name="doGetMyIncomingPaymentsRequest">
<part name="session-handle" type="xsd:string" />
<part name="buyer-id" type="xsd:int" />
<part name="item-id" type="xsd:long" />
<part name="trans-recv-date-from" type="xsd:long" />
<part name="trans-recv-date-to" type="xsd:long" />
<part name="trans-page-limit" type="xsd:int" />
<part name="trans-offset" type="xsd:int" />
<part name="stricted-search" type="xsd:int" />
</message>
<message name="doGetMyIncomingPaymentsResponse">
<part name="pay-trans-income" type="typens:ArrayOfUserIncomingPaymentStruct" />
</message>
<message name="doGetMyIncomingPaymentsRefundsRequest">
<part name="session-handle" type="xsd:string" />
<part name="buyer-id" type="xsd:int" />
<part name="item-id" type="xsd:long" />
<part name="limit" type="xsd:int" />
<part name="offset" type="xsd:int" />
</message>
<message name="doGetMyIncomingPaymentsRefundsResponse">
<part name="pay-trans-income-refunds" type="typens:ArrayOfUserIncomingPaymentRefundsStruct" />
</message>
<message name="doGetMyNotSoldItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="sort-options" type="typens:SortOptionsStruct" />
<part name="filter-options" type="typens:NotSoldFilterOptionsStruct" />
<part name="search-value" type="xsd:string" />
<part name="category-id" type="xsd:int" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
</message>
<message name="doGetMyNotSoldItemsResponse">
<part name="not-sold-items-counter" type="xsd:int" />
<part name="not-sold-items-list" type="typens:ArrayOfNotSoldItemStruct" />
</message>
<message name="doGetMyNotWonItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="sort-options" type="typens:SortOptionsStruct" />
<part name="search-value" type="xsd:string" />
<part name="category-id" type="xsd:int" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
</message>
<message name="doGetMyNotWonItemsResponse">
<part name="not-won-items-counter" type="xsd:int" />
<part name="not-won-items-list" type="typens:ArrayOfNotWonItemStruct" />
</message>
<message name="doGetMyPaymentsRequest">
<part name="session-id" type="xsd:string" />
<part name="seller-id" type="xsd:int" />
<part name="item-id" type="xsd:long" />
<part name="payment-time-from" type="xsd:long" />
<part name="payment-time-to" type="xsd:long" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
<part name="stricted-search" type="xsd:int" />
</message>
<message name="doGetMyPaymentsResponse">
<part name="pay-trans-payment" type="typens:ArrayOfUserPaymentStruct" />
</message>
<message name="doGetMyPaymentsInfoRequest">
<part name="session-id" type="xsd:string" />
</message>
<message name="doGetMyPaymentsInfoResponse">
<part name="payments-info" type="typens:PaymentsInfoStruct" />
</message>
<message name="doGetMyPaymentsRefundsRequest">
<part name="session-handle" type="xsd:string" />
<part name="seller-id" type="xsd:int" />
<part name="item-id" type="xsd:long" />
<part name="limit" type="xsd:int" />
<part name="offset" type="xsd:int" />
</message>
<message name="doGetMyPaymentsRefundsResponse">
<part name="pay-trans-payment-refunds" type="typens:ArrayOfUserPaymentRefundsStruct" />
</message>
<message name="doGetMyPayoutsRequest">
<part name="session-handle" type="xsd:string" />
<part name="trans-create-date-from" type="xsd:long" />
<part name="trans-create-date-to" type="xsd:long" />
<part name="trans-page-limit" type="xsd:int" />
<part name="trans-offset" type="xsd:int" />
</message>
<message name="doGetMyPayoutsResponse">
<part name="pay-trans-payout" type="typens:ArrayOfUserPayoutStruct" />
</message>
<message name="doGetMySellItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="sort-options" type="typens:SortOptionsStruct" />
<part name="filter-options" type="typens:SellFilterOptionsStruct" />
<part name="search-value" type="xsd:string" />
<part name="category-id" type="xsd:int" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
</message>
<message name="doGetMySellItemsResponse">
<part name="sell-items-counter" type="xsd:int" />
<part name="sell-items-list" type="typens:ArrayOfSellItemStruct" />
</message>
<message name="doGetMySellRatingRequest">
<part name="session-handle" type="xsd:string" />
</message>
<message name="doGetMySellRatingResponse">
<part name="sell-rating-total-count" type="xsd:int" />
<part name="sell-rating-average" type="typens:ArrayOfSellRatingAverageStruct" />
<part name="sell-rating-details" type="typens:ArrayOfSellRatingDetailStruct" />
<part name="sell-rating-stats-per-month" type="typens:ArrayOfSellRatingAveragePerMonth" />
</message>
<message name="doGetMySoldItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="sort-options" type="typens:SortOptionsStruct" />
<part name="filter-options" type="typens:SoldFilterOptionsStruct" />
<part name="search-value" type="xsd:string" />
<part name="category-id" type="xsd:int" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
</message>
<message name="doGetMySoldItemsResponse">
<part name="sold-items-counter" type="xsd:int" />
<part name="sold-items-list" type="typens:ArrayOfSoldItemStruct" />
</message>
<message name="doGetMyWatchItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="sort-options" type="typens:SortOptionsStruct" />
<part name="search-value" type="xsd:string" />
<part name="category-id" type="xsd:int" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
</message>
<message name="doGetMyWatchItemsResponse">
<part name="watch-items-counter" type="xsd:int" />
<part name="watch-items-list" type="typens:ArrayOfWatchItemStruct" />
</message>
<message name="doGetMyWatchedItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="sort-options" type="typens:SortOptionsStruct" />
<part name="search-value" type="xsd:string" />
<part name="category-id" type="xsd:int" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
</message>
<message name="doGetMyWatchedItemsResponse">
<part name="watched-items-counter" type="xsd:int" />
<part name="watched-items-list" type="typens:ArrayOfWatchedItemStruct" />
</message>
<message name="doGetMyWonItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="sort-options" type="typens:SortOptionsStruct" />
<part name="search-value" type="xsd:string" />
<part name="category-id" type="xsd:int" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
<part name="page-size" type="xsd:int" />
<part name="page-number" type="xsd:int" />
</message>
<message name="doGetMyWonItemsResponse">
<part name="won-items-counter" type="xsd:int" />
<part name="won-items-list" type="typens:ArrayOfWonItemStruct" />
</message>
<message name="doGetPaymentDataRequest">
<part name="country-id" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetPaymentDataResponse">
<part name="payment-list" type="typens:ArrayOfBilling" />
</message>
<message name="doGetPaymentMethodsRequest">
<part name="session-id" type="xsd:string" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
</message>
<message name="doGetPaymentMethodsResponse">
<part name="payment-methods" type="typens:ArrayOfPaymentMethodStruct" />
</message>
<message name="doGetPostBuyDataRequest">
<part name="session-handle" type="xsd:string" />
<part name="items-array" type="typens:ArrayOfAuctionID" />
<part name="buyer-filter-array" type="typens:ArrayOfBuyerId" />
</message>
<message name="doGetPostBuyDataResponse">
<part name="items-post-buy-data" type="typens:ArrayOfItemsPostBuyData" />
</message>
<message name="doGetPostBuyFormsDataForBuyersRequest">
<part name="session-id" type="xsd:string" />
<part name="transactions-ids-array" type="typens:ArrayOfTransactionsID" />
</message>
<message name="doGetPostBuyFormsDataForBuyersResponse">
<part name="post-buy-form-data-for-buyers" type="typens:ArrayOfPostBuyFormForBuyersDataStruct" />
</message>
<message name="doGetPostBuyFormsDataForSellersRequest">
<part name="session-id" type="xsd:string" />
<part name="transactions-ids-array" type="typens:ArrayOfTransactionsID" />
</message>
<message name="doGetPostBuyFormsDataForSellersResponse">
<part name="post-buy-form-data" type="typens:ArrayOfPostBuyFormDataStruct" />
</message>
<message name="doGetPostBuyItemInfoRequest">
<part name="session-id" type="xsd:string" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
</message>
<message name="doGetPostBuyItemInfoResponse">
<part name="item-post-buy-form-info" type="typens:ArrayOfPostBuyItemInfoStruct" />
</message>
<message name="doGetRefundsDealsRequest">
<part name="session-id" type="xsd:string" />
<part name="filter-options" type="typens:ArrayOfFilterOptionsType" />
<part name="sort-order" type="xsd:string" />
<part name="result-size" type="xsd:int" />
<part name="result-offset" type="xsd:int" />
</message>
<message name="doGetRefundsDealsResponse">
<part name="deals-count" type="xsd:int" />
<part name="deals-list" type="typens:ArrayOfRefundsDealsListType" />
<part name="filters-list" type="typens:ArrayOfFiltersListType" />
</message>
<message name="doGetRefundsListRequest">
<part name="session-id" type="xsd:string" />
<part name="filter-options" type="typens:ArrayOfFilterOptionsType" />
<part name="result-size" type="xsd:int" />
<part name="result-offset" type="xsd:int" />
</message>
<message name="doGetRefundsListResponse">
<part name="refunds-count" type="xsd:int" />
<part name="refunds-list" type="typens:ArrayOfRefundListType" />
<part name="filters-list" type="typens:ArrayOfFiltersListType" />
</message>
<message name="doGetRelatedItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
</message>
<message name="doGetRelatedItemsResponse">
<part name="related-items" type="typens:RelatedItemsStruct" />
</message>
<message name="doGetSellFormAttribsRequest">
<part name="country-id" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
<part name="local-version" type="xsd:long" />
<part name="cat-id" type="xsd:int" />
</message>
<message name="doGetSellFormAttribsResponse">
<part name="sell-form-fields" type="typens:ArrayOfSellForms" />
<part name="ver-key" type="xsd:long" />
<part name="ver-str" type="xsd:string" />
</message>
<message name="doGetSellFormFieldsRequest">
<part name="country-code" type="xsd:int" />
<part name="local-version" type="xsd:long" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetSellFormFieldsResponse">
<part name="sell-form-fields" type="typens:ArrayOfSellForms" />
<part name="ver-key" type="xsd:long" />
<part name="ver-str" type="xsd:string" />
</message>
<message name="doGetSellFormFieldsExtRequest">
<part name="country-code" type="xsd:int" />
<part name="local-version" type="xsd:long" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetSellFormFieldsExtResponse">
<part name="sell-form-fields" type="typens:ArrayOfSellForms" />
<part name="ver-key" type="xsd:long" />
<part name="ver-str" type="xsd:string" />
</message>
<message name="doGetSellFormFieldsExtLimitRequest">
<part name="country-code" type="xsd:int" />
<part name="local-version" type="xsd:long" />
<part name="webapi-key" type="xsd:string" />
<part name="offset" type="xsd:int" />
<part name="package-element" type="xsd:int" />
</message>
<message name="doGetSellFormFieldsExtLimitResponse">
<part name="sell-form-fields" type="typens:ArrayOfSellForms" />
<part name="ver-key" type="xsd:long" />
<part name="ver-str" type="xsd:string" />
<part name="form-fields-count" type="xsd:int" />
</message>
<message name="doGetSellFormFieldsForCategoryRequest">
<part name="webapi-key" type="xsd:string" />
<part name="country-id" type="xsd:int" />
<part name="category-id" type="xsd:int" />
</message>
<message name="doGetSellFormFieldsForCategoryResponse">
<part name="sell-form-fields-for-category" type="typens:SellFormFieldsForCategoryStruct" />
</message>
<message name="doGetSellFormFieldsLimitRequest">
<part name="country-code" type="xsd:int" />
<part name="local-version" type="xsd:long" />
<part name="webapi-key" type="xsd:string" />
<part name="offset" type="xsd:int" />
<part name="package-element" type="xsd:int" />
</message>
<message name="doGetSellFormFieldsLimitResponse">
<part name="sell-form-fields" type="typens:ArrayOfSellForms" />
<part name="ver-key" type="xsd:long" />
<part name="ver-str" type="xsd:string" />
<part name="form-fields-count" type="xsd:int" />
</message>
<message name="doGetSellRatingReasonsRequest">
<part name="webapi-key" type="xsd:string" />
<part name="country-code" type="xsd:int" />
</message>
<message name="doGetSellRatingReasonsResponse">
<part name="sell-rating-info" type="typens:ArrayOfSellRatingInfoStruct" />
</message>
<message name="doGetSessionHandleForWidgetRequest">
<part name="webapi-key" type="xsd:string" />
<part name="country-code" type="xsd:int" />
</message>
<message name="doGetSessionHandleForWidgetResponse">
<part name="session-handle" type="xsd:string" />
<part name="server-time" type="xsd:long" />
</message>
<message name="doGetShipmentDataRequest">
<part name="country-id" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetShipmentDataResponse">
<part name="shipment-data-list" type="typens:ArrayOfShipmentDataStruct" />
<part name="local-version" type="xsd:long" />
</message>
<message name="doGetShipmentDataForRelatedItemsRequest">
<part name="session-id" type="xsd:string" />
<part name="item-ids" type="typens:ArrayOfItemsID" />
</message>
<message name="doGetShipmentDataForRelatedItemsResponse">
<part name="related-items-shipment-data" type="typens:RelatedItemsShipmentDataStruct" />
</message>
<message name="doGetShipmentPriceTypesRequest">
<part name="country-id" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetShipmentPriceTypesResponse">
<part name="shipment-price-types" type="typens:ArrayOfShipmentPriceTypeStruct" />
</message>
<message name="doGetShopsTagsRequest">
<part name="session-id" type="xsd:string" />
</message>
<message name="doGetShopsTagsResponse">
<part name="shops-tags-count" type="xsd:int" />
<part name="shops-tags" type="typens:ArrayOfShopsTagTypeStruct" />
</message>
<message name="doGetSiteJournalRequest">
<part name="session-handle" type="xsd:string" />
<part name="starting-point" type="xsd:long" />
<part name="info-type" type="xsd:int" />
</message>
<message name="doGetSiteJournalResponse">
<part name="site-journal-array" type="typens:SiteJournalArray" />
</message>
<message name="doGetSiteJournalDealsRequest">
<part name="session-id" type="xsd:string" />
<part name="journal-start" type="xsd:long" />
</message>
<message name="doGetSiteJournalDealsResponse">
<part name="site-journal-deals" type="typens:ArrayOfSiteJournalDealsStruct" />
</message>
<message name="doGetSiteJournalDealsInfoRequest">
<part name="session-id" type="xsd:string" />
<part name="journal-start" type="xsd:long" />
</message>
<message name="doGetSiteJournalDealsInfoResponse">
<part name="site-journal-deals-info" type="typens:SiteJournalDealsInfoStruct" />
</message>
<message name="doGetSiteJournalInfoRequest">
<part name="session-handle" type="xsd:string" />
<part name="starting-point" type="xsd:long" />
<part name="info-type" type="xsd:int" />
</message>
<message name="doGetSiteJournalInfoResponse">
<part name="site-journal-info" type="typens:SiteJournalInfo" />
</message>
<message name="doGetStatesInfoRequest">
<part name="country-code" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetStatesInfoResponse">
<part name="states-info-array" type="typens:ArrayOfStateInfoStruct" />
</message>
<message name="doGetSystemTimeRequest">
<part name="country-id" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetSystemTimeResponse">
<part name="server-time" type="xsd:long" />
</message>
<message name="doGetTransactionsIDsRequest">
<part name="session-handle" type="xsd:string" />
<part name="items-id-array" type="typens:ArrayOfItemsID" />
<part name="user-role" type="xsd:string" />
<part name="shipment-id-array" type="typens:ArrayOfShipmentIds" />
</message>
<message name="doGetTransactionsIDsResponse">
<part name="transactions-ids-array" type="typens:ArrayOfTransactionsID" />
</message>
<message name="doGetUserIDRequest">
<part name="country-id" type="xsd:int" />
<part name="user-login" type="xsd:string" />
<part name="user-email" type="xsd:string" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetUserIDResponse">
<part name="user-id" type="xsd:int" />
</message>
<message name="doGetUserLicenceDateRequest">
<part name="session-handle" type="xsd:string" />
</message>
<message name="doGetUserLicenceDateResponse">
<part name="get-date-value" type="xsd:float" />
</message>
<message name="doGetUserLoginRequest">
<part name="country-id" type="xsd:int" />
<part name="user-id" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doGetUserLoginResponse">
<part name="user-login" type="xsd:string" />
</message>
<message name="doGetWaitingFeedbacksRequest">
<part name="session-handle" type="xsd:string" />
<part name="offset" type="xsd:int" />
<part name="package-size" type="xsd:int" />
</message>
<message name="doGetWaitingFeedbacksResponse">
<part name="fe-wait-list" type="typens:ArrayOfWaitFeedbackStruct" />
</message>
<message name="doGetWaitingFeedbacksCountRequest">
<part name="session-handle" type="xsd:string" />
</message>
<message name="doGetWaitingFeedbacksCountResponse">
<part name="feedback-count" type="xsd:int" />
</message>
<message name="doLoginRequest">
<part name="user-login" type="xsd:string" />
<part name="user-password" type="xsd:string" />
<part name="country-code" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
<part name="local-version" type="xsd:long" />
</message>
<message name="doLoginResponse">
<part name="session-handle-part" type="xsd:string" />
<part name="user-id" type="xsd:long" />
<part name="server-time" type="xsd:long" />
</message>
<message name="doLoginEncRequest">
<part name="user-login" type="xsd:string" />
<part name="user-hash-password" type="xsd:string" />
<part name="country-code" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
<part name="local-version" type="xsd:long" />
</message>
<message name="doLoginEncResponse">
<part name="session-handle-part" type="xsd:string" />
<part name="user-id" type="xsd:long" />
<part name="server-time" type="xsd:long" />
</message>
<message name="doLoginWithAccessTokenRequest">
<part name="access-token" type="xsd:string" />
<part name="country-code" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doLoginWithAccessTokenResponse">
<part name="session-handle-part" type="xsd:string" />
<part name="user-id" type="xsd:long" />
<part name="server-time" type="xsd:long" />
</message>
<message name="doMyAccount2Request">
<part name="session-handle" type="xsd:string" />
<part name="account-type" type="xsd:string" />
<part name="offset" type="xsd:int" />
<part name="items-array" type="typens:ArrayOfAuctionID" />
<part name="limit" type="xsd:int" />
</message>
<message name="doMyAccount2Response">
<part name="myaccount-list" type="typens:ArrayOfMyAccountList2" />
</message>
<message name="doMyAccountItemsCountRequest">
<part name="session-handle" type="xsd:string" />
<part name="account-type" type="xsd:string" />
<part name="items-array" type="typens:ArrayOfAuctionID" />
</message>
<message name="doMyAccountItemsCountResponse">
<part name="myaccount-items-count" type="xsd:int" />
</message>
<message name="doMyBillingRequest">
<part name="session-handle" type="xsd:string" />
</message>
<message name="doMyBillingResponse">
<part name="my-billing" type="xsd:string" />
</message>
<message name="doMyBillingItemRequest">
<part name="session-handle" type="xsd:string" />
<part name="item-id" type="xsd:long" />
<part name="option" type="xsd:string" />
</message>
<message name="doMyBillingItemResponse">
<part name="entry-fees" type="typens:ItemBillingList" />
<part name="ending-fees" type="typens:ItemBillingList" />
</message>
<message name="doMyContactRequest">
<part name="session-handle" type="xsd:string" />
<part name="auction-id-list" type="typens:ArrayOfAuctionID" />
<part name="offset" type="xsd:int" />
<part name="desc" type="xsd:int" />
</message>
<message name="doMyContactResponse">
<part name="mycontact-list" type="typens:ArrayOfMyContactList" />
</message>
<message name="doMyFeedback2Request">
<part name="session-handle" type="xsd:string" />
<part name="feedback-type" type="xsd:string" />
<part name="offset" type="xsd:int" />
<part name="desc" type="xsd:int" />
<part name="items-array" type="typens:ArrayOfAuctionID" />
</message>
<message name="doMyFeedback2Response">
<part name="myfeedback-list" type="typens:ArrayOfMyFeedbackList2" />
</message>
<message name="doMyFeedback2LimitRequest">
<part name="session-handle" type="xsd:string" />
<part name="feedback-type" type="xsd:string" />
<part name="offset" type="xsd:int" />
<part name="desc" type="xsd:int" />
<part name="items-array" type="typens:ArrayOfAuctionID" />
<part name="package-element" type="xsd:int" />
</message>
<message name="doMyFeedback2LimitResponse">
<part name="myfeedback-list" type="typens:ArrayOfMyFeedbackList2" />
</message>
<message name="doNewAuctionExtRequest">
<part name="session-handle" type="xsd:string" />
<part name="fields" type="typens:ArrayOfFieldsValue" />
<part name="item-template-id" type="xsd:int" />
<part name="local-id" type="xsd:int" />
<part name="item-template-create" type="typens:ItemTemplateCreateStruct" />
<part name="variants" type="typens:ArrayOfVariantStruct" />
<part name="tags" type="typens:ArrayOfTagNameStruct" />
</message>
<message name="doNewAuctionExtResponse">
<part name="item-id" type="xsd:long" />
<part name="item-info" type="xsd:string" />
<part name="item-is-allegro-standard" type="xsd:int" />
</message>
<message name="doQueryAllSysStatusRequest">
<part name="country-id" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doQueryAllSysStatusResponse">
<part name="sys-country-status" type="typens:ArrayOfSysStatus" />
</message>
<message name="doQuerySysStatusRequest">
<part name="sysvar" type="xsd:int" />
<part name="country-id" type="xsd:int" />
<part name="webapi-key" type="xsd:string" />
</message>
<message name="doQuerySysStatusResponse">
<part name="info" type="xsd:string" />
<part name="ver-key" type="xsd:long" />
</message>
<message name="doRemoveFromBlackListRequest">
<part name="session-handle" type="xsd:string" />
<part name="users-id-array" type="typens:ArrayOfUsersID" />
</message>
<message name="doRemoveFromBlackListResponse">
<part name="black-list-result" type="typens:ArrayOfBlackListResStruct" />
</message>
<message name="doRemoveFromWatchListRequest">
<part name="session-handle" type="xsd:string" />
<part name="items-id-array" type="typens:ArrayOfItemsID" />
</message>
<message name="doRemoveFromWatchListResponse">
<part name="watch-list-result" type="typens:ArrayOfItemRemoveWatchStruct" />
</message>
<message name="doRemoveItemTemplatesRequest">
<part name="session-id" type="xsd:string" />
<part name="item-template-ids" type="typens:ArrayOfTemplatesID" />
</message>
<message name="doRemoveItemTemplatesResponse">
<part name="removed-item-templates" type="typens:RemovedItemTemplatesStruct" />
</message>
<message name="doRequestCancelBidRequest">
<part name="session-handle" type="xsd:string" />
<part name="request-item-id" type="xsd:long" />
<part name="request-cancel-reason" type="xsd:string" />
</message>
<message name="doRequestCancelBidResponse">
<part name="request-value" type="xsd:int" />
</message>
<message name="doRequestPayoutRequest">
<part name="session-id" type="xsd:string" />
</message>
<message name="doRequestPayoutResponse">
<part name="request-payout" type="typens:RequestPayoutStruct" />
</message>
<message name="doRequestSurchargeRequest">
<part name="session-handle" type="xsd:string" />
<part name="transaction-id" type="xsd:long" />
<part name="surcharge-value" type="xsd:float" />
<part name="surcharge-message-to-buyer" type="xsd:string" />
</message>
<message name="doRequestSurchargeResponse">
<part name="surcharge-result" type="xsd:int" />
</message>
<message name="doSellSomeAgainRequest">
<part name="session-handle" type="xsd:string" />
<part name="sell-items-array" type="typens:ArrayOfItemsID" />
<part name="sell-starting-time" type="xsd:long" />
<part name="sell-auction-duration" type="xsd:int" />
<part name="sell-options" type="xsd:int" />
<part name="local-ids" type="typens:ArrayOfLocalIds" />
<part name="sell-prolong-options" type="xsd:int" />
</message>
<message name="doSellSomeAgainResponse">
<part name="items-sell-again" type="typens:ArrayOfStructSellAgain" />
<part name="items-sell-failed" type="typens:ArrayOfStructSellFailed" />
<part name="items-sell-not-found" type="typens:ArrayOfItemsID" />
</message>
<message name="doSellSomeAgainInShopRequest">
<part name="session-handle" type="xsd:string" />
<part name="sell-items-array" type="typens:ArrayOfItemsID" />
<part name="sell-starting-time" type="xsd:long" />
<part name="sell-shop-duration" type="xsd:int" />
<part name="sell-shop-options" type="xsd:int" />
<part name="sell-prolong-options" type="xsd:int" />
<part name="sell-shop-category" type="xsd:long" />
<part name="local-ids" type="typens:ArrayOfLocalIds" />
</message>
<message name="doSellSomeAgainInShopResponse">
<part name="items-sell-again" type="typens:ArrayOfStructSellAgain" />
<part name="items-sell-failed" type="typens:ArrayOfStructSellFailed" />
<part name="items-sell-not-found" type="typens:ArrayOfItemsID" />
</message>
<message name="doSendEmailToUserRequest">
<part name="session-handle" type="xsd:string" />
<part name="mail-to-user-item-id" type="xsd:long" />
<part name="mail-to-user-receiver-id" type="xsd:long" />
<part name="mail-to-user-subject-id" type="xsd:int" />
<part name="mail-to-user-option" type="xsd:int" />
<part name="mail-to-user-message" type="xsd:string" />
</message>
<message name="doSendEmailToUserResponse">
<part name="mail-to-user-receiver-id" type="xsd:long" />
<part name="mail-to-user-result" type="xsd:string" />
</message>
<message name="doSendPostBuyFormRequest">
<part name="session-id" type="xsd:string" />
<part name="new-post-buy-form-seller" type="typens:ArrayOfNewPostBuyFormSellerStruct" />
<part name="new-post-buy-form-common" type="typens:NewPostBuyFormCommonStruct" />
</message>
<message name="doSendPostBuyFormResponse">
<part name="post-buy-form" type="typens:PostBuyFormStruct" />
</message>
<message name="doSetShipmentPriceTypeRequest">
<part name="session-id" type="xsd:string" />
<part name="shipment-price-type-id" type="xsd:int" />
</message>
<message name="doSetShipmentPriceTypeResponse">
<part name="operation-result" type="xsd:int" />
</message>
<message name="doSetUserLicenceDateRequest">
<part name="admin-session-handle" type="xsd:string" />
<part name="user-lic-login" type="xsd:string" />
<part name="user-lic-country" type="xsd:int" />
<part name="user-lic-date" type="xsd:float" />
</message>
<message name="doSetUserLicenceDateResponse">
<part name="set-date-value" type="xsd:int" />
</message>
<message name="doShowItemInfoExtRequest">
<part name="session-handle" type="xsd:string" />
<part name="item-id" type="xsd:long" />
<part name="get-desc" type="xsd:int" />
<part name="get-image-url" type="xsd:int" />
<part name="get-attribs" type="xsd:int" />
<part name="get-postage-options" type="xsd:int" />
<part name="get-company-info" type="xsd:int" />
<part name="get-product-info" type="xsd:int" />
</message>
<message name="doShowItemInfoExtResponse">
<part name="item-list-info-ext" type="typens:ItemInfoExt" />
<part name="item-cat-path" type="typens:ArrayOfItemCatList" />
<part name="item-img-list" type="typens:ArrayOfItemImageList" />
<part name="item-attrib-list" type="typens:ArrayOfAttribStruct" />
<part name="item-postage-options" type="typens:ArrayOfPostageStruct" />
<part name="item-payment-options" type="typens:ItemPaymentOptions" />
<part name="item-company-info" type="typens:CompanyInfoStruct" />
<part name="item-product-info" type="typens:ProductStruct" />
<part name="item-variants" type="typens:ArrayOfItemVariantStruct" />
</message>
<message name="doShowUserRequest">
<part name="webapi-key" type="xsd:string" />
<part name="country-id" type="xsd:int" />
<part name="user-id" type="xsd:long" />
<part name="user-login" type="xsd:string" />
</message>
<message name="doShowUserResponse">
<part name="user-id" type="xsd:long" />
<part name="user-login" type="xsd:string" />
<part name="user-country" type="xsd:int" />
<part name="user-create-date" type="xsd:long" />
<part name="user-login-date" type="xsd:long" />
<part name="user-rating" type="xsd:int" />
<part name="user-is-new-user" type="xsd:int" />
<part name="user-not-activated" type="xsd:int" />
<part name="user-closed" type="xsd:int" />
<part name="user-blocked" type="xsd:int" />
<part name="user-terminated" type="xsd:int" />
<part name="user-has-page" type="xsd:int" />
<part name="user-is-sseller" type="xsd:int" />
<part name="user-is-eco" type="xsd:int" />
<part name="user-positive-feedback" type="typens:ShowUserFeedbacks" />
<part name="user-negative-feedback" type="typens:ShowUserFeedbacks" />
<part name="user-neutral-feedback" type="typens:ShowUserFeedbacks" />
<part name="user-junior-status" type="xsd:int" />
<part name="user-has-shop" type="xsd:int" />
<part name="user-company-icon" type="xsd:int" />
<part name="user-sell-rating-count" type="xsd:int" />
<part name="user-sell-rating-average" type="typens:ArrayOfSellRatingAverageStruct" />
<part name="user-is-allegro-standard" type="xsd:int" />
<part name="user-is-b2c-seller" type="xsd:int" />
</message>
<message name="doVerifyItemRequest">
<part name="session-handle" type="xsd:string" />
<part name="local-id" type="xsd:int" />
</message>
<message name="doVerifyItemResponse">
<part name="item-id" type="xsd:long" />
<part name="item-listed" type="xsd:int" />
<part name="item-starting-time" type="xsd:long" />
</message>
<portType name="AllegroWebApiPortType">
<operation name="doAddDescToItems">
<input message="typens:doAddDescToItemsRequest"/>
<output message="typens:doAddDescToItemsResponse"/>
</operation>
<operation name="doAddPackageInfoToPostBuyForm">
<input message="typens:doAddPackageInfoToPostBuyFormRequest"/>
<output message="typens:doAddPackageInfoToPostBuyFormResponse"/>
</operation>
<operation name="doAddToBlackList">
<input message="typens:doAddToBlackListRequest"/>
<output message="typens:doAddToBlackListResponse"/>
</operation>
<operation name="doAddToWatchList">
<input message="typens:doAddToWatchListRequest"/>
<output message="typens:doAddToWatchListResponse"/>
</operation>
<operation name="doBidItem">
<input message="typens:doBidItemRequest"/>
<output message="typens:doBidItemResponse"/>
</operation>
<operation name="doCancelBidItem">
<input message="typens:doCancelBidItemRequest"/>
<output message="typens:doCancelBidItemResponse"/>
</operation>
<operation name="doCancelTransaction">
<input message="typens:doCancelTransactionRequest"/>
<output message="typens:doCancelTransactionResponse"/>
</operation>
<operation name="doChangeItemFields">
<input message="typens:doChangeItemFieldsRequest"/>
<output message="typens:doChangeItemFieldsResponse"/>
</operation>
<operation name="doChangePriceItem">
<input message="typens:doChangePriceItemRequest"/>
<output message="typens:doChangePriceItemResponse"/>
</operation>
<operation name="doChangeQuantityItem">
<input message="typens:doChangeQuantityItemRequest"/>
<output message="typens:doChangeQuantityItemResponse"/>
</operation>
<operation name="doCheckItemDescription">
<input message="typens:doCheckItemDescriptionRequest"/>
<output message="typens:doCheckItemDescriptionResponse"/>
</operation>
<operation name="doCheckNewAuctionExt">
<input message="typens:doCheckNewAuctionExtRequest"/>
<output message="typens:doCheckNewAuctionExtResponse"/>
</operation>
<operation name="doCreateItemTemplate">
<input message="typens:doCreateItemTemplateRequest"/>
<output message="typens:doCreateItemTemplateResponse"/>
</operation>
<operation name="doFeedback">
<input message="typens:doFeedbackRequest"/>
<output message="typens:doFeedbackResponse"/>
</operation>
<operation name="doFeedbackMany">
<input message="typens:doFeedbackManyRequest"/>
<output message="typens:doFeedbackManyResponse"/>
</operation>
<operation name="doFinishItem">
<input message="typens:doFinishItemRequest"/>
<output message="typens:doFinishItemResponse"/>
</operation>
<operation name="doFinishItems">
<input message="typens:doFinishItemsRequest"/>
<output message="typens:doFinishItemsResponse"/>
</operation>
<operation name="doGetAdminUserLicenceDate">
<input message="typens:doGetAdminUserLicenceDateRequest"/>
<output message="typens:doGetAdminUserLicenceDateResponse"/>
</operation>
<operation name="doGetBidItem2">
<input message="typens:doGetBidItem2Request"/>
<output message="typens:doGetBidItem2Response"/>
</operation>
<operation name="doGetBlackListUsers">
<input message="typens:doGetBlackListUsersRequest"/>
<output message="typens:doGetBlackListUsersResponse"/>
</operation>
<operation name="doGetCategoryPath">
<input message="typens:doGetCategoryPathRequest"/>
<output message="typens:doGetCategoryPathResponse"/>
</operation>
<operation name="doGetCatsData">
<input message="typens:doGetCatsDataRequest"/>
<output message="typens:doGetCatsDataResponse"/>
</operation>
<operation name="doGetCatsDataCount">
<input message="typens:doGetCatsDataCountRequest"/>
<output message="typens:doGetCatsDataCountResponse"/>
</operation>
<operation name="doGetCatsDataLimit">
<input message="typens:doGetCatsDataLimitRequest"/>
<output message="typens:doGetCatsDataLimitResponse"/>
</operation>
<operation name="doGetCountries">
<input message="typens:doGetCountriesRequest"/>
<output message="typens:doGetCountriesResponse"/>
</operation>
<operation name="doGetDeals">
<input message="typens:doGetDealsRequest"/>
<output message="typens:doGetDealsResponse"/>
</operation>
<operation name="doGetFavouriteCategories">
<input message="typens:doGetFavouriteCategoriesRequest"/>
<output message="typens:doGetFavouriteCategoriesResponse"/>
</operation>
<operation name="doGetFavouriteSellers">
<input message="typens:doGetFavouriteSellersRequest"/>
<output message="typens:doGetFavouriteSellersResponse"/>
</operation>
<operation name="doGetFeedback">
<input message="typens:doGetFeedbackRequest"/>
<output message="typens:doGetFeedbackResponse"/>
</operation>
<operation name="doGetFilledPostBuyForms">
<input message="typens:doGetFilledPostBuyFormsRequest"/>
<output message="typens:doGetFilledPostBuyFormsResponse"/>
</operation>
<operation name="doGetItemFields">
<input message="typens:doGetItemFieldsRequest"/>
<output message="typens:doGetItemFieldsResponse"/>
</operation>
<operation name="doGetItemTemplates">
<input message="typens:doGetItemTemplatesRequest"/>
<output message="typens:doGetItemTemplatesResponse"/>
</operation>
<operation name="doGetItemsImages">
<input message="typens:doGetItemsImagesRequest"/>
<output message="typens:doGetItemsImagesResponse"/>
</operation>
<operation name="doGetItemsInfo">
<input message="typens:doGetItemsInfoRequest"/>
<output message="typens:doGetItemsInfoResponse"/>
</operation>
<operation name="doGetMessageToBuyer">
<input message="typens:doGetMessageToBuyerRequest"/>
<output message="typens:doGetMessageToBuyerResponse"/>
</operation>
<operation name="doGetMyAddresses">
<input message="typens:doGetMyAddressesRequest"/>
<output message="typens:doGetMyAddressesResponse"/>
</operation>
<operation name="doGetMyBidItems">
<input message="typens:doGetMyBidItemsRequest"/>
<output message="typens:doGetMyBidItemsResponse"/>
</operation>
<operation name="doGetMyCurrentShipmentPriceType">
<input message="typens:doGetMyCurrentShipmentPriceTypeRequest"/>
<output message="typens:doGetMyCurrentShipmentPriceTypeResponse"/>
</operation>
<operation name="doGetMyData">
<input message="typens:doGetMyDataRequest"/>
<output message="typens:doGetMyDataResponse"/>
</operation>
<operation name="doGetMyFutureItems">
<input message="typens:doGetMyFutureItemsRequest"/>
<output message="typens:doGetMyFutureItemsResponse"/>
</operation>
<operation name="doGetMyIncomingPayments">
<input message="typens:doGetMyIncomingPaymentsRequest"/>
<output message="typens:doGetMyIncomingPaymentsResponse"/>
</operation>
<operation name="doGetMyIncomingPaymentsRefunds">
<input message="typens:doGetMyIncomingPaymentsRefundsRequest"/>
<output message="typens:doGetMyIncomingPaymentsRefundsResponse"/>
</operation>
<operation name="doGetMyNotSoldItems">
<input message="typens:doGetMyNotSoldItemsRequest"/>
<output message="typens:doGetMyNotSoldItemsResponse"/>
</operation>
<operation name="doGetMyNotWonItems">
<input message="typens:doGetMyNotWonItemsRequest"/>
<output message="typens:doGetMyNotWonItemsResponse"/>
</operation>
<operation name="doGetMyPayments">
<input message="typens:doGetMyPaymentsRequest"/>
<output message="typens:doGetMyPaymentsResponse"/>
</operation>
<operation name="doGetMyPaymentsInfo">
<input message="typens:doGetMyPaymentsInfoRequest"/>
<output message="typens:doGetMyPaymentsInfoResponse"/>
</operation>
<operation name="doGetMyPaymentsRefunds">
<input message="typens:doGetMyPaymentsRefundsRequest"/>
<output message="typens:doGetMyPaymentsRefundsResponse"/>
</operation>
<operation name="doGetMyPayouts">
<input message="typens:doGetMyPayoutsRequest"/>
<output message="typens:doGetMyPayoutsResponse"/>
</operation>
<operation name="doGetMySellItems">
<input message="typens:doGetMySellItemsRequest"/>
<output message="typens:doGetMySellItemsResponse"/>
</operation>
<operation name="doGetMySellRating">
<input message="typens:doGetMySellRatingRequest"/>
<output message="typens:doGetMySellRatingResponse"/>
</operation>
<operation name="doGetMySoldItems">
<input message="typens:doGetMySoldItemsRequest"/>
<output message="typens:doGetMySoldItemsResponse"/>
</operation>
<operation name="doGetMyWatchItems">
<input message="typens:doGetMyWatchItemsRequest"/>
<output message="typens:doGetMyWatchItemsResponse"/>
</operation>
<operation name="doGetMyWatchedItems">
<input message="typens:doGetMyWatchedItemsRequest"/>
<output message="typens:doGetMyWatchedItemsResponse"/>
</operation>
<operation name="doGetMyWonItems">
<input message="typens:doGetMyWonItemsRequest"/>
<output message="typens:doGetMyWonItemsResponse"/>
</operation>
<operation name="doGetPaymentData">
<input message="typens:doGetPaymentDataRequest"/>
<output message="typens:doGetPaymentDataResponse"/>
</operation>
<operation name="doGetPaymentMethods">
<input message="typens:doGetPaymentMethodsRequest"/>
<output message="typens:doGetPaymentMethodsResponse"/>
</operation>
<operation name="doGetPostBuyData">
<input message="typens:doGetPostBuyDataRequest"/>
<output message="typens:doGetPostBuyDataResponse"/>
</operation>
<operation name="doGetPostBuyFormsDataForBuyers">
<input message="typens:doGetPostBuyFormsDataForBuyersRequest"/>
<output message="typens:doGetPostBuyFormsDataForBuyersResponse"/>
</operation>
<operation name="doGetPostBuyFormsDataForSellers">
<input message="typens:doGetPostBuyFormsDataForSellersRequest"/>
<output message="typens:doGetPostBuyFormsDataForSellersResponse"/>
</operation>
<operation name="doGetPostBuyItemInfo">
<input message="typens:doGetPostBuyItemInfoRequest"/>
<output message="typens:doGetPostBuyItemInfoResponse"/>
</operation>
<operation name="doGetRefundsDeals">
<input message="typens:doGetRefundsDealsRequest"/>
<output message="typens:doGetRefundsDealsResponse"/>
</operation>
<operation name="doGetRefundsList">
<input message="typens:doGetRefundsListRequest"/>
<output message="typens:doGetRefundsListResponse"/>
</operation>
<operation name="doGetRelatedItems">
<input message="typens:doGetRelatedItemsRequest"/>
<output message="typens:doGetRelatedItemsResponse"/>
</operation>
<operation name="doGetSellFormAttribs">
<input message="typens:doGetSellFormAttribsRequest"/>
<output message="typens:doGetSellFormAttribsResponse"/>
</operation>
<operation name="doGetSellFormFields">
<input message="typens:doGetSellFormFieldsRequest"/>
<output message="typens:doGetSellFormFieldsResponse"/>
</operation>
<operation name="doGetSellFormFieldsExt">
<input message="typens:doGetSellFormFieldsExtRequest"/>
<output message="typens:doGetSellFormFieldsExtResponse"/>
</operation>
<operation name="doGetSellFormFieldsExtLimit">
<input message="typens:doGetSellFormFieldsExtLimitRequest"/>
<output message="typens:doGetSellFormFieldsExtLimitResponse"/>
</operation>
<operation name="doGetSellFormFieldsForCategory">
<input message="typens:doGetSellFormFieldsForCategoryRequest"/>
<output message="typens:doGetSellFormFieldsForCategoryResponse"/>
</operation>
<operation name="doGetSellFormFieldsLimit">
<input message="typens:doGetSellFormFieldsLimitRequest"/>
<output message="typens:doGetSellFormFieldsLimitResponse"/>
</operation>
<operation name="doGetSellRatingReasons">
<input message="typens:doGetSellRatingReasonsRequest"/>
<output message="typens:doGetSellRatingReasonsResponse"/>
</operation>
<operation name="doGetSessionHandleForWidget">
<input message="typens:doGetSessionHandleForWidgetRequest"/>
<output message="typens:doGetSessionHandleForWidgetResponse"/>
</operation>
<operation name="doGetShipmentData">
<input message="typens:doGetShipmentDataRequest"/>
<output message="typens:doGetShipmentDataResponse"/>
</operation>
<operation name="doGetShipmentDataForRelatedItems">
<input message="typens:doGetShipmentDataForRelatedItemsRequest"/>
<output message="typens:doGetShipmentDataForRelatedItemsResponse"/>
</operation>
<operation name="doGetShipmentPriceTypes">
<input message="typens:doGetShipmentPriceTypesRequest"/>
<output message="typens:doGetShipmentPriceTypesResponse"/>
</operation>
<operation name="doGetShopsTags">
<input message="typens:doGetShopsTagsRequest"/>
<output message="typens:doGetShopsTagsResponse"/>
</operation>
<operation name="doGetSiteJournal">
<input message="typens:doGetSiteJournalRequest"/>
<output message="typens:doGetSiteJournalResponse"/>
</operation>
<operation name="doGetSiteJournalDeals">
<input message="typens:doGetSiteJournalDealsRequest"/>
<output message="typens:doGetSiteJournalDealsResponse"/>
</operation>
<operation name="doGetSiteJournalDealsInfo">
<input message="typens:doGetSiteJournalDealsInfoRequest"/>
<output message="typens:doGetSiteJournalDealsInfoResponse"/>
</operation>
<operation name="doGetSiteJournalInfo">
<input message="typens:doGetSiteJournalInfoRequest"/>
<output message="typens:doGetSiteJournalInfoResponse"/>
</operation>
<operation name="doGetStatesInfo">
<input message="typens:doGetStatesInfoRequest"/>
<output message="typens:doGetStatesInfoResponse"/>
</operation>
<operation name="doGetSystemTime">
<input message="typens:doGetSystemTimeRequest"/>
<output message="typens:doGetSystemTimeResponse"/>
</operation>
<operation name="doGetTransactionsIDs">
<input message="typens:doGetTransactionsIDsRequest"/>
<output message="typens:doGetTransactionsIDsResponse"/>
</operation>
<operation name="doGetUserID">
<input message="typens:doGetUserIDRequest"/>
<output message="typens:doGetUserIDResponse"/>
</operation>
<operation name="doGetUserLicenceDate">
<input message="typens:doGetUserLicenceDateRequest"/>
<output message="typens:doGetUserLicenceDateResponse"/>
</operation>
<operation name="doGetUserLogin">
<input message="typens:doGetUserLoginRequest"/>
<output message="typens:doGetUserLoginResponse"/>
</operation>
<operation name="doGetWaitingFeedbacks">
<input message="typens:doGetWaitingFeedbacksRequest"/>
<output message="typens:doGetWaitingFeedbacksResponse"/>
</operation>
<operation name="doGetWaitingFeedbacksCount">
<input message="typens:doGetWaitingFeedbacksCountRequest"/>
<output message="typens:doGetWaitingFeedbacksCountResponse"/>
</operation>
<operation name="doLogin">
<input message="typens:doLoginRequest"/>
<output message="typens:doLoginResponse"/>
</operation>
<operation name="doLoginEnc">
<input message="typens:doLoginEncRequest"/>
<output message="typens:doLoginEncResponse"/>
</operation>
<operation name="doLoginWithAccessToken">
<input message="typens:doLoginWithAccessTokenRequest"/>
<output message="typens:doLoginWithAccessTokenResponse"/>
</operation>
<operation name="doMyAccount2">
<input message="typens:doMyAccount2Request"/>
<output message="typens:doMyAccount2Response"/>
</operation>
<operation name="doMyAccountItemsCount">
<input message="typens:doMyAccountItemsCountRequest"/>
<output message="typens:doMyAccountItemsCountResponse"/>
</operation>
<operation name="doMyBilling">
<input message="typens:doMyBillingRequest"/>
<output message="typens:doMyBillingResponse"/>
</operation>
<operation name="doMyBillingItem">
<input message="typens:doMyBillingItemRequest"/>
<output message="typens:doMyBillingItemResponse"/>
</operation>
<operation name="doMyContact">
<input message="typens:doMyContactRequest"/>
<output message="typens:doMyContactResponse"/>
</operation>
<operation name="doMyFeedback2">
<input message="typens:doMyFeedback2Request"/>
<output message="typens:doMyFeedback2Response"/>
</operation>
<operation name="doMyFeedback2Limit">
<input message="typens:doMyFeedback2LimitRequest"/>
<output message="typens:doMyFeedback2LimitResponse"/>
</operation>
<operation name="doNewAuctionExt">
<input message="typens:doNewAuctionExtRequest"/>
<output message="typens:doNewAuctionExtResponse"/>
</operation>
<operation name="doQueryAllSysStatus">
<input message="typens:doQueryAllSysStatusRequest"/>
<output message="typens:doQueryAllSysStatusResponse"/>
</operation>
<operation name="doQuerySysStatus">
<input message="typens:doQuerySysStatusRequest"/>
<output message="typens:doQuerySysStatusResponse"/>
</operation>
<operation name="doRemoveFromBlackList">
<input message="typens:doRemoveFromBlackListRequest"/>
<output message="typens:doRemoveFromBlackListResponse"/>
</operation>
<operation name="doRemoveFromWatchList">
<input message="typens:doRemoveFromWatchListRequest"/>
<output message="typens:doRemoveFromWatchListResponse"/>
</operation>
<operation name="doRemoveItemTemplates">
<input message="typens:doRemoveItemTemplatesRequest"/>
<output message="typens:doRemoveItemTemplatesResponse"/>
</operation>
<operation name="doRequestCancelBid">
<input message="typens:doRequestCancelBidRequest"/>
<output message="typens:doRequestCancelBidResponse"/>
</operation>
<operation name="doRequestPayout">
<input message="typens:doRequestPayoutRequest"/>
<output message="typens:doRequestPayoutResponse"/>
</operation>
<operation name="doRequestSurcharge">
<input message="typens:doRequestSurchargeRequest"/>
<output message="typens:doRequestSurchargeResponse"/>
</operation>
<operation name="doSellSomeAgain">
<input message="typens:doSellSomeAgainRequest"/>
<output message="typens:doSellSomeAgainResponse"/>
</operation>
<operation name="doSellSomeAgainInShop">
<input message="typens:doSellSomeAgainInShopRequest"/>
<output message="typens:doSellSomeAgainInShopResponse"/>
</operation>
<operation name="doSendEmailToUser">
<input message="typens:doSendEmailToUserRequest"/>
<output message="typens:doSendEmailToUserResponse"/>
</operation>
<operation name="doSendPostBuyForm">
<input message="typens:doSendPostBuyFormRequest"/>
<output message="typens:doSendPostBuyFormResponse"/>
</operation>
<operation name="doSetShipmentPriceType">
<input message="typens:doSetShipmentPriceTypeRequest"/>
<output message="typens:doSetShipmentPriceTypeResponse"/>
</operation>
<operation name="doSetUserLicenceDate">
<input message="typens:doSetUserLicenceDateRequest"/>
<output message="typens:doSetUserLicenceDateResponse"/>
</operation>
<operation name="doShowItemInfoExt">
<input message="typens:doShowItemInfoExtRequest"/>
<output message="typens:doShowItemInfoExtResponse"/>
</operation>
<operation name="doShowUser">
<input message="typens:doShowUserRequest"/>
<output message="typens:doShowUserResponse"/>
</operation>
<operation name="doVerifyItem">
<input message="typens:doVerifyItemRequest"/>
<output message="typens:doVerifyItemResponse"/>
</operation>
</portType>
<binding name="AllegroWebApiBinding" type="typens:AllegroWebApiPortType">
<soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
<operation name="doAddDescToItems">
<soap:operation soapAction="#doadddesctoitems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doAddPackageInfoToPostBuyForm">
<soap:operation soapAction="#doaddpackageinfotopostbuyform"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doAddToBlackList">
<soap:operation soapAction="#doaddtoblacklist"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doAddToWatchList">
<soap:operation soapAction="#doaddtowatchlist"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doBidItem">
<soap:operation soapAction="#dobiditem"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doCancelBidItem">
<soap:operation soapAction="#docancelbiditem"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doCancelTransaction">
<soap:operation soapAction="#docanceltransaction"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doChangeItemFields">
<soap:operation soapAction="#dochangeitemfields"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doChangePriceItem">
<soap:operation soapAction="#dochangepriceitem"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doChangeQuantityItem">
<soap:operation soapAction="#dochangequantityitem"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doCheckItemDescription">
<soap:operation soapAction="#docheckitemdescription"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doCheckNewAuctionExt">
<soap:operation soapAction="#dochecknewauctionext"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doCreateItemTemplate">
<soap:operation soapAction="#docreateitemtemplate"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doFeedback">
<soap:operation soapAction="#dofeedback"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doFeedbackMany">
<soap:operation soapAction="#dofeedbackmany"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doFinishItem">
<soap:operation soapAction="#dofinishitem"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doFinishItems">
<soap:operation soapAction="#dofinishitems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetAdminUserLicenceDate">
<soap:operation soapAction="#dogetadminuserlicencedate"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetBidItem2">
<soap:operation soapAction="#dogetbiditem2"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetBlackListUsers">
<soap:operation soapAction="#dogetblacklistusers"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetCategoryPath">
<soap:operation soapAction="#dogetcategorypath"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetCatsData">
<soap:operation soapAction="#dogetcatsdata"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetCatsDataCount">
<soap:operation soapAction="#dogetcatsdatacount"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetCatsDataLimit">
<soap:operation soapAction="#dogetcatsdatalimit"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetCountries">
<soap:operation soapAction="#dogetcountries"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetDeals">
<soap:operation soapAction="#dogetdeals"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetFavouriteCategories">
<soap:operation soapAction="#dogetfavouritecategories"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetFavouriteSellers">
<soap:operation soapAction="#dogetfavouritesellers"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetFeedback">
<soap:operation soapAction="#dogetfeedback"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetFilledPostBuyForms">
<soap:operation soapAction="#dogetfilledpostbuyforms"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetItemFields">
<soap:operation soapAction="#dogetitemfields"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetItemTemplates">
<soap:operation soapAction="#dogetitemtemplates"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetItemsImages">
<soap:operation soapAction="#dogetitemsimages"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetItemsInfo">
<soap:operation soapAction="#dogetitemsinfo"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMessageToBuyer">
<soap:operation soapAction="#dogetmessagetobuyer"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyAddresses">
<soap:operation soapAction="#dogetmyaddresses"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyBidItems">
<soap:operation soapAction="#dogetmybiditems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyCurrentShipmentPriceType">
<soap:operation soapAction="#dogetmycurrentshipmentpricetype"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyData">
<soap:operation soapAction="#dogetmydata"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyFutureItems">
<soap:operation soapAction="#dogetmyfutureitems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyIncomingPayments">
<soap:operation soapAction="#dogetmyincomingpayments"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyIncomingPaymentsRefunds">
<soap:operation soapAction="#dogetmyincomingpaymentsrefunds"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyNotSoldItems">
<soap:operation soapAction="#dogetmynotsolditems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyNotWonItems">
<soap:operation soapAction="#dogetmynotwonitems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyPayments">
<soap:operation soapAction="#dogetmypayments"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyPaymentsInfo">
<soap:operation soapAction="#dogetmypaymentsinfo"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyPaymentsRefunds">
<soap:operation soapAction="#dogetmypaymentsrefunds"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyPayouts">
<soap:operation soapAction="#dogetmypayouts"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMySellItems">
<soap:operation soapAction="#dogetmysellitems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMySellRating">
<soap:operation soapAction="#dogetmysellrating"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMySoldItems">
<soap:operation soapAction="#dogetmysolditems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyWatchItems">
<soap:operation soapAction="#dogetmywatchitems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyWatchedItems">
<soap:operation soapAction="#dogetmywatcheditems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetMyWonItems">
<soap:operation soapAction="#dogetmywonitems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetPaymentData">
<soap:operation soapAction="#dogetpaymentdata"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetPaymentMethods">
<soap:operation soapAction="#dogetpaymentmethods"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetPostBuyData">
<soap:operation soapAction="#dogetpostbuydata"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetPostBuyFormsDataForBuyers">
<soap:operation soapAction="#dogetpostbuyformsdataforbuyers"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetPostBuyFormsDataForSellers">
<soap:operation soapAction="#dogetpostbuyformsdataforsellers"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetPostBuyItemInfo">
<soap:operation soapAction="#dogetpostbuyiteminfo"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetRefundsDeals">
<soap:operation soapAction="#dogetrefundsdeals"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetRefundsList">
<soap:operation soapAction="#dogetrefundslist"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetRelatedItems">
<soap:operation soapAction="#dogetrelateditems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSellFormAttribs">
<soap:operation soapAction="#dogetsellformattribs"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSellFormFields">
<soap:operation soapAction="#dogetsellformfields"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSellFormFieldsExt">
<soap:operation soapAction="#dogetsellformfieldsext"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSellFormFieldsExtLimit">
<soap:operation soapAction="#dogetsellformfieldsextlimit"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSellFormFieldsForCategory">
<soap:operation soapAction="#dogetsellformfieldsforcategory"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSellFormFieldsLimit">
<soap:operation soapAction="#dogetsellformfieldslimit"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSellRatingReasons">
<soap:operation soapAction="#dogetsellratingreasons"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSessionHandleForWidget">
<soap:operation soapAction="#dogetsessionhandleforwidget"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetShipmentData">
<soap:operation soapAction="#dogetshipmentdata"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetShipmentDataForRelatedItems">
<soap:operation soapAction="#dogetshipmentdataforrelateditems"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetShipmentPriceTypes">
<soap:operation soapAction="#dogetshipmentpricetypes"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetShopsTags">
<soap:operation soapAction="#dogetshopstags"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSiteJournal">
<soap:operation soapAction="#dogetsitejournal"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSiteJournalDeals">
<soap:operation soapAction="#dogetsitejournaldeals"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSiteJournalDealsInfo">
<soap:operation soapAction="#dogetsitejournaldealsinfo"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSiteJournalInfo">
<soap:operation soapAction="#dogetsitejournalinfo"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetStatesInfo">
<soap:operation soapAction="#dogetstatesinfo"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetSystemTime">
<soap:operation soapAction="#dogetsystemtime"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetTransactionsIDs">
<soap:operation soapAction="#dogettransactionsids"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetUserID">
<soap:operation soapAction="#dogetuserid"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetUserLicenceDate">
<soap:operation soapAction="#dogetuserlicencedate"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetUserLogin">
<soap:operation soapAction="#dogetuserlogin"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetWaitingFeedbacks">
<soap:operation soapAction="#dogetwaitingfeedbacks"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doGetWaitingFeedbacksCount">
<soap:operation soapAction="#dogetwaitingfeedbackscount"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doLogin">
<soap:operation soapAction="#dologin"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doLoginEnc">
<soap:operation soapAction="#dologinenc"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doLoginWithAccessToken">
<soap:operation soapAction="#dologinwithaccesstoken"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doMyAccount2">
<soap:operation soapAction="#domyaccount2"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doMyAccountItemsCount">
<soap:operation soapAction="#domyaccountitemscount"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doMyBilling">
<soap:operation soapAction="#domybilling"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doMyBillingItem">
<soap:operation soapAction="#domybillingitem"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doMyContact">
<soap:operation soapAction="#domycontact"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doMyFeedback2">
<soap:operation soapAction="#domyfeedback2"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doMyFeedback2Limit">
<soap:operation soapAction="#domyfeedback2limit"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doNewAuctionExt">
<soap:operation soapAction="#donewauctionext"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doQueryAllSysStatus">
<soap:operation soapAction="#doqueryallsysstatus"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doQuerySysStatus">
<soap:operation soapAction="#doquerysysstatus"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doRemoveFromBlackList">
<soap:operation soapAction="#doremovefromblacklist"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doRemoveFromWatchList">
<soap:operation soapAction="#doremovefromwatchlist"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doRemoveItemTemplates">
<soap:operation soapAction="#doremoveitemtemplates"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doRequestCancelBid">
<soap:operation soapAction="#dorequestcancelbid"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doRequestPayout">
<soap:operation soapAction="#dorequestpayout"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doRequestSurcharge">
<soap:operation soapAction="#dorequestsurcharge"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doSellSomeAgain">
<soap:operation soapAction="#dosellsomeagain"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doSellSomeAgainInShop">
<soap:operation soapAction="#dosellsomeagaininshop"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doSendEmailToUser">
<soap:operation soapAction="#dosendemailtouser"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doSendPostBuyForm">
<soap:operation soapAction="#dosendpostbuyform"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doSetShipmentPriceType">
<soap:operation soapAction="#dosetshipmentpricetype"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doSetUserLicenceDate">
<soap:operation soapAction="#dosetuserlicencedate"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doShowItemInfoExt">
<soap:operation soapAction="#doshowiteminfoext"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doShowUser">
<soap:operation soapAction="#doshowuser"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
<operation name="doVerifyItem">
<soap:operation soapAction="#doverifyitem"/>
<input><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></input>
<output><soap:body use="encoded" namespace="urn:AllegroWebApi" encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"/></output>
</operation>
</binding>
<service name="AllegroWebApiService">
<port name="AllegroWebApiPort" binding="typens:AllegroWebApiBinding">
<soap:address location="https://webapi.allegro.pl/uploader.php"/>
</port>
</service>
</definitions>
