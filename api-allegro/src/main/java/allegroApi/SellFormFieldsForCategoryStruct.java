/**
 * SellFormFieldsForCategoryStruct.java
 * <p>
 * This file was auto-generated from WSDL
 * by the Apache Axis 1.4 Apr 22, 2006 (06:55:48 PDT) WSDL2Java emitter.
 */

package allegroApi;

public class SellFormFieldsForCategoryStruct implements java.io.Serializable {
    private SellFormType[] sellFormFieldsList;

    private long sellFormFieldsVersionKey;

    private String sellFormFieldsComponentValue;

    public SellFormFieldsForCategoryStruct() {
    }

    public SellFormFieldsForCategoryStruct(
            SellFormType[] sellFormFieldsList,
            long sellFormFieldsVersionKey,
            String sellFormFieldsComponentValue) {
        this.sellFormFieldsList = sellFormFieldsList;
        this.sellFormFieldsVersionKey = sellFormFieldsVersionKey;
        this.sellFormFieldsComponentValue = sellFormFieldsComponentValue;
    }


    /**
     * Gets the sellFormFieldsList value for this SellFormFieldsForCategoryStruct.
     *
     * @return sellFormFieldsList
     */
    public SellFormType[] getSellFormFieldsList() {
        return sellFormFieldsList;
    }


    /**
     * Sets the sellFormFieldsList value for this SellFormFieldsForCategoryStruct.
     *
     * @param sellFormFieldsList
     */
    public void setSellFormFieldsList(SellFormType[] sellFormFieldsList) {
        this.sellFormFieldsList = sellFormFieldsList;
    }


    /**
     * Gets the sellFormFieldsVersionKey value for this SellFormFieldsForCategoryStruct.
     *
     * @return sellFormFieldsVersionKey
     */
    public long getSellFormFieldsVersionKey() {
        return sellFormFieldsVersionKey;
    }


    /**
     * Sets the sellFormFieldsVersionKey value for this SellFormFieldsForCategoryStruct.
     *
     * @param sellFormFieldsVersionKey
     */
    public void setSellFormFieldsVersionKey(long sellFormFieldsVersionKey) {
        this.sellFormFieldsVersionKey = sellFormFieldsVersionKey;
    }


    /**
     * Gets the sellFormFieldsComponentValue value for this SellFormFieldsForCategoryStruct.
     *
     * @return sellFormFieldsComponentValue
     */
    public String getSellFormFieldsComponentValue() {
        return sellFormFieldsComponentValue;
    }


    /**
     * Sets the sellFormFieldsComponentValue value for this SellFormFieldsForCategoryStruct.
     *
     * @param sellFormFieldsComponentValue
     */
    public void setSellFormFieldsComponentValue(String sellFormFieldsComponentValue) {
        this.sellFormFieldsComponentValue = sellFormFieldsComponentValue;
    }

    private Object __equalsCalc = null;

    public synchronized boolean equals(Object obj) {
        if (!(obj instanceof SellFormFieldsForCategoryStruct)) return false;
        SellFormFieldsForCategoryStruct other = (SellFormFieldsForCategoryStruct) obj;
        if (obj == null) return false;
        if (this == obj) return true;
        if (__equalsCalc != null) {
            return (__equalsCalc == obj);
        }
        __equalsCalc = obj;
        boolean _equals;
        _equals = true &&
                ((this.sellFormFieldsList == null && other.getSellFormFieldsList() == null) ||
                        (this.sellFormFieldsList != null &&
                                java.util.Arrays.equals(this.sellFormFieldsList, other.getSellFormFieldsList()))) &&
                this.sellFormFieldsVersionKey == other.getSellFormFieldsVersionKey() &&
                ((this.sellFormFieldsComponentValue == null && other.getSellFormFieldsComponentValue() == null) ||
                        (this.sellFormFieldsComponentValue != null &&
                                this.sellFormFieldsComponentValue.equals(other.getSellFormFieldsComponentValue())));
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
        if (getSellFormFieldsList() != null) {
            for (int i = 0;
                 i < java.lang.reflect.Array.getLength(getSellFormFieldsList());
                 i++) {
                Object obj = java.lang.reflect.Array.get(getSellFormFieldsList(), i);
                if (obj != null &&
                        !obj.getClass().isArray()) {
                    _hashCode += obj.hashCode();
                }
            }
        }
        _hashCode += new Long(getSellFormFieldsVersionKey()).hashCode();
        if (getSellFormFieldsComponentValue() != null) {
            _hashCode += getSellFormFieldsComponentValue().hashCode();
        }
        __hashCodeCalc = false;
        return _hashCode;
    }

    // Type metadata
    private static org.apache.axis.description.TypeDesc typeDesc =
            new org.apache.axis.description.TypeDesc(SellFormFieldsForCategoryStruct.class, true);

    static {
        typeDesc.setXmlType(new javax.xml.namespace.QName("urn:AllegroWebApi", "SellFormFieldsForCategoryStruct"));
        org.apache.axis.description.ElementDesc elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("sellFormFieldsList");
        elemField.setXmlName(new javax.xml.namespace.QName("", "sell-form-fields-list"));
        elemField.setXmlType(new javax.xml.namespace.QName("urn:AllegroWebApi", "SellFormType"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("sellFormFieldsVersionKey");
        elemField.setXmlName(new javax.xml.namespace.QName("", "sell-form-fields-version-key"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "long"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("sellFormFieldsComponentValue");
        elemField.setXmlName(new javax.xml.namespace.QName("", "sell-form-fields-component-value"));
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
