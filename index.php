<?php include "header.php" ?>


    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <?php
        $sql = "SELECT * FROM `category`";
        $result = $conn->query($sql);
        $Count = 0;
        while ($row = $result->fetch_assoc()) {
          if ($Count == 0) {
        ?>
            <div class="carousel-item active">
              <img src="<?= "admin/uploads/" . $row['Filename'] ?>" class="d-block w-100" alt="...">
            </div>
          <?php

          } else {
          ?>
            <div class="carousel-item">
              <img src="<?= "admin/uploads/" . $row['Filename'] ?>" class="d-block w-100" alt="...">
            </div>
        <?php

          }
          $Count++;
        }
        ?>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>




<?php include "footer.php" ?>