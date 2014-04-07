<!DOCTYPE html>
<html>
   <head>
      <style>
         *{
         font-family: verdana;
         }
         table
         {
         border-style:solid;
         border-color:black;
         }
      </style>
   </head>
   <body>
      <%
         $con=mysqli_connect("localhost:3307","student","password","world");
               // Check connection
               if (mysqli_connect_errno())
         	{
         	echo "Failed to connect to MySQL: " . mysqli_connect_error();
         	}
               
               $sql = "select Population, Name, Continent, GNP 
                         from country
                         where Population > 3000000
                         order by Population desc";
               $result = mysqli_query($con,$sql);
               
               $measure=500;
         %>
      <table border="1">
         <tr>
            <th>Population</th>
            <th>Name</th>
            <th>Continent</th>
            <th>GNP</th>
            <th>Bars</th>
         </tr>
         <%
            while($row = mysqli_fetch_array($result))
            {
                   $measure= $row["Population"]/5000000;
            %>
         <tr>
            <td><%= number_format($row["Population"])%></td>
            <td><%= $row["Name"]%></td>
            <td><%= $row["Continent"]%></td>
            <td><%= number_format($row["GNP"])%></td>
            <td>
               <table bgcolor="blue">
                  <td width="<%=$measure%>"></td>
               </table>
            </td>
         </tr>
         <%
            }
            mysqli_close($con);
            %>
      </table>
   </body>
</html>