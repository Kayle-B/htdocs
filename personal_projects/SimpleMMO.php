<?php
  include(dirname(__DIR__).'/includes/header.php');
?>

<div id="main">
  <div class="content SMMO-content">
    <h1 class="title">My SimpleMMO data</h1>
    <h2 class="title" id="username"></h2>

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

    <!-- <div class="tag s-tag-bosses" id="bosses_table" >
        <div class="tag-head s-tag-head-bosses" id="tag-head">Bosses</div>
        <div class="tag-content" id="bosses-content"></div>
    </div> -->
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
