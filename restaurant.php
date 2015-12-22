<!DOCTYPE HTML> 
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body> 

<?php
// define variables and set to empty values
//define variables
$id = $name = $phone  = $location = $cuisines = $review = $price = $image = $vote = $person_name = $blogs = $date = "";
$idErr = $nameErr = $phoneErr  = $locationErr = $cuisinesErr = $reviewErr = $priceErr = $imageErr = $voteErr = $person_nameErr = $blogsErr = $dateErr = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["id"])) {
     $nameErr = "id is required";
   } else {
     $id = test_input($_POST["id"]);
 }
   
   if (empty($_POST["name"])) {
     $nameErr = "name is required";
   } else {
     $name = test_input($_POST["name"]);
    
     }
   
     
   if (empty($_POST["phone"])) {
     $phone = "";
   } else {
     $phone = test_input($_POST["phone"]);
    
   }

   if (empty($_POST["location"])) {
     $location = "";
   } else {
     $location = test_input($_POST["location"]);
   }

   if (empty($_POST["cuisines"])) {
     $cuisinesErr = "cuisines is required";
   } else {
     $cuisines = test_input($_POST["cuisines"]);
   }


   if (empty($_POST["review"])) {
     $reviewErr = "review is required";
   } else {
     $review = test_input($_POST["review"]);
   }

if (empty($_POST["price"])) {
     $priceErr = "priceis required";
   } else {
     $price = test_input($_POST["price"]);
   }

if (empty($_POST["image"])) {
     $priceErr = "image is required";
   } else {
     $image = test_input($_POST["image"]);
   }

if (empty($_POST["vote"])) {
     $priceErr = " vote is required";
   } else {
     $ = test_input($_POST["vote"]);
   }


if (empty($_POST["date"])) {
     $priceErr = " date is required";
   } else {
     $ = test_input($_POST["date"]);
   }

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>


<p><span class="error">* required field.</span></p>
<form method="post" action="">
<tr> 
   <td>id: <input type="text" name="id" value="<?php echo $name;?>">
   <span class="error">* <?php echo $nameErr;?></span></td>
   <br><br>
</tr>

<tr>
   <td>website name: <input type="text" name="name" value="<?php echo $email;?>">
   <span class="error">* <?php echo $nameErr;?></span></td>
   <br><br>
</tr>

<tr>
   <td>phone no: <input type="text" name="phone" value="<?php echo $phone;?>">
   <span class="error"><?php echo $locationErr;?></span></td>
   <br><br>
</tr>

<tr>
<td>location:<input type="text" name="location" value="<?php echo $location;?>">
 <span class="error"><?php echo $locationErr;?></span></td> </td>
   <br><br>
</tr>

<tr>
<td>cuisines:<input type="text" name="cuisines" value="<?php echo $cuisines;?>">
 <span class="error"><?php echo $cuisinesErr;?></span></td> </td>
   <br><br>
</tr>

<tr>
<td>review:<input type="text" name="review" value="<?php echo $review;?>">
 <span class="error"><?php echo $reviewErr;?></span></td> </td>
   <br><br>
</tr>

<tr>
<td>price:<input type="text" name="price" value="<?php echo $price;?>">
 <span class="error"><?php echo $priceErr;?></span></td> </td>
   <br><br>
</tr>

<tr>
<td>image:<input type="text" name="image" value="<?php echo $location;?>">
 <span class="error"><?php echo $imageErr;?></span></td> </td>
   <br><br>
</tr>

<tr>
<td>vote:<input type="text" name="vote" value="<?php echo $vote;?>">
 <span class="error"><?php echo $voteErr;?></span></td> </td>
   <br><br>
</tr>

<tr>
<td>person_name:<input type="text" name="person_name" value="<?php echo $person_name;?>">
 <span class="error"><?php echo $person_nameErr;?></span></td> </td>
   <br><br>
</tr>
<tr>
<td>blogs:<input type="text" name="blogs" value="<?php echo $blogs;?>">
 <span class="error"><?php echo $blogsErr;?></span></td> </td>
   <br><br>
</tr>
<tr>
<td>date:<input type="text" name="date" value="<?php echo $date;?>">
 <span class="error"><?php echo $dateErr;?></span></td> </td>
   <br><br>
</tr>
<tr>
   <td><input type="submit" name="submit" value="Submit"></td>
</tr> 
</table>
</form>
</body>
</html>
