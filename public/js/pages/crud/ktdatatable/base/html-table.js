'use strict';
// Class definition

var KTDatatableHtmlTableDemo = function() {
  // Private functions

  // demo initializer
  var demo = function() {

    var datatable = $('#kt_datatable').KTDatatable({
      
      pageSize: 100,
      search: {
        input: $('#kt_datatable_search_query'),
        key: 'generalSearch',
      },

      
       
    });

    $('#kt_datatable_search_status').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'Status');
    });

    $('#kt_datatable_search_type').on('change', function() {
      datatable.search($(this).val().toLowerCase(), 'Type');
    });

    $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();





    var datatable1 = $('#kt_datatable1').KTDatatable({
      
      pageSize: 100,
      search: {
        input: $('#kt_datatable_search_query'),
        key: 'generalSearch',
      },
      sortable: false,
      /*columns:{
        'Total Students':true
      }*/
      
       
    });

    $('#kt_datatable_search_status').on('change', function() {
      datatable1.search($(this).val().toLowerCase(), 'Status');
    });

    $('#kt_datatable_search_type').on('change', function() {
      datatable1.search($(this).val().toLowerCase(), 'Type');
    });

    $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();



  };

  return {
    // Public functions
    init: function() {
      // init dmeo
      demo();
    },
  };
}();

jQuery(document).ready(function() {
  KTDatatableHtmlTableDemo.init();
});
