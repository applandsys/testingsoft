	<section id="testing">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 mx-auto">
            <h2 class="text-center">Testing  Access</h2>
				<div class="row">
					<div class="col-lg-6 mx-auto">
					
					
					
					<!--
						you can substitue the span of reauth email for a input with the email and
						include the remember me checkbox
						-->
						<div class="container">
							<div class="card card-container">
								<!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
								<img id="profile-img" class="profile-img-card" src="<?php echo base_url();?>images/nasa-logo.svg" />
								<p id="profile-name" class="profile-name-card"></p>
								<?php 
									if($this->session->flashdata('msg')){
								?>
										<div class="alert alert-danger" role="alert">
 											 Nasa Not accept any Unauthorized User
										</div>
								<?php 

									}
								?>	
								<form class="form-signin" action="<?php echo base_url();?>welcome/login" method="POST">
									<span id="reauth-email" class="reauth-email"></span>
									<input name="accountid" type="password" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
									<input name="accountpass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
									<div id="remember" class="checkbox">
										<label>
											<input type="checkbox" value="remember-me"> Remember me
										</label>
									</div>
									<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Access in</button>
								</form><!-- /form -->
								
							</div><!-- /card-container -->
						</div><!-- /container -->
					
			
			   
					</div>
				</div>
          </div>
        </div>
      </div>
    </section>

    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>About this page</h2>
            <p class="lead">This is a great place to talk about your webpage. This template is purposefully unstyled so you can use it as a boilerplate or starting point for you own landing page designs! This template features:</p>
            <ul>
              <li>Clickable nav links that smooth scroll to page sections</li>
              <li>Responsive behavior when clicking nav links perfect for a one page website</li>
              <li>Bootstrap's scrollspy feature which highlights which section of the page you're on in the navbar</li>
              <li>Minimal custom CSS so you are free to explore your own unique design options</li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section id="services" class="bg-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Services we offer</h2>
            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut optio velit inventore, expedita quo laboriosam possimus ea consequatur vitae, doloribus consequuntur ex. Nemo assumenda laborum vel, labore ut velit dignissimos.</p>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact us</h2>
            <p class="lead">
			
						If you are not able to locate the information you are seeking on one of our websites, you may write to us at:
						NASA Headquarters
						300 E. Street SW, Suite 5R30
						Washington, DC 20546
						(202) 358-0001 (Office)
						(202) 358-4338 (Fax)
						or you can submit a question to Contact NASA.
			</p>
          </div>
        </div>
      </div>
    </section>