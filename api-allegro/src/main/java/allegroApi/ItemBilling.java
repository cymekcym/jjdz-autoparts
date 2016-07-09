/**
 * ItemBilling.java
 * <p>
 * This file was auto-generated from WSDL
 * by the Apache Axis 1.4 Apr 22, 2006 (06:55:48 PDT) WSDL2Java emitter.
 */

package allegroApi;

public class ItemBilling implements java.io.Serializable {
    private String biName;

    private String biValue;

    public ItemBilling() {
    }

    public ItemBilling(
            String biName,
            String biValue) {
        this.biName = biName;
        this.biValue = biValue;
    }


    /**
     * Gets the biName value for this ItemBilling.
     *
     * @return biName
     */
    public String getBiName() {
        return biName;
    }


    /**
     * Sets the biName value for this ItemBilling.
     *
     * @param biName
     */
    public void setBiName(String biName) {
        this.biName = biName;
    }


    /**
     * Gets the biValue value for this ItemBilling.
     *
     * @return biValue
     */
    public String getBiValue() {
        return biValue;
    }


    /**
     * Sets the biValue value for this ItemBilling.
     *
     * @param biValue
     */
    public void setBiValue(String biValue) {
        this.biValue = biValue;
    }

    private Object __equalsCalc = null;

    public synchronized boolean equals(Object obj) {
        if (!(obj instanceof ItemBilling)) return false;
        ItemBilling other = (ItemBilling) obj;
        if (obj == null) return false;
        if (this == obj) return true;
        if (__equalsCalc != null) {
            return (__equalsCalc == obj);
        }
        __equalsCalc = obj;
        boolean _equals;
        _equals = true &&
                ((this.biName == null && other.getBiName() == null) ||
                        (this.biName != null &&
                                this.biName.equals(other.getBiName()))) &&
                ((this.biValue == null && other.getBiValue() == null) ||
                        (this.biValue != null &&
                                this.biValue.equals(other.getBiValue())));
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
        if (getBiName() != null) {
            _hashCode += getBiName().hashCode();
        }
        if (getBiValue() != null) {
            _hashCode += getBiValue().hashCode();
        }
        __hashCodeCalc = false;
        return _hashCode;
    }

    // Type metadata
    private static org.apache.axis.description.TypeDesc typeDesc =
            new org.apache.axis.description.TypeDesc(ItemBilling.class, true);

    static {
        typeDesc.setXmlType(new javax.xml.namespace.QName("urn:AllegroWebApi", "ItemBilling"));
        org.apache.axis.description.ElementDesc elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("biName");
        elemField.setXmlName(new javax.xml.namespace.QName("", "bi-name"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "string"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("biValue");
        elemField.setXmlName(new javax.xml.namespace.QName("", "bi-value"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "string"));
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
