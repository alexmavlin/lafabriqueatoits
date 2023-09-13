    <!-- Slider section -->
    <section class="slider">
        <h2 class="section__h2--red" {{ !Route::is('home') ? 'style=font-family:Times New Roman,serif;' : '' }}>Nous les avons accompagnés jusqu'au Succès de leurs projets immobiliers</h2>
        <p class="section__description">Chasse immobilière, vente ou investissement locatif, nos Clients témoignent</p>
        <div class="container">
            <div class="slider__wrapper" id="review-slider">

                <!-- Slide #1 -->
                <div class="slider__slide">
                    <div class="slider__slide--header">
                        <img    loading="lazy"    
                                src="{{ asset('images/avatar/avatar1.webp') }}" 
                                alt="Avatar for review 1" 
                                width="40"
                                height="40"
                                class="slider__slide--avatar">
                        <div class="slider__slide--info">
                            <p class="slider__slide--name">Elodie B.</p>
                            <div class="slider__slide--stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="slider__slide--content">
                        <strong>Service de chasse immobilière</strong> : " Une magnifique rencontre avec Sarah, qui nous a accompagné avec un grand professionnalisme, humanité et efficacité, nous sommes très heureux d'avoir fait appel à la Fabrique à toit. Nous recherchions une maison depuis bientôt 3 ans, et Sarah nous a trouvé une pépite, la maison du bonheur tant espérée. "
                    </p>
                </div>

                <!-- Slide #2 -->
                <div class="slider__slide">
                    <div class="slider__slide--header">
                        <img    loading="lazy"    
                                src="{{ asset('images/avatar/avatar3.webp') }}" 
                                alt="Avatar for review 2" 
                                width="40"
                                height="40"
                                class="slider__slide--avatar">
                        <div class="slider__slide--info">
                            <p class="slider__slide--name">Andrea S.</p>
                            <div class="slider__slide--stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="slider__slide--content">
                        <strong>Service de chasse immobilière Aubervilliers</strong> : " Ma recherche était compliquée et je commençais à désespérer. C'est là qu'est intervenu La Fabrique à Toits. Dès les premiers échanges téléphonique, j'ai tout de suite été bien accueillie et accompagnée. La Fabrique à Toits est là pour nous facilité les choses et ils savent très bien le faire. "
                    </p>
                </div>

                <!-- Slide #3 -->
                <div class="slider__slide">
                    <div class="slider__slide--header">
                        <img    loading="lazy"    
                                src="{{ asset('images/avatar/avatar2.webp') }}" 
                                alt="Avatar for review 3" 
                                width="40"
                                height="40"
                                class="slider__slide--avatar">
                        <div class="slider__slide--info">
                            <p class="slider__slide--name">Franck L</p>
                            <div class="slider__slide--stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="slider__slide--content">
                        <strong>Service Vente de 2 appartements</strong> : " Très bonne prestation de la La Fabrique à Toits tant au niveau du conseil, de la disponibilité, des relances, de la ténacité et de la représentation du client, un travail ainsi que des échanges toujours agréables liés à une relation de confiance. "
                    </p>
                </div>

                <!-- Slide #4 -->
                <div class="slider__slide">
                    <div class="slider__slide--header">
                        <img    loading="lazy"    
                                src="{{ asset('images/avatar/avatar6.webp') }}" 
                                alt="Avatar for review 4" 
                                width="40"
                                height="40"
                                class="slider__slide--avatar">
                        <div class="slider__slide--info">
                            <p class="slider__slide--name">Benoit A</p>
                            <div class="slider__slide--stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                    <p class="slider__slide--content">
                        <strong>Service investissement de locatif</strong> : " Formidable agence qui assure un service de qualité et un excellent suivi de dossier. Un grand merci à Sarah pour son savoir faire et sa sympathie. Je recommande vivement cette agence. "
                    </p>
                </div>
            </div>
        </div>
    </section>