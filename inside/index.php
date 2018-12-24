<?php require_once './header.php'; ?>
<body>
    <header class="header_area">
        <div class="header_top">
            <h1>Welcome to BRIDGE INSIDE</h1>
            <div class="row">
                <div class="col-md-6">
                    <div class="advisor_profile text-center">
                        <img class="img-thumbnail mb-0 pb-0" style="width: 150px;height: 150px;" src="../images/user-male-icon.png" alt="user profile" />
                        <br />
                        <br />
                        <p class="advisor_info mb-2">
                            Ivan S T.Inker <br />
                            Senior Advisor <br />
                        </p>
                        <p class="contract">
                            +45 99 88 77 11
                        </p>
                        <p class="customer_contract p-0 m-0">
                            istink@dbbridge.com <br />
                        </p>
                        <button class="btn btn-sm btn-danger rounded-0 m-1">Request for skype meeting</button>
                    </div>
                </div>
                <div class="col-md-2"></div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="header_btn_item">
                                <a href="#" class="header_btn_single">Access Wealth Planning</a>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="header_btn_item">
                                <a href="#" class="header_btn_single">Open Loan Request</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_bottom">
            <div class="row">
                <div class="col-md-4">
                    <div class="admin_notifuication">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Notification</legend>
                            <div class="control-group">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="bell">
                                            <i class="fa fa-bell-o"></i>
                                        </div>
                                    </div>
                                    <div class="admin_notification_box">
                                        <p>Loan application #1999 has been ready for assesment</p>
                                        <p>Loan application #1998 has been ready for assesment</p>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="request_table">
                        <fieldset class="scheduler-border">
                            <legend class="scheduler-border">Open Request</legend>
                            <div class="control-group">
                                <div class="requst_search text-right">
                                    <span><i class="fa fa-search"></i>
                                        <input class="" type="search" placeholder="Search Loan Id" /></span>
                                </div>
                                <div class="requst_table_item">
                                    <table style="background: #fff;" class="table-bordered table table-striped">
                                        <tr>
                                            <th>Loan Id</th>
                                            <th>Amount</th>
                                            <th>Request Date</th>
                                            <th>Employee</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>

                                        <?php
                                        $loan_request_query = "SELECT * FROM `loan_request` ORDER BY `id` DESC LIMIT 5";
                                        $select_result = mysqli_query($link, $loan_request_query);
                                        while ($row = mysqli_fetch_assoc($select_result)) {
                                            ?>
                                            <tr>
                                                <td><?= $row['loan_id'] ?></td>
                                                <td><?php echo $row['amount'] . ' ' . $row['currency']; ?></td>
                                                <td><?= $row['request_date']; ?></td>
                                                <td>Ivan ST Inkar</td>
                                                <td>Advisor</td>
                                                <td><a class="btn btn-default btn-xs" target="_blank" href="access_request.php?accessId=<?= $row['loan_id'] ?>">access</a></td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </table>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <br />
    <br />
</body>
</html>