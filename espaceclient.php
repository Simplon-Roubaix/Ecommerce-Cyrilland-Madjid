<?php
session_start();
      // <!--  start header -->

        include "header.php";
        include 'navbar.php';
?>


   <div class="container">
		    <div class="row">
		        <div class="col-md-6 offset-md-3">
		            <form class="form-horizontal" action="connection.php" role="form" method="post">
		                <div class="form-group">
		                    <label for="inputPassword1" class="col-lg-2 control-label">Pseudo</label>
		                    <div class="col-lg-10">
		                        <input type="text" class="form-control" name="pseudo" placeholder="pseudo">
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label for="inputPassword1" class="col-lg-2 control-label">Password</label>
		                    <div class="col-lg-10">
		                        <input type="password" class="form-control"  name="userPass" id="inputPassword1" placeholder="Password">
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col-lg-10">
		                        <div class="checkbox">
		                            <label>
		                                <input type="checkbox"> Remember me
		                            </label>
		                        </div>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <div class="col-lg-10">
		                         <button type="submit" class="btn btn-outline-success btn-block d-btn">Sign in</button>
		                    </div>
		                </div>
		            </form>
		        </div>
		    </div>
	</div>







