<?php
session_start();
$email = $_SESSION['email'];
if (empty($_SESSION['email'])) {
    header("Location:http://localhost/user_management/index.php");
}
include('connection.php');
$recv = $_REQUEST['id'];
$sql = "SELECT * FROM `Customer_Account` WHERE `id`=$recv";
$result = mysqli_query($conn, $sql);
//https://png.pngtree.com/png-vector/20220709/ourmid/pngtree-businessman-user-avatar-wearing-suit-with-red-tie-png-image_5809521.png
while ($row = mysqli_fetch_assoc($result)) {
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">

        <!-- <link rel="stylesheet" href=".././Admin/style.css"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>View user</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
<style>
    body {
    color: #797979;
    background: #f1f2f7;
    font-family: 'Open Sans', sans-serif;
    padding: 0px !important;
    margin: 0px !important;
    font-size: 13px;
    text-rendering: optimizeLegibility;
    -webkit-font-smoothing: antialiased;
    -moz-font-smoothing: antialiased;
}

.profile-nav, .profile-info{
    margin-top:30px;   
}

.profile-nav .user-heading {
    background: #233e42;
    color: #fff;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    padding: 30px;
    text-align: center;
}

.profile-nav  {
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading a img {
    width: 112px;
    height: 112px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
}

.profile-nav .user-heading h1 {
    font-size: 22px;
    font-weight: 300;
    margin-bottom: 5px;
}

.profile-nav .user-heading p {
    font-size: 12px;
}

.profile-nav ul {
    margin-top: 1px;
}

.profile-nav ul > li {
    border-bottom: 1px solid #ebeae6;
    margin-top: 0;
    line-height: 30px;
}

.profile-nav ul > li:last-child {
    border-bottom: none;
}

.profile-nav ul > li > a {
    border-radius: 0;
    -webkit-border-radius: 0;
    color: #89817f;
    border-left: 5px solid #fff;
}

.profile-nav ul > li > a:hover, .profile-nav ul > li > a:focus, .profile-nav ul li.active  a {
    background: #f8f7f5 !important;
    border-left: 5px solid #fbc02d;
    color: #89817f !important;
}

.profile-nav ul > li:last-child > a:last-child {
    border-radius: 0 0 4px 4px;
    -webkit-border-radius: 0 0 4px 4px;
}

.profile-nav ul > li > a > i{
    font-size: 16px;
    padding-right: 10px;
    color: #bcb3aa;
}

.r-activity {
    margin: 6px 0 0;
    font-size: 12px;
}


.p-text-area, .p-text-area:focus {
    border: none;
    font-weight: 300;
    box-shadow: none;
    color: #c3c3c3;
    font-size: 16px;
}

.profile-info .panel-footer {
    background-color:#f8f7f5 ;
    border-top: 1px solid #e7ebee;
}

.profile-info .panel-footer ul li a {
    color: #7a7a7a;
}

.bio-graph-heading {
    background: #233e42;
    color: #fff;
    text-align: center;
    font-style: italic;
    padding: 40px 110px;
    border-radius: 4px 4px 0 0;
    -webkit-border-radius: 4px 4px 0 0;
    font-size: 16px;
    font-weight: 300;
}

.bio-graph-info {
    color: #89817e;
}

.bio-graph-info h1 {
    font-size: 22px;
    font-weight: 300;
    margin: 0 0 20px;
}

.bio-row {
    width: 50%;
    float: left;
    margin-bottom: 10px;
    padding:0 15px;
}

.bio-row p span {
    width: 100px;
    display: inline-block;
}

.bio-chart, .bio-desk {
    float: left;
}

.bio-chart {
    width: 40%;
}

.bio-desk {
    width: 60%;
}

.bio-desk h4 {
    font-size: 15px;
    font-weight:400;
}

.bio-desk h4.terques {
    color: #4CC5CD;
}

.bio-desk h4.red {
    color: #e26b7f;
}

.bio-desk h4.green {
    color: #97be4b;
}

.bio-desk h4.purple {
    color: #caa3da;
}

.file-pos {
    margin: 6px 0 10px 0;
}

.profile-activity h5 {
    font-weight: 300;
    margin-top: 0;
    color: #c3c3c3;
}

.summary-head {
    background: #ee7272;
    color: #fff;
    text-align: center;
    border-bottom: 1px solid #ee7272;
}

.summary-head h4 {
    font-weight: 300;
    text-transform: uppercase;
    margin-bottom: 5px;
}

.summary-head p {
    color: rgba(255,255,255,0.6);
}

ul.summary-list {
    display: inline-block;
    padding-left:0 ;
    width: 100%;
    margin-bottom: 0;
}

ul.summary-list > li {
    display: inline-block;
    width: 19.5%;
    text-align: center;
}

ul.summary-list > li > a > i {
    display:block;
    font-size: 18px;
    padding-bottom: 5px;
}

ul.summary-list > li > a {
    padding: 10px 0;
    display: inline-block;
    color: #818181;
}

ul.summary-list > li  {
    border-right: 1px solid #eaeaea;
}

ul.summary-list > li:last-child  {
    border-right: none;
}

.activity {
    width: 100%;
    float: left;
    margin-bottom: 10px;
}

.activity.alt {
    width: 100%;
    float: right;
    margin-bottom: 10px;
}

.activity span {
    float: left;
}

.activity.alt span {
    float: right;
}
.activity span, .activity.alt span {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    background: #eee;
    text-align: center;
    color: #fff;
    font-size: 16px;
}

.activity.terques span {
    background: #8dd7d6;
}

.activity.terques h4 {
    color: #8dd7d6;
}
.activity.purple span {
    background: #b984dc;
}

.activity.purple h4 {
    color: #b984dc;
}
.activity.blue span {
    background: #90b4e6;
}

.activity.blue h4 {
    color: #90b4e6;
}
.activity.green span {
    background: #aec785;
}

.activity.green h4 {
    color: #aec785;
}

.activity h4 {
    margin-top:0 ;
    font-size: 16px;
}

.activity p {
    margin-bottom: 0;
    font-size: 13px;
}

.activity .activity-desk i, .activity.alt .activity-desk i {
    float: left;
    font-size: 18px;
    margin-right: 10px;
    color: #bebebe;
}

.activity .activity-desk {
    margin-left: 70px;
    position: relative;
}

.activity.alt .activity-desk {
    margin-right: 70px;
    position: relative;
}

.activity.alt .activity-desk .panel {
    float: right;
    position: relative;
}

.activity-desk .panel {
    background: #F4F4F4 ;
    display: inline-block;
}


.activity .activity-desk .arrow {
    border-right: 8px solid #F4F4F4 !important;
}
.activity .activity-desk .arrow {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    left: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .arrow-alt {
    border-left: 8px solid #F4F4F4 !important;
}

.activity-desk .arrow-alt {
    border-bottom: 8px solid transparent;
    border-top: 8px solid transparent;
    display: block;
    height: 0;
    right: -7px;
    position: absolute;
    top: 13px;
    width: 0;
}

.activity-desk .album {
    display: inline-block;
    margin-top: 10px;
}

.activity-desk .album a{
    margin-right: 10px;
}

.activity-desk .album a:last-child{
    margin-right: 0px;
}
</style>
    <body>

        <div class="">
            <?php
            include('adminNavbar.php');
            ?>
        </div>


        <!-- design start -->
    
        <div class="container bootstrap snippets bootdey">
<div class="row">
  <div class="profile-nav col-md-3">
      <div class="panel">
          <div class="user-heading round">
              <a href="#">
                  <img src="https://www.pngall.com/wp-content/uploads/12/Avatar-Profile-Vector-No-Background.png" alt="">
              </a>
              <h1><?php echo $row['boNameAccount'] ?></h1>
              <p><?php echo $row['boNameAccount'] ?></p>

        <div class="ac-btn">
            <a href="http://localhost/user_management/Pages/Admin/ManagerAcceptOne.php?id=<?php echo $recv; ?>" class="btn btn-success">Accepted</a>
            <a href="http://localhost/user_management/Pages/Admin/ManagerRejectReport.php?id=<?php echo $recv; ?>" class="btn btn-danger">Rejected</a>
        </div>

          </div>
      </div>
  </div>
  <div class="profile-info col-md-9">
     
      <div class="panel">
          <div class="bio-graph-heading">
              Aliquam ac magna metus. Nam sed arcu non tellus fringilla fringilla ut vel ispum. Aliquam ac magna metus.
          </div>
          
          <br>
          <div class="panel-body bio-graph-info">
          <h1>Name of the CDBL Participant</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>Application </span>: <?php echo $row['boApplication'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date </span>: <?php echo $row['boDate'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>CDBL Participent </span>: <?php echo $row['boCDBLParticipentId'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>BO ID</span>: <?php echo $row['boBoId'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date Accoutn </span>: <?php echo $row['boDateAccoutnOpened'] ?></p>
                  </div>
                 
              </div>
          </div>
          <hr>
        <!-- second Bio -->
        <div class="panel-body bio-graph-info">
              <h1>1 First Application</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>Name Account </span>: <?php echo $row['boNameAccount'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Title Mr/MRS </span>: <?php echo $row['boTitleMr'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Name of Contact </span>: <?php echo $row['boNameContactPersion'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Gender</span>: <?php echo $row['boGender'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Occupation </span>: <?php echo $row['boOccupation'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Father's Name </span>: <?php echo $row['boFatherOrHusbandName'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mother Name </span>: <?php echo $row['boMotherName'] ?></p>
                  </div>
              </div>
          </div>
          <hr>
        <!-- second bio end -->
        <!-- third Bio -->
        <div class="panel-body bio-graph-info">
              <h1>2 Contact Details</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>Address </span>: <?php echo $row['boAddress'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>City </span>: <?php echo $row['boCity'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Post Code </span>: <?php echo $row['boPostCode'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>State</span>: <?php echo $row['boState'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Country </span>: <?php echo $row['boCountry'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Telephone </span>: <?php echo $row['boTelephone'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mobile </span>: <?php echo $row['boMobile'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Fax </span>: <?php echo $row['boFax'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Email </span>: <?php echo $row['boEmail'] ?></p>
                  </div>
              </div>
          </div>
          <hr>
        <!-- third bio end -->

        <!-- Fourth Bio -->
        <div class="panel-body bio-graph-info">
              <h1>3 Passport Details</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>Passport No </span>: <?php echo $row['boPassportNo'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Issue Place </span>: <?php echo $row['boIssuePlace'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Issue Date </span>: <?php echo $row['boIssueDate'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Expire Date</span>: <?php echo $row['boExpireDate'] ?></p>
                  </div>
              </div>
          </div>
          <hr>
        <!-- Fourth bio end -->

        <!-- Five Bio -->
        <div class="panel-body bio-graph-info">
              <h1>4 Bank Details</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>Bank Name </span>: <?php echo $row['boBankName'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Branch Name </span>: <?php echo $row['boBranchName'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Account No</span>: <?php echo $row['boAccountNo'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Routing No </span>: <?php echo $row['boRoutingNo'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Electronic Divident </span>: <?php echo $row['boElectronicDivident'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Tex Exemption </span>: <?php echo $row['boTexExemption'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Tin/TAX ID  </span>: <?php echo $row['boTinTAXId'] ?></p>
                  </div>
              </div>
          </div>
          <hr>
        <!-- Five bio end -->

        <!-- Six Bio -->
        <div class="panel-body bio-graph-info">
              <h1>5 Other Information</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>Nationality </span>: <?php echo $row['boNationality'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date of Birt </span>: <?php echo $row['boDateofBirt'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Internal Ref</span>: <?php echo $row['boInternalRef'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Company </span>: <?php echo $row['boCompany'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Date of Registration </span>: <?php echo $row['boDateofRegistration'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Registration No </span>: <?php echo $row['boRegistrationNo'] ?></p>
                  </div>
              </div>
          </div>
          <hr>
        <!-- Six bio end -->

        <!-- Seven Bio -->
        <div class="panel-body bio-graph-info">
              <h1>6 Joint Application (Second Account Holder)</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>Name in Full </span>: <?php echo $row['boNameInFull'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Name of Account </span>: <?php echo $row['boNameAccountHolder'] ?></p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mr/Mrs / Ms</span>: <?php echo $row['boMrMrsMs'] ?></p>
                  </div>
              </div>
          </div>
        <!-- Seven bio end -->
      </div>
      
  </div>
</div>
</div>

    
        <!-- design end -->

    <?php
}
    ?>

    <br><br><br><br><br>

    <div class="bg-black py-2 ">
        <?php
        include('adminFooter.php');
        ?>
    </div>
    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>

    </html>