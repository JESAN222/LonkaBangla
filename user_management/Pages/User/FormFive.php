<!DOCTYPE html>
    <html>

    <head>
        <title>KYC Profile Form</title>
        <!-- Add Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <style>
    .catagori{
        color:red;
    }
    .hrr{
        margin-top: -0.6rem;
        margin-bottom: 1rem;
        border: 0;
        border-top: 1px solid rgba(0, 0, 0, 1.1);
    }
    .container.mt-5.pt-4.mb-5.pb-5 {
    margin-top: -37px !important;
    }
    div#drop {
    width: 19%;
    height: 140px;
    background: #ededed;
    margin: auto;
}
.conten {
    margin-top: 58px;
    margin-left: 55px;
}

</style>
    <body>

        <div class="">
        <?php include('../User/userNavbar.php') ?>
        </div>

        <div class="container mt-5 pt-4 mb-5 pb-5">

            <h3 class="my-4 text-center">KYC Profile Form</h3>
            <hr>
            <form action="http://localhost/user_management/Pages/user/formFiveSubmit.php" method="POST">
            <!-- First section -->
                <p class="catagori">Application for BO Account</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">BO ID</label>
                    <input type="txt" name="kyBOId" class="form-control" id="inputEmail4" placeholder="BO ID">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Internal Reference No</label>
                    <input type="txt" name="kyInternalReferenceNo" class="form-control" id="inputPassword4" placeholder="Internal Reference No">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">1 Customer / Account No</label>
                    <input type="txt" name="kyCustomerAccountNo" class="form-control" id="inputEmail4" placeholder="Customer / Account No">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">2 Type of Account</label>
                    <input type="txt" name="kyTypeofAccount" class="form-control" id="inputEmail4" placeholder="Type of Account">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">3 Name of Account Officer/Relationship Manager</label>
                    <input type="txt" name="kyNameofAccountOfficer" class="form-control" id="inputEmail4" placeholder="Name of Account Officer/Relationship Manager">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">4 What is the source of fund?How the source of fund has been verified</label>
                    <input type="txt" name="kySourceofFund" class="form-control" id="inputEmail4" placeholder="What is the source of fund?How the source of fund has been verified">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">5 Information regarding Benificial Owner of the account</label>
                    <input type="txt" name="kyOwnerofTheAccount" class="form-control" id="inputEmail4" placeholder="Information regarding Benificial Owner of the account">
                    </div>
                </div>
                <p class="hrr"></p>


                <div class="form-row">
                <br>
                <p>6. Passport No</p>
                <div class="form-group col-md-3">
                <input name="kyPassportNo" type="txt" class="form-control" id="inputZip" placeholder="Passport No">
                </div>

                <div class="form-group col-md-6">
                <label for="inputZip">  &emsp;&emsp; Whether photocopy obtained? ( where applicable)?  &emsp; </label>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes </label>
                </div>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
                </div>
                </div>

                <div class="form-row">
                <br>
                <p>7. Voter Id Card No</p>
                <div class="form-group col-md-3">
                <input name="kyVoterIdCardNo" type="txt" class="form-control" id="inputZip" placeholder="Voter Id Card No">
                </div>

                <div class="form-group col-md-6">
                <label for="inputZip"> Whether photocopy obtained? ( where applicable)?  &emsp; </label>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy0" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes </label>
                </div>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy0" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
                </div>
                </div>

                <div class="form-row">
                <br>
                <p>8. National Id No</p>
                <div class="form-group col-md-3">
                <input name="kyNationalIdNo" type="txt" class="form-control" id="inputZip" placeholder="National Id No">
                </div>

                <div class="form-group col-md-6">
                <label for="inputZip">&ensp; Whether photocopy obtained? ( where applicable)?  &emsp;</label>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy1" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes </label>
                </div>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy1" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
                </div>
                </div>

                <div class="form-row">
                <br>
                <p>9. T.I.N. No</p>
                <div class="form-group col-md-3">
                <input name="kyTinNo" type="txt" class="form-control" id="inputZip" placeholder="T.I.N. No">
                </div>

                <div class="form-group col-md-6">
                <label for="inputZip"> &ensp; &ensp; &ensp; &ensp; Whether photocopy obtained? ( where applicable)?  &emsp; </label>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy2" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes </label>
                </div>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy2" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
                </div>
                </div>

                <div class="form-row">
                <br>
                <p>10. Var Reg No</p>
                <div class="form-group col-md-3">
                <input name="kyVarRegNo" type="txt" class="form-control" id="inputZip" placeholder="Var Reg No">
                </div>

                <div class="form-group col-md-6">
                <label for="inputZip"> &ensp; &nbsp;&nbsp;Whether photocopy obtained? ( where applicable)?  &emsp; </label>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy3" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes </label>
                </div>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy3" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
                </div>
                </div>

                <div class="form-row">
                <br>
                <p>11. Driving License No</p>
                <div class="form-group col-md-2">
                <input name="kyDrivingLicenseNo" type="txt" class="form-control" id="inputZip" placeholder=" Driving License No">
                </div>

                <div class="form-group col-md-6">
                <label for="inputZip">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Whether photocopy obtained? ( where applicable)?  &emsp; </label>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy4" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes </label>
                </div>
                <div class="form-check form-check-inline">
                <input name="kyphotocopy4" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
                </div>
                </div>

                
                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">12. What does customer do?</label>
                    <input type="txt" name="kyDoesCustomer" class="form-control" id="inputEmail4" placeholder="Mention the Occuption of the client in details">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Comments (If any) </label>
                    <input type="txt" name="kyComments" class="form-control" id="inputEmail4" placeholder="">
                    </div>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


        <div class="bg-black py-2">
            <?php
            include('userFooter.php');
            ?>
        </div>

        <!-- Add Bootstrap JS -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

    </html>


    <!-- Bootstrap CDN JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>

</html>