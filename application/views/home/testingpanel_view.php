    <section id="testingpanel">
      <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h2 class="text-center">Primary Rise Analysis</h2>
			<br/>
            	<!--
				<img id="thirty5percent" src="<?php echo base_url()?>images/winProgressBar.png" style="display: none;">
					-->		
							<table class="table table-striped">
								<tr>
									<th width="200px"> Iridium </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_iridium" style="background: green ; height: 20px; width: 0px">  </div> <img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="iridiumok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary text-right" id="iridium"> Iridium Check </button></td>
								</tr>
								
								<tr style="display:none" id="electromagneticrow">
									<th style="width: 274px;" width="274px"> Electro Magnetic </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_electromagnetic" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="electromagneticok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="electromagnetic" > E.Magnetic Check </button></td>
								</tr>
								
								<tr style="display:none" id="Heliumrow">
									<th> Helium</th> 
									<td> <div class="outerdiv">
											<div id="progressbar_Helium" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Heliumok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="Helium" > Helium Check </button></td>
								</tr>
								
								 
								<tr style="display:none" id="Argonrow">
									<th> Argon</th> 
									<td> <div class="outerdiv">
											<div id="progressbar_Argon" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Argonok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="Argon" > Argon Check </button></td>
								</tr>
								
								
								<tr style="display:none" id="Magneticrow">
									<th> Magnetic </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_Magnetic" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Magneticok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="Magnetic" > Magnetic Check </button></td>
								</tr>
								
									
								<tr style="display:none" id="radiumrow">
									<th> Radium  </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_radium" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Radiumok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="radium" > Radium Check </button></td>
								</tr>
								
						
								
								<tr style="display:none" id="uraniumrow">
									<th> Uranium  </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_uranium" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="uraniumrok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="uranium" > Uranium Check </button></td>
								</tr>
								
								<tr style="display:none" id="Platinumrow">
									<th> Platinum   </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_Platinum" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Platinumok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="Platinum" > Platinum Check </button></td>
								</tr>
								
								<tr style="display:none" id="Radiationrow">
									<th> Radiation   </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_Radiation" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Radiationok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="Radiation" > Radiation Check </button></td>
								</tr>
	
								
								
								
								<tr style="display:none" id="lithiumrow">
									<th> Lithium </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_lithium" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Lithiumok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="lithium" > Lithium Check </button></td>
								</tr>
								
								<tr style="display:none" id="Nucleusrow">
									<th> Nucleus </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_lithium" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Nucleusok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="Nucleus" > Nucleus Check </button></td>
								</tr>
								
								<tr style="display:none" id="Redonrow">
									<th> Redon </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_Redon" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Redonrowok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="Redon" > Redon Check </button></td>
								</tr>
								
								
								<tr style="display:none" id="Zeonrow">
									<th> Zeon </th> 
									<td> <div class="outerdiv">
											<div id="progressbar_Zeon" style="background: green ; height: 20px; width: 0px"> </div>
											<img src="<?php echo base_url()?>images/okmark.png" class="okmark" id="Zeonok" style="display: none">
										</div>
									</td>
									<td> <button class="btn btn-primary pull-right" id="Zeon" > Zeon Check </button></td>
								</tr>
								
								
								
								
							</table>
							
							<div style="display:none" id="result_show">
									<center>
									<a href="<?php echo base_url();?>result_file/positive.pdf" class="btn btn-primary" target="blank"> RESULT PRINT PDF </a>
										</center>
							</div>		
          </div>
        </div>
      </div>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script>
 var baseUrl = "<?php echo base_url();?>sound/";
//  var audio = ["beep-01a.mp3", "beep-02.mp3", "beep-03.mp3"];
  var audio = ["okay.mp3","notokay.mp3"];


</script>

<script src="<?php echo base_url();?>customjs/positive.js"></script>

<!--https://www.youtube.com/watch?v=5bPUZFgbn3A-->