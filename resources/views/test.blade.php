<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Management</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
    <form action="testadd" method="post" class="php-email-form">
      @csrf
      
      <div class="row">
        <div class="form-group col-md-6">
          <label for="Name">Your Name</label>
          <input type="text" name="Name" class="form-control" id="Name" required>
        </div>
        <div class="form-group col-md-6">
          <label for="Email">Your Email</label>
          <input type="text" class="form-control" name="Email" id="Email" required>
        </div>
      </div>
      <div class="form-group">
        <label for="Subject">Subject</label>
        <input type="text" class="form-control" name="Subject" id="Subject" required>
      </div>
      <div class="form-group">
        <label for="Message">Message</label>
        <textarea class="form-control" name="Message" rows="10" id="Message" required></textarea>
      </div>
      <div class="my-3">
        {{-- <div class="loading">Loading</div> --}}
        {{-- <div class="error-message"></div> --}}
        {{-- <div class="sent-message">Your message has been sent. Thank you!</div> --}}
      </div>
      <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
  </div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  {{-- <script src="assets/vendor/php-email-form/validate.js"></script> --}}

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>