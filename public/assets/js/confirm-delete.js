function confirmDelete() {
    $('.delete').click(function(event) {
        var form =  $(this).closest("form");
        var test = this;
        console.log(form, test);
        event.preventDefault();
        swal({
            title: "{{ trans('Are you sure you want to delete this record ?') }}",
            text: "{{ trans('If you delete this, it will also delete all the related records (subcategories and products).') }}",
            icon: "warning",
            buttons: ["{{ trans('Cancel') }}", "{{ trans('Confirm') }}"],
            dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {
            form.submit();
          }
        });
    });
}