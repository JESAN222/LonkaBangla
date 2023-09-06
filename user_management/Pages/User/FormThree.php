    <!DOCTYPE html>
    <html>

    <head>
        <title>Two-Column Form</title>
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
</style>
    <body>

        <div class="">
        <?php include('../User/userNavbar.php') ?>
        </div>

        <div class="container mt-5 pt-4 mb-5 pb-5">

            <h3 class="my-4 text-center">Nominee Form</h3>
            <hr>
            <form action="http://localhost/user_management/Pages/user/" method="POST">
            <!-- First section -->
                <p class="catagori">BO Account Nomination Form</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Application No</label>
                    <input type="txt" name="one" class="form-control" id="inputEmail4" placeholder="Date">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Date</label>
                    <input type="txt" name="two" class="form-control" id="inputPassword4" placeholder="Account Type">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">CDBL Participane Id</label>
                    <input type="txt" name="three" class="form-control" id="inputEmail4" placeholder="Clinet Code">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Account Holder BO Id</label>
                    <input type="txt" name="four" class="form-control" id="inputPassword4" placeholder="Link Code">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Name of Account Holder</label>
                    <input type="txt" name="four" class="form-control" id="inputPassword4" placeholder="Link Code">
                    </div>
                </div>

                <!-- Two section -->
                <p class="catagori">1. Nominee Heirs Details</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputEmail4">Full Name</label>
                    <input type="txt" name="three" class="form-control" id="inputEmail4" placeholder="Clinet Code">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Short Name</label>
                    <input type="txt" name="four" class="form-control" id="inputPassword4" placeholder="Link Code">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Title Mr/Mrs</label>
                    <input type="txt" name="four" class="form-control" id="inputPassword4" placeholder="Link Code">
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Relationship with Nominee</label>
                    <input name="five" type="text" class="form-control" id="inputCity" placeholder="Name of the customer">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Percentage (%)</label>
                    <input name="six" type="text" class="form-control" id="inputCity" placeholder="Father Name">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Address</label>
                    <input name="seven" type="txt" class="form-control" id="inputZip" placeholder="Address">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">City</label>
                    <input name="eight" type="txt" class="form-control" id="inputZip" placeholder="City">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Post code</label>
                    <input name="nine" type="text" class="form-control" id="inputCity" placeholder="Post code">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">State/Division</label>
                    <input name="ten" type="text" class="form-control" id="inputCity" placeholder="State/Division">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Country</label>
                    <input name="eleven" type="txt" class="form-control" id="inputZip" placeholder="Country">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Telephone</label>
                    <input name="twelve" type="txt" class="form-control" id="inputZip" placeholder="Telephone">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Mobile phone</label>
                    <input name="thirteen" type="text" class="form-control" id="inputCity" placeholder="Mobile phone">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Fax</label>
                    <input name="fourteen" type="text" class="form-control" id="inputCity" placeholder="Fax">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Email</label>
                    <input name="fifteen" type="email" class="form-control" id="inputZip" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Passport No</label>
                    <input name="twenty_two" type="text" class="form-control" id="inputCity" placeholder="Passport No">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Issue Place</label>
                    <input name="twenty_three" type="text" class="form-control" id="inputCity" placeholder="Issue Place">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Issue Date</label>
                    <input name="twenty_four" type="txt" class="form-control" id="inputZip" placeholder="Issue Date">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Expire Date</label>
                    <input name="twenty_five" type="txt" class="form-control" id="inputZip" placeholder="Expire Date">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputZip">Residency  </label>
                        <div class="form-check form-check-inline">
                        <input name="thirty" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                        <label class="form-check-label" for="inlineCheckbox1">Residen</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input name="thirty" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                        <label class="form-check-label" for="inlineCheckbox2">Non Residen</label>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Nationality</label>
                    <input type="txt" name="eighteen" class="form-control" id="inputPassword4" placeholder="Nationality">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Date of Birth</label>
                    <input type="txt" name="eighteen" class="form-control" id="inputPassword4" placeholder="Date of Birth">
                    </div>
                </div>

                <!-- Thirs Section -->
                <p class="catagori">Guardian's Details (If Nominee is a Minor)</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Name in Full</label>
                    <input type="txt" name="one" class="form-control" id="inputEmail4" placeholder="Date">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Short Name</label>
                    <input type="txt" name="two" class="form-control" id="inputPassword4" placeholder="Account Type">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Relationship with Nominee</label>
                    <input name="five" type="text" class="form-control" id="inputCity" placeholder="Name of the customer">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Date of Birth Minor</label>
                    <input name="six" type="text" class="form-control" id="inputCity" placeholder="Father Name">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Maturity Date of Min</label>
                    <input name="seven" type="txt" class="form-control" id="inputZip" placeholder="Mother Name">
                    </div>
                </div>



                <div class="form-row">                 
                    <div class="form-group col-md-6">
                    <label for="inputZip">Address</label>
                    <input name="seven" type="txt" class="form-control" id="inputZip" placeholder="Address">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputZip">City</label>
                    <input name="eight" type="txt" class="form-control" id="inputZip" placeholder="City">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Post code</label>
                    <input name="nine" type="text" class="form-control" id="inputCity" placeholder="Post code">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">State/Division</label>
                    <input name="ten" type="text" class="form-control" id="inputCity" placeholder="State/Division">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Country</label>
                    <input name="eleven" type="txt" class="form-control" id="inputZip" placeholder="Country">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Telephone</label>
                    <input name="twelve" type="txt" class="form-control" id="inputZip" placeholder="Telephone">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity">Mobile phone</label>
                    <input name="thirteen" type="text" class="form-control" id="inputCity" placeholder="Mobile phone">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputCity">Fax</label>
                    <input name="fourteen" type="text" class="form-control" id="inputCity" placeholder="Fax">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <label for="inputZip">Email</label>
                    <input name="fifteen" type="email" class="form-control" id="inputZip" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <label for="inputCity">Passport No</label>
                    <input name="twenty_two" type="text" class="form-control" id="inputCity" placeholder="Passport No">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputCity">Issue Place</label>
                    <input name="twenty_three" type="text" class="form-control" id="inputCity" placeholder="Issue Place">
                    </div>
                    
                    <div class="form-group col-md-3">
                    <label for="inputZip">Issue Date</label>
                    <input name="twenty_four" type="txt" class="form-control" id="inputZip" placeholder="Issue Date">
                    </div>

                    <div class="form-group col-md-3">
                    <label for="inputZip">Expire Date</label>
                    <input name="twenty_five" type="txt" class="form-control" id="inputZip" placeholder="Expire Date">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="inputZip">Residency  </label>
                        <div class="form-check form-check-inline">
                        <input name="thirty" class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Yes">
                        <label class="form-check-label" for="inlineCheckbox1">Residen</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input name="thirty" class="form-check-input" type="checkbox" id="inlineCheckbox2" value="No">
                        <label class="form-check-label" for="inlineCheckbox2">Non Residen</label>
                        </div>
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Nationality</label>
                    <input type="txt" name="eighteen" class="form-control" id="inputPassword4" placeholder="Nationality">
                    </div>

                    <div class="form-group col-md-4">
                    <label for="inputPassword4">Date of Birth</label>
                    <input type="txt" name="eighteen" class="form-control" id="inputPassword4" placeholder="Date of Birth">
                    </div>
                </div>







                <p class="catagori">Photo of Nominee</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-3">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                    <div id="drop">
                       Nominee/
                        <a>Heir 1</a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
                    </div>

                    <div class="form-group col-md-3">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                    <div id="drop">
                          Nominee/
                        <a>Heir 2</a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
                    </div>

                    <div class="form-group col-md-3">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                    <div id="drop">
                         Nominee/
                        <a>Heir 3</a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
                    </div>

                    <div class="form-group col-md-3">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                    <div id="drop">
                    Signatures
                        <a></a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
                    </div>

                </div>
                <p class="catagori">Signatures</p>
                <p class="hrr"></p>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity"> </label>
                    <p>Nominee/Heir 1</p>
                    <p> </p>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">Name</label>
                    <input name="twenty_three" type="text" class="form-control" id="inputCity" placeholder="Name">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                        <p> </p>
                    <div id="drop">
                    Signatures
                        <a> </a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity"> </label>
                    <p>Guardian 1</p>
                    <p> </p>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">Name</label>
                    <input name="twenty_three" type="text" class="form-control" id="inputCity" placeholder="Name">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                        <p> </p>
                    <div id="drop">
                         Signatures
                        <a> </a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity"> </label>
                    <p>Nominee/Heir 2</p>
                    <p> </p>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">Name</label>
                    <input name="twenty_three" type="text" class="form-control" id="inputCity" placeholder="Name">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                        <p> </p>
                    <div id="drop">
                    Signatures
                        <a> </a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity"> </label>
                    <p>Guardian 2</p>
                    <p> </p>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">Name</label>
                    <input name="twenty_three" type="text" class="form-control" id="inputCity" placeholder="Name">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                        <p> </p>
                    <div id="drop">
                        Signatures
                        <a> </a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
                    </div>
                </div>


                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity"> </label>
                    <p>First Account Holder</p>
                    <p> </p>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">Name</label>
                    <input name="twenty_three" type="text" class="form-control" id="inputCity" placeholder="Name">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                        <p> </p>
                    <div id="drop">
                    Signatures
                        <a> </a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                    <label for="inputCity"> </label>
                    <p>Second Account Holder</p>
                    <p> </p>
                    </div>
                    <div class="form-group col-md-4">
                    <label for="inputCity">Name</label>
                    <input name="twenty_three" type="text" class="form-control" id="inputCity" placeholder="Name">
                    </div>
                    
                    <div class="form-group col-md-4">
                    <form id="upload" method="post" action="upload.php" enctype="multipart/form-data">
                        <p> </p>
                    <div id="drop">
                    Signatures
                        <a> </a>
                        <input type="file" name="upl" multiple />
                    </div>
                     </form>
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