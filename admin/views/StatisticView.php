<?php
    //load file layout.php
    $this->layoutPath = "Layout.php";
 ?>
<div class="col-md-12">
    <h2 style="text-align: center">Doanh thu</h2>
    <div class="panel panel-primary">
        <div class="panel-heading">Doanh thu</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Ảnh sản phẩm</th>
                    <th>Tên sản phẩm</th>
                    <th style="width:150px;">Đã bán</th>
                    <th style="width: 70px;">Số tiền</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="text-align: center;">
                        <?php if(file_exists("../assets/upload/products/".$rows->photo)): ?>
                        <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name ?></td>
                    <td><?php echo $rows->sold; ?></td>
                    <td><?php echo number_format($rows->money); ?></td>

                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=statistic&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
