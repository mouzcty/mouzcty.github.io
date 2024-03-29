<!DOCTYPE html>
<html>
<head>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
<style>
.menu{
    position: relative;
    width: 100%;
    height: auto;
}
.dropbtn {
  background-color: #990033;
  color: white;
  padding: 10px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #b3003b;}

.logo{padding: 5px;}

.loginbtn {
    margin: auto;
    background-color: #ddd;
    border: none;
    position: absolute;
    right: 0;
}
.loginbtn a{
    text-decoration: none;
    color: black;
    font-size: 16px;
}
.logoutbtn {
    margin: auto;
    background-color: #ddd;
    border: none;
    position: absolute;
    right: 1;
}
.logoutbtn a{
    text-decoration: none;
    color: black;
    font-size: 16px;
}
</style>
</head>
<body>

<div class="logo">
<h1><a href="home.php"><img src="uploads/homeicon.png" width="40px" height="40px" alt=""></a></h1>
</div>

<div class="menu">
<div class="dropdown">
  <button class="dropbtn">Product</button>
  <div class="dropdown-content">
    <a href="product_create.php">Product Create</a>
    <a href="product_read.php">Product Read</a>
    <!-- <a href="product_update.php">Product Edit</a> -->
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Customer</button>
  <div class="dropdown-content">
    <a href="customer_create.php">Customer Create</a>
    <a href="customer_read.php">Customer Read</a>
    <!-- <a href="customer_update.php">Customer Edit</a> -->
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Orders</button>
  <div class="dropdown-content">
    <a href="order_create.php">Orders Create</a>
    <a href="order_read.php">Orders Read</a>
    <!-- <a href="customer_update.php">Customer Edit</a> -->
  </div>
</div>

<button class="loginbtn"><a href="logout.php">Logout</a></button>
<!-- <button class="logoutbtn"><a href="logout.php">Logout</a></button> -->
</div><!-- end menu -->


</body>
</html>