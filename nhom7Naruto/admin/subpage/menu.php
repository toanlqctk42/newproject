<style>
    .wrapper {
        width: 1200px;
        margin: 100px auto;
    }

    .title {
        text-align: center;
        margin-bottom: 60px;
    }

    .title h4 {
        text-transform: capitalize;
        font-size: 36px;
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
    }

    .title h4 span {
        display: block;
        font-size: 18px;
        font-style: italic;
        margin-bottom: 10px;
    }

    .title h4:before {
        position: absolute;
        content: "";
        width: 100px;
        height: 2px;
        background-color: #ff7720;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .menu {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .single-menu {
        flex-basis: 580px;
        margin-bottom: 40px;
        padding-bottom: 40px;
        border-bottom: 1px solid #ddd;
    }

    .single-menu:nth-child(5),
    .single-menu:nth-child(6) {
        border-bottom: 0;
    }

    .single-menu {
        display: flex;
        flex-direction: row;
        align-items: center;
    }

    .single-menu:hover img {
        border-radius: 0;
    }

    .single-menu img {
        max-width: 180px;
        margin-right: 30px;
        border-radius: 50%;
        border: 1px solid #ddd;
        padding: 3px;
        transition: .5s;
    }

    .single-menu h4 {
        text-transform: capitalize;
        font-size: 22px;
        border-bottom: 1px dashed #333;
        margin-bottom: 5px;
        padding-bottom: 5px;
    }

    .single-menu h4 span {
        float: right;
        color: #ff7720;
        font-style: italic;
    }

    .a-add {
        position: absolute;
        top: 0;
        right: 0;
    }
</style>
<?php
require_once './controllers/products.php';
?>
<div class="wrapper">
    <div class="title">
        <h4><span>fresh food for good health</span>menu</h4>
    </div>
    <button class="btn btn-success a-add mr-4 mt-4" data-toggle="modal" data-target="#exampleModal">Thêm Món</button>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <input type="hidden" name="action" value="addProd">
                        <div class="row">
                            <div class="col">
                                <input type="text" name="name" class="form-control" placeholder="Tên Món">
                            </div>
                            <div class="col">
                                <input type="text" name="price" class="form-control" placeholder="Giá">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col ml-3">
                                <input type="text" name="img" class="form-control" placeholder="Hình">
                            </div>
                            <div class="col">
                                <input type="text" name="unit" class="form-control" placeholder="Đơn vị">
                            </div>
                            <div class="col">
                                <input type="text" name="idcate" class="form-control" placeholder="Loại">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                            <button type="submit" class="btn btn-primary">Xác Nhận</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="menu">
        <?php foreach ($prod as $pro) { ?>
            <div class="single-menu">
                <img src="./public/assets/images/<?= $pro->Images ?>" alt="">
                <div class="menu-content">
                    <h4><?= $pro->NameMenu ?> <span><?= $pro->Price ?>đ</span></h4>
                    <p>Aperiam tempore sit,perferendis numquam repudiandae porro voluptate dicta saepe facilis.</p>
                </div>
            </div>
        <?php } ?>
    </div>
</div>
<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').trigger('focus')
    })
</script>