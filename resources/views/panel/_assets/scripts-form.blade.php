{{--<script type="text/javascript" src="{{ asset('vendor/jsvalidation/js/jsvalidation.js')}}"></script>--}}
{{--<script type="text/javascript" src="{{ asset('vendor/proengsoft/laravel-jsvalidation/public/js/jsvalidation.js')}}"></script>--}}
<script>
    $().ready(function () {

        $('#bt_salvar_adicionar').on('click', function () {
            $('#routeTo').val('create');
        });

        $('#bt_salvar').on('click', function () {
            $('#routeTo').val('index');
        });
    });
</script>
