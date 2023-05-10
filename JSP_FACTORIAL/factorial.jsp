<%@ page language="java" %>
<%@ page import="java.io.*, java.util.*" %>
<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>
    <h1>Factorial Calculator</h1>
    <%-- Retrieve the number from the form --%>
    <%
        int number = Integer.parseInt(request.getParameter("number"));

        long factorial = 1;
        for (int i = 2; i <= number; i++) {
            factorial *= i;
        }
    %>
    <p>The factorial of <%= number %> is <%= factorial %>.</p>
    <a href="factorial.html">Go Back</a>
</body>
</html>
