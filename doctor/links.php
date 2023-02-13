<html>

<head>
  <meta name="GENERATOR" content="Microsoft FrontPage 5.0">
  <meta name="ProgId" content="FrontPage.Editor.Document">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>New Page 1</title>

  <style>
    .vertical-menu {
      width: auto;
    }

    .vertical-menu a {
      background-color: #eee;
      color: black;
      display: block;
      padding: 12px;
      text-decoration: none;
    }

    .vertical-menu a:hover {
      background-color: #ccc;
    }

    .vertical-menu a.active {
      background-color: #1778f2;
      color: white;
    }
  </style>


  <?php

  // $active_page = $_GET['active_page'];

  if ($active_page == 'step0') {
    $step0 = "active";
  } else if ($active_page == 'step1') {
    $step1 = "active";
  } else if ($active_page == 'step2') {
    $step2 = "active";
  } else if ($active_page == 'step3') {
    $step3 = "active";
  } else if ($active_page == 'step4') {
    $step4 = "active";
  } else if ($active_page == 'step5') {
    $step5 = "active";
  } else if ($active_page == 'step6') {
    $step6 = "active";
  } else if ($active_page == 'step7') {
    $step7 = "active";
  } else if ($active_page == 'step8') {
    $step8 = "active";
  } else if ($active_page == 'step9') {
    $step9 = "active";
  } else if ($active_page == 'step10') {
    $step10 = "active";
  } else if ($active_page == 'step11') {
    $step11 = "active";
  } else {
    $logout = "active";
  }
  ?>
</head>

<body>


  <div class="vertical-menu">
    <a href="doctor_home.php" class="<?php echo $step0; ?>">My Home</a>
    <a href="step1_update_personal_details.php" class="<?php echo $step1; ?>">1. Update Personal Details</a>
    <a href="step2_update_state_medical_registration.php" class="<?php echo $step2; ?>">2. State Medical Registration</a>
    <a href="step2_update_central_medical_registration.php" class="<?php echo $step3; ?>">3. Central Medical Registration</a>
    <a href="step3_update_educational_qualification.php" class="<?php echo $step4; ?>">4. Educational Qualification</a>
    <a href="step4_consultant_attached.php" class="<?php echo $step5; ?>">5. Consultant Attached With</a>
    <a href="step6_identity_proof.php" class="<?php echo $step6; ?>">6. PAN Card</a>
    <a href="step10_consultation_fees.php" class="<?php echo $step7; ?>">7. Consultation Fees</a>
    <a href="step8_update_achievements.php" class="<?php echo $step8; ?>">8. Achievements</a>
    <a href="step9_update_expertise.php" class="<?php echo $step9; ?>">9. Expertise</a>
    <a href="step10_view_your_profile.php" class="<?php echo $step10; ?>"> View Your Profile</a>
    <a href="logout.php" class="<?php echo $logout; ?>">Logout</a>
    <!-- <a href="step11_terms_and_conditions.php" class="<?php echo $step13; ?>">1. Terms and Conditions</a> -->
    <!-- <a href="step5_establishment_details.php" class="<?php echo $step5; ?>">5. Establishment Details</a> -->
    <!-- <a href="step7_medical_registration_proof.php" class="<?php echo $step7; ?>">7. Medical Registration Proof</a> -->
    <!-- <a href="step8_map_location.php" class="<?php echo $step8; ?>">8. Map Location</a> -->
    <!-- <a href="step9_establishment_timings.php" class="<?php echo $step9; ?>">9. Establishment Timings</a> -->
  </div>

</body>

</html>