<script src="https://kit.fontawesome.com/084dfeabed.js" crossorigin="anonymous"></script>
<script type="module">
    $(document).ready(function(e) {  

        $('.js-example-basic-multiple').select2();
        
        Dropzone.options.myGreatDropzone = { // camelized version of the `id`
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
        };  
        jalaliDatepicker.startWatch();


        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    });
</script>
<script>
    function confirmSubmit(id=-1)
    {
    var agree=confirm("از این کار اطمینان دارید؟");
    if (agree){
        if(id==-1)
        document.forms["myform"].submit();
        else
        document.forms["myform"+id].submit();
    }   
    else
        return false ;
    }

    function confirmSubmitn()
    {
        document.forms["myform"].submit();
    } 
    
    function collapse(btn){
        $("#b"+btn).toggle();
    }
</script>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
    toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
    tinycomments_mode: 'embedded',
    tinycomments_author: 'Author name',
    mergetags_list: [
      { value: 'First.Name', title: 'First Name' },
      { value: 'Email', title: 'Email' },
    ],
    ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
  });
</script>

<script>

</script>