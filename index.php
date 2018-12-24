<?php require_once './header.php'; ?>
<?php require_once './config.php'; ?>

<header class="header_area">
    <div class="header-top">
        <div class="row">
            <div class="col-md-4">
                <div class="back_btn">
                    <p><b><a style="text-decoration: none;color: #000000;" href=""><i class="fa fa-arrow-circle-left"></i> Back to Netbank</a></b></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="header-heading">
                    <h1 style="margin: 0;font-weight: 700;">Welcome to BRIDGE </h1>
                </div>
            </div>
        </div>
    </div>
    <div class="header_btn text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="header_btn_item">
                        <a href="application.php" class="header_btn_single">Apply For Loan</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header_btn_item">
                        <a href="#" class="header_btn_single">Manage Asset</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header_btn_item">
                        <a href="#" class="header_btn_single">Trading</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="header_btn_item">
                        <a href="#" class="header_btn_single">Guide</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                </div>
                <div class="col-md-8">
                    <div class="open_request_box" style="margin-top: 20px;">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Application</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-md-10">
                                        <table class="table table-bordered table-stripted table-responsive" style="width: 100%;">
                                            <thead style="background:blue;color: #fff;">
                                            <th>Loan Id</th>
                                            <th>Amount</th>
                                            <th>Advisor</th>
                                            <th>Status</th>
                                            <th>action</th>
                                            </thead>
                                            <?php
                                            $query = mysqli_query($link, "SELECT * FROM `loan_request` ORDER BY `id` DESC LIMIT 5");
                                            
                                            while ($row = mysqli_fetch_assoc($query)) {
                                                ?>
                                             <tbody>
                                                <td><?=$row['loan_id']?></td>
                                                <td><?=$row['amount'].' '.$row['currency']?></td>
                                                <td>Ivan ST Inkar</td>
                                                <td>
                                                    <?php
                                                    if($row['status'] ==1 ){
                                                        echo 'Advisor assesment';
                                                    }  else {
                                                        echo 'Application';
                                                    }
                                                    ?>
                                                </td>
                                                <td><a href="user_application_view.php?vew_id=<?=$row['loan_id'];?>" class="btn  btn-primary rounded-0">View</a></td>
                                            </tbody>
                                            <?php
                                            }
                                            ?>
                                           
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
</body>
</html>