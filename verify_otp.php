<!DOCTYPE html>
<html>
<head>
	<title>Verify otp</title>
</head>
<body>

<form action="verified_otp.php" method="post">

	<div class="form-group">
        <label for="email">Email</label>
        <input type="email" name="email" required>    
    </div>
    <div>
    	
		<label for="otp">Enter OTP</label>
		<input type="text" name="otp" required>
    </div>

	 <button type="submit">Verify</button>
</form>

</body>
</html>