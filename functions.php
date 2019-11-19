<?php
	
	
	
	function home() {
      
     
        echo '
          <div id="showcase">
                <div class="container">
                  <div class="showcase-content">
                    <h1><span class="text-primary">Enjoy</span> Your Stay</h1>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, eligendi laboriosam. Repellendus officia harum eaque.</p>
                    <a class="btn" href="?page=about">About Our Hotel</a>
                  </div>
                </div>
              </div>
          <section id="home-info" class="bg-dark">
              <div class="info-img"></div>
              <div class="info-content">
                <h2><span class="text-primary">The History</span> Of Our Hotel</h2>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Assumenda
                    aliquam dolor alias iste autem, quaerat magni unde accusantium qui
                    fuga placeat quidem quo pariatur, voluptatum, ea sequi? Corporis,
                    explicabo quisquam dolor placeat praesentium nesciunt mollitia quos
                    nobis natus voluptatum asperiores!
                </p>
                <a href="?page=about" class="btn btn-light">Read More</a>
              </div>
            </section>

            <section id="features">
              <div class="box bg-light">
                <i class="fas fa-hotel fa-3x"></i>
                <h3>Great Location</h3>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, omnis?</p>
              </div>
              <div class="box bg-primary">
                  <i class="fas fa-utensils fa-3x"></i>
                  <h3>Free Meals</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, omnis?</p>
              </div>
              <div class="box bg-light">
                  <i class="fas fa-dumbbell fa-3x"></i>
                  <h3>Fitness Room</h3>
                  <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut, omnis?</p>
              </div>
            </section>

          <div class="clr"></div>
     
      ';}

	function about() {
      echo ' <section id="about-info" class="bg-light py-3">
    <div class="container">
      <div class="info-left">
        <h1 class="l-heading"><span class="text-primary">About</span> Hotel</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam, explicabo dolore. Accusantium dignissimos similique, magnam ducimus cumque quo ad perspiciatis maiores quasi perferendis sed, ullam sit rem numquam quis itaque!</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A quam omnis delectus deserunt qui, quia consequuntur nesciunt ullam harum, soluta.</p>
      </div>
      <div class="info-right">
        <img src="./img/photo-2.jpg" alt="">
      </div>
      
    </div>
  </section>
  <div class="clr"></div>
  <section id="testimonials" class="py-3">
    <div class="container">
      <h2 class="l-heading">What our guests say</h2>
      <div class="testimonial bg-primary">
        <img src="./img/person-1.jpg">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel laboriosam iusto ipsum adipisci nihil quod illo molestiae maiores laborum cum! Quidem recusandae, aut enim beatae accusamus officiis dignissimos nihil minima excepturi accusantium repudiandae aliquam dolore blanditiis numquam, nisi amet, assumenda!</p>
      </div>
      <div class="testimonial bg-primary">
        <img src="./img/person-2.jpg">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel laboriosam iusto ipsum adipisci nihil quod illo molestiae maiores laborum cum! Quidem recusandae, aut enim beatae accusamus officiis dignissimos nihil minima excepturi accusantium repudiandae aliquam dolore blanditiis numquam, nisi amet, assumenda!  lorem100</p>
      </div>
    </div>
  </section>
         ';
    }
	function contact() {
      echo '
      <section id="contact-form" class="py-3">
		<div class="container">
			<h1 class="l-heading"><span class="text-primary">Contact</span> Us</h1>
			<p>Please fill out the form below to contact us</p>
			<form method="post" >
				<div class="form-group ">
					<label for="name">Name</label>
	          		<input type="text" name="name" id="name" required>
				</div>
				<div class="form-group py-2">
		          <label for="email">Email</label>
		          <input type="email" name="email" id="email" required>
		        </div>
		        <div class="form-group py-2">
		          <label for="message">Message</label>
		          <textarea name="message" id="message" required></textarea>
		        </div>
                <div id="alertOfPost">
                '?>
          			<? 
       			  
                  $link = mysqli_connect("shareddb-s.hosting.stackcp.net", "messages-3132350153", "0gwctwa4ud", "messages-3132350153");

                  if(mysqli_connect_error()){
                    print_r(mysqli_connect_error());
                    exit();
                  }
                    if($_POST["name"] && $_POST["email"] && $_POST["message"]) {
                     
                    $query = "INSERT INTO `messages` (`name`, `email`, `message`) VALUES ('".mysqli_real_escape_string($link, $_POST["name"])."', '".mysqli_real_escape_string($link, $_POST["email"])."',' ".mysqli_real_escape_string($link, $_POST["message"])."')";
                  if(mysqli_query($link, $query)) {
                      echo "<p class='success'>Your message was successfully sent</p>";

                    } else {
                      echo "<p class='error'>There were some problems, please try again later</p>"; 
                    }

                  }
       			 ?>
				<?
      		echo '
        		</div>
		        <button type="submit" class="btn" id="sendMessage">Submit</button>
			</form>

		</div>
	</section>
	<section id="contact-info" class="bg-dark">
    <div class="container">
        <div class="box">
            <i class="fas fa-hotel fa-3x"></i>
            <h3>Location</h3>
            <p>50 Main st, Boston MA</p>
          </div>
          <div class="box">
              <i class="fas fa-phone fa-3x"></i>
              <h3>Phone Number</h3>
              <p>(617) 555-5555</p>
          </div>
          <div class="box">
              <i class="fas fa-envelope fa-3x"></i>
              <h3>Email Address</h3>
              <p>frontdesk@hotelbt.co</p>
          </div>
    </div>
  </section>
      ';
    }
	

?>