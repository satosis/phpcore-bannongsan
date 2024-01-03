<?php 
    //load file layout.php
    $this->layoutPath = "Layout.php";
 ?>
<div class="col-md-12">
    <h2 style="text-align: center">Sản phẩm</h2>
    <div style="margin-bottom:5px;">
        <a href="index.php?controller=products&action=create" class="btn btn-primary">Add products</a>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">List Products</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th style="width: 100px;">Ảnh sản phẩm</th>
                    <th>Tên</th>
                    <th style="width:150px;">Danh mục sản phẩm</th>
                    <th style="width: 70px;">Giá sản phẩm</th>
                    <th style="width: 70px;">Giảm giá</th>
                    <th style="width:70px;">Sản phẩm hot</th>
                    <th style="width:120px;">Chức năng</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="text-align: center;">
                        <?php if(file_exists("../assets/upload/products/".$rows->photo)): ?>
                        <img src="../assets/upload/products/<?php echo $rows->photo; ?>" style="width: 100px;">
                        <?php endif; ?>
                    </td>
                    <td><?php echo $rows->name ?></td>
                    <td><?php echo $this->getCategory($rows->category_id); ?></td>
                    <td style="text-align: center;"><?php echo number_format($rows->price); ?></td>
                    <td style="text-align: center;"><?php echo $rows->discount; ?>%</td>
                   <td style="text-align: center;"><?php if($rows->hot==1): ?><span class="fa fa-check"></span><?php endif; ?></td>
                    <td style="text-align:center;">
                        <a href="index.php?controller=products&action=update&id=<?php echo $rows->id; ?>">
                            <img style="width: 18px" src="../assets/frontend/images/edit.png" alt="update">
                        </a>&nbsp;
                        <a href="index.php?controller=products&action=delete&id=<?php echo $rows->id; ?>" onclick="return window.confirm('Are you sure?');">
                            <img style="width: 18px" src="../assets/frontend/images/delete.png" alt="delete">
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item disabled"><a href="#" class="page-link">Trang</a></li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item"><a href="index.php?controller=products&page=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a></li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>