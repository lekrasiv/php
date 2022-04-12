<?php
	$SalaryAllowance = $_POST['Salary']/5;
	$AgeAllowance = ($_POST['Age']/10 - ($_POST['Age']%10)/10)-1;
	$LoanAllowance = $SalaryAllowance * $AgeAllowance;
	echo "Requested loan: $_POST[Loan]<br>";
	echo "Permissible loan amount: $LoanAllowance<br><br>";
	if ($_POST['Loan'] <= $LoanAllowance) echo "Yes, $_POST[FirstName]
	$_POST[LastName] , we will satisfy your request";
	if ($_POST['Loan'] > $LoanAllowance) echo "Sorry,
	$_POST[FirstName] $_POST[LastName], We are currently unable to accept your application.";
	?>
