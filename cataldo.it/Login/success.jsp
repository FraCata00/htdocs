<%@ page language="java" contentType="text/html; charset=ISO-8859-1" pageEncoding="ISO-8859-1" %>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style2.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Login check</title>
</head>
<body>
	<form class="signup-form" action="/LoginJSP/index.jsp" method="post">
	<div class="titolo">
		<% 	String standard1 = "francesco";
			String standard2 = "utente";
			String valore1 = request.getParameter("username");
			String valore2 = request.getParameter("password");
			//out.print("<h1>Username inserito: "+valore1+"</h1>");   /*era per provare a vedere cosa stampasse
			//out.print("<h1>Password inserita: "+valore2+"</h1>");
			if((valore1.equals(standard1))&&(valore2.equals(standard2))) out.print("<h1>Login Success!</h1>"); 
			else out.print("<h1>Login Error!</h1>");
		%>
	</div>
	<div class="form-footer">
        <button type="submit" class="btn">Torna al Login</button>
      </div>
      </form>
</body>
</html>
