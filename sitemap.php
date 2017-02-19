<?php
include('header.php');
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['id']);
?>
<body>

    <?php include('navhead.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">


                        <li class="nav-header">Links</li>
                        <li><a href="index.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>

                        <li class="active"><a href="sitemap.php"><i class="icon-sitemap icon-large"></i>&nbsp;Site Map
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a></li>
                        <li><a href="contact.php"><i class="icon-envelope-alt icon-large"></i>&nbsp;Contact Us
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div> 
                            </a>                
                        </li>
                        
                    </ul>
                </div>

            </div>

            <div class="span9">

             

                <p><iframe width="860" height="390" frameborder="10" scrolling="no" marginheight="0" marginwidth="auto"
src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=PSG+College+Of+Technology,+Peelamedu,+Coimbatore,+Tamil+Nadu&amp;aq=2&amp;oq=PSG+peelamedu&amp;sll=11.042197,76.986507&amp;sspn=0.390206,0.676346&amp;ie=UTF8&amp;hq=PSG+College+Of+Technology,+Peelamedu,+Coimbatore,+Tamil+Nadu&amp;ll=11.024809,77.002826&amp;spn=0.012195,0.021136&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1404443310014108307&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=PSG+College+Of+Technology,+Peelamedu,+Coimbatore,+Tamil+Nadu&amp;aq=2&amp;oq=PSG+peelamedu&amp;sll=11.042197,76.986507&amp;sspn=0.390206,0.676346&amp;ie=UTF8&amp;hq=PSG+College+Of+Technology,+Peelamedu,+Coimbatore,+Tamil+Nadu&amp;ll=11.024809,77.002826&amp;spn=0.012195,0.021136&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1404443310014108307" style="color:#0000FF;text-align:left">View Larger Map</a></small>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
</div>
</div>






</body>
</html>


