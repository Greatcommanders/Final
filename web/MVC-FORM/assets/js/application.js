$(document).ready(function() {
    var dataSet = [];

    $.ajax({
      url: '/all-applications',
      dataType: "json",
      error: function(request) {
        console.error("Error: ", request);
      },
      success: function(array) {
        for (var i = 0; i < array.length; i++) {
          var actions = `<div>
          <a class="btn btn-outline-success">Edit</a>
              <a class="btn btn-outline-danger">Delete</a>
            </div>`;
          dataSet.push([
            array[i].request_number,
            array[i].type,
            '<a class="btn btn-outline-warning">'+array[i].status+'</a>',
            array[i].comment,
            actions
          ]);
        }

        var table = $('#applications').DataTable({
          data: dataSet,
          responsive: true,
          //scrollX: 200
        });
      }
    });
  });