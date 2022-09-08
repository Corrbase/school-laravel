
let mm_data = {
    page: 1,
    search: '',
    page_num: 5,
    class_num: '',
    class_teacher: '',
};

$(".js-example-theme-multiple").select2({
    theme: "classic"
});

$("#delete").on('click', function (){
    console.log($(this).val)
})

{{--$('#delete').on('click', function(){--}}
    {{--    --}}
    {{--    $.ajax({--}}
        {{--        url: "{{ route('admin.students.delete') }}/" + student_id,--}}
        {{--        type:"POST",--}}
        {{--        beforeSend: function() {--}}
            {{--            $('#loader').removeClass('d-none')--}}
            {{--            $('#table_data').addClass('d-none')--}}
            {{--        },--}}
        {{--        data:{--}}
            {{--            ...mm_data,--}}
            {{--            student_id: student_id,--}}
            {{--            _token: "{{ csrf_token() }}"--}}
            {{--        },--}}
        {{--        success:function(data){--}}

            {{--            $('#table_data').html(data);--}}
            {{--        },--}}
        {{--        error: function(error) {--}}
            {{--            console.log(error);--}}
            {{--        },--}}
        {{--        complete: function(){--}}
            {{--            $('#loader').addClass('d-none')--}}
            {{--            $('#table_data').removeClass('d-none')--}}
            {{--        },--}}
        {{--    });--}}
    {{--}--}}
{{--})--}}

$('#select2').ready(function() {
    $('.js-example-basic-single').select2(
        {
            placeholder: "Select teacher",
            ajax: {
                // minimumResultsForSearch: -1
                url: "{{ route('admin.students.search') }}",
                type: "POST",
                dataType: 'json',
                delay: 250,
                cache: true,
                data: function(params) {
                    return {
                        term: params.term,
                        _token: "{{ csrf_token() }}"
                    };
                },
                processResults: function(data, params) {
                    return {
                        results: $.map(data, function(item, k) {
                            return {
                                value: item.text,
                                id: item.id,
                                text: item.text
                            }
                        })
                    };
                },
            },
        }
    );

});

$('#select2').on('change', function (){
    mm_data.class_teacher = $(this).val();
    mm_data.page = 1;
    paginate(mm_data);
})





paginate(mm_data)


$('#reload_page').on('click', function (){
    mm_data.page = 1;
    paginate(mm_data);
})

$('#page_num').on('change', function () {
    mm_data.page_num = $(this).val();
    mm_data.page = 1;
    paginate(mm_data);
});

$('#class_num').on('change', function () {
    mm_data.class_num = $(this).val();
    mm_data.page = 1;
    paginate(mm_data);
});



// let next = document.getElementsByClassName('page-next');

var searchTimeout;

function search() {
    console.log($('#search').val())
    window.clearTimeout(searchTimeout);
    searchTimeout = window.setTimeout(function () {
        mm_data.search = $('#search').val()
        mm_data.page = 1;
        paginate(mm_data);
    }, 500);
}

$('.mm-pagination-link').on('click', function (e) {
    console.log(
        $(this).data('page')
    )
})

function previous() {
    mm_data.page -= 1
    paginate(mm_data)
}

function next() {
    mm_data.page += 1
    paginate(mm_data)
}

function call() {
    $.ajax({
        url: "{{ route('admin.students.index') }}",
        type: "POST",
        data: {
            page: page,
            _token: "{{ csrf_token() }}"
        },
        success: function (response) {
            console.log(response);
            if (response) {
                $('.success').text(response.success);
                $("#ajaxform")[0].reset();
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
}
