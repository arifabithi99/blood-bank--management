<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style5.css">
    <link href="https://fonts.googleapis.com/css2?family=Gloria+Hallelujah&display=swap" rel="stylesheet">
    <title>Service</title>
</head>
<body>
<nav id="navbar">
            <div id="logo">
                <h3>Blood Bank<br>Bangladesh</h3>
                
            </div>
            <ul>
                <li class="menu"><a href="index.php">Home</a></li>
                
               
            </ul>
        </nav>
    <div class="container">
                    <h1 style="text-align: center;font-weight: bold;">Find Blood</h1>
                    <form class="signup-form" action="services.php" method="post">

                        
                          <div class="form-header">
                            <h1>Create Account</h1>
                          </div>
                    
                          
                          <div class="form-body">

                    
                            <div class="horizontal-group">
                              <div class="form-group left" >
                                <label class="label-title">Blood Group *</label>
                                <select name="bgroup" class="form-input" id="level" required>
                                  <option value="">Select One</option>
                                  <option value="A+">A+</option>
                                  <option value="A-">A-</option>
                                  <option value="B+">B+</option>
                                  <option value="B-">B-</option>
                                  <option value="O+">O+</option>
                                  <option value="O-">O-</option>
                                  <option value="AB+">AB+</option>
                                  <option value="AB-">AB-</option>
                                </select>
                            </div>
                    
    <!-- Address -->
  <div class="horizontal-group">
    <div class="form-group left" >
      <label class="label-title">City *</label>
    <select name="city" class="form-input" id="level" required>
      <option value="">Select One</option>
      <option value="Dhaka">Dhaka</option>
 		  <option value="Sylhet">Sylhet</option>
  		<option value="Rajshahi">Rajshahi</option>
 	 	  <option value="Rangpur">Rangpur</option>
  		<option value="Barishal">Barishal</option>
 		  <option value="Khulna">Khulna</option>
 	 	  <option value="Mymenshing">Mymenshing</option>
  		<option value="Cumilla">Cumilla</option>
                    
    </select>
                          
                          <div class="form-footer">
                           
                            <button name="submit" type="submit" class="btn">Search</button>
                          </div>
                    
                        </form>

    </div>
    <table id="customers">
        <tr>
          <th>Username</th>
          <th>Phone</th>
          <th>Blood Group</th>
          <th>Availability</th>
        </tr>
        <tbody>
            <?php
            
            include("db.php");
            if(isset($_POST['submit'])){
                $bgroup = $_POST['bgroup'];
                $city = $_POST['city'];
                if($bgroup !=""||$city !=""){
                  
                    $sql = "SELECT username, phone, bgroup , availability FROM user WHERE bgroup='$bgroup' AND city='$city'";
                    $result = mysqli_query($conn, $sql);
                   if(mysqli_num_rows($result) > 0){
                    while($row = mysqli_fetch_assoc($result)){
                     
                    $username = $row['username'];
                    $phone = $row['phone'];
                    $bgroup = $row['bgroup'];
                    $availability=$row['availability'];
                    
                    ?>
                    <tr>
                        <td>
                            <?php
                            echo $username;
                            
                            ?>
                        </td>
                        <td>
                            <?php
                           
                            echo $phone;
                            
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $bgroup;
                            
                            ?>
                        </td>
                        <td>
                            <?php
                            echo $availability;
                            
                            ?>
                        </td>
                    </tr>
                    <?php
                   }
                 }
                  else{
                    ?>
                    <tr><td>record not found</td></tr>
                    <?php
                   }
                }
            }
            
            ?>
        </tbody>
        
      </table>



</body>
</html>