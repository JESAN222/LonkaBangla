<!DOCTYPE html>
    <html>

    <head>
        <title>Power of Attornry</title>
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

            <h3 class="my-4 text-center">Power of Attornry Form</h3>
            <hr>
            <form action="http://localhost/user_management/Pages/user/formFourSubmit.php" method="POST">
            <!-- First section -->
                <p class="catagori">Power of Attornry</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Application No</label>
                    <input type="txt" name="poaApplicationNo" class="form-control" id="inputEmail4" placeholder="Application No">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Date</label>
                    <input type="txt" name="poaDate" class="form-control" id="inputPassword4" placeholder="Date">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">CDBL Participane Id</label>
                    <input type="txt" name="poaCDBLParticipaneId" class="form-control" id="inputEmail4" placeholder="CDBL Participane Id">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Account Holder BO Id</label>
                    <input type="txt" name="poaAccountHolderBoId" class="form-control" id="inputPassword4" placeholder="Account Holder BO Id">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Name of Account Holder</label>
                    <input type="txt" name="poaNameAccountHolder" class="form-control" id="inputPassword4" placeholder="Name of Account Holder">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Short Name</label>
                    <input type="txt" name="poaShortName" class="form-control" id="inputPassword4" placeholder="Short Name">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Title Mr/Mrs</label>
                    <input type="txt" name="poaTitleMrMrs" class="form-control" id="inputPassword4" placeholder="Title Mr/Mrs">
                    </div>
                </div>


                <p class="catagori">1 Power of Attornry Holder's Contaact Details</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Address</label>
                    <input name="poaAddress" type="text" class="form-control" id="inputCity" placeholder="Address">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">City</label>
                    <input name="poaCity" type="text" class="form-control" id="inputCity" placeholder="City">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Post Code</label>
                    <input name="poaPostCode" type="text" class="form-control" id="inputZip" placeholder="Post Code">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">State/Division</label>
                    <input name="poaStateDivision" type="text" class="form-control" id="inputCity" placeholder="State">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Country</label>
                    <input name="poaCountry" type="text" class="form-control" id="inputCity" placeholder="Country">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Telephone</label>
                    <input name="poaTelephone" type="text" class="form-control" id="inputZip" placeholder="Telephone">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Mobile Phone</label>
                    <input name="poaMobilePhone" type="text" class="form-control" id="inputCity" placeholder="Mobile">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Fax</label>
                    <input name="poaFax" type="text" class="form-control" id="inputCity" placeholder="Fax">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Email</label>
                    <input name="poaEmail" type="email" class="form-control" id="inputZip" placeholder="Email">
                    </div>
                </div>


                <p class="catagori">2 Power of Attornry Holder's Passport Details</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Passport No</label>
                    <input name="poaPassportNo" type="text" class="form-control" id="inputCity" placeholder="Passport No">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Issue Place</label>
                    <input name="poaIssuePlace" type="text" class="form-control" id="inputCity" placeholder="Issue Place">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Issue Date</label>
                    <input name="poaIssueDate" type="txt" class="form-control" id="inputZip" placeholder="Issue Date">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Expire Date</label>
                    <input name="poaExpireDate" type="txt" class="form-control" id="inputZip" placeholder="Expire Date">
                    </div>
                </div>

                <p class="catagori">3 Others Information of Power of Attornry Holder</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <p> </p> 
                        <p> </p>
                        <label for="inputZip">Residency  </label>
                        <div class="form-check form-check-inline">
                        <input name="poaResidency" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Residen">
                        <label class="form-check-label" for="inlineCheckbox1">Residen</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input name="poaResidency" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Non Residen">
                        <label class="form-check-label" for="inlineCheckbox2">Non Residen</label>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Nationality</label>
                    <input type="txt" name="poaNationality" class="form-control" id="inputPassword4" placeholder="Nationality">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Date of Birth</label>
                    <input type="txt" name="poaDateofBirth" class="form-control" id="inputPassword4" placeholder="Date of Birth">
                    </div>
                </div>

                <div class="form-row">
                     <div class="form-group col-md-4">
                    <label for="inputPassword4">Power of Attornry Effective Form</label>
                    <input type="txt" name="poaPowerAttornryEffective" class="form-control" id="inputPassword4" placeholder="Nationality">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">To</label>
                    <input type="txt" name="poaTo" class="form-control" id="inputPassword4" placeholder="To">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Remarkes</label>
                    <input type="txt" name="poaRemarkes" class="form-control" id="inputPassword4" placeholder="Remarkes">
                    </div>
                </div>

                <p class="catagori">Photograph of Power of Attornry Holder</p>
                <p class="hrr"></p>
                <div class="form-row">
                       
                    <div class="form-group col-md-12">
                  
                        <p> </p>
                    <div id="drop">
                        <br>
                        <input type="file" name="poa upl" multiple />
                        <div class="conten">
                        <p>(POA Holder)</p>
                        </div>
                    </div>
                    

                  
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