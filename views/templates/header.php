<!doctype html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php
         if(isset($this->bulmaCSS)){
    ?>
     <link rel="stylesheet" href="<?= $this->bulmaCSS ?>">
   <?php } ?>
    <?php
         if(isset($this->estilosCSS)){
    ?>
     <link rel="stylesheet" href="<?= $this->estilosCSS ?>">
   <?php } ?>
    <title>CRUD</title>
  </head>
  <body>

   