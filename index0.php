<<<<<<< HEAD
<?php
session_start();  
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
          
    <link rel="stylesheet" href="styles/style3.css">
    <style>
                      /* General styling for the upload container */
.upload-container {
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 600px;
    margin: 40px auto;
    font-family: 'Arial', sans-serif;
}

/* Heading styling */
.upload-container h2 {
    text-align: center;
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Label styling */
.upload-container label {
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
    display: block;
}

/* Styling for all select and input elements */
.upload-container select,
.upload-container input[type="file"],
.upload-container button {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 6px;
    background-color: #fff;
    transition: border-color 0.3s ease;
}

.upload-container select:focus,
.upload-container input[type="file"]:focus,
.upload-container button:focus {
    border-color: #007bff;
    outline: none;
}

/* Styling for the file input */
.upload-container input[type="file"] {
    padding: 10px;
    border: 1px solid #ddd;
    background-color: #f5f5f5;
}

/* Styling for the upload button */
.upload-container button {
    background-color: #007bff;
    color: white;
    cursor: pointer;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease;
}

/* Hover effect for the upload button */
.upload-container button:hover {
    background-color: #0056b3;
}

/* Message displayed after uploading */
#uploadMessage {
    text-align: center;
    color: #4caf50;  /* Green color for success message */
    font-size: 16px;
    font-weight: bold;
    margin-top: 20px;
}

/* Responsive design for smaller screens */
@media (max-width: 600px) {
    .upload-container {
        padding: 15px;
        width: 90%;
    }

    .upload-container h2 {
        font-size: 20px;
    }

    .upload-container label {
        font-size: 14px;
    }

    .upload-container select,
    .upload-container input[type="file"],
    .upload-container button {
        font-size: 14px;
    }
}

    </style>
</head>
<body>
  <nav id="b1">
		<div id="b11"> 
	  <span> <a href="index0.php" class="adpt" style="font-size: 30px;">A D P
       <img src="pic/adp.png" class="adp"></h1></span>
    </a>
	   </div>
		<div id="b12">
			   <div><h1>
         <?php
    echo $_SESSION['uid'];
?></h1>
         </div>
			   <div id="b121" class="myDIV"><a href="details.php"><img src="pic/profile1.jpg" class="prof"></a></div>
              
	   </div>
</nav>
   
   <div id="b4">
   <div>
   <a href="s_material.php?category=Study Materials" class="btn1">Study Materials</a>
   </div>

   <div>
       <a href="lectures.php?category=Lectures" class="btn1">Lectures</a>
       </div>
       <div>
        <a href="internship.php" class="btn1">Internship</a>
        </div>
        <div>
            <a href="scholor.php" class="btn1">Scholarship</a>
            </div>
            <div>
                <a href="successstory.php" class="btn1">Success Story</a>
                </div>
   </div>
   
<div id="b3">
<div id="b31">
<img src="pic/educator.jpg" alt="rjt photo is issing">
<!-- <img src="/gate.jpg" alt=""> -->
</div>
<div id="b32">
  <div id="b3a">
  <br><br><br>
 <center>
<a href="exploregate.php"style="text-decoration:none;color:black;" class="btn2">
<h2>Explore for GATE</h2></a></center>
  <br><center><button class="imgbtn"><img src="pic/gate.jpg" class="img1"></button></center></form>
  </div>
  <div id="b3b">
  <center>
    <a href="ielts.php"style="text-decoration:none;color:black;" class="btn2">
  <h2>Explore for IELTS</h2></a></center>
 <br><center><button class="imgbtn"><img src="pic/ielts.jpeg" class="img1"</button></form></center>
  </div>
</div>
</div>
<br><br>
<div style="background-color:whitesmoke">
<br>
<?php
if($_SESSION['b']=="computer science and engineering")
{
  echo "<a href='https://www.mygreatlearning.com/blog/latest-technologies-in-computer-science/' style='text-decoration:none;color:black'><h1><center>Computer Science And Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://about.meta.com/metaverse/' style='text-decoration:none;color:black'>Metaverse<br>Technology</a></h2>
            <br>
            <img src='pic/meta.jpeg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://bitcoin.org/en/' style='text-decoration:none;color:black'>Bitcoin<br>Technology</a></h2><br>
        <img src='pic/bitcoin.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://scienceexchange.caltech.edu/topics/quantum-science-explained/quantum-computing-computers' style='text-decoration:none;color:black'>Quantum Computing<br>Technology</a> </h2><br>
        <img src='pic/quantum_comp.png' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
 ";
}
elseif($_SESSION['b']== "Electronics and Communication Engineering")
{
  
  echo "<a href='https://www.ncl.ac.uk/maths-physics/research/physics/emerging-technology-materials/electronic/' style='text-decoration:none;color:black'><h1><center>Electronics and Communication Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.sciencedirect.com/topics/materials-science/nanoelectronics' style='text-decoration:none;color:black'>Nano Electronics
            <br>Technology</a></h2>
            <br>
            <img src='pic/nanotech.jpg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.nsf.gov/pubs/2018/nsf18557/nsf18557.htm' style='text-decoration:none;color:black'>smart and autonomous systems<br>Technology</a></h2><br>
        <img src='pic/autonomous.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://builtin.com/robotics' style='text-decoration:none;color:black'>Robotics
        <br>Technology</a> </h2><br>
        <img src='pic/robo.png' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";

}
elseif($_SESSION['b']== "Electrical & Electronics Engineering")
{
  echo "<a href='https://bgibhopal.com/blog/emerging-technologies-in-electrical-engineering/' style='text-decoration:none;color:black'><h1><center>Electrical & Electronics Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.igi-global.com/book/emerging-nanotechnology-applications-electrical-engineering/271357#:~:text=Nanotechnology%20aims%20to%20develop%20new,to%20the%20electrical%20engineering%20field.' style='text-decoration:none;color:black'>Nano applications
            <br>Technology</a></h2>
            <br>
            <img src='pic/naneee.jpg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://afdc.energy.gov/fuels/electricity_infrastructure.html' style='text-decoration:none;color:black'>Electrical Vehicles<br>Technology</a></h2><br>
        <img src='pic/ev.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://iimtu.edu.in/blog/the-future-of-electrical-engineering-with-ai-ml/' style='text-decoration:none;color:black'>Artificial Intelligence
        <br>Technology</a> </h2><br>
        <img src='pic/aieee.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";
}
elseif($_SESSION['b']== "Civil Engineering")
{
  echo "<a href='https://bgibhopal.com/blog/discover-the-top-7-emerging-trends-in-civil-engineering/' style='text-decoration:none;color:black'><h1><center>Civil Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://omdayal.com/blog/photovoltaic-glaze-and-sustainability-in-engineering/' style='text-decoration:none;color:black'>Photovoltaic glazing
            <br>Technology</a></h2>
            <br>
            <img src='pic/photovoltaic.jpg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.twi-global.com/technical-knowledge/faqs/what-is-3d-printing#:~:text=3D%20printing%20is%20an%20additive,printing%20creates%20less%20material%20wastage.' style='text-decoration:none;color:black'>3D Printing<br>Technology</a></h2><br>
        <img src='pic/3d.png' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://www.engineeringcivil.com/what-are-kinetic-roads.html' style='text-decoration:none;color:black'>Kinetic roads
        <br>Technology</a> </h2><br>
        <img src='pic/kineticroads.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";
}
elseif($_SESSION['b']== "Metallurgical Engineering")
{
  echo "<a href='https://www.linkedin.com/pulse/future-metallurgy-innovations-trends-sabhavath-jaipal#:~:text=One%20of%20the%20most%20significant,to%20optimize%20the%20manufacturing%20process.' style='text-decoration:none;color:black'><h1><center>Metallurgical Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://smartscrap.net/smartmetallurgy' style='text-decoration:none;color:black'>Smart Mettallurgy 
            <br>Technology</a></h2>
            <br>
            <img src='pic/smartmettalurgy.png' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.sciencedirect.com/science/article/abs/pii/S1526612520304503' style='text-decoration:none;color:black'>Additive<br>Metallurgy</a></h2><br>
        <img src='pic/additivematal.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://en.wikipedia.org/wiki/Space_manufacturing' style='text-decoration:none;color:black'>Space
        <br>Metallurgy</a> </h2><br>
        <img src='pic/spacemetal.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";
}
elseif($_SESSION['b']=="Informatoinal Technology")
{
  echo "<a href='https://www.simplilearn.com/top-technology-trends-and-jobs-article' style='text-decoration:none;color:black'><h1><center>Informatoinal Technology</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.techtarget.com/searchdatacenter/definition/edge-computing' style='text-decoration:none;color:black'>Edge<br>Computing</a></h2>
            <br>
            <img src='pic/edgecomputing.jpeg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://en.wikipedia.org/wiki/3D_printing' style='text-decoration:none;color:black'>3D <br>Printing</a></h2><br>
        <img src='pic/3dprinting.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://en.wikipedia.org/wiki/Datafication' style='text-decoration:none;color:black'>Datafication<br></a> </h2><br>
        <img src='pic/datafication.png' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
 ";
}
elseif($_SESSION['b']=="Artificial Intelligence and Machine Learning")
{
  echo "<a href='https://www.simplilearn.com/artificial-intelligence-ai-and-machine-learning-trends-article#:~:text=Multimodal%20AI&text=A%20few%20benefits%20responsible%20for,the%20growth%20of%20multimodal%20AI.' style='text-decoration:none;color:black'><h1><center>Artificial Intelligence and Machine Learning</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.simplilearn.com/tutorials/artificial-intelligence-tutorial/what-is-generative-ai' style='text-decoration:none;color:black'>Generative AI</a></h2>
            <br>
            <img src='pic/generativeai.jpeg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://cloud.google.com/use-cases/multimodal-ai' style='text-decoration:none;color:black'>Multimodal AI</a></h2><br>
        <img src='pic/multimodalai.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://aws.amazon.com/what-is/deep-learning/#:~:text=Deep%20learning%20is%20a%20method,inspired%20by%20the%20human%20brain.' style='text-decoration:none;color:black'>Deep Learning<br></a> </h2><br>
        <img src='pic/deeplearning.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
 ";
}

elseif($_SESSION['b']=="Mechanical")
{
  echo "<a href='https://online-engineering.case.edu/blog/emerging-trends-in-mechanical-engineering' style='text-decoration:none;color:black'><h1><center>Mechanical engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.scantrust.com/what-is-digitalization/' style='text-decoration:none;color:black'>Digitalization</a></h2>
            <br>
            <img src='pic/digitalization.png' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.techtarget.com/iotagenda/definition/Internet-of-Things-IoT' style='text-decoration:none;color:black'>Internet of Things</a></h2><br>
        <img src='pic/iot.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://www.twi-global.com/technical-knowledge/faqs/what-is-industrial-automation-and-robotics#:~:text=Although%20they%20are%20sometimes%20used,of%20robots%20to%20perform%20them.' style='text-decoration:none;color:black'>Automation and Robotics<br></a> </h2><br>
        <img src='pic/aubo.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
 ";
}
elseif($_SESSION['b']=="Mechtronics")
{
  echo "<a href='https://www.linkedin.com/pulse/recent-trends-mechatronics-fusion-mechanics-karthi-nallasivam-c9ohc' style='text-decoration:none;color:black'><h1><center>Mechatronics</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>        
        <center><h2><a href='https://www.twi-global.com/technical-knowledge/faqs/what-is-industrial-automation-and-robotics#:~:text=Although%20they%20are%20sometimes%20used,of%20robots%20to%20perform%20them.' style='text-decoration:none;color:black'>Automation and Robotics<br></a> </h2><br>
        <img src='pic/aubo.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>   
        <center><h2><a href='https://www.linkedin.com/pulse/design-development-autonomous-vehicles-mechatronics-approach-v-sclsc#:~:text=Autonomous%20vehicles%20represent%20a%20pinnacle,in%20solving%20complex%20engineering%20challenges.' style='text-decoration:none;color:black'>Autonomous Vehicles</a></h2><br>
        <img src='pic/auto_mct.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://www.linkedin.com/pulse/mechatronics-agriculture-revolutionizing-precision-farming-dinoo-joel' style='text-decoration:none;color:black'>Agricultural automation<br></a> </h2><br>
        <img src='pic/agri_mct.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
   ";
}
else
{
  echo "engineering";

}
?>
<br><br>

</div>
<br><br>
<div class="upload-container">
        <h2>Upload a File to a Specific Branch and Subject</h2><br>
        <form id="fileUploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="branchSelect">Choose a Branch:</label>
            <select name="branch" id="branchSelect" required>
    <option value="">Select Branch</option>
    <option value="Computer Science and Engineering">Computer Science and Engineering</option>
    <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
    <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
    <option value="Mechanical Engineering">Mechanical Engineering</option>
    <option value="Information Technology">Information Technology</option>
    <option value="Civil Engineering">Civil Engineering</option>
    <option value="Metallurgy">Metallurgy</option>
    <option value="Mechatronics">Mechatronics</option>
</select>

            <label for="subjectSelect">Choose a Subject:</label>
            <select name="subject" id="subjectSelect" required>
                <option value="">Select Subject</option>
            </select>

            <label for="categorySelect">Choose Category:</label>
            <select name="category" id="categorySelect" required>
                <option value="">Select Category</option>
                <option value="Lectures">Lectures</option>
                <option value="Study Materials">Study Materials</option>
            </select>

            <label for="fileInput">Choose a file:</label>
            <input type="file" name="file" id="fileInput" required>
            <button type="submit">Upload</button>
        </form>
        <p id="uploadMessage"></p>
    </div>
    <script>
        // Define subjects based on the branch
        const branchSubjects = {
            "Computer Science and Engineering": ["Data Structures", "Algorithms", "Computer Networks", "Operating Systems", "Discrete Mathematics", "Programming in C", "Java Programming", "Database Management Systems", "Theory of Computation", "Computer Architecture", "Object-Oriented Programming", "Software Engineering", "Python Programming", "Information Security"],
            "Electronics and Communication Engineering": ["Basic Electrical Engineering", "Digital Electronics", "Analog Electronics", "Signals & Systems", "Electronic Devices & Circuits", "Control Systems", "Electromagnetics", "Analog & Digital Communication", "Computer Architecture", "VLSI Engineering", "Numeric Methods", "Computer Networks", "Digital System Design", "Wired Communication"],
            "Electrical and Electronics Engineering": ["Electrical Circuit Analysis", "Electrical Machines", "Power Systems", "Power Electronics", "Analog and Digital Electronics", "Electrical Instruments and Instrumentation", "Electromagnetic Fields", "Control Systems", "Microprocessor and Microcontrollers", "Utilization of Electrical Energy", "Wind and Solar Energy Systems", "Design of Photovoltaic Systems", "Power Semiconductor Drive", "Power System Protection"],
            "Mechanical Engineering": ["Fluid Mechanics", "Machine Design", "Strength of Materials", "Basic Electrical Engineering", "Thermal Engineering", "Thermodynamics", "Engineering Drawing", "Solid Mechanics", "Kinematics of Machinery", "Heat Transfer", "Applied Mechanics", "Engineering Management", "Automobile Engineering", "Machine Drawing"],
            "Information Technology": ["Data Structures", "Software Engineering", "Information Security", "Database Management System", "Computer Architecture", "Operating Systems", "Computer Networks", "Information Systems", "Artificial Intelligence", "Computer Graphics", "Computing", "Electronic Engineering", "Data Management", "Web Technologies"],
            "Civil Engineering": ["Surveying", "Strength of Metals", "Theory of Structures", "Mechanics of Material", "Steel Structures", "Design of Reinforced Concrete", "Water Resources Engineering", "Structural Analysis", "Advanced Surveying", "Concrete Technology", "Transportation Engineering", "Engineering Mechanics", "Fluid Mechanics", "Construction Engineering Management"],
            "Metallurgy": ["Mechanics of Fluid", "Metallurgical Analysis", "Physical Metallurgy", "Metallurgical Thermodynamics", "Principles of Extractive Metallurgy", "Metal Casting", "Metal Forming", "Mechanics of Solid", "Heat Treatment and Phase Transformation", "Metal Joining", "Non-Ferrous Extractive Metallurgy", "Steel Making", "Material Characterization Techniques", "Principles of Electronic Communication", "Nano Materials", "Fuels, Furnaces & Refractories", "Mineral Dressing", "Thermodynamics and Kinetics", "Mechanical Behavior of Metals", "Iron Production", "Electrometallurgy and Corrosion", "Ceramics and Composite Materials"],
            "Mechatronics": ["Introduction to Mechatronics", "Sensors and Actuators", "Control Systems", "Embedded Systems", "Mechanical Systems Design", "Robotics", "Automation and PLC (Programmable Logic Controllers)", "Microcontrollers and Microprocessors", "Digital Signal Processing", "Machine Vision", "Mechatronics System Design", "Artificial Intelligence in Mechatronics", "Dynamics and Vibrations", "Hydraulic and Pneumatic Systems", "Industrial Automation", "CAD/CAM (Computer-Aided Design/Manufacturing)", "Control Theory and Applications", "Manufacturing Processes", "Smart Materials and Structures", "Internet of Things (IoT) in Mechatronics"]
        
        };

        // Update subject options based on selected branch
        document.getElementById("branchSelect").addEventListener("change", function() {
            const selectedBranch = this.value;
            const subjectDropdown = document.getElementById("subjectSelect");

            // Clear existing options
            subjectDropdown.innerHTML = '<option value="">Select Subject</option>';

            // Populate subject options based on the selected branch
            if (branchSubjects[selectedBranch]) {
                branchSubjects[selectedBranch].forEach(function(subject) {
                    const option = document.createElement("option");
                    option.value = subject;
                    option.textContent = subject;
                    subjectDropdown.appendChild(option);
                });
            }
        });
    </script>
<br>
<br>
  <center><h1>GET THE ADP's ADVANTAGES<h1></center>
<br><br>
<div id="b5">
    <div>
     <center><h2>Conceptual clarity <br> through visualization </h2></center>
        <center><img src="pic/conceptual.png" class="img2"></center>
    </div>
    <div>
     <center><h2>Personalised Learning <br> Programs </h2></center>
      <center><img src="pic/program.png" class="img2"></center>
    </div>
    <div>
      <center><h2>Unmatched Individual <br> Attention </h2></center>
      <center><img src="pic/indivdual.jpg" class="img2"></center>
    </div>
</div>
<br>
<br>
  <div id="b6"><br>
    <b>Why Choose Us?<b><br>
    <p>Learning is pivotal for a student's success in academics and life. The Digital Age is deeply shaping the way students learn and will also determine their future prospects. At ADP'S, we encourage students to embrace this fast, changing world and making them ready for tomorrow by being their constant learning partner.
    We craft learning journeys for every student that address their unique needs. We believe in the power of one-to-one learning that addresses every child's learning needs, allows students to be holistically involved in their education and be active, lifelong learners.</p>
   <br><br>
   <center><a style="color:black" href="author.html">about developer</a></center><br><br>
  </div>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/66afc20032dca6db2cb9e820/1i4f8rkq0';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->



</body>
</html>
=======
<?php
session_start();  
?>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
          
    <link rel="stylesheet" href="styles/style3.css">
    <style>
                      /* General styling for the upload container */
.upload-container {
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 600px;
    margin: 40px auto;
    font-family: 'Arial', sans-serif;
}

/* Heading styling */
.upload-container h2 {
    text-align: center;
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Label styling */
.upload-container label {
    font-size: 16px;
    color: #333;
    margin-bottom: 10px;
    display: block;
}

/* Styling for all select and input elements */
.upload-container select,
.upload-container input[type="file"],
.upload-container button {
    width: 100%;
    padding: 12px;
    margin-bottom: 20px;
    font-size: 16px;
    border: 1px solid #ddd;
    border-radius: 6px;
    background-color: #fff;
    transition: border-color 0.3s ease;
}

.upload-container select:focus,
.upload-container input[type="file"]:focus,
.upload-container button:focus {
    border-color: #007bff;
    outline: none;
}

/* Styling for the file input */
.upload-container input[type="file"] {
    padding: 10px;
    border: 1px solid #ddd;
    background-color: #f5f5f5;
}

/* Styling for the upload button */
.upload-container button {
    background-color: #007bff;
    color: white;
    cursor: pointer;
    font-weight: bold;
    border: none;
    transition: background-color 0.3s ease;
}

/* Hover effect for the upload button */
.upload-container button:hover {
    background-color: #0056b3;
}

/* Message displayed after uploading */
#uploadMessage {
    text-align: center;
    color: #4caf50;  /* Green color for success message */
    font-size: 16px;
    font-weight: bold;
    margin-top: 20px;
}

/* Responsive design for smaller screens */
@media (max-width: 600px) {
    .upload-container {
        padding: 15px;
        width: 90%;
    }

    .upload-container h2 {
        font-size: 20px;
    }

    .upload-container label {
        font-size: 14px;
    }

    .upload-container select,
    .upload-container input[type="file"],
    .upload-container button {
        font-size: 14px;
    }
}

    </style>
</head>
<body>
  <nav id="b1">
		<div id="b11"> 
	  <span> <a href="index0.php" class="adpt" style="font-size: 30px;">A D P
       <img src="pic/adp.png" class="adp"></h1></span>
    </a>
	   </div>
		<div id="b12">
			   <div><h1>
         <?php
    echo $_SESSION['uid'];
?></h1>
         </div>
			   <div id="b121" class="myDIV"><a href="details.php"><img src="pic/profile1.jpg" class="prof"></a></div>
              
	   </div>
</nav>
   
   <div id="b4">
   <div>
   <a href="s_material.php?category=Study Materials" class="btn1">Study Materials</a>
   </div>

   <div>
       <a href="lectures.php?category=Lectures" class="btn1">Lectures</a>
       </div>
       <div>
        <a href="internship.php" class="btn1">Internship</a>
        </div>
        <div>
            <a href="scholor.php" class="btn1">Scholarship</a>
            </div>
            <div>
                <a href="successstory.php" class="btn1">Success Story</a>
                </div>
   </div>
   
<div id="b3">
<div id="b31">
<img src="pic/educator.jpg" alt="rjt photo is issing">
<!-- <img src="/gate.jpg" alt=""> -->
</div>
<div id="b32">
  <div id="b3a">
  <br><br><br>
 <center>
<a href="exploregate.php"style="text-decoration:none;color:black;" class="btn2">
<h2>Explore for GATE</h2></a></center>
  <br><center><button class="imgbtn"><img src="pic/gate.jpg" class="img1"></button></center></form>
  </div>
  <div id="b3b">
  <center>
    <a href="ielts.php"style="text-decoration:none;color:black;" class="btn2">
  <h2>Explore for IELTS</h2></a></center>
 <br><center><button class="imgbtn"><img src="pic/ielts.jpeg" class="img1"</button></form></center>
  </div>
</div>
</div>
<br><br>
<div style="background-color:whitesmoke">
<br>
<?php
if($_SESSION['b']=="computer science and engineering")
{
  echo "<a href='https://www.mygreatlearning.com/blog/latest-technologies-in-computer-science/' style='text-decoration:none;color:black'><h1><center>Computer Science And Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://about.meta.com/metaverse/' style='text-decoration:none;color:black'>Metaverse<br>Technology</a></h2>
            <br>
            <img src='pic/meta.jpeg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://bitcoin.org/en/' style='text-decoration:none;color:black'>Bitcoin<br>Technology</a></h2><br>
        <img src='pic/bitcoin.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://scienceexchange.caltech.edu/topics/quantum-science-explained/quantum-computing-computers' style='text-decoration:none;color:black'>Quantum Computing<br>Technology</a> </h2><br>
        <img src='pic/quantum_comp.png' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
 ";
}
elseif($_SESSION['b']== "Electronics and Communication Engineering")
{
  
  echo "<a href='https://www.ncl.ac.uk/maths-physics/research/physics/emerging-technology-materials/electronic/' style='text-decoration:none;color:black'><h1><center>Electronics and Communication Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.sciencedirect.com/topics/materials-science/nanoelectronics' style='text-decoration:none;color:black'>Nano Electronics
            <br>Technology</a></h2>
            <br>
            <img src='pic/nanotech.jpg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.nsf.gov/pubs/2018/nsf18557/nsf18557.htm' style='text-decoration:none;color:black'>smart and autonomous systems<br>Technology</a></h2><br>
        <img src='pic/autonomous.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://builtin.com/robotics' style='text-decoration:none;color:black'>Robotics
        <br>Technology</a> </h2><br>
        <img src='pic/robo.png' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";

}
elseif($_SESSION['b']== "Electrical & Electronics Engineering")
{
  echo "<a href='https://bgibhopal.com/blog/emerging-technologies-in-electrical-engineering/' style='text-decoration:none;color:black'><h1><center>Electrical & Electronics Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.igi-global.com/book/emerging-nanotechnology-applications-electrical-engineering/271357#:~:text=Nanotechnology%20aims%20to%20develop%20new,to%20the%20electrical%20engineering%20field.' style='text-decoration:none;color:black'>Nano applications
            <br>Technology</a></h2>
            <br>
            <img src='pic/naneee.jpg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://afdc.energy.gov/fuels/electricity_infrastructure.html' style='text-decoration:none;color:black'>Electrical Vehicles<br>Technology</a></h2><br>
        <img src='pic/ev.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://iimtu.edu.in/blog/the-future-of-electrical-engineering-with-ai-ml/' style='text-decoration:none;color:black'>Artificial Intelligence
        <br>Technology</a> </h2><br>
        <img src='pic/aieee.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";
}
elseif($_SESSION['b']== "Civil Engineering")
{
  echo "<a href='https://bgibhopal.com/blog/discover-the-top-7-emerging-trends-in-civil-engineering/' style='text-decoration:none;color:black'><h1><center>Civil Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://omdayal.com/blog/photovoltaic-glaze-and-sustainability-in-engineering/' style='text-decoration:none;color:black'>Photovoltaic glazing
            <br>Technology</a></h2>
            <br>
            <img src='pic/photovoltaic.jpg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.twi-global.com/technical-knowledge/faqs/what-is-3d-printing#:~:text=3D%20printing%20is%20an%20additive,printing%20creates%20less%20material%20wastage.' style='text-decoration:none;color:black'>3D Printing<br>Technology</a></h2><br>
        <img src='pic/3d.png' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://www.engineeringcivil.com/what-are-kinetic-roads.html' style='text-decoration:none;color:black'>Kinetic roads
        <br>Technology</a> </h2><br>
        <img src='pic/kineticroads.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";
}
elseif($_SESSION['b']== "Metallurgical Engineering")
{
  echo "<a href='https://www.linkedin.com/pulse/future-metallurgy-innovations-trends-sabhavath-jaipal#:~:text=One%20of%20the%20most%20significant,to%20optimize%20the%20manufacturing%20process.' style='text-decoration:none;color:black'><h1><center>Metallurgical Engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://smartscrap.net/smartmetallurgy' style='text-decoration:none;color:black'>Smart Mettallurgy 
            <br>Technology</a></h2>
            <br>
            <img src='pic/smartmettalurgy.png' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.sciencedirect.com/science/article/abs/pii/S1526612520304503' style='text-decoration:none;color:black'>Additive<br>Metallurgy</a></h2><br>
        <img src='pic/additivematal.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://en.wikipedia.org/wiki/Space_manufacturing' style='text-decoration:none;color:black'>Space
        <br>Metallurgy</a> </h2><br>
        <img src='pic/spacemetal.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
  ";
}
elseif($_SESSION['b']=="Informatoinal Technology")
{
  echo "<a href='https://www.simplilearn.com/top-technology-trends-and-jobs-article' style='text-decoration:none;color:black'><h1><center>Informatoinal Technology</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.techtarget.com/searchdatacenter/definition/edge-computing' style='text-decoration:none;color:black'>Edge<br>Computing</a></h2>
            <br>
            <img src='pic/edgecomputing.jpeg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://en.wikipedia.org/wiki/3D_printing' style='text-decoration:none;color:black'>3D <br>Printing</a></h2><br>
        <img src='pic/3dprinting.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://en.wikipedia.org/wiki/Datafication' style='text-decoration:none;color:black'>Datafication<br></a> </h2><br>
        <img src='pic/datafication.png' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
 ";
}
elseif($_SESSION['b']=="Artificial Intelligence and Machine Learning")
{
  echo "<a href='https://www.simplilearn.com/artificial-intelligence-ai-and-machine-learning-trends-article#:~:text=Multimodal%20AI&text=A%20few%20benefits%20responsible%20for,the%20growth%20of%20multimodal%20AI.' style='text-decoration:none;color:black'><h1><center>Artificial Intelligence and Machine Learning</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.simplilearn.com/tutorials/artificial-intelligence-tutorial/what-is-generative-ai' style='text-decoration:none;color:black'>Generative AI</a></h2>
            <br>
            <img src='pic/generativeai.jpeg' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://cloud.google.com/use-cases/multimodal-ai' style='text-decoration:none;color:black'>Multimodal AI</a></h2><br>
        <img src='pic/multimodalai.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://aws.amazon.com/what-is/deep-learning/#:~:text=Deep%20learning%20is%20a%20method,inspired%20by%20the%20human%20brain.' style='text-decoration:none;color:black'>Deep Learning<br></a> </h2><br>
        <img src='pic/deeplearning.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
 ";
}

elseif($_SESSION['b']=="Mechanical")
{
  echo "<a href='https://online-engineering.case.edu/blog/emerging-trends-in-mechanical-engineering' style='text-decoration:none;color:black'><h1><center>Mechanical engineering</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>
            <center><h2><a href='https://www.scantrust.com/what-is-digitalization/' style='text-decoration:none;color:black'>Digitalization</a></h2>
            <br>
            <img src='pic/digitalization.png' style=' width:240px; height:150px;'>
            </center>
        </div>
        <div>   
        <center><h2><a href='https://www.techtarget.com/iotagenda/definition/Internet-of-Things-IoT' style='text-decoration:none;color:black'>Internet of Things</a></h2><br>
        <img src='pic/iot.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://www.twi-global.com/technical-knowledge/faqs/what-is-industrial-automation-and-robotics#:~:text=Although%20they%20are%20sometimes%20used,of%20robots%20to%20perform%20them.' style='text-decoration:none;color:black'>Automation and Robotics<br></a> </h2><br>
        <img src='pic/aubo.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
 ";
}
elseif($_SESSION['b']=="Mechtronics")
{
  echo "<a href='https://www.linkedin.com/pulse/recent-trends-mechatronics-fusion-mechanics-karthi-nallasivam-c9ohc' style='text-decoration:none;color:black'><h1><center>Mechatronics</center></h1></a>";

  echo "<br><br>";
  echo "<div id='b5'>
        <div>        
        <center><h2><a href='https://www.twi-global.com/technical-knowledge/faqs/what-is-industrial-automation-and-robotics#:~:text=Although%20they%20are%20sometimes%20used,of%20robots%20to%20perform%20them.' style='text-decoration:none;color:black'>Automation and Robotics<br></a> </h2><br>
        <img src='pic/aubo.jpg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>   
        <center><h2><a href='https://www.linkedin.com/pulse/design-development-autonomous-vehicles-mechatronics-approach-v-sclsc#:~:text=Autonomous%20vehicles%20represent%20a%20pinnacle,in%20solving%20complex%20engineering%20challenges.' style='text-decoration:none;color:black'>Autonomous Vehicles</a></h2><br>
        <img src='pic/auto_mct.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
        <div>        
        <center><h2><a href='https://www.linkedin.com/pulse/mechatronics-agriculture-revolutionizing-precision-farming-dinoo-joel' style='text-decoration:none;color:black'>Agricultural automation<br></a> </h2><br>
        <img src='pic/agri_mct.jpeg' style=' width:240px; height:150px;'>
        </center>
        </div>
  </div>
  <br>
   ";
}
else
{
  echo "engineering";

}
?>
<br><br>

</div>
<br><br>
<div class="upload-container">
        <h2>Upload a File to a Specific Branch and Subject</h2><br>
        <form id="fileUploadForm" action="upload.php" method="POST" enctype="multipart/form-data">
            <label for="branchSelect">Choose a Branch:</label>
            <select name="branch" id="branchSelect" required>
    <option value="">Select Branch</option>
    <option value="Computer Science and Engineering">Computer Science and Engineering</option>
    <option value="Electronics and Communication Engineering">Electronics and Communication Engineering</option>
    <option value="Electrical and Electronics Engineering">Electrical and Electronics Engineering</option>
    <option value="Mechanical Engineering">Mechanical Engineering</option>
    <option value="Information Technology">Information Technology</option>
    <option value="Civil Engineering">Civil Engineering</option>
    <option value="Metallurgy">Metallurgy</option>
    <option value="Mechatronics">Mechatronics</option>
</select>

            <label for="subjectSelect">Choose a Subject:</label>
            <select name="subject" id="subjectSelect" required>
                <option value="">Select Subject</option>
            </select>

            <label for="categorySelect">Choose Category:</label>
            <select name="category" id="categorySelect" required>
                <option value="">Select Category</option>
                <option value="Lectures">Lectures</option>
                <option value="Study Materials">Study Materials</option>
            </select>

            <label for="fileInput">Choose a file:</label>
            <input type="file" name="file" id="fileInput" required>
            <button type="submit">Upload</button>
        </form>
        <p id="uploadMessage"></p>
    </div>
    <script>
        // Define subjects based on the branch
        const branchSubjects = {
            "Computer Science and Engineering": ["Data Structures", "Algorithms", "Computer Networks", "Operating Systems", "Discrete Mathematics", "Programming in C", "Java Programming", "Database Management Systems", "Theory of Computation", "Computer Architecture", "Object-Oriented Programming", "Software Engineering", "Python Programming", "Information Security"],
            "Electronics and Communication Engineering": ["Basic Electrical Engineering", "Digital Electronics", "Analog Electronics", "Signals & Systems", "Electronic Devices & Circuits", "Control Systems", "Electromagnetics", "Analog & Digital Communication", "Computer Architecture", "VLSI Engineering", "Numeric Methods", "Computer Networks", "Digital System Design", "Wired Communication"],
            "Electrical and Electronics Engineering": ["Electrical Circuit Analysis", "Electrical Machines", "Power Systems", "Power Electronics", "Analog and Digital Electronics", "Electrical Instruments and Instrumentation", "Electromagnetic Fields", "Control Systems", "Microprocessor and Microcontrollers", "Utilization of Electrical Energy", "Wind and Solar Energy Systems", "Design of Photovoltaic Systems", "Power Semiconductor Drive", "Power System Protection"],
            "Mechanical Engineering": ["Fluid Mechanics", "Machine Design", "Strength of Materials", "Basic Electrical Engineering", "Thermal Engineering", "Thermodynamics", "Engineering Drawing", "Solid Mechanics", "Kinematics of Machinery", "Heat Transfer", "Applied Mechanics", "Engineering Management", "Automobile Engineering", "Machine Drawing"],
            "Information Technology": ["Data Structures", "Software Engineering", "Information Security", "Database Management System", "Computer Architecture", "Operating Systems", "Computer Networks", "Information Systems", "Artificial Intelligence", "Computer Graphics", "Computing", "Electronic Engineering", "Data Management", "Web Technologies"],
            "Civil Engineering": ["Surveying", "Strength of Metals", "Theory of Structures", "Mechanics of Material", "Steel Structures", "Design of Reinforced Concrete", "Water Resources Engineering", "Structural Analysis", "Advanced Surveying", "Concrete Technology", "Transportation Engineering", "Engineering Mechanics", "Fluid Mechanics", "Construction Engineering Management"],
            "Metallurgy": ["Mechanics of Fluid", "Metallurgical Analysis", "Physical Metallurgy", "Metallurgical Thermodynamics", "Principles of Extractive Metallurgy", "Metal Casting", "Metal Forming", "Mechanics of Solid", "Heat Treatment and Phase Transformation", "Metal Joining", "Non-Ferrous Extractive Metallurgy", "Steel Making", "Material Characterization Techniques", "Principles of Electronic Communication", "Nano Materials", "Fuels, Furnaces & Refractories", "Mineral Dressing", "Thermodynamics and Kinetics", "Mechanical Behavior of Metals", "Iron Production", "Electrometallurgy and Corrosion", "Ceramics and Composite Materials"],
            "Mechatronics": ["Introduction to Mechatronics", "Sensors and Actuators", "Control Systems", "Embedded Systems", "Mechanical Systems Design", "Robotics", "Automation and PLC (Programmable Logic Controllers)", "Microcontrollers and Microprocessors", "Digital Signal Processing", "Machine Vision", "Mechatronics System Design", "Artificial Intelligence in Mechatronics", "Dynamics and Vibrations", "Hydraulic and Pneumatic Systems", "Industrial Automation", "CAD/CAM (Computer-Aided Design/Manufacturing)", "Control Theory and Applications", "Manufacturing Processes", "Smart Materials and Structures", "Internet of Things (IoT) in Mechatronics"]
        
        };

        // Update subject options based on selected branch
        document.getElementById("branchSelect").addEventListener("change", function() {
            const selectedBranch = this.value;
            const subjectDropdown = document.getElementById("subjectSelect");

            // Clear existing options
            subjectDropdown.innerHTML = '<option value="">Select Subject</option>';

            // Populate subject options based on the selected branch
            if (branchSubjects[selectedBranch]) {
                branchSubjects[selectedBranch].forEach(function(subject) {
                    const option = document.createElement("option");
                    option.value = subject;
                    option.textContent = subject;
                    subjectDropdown.appendChild(option);
                });
            }
        });
    </script>
<br>
<br>
  <center><h1>GET THE ADP's ADVANTAGES<h1></center>
<br><br>
<div id="b5">
    <div>
     <center><h2>Conceptual clarity <br> through visualization </h2></center>
        <center><img src="pic/conceptual.png" class="img2"></center>
    </div>
    <div>
     <center><h2>Personalised Learning <br> Programs </h2></center>
      <center><img src="pic/program.png" class="img2"></center>
    </div>
    <div>
      <center><h2>Unmatched Individual <br> Attention </h2></center>
      <center><img src="pic/indivdual.jpg" class="img2"></center>
    </div>
</div>
<br>
<br>
  <div id="b6"><br>
    <b>Why Choose Us?<b><br>
    <p>Learning is pivotal for a student's success in academics and life. The Digital Age is deeply shaping the way students learn and will also determine their future prospects. At ADP'S, we encourage students to embrace this fast, changing world and making them ready for tomorrow by being their constant learning partner.
    We craft learning journeys for every student that address their unique needs. We believe in the power of one-to-one learning that addresses every child's learning needs, allows students to be holistically involved in their education and be active, lifelong learners.</p>
   <br><br>
   <center><a style="color:black" href="author.html">about developer</a></center><br><br>
  </div>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/66afc20032dca6db2cb9e820/1i4f8rkq0';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->



</body>
</html>
>>>>>>> a36f62a (Added styles folder)
