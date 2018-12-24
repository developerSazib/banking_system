<?php
require_once './header.php';
require_once '../config.php';
$accessId = $_GET['accessId'];
$result = mysqli_query($link, "SELECT * FROM `loan_request` WHERE `loan_id` = '$accessId'");
$row = mysqli_fetch_assoc($result);
?>
<div class="container">
    <section class="request_details">
        <p>Access Request</p>
        <div class="request_details_box">
            <fieldset class="scheduler-border">
                <legend class="scheduler-border">loan id <?= $row['loan_id']; ?></legend>
                <div class="control-group">

                    <div class="row">
                        <div class="col-md-6">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="purpose_box">
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Purpose</legend>
                                        <div class="control-group">
                                            <span><?= $row['loan_purpose']; ?></span>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="loan_request_details">
                                    <div class="loan_request_details_single">
                                        <div class="row">
                                            <div class="col-md-4">Requested Amount</div>
                                            <div class="col-md-8"><input type="text" value="<?= $row['amount'] . ' ' . $row['currency']; ?>" readonly="" class="form-control" /></div>
                                        </div>
                                    </div>
                                    <div class="loan_request_details_single">
                                        <div class="row">
                                            <div class="col-md-4">Requested Loan Date</div>
                                            <div class="col-md-8"><input readonly="" type="text" value="<?= $row['request_date']; ?>" class="form-control" /></div>
                                        </div>
                                    </div>
                                    <div class="loan_request_details_single">
                                        <div class="row">
                                            <div class="col-md-4">Loan Requested</div>
                                            <div class="col-md-8"><input type="text" value="<?= $row['loan_type']; ?>"  readonly="" placeholder="date" class="form-control" /></div>
                                        </div>
                                    </div>
                                    <div class="loan_request_details_single">
                                        <div class="row">
                                            <div class="col-md-4">Alternative</div>
                                            <div class="col-md-8"><input type="text" value="<?= $row['loan_type']; ?>/F2" readonly="" class="form-control" /></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="loan_uploded_document">
                                    <fieldset class="scheduler-border">
                                        <legend class="scheduler-border">Uploaded Documents</legend>
                                        <div class="control-group">
                                            <div class="row">
                                                <div class="col-md-2"><a href="uploaded/file/<?= $row['document_name']; ?>"><i class="fa fa-file-pdf-o"></i></a></div>
                                                <div class="col-md-6 check_right"><i style="color: green;font-size: 35px;margin-top: 20px;" class="fa fa-check-circle-o"></i></div>
                                            </div>
                                        </div>
                                    </fieldset>
                                </div>
                                <div class="approve_btn text-center">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <a class="btn btn-default" href="approve_req.php?approve_id=<?= $row['loan_id']; ?>" onclick="return confirm('Are you sure you want to approve this?')">Approve</a>
                                        </div>
                                        <div class="col-md-6">
                                            <a class="btn btn-default" href="disable_req.php?desable_id=<?= $row['loan_id']; ?>" onclick="return confirm('Are you Sure you want to disable this?')">Not Approve</a>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="col-md-6">
                            <div class="customer_details">
                                <fieldset class="scheduler-border">
                                    <legend class="scheduler-border">Customer</legend>
                                    <div class="control-group">
                                        <div class="row">
                                            <div class="col-md-5">
                                                  <div class="customer_profile text-center">
                                                      <img class="img-thumbnail mb-0 pb-0" style="width: 150px;height: 150px;" src="../images/user-male-icon.png" alt="user profile" />
                                            <br />
                                            <br />
                                            <p class="customer_info mb-2">
                                                Linda B Poulsen <br />
                                                Diamond+ Customer <br />
                                                Credit Score 97
                                            </p>
                                        <!--     <p class="customer_contract p-0 m-0">
                                                istink@dbbridge.com <br />
                                                +45 9872 7398
                                            </p> -->
                                        </div>
                                            </div>
                                            <div class="col-md-7">
                                                <canvas id="myChart"></canvas>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-sm btn-success rounded-0 mr-3">E-Tax</button>
                                                <button class="btn btn-sm btn-success rounded-0 mr-3">Pension</button>
                                                <button class="btn btn-sm btn-success rounded-0">Account (Netbanking)</button>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    <div class="loan_details_message_box">
                      
                        <form action="" method="post">

                            <textarea name="message" class="form-control" placeholder="type your message here"></textarea>
                     
          <br />
                               <?php
                        if (isset($_POST['save_exit'])){
                            $message = $_POST['message'];
                            $message_id = $row['loan_id'];

                            $message_result = mysqli_query($link,"INSERT INTO `message`(`message_first`, `message_acces`, `message_id`) VALUES ('Loan application #','$message','$message_id')");
                            if($message_result){
                                echo '<div class="alert alert-success col-md-4 text-center">'.'message send successfully'.'</div>';
                            }  else {
                                echo '<div class="alert alert-success col-md-4 text-danger">'.'message was not send for some problem'.'</div>';
                            }
                        }
                    ?>
                            <input type="submit" class="btn btn-info rounded-0 m-1" value="Save And Close" name="save_exit" />  
                  
                    </form>
                     </div>


                   </div>
            </fieldset>
        </div>
    </section>
</div>