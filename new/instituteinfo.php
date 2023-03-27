<?php
    ob_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php
        if(isset($_GET['data'])){
            $data = $_GET['data'];
            switch($data){
                //About Institute
                case "aboutrgukt":
                    echo "About Rgukt";
                    break;
                case "vam":
                    echo "Vision and Mission";
                    break;
                case "cl":
                    echo "campus life";
                    break;
                case "es":
                    echo "education system";
                    break;
                case "gc":
                    echo "governing council";
                    break;
                case "os":
                    echo "organizational structure";
                    break;
                case "rti":
                    echo "right to act information";
                    break;
                case "pg":
                    echo "photo gallery";
                    break;
                //Administration
                case "chancellor":
                    echo "Chancellor";
                    break;
                case "VC":
                    echo "Vice Chancellor";
                    break;
                case "director":
                    echo "Director";
                    break;
                case "AO":
                    echo "Administrative Officer";
                    break;
                case "DSW":
                    echo "Dean Student Welfare";
                    break; 
                case "FO":
                    echo "Finance Officer";
                    break;  
                case "COE":
                    echo "Controller of Examinations";
                    break;              
                case "coordinators":
                    echo "Coordinators";
                    break;  
                //Academics
                case "deanA":
                    echo "Dean Academics";
                    break;    
                case "APro":
                    echo "Academic Programs";
                    break;
                case "calenA":
                    echo "Academic Calender";
                    break;
                case "curric":
                    echo "Curriculum";
                    break;
                case "regulations":
                    echo "Academic Regulations";
                    break;
                case "alldept":
                    echo "All Departments";
                    break;
                //departments of engineering
                case "csedept":
                    echo "CSE Department";
                    break;
                case "ecedept":
                    echo "ECE Department";
                    break;
                case "civildept":
                    echo "Civil Department";
                    break;
                case "eeedept":
                    echo "EEE Department";
                    break;
                case "mechdept":
                    echo "Mech Department";
                    break;
                case "chemicaldept":
                    echo "Chemical Department";
                    break;
                case "mmedept":
                    echo "MME Department";
                    break;
                //departments of humanities
                case "englishdept":
                    echo "English Department";
                    break;
                case "telugudept":
                    echo "Telugu Department";
                    break;
                case "fineartsdept":
                    echo "Fine arts Department";
                    break;
                case "librarydept":
                    echo "Library Department";
                    break;
                case "pyogadept":
                    echo "Physical & Yoga Department";
                    break;
                case "managementdept":
                    echo "Management Department";
                    break;
                //departments of humanities
                case "chemistrydept":
                    echo "Chemistry Department";
                    break;
                case "physicsdept":
                    echo "Physics Department";
                    break;
                case "mathsdept":
                    echo "Maths Department";
                    break;
                case "itdept":
                    echo "IT Department";
                    break;
                //Grievance
                case "womenC":
                    echo "Women Cell";
                    break;   
                case "scst":
                    echo "SC St Cell";
                    break;   
                case "antiR":
                    echo "Anti Ragging Cell";
                    break; 
                //others
                case "consultancy":
                    echo "Consultancy";
                    break; 
                case "contactus":
                    echo "Contact Us";
                    break;  
                case "rguktE":
                    echo "Rgukt Events";
                    break;
                case "imagegal":
                    echo "Image Gallery";
                    break;
                //notifications and tenders 
                case "tenders":
                    echo "Tenders";
                    break;
                case "news_updates":
                    echo "News, Updates and Events";
                    break;
                //others- sub events
                case "revent1":
                    echo "Rgukt Events-1";
                    break;                
                default:
                   echo "RGUKT ONGOLE";
            }
        }
         ?>

    </title>
    
<!-- ================ Bootstrap ================ -->
<?php 
include_once 'bootstrap.php';
?>
<!-- ================ CSS FILE ================ -->
<style>
    <?php include 'style.css' ?>;     
</style>


</head>
<body>
    <?php  include_once 'nav.php';  ?>
    <main>
        <?php
            if(isset($_GET['data'])){
                $data = $_GET['data'];
                switch($data){
                    //aboutinstitute
                    case "aboutrgukt":
                        include_once 'aboutinstitute_/aboutrgukt.php';
                        break;
                    case "vam":
                        include_once 'aboutinstitute_/visionmission.php';
                        break;
                    case "cl":
                        include_once 'aboutinstitute_/campuslife.php';
                        break;
                    case "es":
                        include_once 'aboutinstitute_/educationsystem.php';
                        break;
                    case "gc":
                        include_once 'aboutinstitute_/governingcouncil.php';
                        break;
                    case "os":
                        include_once 'aboutinstitute_/organizationstrut.php';
                        break;
                    case "rti":
                        include_once 'aboutinstitute_/rti.php';
                        break;
                    case "pg":
                        include_once 'aboutinstitute_/photogallery.php';
                        break;
                    //administration
                    case "chancellor":
                        include_once 'administration_/chancellor.php';
                        break;
                    case "VC":
                        include_once 'administration_/vicechancellor.php';
                        break;
                    case "director":
                        include_once 'administration_/director.php';
                        break;
                    case "AO":
                        include_once 'administration_/administrativeofficer.php';
                        break;  
                    case "DSW":
                        include_once 'administration_/deanstudentwelfare.php';
                        break;  
                    case "FO":
                        include_once 'administration_/financeofficer.php';
                        break;   
                    case "COE":
                        include_once 'administration_/controllerofexaminations.php';
                        break;   
                    case "coordinators":
                        include_once 'administration_/coordinators.php';
                        break;  
                    //Academics
                    case "deanA":
                        include_once 'academics_/deanacademics.php';
                        break;     
                    case "APro":
                        include_once 'academics_/academicprograms.php';
                        break;
                    case "calenA":
                        include_once 'academics_/acacalender.php';
                        break;
                    case "curric":
                        include_once 'academics_/curriculum.php';
                        break; 
                    case "regulations":
                        include_once 'academics_/regulations.php';
                        break;
                    case "alldept":
                        include_once 'academics_/alldept.php';
                        break; 
                    //departments of Engineering
                    case "csedept":
                        include_once 'academics_/cse.php';
                        break; 
                    case "ecedept":
                        include_once 'academics_/ece.php';
                        break; 
                    case "civildept":
                        include_once 'academics_/civil.php';
                        break; 
                    case "eeedept":
                        include_once 'academics_/eee.php';
                        break; 
                    case "mechdept":
                        include_once 'academics_/mech.php';
                        break; 
                    case "chemicaldept":
                        include_once 'academics_/chemical.php';
                        break; 
                    case "mmedept":
                        include_once 'academics_/mme.php';
                        break; 
                    //departments of humanities
                    case "englishdept":
                        include_once 'academics_/english.php';
                        break; 
                    case "telugudept":
                        include_once 'academics_/telugu.php';
                        break; 
                    case "fineartsdept":
                        include_once 'academics_/finearts.php';
                        break; 
                    case "librarydept":
                        include_once 'academics_/library.php';
                        break; 
                    case "pyogadept":
                        include_once 'academics_/pyoga.php';
                        break; 
                    case "managementdept":
                        include_once 'academics_/management.php';
                        break; 
                    //departments of Sciences
                    case "chemistrydept":
                        include_once 'academics_/chemistry.php';
                        break; 
                    case "physicsdept":
                        include_once 'academics_/physics.php';
                        break; 
                    case "mathsdept":
                        include_once 'academics_/maths.php';
                        break; 
                    case "itdept":
                        include_once 'academics_/it.php';
                        break; 
                    //Grievance
                    case "womenC":
                        include_once 'grievance_/womencell.php';
                        break; 
                    case "scst":
                        include_once 'grievance_/scstcell.php';
                        break; 
                    case "antiR":
                        include_once 'grievance_/antiragging.php';
                        break; 
                    //others
                    case "consultancy":
                        include_once 'others/consultancy.php';
                        break; 
                    case "contactus":
                        include_once 'others/contactus.php';
                        break; 
                    case "rguktE":
                        include_once 'others/rguktevents.php';
                        break; 
                    case "imagegal":
                        include_once 'Galleries/imagegallery.php';
                        break; 
                    //notifications and tenders 
                    case "tenders":
                        include_once 'others/tenders.php';
                        break;
                    case "news_updates":
                        include_once 'others/news_updates.php';
                        break;
                    //others- sub events
                    case "revent1":
                        include_once 'others/revent1.php';
                        break; 
                    default:
                       header("Location: index.php");
                       exit();
                }
            }else{
               header("Location: index.php");
               exit();
            }
            
        ?>
    </main>
    <?php  include_once 'footer.php';  ?>
    <!-- ================ owl carousals and js ================ -->
    <?php
    include 'owlcarousalsjs.php';
    ?>
</body>
</html>