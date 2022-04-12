<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forma kredita</title>
</head>
<body>
	<B>Application for a loan in HoneBank</B>
			<FORM method="POST" action="loan.php">
			Name:
			<INPUT name="FirstName" type="text">
			Surname:
			<INPUT name="LastName" type="text">
			age:
			<INPUT name="Age" type="text" size="3">
			<BR>
			<BR>
			your place of resdence:
			<TEXTAREA name="Address" rows="4" cols="40">
			</TEXTAREA>
			<BR>
			<BR>
			Please indicate your current salary:
			<SELECT NAME="Salary">
			<OPTION VALUE=0>up to $10000</OPTION>
			<OPTION VALUE=10000>$10000 - $25000</OPTION>
			<OPTION VALUE=25000>$25000 - $50000</OPTION>
			<OPTION VALUE=50000>more than $50000</OPTION>
			</SELECT>
			<BR><BR>
			Select the amount of the required loan:<BR><BR>
			<INPUT name="Loan" type="radio" value="1000">$1000 at 8,0% per annum
			<br>
			<INPUT name="Loan" type="radio" value="5000">$5000 at 11,5% per annum
			<br>
			<INPUT name="Loan" type="radio" value="10000">$10000 at 15,0% per annum
			<BR>
			<BR>
			
			<a href="http://formphp/main.php"><INPUT type="submit" value="Apply"></a>
			<INPUT type="reset" value="Clear">
	</FORM>
	
</body>
</html>
