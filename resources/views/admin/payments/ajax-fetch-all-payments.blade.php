{{-- This is the page for ajax to fetch all registered Purposes/Contributions --}}

<script type="text/javascript">
    


        showAllPayments();
    
        /*
            This function will get all the payments records
        */
        function showAllPayments()
        {
            let url = $('meta[name=app-url]').attr("content") + "/admin/payments";
            $.ajax({
                url: url,
                type: "GET",
                success: function(response) {
                    $("#payments-table-body").html("");
                    let purposes = response.payments;
                    for (var i = 0; i < purposes.length; i++) 
                    {
                        let showBtn =  '<button ' +
                            ' class="btn btn-sm bg-flex text-light" ' +
                            ' onclick="showPledge(' + purposes[i].id + ')"><i class="fa fa-eye"></i>' +
                        '</button> ';
                        let editBtn =  '<button ' +
                            ' class="btn btn-sm bg-flex text-light" ' +
                            ' onclick="editPledge(' + purposes[i].id + ')"><i class="fa fa-edit"></i>' +
                        '</button> ';
                        let deleteBtn =  '<button ' +
                            ' class="btn btn-danger btn-sm" ' +
                            ' onclick="destroyPledge(' + purposes[i].id + ')"><i class="fa fa-trash"></i>' +
                        '</button>';
     
                        let projectRow = '<tr>' +
                            '<td>' + (1+i) + '</td>' +
                            '<td>' + purposes[i].payer.fname + '&nbsp;' + purposes[i].payer.mname +  '&nbsp;' + purposes[i].payer.lname +   '</td>' +
                            '<td>' + purposes[i].payment.name + '</td>' +
                            '<td>' + purposes[i].pledge.name + '</td>' +
                            '<td>' + purposes[i].amount + '</td>' +
                            '<td>' + showBtn + editBtn + deleteBtn + '</td>' +
                        '</tr>';
                        $("#payments-table-body").append(projectRow);
                    }
     
                     
                },
                error: function(response) {
                    console.log(response.responseJSON)
                }
            });
        }
</script>