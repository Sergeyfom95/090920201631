<?
define('HOST', 'localhost'); //Сервер базы
define('USER', 'name'); //Имя пользователя
define('PASS', 'pass'); //Пароль базы
define('BASE', 'base'); //База данных

mysql_connect(HOST, USER, PASS) or exit('Немогу подключиться к серверу');
mysql_select_db(BASE) or exit('Немогу подключиться к базе');
mysql_query("set names 'utf8'");
mysql_query("set charset 'utf8'");
mysql_query("set SESSION collation_connection = 'utf8_general_ci'");

 if (version_compare(PHP_VERSION, '5.4.0', '>='))
 {
  ob_start(null, 0, PHP_OUTPUT_HANDLER_STDFLAGS ^ PHP_OUTPUT_HANDLER_REMOVABLE);
 }
 else
 {
  ob_start(null, 0, false);
 }

function check($check){
	$check = htmlspecialchars(mysql_real_escape_string($check));
	return $check;
}

?>
<!DOCTYPE HTML>
<html>
<head>
  <meta charset="UTF-8">
    
  <title>address ::: user office ::: foodclub</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,700italic,400italic&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
  <link href="css/default.css" rel="stylesheet" type="text/css" />

</head>

<body>
	<div class="cbc">
		<div class="main">
			<header>
				<div class="center_box">
					<div class="wrapper">
												
						<div class="logo_box">
							<a href="index.html"><img src="img/logo.png" alt="foodclub" /></a>
						</div>
						
						<div class="lng_box">
							<a href="#" class="flag_ar"></a>
						</div>
						
						<div class="orders_counter">
							<span class="num">2<span class="line"></span></span>
							<span class="num">1<span class="line"></span></span>
							<span class="num">7<span class="line"></span></span>
							<span class="num">0<span class="line"></span></span>
							
							<span class="label">orders<br/>today</span>
						</div>
						
						<div class="r_box">
							<a href="tel:8800117117" class="h_phone"><span class="ico"></span><span>800 117-117</span></a>
							
							<div class="upan">
								<div class="notice">
									<a href="#" class="ico_notice nftoggle"></a>
									
									<nav class="utnav">
										<ul>
											<li class="item">
												<span class="ico ico_1"></span>
												<div class="text_box">
													<h3>5 points</h3>
													<p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
												</div>
												<a href="#" class="gcross"></a>
											</li>
											<li class="item">
												<span class="ico ico_2"></span>
												<div class="text_box">
													<h3>5 points</h3>
													<p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
												</div>
												<a href="#" class="gcross"></a>
											</li>
											<li class="item">
												<span class="ico ico_3"></span>
												<div class="text_box">
													<h3>5 points</h3>
													<p>Thank you for visiting FoodClub.<br/>You got 5 more points on your balance!</p>
												</div>
												<a href="#" class="gcross"></a>
											</li>
											<li><a href="#" class="more">Show more notifications</a></li>
										</ul>
									</nav>
								</div>
								<div class="navbox">
									<a href="#" class="midbox nftoggle">
										<img src="imgc/user_ava_1_40.jpg" alt="" />
										<span class="warrd"></span>
									</a>
									<nav class="utnav">
										<ul>
											<li class="points">600 points</li>
											<li class="sepor"></li>
											<li><a href="#">Profile</a></li>
											<li><a href="#">Orders</a></li>
											<li><a href="#">Address</a></li>
											<li><a href="#">Settings</a></li>
											<li class="sepor"></li>
											<li><a href="#" class="logout">Log Out</a></li>
										</ul>
									</nav>
									
									<!-- 
										<nav class="utnav">
											<ul>
												<li><a href="#">Menu</a></li>
												<li><a href="#">Orders</a></li>
												<li><a href="#">Reviews</a></li>
												<li><a href="#">Account Settings</a></li>
												<li><a href="#">Profile Settings</a></li>
												<li class="sepor"></li>
												<li><a href="#">Subway</a></li>
												<li><a href="#">McDonalds</a></li>
												<li class="sepor"></li>
												<li><a href="#"><span class="bplus"></span> Add Restaurant</a></li>
												<li class="sepor"></li>
												<li><a href="#" class="logout">Log Out</a></li>
											</ul>
										</nav>
									 -->
								</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</header>
			
			<div class="center_box cb">
				<div class="uo_tabs cf">
					<a href="#"><span>profile</a>
					<a href="#"><span>Reviews</span></a>
					<a href="#"><span>orders</span></a>
					<a href="#" class="active"><span>My Address</span></a>
					<a href="#"><span>Settings</span></a>
				</div>
				<div class="page_content bg_gray">
					<div class="uo_header">
						<div class="wrapper cf">
							<div class="wbox ava">
								<figure><img src="imgc/user_ava_1_140.jpg" alt="Helena Afrassiabi" /></figure>
							</div>
							<div class="main_info">
								<h1>Helena Afrassiabi</h1>
								<div class="midbox">
									<h4>560 points</h4>
									<div class="info_nav">
										<a href="#">Get Free Points</a>
										<span class="sepor"></span>
										<a href="#">Win iPad</a>
									</div>
								</div>
								<div class="stat">
									<div class="item">
										<div class="num">30</div>
										<div class="title">total orders</div>
									</div>
									<div class="item">
										<div class="num">14</div>
										<div class="title">total reviews</div>
									</div>
									<div class="item">
										<div class="num">0</div>
										<div class="title">total gifts</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
					<div class="uo_body">
						<div class="wrapper">
							<div class="uofb cf">
								<div class="l_col adrs">
									<h2>Add New Address</h2>
									
									
									
									
									<?
										if (isset($_POST['submit']) )
					{
						$name = check($_POST['name']);
						$city = check($_POST['city']);
						$area = check($_POST['area']);
						$street = check($_POST['street']);
						$house = check($_POST['house']);
						$addition = check($_POST['addition']);
						mysql_query("INSERT INTO `MY_ADDRESSES` (NAME,YOUR_CITY,YOUR_AREA,STREET,HOUSE,ADDITIONAL) values('".$name."','".$city."','".$area."','".$street."','".$house."','".$addition."')");	
						header('location: ?ok');
					}
					
					
					
					 if(isset($_GET['dell']) && $_GET['dell'])
{	
$dell = check($_GET['dell']);
mysql_query("DELETE FROM `MY_ADDRESSES` WHERE `id` = '".$dell."' LIMIT 1");		
header('location: ?delete');
}
									
									
									?>
									<form action="" method="POST">
										<div class="field">
											<label>Name *</label>
											<input type="text" required name="name" value="" palceholder="" class="vl_empty" />
										</div>
										<div class="field">
											<label>Your city *</label>
											<select name="city" required class="vl_empty">
												<option class="plh"></option>
												<option value="1">City 1</option>
												<option value="2">City 2</option>
											</select>
										</div>
										<div class="field">
											<label>Your area *</label>
											<select name="area" required>
												<option class="plh"></option>
												<option value="1">Area 1</option>
												<option value="2">Area 2</option>
											</select>
										</div>
										
										<div class="field">
											<label>Street</label>
											<input type="text" name="street"  value="" palceholder="" class="vl_empty" />
										</div>
										<div class="field">
											<label>House # </label>
											<input type="text" name="house" value="" palceholder="House Name / Number" />
										</div>
										
										<div class="field">
											<label class="pos_top">Additional information</label>
											<textarea name="addition"></textarea>
										</div>
										
										<div class="field">
											<input type="submit" name="submit" value="add address" class="green_btn" />
										</div>
									</form>
								</div>
								
								<div class="r_col">
									<h2>My Addresses</h2>									
									
									<div class="uo_adr_list">
									
									
									<?
									 if(isset($_GET['ok']))
										{	

?>
									<div class="item" style="background: #a4e865;">
											<h3 style="color: #fff;"><center>Address add!</center></h3>
											
										</div>
										<?
										}
										
										if(isset($_GET['delete']))
										{	

?>
									<div class="item" style="background: red;">
											<h3 style="color: #fff;"><center>Address deleted!</center></h3>
											
										</div>
										<?
										}

									$addresses = mysql_query("SELECT * FROM `MY_ADDRESSES` ORDER BY `NAME` ASC");
				while ($post = mysql_fetch_assoc($addresses))
				{
			
			?>
										<div class="item">
											<h3><?=$post['NAME']?></h3>
											<p>
											<?
											
											
											
											
											
											if($post['YOUR_CITY'] == 1) $city = 'City 1';
											if($post['YOUR_CITY'] == 2) $city = 'City 2';
											if($post['YOUR_AREA'] == 1) $area = 'Area 1';
											if($post['YOUR_AREA'] == 2) $area = 'Area 2';												
											echo $city;
											echo ', '.$area.'';
											if($post['STREET'] != NULL){ echo ', '.$post['STREET'].'';  }
											if($post['HOUSE'] != NULL){ echo ', '.$post['HOUSE'].'';  }
											if($post['ADDITIONAL'] != NULL){ echo ', '.$post['ADDITIONAL'].'';  }
											?>
											</p>
											<div class="actbox">
												<a href="?dell=<?=$post['id']?>" class="bcross"></a>
											</div>
											</div>
										
				<? } ?>
										

										
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
				</div>
			</div>
		</div>
	
		<footer>
			<div class="center_box">
				<div class="wrapper">
					
					<nav class="f_nav">
						<ul>
							<li>
								<a href="#">
									<span class="fadv_ico"><span class="ico_1"></span></span>
									<span class="title">Rewards Program</span>
									<span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fadv_ico"><span class="ico_2"></span></span>
									<span class="title">monthly lottery</span>
									<span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fadv_ico"><span class="ico_3"></span></span>
									<span class="title">Restaurant Owners</span>
									<span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fadv_ico"><span class="ico_4"></span></span>
									<span class="title">about foodclub</span>
									<span class="descr">We’re empowering businesses and teams to put Design first by helping them roll up their sleeves and apply customer-centric product.</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="bt_box">
				<div class="center_box">
					<div class="wrapper">
						<div class="soc_link">
							<a href="#" class="apple"></a>
							<a href="#" class="android"></a>
							<a href="#" class="email"></a>
							<a href="#" class="fb"></a>
						</div>
						<div class="copyright">
							<div>© 2014 Zomlex Inc. All rights reserved.</div>
							<nav>
								<a href="#">Partner Agreement</a>
								<span>|</span>
								<a href="#">User Agreement</a>
								<span>|</span>
								<a href="#">FAQ</a>
								<span>|</span>
								<a href="#">Careers</a>
							</nav> 
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>
