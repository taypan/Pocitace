<?php /*
Copyright (c) 2007-2008, Gur� Sistemas and/or Gustavo Adolfo Arcila Trujillo
All rights reserved.
www.gurusistemas.com

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

    * Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
    * Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer
	  in the documentation and/or other materials provided with the distribution.
    * Neither the name of the Gur� Sistemas Intl nor Gustavo Adolfo Arcila Trujillo nor the names of its contributors may be used to
	  endorse or promote products derived from this software without specific prior written permission.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS  "AS IS"  AND ANY EXPRESS  OR  IMPLIED WARRANTIES, INCLUDING, 
BUT NOT LIMITED TO,  THE IMPLIED WARRANTIES  OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.  IN NO EVENT
SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,  INDIRECT,  INCIDENTAL, SPECIAL, EXEMPLARY,  OR CONSEQUENTIAL 
DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF  USE, DATA, OR PROFITS;  OR BUSINESS 
INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE 
OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE. 

phpMyDataGrid 2007 is Free, but if you want to get even more power consider upgrade to PRO, contact us and get a special discount.

Please remember donating to phpMyDataGrid Free is one way to show your support, copy and paste in your internet browser the following link to make your donation
https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=tavoarcila%40gmail%2ecom&item_name=phpMyDataGrid%202007&no_shipping=0&no_note=1&tax=0&currency_code=USD&lc=US&bn=PP%2dDonationsBF&charset=UTF%2d8

For more info, samples, tips, screenshots, help, contact, forum, please visit phpMyDataGrid site  
http://www.gurusistemas.com/indexdatagrid.php

To get more info about the professional version, visit: http://www.gurusistemas.com/

*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>phpMyDatagrid - Sample file</title>

<?php

	/* Include class file */
	include ("phpmydatagrid.class.php");
	
	/* Create object */
	$objGrid = new datagrid;

	/* Define the "FORM" will be named employee and Must be 
	   created by the grid script */
	$objGrid -> form('employee', true);
	
	/* Connect with the database */
	$objGrid -> conectadb("127.0.0.1", "phpclasses", "test", "guru");
	
	/* Select the table to use */
	$objGrid -> tabla ("employees");

	/* Define fields to show */
	$objGrid -> FormatColumn("id", "ID Employee", 5, 5, 1, "50", "center");
	$objGrid -> FormatColumn("name", "Name", 30, 30, 0, "150", "left");
	$objGrid -> FormatColumn("lastname", "Last name", 30, 30, 0, "150", "left");
	$objGrid -> FormatColumn("age", "Age", 5, 5, 0, "50", "right");
	$objGrid -> FormatColumn("afiliation", "Afiliation Date", 10, 10, 0, "100", "center", "date:dmy:/");
	$objGrid -> FormatColumn("status", "Status", 5, 5, 0, "60", "left");
	$objGrid -> FormatColumn("active", "Active", 2, 2, 0,"50", "center");
	$objGrid -> FormatColumn("salary", "Salary", 10, 10, 0, "90", "right");
	$objGrid -> FormatColumn("workeddays", "Work days", 5, 2, 0, "50", "right");

	/* The setHeader function MUST be set between the <HEAD> and </HEAD> 
	   to correctly set the CSS and JS parameters */
	$objGrid -> setHeader();
?>
</head>

<body>
<?php 
	/* draw the grid */
	$objGrid -> grid();
	
	/* Disconnect from database */
	$objGrid -> desconectar();
?>
</body>
</html>
