/**
 * UserBlackListStruct.java
 * <p>
 * This file was auto-generated from WSDL
 * by the Apache Axis 1.4 Apr 22, 2006 (06:55:48 PDT) WSDL2Java emitter.
 */

package allegroApi;

public class UserBlackListStruct implements java.io.Serializable {
    private int userId;

    private String userBlackListNote;

    public UserBlackListStruct() {
    }

    public UserBlackListStruct(
            int userId,
            String userBlackListNote) {
        this.userId = userId;
        this.userBlackListNote = userBlackListNote;
    }


    /**
     * Gets the userId value for this UserBlackListStruct.
     *
     * @return userId
     */
    public int getUserId() {
        return userId;
    }


    /**
     * Sets the userId value for this UserBlackListStruct.
     *
     * @param userId
     */
    public void setUserId(int userId) {
        this.userId = userId;
    }


    /**
     * Gets the userBlackListNote value for this UserBlackListStruct.
     *
     * @return userBlackListNote
     */
    public String getUserBlackListNote() {
        return userBlackListNote;
    }


    /**
     * Sets the userBlackListNote value for this UserBlackListStruct.
     *
     * @param userBlackListNote
     */
    public void setUserBlackListNote(String userBlackListNote) {
        this.userBlackListNote = userBlackListNote;
    }

    private Object __equalsCalc = null;

    public synchronized boolean equals(Object obj) {
        if (!(obj instanceof UserBlackListStruct)) return false;
        UserBlackListStruct other = (UserBlackListStruct) obj;
        if (obj == null) return false;
        if (this == obj) return true;
        if (__equalsCalc != null) {
            return (__equalsCalc == obj);
        }
        __equalsCalc = obj;
        boolean _equals;
        _equals = true &&
                this.userId == other.getUserId() &&
                ((this.userBlackListNote == null && other.getUserBlackListNote() == null) ||
                        (this.userBlackListNote != null &&
                                this.userBlackListNote.equals(other.getUserBlackListNote())));
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
        _hashCode += getUserId();
        if (getUserBlackListNote() != null) {
            _hashCode += getUserBlackListNote().hashCode();
        }
        __hashCodeCalc = false;
        return _hashCode;
    }

    // Type metadata
    private static org.apache.axis.description.TypeDesc typeDesc =
            new org.apache.axis.description.TypeDesc(UserBlackListStruct.class, true);

    static {
        typeDesc.setXmlType(new javax.xml.namespace.QName("urn:AllegroWebApi", "UserBlackListStruct"));
        org.apache.axis.description.ElementDesc elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("userId");
        elemField.setXmlName(new javax.xml.namespace.QName("", "user-id"));
        elemField.setXmlType(new javax.xml.namespace.QName("http://www.w3.org/2001/XMLSchema", "int"));
        elemField.setNillable(false);
        typeDesc.addFieldDesc(elemField);
        elemField = new org.apache.axis.description.ElementDesc();
        elemField.setFieldName("userBlackListNote");
        elemField.setXmlName(new javax.xml.namespace.QName("", "user-black-list-note"));
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
