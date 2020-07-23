<?php
    include  "editphp.php";
?>
<div class="modal fade position-center-center m-width-500" id="bite-21" bite-show="fadeIn" bite-hide="fadeOut">
    <div class="modal-dialog animated fast">
        <div class="modal-content" style="background-color: #4ECDC4;">
            <div class="modal-header">
                <button type="button" class="close close-light" data-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="col">
                    <div class="row">  
                        <div class="col-sm-7 pl-0 pr-3">
                            <div class="popup-title text-white mb-3">Edit Your Profile</div>
                            <form method="post" action="profile.php" class="form-subscribe form-inline position-relative" enctype="multipart/form-data" >
                                 <label>First Name</label>
                                <div class="form-group" style="margin-bottom: 20px;">
                                <input type="text" name="first_name" value="<?php echo $first_name;?>" class="form-control text-light email-address" style="width: 400px;"/>
                                </div>
                                <label>Last Name</label>
                                <div class="form-group" style="margin-bottom: 20px;">   
                                <input type="text" name="last_name" value="<?php echo $last_name;?>" class="form-control text-light" style="width: 400px;" />
                                </div>

                                <label>Phone Number</label>
                                <div class="form-group text-light email-address" style="margin-bottom: 20px;">
                                <input type="text" name="phone" value="<?php echo $number;?>" class="form-control text-light " style="width: 400px;" />
                                </div>
                                <label>Email Address</label>
                                <div class="form-group" style="margin-bottom: 20px;">
                                    <input type="email" name="email_address" value="<?php echo $renter_email;?>" style="width: 400px;" class="form-control text-light"/>
                                </div>

                                <label>Your Photo</label>
                                <div class="form-group" style="margin-bottom: 10px;">
                                    <input type="file" name="photo" accept="image/*" class="form-control  text-light" style="width: 400px;"/>
                                </div>

                                <button name="submit" type="submit" style="border-radius: 10px; font-size: 20px; height: 40px; margin-top: 10px; width: 400px;">Done</button>
                            </form>
                        </div>
                        <div class="col-sm-5 px-0">

                        </div>
                    </div>
                </div>       
            </div>
        </div>
    </div>
</div>