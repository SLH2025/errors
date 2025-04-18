import './bootstrap';
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;
import 'datatables.net-dt';
import '../css/datatable.css'



$(document).ready(function () {
    $('#users-table').DataTable();
});
