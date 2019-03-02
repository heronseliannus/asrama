
(function ($, window, document, undefined) {
    'use strict';

var oTable = $('#users-table').DataTable({
    dom: "<'row'<'col-xs-12'<'col-xs-6'l><'col-xs-6'p>>r>"+
        "<'row'<'col-xs-12't>>"+
        "<'row'<'col-xs-12'<'col-xs-6'i><'col-xs-6'p>>>",
    processing: true,
    serverSide: true,
    ajax: {
        url: 'users',
        data: function (d) {
            d.name = $('input[name=name]').val();
            d.programs = $('select[program=programs]').val();
        }
    },
    columns: [
        {data: 'firstname', name: 'first_name'},
        {data: 'lastname', name: 'last_name'},
        {data: 'nik', name: 'nik'},
        {data: 'phone', name: 'phone'},
        {data: 'photo', name: 'photo'},
        {data: 'password', name: 'password'},
        {data: 'address', name: 'address'},
        {data: 'city', name: 'city'},
        {data: 'state', name: 'state'},
        {data: 'programs', name: 'programs'},
        {data: 'birth_date', name: 'birth_date'},
        {data: 'created_at', name: 'created_at'},
        {data: 'updated_at', name: 'updated_at'}
    ]
});

$('#search-form').on('submit', function(e) {
    oTable.draw();
    e.preventDefault();
});
}(jQuery, window, document));