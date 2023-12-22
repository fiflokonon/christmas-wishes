<div class="px_main_contact " id="ch_form">
    <div class="container align-content-center">
        <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="contact_wrapper wow slideleft" style="visibility: visible; animation-name: slideleft;" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: slideInLeft;">
                <h1 class="ice_heading text-center fadeInUp wow" data-wow-delay="300ms"
                    data-wow-duration="1500ms">Entrez votre message</h1>
                <div class="contact_form fadeInUp wow" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <form id="contactForm" class="contact-form wow fadeIn" data-toggle="validator" method="POST" action="{{ route('add_message') }}">
                        @csrf
                        <div class="form-group">
                            <input placeholder="Nom et prénoms" id="name" class="form-control" name="name"
                                   type="text" required="" data-error="Please enter your valid email address">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="form-group">
                                    <textarea name="message" placeholder="Entrez votre message" id="message" cols="20" rows="8"
                                              class="form-control" required=""
                                              data-error="Please enter your comments"></textarea>
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="contact_submit">
                            <button type="submit" id="submit" class="px_btn">Enregistrer<i class="fa fa-tree"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

