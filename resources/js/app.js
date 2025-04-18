import './bootstrap';
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;
import 'datatables.net-dt';
import 'datatables.net-dt/css/jquery.datatables.css';



$(document).ready(function () {
    $('#users-table').DataTable();
});
