<!DOCTYPE html>
<html>
<head>
  <title>Check All Checkboxes</title>
  <style>
    .scrollable-content {
      max-height: 150px;
      overflow-y: auto;
      border: 1px solid #ccc;
      padding: 10px;
    }
  </style>
</head>
<body>

<button id="checkAllButton">Check All</button>
<button id="uncheckAllButton">Uncheck All</button>

<form action="<?php echo base_url('index.php/submit_bulk_b2b');?>" method="post">
    
<div class="scrollable-content">


<input type="radio" name="action" value="reject">Reject<br>
<input type="radio" name="action" value="reject">Reject<br>
<input type="radio" name="action" value="reject">Reject<br>
<input type="radio" name="action" value="reject">Reject<br>
<input type="radio" name="action" value="reject">Reject<br>
<input type="radio" name="action" value="reject">Reject<br>
<input type="radio" name="action" value="reject">Reject<br>
<input type="radio" name="action" value="reject">Reject<br>
<input type="radio" name="action" value="reject">Reject<br>

</div>
<input type="submit" name="submitPost" value="Submit">
</form>

<script>
document.addEventListener("DOMContentLoaded", function() {
  const checkAllButton = document.getElementById("checkAllButton");
  const uncheckAllButton = document.getElementById("uncheckAllButton");
  const checkboxes = document.querySelectorAll("input[type='radio']");

  checkAllButton.addEventListener("click", function() {
    checkboxes.forEach(checkbox => {
      checkbox.checked = true;
    });
  });

  uncheckAllButton.addEventListener("click", function() {
    checkboxes.forEach(checkbox => {
      checkbox.checked = false;
    });
  });
});
</script>

</body>
</html>
