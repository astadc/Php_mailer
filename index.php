<?php if (!empty($_POST)): ?>
    Welcome, <?php echo htmlspecialchars($_POST["comapnyIndustry"]); ?>!<br>
    Your email is <?php echo htmlspecialchars($_POST["companyname"]); ?>.<br>







<?php else: ?>
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> method="post">
        
        Company Name <input type="text" name="companyname"><br>
        Company Contact Person <input type="text" name="companyname"><br>
        Company Contact Person <input type="text" name="companyperson"><br>
        Company Industry <select name="comapnyIndustry"> 
        	<option value="Restaurant Industry">Restaurant Industry</option>
  		<br>


        <input type="submit">
    </form>
<?php endif; ?>