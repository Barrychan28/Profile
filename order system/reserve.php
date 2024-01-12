<?php include 'header.php';
include 'validateForm.php';
?>


<div class="container ">
    
    <div class="col-8 mx-auto">
      <H1><b>SmartPhone 4517</b></H1>

      <P><b><center>Please select your information and mobile modal</center></b></P>
      

      <!-- form -->
      <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

      <span class="error" style="color:red;"> <?php echo $fnameErr;?></span>
        <div class="input-group input-group-lg mb-3">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
          </span>
          <input type="text" class="fname form-control " placeholder="First name" name="fname" required>
        </div>
        
        <br>

        <span class="error" style="color:red;"> <?php echo $lnameErr;?></span>
        <div class="input-group input-group-lg mb-3">
          <span class="input-group-text" id="basic-addon1">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
              class="bi bi-person-circle" viewBox="0 0 16 16">
              <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
              <path fill-rule="evenodd"
                d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
          </span>
          <input type="text" class="lname form-control" placeholder="Last name" name="lname" required>
        </div>
        
        <br>

        <span class="error" style="color:red;"> <?php echo $mobileErr;?></span>
        <div class="input-group input-group-lg mb-3">
          <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
              height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path
                d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
            </svg></span>
          <input type="text" class="mobile form-control" max="8" placeholder="Mobile number" name="mobile" required>
        </div>
        
       <br>

        <span class="error" style="color:red;"> <?php echo $emailErr;?></span>
        <div class="input-group input-group-lg mb-3">
          
          <span class="input-group-text" id="basic-addon1"><svg xmlns="http://www.w3.org/2000/svg" width="16"
              height="16" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
              <path
                d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z" />
            </svg></span>
          <input type="text" class="email form-control" placeholder="Email Address" name="email" required>
        </div>
        <br>

        <!--select place-->
        <label for="inputState" class="form-label"><b>Please select model</b></label>
        <span class="error" style="color:red;"> <?php echo $modelErr;?></span></span>
        <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Basic radio toggle button group"
          style="width: 100%;" name="model">
          <input type="radio" class="btn-check"  id="btnradio1" autocomplete="off" name="model" value="16 GB">
          <label class="btn btn-outline-primary" for="btnradio1"  >16 GB</label>

          <input type="radio" class="btn-check"  id="btnradio2" autocomplete="off" name="model" value="32 GB">
          <label class="btn btn-outline-primary" for="btnradio2" >32 GB</label>

          <input type="radio" class="btn-check"  id="btnradio3" autocomplete="off" name="model" value="64 GB">
          <label class="btn btn-outline-primary" for="btnradio3" >64 GB</label>

          <input type="radio" class="btn-check"  id="btnradio4" autocomplete="off" name="model" value="128 GB">
          <label class="btn btn-outline-primary" for="btnradio4" >128 GB</label>
        </div>
        <span class="error" style="color:red;"> <?php echo $modelErr;?></span></span>
        <br><br>


        <label for="inputState" class="form-label"><b>Please select Pick up store</b></label>
        <span class="error" style="color:red;"> <?php echo $storeErr;?></span></span>
       <div class="btn-group btn-group-lg mb-3" role="group" aria-label="Basic radio toggle button group"
          style="width: 100%;" name="store">
          <input type="radio" class="btn-check" id="btnradio5" autocomplete="off" name="store" value="IFC Mall">
          <label class="btn btn-outline-primary" for="btnradio5" >IFC Mall</label>

          <input type="radio" class="btn-check" id="btnradio6" autocomplete="off" name="store" value="Festival Walk">
          <label class="btn btn-outline-primary" for="btnradio6" >Festival Walk</label>

          <input type="radio" class="btn-check" id="btnradio7" autocomplete="off" name="store" value="Hysan Place">
          <label class="btn btn-outline-primary" for="btnradio7" >Hysan Place</label>

          <input type="radio" class="btn-check"  id="btnradio8" autocomplete="off" name="store" value="APM">
          <label class="btn btn-outline-primary" for="btnradio8" >APM</label>
        </div>
        
        <br>

        
        <br>
        <div class="input-group input-group-lg mb-3">
        <span class="input-group-text">Date:</span>
        <input type="date" class="form-control" name="pickup" required>
        </div>
        <span class="error" style="color:red;"><?php echo $pickupErr; ?></span>
        <br>
        
       

        <div class="row g-3 ">
          <div class="col">
            <button type="submit" class="btn btn-submit btn-primary col-4" value="create">Submit</button>
            <button type="reset" class="btn btn-primary col-4" type="reset">Reset</button>
          </div>
        </div>
      </form>
  </div>
</div>

<script>
    var currentDate = new Date().toISOString().split("T")[0];

    var pickupDateInput = document.getElementsByName("pickup")[0];

    pickupDateInput.setAttribute("min", currentDate);
</script>

<?php include 'footer.php';?>