<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>

<style>
body {
  background-color: #FFF0AA;
}
</style>

<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#FFF0AA">
      <center><img src="https://www.img.in.th/images/2c8f746eadead96f5ecd8ef40de9a630.png" alt="EGAT" width="230px" height="100px"></center>
      <h3 align="center">
      ระบบจัดเก็บข้อมูลทะเบียน Application </h3>
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="username" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
