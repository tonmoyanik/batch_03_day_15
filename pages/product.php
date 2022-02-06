<?php include 'header.php' ?>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <?php foreach ($products as $product) { ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="assets/img/<?php echo $product['image']; ?>" alt="" class="card-img-top" />
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $product['title']; ?></h4>
                                <h3><?php echo $product['price']; ?></h3>
                                <h2><?php echo $product['brand']; ?></h2>
                                <h1><?php echo $product['description']; ?></h1>

                                <hr/>
                                <a href="" class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>



<?php include 'footer.php' ?>