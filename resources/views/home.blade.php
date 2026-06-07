<x-layout>
    <x-slot name='title'>Home</x-slot>
    
    <x-slot name='content'>
        <div class="container py-5">
            <div class="row align-items-center g-5">
                
                <div class="col-lg-7 text-white">
                    <h1 class="display-4 fw-bold mb-2 text-warning">Hafiza Buheesa Shaheen</h1>
                    
                    <h2 class="h4 fw-semibold mb-4 text-light opacity-90">
                        I'm an Aspiring <span class="text-success">Laravel Developer</span>
                    </h2>
                    
                    <div class="opacity-75 pe-lg-4 text-justify">
                        <p class="mb-3">
                            I am an aspiring Backend Developer specializing in <strong>PHP</strong> and the <strong>Laravel framework</strong>, dedicated to building secure, scalable, and high-performance web applications. I thrive on translating complex structural logic into clean, maintainable, and efficient server-side architecture.
                        </p>   
                        
                    </div>

                    <div class="d-flex flex-wrap align-items-center gap-3 mt-4">
                        <a href="#" class="btn btn-success btn-lg rounded-pill fw-bold px-4 shadow">
                            Download CV
                        </a>
                        
                        
                    </div>
                    <div class="d-flex flex-wrap align-items-center gap-3 mt-5 pt-3 border-top border-secondary">
                        <span class="text-light fw-semibold fs-5">For Feedback:</span>
                        <a href="/login" class="btn btn-light rounded-pill fw-bold px-4 shadow-sm">
                            Login Here
                        </a>
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
                         
               