(function($) {
  'use strict';
  $(function() {
    $('#order-listing').DataTable({
      language: {
        lengthMenu: "Hiện _MENU_ dòng",
        search: "",
        searchPlaceholder: "Tìm kiếm",
        info: "Đang hiển thị _PAGE_ trên _PAGES_",
        paginate: {
          first:      "Đầu",
          last:       "Cuối",
          next:       "Tiếp",
          previous:   "Trước"
        },
      },
      aLengthMenu: [
        [5, 10, 15, -1],
        [5, 10, 15, "Tất cả"]
      ],
      iDisplayLength: 10
    });
    // $('#order-listing').each(function() {
    //   var datatable = $(this);
    //   // SEARCH - Add the placeholder for Search and Turn this into in-line form control
    //   var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
    //   search_input.removeClass('form-control-sm');
    //   // LENGTH - Inline-Form control
    //   var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
    //   length_sel.removeClass('form-control-sm');
    // });
  });
})(jQuery);