<?php
   session_start();
require_once './header.php'; ?>
<?php require_once './config.php';?>

<?php 
$access_user =  $_SESSION['application_success'] ;
$user_info = mysqli_query($link, "SELECT * FROM `loan_request` WHERE `loan_id` = '$access_user'");

$row = mysqli_fetch_assoc($user_info);
?>
<section class="application_details">
    <div class="container">
        <div class="application_details_box">
            <p>Loan Id <?=$row['loan_id']?></p>
            <div class="row">
                <div class="col-md-8">
                    <div class="application_details_box_top">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="back_btn">
                                    <p><b><a style="text-decoration: none;color: #000000; margin-left: 10px;" href="index.php"><i class="fa fa-arrow-circle-left"></i> Back to Netbank</a></b></p>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="loan_pending_type">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <div class="application_complete">
                                                <div class="row">
                                                    <div style="height: 25px;width: 25px;border:5px solid green;border-radius: 50%;"></div>
                                                    <div class="col-md-6"><h5 style="color:#000000"> Complete</h5></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="application_complete">
                                                <div class="row">
                                                    <div  style="height: 25px;width: 25px;border:5px solid yellow;border-radius: 50%;"></div>
                                                    <div class="col-md-6"><h5 style="color:#000000"> Pending</h5></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="application_complete">
                                                <div class="row">
                                                    <div  style="height: 25px;width: 25px;border:5px solid blue;border-radius: 50%;"></div>
                                                    <div class="col-md-6"><h5 style="color:#000000"> Inactive</h5></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="loan_status_bar mt-5 mb-5" >
                        <div class="row">
                            <div class="col-md-2"><p style="color: #000000; margin-left: 10px;"><b>Loans Status</b></p></div>
                            <div class="col-md-10">
                                <div class="loan_bar"></div>
                                <div class="loan_icon">
                                    <div class="row text-center">
                                        <div class="col-md-3 ">
                                            <a href="#">
                                                <div class="circle" style="height: 40px;width: 40px;border: 5px solid green;border-radius: 50%;"></div>
                                                <button class="btn btn-outline-secondary rounded-0 border-0 pull-left mt-1">Application</button>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <?php
                                                if($row['status'] == 1){
                                                    echo '<div class="circle" style="height: 40px;width: 40px;border: 5px solid green;border-radius: 50%;">'.'</div>';
                                                    }  else {
                                                      echo '<div class="circle" style="height: 40px;width: 40px;border: 5px solid blue;border-radius: 50%;">'.'</div>';
                                                }?>
                                                
                                                <button class="btn btn-outline-secondary rounded-0 border-0 pull-left mt-1" style="margin-left:0;">Advisor <br /> Assessment</button>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="#">
                                                <div class="circle" style="height: 40px;width: 40px;border: 5px solid blue;border-radius: 50%;"></div>
                                                <button class="btn btn-outline-secondary rounded-0 border-0 pull-left mt-1">Credit  <br /> Assessment</button>
                                            </a>
                                        </div>
                                        <div class="col-md-3">
                                            <a href="">
                                                <div class="circle" style="height: 40px;width: 40px;border: 5px solid blue;border-radius: 50%;"></div>
                                                <button class="btn btn-outline-secondary rounded-0 border-0 pull-left mt-1">Decision</button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="application_details_footer">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="advisor_profile text-center">
                                    <img class="img-thumbnail mb-0 pb-0" style="width: 150px;height: 150px;" src="images/user-male-icon.png" alt="user profile" />
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
                            <div class="col-md-5">
                                <div class="details_document">
                                    <p>Documents</p>
                                    <div class="details_document_box text-center">
                                        <i class="fa fa-file-excel-o"></i>
                                        <i class="fa fa-file-word-o"></i>
                                        <i class="fa fa-file-pdf-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="details_access">
                                    <p>Access</p>
                                    <span>E-tax 
                                        <?php
                                            if($row['access1'] == "e_tax"){
                                                echo '<i style="margin-left: 40px;" class="fa fa-check-square">'.'</i>';
                                            }  else {
                                                echo '<i class="fa fa-times text-danger" aria-hidden="true">'.'</i>';
                                            }
                                        
                                        ?>
                                        
                                    </span>
                                    <br />
                                    <br />
                                    <span>Pension    
                                     <?php
                                            if($row['access2'] == "pension"){
                                                echo '<i style="margin-left: 20px;" class="fa fa-check-square">'.'</i>';
                                            }  else {
                                                echo '<i class="fa fa-times text-danger" aria-hidden="true">'.'</i>';
                                            }
                                        
                                        ?>
                                    </span>
                                    <br />
                                    <br />
                                    <span>Account   
                                          <?php
                                            if($row['access3'] == "account"){
                                                echo '<i style="margin-left: 20px;" class="fa fa-check-square">'.'</i>';
                                            }  else {
                                                echo '<i class="fa fa-times text-danger" aria-hidden="true">'.'</i>';
                                            }
                                        
                                        ?>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="height:500px">
                    <div class="ntoification_area">
                        <div class="ntoification_area_top">
                            <div class="row">
                                <div class="col-md-10">
                                    <p>
                                        <strong>Notification (1)</strong>
                                    </p>
                                </div>
                                <div class="col-md-2">
                                    <div class="bell">
                                        <i class="fa fa-bell-o"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="notification_message">
                                <?php
                                $message_id = $row['loan_id'];
                                $message_result = mysqli_query($link, "SELECT * FROM `message` WHERE `message_id` = '$message_id' order by `id` desc limit 2");
                                while ($message_row =  mysqli_fetch_assoc($message_result)) {
                                    ?>
                                     <p><i class="fa fa-exclamation-circle"></i><strong> <?=$message_row['message_first'].$message_row['message_id'].' '.$message_row['message_acces'];?></strong></p>
                                
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                        <div class="chating_area">
                            <div class="chating_btn p-0 m-0">
                                <button class="btn btn-primary rounded-0 m-0">Linda</button>
                            </div>
                            <div class="chating_area_box">
                                <strong class="mt-3">Chat with bridge builder</strong>
                                <form action="" method="post">
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                    <textarea name="message" class="form-control" placeholder="Type Your message here" ></textarea>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>