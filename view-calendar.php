<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

<body>
    <br><br><br><br>
    <div class="container">
        <div id="calendar"></div>
        <a href="./visita-domiciliario.php" class="btn">
            Volver atras
        </a>
    </div>
    <br>
</body>
<?php
include('connection.php');
$fetch_event = mysqli_query($connection, "select * from tbl_event");
?>
<script>
    $(document).ready(function() {
        $('#calendar').fullCalendar({
            header: {
                left: 'month, agendaWeek',
                center: 'title'
            },

            events: [
                <?php
                while ($result = mysqli_fetch_array($fetch_event)) { ?> {
                        id: '<?php echo $result['id']; ?>',
                        title: '<?php echo $result['title']; ?>',
                        start: '<?php echo $result['start_date']; ?>',
                        end: '<?php echo $result['end_date']; ?>',
                        color: 'yellow',
                        textColor: 'black'


                    },
                <?php } ?>
            ],
            editable: true,
            eventClick: function(event) {
                if (confirm("Are you sure want to remove it?")) {
                    var id = event.id;
                    $.ajax({
                        url: "delete.php",
                        type: "POST",
                        data: {
                            id: id
                        },
                        success: function() {
                            alert("Event removed successfully");
                            window.location.reload();
                        }
                    });
                }
            }
        });
    });
</script>