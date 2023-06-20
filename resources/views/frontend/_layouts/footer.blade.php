    <!-- Start footer -->
    <footer class="section-footer">
        <div class="container">
            <div class="logo">
                <div class="image">
                    <img src="{{ url('site/images/logo.png') }}" alt="my logo">
                </div>
                <h6 class="title">{!! trans('site.footer-title') !!}</h6>
            </div>
            <ul class="list-unstyled social-media-links">
                <li><a href="#" class="social-media-link"><i class="fa fa-facebook-square"></i></a></li>
                <li><a href="#" class="social-media-link"><i class="fa fa-twitter-square"></i></a></li>
                <li><a href="#" class="social-media-link"><i class="fa fa-github-square"></i></a></li>
                <li><a href="#" class="social-media-link"><i class="fa fa-linkedin-square"></i></a></li>
            </ul>
        </div>
    </footer>
    <!-- End footer -->

    <!-- Start scroll top button -->
    <div class="scroll-top">
        <div class="button-top">
            <i class="fa fa-arrow-up"></i>
        </div>
    </div>
    <!-- End scroll top button -->

    <!-- scripts sources -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

    @stack('js')
    <script src="{{ url('site/js/app.js') }}"></script>
    @stack('js-condition')

    </body>

    </html>
