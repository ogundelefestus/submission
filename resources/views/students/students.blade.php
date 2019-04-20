@extends('layout.master')
@section('title')
OASM
@endsection
@section('content')


<div class="page-content" style="margin-top:90px;">
    	<div class="row">
		  <div class="col-md-2">
        <br> <br>
           <br> 
           
		  	<div class="sidebar content-box" style="display: block;">
          
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.html"><i class="glyphicon glyphicon-home"></i>Home</a></li>
                    <li><a href="student.html"><i class="glyphicon glyphicon-calendar"></i>Students Entry</a></li>
                    <li><a href="view.html"><i class="glyphicon glyphicon-stats"></i>View Entry</a></li>
                    <li><a href="lecturer.html"><i class="glyphicon glyphicon-list"></i>Lecturer Entry</a></li>
                    <li><a href="score.html"><i class="glyphicon glyphicon-record"></i>Score</a></li>
                   <!-- <li><a href=".html"><i class="glyphicon glyphicon-pencil"></i></a></li>
                    <li><a href="forms.html"><i class="glyphicon glyphicon-tasks"></i></a></li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i> Pages
                            <span class="caret pull-right"></span>
                         </a>-->
                         <!-- Sub menu -->
                         <!-- <ul>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="signup.html">Signup</a></li>
                        </ul>
                    </li>
                </ul>-->
             </div>
          </div>
          <form>
		  <div class="col-md-10"  style="margin-top:50px;">
		      	<div class="row">
		  		<div class="col-md-6">
		  			<div class="conten-box-large">
		  				<div class="panel-heading">
                     <div class="contanier">  
                    <div class="row">
                                <div class="col-12">
                                    <div class="">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">File:</h4>
                                            
            
                                            <div class="m-b-30">
                                                <form action="#" class="dropzone">
                                                    <div class="fallback">
                                                        <input name="file" type="file" multiple="multiple">
                                                    </div>
                                                   
                                                    

                                               
                                            </div>
                                           
            
                                            <!--<div class="text-center m-t-20">
                                                <button type="button" class="btn btn-primary waves-effect waves-light">Send</button>
                                            </div>-->
                                            
                                                    <br>
                                                    <p>File Title:<input type="text" name="file-title"/></p>


                                                    <div>
                                                    <p>Lecturer's Name:				
			  					
			  							<select class="selectpicker">
										    <optgroup label="Picnic">
										      <option>Mustard</option>
										      <option>Ketchup</option>
										      <option>Relish</option>
										    </optgroup>
										    <optgroup label="Camping">
										      <option>Tent</option>
										      <option>Flashlight</option>
										      <option>Toilet Paper</option>
										    </optgroup>
                                          </select>
</p>
			  						
                                  </div>
                                  

                                  
                                  
                                  <div>
                                                    <p>Facuties Name:				
			  					
			  							<select class="selectpicker">
										    <optgroup label="Picnic">
										      <option>Mustard</option>
										      <option>Ketchup</option>
										      <option>Relish</option>
										    </optgroup>
										    <optgroup label="Camping">
										      <option>Tent</option>
										      <option>Flashlight</option>
										      <option>Toilet Paper</option>
										    </optgroup>
                                          </select>
</p>
			  						
			  					</div>
                  <br>
                  <br>
                  
<button type="button" class="btn btn-primary " disabled>Submit</button>
            
            
                                        </div>
                                    </div>
                                </div> 
                           </div>
 </div>

		  					<!--<img src="http://researchandadvancement.nouedu.net/sites/default/files/NounAbujaGate.jpg" alt="" height="450" style="margin-bottom:50px;  width:1075px;">-->
		  				
                      </div>
</form>


		  
		  
		  </div>
		</div>
    </div>
    </div>
</div>
</div>



                       
      

<!--<div class="contanier" style="margin-bottom:30px;">
<h2 color="black">What do you know about OASM?</h2>
<p style="font-weight:bold;">An online assignment handling is a system contained within the Module virtual learning environment. The functionality of the standard assignment handling module has been extended to cater for all the Department's needs in terms of receiving assignments from students, making them <br>available to tutors to mark, returning grades, comments and marked work to students and keeping Registry and course administrators informed at all stages of the process. Extension requests are an integral part of the system.

Universities, Polytechnics and colleges of education are <br>considered the main provider of knowledge in various fields. Various courses of studies are taught in institutions, covering several fields including applied Sciences, Math, Computer, Human Resource, and Accounting. Most courses at universities consist of theoretical as well as practical subject matter. To evaluate the level of understanding and degree of comprehension among students, assignments are often given.<br>
Assignments are submitted by students either individually or in groups. Assignment management involves collecting, marking, and redistributing to students. Tregobov (1998) breaks the process down into four stages: submission, recording, marking, and return. Online assignment submission and management (OASM) involves the use of the World-Wide Web, the Internet and computers to aid this process (Jones, 2003). With traditional assignment submission system, lots of problems arise especially when the students have to submit the answers of the assignment to the lecturer. There may be problems due to distance, time, or format of the assignment (written or printed). Also every learning process requires administrative support. Much of this administrative support is to some degree transparent but if the latter is not well organized it could disrupt the flow of learning between students and the staff.
As the educational world is moving faster and becoming more competitive, almost every university started to use an online submission system, or newer technologies to facilitate their task, to have more time, and to be in pace with this fast moving IT world.</p>

</div>-->
<br>
<br>
<br>
<br>
<br>
<br>





    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>


        @endsection