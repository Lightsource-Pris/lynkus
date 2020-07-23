<!DOCTYPE html>
<html>
<head>
	<title></title>



	<style>
* {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>



<h2>Images Side by Side</h2>
<p>How to create side-by-side images with the CSS float property:</p>

<div class="row">
  <div class="column">
    <img src="../1536965190678.jpg" alt="Snow" style="width:100%">
  </div>
  <div class="column">
    <img src="../1536965611778.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="../1536966143070.jpg" alt="Mountains" style="width:100%">
  </div>
</div>





</body>
</html>