<?php include("header.php"); ?>

<div class="section">
<h2>Report Cyber Crime</h2>

<form method="post">
<input type="text" name="name" placeholder="Your Name"
style="width:60%; padding:8px;" required><br><br>

<input type="email" name="email" placeholder="Email Address"
style="width:60%; padding:8px;" required><br><br>

<textarea name="issue" placeholder="Describe the issue"
style="width:60%; padding:8px;" required></textarea><br><br>

<button type="submit"
style="padding:10px 25px; background-color:black; color:white; border:none;">
Submit
</button>
</form>

<?php
if(isset($_POST['name'])){
    echo "<p style='color:lightgreen;'>Report submitted successfully!</p>";
}
?>
</div>

<?php include("footer.php"); ?>
