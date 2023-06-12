<script
    src="{{ asset('https://code.jquery.com/jquery-3.3.1.slim.min.js') }}"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
></script>

<script
    src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js') }}"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
    crossorigin="anonymous"
></script>

<script src="{{ asset('https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/donut_chart.js') }} "></script>
<script src="{{ asset('dashboard/assets/js/line_chart.js') }}   "></script>
<script src="{{ asset('dashboard/assets/js/horizontal_chart.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/horizontal_chart _2.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/donut_chart_2.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/donut_chart_3.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/donut_chart_4.js') }}"></script>
<script src="{{ asset('dashboard/assets/js/donut_chart_5.js') }}"></script>

<script>
    $(document).ready(function () {
    $('.sidebarCollapseDefault').on('click', function () {
        $('.sidebar').toggleClass('active');
        $('.content').toggleClass('active');
    });
    });
</script>
