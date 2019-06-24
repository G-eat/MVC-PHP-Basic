<h1>Index</h1>

<?php foreach ($this->data['data'] as $data) {
  echo $data['id'] . ' . '. $data['name']; ?>
   <a href="/home/delete/<?php echo $data['id'] ?>">X</a>
   <br>
<?php } ?>
