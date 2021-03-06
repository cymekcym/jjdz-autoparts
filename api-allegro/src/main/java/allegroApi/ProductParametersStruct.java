/**
 * ProductParametersStruct.java
 * <p>
 * This file was auto-generated from WSDL
 * by the Apache Axis 1.4 Apr 22, 2006 (06:55:48 PDT) WSDL2Java emitter.
 */

package allegroApi;

public class ProductParametersStruct implements java.io.Serializable {
    private String productParameterName;

    private String[] productParameterValues;

    private String productParameterDescription;

    public ProductParametersStruct() {
    }

    public ProductParametersStruct(
            String productParameterName,
            String[] productParameterValues,
            String productParameterDescription) {
        this.productParameterName = productParameterName;
        this.productParameterValues = productParameterValues;
        this.productParameterDescription = productParameterDescription;
    }


    /**
     * Gets the productParameterName value for this ProductParametersStruct.
     *
     * @return productParameterName
     */
    public String getProductParameterName() {
        return productParameterName;
    }


    /**
     * Sets the productParameterName value for this ProductParametersStruct.
     *
     * @param productParameterName
     */
    public void setProductParameterName(String productParameterName) {
        this.productParameterName = productParameterName;
    }


    /**
     * Gets the productParameterValues value for this ProductParametersStruct.
     *
     * @return productParameterValues
     */
    public String[] getProductParameterValues() {
        return productParameterValues;
    }


    /**
     * Sets the productParameterValues value for this ProductParametersStruct.
     *
     * @param productParameterValues
     */
    public void setProductParameterValues(String[] productParameterValues) {
        this.productParameterValues = productParameterValues;
    }


    /**
     * Gets the productParameterDescription value for this ProductParametersStruct.
     *
     * @return productParameterDescription
     */
    public String getProductParameterDescription() {
        return productParameterDescription;
    }


    /**
     * Sets the productParameterDescription value for this ProductParametersStruct.
     *
     * @param productParameterDescription
     */
    public void setProductParameterDescription(String productParameterDescription) {
        this.productParameterDescription = productParameterDescription;
    }

    private Object __equalsCalc = null;

    public synchronized boolean equals(Object obj) {
        if (!(obj instanceof ProductParametersStruct)) return false;
        ProductParametersStruct other = (ProductParametersStruct) obj;
        if (obj == null) return false;
        if (this == obj) return true;
        if (__equalsCalc != null) {
            return (__equalsCalc == obj);
        }
        __equalsCalc = obj;
        boolean _equals;
        _equals = true &&
                ((this.productParameterName == null && other.getProductParameterName() == null) ||
                        (this.productParameterName != null &&
                                this.productParameterName.equals(other.getProductParameterName()))) &&
                ((this.productParameterValues == null && other.getProductParameterValues() == null) ||
                        (this.productParameterValues != null &&
                                java.util.Arrays.equals(this.productParameterValues, other.getProductParameterValues()))) &&
                ((this.productParameterDescription == null && other.getProductParameterDescription() == null) ||
                        (this.productParameterDescription != null &&
                                this.productParameterDescription.equals(other.getProductParameterDescription())));
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
        if (getProductParameterName() != null) {
            _hashCode += getProductParameterName().hashCode();
        }
        if (getProductParameterValues() != null) {
            for (int i = 0;
                 i < java.lang.reflect.Array.getLength(getProductParameterValues());
                 i++) {
                Object obj = java.lang.reflect.Array.get(getProductParameterValues(), i);
                if (obj != null &&
                        !obj.getClass().isArray()) {
                    _hashCode += obj.hashCode();
                }
            }
        }
        if (getProductParameterDescription() != null) {
            _hashCode += getProductParameterDescription().hashCode();
        }
        __hashCodeCalc = false;
        return _hashCode;
    }

    // Type metadata
    private static org.apache.axis.description.TypeDesc typeDesc =
            new org.apache.axis.description.TypeDesc(ProductParametersStruct.class, true);

    static {
        typeDesc.setXmlType(new javax.xml.namespace.QName("urn:AllegroWebApi", "ProductParametersStruct"));
        org.apache.axis.description.ElementDesc elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("productParameterName");
        elemField.setXmlName(new javax.xml.namespace.QName("", "product-parameter-name"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "string"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("productParameterValues");
        elemField.setXmlName(new javax.xml.namespace.QName("", "product-parameter-values"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "string"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("productParameterDescription");
        elemField.setXmlName(new javax.xml.namespace.QName("", "product-parameter-description"));
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
