<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Overview</title>
    <link rel="icon" type="image/x-icon" href="./images/Logo.svg">
    <link href="account-management-styles.css" type="text/css" rel="stylesheet"/>
    <?php include 'head.php'; ?>

</head>
<body class="flex-container-column background-color">
    <?php include 'header.php'; ?>
    

    <hr class="horizontal-divider">


    <section class="default flex-container-row text">
        <section class="default text">
            <div class="account-header">
                <h2 class="name-header">Account management</h2>
            </div>
            <div class="content-box bottom-margin">
                <div class="flex-container-row clicked-on">
                    <h2><a class="clicked-on" href="./profile-overview.html">Profile</a></h2>
                </div>
                <div class="flex-container-row clicked-on">
                    <h2><a class="clicked-on" href="./manage-profile-information.html">Edit Profile Information</a></h2>
                </div>
                <div class="flex-container-row clicked-on">
                    <h2><a class="clicked-on" href="./order-history.html">Order History</a></h2>
                </div>
            </div>
              
        </section>
        <section class="default general-box text flex-container-column content-box ">
            <h2 class="named-header">Profile Overview</h2>
            <form class="flex-container-column" action="" method="post">
                <div class="flex-container-row">
                    <div class="content-box">
                        <h2>Username:</h2>
                        <input type="text" name="username" id="username"  disabled class="text disabled-text-input" placeholder="placeholder">
                    </div>
                    <div class="content-box">
                        <h2>Name:</h2>
                        <input type="text" class="text disabled-text-input" placeholder="placeholder"name="fname" id="fname"  disabled >
                        <input type="text" class="text disabled-text-input" placeholder="placeholder"name="lname" id="lname"  disabled >
                    </div>
                    <div class="content-box">
                        <h2>Email Address:</h2>
                        <input type="text" class="text disabled-text-input" placeholder="placeholder"name="email" id="email"  disabled >
                    </div>
                </div>
                <div class="flex-container-row">
                    <div class="content-box">
                        <h2>Phone number:</h2>
                        <input type="text" class="text disabled-text-input" placeholder="placeholder"name="phone-num" id="phone-num"  disabled >
                    </div>
                    <div class="content-box">
                        <h2>Country:</h2>
                        <input type="text" class="text disabled-text-input" placeholder="placeholder"name="country" id="country"  disabled >
                    </div>
                </div>
                <div class="content-box">
                    <h2>Password:</h2>
                    <input type="text" class="text disabled-text-input" placeholder="placeholder"name="password" id="password"  disabled >
                </div>
                <br>
            </form>
        </section>
    </section>


    <hr class="horizontal-divider">
    
    <?php include 'footer.php'; ?>
    
</body>
</html>