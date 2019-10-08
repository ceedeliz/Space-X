
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Ceedeliz 2019</p>
                </div>
            </div>
        </footer>

  
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-bs4.js"></script>
    <script src="js/ekko-lightbox.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/anchor-js/3.2.1/anchor.min.js"></script>
      <script type="text/javascript">
            $(document).ready(function ($) {
                // delegate calls to data-toggle="lightbox"
                $(document).on('click', '[data-toggle="lightbox"]:not([data-gallery="navigateTo"]):not([data-gallery="example-gallery-11"])', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        onShown: function() {
                            if (window.console) {
                                return console.log('Checking our the events huh?');
                            }
                        },
						onNavigate: function(direction, itemIndex) {
                            if (window.console) {
                                return console.log('Navigating '+direction+'. Current item: '+itemIndex);
                            }
						}
                    });
                });

                // disable wrapping
                $(document).on('click', '[data-toggle="lightbox"][data-gallery="example-gallery-11"]', function(event) {
                    event.preventDefault();
                    return $(this).ekkoLightbox({
                        wrapping: false
                    });
                });

                //Programmatically call
                $('#open-image').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });
                $('#open-youtube').click(function (e) {
                    e.preventDefault();
                    $(this).ekkoLightbox();
                });

				// navigateTo
                $(document).on('click', '[data-toggle="lightbox"][data-gallery="navigateTo"]', function(event) {
                    event.preventDefault();

                    return $(this).ekkoLightbox({
                        onShown: function() {

							this.modal().on('click', '.modal-footer a', function(e) {

								e.preventDefault();
								this.navigateTo(2);

                            }.bind(this));

                        }
                    });
                });


                /**
                 * Documentation specific - ignore this
                 */
                anchors.options.placement = 'left';
                anchors.add('h3');
                $('code[data-code]').each(function() {

                    var $code = $(this),
                        $pair = $('div[data-code="'+$code.data('code')+'"]');

                    $code.hide();
                    var text = $code.text($pair.html()).html().trim().split("\n");
                    var indentLength = text[text.length - 1].match(/^\s+/)
                    indentLength = indentLength ? indentLength[0].length : 24;
                    var indent = '';
                    for(var i = 0; i < indentLength; i++)
                        indent += ' ';
                    if($code.data('trim') == 'all') {
                        for (var i = 0; i < text.length; i++)
                            text[i] = text[i].trim();
                    } else  {
                        for (var i = 0; i < text.length; i++)
                            text[i] = text[i].replace(indent, '    ').replace('    ', '');
                    }
                    text = text.join("\n");
                    $code.html(text).show();

                });
            });
        </script>


<script>
$.getJSON('https://api.spacexdata.com/v3/capsules', function(data) {
console.log(data);
});    
</script>
<script>
function convertDate(inputFormat) {
  function pad(s) { return (s < 10) ? '0' + s : s; }
  var d = new Date(inputFormat);
  return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/');
}
console.log("lanzamientos:");
$( document ).ready(function() {
$.getJSON('https://api.spacexdata.com/v3/launches', function(data) {
     console.log(data.length);
          console.log(data[0]); 
          console.log(data[0]["links"]["mission_patch_small"]); 
          console.log(data[0]["flight_number"]); 
          console.log(data[0]["mission_name"]); 
          console.log(convertDate(data[0]["launch_date_local"])); 
          console.log(data[0]["launch_success"]); 
          console.log(data[0]["flight_number"]); 

     for (i = 0; i < data.length; i++) { 
//      console.log(data[i]); 
//     $("#respawn").append("<div class='row'><div class='col-md-7'>                    <img class='img-responsive img-hover' src='" + data[i]["links"]["mission_patch_small"] +"' alt=''></div><div class='col-md-5'><h2>Lanzamiento número: "+ data[i]["flight_number"] +"</h2><h2>"+ data[i]["mission_name"] +"</h2><h3>"+ convertDate(data[i]["launch_date_local"]) +"</h3><p>Estado del lanzamiento: <span class='launch launch_"+ data[i]["launch_success"] + "'></span></p><p>" + data[i]["flight_number"] + "</p></div></div><hr>")
     $("#respawn").append("<tr><td>"+ data[i]["mission_name"] +"</td><td><img class='img-responsive img-hover' src='" + data[i]["links"]["mission_patch_small"] +"' alt='' width='100px'></td><td>"+data[i]["flight_number"] +"</td><td data-value='2008'>"+ convertDate(data[i]["launch_date_local"]) +"</td><td><span class='launch launch_"+ data[i]["launch_success"] + "'></span></td><td>"+ data[i]["flight_number"] +"</td></tr>")
    }
  });
});
   
</script>
<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("themeTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
