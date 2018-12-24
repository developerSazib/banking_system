<?php
session_start();
require_once './header.php'; 
require_once './config.php';
?>

<?php
if (isset($_POST['application_submit'])) {
    $loan_id =date('dis');
    $loan_purpose = $_POST['loan_purpose'];
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
    $request_date = $_POST['request_date'];
    $loan_type = $_POST['loan_type'];
    $access1 = $_POST['access1'];
    $access2 = $_POST['access2'];
    $access3 = $_POST['access3'];
//    document
    $document_file = $_FILES['document']['name'];
    $document_ex = explode('.', $document_file);
    $document_ex = end($document_ex);
    $document_name = $loan_id.date('his').'.'.$document_ex;
    $temp_name = $_FILES['document']['tmp_name'];


//    input_error
    $input_error = array();
    if(empty($loan_purpose) || empty($amount) || empty($currency) || empty($request_date) || empty($loan_type)){
        $insert_error = "Something is missing || must be filled out all field";
    }  else {
        $application_query = "INSERT INTO `loan_request`(`loan_id`, `loan_purpose`, `amount`, `currency`, `request_date`, `loan_type`, `access1`,`access2`, `access3`,  `document_name`) VALUES ('$loan_id','$loan_purpose','$amount','$currency','$request_date','$loan_type','$access1','$access2','$access3','$document_name')";
        $result =  mysqli_query($link, $application_query);
     
        if($result){
            $_SESSION['application_success'] = $loan_id;
            move_uploaded_file($temp_name, 'inside/uploaded/file/'.$document_name);
            header("location:application_details.php");
        }  else {
            $application_error = mysqli_error($link);
        }
    }

}
?>
<section class="application_form">
    <div class="container">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="application_box">
                <p>Application Form</p>
                <div class="purpose_box">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Purpose</legend>
                        <div class="control-group ">
                            <textarea value="<?php if(isset($loan_purpose)){echo $loan_purpose;}?>" name="loan_purpose" class="form-control border-0"></textarea>
                        </div>
                    </fieldset>
                </div>
                <div class="amount_box">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="" style="font-size: 18px;color: #000000;margin-left: 30px;">Requested Amount</p>
                        </div>
                        <div class="col-md-4">
                            <input class="form-control" value="<?php if(isset($amount)){echo $amount;}?>" name="amount" type="text" placeholder="Amount"  />
                        </div>
                        <div class="col-md-4">
                            <select name="currency" id="" class="form-control">
                                <option selected="" value="">Select a Currency</option>
                                <option value="DDK">DKK</option>
                                <option value="UR">UR</option>
                                <option  value="USD">USD</option>
                                <option  value="GDP">GDP</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="date_box">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="" style="font-size: 18px;color: #000000;margin-left: 30px;">Requested Loan Date</p>
                        </div>
                        <div class="col-md-4">
                            <input class="datepicker form-control" value="<?php if(isset($request_date)){echo $request_date;}?>" name="request_date" type="text" placeholder="Date Y/M/D"  />
                        </div>
                        <div class="col-md-4">
                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                </div>
                <div class="loan_tyoe_box">
                    <div class="row">
                        <div class="col-md-4">
                            <p class="" style="font-size: 18px;color: #000000;margin-left: 30px;">Loan Type</p>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control" name="loan_type" id="">
                                <option selected="" value="">Select a Loan Type</option>
                                <option  value="f1">F1</option>
                                <option  value="f2">F2</option>
                                <option  value="f3">F3</option>
                                <option  value="f4">F4</option>
                                <option  value="f5">F5</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <fieldset class="scheduler-border text-center">
                                <legend class="scheduler-border">Grant Access</legend>
                                <div class="control-group">
                                    <input name="access1" value="e_tax" style="margin-right: 15px;" type="checkbox" id="check" />
                                    <label for="check">  E-tax</label>
                                    <br />
                                    <input name="access2" value="pension" style="margin-right: 15px;" type="checkbox" id="Pension" />
                                    <label for="Pension">  Pension</label>
                                    <br />
                                    <input name="access3" value="account" style="margin-right: 15px;" type="checkbox" id="Amount" />
                                    <label for="Amount">  Account</label>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="document_box">
                    <fieldset class="scheduler-border">
                        <legend class="scheduler-border">Documents</legend>
                        <div class="control-group">
                            <div class="row">
                                <div class="col-md-9">
                                    <input type="file" name="document" multiple="" />
                                </div>
                                <div class="col-md-3 text-right"><input type="submit" name="document" value="Upload" class="btn btn-success  rounded-0 m-1 " /></div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <?php
               if (isset($insert_error)) {
                            echo '<p class="alert alert-danger text-center">' . $insert_error . '</p>';
                        }
                        if (isset($application_error)) {
                            echo '<p class="alert alert-danger text-center">' . $application_error . '</p>';
                        }
                ?>
                <div class="action_area text-center">
                    <div class="row">
                        <div class="col-md-4">
                            <input type="reset" class="btn btn-danger rounded-0 m-1" value="Cancel"/>
                        </div>
                        <div class="col-md-4">
                            <input type="submit" name="application_save" class="btn btn-primary rounded-0 m-1" value="Save" />
                        </div>
                        <div class="col-md-4">
                            <input type="submit" name="application_submit" class="btn btn-success rounded-0 m-1" value="Submit" />
                        </div>
                    </div>
                </div>

            </div>
        </form>
    </div>
</section>