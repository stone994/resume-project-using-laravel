<x-layout>
    <x-slot name='title'>Contact Me</x-slot>
    <x-slot name='content'>
        
        <div class="container py-5">
            <div class="row text-white mb-5">
                            <div class="text-center mb-5">
                            <h1 class="text-warning mb-5 text-center">Contact Me</h1>
                <p class="mx-auto mb-5">
If my skills, dedication, and passion for web development align with your project or organization’s needs, I would be excited to discuss how I can contribute. Whether it's a freelance project, internship, or full-time opportunity, I am always open to meaningful collaborations.

                </p>
                                <div class="bg-success mx-auto" style="width: 60px; height: 3px; border-radius: 2px;"></div>

            </div>
                
                <div class="col-sm-9 mb-5">
                    <form action="">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="firstName">First Name:</label>
                                <input type="text" class="form-control mt-2" id="firstName" placeholder="Hafiza">
                            </div>
                            <div class="col-md-6">
                                <label for="lastName">Last Name:</label>
                                <input type="text" class="form-control mt-2" id="lastName" placeholder="Buheesa">
                            </div>
                        </div>
                         <div class="row g-3">
                            <div class="col-md-6">
                                <label for="number">Mobile Number:</label>
                                <input type="number" class="form-control mt-2" id="number" placeholder="+92">
                            </div>
                            <div class="col-md-6">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control mt-2" id="inputemail" required placeholder="hafizabuheesa@gmail.com">
                            </div>
                        </div>
                         <div class="row g-3">
                            <div class="col-md-12">
                                <label for="textarea">Enter Message:</label>
                            <textarea class="form-control mt-2" id="inputtextarea" cols="30" rows="10" required placeholder="Write Your Message Here....."></textarea>
                            </div>
                            
                        </div>
                        <button class="btn btn-primary mt-1" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <ul  class="list-unstyled">
                        <li>
                            <i class="fas fa-map-marker-alt fa-2x i-color"></i>
                            <p>Lahore,Pakistan</p>
                        </li>
                        <li>
                            <i class="fas fa-phone mt-4 fa-2x i-color"></i>
                            <p>+920000000</p>
                        </li>
                         <li>
                            <i class="fas fa-envelope  mt-4 fa-2x i-color"></i>
                            <p>contact@gmail.com</p>
                        </li>
                    </ul>
                    <div class="text-center">
                            <a href="#" class="btn btn-outline-success rounded-circle  shadow-sm" style="width: 45px; height: 45px;" title="GitHub">
                                <i class="fa-brands fa-github fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success rounded-circle  shadow-sm" style="width: 45px; height: 45px;" title="LinkedIn">
                                <i class="fa-brands fa-linkedin-in fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success rounded-circle  shadow-sm" style="width: 45px; height: 45px;" title="Medium">
                                <i class="fa-brands fa-medium fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success rounded-circle  shadow-sm" style="width: 45px; height: 45px;" title="Twitter-X">
                                <i class="fa-brands fa-x-twitter fs-5"></i>
                            </a>
                        </div>
                </div>
                
            </div>
        </div>


        
    </x-slot>
</x-layout>