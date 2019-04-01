<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Письма с сайта
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li class="active">Письма с сайта</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Имя</th>
                                <th>Email</th>
                                <th>Телефон</th>
                                <th>Сообщение</th>
                                <th>Действие</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($mails as $mail): ?>
                                <tr>
                                    <td><?=$mail->name;?></td>
                                    <td><?=$mail->email;?></td>
                                    <td><?=$mail->phone;?></td>
                                    <td><?=$mail->content;?></td>
                                    <td><a href="<?=ADMIN;?>/mail/delete?id=<?=$mail->id;?>" class="delete"><i class="fa fa-fw fa-trash text-danger"></i></a></td>
                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->