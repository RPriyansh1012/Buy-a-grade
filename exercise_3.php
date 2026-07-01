<h1>Raw Form Data</h1>

<pre>

<?php

print_r($_POST);

?>

</pre>


<h1>Form input values</h1>


<p>Your Name:
<?= htmlspecialchars($_POST['name'] ?? '') ?>
</p>


<p>Section:
<?= htmlspecialchars($_POST['section'] ?? '') ?>
</p>


<p>Card Number:
<?= htmlspecialchars($_POST['cardnumber'] ?? '') ?>
</p>


<p>Card Type:
<?= htmlspecialchars($_POST['cardtype'] ?? '') ?>
</p>