/**
 * NotSoldItemStruct.java
 * <p>
 * This file was auto-generated from WSDL
 * by the Apache Axis 1.4 Apr 22, 2006 (06:55:48 PDT) WSDL2Java emitter.
 */

package allegroApi;

public class NotSoldItemStruct implements java.io.Serializable {
    private long itemId;

    private String itemTitle;

    private String itemThumbnailUrl;

    private ItemPriceStruct[] itemPrice;

    private int itemStartQuantity;

    private int itemQuantityType;

    private long itemStartTime;

    private long itemEndTime;

    private int itemBiddersCounter;

    private allegroApi.UserInfoStruct itemHighestBidder;

    private int itemCategoryId;

    private int itemWatchersCounter;

    private int itemViewsCounter;

    private String itemNote;

    private int itemSpecialInfo;

    private int itemShopInfo;

    private long itemProductInfo;

    private int itemPayuInfo;

    public NotSoldItemStruct() {
    }

    public NotSoldItemStruct(
            long itemId,
            String itemTitle,
            String itemThumbnailUrl,
            ItemPriceStruct[] itemPrice,
            int itemStartQuantity,
            int itemQuantityType,
            long itemStartTime,
            long itemEndTime,
            int itemBiddersCounter,
            allegroApi.UserInfoStruct itemHighestBidder,
            int itemCategoryId,
            int itemWatchersCounter,
            int itemViewsCounter,
            String itemNote,
            int itemSpecialInfo,
            int itemShopInfo,
            long itemProductInfo,
            int itemPayuInfo) {
        this.itemId = itemId;
        this.itemTitle = itemTitle;
        this.itemThumbnailUrl = itemThumbnailUrl;
        this.itemPrice = itemPrice;
        this.itemStartQuantity = itemStartQuantity;
        this.itemQuantityType = itemQuantityType;
        this.itemStartTime = itemStartTime;
        this.itemEndTime = itemEndTime;
        this.itemBiddersCounter = itemBiddersCounter;
        this.itemHighestBidder = itemHighestBidder;
        this.itemCategoryId = itemCategoryId;
        this.itemWatchersCounter = itemWatchersCounter;
        this.itemViewsCounter = itemViewsCounter;
        this.itemNote = itemNote;
        this.itemSpecialInfo = itemSpecialInfo;
        this.itemShopInfo = itemShopInfo;
        this.itemProductInfo = itemProductInfo;
        this.itemPayuInfo = itemPayuInfo;
    }


    /**
     * Gets the itemId value for this NotSoldItemStruct.
     *
     * @return itemId
     */
    public long getItemId() {
        return itemId;
    }


    /**
     * Sets the itemId value for this NotSoldItemStruct.
     *
     * @param itemId
     */
    public void setItemId(long itemId) {
        this.itemId = itemId;
    }


    /**
     * Gets the itemTitle value for this NotSoldItemStruct.
     *
     * @return itemTitle
     */
    public String getItemTitle() {
        return itemTitle;
    }


    /**
     * Sets the itemTitle value for this NotSoldItemStruct.
     *
     * @param itemTitle
     */
    public void setItemTitle(String itemTitle) {
        this.itemTitle = itemTitle;
    }


    /**
     * Gets the itemThumbnailUrl value for this NotSoldItemStruct.
     *
     * @return itemThumbnailUrl
     */
    public String getItemThumbnailUrl() {
        return itemThumbnailUrl;
    }


    /**
     * Sets the itemThumbnailUrl value for this NotSoldItemStruct.
     *
     * @param itemThumbnailUrl
     */
    public void setItemThumbnailUrl(String itemThumbnailUrl) {
        this.itemThumbnailUrl = itemThumbnailUrl;
    }


    /**
     * Gets the itemPrice value for this NotSoldItemStruct.
     *
     * @return itemPrice
     */
    public ItemPriceStruct[] getItemPrice() {
        return itemPrice;
    }


    /**
     * Sets the itemPrice value for this NotSoldItemStruct.
     *
     * @param itemPrice
     */
    public void setItemPrice(ItemPriceStruct[] itemPrice) {
        this.itemPrice = itemPrice;
    }


    /**
     * Gets the itemStartQuantity value for this NotSoldItemStruct.
     *
     * @return itemStartQuantity
     */
    public int getItemStartQuantity() {
        return itemStartQuantity;
    }


    /**
     * Sets the itemStartQuantity value for this NotSoldItemStruct.
     *
     * @param itemStartQuantity
     */
    public void setItemStartQuantity(int itemStartQuantity) {
        this.itemStartQuantity = itemStartQuantity;
    }


    /**
     * Gets the itemQuantityType value for this NotSoldItemStruct.
     *
     * @return itemQuantityType
     */
    public int getItemQuantityType() {
        return itemQuantityType;
    }


    /**
     * Sets the itemQuantityType value for this NotSoldItemStruct.
     *
     * @param itemQuantityType
     */
    public void setItemQuantityType(int itemQuantityType) {
        this.itemQuantityType = itemQuantityType;
    }


    /**
     * Gets the itemStartTime value for this NotSoldItemStruct.
     *
     * @return itemStartTime
     */
    public long getItemStartTime() {
        return itemStartTime;
    }


    /**
     * Sets the itemStartTime value for this NotSoldItemStruct.
     *
     * @param itemStartTime
     */
    public void setItemStartTime(long itemStartTime) {
        this.itemStartTime = itemStartTime;
    }


    /**
     * Gets the itemEndTime value for this NotSoldItemStruct.
     *
     * @return itemEndTime
     */
    public long getItemEndTime() {
        return itemEndTime;
    }


    /**
     * Sets the itemEndTime value for this NotSoldItemStruct.
     *
     * @param itemEndTime
     */
    public void setItemEndTime(long itemEndTime) {
        this.itemEndTime = itemEndTime;
    }


    /**
     * Gets the itemBiddersCounter value for this NotSoldItemStruct.
     *
     * @return itemBiddersCounter
     */
    public int getItemBiddersCounter() {
        return itemBiddersCounter;
    }


    /**
     * Sets the itemBiddersCounter value for this NotSoldItemStruct.
     *
     * @param itemBiddersCounter
     */
    public void setItemBiddersCounter(int itemBiddersCounter) {
        this.itemBiddersCounter = itemBiddersCounter;
    }


    /**
     * Gets the itemHighestBidder value for this NotSoldItemStruct.
     *
     * @return itemHighestBidder
     */
    public allegroApi.UserInfoStruct getItemHighestBidder() {
        return itemHighestBidder;
    }


    /**
     * Sets the itemHighestBidder value for this NotSoldItemStruct.
     *
     * @param itemHighestBidder
     */
    public void setItemHighestBidder(allegroApi.UserInfoStruct itemHighestBidder) {
        this.itemHighestBidder = itemHighestBidder;
    }


    /**
     * Gets the itemCategoryId value for this NotSoldItemStruct.
     *
     * @return itemCategoryId
     */
    public int getItemCategoryId() {
        return itemCategoryId;
    }


    /**
     * Sets the itemCategoryId value for this NotSoldItemStruct.
     *
     * @param itemCategoryId
     */
    public void setItemCategoryId(int itemCategoryId) {
        this.itemCategoryId = itemCategoryId;
    }


    /**
     * Gets the itemWatchersCounter value for this NotSoldItemStruct.
     *
     * @return itemWatchersCounter
     */
    public int getItemWatchersCounter() {
        return itemWatchersCounter;
    }


    /**
     * Sets the itemWatchersCounter value for this NotSoldItemStruct.
     *
     * @param itemWatchersCounter
     */
    public void setItemWatchersCounter(int itemWatchersCounter) {
        this.itemWatchersCounter = itemWatchersCounter;
    }


    /**
     * Gets the itemViewsCounter value for this NotSoldItemStruct.
     *
     * @return itemViewsCounter
     */
    public int getItemViewsCounter() {
        return itemViewsCounter;
    }


    /**
     * Sets the itemViewsCounter value for this NotSoldItemStruct.
     *
     * @param itemViewsCounter
     */
    public void setItemViewsCounter(int itemViewsCounter) {
        this.itemViewsCounter = itemViewsCounter;
    }


    /**
     * Gets the itemNote value for this NotSoldItemStruct.
     *
     * @return itemNote
     */
    public String getItemNote() {
        return itemNote;
    }


    /**
     * Sets the itemNote value for this NotSoldItemStruct.
     *
     * @param itemNote
     */
    public void setItemNote(String itemNote) {
        this.itemNote = itemNote;
    }


    /**
     * Gets the itemSpecialInfo value for this NotSoldItemStruct.
     *
     * @return itemSpecialInfo
     */
    public int getItemSpecialInfo() {
        return itemSpecialInfo;
    }


    /**
     * Sets the itemSpecialInfo value for this NotSoldItemStruct.
     *
     * @param itemSpecialInfo
     */
    public void setItemSpecialInfo(int itemSpecialInfo) {
        this.itemSpecialInfo = itemSpecialInfo;
    }


    /**
     * Gets the itemShopInfo value for this NotSoldItemStruct.
     *
     * @return itemShopInfo
     */
    public int getItemShopInfo() {
        return itemShopInfo;
    }


    /**
     * Sets the itemShopInfo value for this NotSoldItemStruct.
     *
     * @param itemShopInfo
     */
    public void setItemShopInfo(int itemShopInfo) {
        this.itemShopInfo = itemShopInfo;
    }


    /**
     * Gets the itemProductInfo value for this NotSoldItemStruct.
     *
     * @return itemProductInfo
     */
    public long getItemProductInfo() {
        return itemProductInfo;
    }


    /**
     * Sets the itemProductInfo value for this NotSoldItemStruct.
     *
     * @param itemProductInfo
     */
    public void setItemProductInfo(long itemProductInfo) {
        this.itemProductInfo = itemProductInfo;
    }


    /**
     * Gets the itemPayuInfo value for this NotSoldItemStruct.
     *
     * @return itemPayuInfo
     */
    public int getItemPayuInfo() {
        return itemPayuInfo;
    }


    /**
     * Sets the itemPayuInfo value for this NotSoldItemStruct.
     *
     * @param itemPayuInfo
     */
    public void setItemPayuInfo(int itemPayuInfo) {
        this.itemPayuInfo = itemPayuInfo;
    }

    private Object __equalsCalc = null;

    public synchronized boolean equals(Object obj) {
        if (!(obj instanceof NotSoldItemStruct)) return false;
        NotSoldItemStruct other = (NotSoldItemStruct) obj;
        if (obj == null) return false;
        if (this == obj) return true;
        if (__equalsCalc != null) {
            return (__equalsCalc == obj);
        }
        __equalsCalc = obj;
        boolean _equals;
        _equals = true &&
                this.itemId == other.getItemId() &&
                ((this.itemTitle == null && other.getItemTitle() == null) ||
                        (this.itemTitle != null &&
                                this.itemTitle.equals(other.getItemTitle()))) &&
                ((this.itemThumbnailUrl == null && other.getItemThumbnailUrl() == null) ||
                        (this.itemThumbnailUrl != null &&
                                this.itemThumbnailUrl.equals(other.getItemThumbnailUrl()))) &&
                ((this.itemPrice == null && other.getItemPrice() == null) ||
                        (this.itemPrice != null &&
                                java.util.Arrays.equals(this.itemPrice, other.getItemPrice()))) &&
                this.itemStartQuantity == other.getItemStartQuantity() &&
                this.itemQuantityType == other.getItemQuantityType() &&
                this.itemStartTime == other.getItemStartTime() &&
                this.itemEndTime == other.getItemEndTime() &&
                this.itemBiddersCounter == other.getItemBiddersCounter() &&
                ((this.itemHighestBidder == null && other.getItemHighestBidder() == null) ||
                        (this.itemHighestBidder != null &&
                                this.itemHighestBidder.equals(other.getItemHighestBidder()))) &&
                this.itemCategoryId == other.getItemCategoryId() &&
                this.itemWatchersCounter == other.getItemWatchersCounter() &&
                this.itemViewsCounter == other.getItemViewsCounter() &&
                ((this.itemNote == null && other.getItemNote() == null) ||
                        (this.itemNote != null &&
                                this.itemNote.equals(other.getItemNote()))) &&
                this.itemSpecialInfo == other.getItemSpecialInfo() &&
                this.itemShopInfo == other.getItemShopInfo() &&
                this.itemProductInfo == other.getItemProductInfo() &&
                this.itemPayuInfo == other.getItemPayuInfo();
        __equalsCalc = null;
        return _equals;
    }

    private boolean __hashCodeCalc = false;

    public synchronized int hashCode() {
        if (__hashCodeCalc) {
            return 0;
        }
        __hashCodeCalc = true;
        int _hashCode = 1;
        _hashCode += new Long(getItemId()).hashCode();
        if (getItemTitle() != null) {
            _hashCode += getItemTitle().hashCode();
        }
        if (getItemThumbnailUrl() != null) {
            _hashCode += getItemThumbnailUrl().hashCode();
        }
        if (getItemPrice() != null) {
            for (int i = 0;
                 i < java.lang.reflect.Array.getLength(getItemPrice());
                 i++) {
                Object obj = java.lang.reflect.Array.get(getItemPrice(), i);
                if (obj != null &&
                        !obj.getClass().isArray()) {
                    _hashCode += obj.hashCode();
                }
            }
        }
        _hashCode += getItemStartQuantity();
        _hashCode += getItemQuantityType();
        _hashCode += new Long(getItemStartTime()).hashCode();
        _hashCode += new Long(getItemEndTime()).hashCode();
        _hashCode += getItemBiddersCounter();
        if (getItemHighestBidder() != null) {
            _hashCode += getItemHighestBidder().hashCode();
        }
        _hashCode += getItemCategoryId();
        _hashCode += getItemWatchersCounter();
        _hashCode += getItemViewsCounter();
        if (getItemNote() != null) {
            _hashCode += getItemNote().hashCode();
        }
        _hashCode += getItemSpecialInfo();
        _hashCode += getItemShopInfo();
        _hashCode += new Long(getItemProductInfo()).hashCode();
        _hashCode += getItemPayuInfo();
        __hashCodeCalc = false;
        return _hashCode;
    }

    // Type metadata
    private static org.apache.axis.description.TypeDesc typeDesc =
            new org.apache.axis.description.TypeDesc(NotSoldItemStruct.class, true);

    static {
        typeDesc.setXmlType(new javax.xml.namespace.QName("urn:AllegroWebApi", "NotSoldItemStruct"));
        org.apache.axis.description.ElementDesc elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemId");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-id"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "long"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemTitle");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-title"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "string"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemThumbnailUrl");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-thumbnail-url"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "string"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemPrice");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-price"));
        elemField.setXmlType(new javax.xml.namespace.QName("urn:AllegroWebApi", "ItemPriceStruct"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemStartQuantity");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-start-quantity"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemQuantityType");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-quantity-type"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemStartTime");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-start-time"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "long"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemEndTime");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-end-time"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "long"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemBiddersCounter");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-bidders-counter"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemHighestBidder");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-highest-bidder"));
        elemField.setXmlType(new javax.xml.namespace.QName("urn:AllegroWebApi", "UserInfoStruct"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemCategoryId");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-category-id"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemWatchersCounter");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-watchers-counter"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemViewsCounter");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-views-counter"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemNote");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-note"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "string"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemSpecialInfo");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-special-info"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemShopInfo");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-shop-info"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemProductInfo");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-product-info"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "long"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("itemPayuInfo");
        elemField.setXmlName(new javax.xml.namespace.QName("", "item-payu-info"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
    }

    /**
     * Return type metadata object
     */
    public static org.apache.axis.description.TypeDesc getTypeDesc() {
        return typeDesc;
    }

    /**
     * Get Custom Serializer
     */
    public static org.apache.axis.encoding.Serializer getSerializer(
            String mechType,
            Class _javaType,
            javax.xml.namespace.QName _xmlType) {
        return
                new org.apache.axis.encoding.ser.BeanSerializer(
                        _javaType, _xmlType, typeDesc);
    }

    /**
     * Get Custom Deserializer
     */
    public static org.apache.axis.encoding.Deserializer getDeserializer(
            String mechType,
            Class _javaType,
            javax.xml.namespace.QName _xmlType) {
        return
                new org.apache.axis.encoding.ser.BeanDeserializer(
                        _javaType, _xmlType, typeDesc);
    }

}
