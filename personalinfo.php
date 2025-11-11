<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['form']['name'])) {
        $_SESSION['form']['name'] = $_POST['form']['name'];
        $_SESSION['form']['email'] = $_POST['form']['email'];
        $_SESSION['form']['phone-numb'] = $_POST['form']['pho-numb'];
        $_SESSION['form']['address'] = $_POST['form']['address'];
        $_SESSION['form']['contact_method'] = $_POST['form']['contact-method'];
        $_SESSION['form']['reason'] = $_POST['form']['resn'];

        echo 'personal saved';
        exit();
    }

    if (!empty($_POST['form']['prevschool'])) {
        $_SESSION['form']['prevschool'] = $_POST['form']['prevschool'];
        $_SESSION['form']['program'] = $_POST['form']['program'];
        $_SESSION['form']['status'] = $_POST['form']['status'];
        $_SESSION['form']['skills'] = $_POST['form']['skills'];
        $_SESSION['form']['experience'] = $_POST['form']['experience'];
        $_SESSION['form']['link'] = $_POST['form']['link'];
        $_SESSION['form']['interest'] = $_POST['form']['interest'];

        $file_path = 'data.txt';
        $line = $_SESSION['form']['name'] . ", " .
                $_SESSION['form']['email'] . ", " .
                $_SESSION['form']['phone-numb'] . ", " .
                $_SESSION['form']['address'] . ", " .
                $_SESSION['form']['contact_method'] . ", " .
                $_SESSION['form']['reason'] . ", " .
                $_SESSION['form']['prevschool'] . ", " .
                $_SESSION['form']['program'] . ", " .
                $_SESSION['form']['status'] . ", " .
                $_SESSION['form']['skills'] . ", " .
                $_SESSION['form']['experience'] . ", " .
                $_SESSION['form']['link'] . ", " .
                $_SESSION['form']['interest'] . "\n";

        file_put_contents($file_path, $line, FILE_APPEND | LOCK_EX);

        session_destroy();

echo "<div style=\"position:fixed; top:50%; left:50%; transform:translate(-50%, -50%); z-index:9999;background-image:none;\">
  <div class=\"toast show\" style=\"height:150px;\">
    <div class=\"toast-header\">
      <strong style=\"color:green\" class=\"me-auto\">Submitted!</strong>
    </div>
    <div class=\"toast-body\">
      <p style=\"color:green\"> Form successfully submitted </p>
    </div>
  </div>
</div>
<script>
  document.getElementById('closeToast').addEventListener('click', function () {
    location.reload(); // reloads the page
  });
</script>";



        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1" />
<title>Registration Form</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
  body{
    background-image: url("Building.jpg");
  }
  .form {
     background-color: rgba(222,226,231,1);
      padding:20px; 
    }
  input, textarea, select { 
    background-color: rgba(162,197,206,1); 
  }
  .head {
     background-color: #0d6efd; 
     color: white; padding: 15px; 
     margin-bottom: 20px;
      text-align: center; 
      font-size: 1.5rem; 
      }
</style>
</head>
<body>
<div class="container-fluid">

<div id="personalForm">
  <div class="row vh-100">
    <div class="col-4 bg-primary text-white d-flex justify-content-center align-items-center">
      <h1>Fill the Form</h1>
    </div>
    <div class="col-8 d-flex justify-content-center align-items-center">
      <div class="form w-100">
        <div class="head">Personal Information</div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Name:</label></div>
          <div class="col-4"><input type="text" id="name" placeholder="Enter your name" class="form-control"></div>
        </div>
       <div class="row mb-3 align-items-center">
  <div class="col-4 text-end"><label>Email:</label></div>
  <div class="col-4">
    <div class="input-group">
      <span class="input-group-text"><i style="color:rgba(97, 97, 230, 1)" class="fa-solid fa-envelope"></i></span>
      <input type="email" id="email" class="form-control" placeholder="Enter your email">
    </div>
  </div>
</div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Address:</label></div>
          <div class="col-4">
             <div class="input-group">
              <span class="input-group-text"><i style="color:rgba(97, 97, 230, 1)" class="fa-solid fa-location-dot"></i></span>
            <input type="text" id="address" class="form-control" placeholder="Enter your address"></div>
        </div>
        </div>
        <div class="row mb-3">
              <div class="col-4 text-end"><label>Phone:</label></div>
          <div class="col-4">
              <div class="input-group">
              <span class="input-group-text"><i style="color:rgba(97, 97, 230, 1)" class="fa-solid fa-phone"></i></span>
            <input type="number" id="pho-numb" class="form-control" placeholder="Enter your phone number" min="11" max="11"></div>
        </div>
        </div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Contact Method:</label></div>
          <div class="col-4">
            <select id="contact-method" class="form-select">
              <option value="">Select One</option>
              <option value="email">Email</option>
              <option value="phone">Phone Call</option>
              <option value="sms">SMS</option>
              <option value="whatsapp">Whatsapp</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Reason:</label></div>
          <div class="col-4"><textarea id="resn" class="form-control" placeholder="Reason to contact"></textarea></div>
        </div>
        <div class="row">
          <div class="col text-end">
            <button id="nextbtn" class="bg-primary text-white px-4 py-2 border-0 rounded">Next</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="professionalinfo" style="display:none;">
  <div class="row vh-100">
    <div class="col-4 bg-primary text-white d-flex justify-content-center align-items-center">
      <h1>Fill the Form</h1>
    </div>
    <div class="col-8 d-flex justify-content-center align-items-center">
      <div class="form w-100">
        <div class="head">Professional Information</div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Previous School:</label></div>
          <div class="col-4"><input type="text" id="prevschool" class="form-control" placeholder="Name of previous school"></div>
        </div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Program:</label></div>
          <div class="col-4">
            <select id="program" class="form-select">
              <option value="">Select One</option>
              <option value="CS">Computer Science</option>
              <option value="IT">Information Technology</option>
              <option value="SE">Software Engineering</option>
              <option value="AI">Artificial Intelligence</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Status:</label></div>
          <div class="col-4">
            <select id="status" class="form-select">
              <option value="">Select One</option>
              <option value="Undergraduate">Undergraduate</option>
              <option value="Graduate">Graduate</option>
            </select>
          </div>
        </div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Skills:</label></div>
          <div class="col-4"><input type="text" id="skills" class="form-control" placeholder="write your skills"></div>
        </div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Experience:</label></div>
          <div class="col-4"><input type="number" id="experience" class="form-control" placeholder="Write experience in years"></div>
        </div>
        <div class="row mb-3">
          <div class="col-4 text-end">
            <label>LinkedIn:</label></div>
          <div class="col-4">
          <div class="input-group">
              <span class="input-group-text"><i style="color:rgba(97, 97, 230, 1)" class="fa-brands fa-linkedin" placeholder="Your LinkedIn profile link...."></i></span>  
          <input type="text" id="link" class="form-control"></div>
        </div>
        </div>
        <div class="row mb-3">
          <div class="col-4 text-end"><label>Interest:</label></div>
          <div class="col-4"><input type="text" id="interest" class="form-control" placeholder="write your interests"></div>
        </div>
         <div class="row mb-3 align-items-center">
                    <div class="col-4 text-end"><label>Resume:</label></div>
                    <div class="col-4"><input type="file" name="resume" class="form-control"></div>
                </div>

        <div class="row">
          <div class="col text-end">
            <button id="nextProfessional" class="bg-primary text-white px-4 py-2 border-0 rounded">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
document.getElementById("nextbtn").onclick = function() {
  const name = document.getElementById("name").value.trim();
  const email = document.getElementById("email").value.trim();
  const address = document.getElementById("address").value.trim();
  const pho = document.getElementById("pho-numb").value.trim();
  const method = document.getElementById("contact-method").value;
  const reason = document.getElementById("resn").value.trim();

  if(!name || !email || !address || !pho || !method || !reason){
    alert("Please fill all fields!");
    return;
  }

  fetch("", {
    method: "POST",
    headers: {"Content-Type": "application/x-www-form-urlencoded"},
    body: "form[name]=" + encodeURIComponent(name) +
          "&form[email]=" + encodeURIComponent(email) +
          "&form[address]=" + encodeURIComponent(address) +
          "&form[pho-numb]=" + encodeURIComponent(pho) +
          "&form[contact-method]=" + encodeURIComponent(method) +
          "&form[resn]=" + encodeURIComponent(reason)
  })
  .then(res => res.text())
  .then(data => {
    document.getElementById("personalForm").style.display = "none";
    document.getElementById("professionalinfo").style.display = "block";
  });
};

document.getElementById("nextProfessional").onclick = function() {
  const prev = document.getElementById("prevschool").value.trim();
  const prog = document.getElementById("program").value;
  const stat = document.getElementById("status").value;
  const skills = document.getElementById("skills").value.trim();
  const exp = document.getElementById("experience").value.trim();
  const link = document.getElementById("link").value.trim();
  const interest = document.getElementById("interest").value.trim();

  if(!prev || !prog || !stat || !skills || !exp || !link || !interest){
    alert("Please fill all fields!");
    return;
  }

  fetch("", {
    method: "POST",
    headers: {"Content-Type": "application/x-www-form-urlencoded"},
    body: "form[prevschool]=" + encodeURIComponent(prev) +
          "&form[program]=" + encodeURIComponent(prog) +
          "&form[status]=" + encodeURIComponent(stat) +
          "&form[skills]=" + encodeURIComponent(skills) +
          "&form[experience]=" + encodeURIComponent(exp) +
          "&form[link]=" + encodeURIComponent(link) +
          "&form[interest]=" + encodeURIComponent(interest)
  })
  .then(res => res.text())
  .then(data => {
    document.body.innerHTML = data; 
  });
};

</script>

</body>
</html>
