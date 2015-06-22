@extends('layouts.master')
<head>
@section('title')
About Me
@stop
</head>
@section('about')  
<body>

<!--==============================content=================================-->
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-7 reserve_table">
                    <h2>My Short Bio</h2>
                    <figure><img src="img/page2_img1.jpg" alt=""></figure>
                    <h3>omnis iste natus error sit voluptatem accusantium doloremquel</h3>
                    <p class="m_bot2">Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. </p>
                    <p>Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at, cursus nec, luctus a, lorem. Maecenas tristique orci ac sem. Duis ultricies pharetra magna. Donec accumsan malesuada orci. Donec sit amet eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Mauris fermentum dictum magna.</p>
                    
                    
                    <h2 class="pad_top1">My Experience</h2>
                    <h3>iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae.</h3>
                    <p>Proin dictum elementum velit. Fusce euismod consequat ante. Lorem ipsum dolor sit amet, con
sectetuer adipiscing elit. Pellentesque sed dolor. Aliquam congue fermentum nisl. Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dol.</p>
                </div>
                
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-4 col-md-4 col-sm-4">
                    <h2>How I Work</h2>
                    <hr class="line2">
                    <p class="title5">Vivamus eget tincidunt lacus, eget dapibus pendisse at tempus quam.</p>
                    <h2 class="pad_bot1">Hire Me Now</h2>
                        <form id="contact-form2" class="reservation-form">
                          <div class="success">Reservation form submitted! <strong>We will be in touch soon.</strong> </div>
                          <fieldset>
                            <div class="coll-1">
                              <div class="txt-form">Name<span></span></div>
                              <label class="name">
                                <input type="text" value="Name:"><br>
                                <span class="error">*This is not a valid name.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="coll-2">
                              <div class="txt-form">Email<span>:</span></div>
                              <label class="email">
                                <input type="email" value="E-mail:"><br>
                                <span class="error">*This is not a valid email address.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="coll-3">
                              <div class="txt-form">phone:</div>
                              <label class="arrival notRequired">
                                <input type="tel" value="Phone:"><br>
                                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="coll-4">
                              <div class="txt-form">phone:</div>
                              <label class="Length of stay notRequired">
                                <input type="tel" value="Fax:"><br>
                                <span class="error">*This is not a valid phone number.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="clear"></div>
                            <div>
                              <div class="txt-form">Comment<span>*</span></div>
                              <label class="message">
                                <textarea>Comments:</textarea><br>
                                <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
                            </div>
                            <div class="clear"></div>
                          </fieldset>
                          <div class="buttons-wrapper clearfix"><a href="#" class="btn-link btn-link2" data-type="submit">send<span></span></a><a href="#" class="btn-link btn-link2" data-type="reset">clear<span></span></a></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
</body>
@stop