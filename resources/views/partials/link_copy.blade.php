
<div class="px_main_contact " id="ch_form">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <h1 class="text-success text-center">Votre message a été enregistré avec succès !</h1>
            <p class="text-center">Cliquez sur le bouton <strong>copier</strong> afin de copier le lien !</p>
            <h1 class=" text-center fadeInUp wow">Partagez-le avec vos amis !</h1>
            <div class="col-md-6">
                <div class="input-group">
                    <input id="myInput" type="text" class="form-control" value="{{ request()->getHttpHost()  }}/wishes/{{ $message->key }}" readonly>
                    <button class="btn btn-outline-secondary" type="button" id="copyButton" data-clipboard-target="#myInput">
                        <i class="bi bi-clipboard"></i> Copier
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container align-content-center" id="news">
        <div class="col-lg-12 col-md-8 col-sm-12 col-xs-12">
                <div class="contact_wrapper wow slideleft" style="visibility: visible; animation-name: slideleft;" style="visibility: visible; animation-duration: 1500ms; animation-delay: 300ms; animation-name: slideInLeft;">
                <h1 class="ice_heading text-center fadeInUp wow" data-wow-delay="300ms" data-wow-duration="1500ms">Vous aimez ? Abonnez-vous à notre newsletter pour etre au courant des nouveautés!</h1>
                <div class="contact_form fadeInUp wow" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <form id="subscribeForm" class="contact-form wow fadeIn" data-toggle="validator">
                        <div class="form-group">
                            <input placeholder="Email" id="email" class="form-control" name="email" type="text" required="" data-error="Please enter your valid email address">
                            <div class="help-block with-errors"></div>
                        </div>
                        <div class="contact_submit">
                            <button type="button" id="submit" class="px_btn">S'abonner<i class="fa fa-tree"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div id="thankYouBlock" class="container mt-5 d-none">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <!-- Tick encerclé -->
                <div class="bg-success text-white rounded-circle d-inline-block p-3">
                    <i class="fa fa-check h1"></i>
                </div>

                <!-- Message de remerciements -->
                <h1 class="mt-3">Merci de vous être abonné !</h1>
                <p class="lead">Vous êtes maintenant abonné à notre newsletter. Restez à l'écoute pour les dernières mises à jour.</p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
                $(document).ready(function(){
                $('#submit').click(function(e){
                    e.preventDefault();
                    const formData = {
                        email: $('#email').val(),
                    };
                    $.ajax({
                        type: 'POST',
                        url: '/newsletter/subscription',
                        data: {
                            _token: '{{ csrf_token() }}',
                            email: formData.email
                        },
                        success: function(response){
                            if (response.success) {
                                $('#news').hide();
                                showThankYouBlock();
                            }
                        },
                        error: function(error){
                            console.log(error);
                        }
                    });
                });
                function showThankYouBlock() {
                    $('#thankYouBlock').removeClass('d-none');
                }
            });
            // Initialise le plugin Clipboard.js
            var clipboard = new ClipboardJS('#copyButton');

            // Gère les événements de réussite ou d'erreur de la copie
            clipboard.on('success', function(e) {
                // Vous pouvez ajouter des actions ou des messages ici en cas de succès
                console.log('Texte copié :', e.text);
                e.clearSelection(); // Désélectionne le texte après la copie
            });

            clipboard.on('error', function(e) {
                // Vous pouvez ajouter des actions ou des messages ici en cas d'erreur
                console.error('Erreur lors de la copie :', e.action);
            });
        });
    </script>
</div>

