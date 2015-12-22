<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'sourcefuse';

//define variables
$id = $name = $phone  = $location = $cuisines = $review = $price = $image = $vote = $person_name = $blogs = $date = "";
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
    if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   $sql = 'SELECT  id, name, phone, location, cuisines,   review,  image, vote, blogs,date, person_name  FROM jamie_data';
   mysql_select_db('restaurant');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
		   
		if (isset($_POST['search'])){
	
	$search = $_POST['search'];
	$query = "SELECT * FROM  WHERE name LIKE '%".$search."%'";
	$retval = mysql_query($query);
	

	}
?>
<html>
	<head></head>
	<body>
	<div class="container">
	<div class="row">
		<div class="header">
				<ul class="breadcrum">
					<li>Home › </li>
						<li> India › </li>
							<li>Delhi NCR Restaurants › </li>
							<li>gurgaon › </li>
						<li>sector 29 › </li>
					<li>wendy's › </li>
				</ul>
					<div class="bites">
							<ul>
								<li><div class="quick bites">CASUAL DINING</div></li>
							</ul>
					</div>
							<div class="clear"></div>
							<div class="navigate">
							<ul>
								<div class = "nav" style= "font-size:200%">Jamie's Pizzeria By Jamie Oliver</div>
									<div class = "write">sms</div>
							</ul>
								<ul>
									<li><div class="rate-per">4.2</div></li>
									<li><div class="vote">1645 vote</div></li>
								</ul>
							</div>
				</div>

<div class="left res-left-area">
<div class="col-m-5 resinfo divider--right pr0" style="min-height: 1308px;">


							<div class="box">
								<ul>
									<li><div class="search"><b><u>PHONE NO.:</u></b></div></li>
									<li><div class="number">+91 9599180116</div></li> 
									<li><div class="sort"><b><u>LOCATION:</u></b></div></li>
									<li><div class="address">Sector 29›<span class="fontsize">Shop 19, Leisure Valley Road, Sector 29, GurgaonM,</span></div></li>
									<li><div class="status">COLLECTIONS</div></li>
									<li><div class="fontsize">Featured in Newly Opened Collection</div></li>
									<li><div class="search"><b><u> CUISINE: </u></b></div></li>
									<li><div class="food">fastfood,American</div></li>
									<li><div class="sort"><b><u>OPENING HOURS</u></b></div></li>
									<li><div class="time"><span class="fontsize">Today 10am to 12am</span></div></li>
									<li><div class="search"><b><u>HIGHLIGHTS</u></b></div></li>
									<li><img src="img/button.png" width="20"style="vertical-align: middle"/><span class="fontsize">Home Delivery</span></li>
									<li><img src="img/button.png" width="20"style="vertical-align: middle"/><span class="fontsize">Seating Available</span></li>
									<li><img src="img/button.png" width="20"style="vertical-align: middle"/><span class="fontsize">Serves Non Veg </span></li>
									<li><img src="img/button3.png" width="20"style="vertical-align: middle"/><span class="fontsize">Bar Not Available </span></li>
									<li><img src="img/button.png" width="20"style="vertical-align: middle"><span class="fontsize"> Air Conditioned </span></li>
									<li><img src="img/button.png" width="20"style="vertical-align: middle"><span class="fontsize"> Wifi Available </span></li>
									<li><div class="sort">REVIEW HIGHLIGHTS</div></li>
									<li><img src="img/icecream.png" width="20"style="vertical-align: middle"><span class="fontsize"> Das </span></li>
									<li><div class="comment">“However burgers are worth trying. Very different from usual McDonald's, KFC etc.”</div></li>
									<li><div class="cost">COST</div></li>
									<li><div class="fontsize">800for two people (approx.)</div></li>
								</ul>
									</div>

</div>

<div class="col-m-11 ptop0 res-middle-area plr15">
<div  class="menu"><b><u>Menu</u></b></div>
									<div>
<ul>									
									<li><img src="uploads/images/menu.jpg"  width="80" />
										<img src="uploads/images/m.jpg"  width="80" />
										<img src="uploads/images/mm.jpg"  width="80" />
										<img src="uploads/images/khana.jpg" width="80" /></li>
						</ul>
									</div>
									<div  class="photos" ><b><u>Photos</u></b></div>
									<div>
									<ul>
										<li><img src="uploads/images/k.jpg"  width="100"  height="80"/>
										<img src="uploads/images/f.jpg"  width="80" />
										<img src="uploads/images/khana.jpg"  width="80" />
										<img src="uploads/images/meal.jpg" width="80" />
										<img src="uploads/images/ff.jpg" width="80" />
										<img src="uploads/images/food.jpg" width="80" /></li>
</ul>
									</div>
				<div class="review">
					<ul>					
						<li><div class="ratting"><b>your ratting</b></div></li>
					</ul>
				</div>
				
				<div class="review">
					<form>
						<table>
							<div class="textarea">
								<tr> 
									<span onclick="showReview()"><b> Write Your Review <b></span>
									<td><textarea name="comment" rows="10" cols="60" placeholder="Tip: A great review covers food, service, and ambiance. Got recommendations for your favorite dishes and drinks, or something everyone should try here? Include that too! And remember, your review needs to be at least 140 characters long :)"></textarea></td></div>
								</tr>
							</table>
						</form>
					</div>

								
			 <div class="center"style="text-align: center">
	<ul>
		<li> 	
					<li><div class="head">FEEDBACK</div></li>
							<li><div class="pop"style="text-align: center">"'.$vote.'"</div>
										<div class="pop"style="text-align:center">"'.$review.'"  </div>
											<div class="pop"style="text-align:center">"'.$blogs.'"</div></li>
												<div class="line"width="10%"></div>
										<li><div class="date">"'.$date.'"</div></li>
									<li><img src="img/icecream.png" width="20"style="vertical-align: middle">"'.$person_name.'"</span></li>
								<li><div class="pop">3 days ago  via Zomato for Android</div></li>
							<li><div class="android" style="text-align: center">RATED </div></li>
				</li>			
	</ul>						
		 </div>
		</div>

</div>



<!---right--->

<div class="col-m-4 pl15 pt15 right-column-container hide-on-mobile ">
<div class="box1">
			<ul>				
				<li><div class="main"> <a href= "jamie.php">name</a></div></li>
				<li><div class="place">phone</div></li>
				<div class="clear"></div>
				<li><div class="address">location</div></li>
				<div class="clear"></div>
				<li><div class="cuisines">cuisines</div></li>
				<li><div class="pop"style="text-align:center">review</div></li>
			</ul>
				</div>
			
		</div>
</div>

	</div>
</div>	
<?php															
//while($row = mysql_fetch_array($retval, MYSQL_ASSOC))
	//{       
		// $restaurentId = $row['id'];
		// $name = $row['name'];
		 //$phone = $row['phone'];
		 //$location = $row['location'];
		 //$cuisines = $row['cuisines'];
		 //$review = $row['review'];
		 //$image = $row['image'];
		 //$vote = $row['vote'];
		 //$person_name = $row['person_name'];	
		 //$blogs = $row['blogs'];

?>																

<script type="text/javascript">
function showReview(restaurentId){
		 //$date = $row['date'];
	$("[id*='review_id_']").css('display', 'none');  
	document.getElementById('review_id_'+restaurentId).style.display = "block";
	
}
function submitReview(restaurentId){
	if(document.getElementById('review_desc_'+restaurentId).value==""){
		document.getElementById('error_id').innerHTML="comment can not be blank";
		return false;
	}else{
		document.getElementById('error_id').innerHTML="";
		$.ajax({
			type:'POST',
			url:'submitreview.php',
			data:  {review:document.getElementById('review_desc_'+restaurentId).value, restaurent_id:restaurentId},
			success:function($e){
                      $.ajax({
                        type:"POST",
                        url:"process.php",
                        success:function(data){
                             $("#comment_"+restaurentId).append(data);
                        }
                      }); 
					if($e){
							document.getElementById('error_id').innerHTML="Comment received successfully";
							document.getElementById('review_id_'+restaurentId).style.display = "none";
						}else{
							document.getElementById('error_id').innerHTML="error found";
							document.getElementById('review_id_'+restaurentId).style.display="none";
						}
						
					}
		});
		
	}
	
}

</script>
<script type="text/javascript">
function submitvote(restaurentId){
	$("[id*='vote_id_']").css('display', 'none');  
	document.getElementById('vote_id_'+restaurentId).style.display = "block";
	//alert('here');
	$.ajax({
			type:'POST',
			url:'update_data.php',
			data:{restaurent_id:restaurentId},
			success: function(data){
				$('#voteCount_'+restaurentId).text(data);
			}
					
	});
}
	
	


</script>
</body>						
</html>						
<style>
* {
	margin:0;
    padding:0;
    list-style: none;


}
body {
	background-color:#ddd;
	font-family: "Helvetica Neue","Segoe UI",Arial,sans-serif;
    font-size: 18.33px;
    color: #2d2d2d;
    min-width: 320px;
}
.container {
	width:1024px;
	margin:0 auto;
	background-color:#fafafa;
}
.header {
	*padding : 10px 10px 0 10px;
	background-image : url('img/pizza.jpg');
	background-position : center;
	height: 512px;
}
.col-m-4{
	display:block;
}
ul.breadcrum li {
	display : inline-block;
	font-size:14px;
	color:red;
}
.photos
{
	margin-bottom:20;
}
.menu{
	display:inline-block;
	margin-bottom:20;
}
.bites li{
	margin-top:360;
	float: left;
	background: #f2c572;
    padding: 4px 12px;
    border-radius: 10px;
    font-size: 11px;
    text-transform: uppercase;
    letter-spacing: .01em;
    letter-spacing: 1px;
    display: block;
}
.main li{
        font-size: xx-larger;
		color: #fff!important;
		text-decoration: none;
		margin: 30px 0px 0px 4px;
		height: 70px;
		font-weight: 200!important;
		text-shadow: 0 0 1px #000;
		
}
.android{
	
	text-align:center;
	font-size:2px
	font-weight: 200;
    	
}
.pop {
	
	text-align:center;
	
	display : inline-block;
}

.write {
	position: absolute;
	text-decoration: none;
	float: left;
    color: #f0f0f0!important;
    font-size: 12px;
	margin-left: 22;
	
	background-color: brown;
    border-radius: 2px;
	display:inline-block;
	
 }
.margin 
{
	margin-right: 5px;
	margin-bottom: 5px;
	float: left;
	display: block;
	color: #fff!important;
    height: 470px;
    display: block;
    background-color: #eaeaea;
    background-size: cover!important;
    background-position: center center;
    background-repeat: no-repeat;
    margin-top: -70px;
    padding: 0;
}

.rate-per {
	color: #fff;
	background-color : green;
	border-radius : 5px;
	font-size : 13px;
	text-align:center;
	padding:5px 10px; 
	font-weight:bold;
	float:left;
	margin-left: 800;
	display:inline-block;
}

.vote {
	font-size:10px;
	color: #aaa;
}
.left {
	float:left;
	width:250px;
    font-weight: 700;
    font-size: 13px;
    line-height: 50px;
    letter-spacing: 1px;
    text-shadow: 0 1px 1px #fff;
    font-size: 13.33px;
   
	text-transform: uppercase;
	margin-bottom : 8px;
}
.box{
    padding-left: 5px;
	background-color:f4f4f4;
    display: block!important;
	float:left;
	font-size:15px;
	padding-left: 20px;
    padding-top: 32px;

}
.box1{
    padding-right: 5px;
	background-color:f4f4f4;
    display: block!important;
	float:right;
	font-size:15px;
	padding-right: 20px;
    padding-top: 32px;

}
.search-filter-label {
	line-height: 32px;
	margin: 0 0 10px 10px;
    border-bottom: 1px solid #ddd;
    letter-spacing: .5px;
	padding: 0px 1px 6px 1px;
    font-weight: 500;
	font-family: "Helvetica Neue","Segoe UI",Arial,sans-serif;
    font-size: 13px;
    color: #9a9a9a;
    line-height: 1.4;
}
.number
{
	background-color:f4f4f4;
	font-size:20px;
}
.address
{
	font-size:12px;
	display:inline-block
	font-weight:8px
}
.fontsize 
{
	font-size : 9px;
	display:inline-block;
	
}
.sort{
	font-size: 15px
	border-bottom : 1px dotted #aaa;
}
.food
{
	font-size:10px;
}
.icon
{
	width: 15px;
    height: 20px;
    float: left;
    font-family: zombatsregular;
    line-height: 22px;
    text-align: center;
    color: #2d2d2d;
    text-indent: 0;
	display: block;
}
.roundicon {
	color : #4fc31c;
	font-size: 13px;
    margin-top: 1px;
    text-align: center;
	display: block;
    float: left;
    font-family: zombatsregular!important;
    font-weight: 400;
    margin-right: 5px;
    text-transform: none;
    content: attr(data-icon);
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    zoom: 1;
}
.comment{
	
	font-size:9px;
	line-height:10px;
}
.center{
	text-align: center;
    width: 600px;
    margin-left: 200px;

}
.head
{
	text-align:center;
	font-size:50px
	font-weight: 900;
	margin-top:40;
	margin-bottom: 29;
}

	
.line {
	height:1px;
	background-color:#fff;
	margin-top:10px;
}
.date{
	height: 26px;
    padding: 1px 7px 4px;
	float: right;
	display: block;
	color: #2d2d2d;
    padding-left: 4px;
    font-size: 12px;
	height: 28px;
    line-height: 28px;
	border-bottom: 1px solid #f0f0f0;
    margin-top: 3px;
    height: 32px;

}

.rated:{
	font-size:12px;
	float:left;
	text-align:center;	
}
.comment{
	    border-bottom: 6px solid #f5f5f1;
}
.nav{
	text-align:center;
	margin-top: 10;
	margin-right: 500;
	color:#fff!important;
}
.navigate{
display: inline-block;	
}
.review{
	
	align:center;
}
.textarea{
	margin-top:25;
}
.right{
	float:right;
	
}
</style>
