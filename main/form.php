<?php include "db.php" ?>
<!-- __________________________________________________ -->
<h1 class="heading">Cast Your Vote</h1>
<small style="text-align: center;display: block;margin-bottom: 10px;margin-top: -10px;font-size: 11px;color: grey;">As This is dummy site. So you can enter any dummy data.</small>

<div class="form-container">


  <form method="POST" id="vote-form">

    <div class="form-control">
      <input type="text" name="name" id="name" placeholder="Enter Name" required>
    </div>
    <div class="form-control">
      <input type="text" name="cnic" id="cnic" oninput="addHyphen(this)" maxlength="15" minlength="15" placeholder="Enter CNIC without (-)" required>
    </div>
    <div class="form-control">
      <input type="text" name="location" id="location" placeholder="Enter City" required>
    </div>
    <div class="form-control">

      <select name="party" id="party" required>
        <option value="" selected>Select a Party</option>
        <?php
        $query = 'SELECT * FROM parties ORDER BY name ASC';
        $result = mysqli_query($connection, $query);

        while ($row = mysqli_fetch_assoc($result)) :
          $i++;
        ?>
          <option value="<?php echo $row['id'] ?>"><?php echo $row['name']; ?></option>
        <?php endwhile; ?>
      </select>

    </div>

    <div class="res">
      <img src="../assets/img/loader.gif" alt="">
    </div>

    <div class="form-control add-vote-btn">
      <button type="submit" name="submit" class="awesome">Submit</button>
    </div>
  </form>

  <div class="form-control results">
    <button class="awesome" onclick="loadPage('results.php')">Check Results</button>
  </div>

</div>

<hr class="mid">

<!-- __________________________________________________ -->

<!-- ---------------------------------------------------- -->
<h1 class="heading">Political Parties</h1>

<div class="table-cont">
  <table>

    <tr>
      <th>S.No</th>
      <th>Name</th>
      <th>Leader</th>
      <th>Symbol</th>
      <th>Flag</th>
    </tr>

    <?php
    $query = 'SELECT * FROM parties ORDER BY name ASC';
    $result = mysqli_query($connection, $query);
    $i = 0;

    while ($row = mysqli_fetch_assoc($result)) :
      $i++;
    ?>
      <tr>
        <td><?php echo $i ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['leader'] ?></td>
        <td class="symbol" oncontextmenu="return false;"><img src="../assets/img/<?php echo $row['symbol'] ?>" alt="<?php echo $row['name'] ?> symbol"></td>
        <td class="flag" oncontextmenu="return false;"><img src="../assets/img/<?php echo $row['flag'] ?>" alt="<?php echo $row['name'] ?> flag"></td>
      </tr>
    <?php endwhile; ?>

    <tr class="add" title="click to add party to list" onclick="loadPage('addparty.php')">
      <td colspan="5">+</td>
    </tr>

  </table>
</div>
<!-- ---------------------------------------------------- -->
<script>
  submitVote();
</script>