
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Order Summary | Bus Reservation System</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/default.css"/>
</head>
<body>


<?php
include('php/config.php');
$result = $db->prepare("SELECT * FROM Bus_reservation ORDER BY id DESC LIMIT 1");
$result->execute();
for($i=0; $row = $result->fetch(); $i++)
{
    echo '<form action="" class="register" method="post">
            <h1>BUS Ticket Reservation | Order Summary</h1><fieldset class="row1">
                <legend>Travel Information</legend>
				<p>
                    <label>BUS Name
                    </label>
                    <input name="bus" type="text" readonly="readonly" value="'.$row['bus'] . '"/>
                    <label>Date of journey
                    </label>

					<input type="text" readonly="readonly" class="small" value="'.$row['travel_date'].'"/>
					<input type="text" readonly="readonly" class="small" value="'.$row['travel_month'].'"/>
					<input type="text" readonly="readonly" class="small" value="2016"/>
					<label>Bus Type
                    </label>
                    <input  type="text" readonly="readonly" value="'.$row['travel_type'].'"/></p>
                <p>
					<label>Boarding From
                    </label>
                    <input name="from" type="text" readonly="readonly" value="'.$row['travel_from'].'"

/>
					<label>To
                    </label>
					<input name="to" type="text" readonly="readonly" value="'.$row['travel_to'].'"/>
					<label>Via (Root)
                    </label>
					<input  type="text" readonly="readonly" value="'.$row['root'].'"/>

                </p>
                <p>
                    <label>Mobile
                    </label>
                    <input name="mob" type="text" readonly="readonly" value="'.$row['mob'].'"/>
                    <label >(You will receive
                    </label><label >the ticket in this )
                    </label>


                </p>

				<div class="clear"></div>
            </fieldset>
            <fieldset class="row2">
                <legend>Passenger Details
                </legend>
                <table id="dataTable" class="form" border="1">
					<tbody><tr>
							<p>
								<td ></td><td>
									<label>Name</label>
									<input type="text" readonly="readonly" name="BX_NAME[$a]" value="'.$row['BX_NAME'].'">
								</td>
								<td>
									<label for="BX_age">Age</label>
									<input type="text" readonly="readonly" class="small"  name="BX_age[]" value="'.$row['BX_age'].'">
								</td>
								<td>
									<label for="BX_gender">Gender</label>
									<input type="text" readonly="readonly" name="BX_gender[]" value="'.$row['BX_gender'].'">
								</td>
								<td>
									<label for="BX_birth">Berth Preference</label>
									<input type="text" readonly="readonly" name="BX_birth[]" value="'.$row['BX_birth'].'">
								</td>
							</p>
						</tr></tbody>
                </table>';
}
?>




				<div class="clear"></div>
            </fieldset>
            <fieldset class="row3">
                <legend>Further Information</legend>                  
                    <p>The identification details are required during journey. One of the passenger booked on the ticket should have any of the identity cards ( Passport / PAN Card / Driving License / Photo ID card issued by Central / State Govt / Student Identity Card with photograph) during the journey in original. </p>
				<div class="clear"></div>
            </fieldset>
            <fieldset class="row5">
                <legend>Terms and Mailing</legend>
                <p>
					<button onclick="payment()" class="submit">Make Payment</button>
					<a class="submit" href="index.html" type="button"> Back To Home <a/>
					<!--<a class="submit" href="http://students3k.com"/>Back to Students3k website</a>-->
                </p>
				<div class="clear"></div>
            </fieldset>

		<!--<fieldset class="row1">
			<legend>Sorry</legend>
			 <p>Some things went wrong please try again.</p>
		</fieldset>-->

			<div class="clear"></div>
        </form>

<script>
    function payment() {
        alert("Payment Done Virtually");
    }
</script>
    </body>
	
</html>





