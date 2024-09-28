<?php

    // personal details
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $personaldateofbirth = $_POST['personaldateofbirth'];
    $personalplaceofbirth = $_POST['personalplaceofbirth'];
    $personalcontact = $_POST['personalcontact'];
    $ghanacardnumber = $_POST['ghanacardnumber'];
    $ghanacardissuedate = $_POST['ghanacardissuedate'];
    $ghanacardexpirydate = $_POST['ghanacardexpirydate'];
    $maritalstatus = $_POST['maritalstatus'];
    $spousename = $_POST['spousename'];
    $spousedateofmarriage = $_POST['spousedateofmarriage'];
    $spouseplaceofmarriage = $_POST['spouseplaceofmarriage'];
    $spouseaddress = $_POST['spouseaddress'];
    $spousehouseaddress = $_POST['spousehouseaddress'];
    $spousedigitaladdress = $_POST['spousedigitaladdress'];
    $spousemailingaddress = $_POST['spousemailingaddress'];
    $spouseemail = $_POST['spouseemail'];
    $spousenativelanguage = $_POST['spousenativelanguage'];
    
    // Education Details
    $nameoflastschoolattended = $_POST['nameoflastschoolattended'];
    $addressoftheschool = $_POST['addressoftheschool'];
    $dateyoustarttheschool = $_POST['dateyoustarttheschool'];
    $dateofcompletionofschool = $_POST['dateofcompletionofschool'];    
    $employment = $_POST['employment'];
    $dateofstartingthework = $_POST['dateofstartingthework'];
    $dateofstopping = $_POST['dateofstopping'];
    $schoolcontact = $_POST['schoolcontact'];

    //family details
    $wifename = $_POST['wifename'];
    $wifedateofbirth = $_POST['wifedateofbirth'];
    $wifeplaceofbirth = $_POST['wifeplaceofbirth'];
    $wifecontact = $_POST['wifecontact'];
    $wifeoccupation = $_POST['wifeoccupation'];
    $childrenname = $_POST['childrenname'];
    $childrendateofbirth = $_POST['childrendateofbirth'];
    $sex = $_POST['sex'];
    $mothername = $_POST['mothername'];
    $motherdateofbirth = $_POST['motherdateofbirth'];
    $motherhouseaddress = $_POST['motherhouseaddress'];
    $motheroccupation = $_POST['motheroccupation'];
    $mothercontact = $_POST['mothercontact'];
    $ifdeceasedmother = $_POST['ifdeceasedmother'];
    $fathername = $_POST['fathername'];
    $fatherdateofbirth = $_POST['fatherdateofbirth'];
    $fatherhouseaddress = $_POST['fatherhouseaddress'];
    $fatheroccupation = $_POST['fatheroccupation'];
    $fathercontact = $_POST['fathercontact'];
    $ifdeceasedfather = $_POST['ifdeceasedfather'];

    //Database connection
    $conn = mysqli_connect('localhost','root','','registrationform');
    if ($conn->connect_error) {
        die('Connection Failed :'. $conn->connect_error);
    }else
    
    {
        $stmt = $conn->prepare
        
        ("insert into registrationform(
        firstname, lastname, personaldateofbirth, 
        personalplaceofbirth, personalcontact, 
        ghanacardnumber, ghanacardissuedate, ghanacardexpirydate, 
        maritalstatus, spousename, spousedateofmarriage, spouseplaceofmarriage,
        spouseaddress, spousehouseaddress, spousedigitaladdress,
        spousemailingaddress, spouseemail, spousenativelanguage,
    
    
        nameoflastschoolattended, addressoftheschool, dateyoustarttheschool,
        dateofcompletionofschool, dateofstartingthework, 
        employment, dateofstopping, schoolcontact,

        wifename, wifedateofbirth, wifeplaceofbirth, 
        wifecontact, wifeoccupation, childrenname, 
        childrendateofbirth, sex,
        mothername, motherdateofbirth, motherhouseaddress,
        motheroccupation, mothercontact, ifdeceasedmother,
        fathername, fatherdateofbirth, fatherhouseaddress, 
        fatheroccupation, fathercontact, ifdeceasedfather
        )

        values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,
                ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("ssssssi", $firstname, $lastname, $personaldateofbirth, $personalplaceofbirth,  
                $personalcontact, $ghanacardnumber, $ghanacardissuedate, $ghanacardexpirydate, $maritalstatus, 
                $spousename, $spousedateofmarriage, $spouseplaceofmarriage, $spouseaddress, $spousehouseaddress, 
                $spousedigitaladdress, $spousemailingaddress, $spouseemail, $spousenativelanguage, 
                
                // Education Details
                $nameoflastschoolattended, $addressoftheschool, $dateyoustarttheschool, 
                $dateofcompletionofschool, $employment, $dateofstartingthework,
                $dateofstopping, $schoolcontact, 
            
                //family details
                $wifename, $wifedateofbirth, $wifeplaceofbirth, $wifecontact, 
                $wifeoccupation, $childrenname, $childrendateofbirth, $sex,
                $mothername, $motherdateofbirth, $motherhouseaddress,
                $motheroccupation, $mothercontact, $ifdeceasedmother,
                $fathername,$fatherdateofbirth, $fatherhouseaddress, 
                $fatheroccupation, $fathercontact, $ifdeceasedfather);

                $stmt->execute();
                echo "registration successful";
                $stmt->close();
                $conn->close();
    }

/*

&lt;?php $servername = "localhost"; 
$username = "username"; $password = "password"; <br> 

// Create connection $conn = new mysqli($servername, $username, $password); <br> 

// Check connection if ($conn->connect_error) 
{ die("Connection failed: " . $conn->connect_error); } echo "Connected successfully"; ?&gt; </code> 
<h3>MySQLi (object-oriented)</h3> <code> &lt;
    ?php $servername = "localhost"; 
    $username = "username"; 
    $password = "password"; 
    <br> try { $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password); 
        // set the PDO error mode to exception $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
        echo "Connected successfully"; 
    } catch(PDOException $e) 
    { echo "Connection failed: " . $e->getMessage(); } ?&gt; </code>

<em>I recommend that you use PDO</em>