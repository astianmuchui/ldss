
            <?php
                require "../../server/db_pure.php";
                require "../../server/check_login.php";
            ?>
         
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="../../css/font-awesome.min.css">
                <script src="../../javascript/font_awesome_main.js"></script>
                <link rel="stylesheet" href="../../css/min.css">
                <link rel="stylesheet" href="../../css/hover.css">

                <title>James blunt | Portal</title>
            </head>
            <body>
                <header>
                    <div class="name">
                        School Name
                    </div>
            
                    <nav>
                        <ul>

                            <li><a href="../../logout/"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                            <li><a href="#"><i class="fas fa-long-arrow-alt-left"></i> Back to website</a></li>
                        </ul>
                    </nav>
                </header>
                <main>
                    <section class="sideBar">
                        <li> <i class="fas fa-user fa-3x"></i>  </li>
                        <li><a href="#" style="text-transform: uppercase;">James blunt</a></li>
                        <li> <a href="../../suggestions/?id=16" class="hvr-underline-from-left"><i class="fas fa-box"></i> Make suggestion</a></li>
                        <li> <a href="../../requests/?id=16" class="hvr-underline-from-left"><i class="fas fa-question-circle"></i> Make request</a></li>
                        <li> <a href="#" class="hvr-underline-from-left"><i class="fas fa-long-arrow-alt-left"></i> Back to website</a></li>
                        <li> <a href="../../control/edit_email.php?id=16" class="hvr-underline-from-left"><i class="fas fa-envelope"></i> Change Email</a></li>
                        <li> <a href="../../questions/?id=16" class="hvr-underline-from-left"><i class="far fa-question-circle"></i> Ask question</a></li>
                        <li> <a href="../../exams/?id=16" class="hvr-underline-from-left"><i class="fas fa-file"></i> My Exams</a></li>
                        <li> <a href="../../assignments/?id=16" class="hvr-underline-from-left"><i class="fas fa-file"></i> My Assignments</a></li>
                        
                        <li> <a href="../../message/?id=16" class="hvr-underline-from-left"><i class="fas fa-paper-plane"></i> Send Message</a></li>
                        <li> <a href="../../logout" class="hvr-underline-from-left"><i class="fas fa-sign-out-alt" ></i> Logout</a></li>
                    </section>
            
                <section class="cards-container">
            
                    <div class="intro">
            
                        <img src="../../images/avatar.png" alt="" height="200" width="200">
                        
                        <h5><Span>Student Name :</Span> James blunt </h5>
                        <h5><span>Adm no :</span> 12688</h5>
            
                    </div>
            
                    <div class="breadcrumbs">
                        <div class="breadcrumb">
                            <span>Messages :</span> <small> 2</small>
                        </div>
                        <div class="breadcrumb">
                            <span>Announcements :</span> <small> 2</small>
                        </div>
                        <div class="breadcrumb">
            
                            <span>Assignments :</span> <small> <?php require "../../server/assignment_numbers.php";?></small>
                        </div>
                        <div class="breadcrumb">
                             <small> blunt@gmail.com</small>
                        </div>
                        <div class="breadcrumb">
                            <span>Exams :</span> <small> <?php require "../../server/exam_numbers.php";?></small>
                        </div>
                    </div>
                </section>
                </main>
                
            </body>
            </html>
            