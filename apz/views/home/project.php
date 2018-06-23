<h2 class="text-center">Project</h2>
<hr class="dark">
<div class="row">
  <?php foreach($projects as $project): ?>
  <div class="col-lg-4" style="margin-bottom: 25px">
    <img class="img-fluid" src="<?= $project->foto ?>" alt="">
    <h5><?= $project->nama ?></h5>
    
    <div class="project-info">
      <p style="margin-bottom: 0; font-size: inherit"><i class="fa fa-calendar fa-fw"></i> <?= $project->selesai ?></p>
      <p style="margin-bottom: 0; font-size: inherit"><i class="fa fa-user fa-fw"></i> <?= $project->pemohon ?></p>
    </div>
  </div>
  <?php endforeach; ?>
</div>