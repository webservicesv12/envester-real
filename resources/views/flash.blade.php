@if (session('alert_success'))
    <script>
        $(document).ready(function () {
            swal({
                title: "Success",
                text: "{!! session('alert_success') !!}",
                icon: "success",
            });
        });
    </script>
@endif

@if (session('alert_error'))
    <script>
        $(document).ready(function () {
            swal({
                title: "Error",
                text: "{!! session('alert_error') !!}",
                icon: "error",
            });
        });
    </script>
@endif

@if (session('alert_info'))
    <script>
        $(document).ready(function () {
            swal({
                title: "Success",
                text: "{!! session('alert_info') !!}",
                icon: "success",
            });
        });
    </script>
@endif


@if (session('alert_warning'))
    <script>
        $(document).ready(function () {
            swal({
                title: "Success",
                text: "{!! session('alert_warning') !!}",
                icon: "success",
            });
        });
    </script>
@endif
