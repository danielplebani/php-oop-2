<main class="container py-5">

        <div class="d-flex align-items-center mb-5">
            <h5 class="m-0">ALL THE PRODUCTS</h5>
            <i class="fa-solid fa-arrow-down-short-wide ms-2"></i>
        </div>


        <div class="d-flex justify-content-center flex-wrap gap-3">
            <?php foreach ($shopProducts as $product) : ?>
                <div class="card bg-warning" style="width: 19rem;">
                    <img src="<?= $product->getImg() ?>" style="height: 17rem; object-fit:cover;" alt="img-card">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product->getTitle() ?></h5>
                    </div>

                    <ul class="list-group list-group-flush bg-warning">
                        <li class="list-group-item bg-warning border-0">PRICE: <?= $product->getPrice() ?></li>
                        <li class="list-group-item bg-warning border-0">TYPE: <?= $product->getType() ?></li>
                        <li class="list-group-item bg-warning border-0">
                            CATEGORY:
                            <?php if ($product->getCategory() == 'dog') : ?>
                                <i class="fa-solid fa-dog"> dog</i>
                            <?php else : ?>
                                <i class="fa-solid fa-cat"> cat</i>
                            <?php endif; ?>
                        </li>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>

    </main>