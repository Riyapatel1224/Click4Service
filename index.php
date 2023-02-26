<?php include "mheader.php"; ?>
    <div class="container-fluid p-0 m-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" style="height: 100vh;" src="images/header1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 100vh;" src="images/header2.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 100vh;" src="images/header3.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" style="height: 100vh;" src="images/header4.jpg" alt="First slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <section class="jumbotron text-center mb-0 text-white rounded-0" id="about" style="height: 60vh;background-color: #030116">
        <div class="container">
            <h1 class="jumbotron-heading">About Our College</h1>
            <p class="lead">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>            
        </div>
    </section>

    <div class="container-fluid pt-2" id="event">
        <h3 class="text-center">Services</h3>
        <div class="row">
        <?php
            foreach(allrecords("services") as $map) {
             $cat = single("category", "id='{$map["catid"]}'");
        ?>
        <div class="col-md-4">
            <div class="card mb-4 box-shadow">
                <img class="card-img-top" style="height:200px;" src="services/<?= $map["img"] ?>" data-holder-rendered="true">
                <div class="card-body">
                    <h5><?= $cat["name"] ?></h5>                    
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="bookservice.php?id=<?= $map["id"] ?>" class="btn btn-sm btn-outline-primary">Book Service</a>                      
                        </div>                    
                    </div>
                </div>
            </div>
        </div>
        <?php }
        ?>
    </div>
</div>


<div class="container-fluid text-white" id="contact" style="background-color: #030116;height:500px;">
    <h3 class="text-center py-3">Contact Us</h3>
    <div class="row justify-content-center">
        <div class="media-container-column col-lg-8 p-3" data-form-type="formoid">                   
            <form class="mbr-form" method="post" data-form-title="Mobirise Form"><input type="hidden" data-form-email="true" value="zdGVBcNRThcdWUUfI+3PsLnnLtHc8JIdEhub3sFJZu3mJPkE6oxv5FmU79KVvaLjKSmEfsOBbKYj1Cps8hm2o1hmKtkhiOdHe4oDrPZiHdR0Yvomv7W9ZOtj6J4piMeE">
                <div class="row row-sm-offset">
                    <div class="col-md-4 multi-horizontal" data-for="name">
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="name-form1-2w">Name</label>
                            <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-2w">
                        </div>
                    </div>
                    <div class="col-md-4 multi-horizontal" data-for="email">
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="email-form1-2w">Email</label>
                            <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-2w">
                        </div>
                    </div>
                    <div class="col-md-4 multi-horizontal" data-for="phone">
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-2w">Phone</label>
                            <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-2w">
                        </div>
                    </div>
                </div>
                <div class="form-group" data-for="message">
                    <label class="form-control-label mbr-fonts-style display-7" for="message-form1-2w">Message</label>
                    <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-2w"></textarea>
                </div>

                <span class="input-group-btn">
                    <button href="" type="submit" class="btn btn-primary btn-form display-4">SEND FORM</button>
                </span>
            </form>
        </div>
    </div>
</div>        
<?php include "mfooter.php"; ?>