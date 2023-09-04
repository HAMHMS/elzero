<a href="?action=add" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New Slider</a>
<table class="table">
  <thead>
    <tr>
      <th class="header">Slider Image</th>
      <th class="header">Slider Title</th>
      <th class="header">Slider Name</th>
      <th class="header">Controls</th>
    </tr>
  </thead>
  <tbody>

    <?php
    include 'functions/connect.php';
    $select = "SELECT * FROM slider";
    $query = $conn -> query($select); 
    foreach ($query as $slider) {
    ?>
    <tr>
      <td><img style="width:700px; height: 300px;" src="images/<?= $slider['image'] ?>"></td>
      <td><?= $slider['title'] ?></td>
      <td><?= $slider['name'] ?></td>
      <td>
      <a class="btn btn-primary" href="?action=edit&id=<?= $slider['id'] ?>">Edit</a>
      <!-- Button trigger modal -->
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#<?= $slider['id'] ?>">
          Delete
        </button>

        <!-- Modal -->
        <div class="modal fade" id="<?= $slider['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                are you sure you want to delete <?= $slider['name'] ?> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="functions/delete_slider.php?id=<?= $slider['id'] ?>" class="btn btn-danger">confirm</a>
              </div>
            </div>
          </div>
        </div>
      </td>  
      <?php } ?>  
    </tr>

  </tbody>
</table>