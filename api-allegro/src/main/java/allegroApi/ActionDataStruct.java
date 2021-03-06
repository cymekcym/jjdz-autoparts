/**
 * ActionDataStruct.java
 * <p>
 * This file was auto-generated from WSDL
 * by the Apache Axis 1.4 Apr 22, 2006 (06:55:48 PDT) WSDL2Java emitter.
 */

package allegroApi;

public class ActionDataStruct implements java.io.Serializable {
    private String actionKey;

    private String actionValue;

    public ActionDataStruct() {
    }

    public ActionDataStruct(
            String actionKey,
            String actionValue) {
        this.actionKey = actionKey;
        this.actionValue = actionValue;
    }


    /**
     * Gets the actionKey value for this ActionDataStruct.
     *
     * @return actionKey
     */
    public String getActionKey() {
        return actionKey;
    }


    /**
     * Sets the actionKey value for this ActionDataStruct.
     *
     * @param actionKey
     */
    public void setActionKey(String actionKey) {
        this.actionKey = actionKey;
    }


    /**
     * Gets the actionValue value for this ActionDataStruct.
     *
     * @return actionValue
     */
    public String getActionValue() {
        return actionValue;
    }


    /**
     * Sets the actionValue value for this ActionDataStruct.
     *
     * @param actionValue
     */
    public void setActionValue(String actionValue) {
        this.actionValue = actionValue;
    }

    private Object __equalsCalc = null;

    public synchronized boolean equals(Object obj) {
        if (!(obj instanceof ActionDataStruct)) return false;
        ActionDataStruct other = (ActionDataStruct) obj;
        if (obj == null) return false;
        if (this == obj) return true;
        if (__equalsCalc != null) {
            return (__equalsCalc == obj);
        }
        __equalsCalc = obj;
        boolean _equals;
        _equals = true &&
                ((this.actionKey == null && other.getActionKey() == null) ||
                        (this.actionKey != null &&
                                this.actionKey.equals(other.getActionKey()))) &&
                ((this.actionValue == null && other.getActionValue() == null) ||
                        (this.actionValue != null &&
                                this.actionValue.equals(other.getActionValue())));
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
        if (getActionKey() != null) {
            _hashCode += getActionKey().hashCode();
        }
        if (getActionValue() != null) {
            _hashCode += getActionValue().hashCode();
        }
        __hashCodeCalc = false;
        return _hashCode;
    }

    // Type metadata
    private static org.apache.axis.description.TypeDesc typeDesc =
            new org.apache.axis.description.TypeDesc(ActionDataStruct.class, true);

    static {
        typeDesc.setXmlType(new javax.xml.namespace.QName("urn:AllegroWebApi", "ActionDataStruct"));
        org.apache.axis.description.ElementDesc elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("actionKey");
        elemField.setXmlName(new javax.xml.namespace.QName("", "action-key"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "string"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("actionValue");
        elemField.setXmlName(new javax.xml.namespace.QName("", "action-value"));
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
