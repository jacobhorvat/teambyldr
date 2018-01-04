<?php include("inc/header.php"); ?>


<!-- End Content -->
</div>


<h3>Reach out to us if you have any questions!</h3>

<form method="post" action="email-process.php">
  <table>
    <tr>
      <th><label for = "Name">Your Name</label></th>
      <td><input type="text" id="name" name="name"></td>
    </tr>
    <tr>
      <th><label for = "Email">Email</label></th>
      <td><input type="email" id="email" name="email"></td>
    </tr>
    <tr>
      <th><label for = "Message">What is your message?</label></th>
      <td><textarea name="message" rows="8" cols="80"></textarea></td>
    </tr>

  </table>
  <input type="submit" value="Post">

</form>



<?php include("inc/footer.php"); ?>
