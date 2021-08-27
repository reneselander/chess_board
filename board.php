<!DOCTYPE html>
     <html> 

     <head>

  <title>Chess Board (Nested For Loop)</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>

  <body>

  <center>

  <br>

  <br>

  <br>

  <br>

  <br>

  <br>
  
   <table cellspacing = "0px" cellpadding = "0px" border = "1px">

      <?php

      for($row=1;$row<=8;$row++)

	  {

          echo "<tr>";

          for($col=1;$col<=8;$col++)

		  {

          $total=$row+$col;

          if($total%2==0)

		  {

          echo "<td height = 60px width = 60px bgcolor = #FFFFFF></td>";

          }

		  else

		  {

          echo "<td height = 60px width = 60px bgcolor = #000000></td>";

          }

          }

          echo "</tr>";

    }

          ?>

  </table>

</center>

  </body>

  </html>