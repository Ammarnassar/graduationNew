require('./bootstrap');

$("#orgchart").jOrgChart({ chartElement: '#chart' });

$("div#chart div.btn-group > a.dropdown-toggle").click(function(e) {
    e.stopPropagation();
});
