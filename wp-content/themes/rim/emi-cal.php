<?php 
error_reporting(0); 
$rate = $_POST['interest']/100/12;
$principle = $_POST['principal'];
//$time = $_POST['years']*12;// in month
$time = $_POST['years'];// in month
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
$totalintt=0;
$payment_date = date("Y m,d");
$tp =0;
$sectotal=0;
$secmonthly =0;
$j=0;
function getEmi($t){
	global $i,$upto, $totalint, $rate,$monthly,$payment_date, $arr,$_SESSION,$tp,$x,$time,$secmonthly,$j,$totalintt,$sectotal;
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
	if(isset($_POST['left_time']) && $_POST['left_time'] && $i>$_POST['left_time']){
		 $totalintt = $totalintt + $r;
		$sectotal = $sectotal+$monthly;
	}else{
		$totalint = $totalint + $r;
		$tp = $tp+$monthly;
	}
    
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
        <?php  echo $t; ?>
    </td>
    <td>
        Rs. 
        <?php echo round($r); ?>
    </td>
    <td>
        Rs. 
        <?php echo $p;  ?>
    </td>
    <td>
        Rs. 
        <?php echo $monthly; ?>
    </td>
    <td>
	<?php
		if(isset($_POST['new_principle']) && isset($_POST['left_time']) && $_POST['new_principle'] && $_POST['left_time'] && $i==$_POST['left_time'] && $_POST['emisame']=='No'){
			$vals=$_POST['new_principle'];
			$select=$_POST['emisame'];
		}elseif(isset($_POST['new_principle']) && isset($_POST['left_time']) && $_POST['new_principle'] && $_POST['left_time']  && $i==$_POST['left_time']  && $_POST['emisame']=='yes'){
			$vals=$_POST['new_principle'];
			$select=$_POST['emisame'];
		}else{
			$vals=round($e);
		}
	?>
        Rs. <input class="inputKeyup end_balnc_<?=$i;?> getInputval_<?=$i;?>" data-time="<?=$i;?>" type="text" value="<?php echo $vals;  ?>" disabled /><select  data-time="<?=$i;?>" class="onchange form-control end_balnc_<?=$i;?> getval_<?=$i;?>" disabled=""><option value="">Same Emi yes/No</option></option><option value="yes" <?php echo (isset($select) && $select=='yes')?'selected="selected"':'' ?>>Yes</option></option><option value="No" <?php echo (isset($select) && $select=='No')?'selected="selected"':'' ?>>No</option></option></select><button data-id="end_balnc_<?=$i;?>" class="btn btnClick btn-green">Edit</button>
    </td>
</tr>
<?php
if(isset($_POST['left_time']) && $_POST['left_time'] && $monthly>$e){
			return 0;	
}	
$j=0;
if(isset($_POST['new_principle']) && isset($_POST['left_time']) && $_POST['new_principle'] && $_POST['left_time'] && $_POST['emisame']=='No'){
	if($i==$_POST['left_time']){
		$j++;
			$_POST['principal']=$_POST['new_principle'];
			$principle = $_POST['new_principle'];
			$x= pow(1+$rate,$time-$_POST['left_time']);
			$monthly = ($principle*$x*$rate)/($x-1);
			$monthly = round($monthly);
			if($j==1){
				$secmonthly=$monthly;
			}
			return getEmi($principle);
	 }
}elseif(isset($_POST['new_principle']) && isset($_POST['left_time']) && $_POST['new_principle'] && $_POST['left_time'] && $_POST['emisame']=='yes'){
		if($i==$_POST['left_time']){
			return getEmi($_POST['new_principle']);
		}
}	
	
    return getEmi($e);
}
?>

<form name="loandata" id="emi-loan-form" method="post" action="">
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
			 <input type="hidden" value="0" name="new_principle" class="new_principle"/>
			 <input type="hidden" value="0" name="left_time" class="left_time"/>
			 <input type="hidden" value="" name="emisame" class="emisame"/>
            </div>
          </div>
                </td>
                <td>Loan Tenure <span class="err">*</span><br>
                
                <div class="form-group">
            <div class="input-group mb-2">
              <div class="input-group-prepend">
                <div class="input-group-text">Months</div>
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
        <td colspan="3">
            <table id="result" width="100%">
                <tr>
                    <td colspan="3">
                        <b>
                            Payment Information 1:
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
                        <span id="monthly"><strong>Rs.<?php echo round($monthly); ?></strong></span>
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
       <td colspan="3">
            <table id="result" width="100%">
                <tr>
                    <td colspan="3">
                        <b>
                            Payment Information 2:
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
                        <span><strong id="secmonthly"></strong></span>
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
                        <span ><strong id="sectotal"></strong></span>
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
                        <span ><strong id="secint"></strong></span>
                    </td>
                </tr>
            </table>
        </td>
        <td>
        	<table id="result" width="100%">
                <tr>
                    <td>
                        <b>
                            Payment Information 3:
                        </b>
                    </td>
                </tr>
                <tr>
                    <td>
                        Your total payment will be:
                    </td>
                </tr>
                <tr>
                    <td>
                        <span ><strong id="totalpayment"></strong></span>
                    </td>
                </tr>
                <tr>
                    <td>
                        Your total interest payments will be:
                    </td>
                    
                </tr>
                <tr><td>
                        <span ><strong id="totalint"></strong></span>
                    </td></tr>
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
            Opening Balance
        </td>
        <td>
            Interest
        </td>
        <td>
            Principle
        </td>
        <td>
            Total Payment
        </td>
        <td>
            Outstanding Principle
        </td>
    </tr>
    <?php
        getEmi($_POST['principal']); 
    ?>
    <script type="text/ecmascript">
        <!--// Ist Phase-->
        document.getElementById("interest").innerHTML="Rs."+<?php echo round($totalint); ?>;
        document.getElementById("total").innerHTML="Rs."+<?php echo round($tp); ?>;
        <!--// 2nd Phase-->
        document.getElementById("secmonthly").innerHTML="Rs."+<?php echo round($secmonthly); ?>;
        document.getElementById("sectotal").innerHTML="Rs."+<?php echo round($sectotal); ?>;
        document.getElementById("secint").innerHTML="Rs."+<?php echo round($totalintt); ?>;
        <!---3rd phase----------->
        document.getElementById("totalpayment").innerHTML="Rs."+<?php echo round($tp+$sectotal); ?>;
        document.getElementById("totalint").innerHTML="Rs."+<?php echo round($totalint+$totalintt); ?>;
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