<!DOCTYPE html>
<html lang="en">

<head>

    <title>BO Account</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
</style>
<body>



    <!DOCTYPE html>
    <html>

    <head>
        <title>BO Form</title>
        <!-- Add Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>

    <body>

        <div class="">
        <?php include('../User/userNavbar.php') ?>
        </div>

        <div class="container mt-5 pt-4 mb-5 pb-5">

            <h3 class="my-4 text-center">BO Account Form</h3>
            <hr>
            <form action="http://localhost/user_management/Pages/user/formtwoSubmit.php" method="POST">
            <!-- First section -->
                <p class="catagori">Name of the CDBL Participant</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Application:</label>
                    <input type="txt" required name="boApplication" class="form-control" id="inputEmail4" placeholder="Application">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Date:</label>
                    <input type="txt" required name="boDate" class="form-control" id="inputPassword4" placeholder="Date">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                    <label for="inputCity">CDBL Participent ID</label>
                    <input required name="boCDBLParticipentId" type="text" class="form-control" id="inputCity" placeholder="CDBL Participent ID">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">BO ID</label>
                    <input required name="boBoId" type="text" class="form-control" id="inputCity" placeholder="BO ID">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Date Accoutn Opened</label>
                    <input required name="boDateAccoutnOpened" type="text" class="form-control" id="inputZip" placeholder="Date Accoutn Opened">
                    </div>
                </div>
                

                3rd section
                <p class="catagori">1 First Application</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Name  in full of Account:</label>
                    <input required name="boNameAccount" type="txt" class="form-control" id="inputEmail4" placeholder="Name of full Account">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Title Mr/MRS/Ms:</label>
                    <input required name="boTitleMr" type="txt" class="form-control" id="inputPassword4" placeholder="Mr/MRS/Ms">
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-4">
                    <label for="inputCity">Name of Contact Persion</label>
                    <input required name="boNameContactPersion" type="text" class="form-control" id="inputCity" placeholder="Name of Contact">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Gender</label>
                    <input required name="boGender" type="text" class="form-control" id="inputCity" placeholder="Gender">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Occupation</label>
                    <input required name="boOccupation" type="text" class="form-control" id="inputZip" placeholder="Occupation">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Father's / Husband Name:</label>
                    <input required name="boFatherOrHusbandName" type="txt" class="form-control" id="inputEmail4" placeholder="Father's / Husband Name">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Mother Name:</label>
                    <input required name="boMotherName" type="txt" class="form-control" id="inputPassword4" placeholder="Mother Name">
                    </div>
                </div>

                <p class="catagori">2 Contact Details</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Address</label>
                    <input required name="boAddress" type="text" class="form-control" id="inputCity" placeholder="Address">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">City</label>
                    <input required name="boCity" type="text" class="form-control" id="inputCity" placeholder="City">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Post Code</label>
                    <input required name="boPostCode" type="text" class="form-control" id="inputZip" placeholder="Post Code">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">State</label>
                    <input required name="boState" type="text" class="form-control" id="inputCity" placeholder="State">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Country</label>
                    <input required name="boCountry" type="text" class="form-control" id="inputCity" placeholder="Country">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Telephone</label>
                    <input required name="boTelephone" type="text" class="form-control" id="inputZip" placeholder="Telephone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Mobile</label>
                    <input required name="boMobile" type="text" class="form-control" id="inputCity" placeholder="Mobile">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Fax</label>
                    <input required name="boFax" type="text" class="form-control" id="inputCity" placeholder="Fax">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Email</label>
                    <input required name="boEmail" type="email" class="form-control" id="inputZip" placeholder="Email">
                    </div>
                </div>


                <p class="catagori">3 Passport Details</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Passport No</label>
                    <input required name="boPassportNo" type="text" class="form-control" id="inputCity" placeholder="Passport No">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Issue Place</label>
                    <input required name="boIssuePlace" type="text" class="form-control" id="inputCity" placeholder="Issue Place">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Issue Date</label>
                    <input required name="boIssueDate" type="txt" class="form-control" id="inputZip" placeholder="Issue Date">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Expire Date</label>
                    <input required name="boExpireDate" type="txt" class="form-control" id="inputZip" placeholder="Expire Date">
                    </div>
                </div>


                <p class="catagori">4 Bank Details</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Bank Name</label>
                    <input required name="boBankName" type="text" class="form-control" id="inputCity" placeholder="Bank Name">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Branch Name</label>
                    <input required name="boBranchName" type="text" class="form-control" id="inputCity" placeholder="Branch Name">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Account No</label>
                    <input required required name="boAccountNo" type="txt" class="form-control" id="inputZip" placeholder="Account No">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Routing No</label>
                    <input required name="boRoutingNo" type="txt" class="form-control" id="inputZip" placeholder="Routing No">
                    </div>
                </div>
                

             <div class="form-row">

             <div class="form-group col-md-3">
                <label for="inputZip">Electronic Divident  </label>
                <div class="form-check form-check-inline">
                <input name="boElectronicDivident" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                <input name="boElectronicDivident" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
            </div>

                <div class="form-group col-md-3">
                <label for="inputZip">Tex Exemption  </label>
                <div class="form-check form-check-inline">
                <input name="boTexExemption" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                <label class="form-check-label" for="inlineCheckbox1">Yes</label>
                </div>
                <div class="form-check form-check-inline">
                <input name="boTexExemption" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                <label class="form-check-label" for="inlineCheckbox2">No</label>
                </div>
                </div>
                <p>Tin/TAX ID   </p>
                <div class="form-group col-md-3">
                <input required name="boTinTAXId" type="txt" class="form-control" id="inputZip" placeholder="Tin/TAX ID">
                </div>
             </div>


             <p class="catagori">5 Other Information</p>
             <p class="hrr"></p>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputCity">Nationality</label>
                <input required name="boNationality" type="text" class="form-control" id="inputCity" placeholder="Nationality">
                </div>

                <div class="form-group col-md-4">
                <label for="inputCity">Date of Birt</label>
                <input required name="boDateofBirt" type="text" class="form-control" id="inputCity" placeholder="Date of Birt">
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputZip">Internal Ref</label>
                <input required name="boInternalRef" type="text" class="form-control" id="inputZip" placeholder="Internal Ref">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputCity">Company</label>
                <input required name="boCompany" type="text" class="form-control" id="inputCity" placeholder="Company">
                </div>

                <div class="form-group col-md-4">
                <label for="inputCity">Date of Registration</label>
                <input required name="boDateofRegistration" type="text" class="form-control" id="inputCity" placeholder="Date of Registration">
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputZip">Registration No</label>
                <input required name="boRegistrationNo" type="text" class="form-control" id="inputZip" placeholder="Registration No">
                </div>
            </div>



            <p class="catagori">6 Joint Application (Second Account Holder) </p>
            <p class="hrr"></p>
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputCity">Name in Full</label>
                <input required name="boNameInFull" type="text" class="form-control" id="inputCity" placeholder="Name in Full">
                </div>

                <div class="form-group col-md-4">
                <label for="inputCity">Name of Account Holder</label>
                <input required name="boNameAccountHolder" type="text" class="form-control" id="inputCity" placeholder="Name of Account Holder">
                </div>
                
                <div class="form-group col-md-4">
                <label for="inputZip">Mr/Mrs / Ms</label>
                <input required name="boMrMrsMs" type="text" class="form-control" id="inputZip" placeholder="Mr/Mrs / Ms">
                </div>
            </div>
            
                <button type="submit" name="submit" class="btn btn-primary">Next</button>
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