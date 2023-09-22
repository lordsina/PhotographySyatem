@if (session()->has('flash_message'))

<script type="module">
swal({
  icon: "{{ session('flash_message.level') }}",
  title: "{{ session('flash_message.title') }}",
  text: "{{ session('flash_message.message') }}",
  buttons: false,
  timer: 2000,
});
</script>
    
@endif
