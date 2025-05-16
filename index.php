<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <style>
            section{
            width: 100vw;
            height: 100vw;
            padding: 50px
            }

            .cl_white{
                color: white;
            }
            img{
                width: 300px;
                transition: opacity 1s ease-in-out;
            }
            img:hover{
                opacity: .10;
            }
            .col-text{
                -webkit-column-count:3 ;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target=".navbar">
        <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <ul class="nav navbar-nav">
                <li><a href="#home">Home</a></li>
                <li><a href="#work">What I do</a></li>
                <li><a href="#about">What about Me</a></li>
                <li><a href="#contact">Contact me</a></li>
            </ul>
        </nav>
        <section id="home" style="background: url(image/header1.jpg);background-size: 100% 100%;" class="cl_white text-center">
            <h1>My Portfolio</h1>
            <p class="lead">Welcome to my world, The life of a Programmer</p>
            <button class= btn btn-default>Contact Me</button>
        </section>

        <section id="work" class="container">
            <div class="page-header">
                <h1 class="text-center">My Work</h1>
            </div>
            <div class="text-center">
               <img src="image/port1.jpg" class="img-thumbnail"/>
               <img src="image/port2.jpg" class="img-thumbnail"/>
               <img src="image/port3.jpg" class="img-thumbnail"/>
               <img src="image/port4.jpg" class="img-thumbnail"/>
               <img src="image/port5.jpg" class="img-thumbnail"/>
               <img src="image/port6.jpg" class="img-thumbnail"/>
            </div>
        </section>

        <section id="about" class="container">
            <h2 class="text-center">My Skills</h2>
                <div class="col-text">On the other hand, we denounce with righteous indignation 
                    and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by
                    desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to 
                    those who fail in their duty through weakness of will, which is the same as saying through shrinking from
                    toil and pain. </div><br/>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>PHP Programmer</h4>
                            </div>
                            <div class="panel-body">
                                <img src="image/me.jpg" class="img-circle center-block">
                                <p class="lead text-center">I Do PHP Programming </p>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h4>Web Designer</h4>
                            </div>
                            <div class="panel-body">
                                <img src="image/me2.jpg" class="img-circle center-block">
                                <p class="lead text-center">I Do CSS Bootstrap Designing </p>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="contact" style="background: silver">
            <div class="page-header">
                <h2 class="text-center">Contact Me</h2>
            </div>  
            <form class="col-md-5 col-md-offset-4">
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Name" type="text"/>
                </div> 
                <div class="form-group">
                    <input class="form-control" placeholder="Enter Your Email" type="email"/>
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Subject" type="text"/>
                </div> 
                <div class="form-group">
                    <textarea class="form-control rows="10">Comments</textarea>
                </div>
                <div class="form-group">
                    <input class="btn btn-success btn-block"type="submit"/>
                </div>
            </form>
        </section>


    </body>
  


    


</html>