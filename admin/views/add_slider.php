<form method="post" action="functions/insert_slider.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Slider Image:</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Slider Title:</label>
        <input type="text" class="form-control" placeholder="Enter slider name" name='title'>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Slider Name:</label>
        <input type="text" class="form-control" placeholder="Enter slider title" name='name'>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Add </button>
</form>