<x-layout>
    <x-slot name='title'>Service</x-slot>
    <x-slot name='content'>
        <div class="container py-5 text-white">
            <div class="text-center mb-5">
                <h1 class="display-5 fw-bold text-warning">What I Offer</h1>
                <p class="text-light opacity-75 fs-5">Services tailored for scalable software ecosystems</p>
                <div class="bg-success mx-auto" style="width: 60px; height: 3px; border-radius: 2px;"></div>
            </div>

            <div class="row g-4">
                
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 bg-transparent border border-secondary text-center p-4 rounded-4 shadow-sm">
                        <div class="text-success display-5 mb-3">
                            <i class="fa-solid fa-laptop-code"></i>
                        </div>
                        <h4 class="h5 fw-bold text-light">Backend Web App Development</h4>
                        <p class="text-muted small mb-0">
                            Building reliable server-side systems and responsive multi-tenant platforms using core PHP and the modern Laravel framework.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 bg-transparent border border-secondary text-center p-4 rounded-4 shadow-sm">
                        <div class="text-success display-5 mb-3">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <h4 class="h5 fw-bold text-light">RESTful API Architecture</h4>
                        <p class="text-muted small mb-0">
                            Designing clean, secure, and well-structured JSON API endpoints with full request validation and authentication layers.
                        </p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 bg-transparent border border-secondary text-center p-4 rounded-4 shadow-sm">
                        <div class="text-success display-5 mb-3">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <h4 class="h5 fw-bold text-light">Relational Database Design</h4>
                        <p class="text-muted small mb-0">
                            Structuring optimized MySQL tables, schema migrations, complex data relationships, and fine-tuning raw query workflows.
                        </p>
                    </div>
                </div>

            </div>

        </div>
       </div>
    </x-slot>
</x-layout>
