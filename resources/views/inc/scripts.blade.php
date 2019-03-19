		<!--================================================== -->

		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="{{ asset('/js/plugin/pace/pace.min.js') }}"></script>-->

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="{{ asset('/js/libs/jquery-3.2.1.min.js') }}"><\/script>');
			}
		</script>

		<script src="{{ asset('//ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js') }}"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="{{ asset('/js/libs/jquery-ui.min.js') }}"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		<script src="{{ asset('/js/app.config.js') }}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{ asset('/js/bootstrap/bootstrap.min.js') }}"></script>

		<!-- CUSTOM NOTIFICATION -->
		<script src="{{ asset('/js/notification/SmartNotification.min.js') }}"></script>

		<!-- JARVIS WIDGETS -->
		<script src="{{ asset('/js/smartwidgets/jarvis.widget.min.js') }}"></script>

		<!-- EASY PIE CHARTS -->
		<script src="{{ asset('/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>

		<!-- SPARKLINES -->
		<script src="{{ asset('/js/plugin/sparkline/jquery.sparkline.min.js') }}"></script>

		<!-- JQUERY VALIDATE -->
		<script src="{{ asset('/js/plugin/jquery-validate/jquery.validate.min.js') }}"></script>

		<!-- JQUERY MASKED INPUT -->
		<script src="{{ asset('/js/plugin/masked-input/jquery.maskedinput.min.js') }}"></script>

		<!-- JQUERY SELECT2 INPUT -->
		<script src="{{ asset('/js/plugin/select2/select2.min.js') }}"></script>

		<!-- JQUERY UI + Bootstrap Slider -->
		<script src="{{ asset('/js/plugin/bootstrap-slider/bootstrap-slider.min.js') }}"></script>

		<!-- browser msie issue fix -->
		<script src="{{ asset('/js/plugin/msie-fix/jquery.mb.browser.min.js') }}"></script>

		<!-- FastClick: For mobile devices -->
		<script src="{{ asset('/js/plugin/fastclick/fastclick.min.js') }}"></script>

		<!--[if IE 8]>
			<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>
		<![endif]-->

		<!-- MAIN APP JS FILE -->
		{{--<script src="{{ asset('/js/app.js') }}"></script>--}}
		<script src="{{ asset('/js/app-smart.js') }}"></script>

		<script type="text/javascript">
            // DO NOT REMOVE : GLOBAL FUNCTIONS!
            pageSetUp();
		</script>


