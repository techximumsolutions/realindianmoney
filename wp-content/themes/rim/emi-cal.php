<?php 
error_reporting(0); 
$rate = $_POST['interest']/100/12;
$principle = $_POST['principal'];
$time = $_POST['years']*12;// in month
$x= pow(1+$rate,$time);
$monthly = ($principle*$x*$rate)/($x-1);
$monthly = round($monthly);
$k= $time;
$arr= array();
function getNextMonth($date){
    global $arr;
    global $k;
    if($k==0){
        return 0;	
    }
    $date = new DateTime($date);
    $interval = new DateInterval('P1M');
    $date->add($interval);
    $nextMonth= $date->format('Y-m-d') . "\n";	
    $arr[]= $nextMonth;
    $k--;
    return getNextMonth($nextMonth);
}

getNextMonth('');
$date = "";
$upto = $time;
$i = 0;
$totalint = 0;
$payment_date = date("Y m,d");
$tp =0;
function getEmi($t){
    global $i,$upto, $totalint, $rate,$monthly,$payment_date, $arr,$_SESSION,$tp;
    $i++;
    if($upto<=0){
        return 0;
    }
    $r = $t*$rate;
    $p = round($monthly-$r);
    $e= round($t-$p);
    if($upto==2){
        $_SESSION['tl']= $e;
    }
    if($upto==1){
        $p= $_SESSION['tl'];	
        $e= round($t-$p);
        $monthly= round($p+$r);
    }
    $totalint = $totalint + $r;
    $tp = $tp+$monthly;
    $upto--;
?>
<tr>
    <td>
        <?php echo $i; ?></td>
    <td>
        <?php
    $arrDate1 = explode('-',$arr[$i-1]);
    echo date("M j, Y",mktime(0,0,0,$arrDate1[1],$arrDate1[2],$arrDate1[0]));
        ?></td>
    <td>
        Rs. 
        <?php echo number_format(round($r)); ?>.00
    </td>
    <td>
        Rs. 
        <?php  echo number_format($t); ?>.00
    </td>
    <td>
        Rs. 
        <?php echo number_format($p);  ?>.00
    </td>
    <td>
        Rs. 
        <?php echo number_format($monthly); ?>.00
    </td>
    <td>
        Rs. 
        <?php echo number_format(round($e));  ?>.00
    </td>
</tr>
<?php
    return getEmi($e);
}
?>

<form name="loandata" method="post" action="">
    <table id="emi" width="100%" class="table table-active">
<thead>       
	   <tr>
            <td colspan="3">
                <b>
                    Enter Loan Information:
                </b>
            </td>
        </tr>
		<tr>
                <td> Loan Amount <span class="err">*</span><br>
                <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">&#8377;</div>
              </div>
              <input type="text" name="principal" value="<?php echo (isset($_POST['principal']))?$_POST['principal']:''; ?>" size="12" class="form-control">
            </div>
          </div>
               </td>
                <td>ROI <span class="err">*</span> <br>
                <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">%</div>
              </div>
             <input type="text" name="interest" value="<?php echo (isset($_POST['interest']))?$_POST['interest']:''; ?>" size="12" class="form-control">
            </div>
          </div>
                </td>
                <td>Loan Tenure <span class="err">*</span><br>
                
                <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Yrs</div>
              </div>
              <input type="text" name="years" value="<?php echo (isset($_POST['years']))?$_POST['years']:''; ?>" size="12" class="form-control">
            </div>
          </div>
               </td>
              </tr>
              <tr>
                <td colspan="3"><input type="submit" value="Compute" name="EMI_submit" class="btn btn-primary"></td>
              </tr>
        
    
       </thead>
    </table>
</form>
<div class="table-responisve">
<table class="eni_list table table-striped">
    <?php 
if(!empty($_POST['principal']) || !empty($_POST['interest']) || !empty($_POST['years'])){
    if(empty($_POST['principal'])){
        $error = "Amount of the loan Cant't Be Empty.<br />";
    }
    else if(empty($_POST['interest'])){
        $error= "Annual percentage rate of interest Cant't Be Empty. <br />";
    }
    else if(empty($_POST['years'])){
        $error= "Repayment period in years Cant't Be Empty. <br />";
    }
    else {
        //simple chart dispaly here 
    ?>
    <tr>
        <td colspan="7">
            <table id="result" width="100%">
                <tr>
                    <td colspan="3">
                        <b>
                            Payment Information:
                        </b>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        Your monthly payment will be:
                    </td>
                    <td>
                        <span id="monthly"><strong>Rs.<?php echo round($monthly); ?>.00</strong></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        Your total payment will be:
                    </td>
                    <td>
                        <span ><strong id="total"></strong></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        &nbsp;
                    </td>
                    <td>
                        Your total interest payments will be:
                    </td>
                    <td>
                        <span ><strong id="interest"></strong></span>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr class="emi-heading">
        <td>
            S.N
        </td>
        <td>
            Payment Date
        </td>
        <td>
            Interest
        </td>
        <td>
            Beginning Balance
        </td>
        <td>
            Principle
        </td>
        <td>
            Total Payment
        </td>
        <td>
            Ending Balance
        </td>
    </tr>
    <?php
        getEmi($_POST['principal']); 
    ?>
    <script type="text/ecmascript">
        document.getElementById("interest").innerHTML="Rs."+<?php echo round($totalint); ?>+".00";
        document.getElementById("total").innerHTML="Rs."+<?php echo round($tp); ?>+".00";
    </script>
    <?php
    }}
else {
    $error= "Plese Fill Up All Required Fields.";	
}
    ?>
    <?php if(!empty($error)) : ?>
    <tr>
        <td colspan="6" style="color:#F00; font-size:18px;">
            <?php echo $error; ?></td>
    </tr>
    <?php endif; ?>
</table>
</div>
<?php if(isset($_POST['EMI_submit'])){ ?>
<script language="JavaScript">
    document.getElementById('result').style.display='block';
</script>
<?php } ?>