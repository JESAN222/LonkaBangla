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

            <h3 class="my-4 text-center">Electronic Fund Transfar Form</h3>
            <hr>
            <form action="http://localhost/user_management/Pages/user/FormOneSub.php" method="POST">
            <!-- First section -->
                <p class="catagori">Electronic Fund Transfar Enrollment Form</p>
                <p class="hrr"></p>
                <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">Client Code</label>
                    <input type="txt" name="one" class="form-control" id="inputEmail4" placeholder="Client Code">
                    </div>

                    <div class="form-group col-md-6">
                    <label for="inputPassword4">Date</label>
                    <input type="txt" name="two" class="form-control" id="inputPassword4" placeholder="Date">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Bank Name</label>
                    <input type="txt" name="one" class="form-control" id="inputEmail4" placeholder="Bank Name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Back A/C</label>
                    <input type="txt" name="one" class="form-control" id="inputEmail4" placeholder="Back A/C">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Branch Name</label>
                    <input type="txt" name="one" class="form-control" id="inputEmail4" placeholder="Branch Name">
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                    <label for="inputEmail4">Routing Number</label>
                    <input type="txt" name="one" class="form-control" id="inputEmail4" placeholder="Routing Number">
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