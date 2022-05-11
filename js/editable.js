$( document ).ready(function() {
    $('#editableTable').SetEditable({
        columnsEd: "0,1,2,3,4,5,6,7",
        onEdit: function(columnsEd) {
            var empId = columnsEd[0].childNodes[1].innerHTML;
            var empName = columnsEd[0].childNodes[3].innerHTML;
            var tipo = columnsEd[0].childNodes[5].innerHTML;
            var precio = columnsEd[0].childNodes[7].innerHTML;
            var cantidad = columnsEd[0].childNodes[9].innerHTML;
            $.ajax({
                type: 'POST',
                url : "Backend/action.php",
                dataType: "json",
                data: {id:empId, name:empName, tipo:tipo, precio:precio, cantidad:cantidad, action:'edit'},
                success: function (response) {
                    if(response.status) {
                    }
                }
            });
        },
        onBeforeDelete: function(columnsEd) {
            var empId = columnsEd[0].childNodes[1].innerHTML;
            $.ajax({
                type: 'POST',
                url : "Backend/action.php",
                dataType: "json",
                data: {id:empId, action:'delete'},
                success: function (response) {
                    if(response.status) {
                    }
                }
            });
        },
    });
});