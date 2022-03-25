<!DOCTYPE html>

<html>
    <style>
        body{
            background-image: url('project-management.png');
            opacity: 1;
        }
        h1{
            text-align:center;
        }
        .logInDiv{
            background-color: lightblue;
            text-align: center;
            display: contents;
            align-content: center;
            width: 50%;
        }
        TABLE{
            align: center;
        }
    </style>
	<head>
		<title>Log-in Page</title>
	</head>

	<body>
        
        <h1>Log-in</h1>

        <hr>

        <div class="logInDiv">
            <form action="Home.html" method="post">
                <TABLE BORDER=0>
                    <TR><TD >Username:</TD><TD> <input type="text" name="usrnm" value="" readonly/></TD></TR>
                    <TR><TD >Password: </TD><TD><input type="password" name="passwrd" value="" readonly/></TD></TR>

                    <TR><TD ><input type="submit" name="log-in" value="Log In"/></TD></TR>
                </TABLE>
            </form>
        </div>

	</body>
</html>

<?php  // creating a database connection
	// Code will be written after creating database
?>
