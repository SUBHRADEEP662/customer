<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <style>
    table, th{
        text-align:left;
    }
    </style>
    
</head>
<body>
    
    <fieldset style="margin-left: 450px; margin-right: 450px;">
        <legend><strong><u>Customer Registration form</u></strong></legend>
        <form action="sign_up.php" method="POST">
            <table>
            <tr>
                    <th>
            Name </th> <td> <input type="text" name="name" id="" required maxlength="100" required> </td>
            </tr>
                <tr>
                    <th>
            Email-ID </th> <td> <input type="email" name="email" id="" required> </td>
            </tr>
                <th>
            Password </th> <td> <input type="password" name="pass" id="" required> <td> 
            </tr>
            <tr>
                <th>
            Confirm Password </th> <td> <input type="password" name="conpass" id="" required> </td>
            </tr>
            <tr>
            <tr>
                <th>
            Mobile number </th> <td> <input type="number" name="ph1" id="" required> </td> 
            </tr>
            <tr>
            <tr>
                <th>
            Alternative mobile number</th> <td> <input type="number" name="ph2" id=""> </td> 
            </tr>
            <tr>
             Already a member <a href="log_in.html">Log-In</a>
             </td>
             <td style="text-align:right;">
                <td>
                 <input type="submit" name="" id="" value="Sign-Up">
             </td>
             </tr>
            </table>
        </form>
    </fieldset>
    
    
    
</body>
</html>