<%@ taglib prefix="c"
           uri="http://java.sun.com/jsp/jstl/core" %>
<%@ page contentType="text/html;charset=UTF-8" language="java" %>
<html>
<head>
    <title>Infoshare Acedemy</title>
</head>
<body>

<form method="GET" action="Engines">

    <select name="model">
        <c:forEach items="${models}" var="model">
            <option value="${model.id};${model.name};${model.link}">${model.name}</option>
        </c:forEach>
    </select>

    <input type="submit" value="OK">
</form>

</body>
</html>