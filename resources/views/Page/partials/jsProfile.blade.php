{{--<!-- JQUERY SCRIPTS -->--}}
<script type="text/javascript" src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
{{--<!-- BOOTSTRAP SCRIPTS -->--}}
<script type="text/javascript" src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
{{--<!-- METISMENU SCRIPTS -->--}}
<script src="{{asset('assets/js/plugins/jquery.metisMenu.js')}}"></script>
{{--<!-- MORRIS CHART SCRIPTS -->--}}
<script src="{{asset('assets/js/morris/raphael-2.1.0.min.js')}}"></script>
<script src="{{asset('assets/js/morris/morris.js')}}"></script>
{{--<!-- CUSTOM SCRIPTS -->--}}
<script src="{{asset('assets/js/custom_profile.js')}}"></script>

<script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

{{--JsSelect2--}}
<script src="{{asset('assets/js/select2.min.js')}}"></script>

{{--AngularJs--}}
<script src="{{asset('assets/js/AngularJs.js')}}"></script>
<script src="{{asset('assets/js/Angular/custom.js')}}"></script>

<script>
    $('#kategoriList').select2({
        placeholder:'Pilih Kategori'
    });

    $('#flash-overlay-modal').modal();
</script>

