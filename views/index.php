<html>
<head>

    <link rel="stylesheet" href="<?= $_ENV['ASSETSURL'] ?>css/bootstrap.min.css"/>
    <link rel="stylesheet" href="<?= $_ENV['ASSETSURL'] ?>css/all.min.css"/>
    <link rel="stylesheet" href="<?= $_ENV['ASSETSURL'] ?>css/index_style.css"/>

    
    

</head>
    
<body>
    
    <div class="responseMsg">
        
    </div>
    
    <div class="jumbotron jum">
        
        <div class=" navbar">
        <h3>دفترچه تلفن<i class="far fa-address-book"></i></h3>
        
        </div>
        
        
        <div class="row">
            
            
            <div class="col-lg-4 inp">

                <form action="" >
                    <input id="myInput" name="search" class="form-control mt-2" placeholder="search">
                    <span class="icon text-primary"><i class="fas fa-search"></i></span>
                </form>
                
                <h5 class="mt-2">اضافه کردن مخاطب جدید</h5>
                <form id="formAddPhone">
                    
                    <input name="name" class="form-control mb-3 mt-3" placeholder="add name" id="userName">
                    <div id="nameAlert" class="alert alert-danger text-justify p-2 ">نام خود را وارد کنید</div>
                    <input name="number" class="form-control mb-3" placeholder="add phone" id="userPhone">
                    <div id="phoneAlert" class="alert alert-danger text-justify p-2 ">لطفا شماره معتبری وارد نمیایید</div>
                    <input name="email" class="form-control mb-3" placeholder="add e-mail" id="userEmail">
                    <div id="mailAlert" class="alert alert-danger text-justify p-2 ">لطفا ایمیل معتبری وارد نمیایید</div>

                    <button name="sub-data" class="btn btn-info w-100 btn1">اضافه کردن</button>

                </form>

                
            </div>
            
            
    <div class="col-lg-8">
            
            <table id="myTable" class="table text-justify table-striped">
        
            <thead class="tableh1">
            <th class="">شناسه</th>
            <th class="">نام کاربر</th>
            <th class="">شماره همراه</th>
            <th class="">ایمیل</th>
            <th class="col-1">عملیات</th>
            <th class="col-1"></th>    
            </thead>
            
            <tbody id="tableBody">
                <?php foreach ($data['contacts'] as $contact):?>
                  
                <tr>
                    <td><?= $contact['ID'] ?></td>
                    <td><?= $contact['name'] ?></td>
                    <td><?= $contact['number'] ?></td>
                    <td><?= $contact['email'] ?></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        
            </table>

            <div class="pagination">
                <a href="#">&laquo;</a>
                <?php for ($i=1; $i <= $data['countOfPage']; $i++): ?>
                <a href="?page=<?= $i ?>"><?= $i ?></a>
                <?php endfor; ?>
                <a href="#">&raquo;</a>
            </div>
    </div>
            
        
        
        </div>    
    </div>
    
    
            
        <script src="<?= $_ENV['ASSETSURL'] ?>js/jquery-3.3.1.min.js"></script>
        <script src="<?= $_ENV['ASSETSURL'] ?>js/popper.min.js"></script>
        <script src="<?= $_ENV['ASSETSURL'] ?>js/bootstrap.min.js"></script>
        <!-- <script src="<?= $_ENV['ASSETSURL'] ?>js/index.js"></script> -->
        <script src="<?= $_ENV['ASSETSURL'] ?>js/costum.js"></script>
</body>
    
</html>













