<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/fontawesome.min.js"></script>
<script src="{{asset('backend/js/toastr.min.js')}}"></script>
<script>
    @if (Session::has('success'))
    toastr.success("{{Session::get('success')}}")
    {{-- expr --}}
    @endif
    @if (Session::has('info'))
    toastr.info("{{Session::get('info')}}")
    {{-- expr --}}
    @endif

</script>
<script>
    $(document).ready(function() {
      $('#summernote').summernote();
  });
</script>
