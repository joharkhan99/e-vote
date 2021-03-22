<h1 class="heading">Add New Political Party</h1>
<small style="text-align: center;display: block;margin-bottom: 10px;margin-top: -10px;font-size: 11px;color: grey;">As This is dummy site. So you can enter any dummy data.</small>

<div class="back-btn">
  <span class="arrow-cont" onclick="loadPage('form.php')">
    <i class="fas fa-chevron-left"></i> back to home
  </span>

</div>

<div class="container">
  <section id="content">
    <form method="POST" id="add-form" enctype="multipart/form-data">

      <h1>Add Party</h1>

      <div class="form-control">
        <input type="text" placeholder="Enter party name" id="name" required />
      </div>

      <div class="form-control">
        <input type="text" placeholder="Enter party leader name" id="leader" required />
      </div>

      <div class="form-control">
        <span class="file-btn" onclick="document.getElementById('symbol').click()">Choose Party Symbol</span>
        <input type="file" id="symbol" style="display: none;" name="symbol" accept="image/*" />
      </div>

      <div class="form-control">
        <span class="file-btn" onclick="document.getElementById('flag').click()">Choose Party Flag</span>
        <input type="file" id="flag" style="display: none;" name="flag" accept="image/*" />
      </div>

      <div class="res">
        <img src="../assets/img/loader.gif" alt="">
      </div>

      <div class="form-control">
        <button class="awesome" name="submit" id="submit" type="submit">Submit</button>
      </div>

    </form><!-- form -->

  </section><!-- content -->
</div><!-- container -->
<!-- form -->

<script>
  addParty();
</script>