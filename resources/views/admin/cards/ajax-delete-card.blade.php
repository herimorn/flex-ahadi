 <script type="text/javascript">  
          /*
              delete record function
          */
          function destroyCard(id)
          {
              let url = $('meta[name=app-url]').attr("content") + "/admin/cards/" + id;
              let data = {
                  name: $("#card_no").val(),
              };
              $.ajax({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  },
                  url: url,
                  type: "DELETE",
                  data: data,
                  success: function(response) {
                      let successHtml = '<div class="alert alert-danger" role="alert">Card Was Deleted Successfully </div>';
                      $("#alert-div").html(successHtml);
                      showAllCards();
                  },
                  error: function(response) {
                      console.log(response.responseJSON)
                  }
              });
          }
       
        </script>