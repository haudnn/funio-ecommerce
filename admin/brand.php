<?php include('config/db.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="content">
        <?php include('includes/navbar.php'); ?>
        <div class="content-main">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="toast-mess-container">
                <button class=" alert-toast-message alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message']?>
                        <i  onclick="deleteAlert()"  class=" alert-toast-message-icon ti-close"></i>
                    </button>
               </div>
            <?php session_unset(); } ?>
            <div class="content__header">
                <h3 class="content__title">Brand</h3>
                <div class="cotent__header-nav">
                    <a href="index.php" class="content__header-nav-link">Dashboard / Brand</a> 
                </div>    
            </div>
            <div class="content__table">
                <div class="table-responsive">
                    <button type="button" class="btnAdd"> + Add New Brand</button>      
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="row" style="font-size:1.5rem; padding-bottom:20px; font-weight:500;">Image</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Name</th>
                                <th scope="row"style="font-size:1.5rem; font-weight:500;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM brand";
                                $result_tasks = mysqli_query($conn, $query);    
                                while($row = mysqli_fetch_assoc($result_tasks)) { ?>
                            <tr style="border-bottom: 1px solid #dee2e6; ">
                                <td>
                                    <img src="<?php echo "./upload/" .$row['brand_img'];?>" width="60px" height="60px" alt="">     
                                </td>
                                <td style="font-size:1.5rem;"><?php echo $row['brand_name']; ?></td>                          
                                <td>
                                    <a style="font-size:1.5rem; margin-right:20px;" href="edit_brand.php?id=<?php echo $row['brand_id']?>" class="btn btn-sm ">
                                        <span class="iconify" data-icon="uil:pen"></span>
                                    </a>
                                    <a style="font-size:1.5rem" href="delete_brand.php?id=<?php echo $row['brand_id']?>" class="btn btn-sm" onclick="return confirm('Are you sure you want to delete this brand?');">
                                        <span class="iconify trash" data-icon="uil:trash-alt"></span>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Add -->
    <div class="modal modal__add-product js-modal">
        <div class="modal__container js-modal-container">
            <div class="modal-content">
                <div class="modal-close js-modal-close">
                    <i class="modal-close-icon fas fa-times"></i>
                </div>
                <div class="box-content">
                    <div class="form-wrapper active" >
                        <div class="modal-heading">
                            <h2 class="modal-heading__text">ADD BRAND</h2>
                        </div>
                        <form action="add_brand.php" class="form-add-product" method="POST" enctype="multipart/form-data"> 
                            <div class="form-content">
                                <div class="form-group">
                                    <label class="product__header">Brand Name</label>
                                    <select  class="form-select" id="brand-select" name="sltBrand">
                                        <option value="">--Please choose an option--</option>
                                        <option value="Blast" >Blast</option>
                                        <option value="Minimal">Minimal</option>
                                        <option value="Money">Money</option>
                                        <option value="Best Sound" >Best Sound</option>
                                        <option value="RedBox">RedBox</option>
                                        <option value="Camp Fire">Camp Fire</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="product__header" for="product__input-img">Brand Image <small>(format: jpg, jpeg, png)</small></label>
                                    <input type="file" name="brandImage" class="product__input product__input-img">
                                </div>      
                                <div class="button-create">
                                    <input type="submit" name="btncreate" class="btn-create" value="ADD BRAND">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include('includes/footer.php'); ?>