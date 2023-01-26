// Summernote.org
    $('#summernote').summernote({
        tabsize: 2,
        height: 120,
        toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ]
    });
// Bootstrap.com/accordion
    let articleForm = $('.accordion').html(),
    i = 0;
    // $('#title').on('keyup' , function(){
    //   let titleVal = $(this).val();
    //   $('#articleTitle').text(titleVal);
    // });
    $('#add-article-form').on('click' , function(){
        i++;
        $('#article-form').after($('#article-form').html()).find('#articleTitle').attr('data-bs-target', '#' + i);
        $('#article-form').find('.accordion-collapse').attr({'id': parseInt(i)});
    });
// datatables.net
    $(document).ready( function () {
        $('#myTable').DataTable();
    });
// parsleyjs
$('form').parsley();