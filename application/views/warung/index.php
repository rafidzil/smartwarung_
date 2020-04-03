<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Profile</span></p>
            <h1 class="mb-0 bread"><?php echo $user['name']; ?></h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section ftco-cart">
			<div class="container">
				<div class="row">
    			<div class="col-md-12 ftco-animate">
    				<div class="cart-list">
	    				<table class="table">
						    <thead class="thead-primary">
						      <tr class="text-center">
						        <th>&nbsp;</th>
						        <th>&nbsp;</th>
						        <th>Nama Barang</th>
						        <th>Harga</th>
						        <th>Stok</th>
						        <th>Aksi</th>
						      </tr>
						    </thead>
						    <tbody>
                            <?php foreach($items as $item): ?>
						      <tr class="text-center">
						        <td class="product-remove"><a href="<?php echo site_url('item/delete/').$item['id'] ?>"><span class="ion-ios-close"></span></a></td>
						        
						        <td class="image-prod"><div class="img" style="background-image:url(<?php $photos = explode(',',$item['photo']); echo base_url('assets/uploads/').$photos[0]?>);"></div></td>
						        
						        <td class="product-name">
						        	<a href="<?php echo site_url('item/show/').$item['id'] ?>" class="h4"><?php echo $item['name'] ?></a>
						        	<p><?php echo $item['description'] ?></p>
						        </td>
						        
						        <td class="price"><?php echo "Rp ".number_format($item['price'], 0, ".", ".") ?></td>
						        
						        <td class="price">
                                    <?php echo $item['stock']; ?>
					          	</div>
					          </td>
						        
						        <td class="total">
                                    <a href="<?php echo site_url('item/edit/').$item['id'] ?>" class="btn btn-sm btn-warning"> Edit </a>
                                </td>
                              </tr><!-- END TR-->
                            <?php endforeach; ?>
						    </tbody>
						  </table>
					  </div>
    			</div>
            </div>
        </div>
    </section>