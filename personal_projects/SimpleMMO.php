<?php
  include(dirname(__DIR__).'/includes/header.php');

?>

<div id="main">
  <div class="content SMMO-content">
    <h1 class="title">My SimpleMMO data</h1>
    <h2 class="title" id="username"></h2>
    <form action="/personal_projects/SimpleMMO.php" method="POST">
      <label for="">Username</label>
      <input name="User_id" type="text">
      <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if(isset($_POST["submit"])){
      $_SESSION["User_id"] = $_POST["User_id"];
      echo $_SESSION["User_id"];
    }

    ?>
    <div id="loadingbar">
      <div id="bar">10%</div>
    </div>
    <button class="title" onclick="moveBar()">Click</button>
    <div class="cards">
      <div class="card s-card-stats">
        <div class="card-head s-card-head-stats" id="card-head">Stats</div>
        <div class="card-content" id="stats-content">
          <div class="card-item" id="card-item-lvl"></div>
          <div class="card-item" id="card-item-def"></div>
          <div class="card-item" id="card-item-dex"></div>
          <div class="last-card-item" id="card-item-str"></div>
        </div>
      </div>

      <div class="card s-card-skills">
        <div class="card-head s-card-head-skills" id="card-head">Skills</div>
        <div class="card-content" id="skills-content"></div>
      </div>
    </div>

  <div class="bosses">
    <div class="bosses-head">Bosses</div>
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Time</th>
          <th>Risk</th>
          <th>Level</th>
        </tr>
      </thead>
      <tbody id="table-row"></tbody>
    </table>
  </div>
  </div>
</div>


<?php
  include(dirname(__DIR__).'/includes/footer.php');
?>

<script>
  getSMMO_stats();
  getSMMO_skills();
  getSMMO_bosses();
</script>
