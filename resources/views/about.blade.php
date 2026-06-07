<x-layout>
    <x-slot name='title'>About Me</x-slot>
    
    <x-slot name='content'>
        <div class="container py-5 text-white">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-warning">About Me</h1>
                <p class="text-light opacity-75 fs-5">I am a Backend / Laravel Developer and a Computer Science student with a strong passion for building secure, scalable, and efficient web applications. I specialize in PHP and Laravel framework.As a Computer Science student, I am constantly learning and improving my skills in backend development, API design, and database optimization. I am passionate about solving real-world problems through technology.</p>
                <div class="bg-success mx-auto" style="width: 60px; height: 3px; border-radius: 2px;"></div>
            </div>
            
            <div class="row align-items-center g-5">
                
                <div class="col-lg-7 text-white">
                    
                    <h2 class="h4 fw-semibold mb-4 text-light opacity-90">
                        I'm an Aspiring <span class="text-success">Laravel </span>
                    </h2>
                    
                    <div class="opacity-75 pe-lg-4 text-justify">
                        <p class="mb-3">
                            I am an aspiring Backend Developer specializing in <strong>PHP</strong> and the <strong>Laravel framework</strong>, dedicated to building secure, scalable, and high-performance web applications. I thrive on translating complex structural logic into clean, maintainable, and efficient server-side architecture.
                        </p>   
                        <p class="mb-3">
                            With a strong command of Object-Oriented Programming (OOP) principles, I also bring practical, foundational experience in <strong>C#</strong> and <strong>Python</strong>. This diverse language exposure enhances my logical problem-solving abilities and allows me to adapt quickly to evolving software environments.
                        </p>   
                        <p class="mb-4">
                            Career goals focus on mastering database optimization, RESTful APIs, and adopting modern DevOps practices. 
                        </p>
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3 mt-4">
                        <a href="#" class="btn btn-success btn-lg rounded-pill fw-bold px-4 shadow">
                            Download CV
                        </a>
                        
                        <div class="d-flex gap-2 align-items-center">
                            <a href="#" class="btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center p-0 shadow-sm" style="width: 45px; height: 45px;" title="GitHub">
                                <i class="fa-brands fa-github fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center p-0 shadow-sm" style="width: 45px; height: 45px;" title="LinkedIn">
                                <i class="fa-brands fa-linkedin-in fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center p-0 shadow-sm" style="width: 45px; height: 45px;" title="Medium">
                                <i class="fa-brands fa-medium fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-outline-success rounded-circle d-inline-flex align-items-center justify-content-center p-0 shadow-sm" style="width: 45px; height: 45px;" title="Twitter-X">
                                <i class="fa-brands fa-x-twitter fs-5"></i>
                            </a>
                        </div>
                    </div>

                    

                </div>

                <div class="col-lg-5 text-center">
                    <img src="{{ asset('images/pic1.jpg') }}" alt="Profile" 
                         class="img-fluid rounded-circle shadow-lg border border-secondary p-2" 
                         style="width: 380px; height: 380px; object-fit: cover;">
                </div>

            </div>
            
        </div>
    </x-slot>
</x-layout>