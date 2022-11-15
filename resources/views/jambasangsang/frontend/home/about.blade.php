<section id="about-part" class="pt-65">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="section-title mt-50">
                    <h5>@lang('Nosotros')</h5>
                    <h2>@lang('Bienvenidos a') {{ Config::get('settings.name') }} </h2>
                </div> <!-- section title -->
                <div class="about-cont">
                    <p>{{ Config::get('settings.about') }}</p>
                    <h6>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ratione accusantium reiciendis laudantium praesentium excepturi.</h6>
                    <a href="/" class="main-btn mt-55">@lang('LEER MÁS')</a>
                </div>
            </div> <!-- about cont -->
            <div class="col-lg-6 offset-lg-1">
            </div>
            
        </div> <!-- row -->
    </div> <!-- container -->
    <div class="about-bg">
        <img src="{{ asset('jambasangsang/frontend/images/about/bg-1.png') }}" alt="About">
    </div>
</section>
