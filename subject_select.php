<<<<<<< HEAD
<?php
session_start();  
?>
<html>
<head>
    <link rel="stylesheet" href="styles/style3.css">
    <style>
        /* Styling for the subject list container */
        #subject-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two columns */
            gap: 20px;
            padding: 20px;
        }

        /* Styling for each subject */
        #subject-list li {
            list-style: none;
            background-color: #f4f4f4;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }

        #subject-list li:hover {
            background-color: #e0e0e0;
            transform: scale(1.05);
        }

        /* Styling for links inside subjects */
        #subject-list a {
            text-decoration: none;
            color: #333;
        }

        #subject-list a:hover {
            color: #007bff;
        }

        /* Styling for the branch name */
        #branch-name {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <nav id="b1">
        <div id="b11"> 
            <span><a href="index0.php" class="adpt" style="font-size: 30px;">A D P
                <img src="pic/adp.png" class="adp"></h1></span>
            </a>
        </div>
        <div id="b12">
            <div><h1>
                <?php echo $_SESSION['uid']; ?>
            </h1></div>
            <div id="b121"><img src="pic/profile1.jpg" class="prof"></div>
        </div>
    </nav>

    <div id="b4">
        <div><form action="s_material.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Study Materials"></form>
        </div>

        <div><form action="lectures.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Lectures"></form>
        </div>
        <div><form action="internship.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Internship"></form>
        </div>
        <div><form action="scholor.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Scholorships"></form>
        </div>
        <div><form action="successstory.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Success Stories"></form>
        </div>
    </div>
    <br><br>

   

    <!-- Placeholder for branch name -->
    <div id="branch-name"></div>

    <script>
        // Retrieve category and branch from URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const category = urlParams.get('category');
        const branch = urlParams.get('branch');

        // Insert the branch name into the placeholder before the subject list
        document.getElementById('branch-name').innerHTML = `<h3> ${branch}</h3>`;

        // Subjects by branch
        const subjects = {
            "Computer Science and Engineering": ["Data Structures", "Algorithms", "Computer Networks", "Operating Systems", "Discrete Mathematics", "Programming in C", "Java Programming", "Database Management Systems", "Theory of Computation", "Computer Architecture", "Object-Oriented Programming", "Software Engineering", "Python Programming", "Information Security"],
            "Electronics and Communication Engineering": ["Basic Electrical Engineering", "Digital Electronics", "Analog Electronics", "Signals & Systems", "Electronic Devices & Circuits", "Control Systems", "Electromagnetics", "Analog & Digital Communication", "Computer Architecture", "VLSI Engineering", "Numeric Methods", "Computer Networks", "Digital System Design", "Wired Communication"],
            "Electrical and Electronics Engineering": ["Electrical Circuit Analysis", "Electrical Machines", "Power Systems", "Power Electronics", "Analog and Digital Electronics", "Electrical Instruments and Instrumentation", "Electromagnetic Fields", "Control Systems", "Microprocessor and Microcontrollers", "Utilization of Electrical Energy", "Wind and Solar Energy Systems", "Design of Photovoltaic Systems", "Power Semiconductor Drive", "Power System Protection"],
            "Mechanical Engineering": ["Fluid Mechanics", "Machine Design", "Strength of Materials", "Basic Electrical Engineering", "Thermal Engineering", "Thermodynamics", "Engineering Drawing", "Solid Mechanics", "Kinematics of Machinery", "Heat Transfer", "Applied Mechanics", "Engineering Management", "Automobile Engineering", "Machine Drawing"],
            "Information Technology": ["Data Structures", "Software Engineering", "Information Security", "Database Management System", "Computer Architecture", "Operating Systems", "Computer Networks", "Information Systems", "Artificial Intelligence", "Computer Graphics", "Computing", "Electronic Engineering", "Data Management", "Web Technologies"],
            "Civil Engineering": ["Surveying", "Strength of Metals", "Theory of Structures", "Mechanics of Material", "Steel Structures", "Design of Reinforced Concrete", "Water Resources Engineering", "Structural Analysis", "Advanced Surveying", "Concrete Technology", "Transportation Engineering", "Engineering Mechanics", "Fluid Mechanics", "Construction Engineering Management"],
            "Metallurgy": ["Mechanics of Fluid", "Metallurgical Analysis", "Physical Metallurgy", "Metallurgical Thermodynamics", "Principles of Extractive Metallurgy", "Metal Casting", "Metal Forming", "Mechanics of Solid", "Heat Treatment and Phase Transformation", "Metal Joining", "Non-Ferrous Extractive Metallurgy", "Steel Making", "Material Characterization Techniques", "Principles of Electronic Communication", "Nano Materials", "Fuels, Furnaces & Refractories", "Mineral Dressing", "Thermodynamics and Kinetics", "Mechanical Behavior of Metals", "Iron Production", "Electrometallurgy and Corrosion", "Ceramics and Composite Materials"],
            "Mechatronics": ["Introduction to Mechatronics", "Sensors and Actuators", "Control Systems", "Embedded Systems", "Mechanical Systems Design", "Robotics", "Automation and PLC (Programmable Logic Controllers)", "Microcontrollers and Microprocessors", "Digital Signal Processing", "Machine Vision", "Mechatronics System Design", "Artificial Intelligence in Mechatronics", "Dynamics and Vibrations", "Hydraulic and Pneumatic Systems", "Industrial Automation", "CAD/CAM (Computer-Aided Design/Manufacturing)", "Control Theory and Applications", "Manufacturing Processes", "Smart Materials and Structures", "Internet of Things (IoT) in Mechatronics"]
        };

        // Populate subject list
        const subjectList = document.createElement("ul");
        subjectList.id = "subject-list";  // Apply the grid layout styles

        if (subjects[branch]) {
            subjects[branch].forEach(subject => {
                const li = document.createElement("li");
                li.innerHTML = `<a href="view_files.php?category=${encodeURIComponent(category)}&branch=${encodeURIComponent(branch)}&subject=${encodeURIComponent(subject)}">${subject}</a>`;
                subjectList.appendChild(li);
            });
        } else {
            subjectList.innerHTML = "<li>No subjects available for this branch.</li>";
        }

        document.body.appendChild(subjectList);
    </script>

</body>
</html>
=======
<?php
session_start();  
?>
<html>
<head>
    <link rel="stylesheet" href="styles/style3.css">
    <style>
        /* Styling for the subject list container */
        #subject-list {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two columns */
            gap: 20px;
            padding: 20px;
        }

        /* Styling for each subject */
        #subject-list li {
            list-style: none;
            background-color: #f4f4f4;
            padding: 15px;
            border-radius: 8px;
            text-align: center;
            font-size: 16px;
            font-weight: bold;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s, transform 0.3s;
        }

        #subject-list li:hover {
            background-color: #e0e0e0;
            transform: scale(1.05);
        }

        /* Styling for links inside subjects */
        #subject-list a {
            text-decoration: none;
            color: #333;
        }

        #subject-list a:hover {
            color: #007bff;
        }

        /* Styling for the branch name */
        #branch-name {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
        }
    </style>
</head>
<body>

    <nav id="b1">
        <div id="b11"> 
            <span><a href="index0.php" class="adpt" style="font-size: 30px;">A D P
                <img src="pic/adp.png" class="adp"></h1></span>
            </a>
        </div>
        <div id="b12">
            <div><h1>
                <?php echo $_SESSION['uid']; ?>
            </h1></div>
            <div id="b121"><img src="pic/profile1.jpg" class="prof"></div>
        </div>
    </nav>

    <div id="b4">
        <div><form action="s_material.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Study Materials"></form>
        </div>

        <div><form action="lectures.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Lectures"></form>
        </div>
        <div><form action="internship.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Internship"></form>
        </div>
        <div><form action="scholor.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Scholorships"></form>
        </div>
        <div><form action="successstory.php" method="post">
            <input type="submit" class="btn1" value="&nbsp;&nbsp;Success Stories"></form>
        </div>
    </div>
    <br><br>

   

    <!-- Placeholder for branch name -->
    <div id="branch-name"></div>

    <script>
        // Retrieve category and branch from URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const category = urlParams.get('category');
        const branch = urlParams.get('branch');

        // Insert the branch name into the placeholder before the subject list
        document.getElementById('branch-name').innerHTML = `<h3> ${branch}</h3>`;

        // Subjects by branch
        const subjects = {
            "Computer Science and Engineering": ["Data Structures", "Algorithms", "Computer Networks", "Operating Systems", "Discrete Mathematics", "Programming in C", "Java Programming", "Database Management Systems", "Theory of Computation", "Computer Architecture", "Object-Oriented Programming", "Software Engineering", "Python Programming", "Information Security"],
            "Electronics and Communication Engineering": ["Basic Electrical Engineering", "Digital Electronics", "Analog Electronics", "Signals & Systems", "Electronic Devices & Circuits", "Control Systems", "Electromagnetics", "Analog & Digital Communication", "Computer Architecture", "VLSI Engineering", "Numeric Methods", "Computer Networks", "Digital System Design", "Wired Communication"],
            "Electrical and Electronics Engineering": ["Electrical Circuit Analysis", "Electrical Machines", "Power Systems", "Power Electronics", "Analog and Digital Electronics", "Electrical Instruments and Instrumentation", "Electromagnetic Fields", "Control Systems", "Microprocessor and Microcontrollers", "Utilization of Electrical Energy", "Wind and Solar Energy Systems", "Design of Photovoltaic Systems", "Power Semiconductor Drive", "Power System Protection"],
            "Mechanical Engineering": ["Fluid Mechanics", "Machine Design", "Strength of Materials", "Basic Electrical Engineering", "Thermal Engineering", "Thermodynamics", "Engineering Drawing", "Solid Mechanics", "Kinematics of Machinery", "Heat Transfer", "Applied Mechanics", "Engineering Management", "Automobile Engineering", "Machine Drawing"],
            "Information Technology": ["Data Structures", "Software Engineering", "Information Security", "Database Management System", "Computer Architecture", "Operating Systems", "Computer Networks", "Information Systems", "Artificial Intelligence", "Computer Graphics", "Computing", "Electronic Engineering", "Data Management", "Web Technologies"],
            "Civil Engineering": ["Surveying", "Strength of Metals", "Theory of Structures", "Mechanics of Material", "Steel Structures", "Design of Reinforced Concrete", "Water Resources Engineering", "Structural Analysis", "Advanced Surveying", "Concrete Technology", "Transportation Engineering", "Engineering Mechanics", "Fluid Mechanics", "Construction Engineering Management"],
            "Metallurgy": ["Mechanics of Fluid", "Metallurgical Analysis", "Physical Metallurgy", "Metallurgical Thermodynamics", "Principles of Extractive Metallurgy", "Metal Casting", "Metal Forming", "Mechanics of Solid", "Heat Treatment and Phase Transformation", "Metal Joining", "Non-Ferrous Extractive Metallurgy", "Steel Making", "Material Characterization Techniques", "Principles of Electronic Communication", "Nano Materials", "Fuels, Furnaces & Refractories", "Mineral Dressing", "Thermodynamics and Kinetics", "Mechanical Behavior of Metals", "Iron Production", "Electrometallurgy and Corrosion", "Ceramics and Composite Materials"],
            "Mechatronics": ["Introduction to Mechatronics", "Sensors and Actuators", "Control Systems", "Embedded Systems", "Mechanical Systems Design", "Robotics", "Automation and PLC (Programmable Logic Controllers)", "Microcontrollers and Microprocessors", "Digital Signal Processing", "Machine Vision", "Mechatronics System Design", "Artificial Intelligence in Mechatronics", "Dynamics and Vibrations", "Hydraulic and Pneumatic Systems", "Industrial Automation", "CAD/CAM (Computer-Aided Design/Manufacturing)", "Control Theory and Applications", "Manufacturing Processes", "Smart Materials and Structures", "Internet of Things (IoT) in Mechatronics"]
        };

        // Populate subject list
        const subjectList = document.createElement("ul");
        subjectList.id = "subject-list";  // Apply the grid layout styles

        if (subjects[branch]) {
            subjects[branch].forEach(subject => {
                const li = document.createElement("li");
                li.innerHTML = `<a href="view_files.php?category=${encodeURIComponent(category)}&branch=${encodeURIComponent(branch)}&subject=${encodeURIComponent(subject)}">${subject}</a>`;
                subjectList.appendChild(li);
            });
        } else {
            subjectList.innerHTML = "<li>No subjects available for this branch.</li>";
        }

        document.body.appendChild(subjectList);
    </script>

</body>
</html>
>>>>>>> a36f62a (Added styles folder)
