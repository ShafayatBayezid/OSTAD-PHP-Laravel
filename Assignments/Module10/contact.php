<?php
include_once 'nav.php';

if ( isset( $_POST['submit'] ) ) {

// Retrieve user input
    $name = htmlspecialchars( $_POST['name'] );
    $email = htmlspecialchars( $_POST['email'] );
    $subject = htmlspecialchars( $_POST['subject'] );
    $message = htmlspecialchars( $_POST['message'] );

    if ( empty( $name ) || empty( $email ) || empty( $subject ) || empty( $message ) ) {
        $warningMsg = "Please fill out all fields.";
    } else if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        $warningMsg = "Please enter a valid email address.";
    } else {

        $successMsg = "Successfuly message send.";
    }

}

?>
<body>

    <div class="container mt-5">
        <h1 class="text-center">Contact Us</h1>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-sm-10">

            <?php
                if ( !empty( $warningMsg ) ) {
            ?>
                <div class="alert alert-danger text-center">
                    <?php echo $warningMsg; ?>
                </div>

            <?php
                } elseif ( !empty( $successMsg ) ) {
            ?>

                <div class="alert alert-success text-center">
                    <?php echo $successMsg; ?>
                </div>
            <?php
                }
            ?>

                <form method="POST" action="contact.php">
                <div class="form-group mb-4">
                    <label for="name">Name <span>*</span></label>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="form-group mb-4">
                    <label for="email">Email address <span>*</span></label>
                    <input type="email" class="form-control" id="email" name="email" >
                </div>
                <div class="form-group mb-4">
                    <label for="subject">Subject <span>*</span></label>
                    <input type="text" class="form-control" id="subject" name="subject" >
                </div>
                <div class="form-group mb-1">
                    <label for="message">Message <span>*</span></label>
                    <textarea class="form-control" id="message" name="message" rows="5" ></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-5">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <?php
include_once 'footer.php'
?>