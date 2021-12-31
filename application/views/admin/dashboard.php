<div class="container-fluid">
    <div class="row text-center">

        <?php foreach ($barang as $brg) : ?>

            <div class="card ml-3 mb-3" style="width: 14.5rem;">
                <img src="<?php echo base_url().'/uploads/'.$brg->gambar ?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title mb-1"><?php echo $brg->nama_brg?></h5>
                    <small><?php echo $brg->keterangan ?></small><br>
                    <span class="badge badge-success mb-2">Rp. <?php echo number_format($brg->harga, 0,',','.')   ?></span><br>
                    
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>