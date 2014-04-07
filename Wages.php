<%
   function get($pLimit, $plimit2){			
   
   if ( isset( $_POST[$pLimit])  )
   {
   $alt = $_POST[$pLimit];
   }
   else
   {
   $alt = $plimit2;
   }	
   return $alt;
   }
   
   $salary = get("salary",100000);
   
   function calculateHourlyWage($yearlySalary)
   {
      $HourlyWage = $yearlySalary/(40*52);
      return number_format($HourlyWage,2);
   }
   
   $result= calculateHourlyWage($salary);
   echo "Hourly Wage: $result";
   echo "<br/>";
   
   function calculateWeeklySalary($yearlySalary)
   {
       $WeeklyWage = $yearlySalary/52;
       return number_format($WeeklyWage,2);
   }
   
   
   $result2 = calculateWeeklySalary($salary);
   echo "Weekly Salary: $result2";
   echo "<br/>";
   
   function calculateMonthlySalary($yearlySalary)
   {
       $MonthlySalary = $yearlySalary/12;
       return number_format($MonthlySalary,2);
   }
   
   $result3 = calculateMonthlySalary($salary);
   echo "Monthly Salary: $result3";
   echo "<br/>";
   %>