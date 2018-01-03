

<?php $pageTitle = "Share your Trip!"; ?>

<?php include("inc/header.php"); ?>

<div class="section page">
  <div class="wrapper">
    <h1>Share your Trip!</h1>

    <form method="post" action="process.php">
      <table>
        <tr>
          <th><label for = "trip_name">Trip Name</label></th>
          <td><input type="text" id="trip_name" name="trip_name"></td>
        </tr>
        <tr>
          <th><label for = "trip_location">Where was the trip?</label></th>
          <td><input type="text" id="trip_location" name="trip_location"></td>
        </tr>
        <tr>
          <th><label for = "trip_gear">Which gear did you take with you?</label></th>
          <td><textarea name="trip_gear" rows="8" cols="80"></textarea></td>
        </tr>

      </table>
      <input type="submit" value="Post">

    </form>

  </div>
</div>


<form class="trip" action="index.html" method="post">

</form>


<?php include("inc/footer.php"); ?>
