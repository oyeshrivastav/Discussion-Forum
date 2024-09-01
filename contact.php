<?php
session_start();
include 'partials/_dbconnect.php';

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DMRC Discussion Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="./css/contact.css">
</head>

<body>
    
    <?php 
    
    echo '<nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php" style="font-weight: 500;">
                <img src="https://images.jdmagicbox.com/comp/ghaziabad/v7/011pxx11.xx11.191122122233.m8v7/catalogue/delhi-metro-rail-corporation-ltd-mohan-nagar-ghaziabad-metro-railway-station-1jcoml2exa.jpg?clr="
                    width="35" height="30" class="d-inline-block align-top" alt="" loading="lazy"
                    style="mix-blend-mode:multiply;">
                &nbsp;Delhi Metro Rail Corporation
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Departments
                        </a>
                        <ul class="dropdown-menu">
                            <a class="dropdown-item" href="discussionlist.php?deptid=1" style="font-weight:450">IT
                                Department</a>
                            <a class="dropdown-item" href="discussionlist.php?deptid=2" style="font-weight:450">S&T
                                Department</a>
                            <a class="dropdown-item" href="discussionlist.php?deptid=3" style="font-weight:450">RS
                                Department</a>
                            <a class="dropdown-item" href="discussionlist.php?deptid=4" style="font-weight:450">E&M
                                Department</a>
                            <a class="dropdown-item" href="discussionlist.php?deptid=5" style="font-weight:450">ATP
                                Department</a>
                            <a class="dropdown-item" href="discussionlist.php?deptid=6" style="font-weight:450">DCOS
                                Department</a>
                            <a class="dropdown-item" href="discussionlist.php?deptid=7" style="font-weight:450">PWay
                                Department</a>
                            <a class="dropdown-item" href="discussionlist.php?deptid=8" style="font-weight:450">AFC
                                Department</a>

                            <!-- <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page"  href="contact.php">Contact</a>
                    </li>
                </ul>
                <div class=" row mx-2">';
  if(isset($_SESSION['loggedin'])&& $_SESSION['loggedin']==true)
    { 
      echo '<form class="d-flex">
      <p class="text-dark my-0 ml-2 mx-2 my-2" style="font-weight:600"> Welcome '.$_SESSION['username'].'</p>
      <a href="partials/_logout.php" class="btn btn-danger ml-2 mx-2">Logout</a>
      </form>';
      // echo "Welcome ".$_SESSION['username'];
  }

  echo '</div>
</nav>
';
?>

  <?php  include 'partials/_loginModal.php';
      include 'partials/_signupModal.php'; 
      if(isset($_GET['signupsuccess'])&&$_GET['signupsuccess']=="true")
      {
        echo '<div id="myAlert" class="alert alert-success alert-dismissible fade show my-0" role="alert" style="align-center;">
        <strong>Successfully Sign up!</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <script>
        setTimeout(function() {
            var alertElement = document.getElementById("myAlert");
            if (alertElement) {
                alertElement.style.display = "none";
            }

            var contentElement = document.getElementById("content");
            if (contentElement) {
                contentElement.style.marginTop = "35px";
            }

        }, 2000);
    </script>
      
      
      
      
      ';
      }
?>

    <!-- card     -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-4 my-4">
                <div class="response-bg">
                <div class="card" style="width: 18rem;">
                    <img src="./image/ankur.jpg" style="height: 210px;" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Ankur Kumar</h5>
                        <p class="card-text">I'm currently pursuing B.Tech From Krishna Engineering College 📅</p>
                        <p class="card-text">I did Diploma in Mechanical Engineering From Monard University</p>
                        <a href="#" class=" btn-green btn btn-success">Download Resume</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 my-4">
                <div class="response-bg">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x400/?coding,java" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Neha Verma</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn-green btn btn-success">Download Resume</a>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-4 my-4">
                <div class="response-bg">
                <div class="card" style="width: 18rem;">
                    <img src="https://source.unsplash.com/500x400/?coding,coding" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn-green btn btn-success">Download Resume</a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div> -->
    <div class="shadow p-3 mb-5 bg-body-tertiary rounded">
        <h3 class="mt-4" style="color: darkblue; font-weight: 600;">Metro Stations Contact Numbers</h3>
        <p>Updated List of Station Landline Telephone Numbers and Mobile Numbers</p>
    </div>


    <div class="accordion " id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"
                    style="color: #c0282c; font-weight: 600;">
                    Line-1 Red Line
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse " data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.no</th>
                                <th scope="col">Station Name</th>
                                <th scope="col">Station Landline No.</th>
                                <th scope="col">Station Mobile No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>New Bus Adda</td>
                                <td>7290018822</td>
                                <td>7303498348</td>
                            </tr>

                            <tr>
                                <th scope="row">2</th>
                                <td>Hindon River</td>
                                <td>7290018832</td>
                                <td>7303498347</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Arthala</td>
                                <td>7290019646</td>
                                <td>7303498346</td>
                            </tr>
                            <th scope="row">4</th>
                            <td> Mohan Nagar</td>
                            <td>7290018560</td>
                            <td>7303498345</td>
                            </tr>

                            <tr>
                                <th scope="row">5</th>
                                <td>Shyam Park </td>
                                <td>7290018557</td>
                                <td>7303498344</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Rajender Nagar</td>
                                <td>7290018413</td>
                                <td>7303498343</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Raj Bagh</td>
                                <td>7290018457</td>
                                <td>7303498342</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Shahid Nagar</td>
                                <td>7290019023</td>
                                <td>7303498341</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Dilshad Garden</td>
                                <td>7290049191</td>
                                <td>8800793100</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Jhilmil</td>
                                <td>7290049044</td>
                                <td>8800793101</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Mansarovar Park</td>
                                <td>7290048677</td>
                                <td>8800793102</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Shahadra</td>
                                <td>7290048466</td>
                                <td>8800793103</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Welcome</td>
                                <td>7290048366</td>
                                <td>8800793104</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Seelampur</td>
                                <td>7290048299</td>
                                <td>8800793105</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Shastri Park</td>
                                <td>7290048282</td>
                                <td>8800793106</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Kashmere Gate (Rail Corridor)</td>
                                <td>7290093566</td>
                                <td>8800793107</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Tis Hazari</td>
                                <td>7290048155</td>
                                <td>8800793108</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Pul Bangash</td>
                                <td>7290048122</td>
                                <td>8800793109</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Pratap Nagar</td>
                                <td>7290048118</td>
                                <td>8800793110</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Shastri Nagar</td>
                                <td>7290048055</td>
                                <td>8800793111</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Inderlok</td>
                                <td>7290048022</td>
                                <td>8800793112</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>Kanahiya Nagar</td>
                                <td>7290048011</td>
                                <td>8800793113</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Keshav Puram</td>
                                <td>7290047997</td>
                                <td>8800793114</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Netaji Subhash Place</td>
                                <td>7290047966</td>
                                <td>8800793115</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Kohat Enclave</td>
                                <td>7290047899</td>
                                <td>8800793116</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Pitam Pura</td>
                                <td>7290047647</td>
                                <td>8800793117</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Rohini East</td>
                                <td>7290047399</td>
                                <td>8800793118</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Rohini West</td>
                                <td>7290047355</td>
                                <td>8800793119</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Rithala</td>
                                <td>7290046922</td>
                                <td>8800793120</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"
                    style="color: #f6d71a; font-weight: 600;">
                    Line-2 Yellow Line
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.No.</th>
                                <th scope="col">Station Name</th>
                                <th scope="col">Station Landline No.</th>
                                <th scope="col">Station Mobile No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Samaypur Badli</td>
                                <td>7290020884</td>
                                <td>7042744337</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Rohini Sector-18, 19</td>
                                <td>7290020885</td>
                                <td>7042744336</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Haiderpur-Badli Mor</td>
                                <td>7290013837</td>
                                <td>7042744335</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Jahangirpuri</td>
                                <td>7290052042</td>
                                <td>8800793121</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Adarsh Nagar</td>
                                <td>7290052062</td>
                                <td>8800793122</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Azadpur</td>
                                <td>7290052072</td>
                                <td>8800793123</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Model Town</td>
                                <td>7290052082</td>
                                <td>8800793124</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>G.T.B Nagar</td>
                                <td>7290052092</td>
                                <td>8800793125</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Vishwavidhyalaya</td>
                                <td>7290025172</td>
                                <td>8800793126</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Vidhan sabha</td>
                                <td>7290053013</td>
                                <td>8800793127</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Civil Line</td>
                                <td>7290053023</td>
                                <td>8800793128</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Kashmere Gate (Metro Corridor)</td>
                                <td>7290093566</td>
                                <td>8800793129</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>Chandni Chowk</td>
                                <td>7290031190</td>
                                <td>8800793130</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Chawri Bazar</td>
                                <td>7290025110</td>
                                <td>8800793131</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>New Delhi</td>
                                <td>1123232352</td>
                                <td>8800793132</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Rajeev Chowk</td>
                                <td>1123415849</td>
                                <td>8800793133</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Patel Chowk</td>
                                <td>7290024753</td>
                                <td>8800793134</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Central Secretariat</td>
                                <td>1123388560</td>
                                <td>8800793135</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Udyog Bhawan</td>
                                <td>7290024754</td>
                                <td>8800793136</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Lok Kalyan Marg</td>
                                <td>7290024756</td>
                                <td>8800793137</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Jor Bagh</td>
                                <td>7290024758</td>
                                <td>8800793138</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>INA</td>
                                <td>7290021468</td>
                                <td>8800793139</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>AIIMS</td>
                                <td>7290024757</td>
                                <td>8800793140</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Green Park</td>
                                <td>7290021469</td>
                                <td>8800793141</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Hauz Khas</td>
                                <td>7290021442</td>
                                <td>8800793142</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Malviya Nagar</td>
                                <td>7290021404</td>
                                <td>8800793143</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Saket</td>
                                <td>7290021129</td>
                                <td>8800793144</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Qutab Minar</td>
                                <td>7290048018</td>
                                <td>8800793145</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Chattarpur</td>
                                <td>7290048028</td>
                                <td>8800793146</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Sultanpur</td>
                                <td>7290048058</td>
                                <td>8800793147</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Ghitorni</td>
                                <td>7290049019</td>
                                <td>8800793148</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Arjangarh</td>
                                <td>7290049029</td>
                                <td>8800793149</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Guru Dronacharya</td>
                                <td>7290053043</td>
                                <td>8800793150</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Sikanderpur</td>
                                <td>7290053093</td>
                                <td>8800793151</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>M.G.Road</td>
                                <td>7290054024</td>
                                <td>8800793152</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>IFFCO Chowk</td>
                                <td>7290054034</td>
                                <td>8800793153</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Huda City Centre</td>
                                <td>7290054074</td>
                                <td>8800793154</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"
                    style="color: #3b76c0; font-weight: 600;">
                    Line-3 Blue Line
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Station Name</th>
                                <th scope="col">Station Landline No.</th>
                                <th scope="col">Station Mobile No.</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Noida Electronic City</td>
                                <td>7290020682</td>
                                <td>7303294915</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sector-62 Noida</td>
                                <td>7290020681</td>
                                <td>7303294914</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sector-59 Noida</td>
                                <td>7290020680</td>
                                <td>7303294913</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Sector-61 Noida</td>
                                <td>7290020673</td>
                                <td>7303294912</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Sector-52 Noida</td>
                                <td>7290020672</td>
                                <td>7303294911</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Sector-34 Noida</td>
                                <td>7290020671</td>
                                <td>7303294910</td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Noida City Centre</td>
                                <td>7290047037</td>
                                <td>8800793155</td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Golf Course</td>
                                <td>7290047027</td>
                                <td>8800793156</td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Botanical Garden</td>
                                <td>7290046096</td>
                                <td>8800793157</td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Noida Sect-18</td>
                                <td>7290046076</td>
                                <td>8800793158</td>
                            </tr>
                            <tr>
                                <td>11</td>
                                <td>Noida Sect-16</td>
                                <td>7290046056</td>
                                <td>8800793159</td>
                            </tr>
                            <tr>
                                <td>12</td>
                                <td>Noida Sect-15</td>
                                <td>7290046036</td>
                                <td>8800793160</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>New Ashok Nagar</td>
                                <td>7290021505</td>
                                <td>8800793161</td>
                            </tr>
                            <tr>
                                <td>14</td>
                                <td>Mayur Vihar Extn</td>
                                <td>7290024759</td>
                                <td>8800793162</td>
                            </tr>
                            <tr>
                                <td>15</td>
                                <td>Mayur Vihar-I</td>
                                <td>7290021504</td>
                                <td>8800793163</td>
                            </tr>
                            <tr>
                                <td>16</td>
                                <td>Akshardham</td>
                                <td>7290021209</td>
                                <td>8800793164</td>
                            </tr>
                            <tr>
                                <td>17</td>
                                <td>Yamuna bank</td>
                                <td>7290049449</td>
                                <td>8800793165</td>
                            </tr>
                            <tr>
                                <td>18</td>
                                <td>Inderprastha</td>
                                <td>7290051288</td>
                                <td>8800793166</td>
                            </tr>
                            <tr>
                                <td>19</td>
                                <td>Pragati Maidan</td>
                                <td>7290051322</td>
                                <td>8800793167</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Mandi House</td>
                                <td>7290069421</td>
                                <td>8800793168</td>
                            </tr>
                            <tr>
                                <td>21</td>
                                <td>Barakhambha</td>
                                <td>7290051510</td>
                                <td>8800793169</td>
                            </tr>
                            <tr>
                                <td>22</td>
                                <td>R.K.Ashram Marg</td>
                                <td>7290051677</td>
                                <td>8800793170</td>
                            </tr>
                            <tr>
                                <td>23</td>
                                <td>Jhandewalan</td>
                                <td>7290051688</td>
                                <td>8800793171</td>
                            </tr>
                            <tr>
                                <td>24</td>
                                <td>Karol Bagh</td>
                                <td>7290051711</td>
                                <td>8800793172</td>
                            </tr>
                            <tr>
                                <td>25</td>
                                <td>Rajendra Place</td>
                                <td>7290051733</td>
                                <td>8800793173</td>
                            </tr>
                            <tr>
                                <td>26</td>
                                <td>Patel Nagar</td>
                                <td>7290051744</td>
                                <td>8800793174</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>Shadipur</td>
                                <td>7290052033</td>
                                <td>8800793175</td>
                            </tr>
                            <tr>
                                <td>28</td>
                                <td>Kirti Nagar</td>
                                <td>7290052077</td>
                                <td>8800793176</td>
                            </tr>
                            <tr>
                                <td>29</td>
                                <td>Moti Nagar</td>
                                <td>7290052099</td>
                                <td>8800793177</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Ramesh Nagar</td>
                                <td>7290052352</td>
                                <td>8800793178</td>
                            </tr>
                            <tr>
                                <td>31</td>
                                <td>Rajouri Garden</td>
                                <td>7290052355</td>
                                <td>8800793179</td>
                            </tr>
                            <tr>
                                <td>32</td>
                                <td>Tagore Garden</td>
                                <td>7290052388</td>
                                <td>8800793180</td>
                            </tr>
                            <tr>
                                <td>33</td>
                                <td>Subhash Nagar</td>
                                <td>7290052442</td>
                                <td>8800793181</td>
                            </tr>
                            <tr>
                                <td>34</td>
                                <td>Tilak Nagar</td>
                                <td>7290052452</td>
                                <td>8800793182</td>
                            </tr>
                            <tr>
                                <td>35</td>
                                <td>Janak Puri East</td>
                                <td>7290052455</td>
                                <td>8800793183</td>
                            </tr>
                            <tr>
                                <td>36</td>
                                <td>Janak Puri West</td>
                                <td>7290036046</td>
                                <td>8800793184</td>
                            </tr>
                            <tr>
                                <td>37</td>
                                <td>Uttam Nagar East</td>
                                <td>7290036056</td>
                                <td>8800793185</td>
                            </tr>
                            <tr>
                                <td>38</td>
                                <td>Uttam Nagar West</td>
                                <td>7290036076</td>
                                <td>8800793186</td>
                            </tr>
                            <tr>
                                <td>39</td>
                                <td>Nawada</td>
                                <td>7290038078</td>
                                <td>8800793187</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Dwarka Mor</td>
                                <td>7290038098</td>
                                <td>8800793188</td>
                            </tr>
                            <tr>
                                <td>41</td>
                                <td>Dwarka</td>
                                <td>7290039079</td>
                                <td>8800793189</td>
                            </tr>
                            <tr>
                                <td>42</td>
                                <td>Dwarka Sect-14</td>
                                <td>7290042062</td>
                                <td>8800793190</td>
                            </tr>
                            <tr>
                                <td>43</td>
                                <td>Dwarka Sec-13</td>
                                <td>7290042082</td>
                                <td>8800793191</td>
                            </tr>
                            <tr>
                                <td>44</td>
                                <td>Dwarka Sec-12</td>
                                <td>7290043013</td>
                                <td>8800793192</td>
                            </tr>
                            <tr>
                                <td>45</td>
                                <td>Dwarka Sec-11</td>
                                <td>7290045015</td>
                                <td>8800793193</td>
                            </tr>
                            <tr>
                                <td>46</td>
                                <td>Dwarka Sec-10</td>
                                <td>7290045035</td>
                                <td>8800793194</td>
                            </tr>
                            <tr>
                                <td>47</td>
                                <td>Dwarka Sec-9</td>
                                <td>7290045065</td>
                                <td>8800793195</td>
                            </tr>
                            <tr>
                                <td>48</td>
                                <td>Dwarka Sector-8</td>
                                <td>7290045085</td>
                                <td>8800793196</td>
                            </tr>
                            <tr>
                                <td>49</td>
                                <td>Dwarka Sector-21</td>
                                <td>7290045095</td>
                                <td>8800793197</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"
                        style="color:#54ab55; font-weight: 600;">
                        Line-4 Green Line
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Station Name</th>
                                    <th scope="col">Station Landline No.</th>
                                    <th scope="col">Station Mobile No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Inderlok</td>
                                    <td>7290048022</td>
                                    <td>8800793112</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kirti Nagar</td>
                                    <td>7290052077</td>
                                    <td>8800793176</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sat Guru Ram Singh Marg</td>
                                    <td>7290046955</td>
                                    <td>8800793234</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Ashok Park Main</td>
                                    <td>7290046988</td>
                                    <td>8800793204</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Punjabi Bagh</td>
                                    <td>7290047122</td>
                                    <td>8800793205</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Shivaji Park</td>
                                    <td>7290047155</td>
                                    <td>8800793206</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Madipur</td>
                                    <td>7290047211</td>
                                    <td>8800793207</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Pachim Vihar (East)</td>
                                    <td>7290047244</td>
                                    <td>8800793208</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Pachim Vihar (West )</td>
                                    <td>7290047299</td>
                                    <td>8800793209</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Peeragarhi</td>
                                    <td>7290025276</td>
                                    <td>8800793210</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Udyog Nagar</td>
                                    <td>7290027379</td>
                                    <td>8800793211</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Maharaja Surajmal Stadium</td>
                                    <td>7290021056</td>
                                    <td>8800793212</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Nangloi</td>
                                    <td>7290027678</td>
                                    <td>8800793213</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Nangloi Railway Station</td>
                                    <td>7290027679</td>
                                    <td>8800793214</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Rajdhani Park</td>
                                    <td>7290024752</td>
                                    <td>8800793215</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Mundka</td>
                                    <td>7290022095</td>
                                    <td>8800793216</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Mundka Industrial Area</td>
                                    <td>7290051031</td>
                                    <td>8448788983</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Ghevra</td>
                                    <td>7290051061</td>
                                    <td>8448788984</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Tikri Kalan</td>
                                    <td>7290051071</td>
                                    <td>8448788985</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Tikri Border</td>
                                    <td>7290051081</td>
                                    <td>8448788986</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Pandit Shree Ram Sharma</td>
                                    <td>7290051091</td>
                                    <td>8448788987</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Bahadurgarh City</td>
                                    <td>7290052022</td>
                                    <td>8448788988</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Brig. Hoshiyar Singh</td>
                                    <td>7290052032</td>
                                    <td>8448788989</td>
                                </tr>
                        </table>
                        </tbody>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"
                        style="color: #ed91c9; font-weight: 600;">
                        Line-5 Pink Line
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Station Name</th>
                                    <th scope="col">Station Landline No.</th>
                                    <th scope="col">Station Mobile No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Majlis Park</td>
                                    <td>7290013281</td>
                                    <td>8448088756</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Azadpur (Line-7)</td>
                                    <td>7290012493</td>
                                    <td>8448088757</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Shalimar Bagh</td>
                                    <td>7290012494</td>
                                    <td>8448088758</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Netaji Subhash Place</td>
                                    <td>7290013543</td>
                                    <td>8448088759</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Shakurpur</td>
                                    <td>7290012259</td>
                                    <td>8448088760</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Punjabi Bagh (W)</td>
                                    <td>7290020993</td>
                                    <td>8448088761</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>ESI Hospital</td>
                                    <td>7290013407</td>
                                    <td>8448088762</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Rajouri Garden</td>
                                    <td>7290013649</td>
                                    <td>8448088763</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Mayapuri</td>
                                    <td>7290012979</td>
                                    <td>8448088764</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Naraina Vihar</td>
                                    <td>7290013925</td>
                                    <td>8448088765</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Delhi Cantt.</td>
                                    <td>7290013508</td>
                                    <td>8448088766</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Durgabai Deshmukh South Campus</td>
                                    <td>7290013409</td>
                                    <td>8448088767</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Sir Vishweshwaraiah Moti bagh</td>
                                    <td>7290091652</td>
                                    <td>9667396684</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Bhikaji Cama Place</td>
                                    <td>7290069412</td>
                                    <td>9667396685</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Sarojini Nagar</td>
                                    <td>7290069413</td>
                                    <td>9667396686</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Delhi Hatt-INA</td>
                                    <td>7290069414</td>
                                    <td>9667396688</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>South Extension</td>
                                    <td>7290069415</td>
                                    <td>9667396689</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Lajpat Nagar</td>
                                    <td>7290069416</td>
                                    <td>8448487760</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Vinoba Puri</td>
                                    <td>7290019195</td>
                                    <td>8448487765</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Ashram</td>
                                    <td>7290019295</td>
                                    <td>8448498296</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Hazrat Nizamuddin</td>
                                    <td>7290019342</td>
                                    <td>8448487769</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Mayur Vihar I</td>
                                    <td>7290019348</td>
                                    <td>7303498349</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Mayur Vihar Pocket-I</td>
                                    <td>7290020698</td>
                                    <td>8448498295</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Trilokpuri</td>
                                    <td>7290069425</td>
                                    <td>8448282930</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>East Vinod Nagar-Mayur Vihar-II</td>
                                    <td>7290069426</td>
                                    <td>8448282931</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Mandawali - West Vinod Nagar</td>
                                    <td>7290069427</td>
                                    <td>8448282932</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>I.P. Extension</td>
                                    <td>7290011274</td>
                                    <td>8448282933</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Anand Vihar ISBT</td>
                                    <td>7290012939</td>
                                    <td>8448282934</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Karkardooma</td>
                                    <td>7290012957</td>
                                    <td>8448282935</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Karkardooma court</td>
                                    <td>7290013853</td>
                                    <td>8448282936</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Krishna Nagar</td>
                                    <td>7290014434</td>
                                    <td>8448282937</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>East Azad Nagar</td>
                                    <td>7290014436</td>
                                    <td>8448282938</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Welcome (Line-7)</td>
                                    <td>7290014785</td>
                                    <td>8448282939</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Jaffrabad</td>
                                    <td>7290014910</td>
                                    <td>8448282940</td>
                                </tr>
                                <tr>
                                    <td>35</td>
                                    <td>Maujpur</td>
                                    <td>7290015488</td>
                                    <td>8448282941</td>
                                </tr>
                                <tr>
                                    <td>36</td>
                                    <td>Gokulpuri</td>
                                    <td>7290015758</td>
                                    <td>8448282942</td>
                                </tr>
                                <tr>
                                    <td>37</td>
                                    <td>Johri Enclave</td>
                                    <td>7290015954</td>
                                    <td>8448282943</td>
                                </tr>
                                <tr>
                                    <td>38</td>
                                    <td>Shiv Vihar</td>
                                    <td>7290016339</td>
                                    <td>8448282944</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"
                        style="color: #8115ff; font-weight: 600;">
                        Line-6 Violet Line
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse"
                    data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">S.No</th>
                                    <th scope="col">Station Name</th>
                                    <th scope="col">Station Landline No.</th>
                                    <th scope="col">Station Mobile No.</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kashmere Gate (Line-6)</td>
                                    <td>7290054657</td>
                                    <td>9205682373</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Lal Quila</td>
                                    <td>7290037871</td>
                                    <td>9205682372</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jama Masjid</td>
                                    <td>7290090325</td>
                                    <td>9205682371</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Delhi Gate</td>
                                    <td>766901 8557</td>
                                    <td>9205682370</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>ITO</td>
                                    <td>7290091461</td>
                                    <td>9910977599</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Janpath</td>
                                    <td>1123320335</td>
                                    <td>8130862199</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Mandi House</td>
                                    <td>7290069421</td>
                                    <td>8800793168</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Central secretariat (Line-6)</td>
                                    <td>7290036086</td>
                                    <td>8800793217</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Khan Market</td>
                                    <td>7290036096</td>
                                    <td>8800793218</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>J.L.N. Stadium</td>
                                    <td>7290054084</td>
                                    <td>8800793219</td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Jangpura</td>
                                    <td>7290054094</td>
                                    <td>8800793220</td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Lajpat Nagar</td>
                                    <td>7290055015</td>
                                    <td>8800793221</td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Moolchand</td>
                                    <td>7290055025</td>
                                    <td>8800793222</td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Kailash Colony</td>
                                    <td>7290055035</td>
                                    <td>8800793223</td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Nehru Place</td>
                                    <td>7290055045</td>
                                    <td>8800793224</td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Kalkaji Mandir</td>
                                    <td>7290057047</td>
                                    <td>8800793225</td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Govind Puri</td>
                                    <td>7290057067</td>
                                    <td>8800793226</td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Harkesh Nagar Okhla</td>
                                    <td>7290057077</td>
                                    <td>8800793227</td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Jasola Apollo</td>
                                    <td>7290058048</td>
                                    <td>8800793228</td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Sarita Vihar</td>
                                    <td>7290058068</td>
                                    <td>8800793229</td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Mohan Estate</td>
                                    <td>7290058078</td>
                                    <td>8800793230</td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Tughlkabad</td>
                                    <td>7290058088</td>
                                    <td>8800793231</td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Badarpur Border</td>
                                    <td>7290058098</td>
                                    <td>8800793232</td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Sarai</td>
                                    <td>7290059019</td>
                                    <td>7042398154</td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>NHPC Chowk</td>
                                    <td>7290059029</td>
                                    <td>7042398155</td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Mewala Maharajapur</td>
                                    <td>7290082723</td>
                                    <td>7042398156</td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Sector-28</td>
                                    <td>7290082724</td>
                                    <td>7042398157</td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Badkal Mor</td>
                                    <td>7290082726</td>
                                    <td>7042398158</td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Old Faridabad</td>
                                    <td>7290085071</td>
                                    <td>7042398159</td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Neelam Chowk Ajronda</td>
                                    <td>7290082725</td>
                                    <td>7042398160</td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Bata Chowk</td>
                                    <td>7290084929</td>
                                    <td>7042398161</td>
                                </tr>
                                <tr>
                                    <td>32</td>
                                    <td>Escorts Mujesar</td>
                                    <td>7290084930</td>
                                    <td>7042398162</td>
                                </tr>
                                <tr>
                                    <td>33</td>
                                    <td>Sant Surdas</td>
                                    <td>7290019627</td>
                                    <td>8448487767</td>
                                </tr>
                                <tr>
                                    <td>34</td>
                                    <td>Raja Nahar Singh</td>
                                    <td>7290019628</td>
                                    <td>8448487768</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- about me -->


    <?php include 'partials/_footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>






<!-- 
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {box-sizing: border-box;}

.img-comp-container {
  position: relative;
  height: 200px; /*should be the same height as the images*/
}

.img-comp-img {
  position: absolute;
  width: auto;
  height: auto;
  overflow:hidden;
}

.img-comp-img img {
  display:block;
  vertical-align:middle;
}

.img-comp-slider {
  position: absolute;
  z-index:9;
  cursor: ew-resize;
  /*set the appearance of the slider:*/
  width: 40px;
  height: 40px;
  background-color: #2196F3;
  opacity: 0.7;
  border-radius: 50%;
}
</style>
<script>
function initComparisons() {
  var x, i;
  /*find all elements with an "overlay" class:*/
  x = document.getElementsByClassName("img-comp-overlay");
  for (i = 0; i < x.length; i++) {
    /*once for each "overlay" element:
    pass the "overlay" element as a parameter when executing the compareImages function:*/
    compareImages(x[i]);
  }
  function compareImages(img) {
    var slider, img, clicked = 0, w, h;
    /*get the width and height of the img element*/
    w = img.offsetWidth;
    h = img.offsetHeight;
    /*set the width of the img element to 50%:*/
    img.style.width = (w / 2) + "px";
    /*create slider:*/
    slider = document.createElement("DIV");
    slider.setAttribute("class", "img-comp-slider");
    /*insert slider*/
    img.parentElement.insertBefore(slider, img);
    /*position the slider in the middle:*/
    slider.style.top = (h / 2) - (slider.offsetHeight / 2) + "px";
    slider.style.left = (w / 2) - (slider.offsetWidth / 2) + "px";
    /*execute a function when the mouse button is pressed:*/
    slider.addEventListener("mousedown", slideReady);
    /*and another function when the mouse button is released:*/
    window.addEventListener("mouseup", slideFinish);
    /*or touched (for touch screens:*/
    slider.addEventListener("touchstart", slideReady);
    /*and released (for touch screens:*/
    window.addEventListener("touchend", slideFinish);
    function slideReady(e) {
      /*prevent any other actions that may occur when moving over the image:*/
      e.preventDefault();
      /*the slider is now clicked and ready to move:*/
      clicked = 1;
      /*execute a function when the slider is moved:*/
      window.addEventListener("mousemove", slideMove);
      window.addEventListener("touchmove", slideMove);
    }
    function slideFinish() {
      /*the slider is no longer clicked:*/
      clicked = 0;
    }
    function slideMove(e) {
      var pos;
      /*if the slider is no longer clicked, exit this function:*/
      if (clicked == 0) return false;
      /*get the cursor's x position:*/
      pos = getCursorPos(e)
      /*prevent the slider from being positioned outside the image:*/
      if (pos < 0) pos = 0;
      if (pos > w) pos = w;
      /*execute a function that will resize the overlay image according to the cursor:*/
      slide(pos);
    }
    function getCursorPos(e) {
      var a, x = 0;
      e = (e.changedTouches) ? e.changedTouches[0] : e;
      /*get the x positions of the image:*/
      a = img.getBoundingClientRect();
      /*calculate the cursor's x coordinate, relative to the image:*/
      x = e.pageX - a.left;
      /*consider any page scrolling:*/
      x = x - window.pageXOffset;
      return x;
    }
    function slide(x) {
      /*resize the image:*/
      img.style.width = x + "px";
      /*position the slider:*/
      slider.style.left = img.offsetWidth - (slider.offsetWidth / 2) + "px";
    }
  }
}
</script>
</head>
<body>

<h1>Compare Two Images</h1>

<p>Click and slide the blue slider to compare two images:</p>

<div class="img-comp-container">
  <div class="img-comp-img">
    <img src="img_snow.jpg" width="300" height="200">
  </div>
  <div class="img-comp-img img-comp-overlay">
    <img src="img_forest.jpg" width="300" height="200">
  </div>
</div>

<script>
/*Execute a function that will execute an image compare function for each element with the img-comp-overlay class:*/
initComparisons();
</script>

</body>
</html> -->