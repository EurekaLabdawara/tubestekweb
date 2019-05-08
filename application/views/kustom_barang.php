<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>CustomPlace</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/colorpicker/js/bootstrap-colorpicker.js"></script>
</head>

<body>
    <?php
    if ($this->session->userdata('email') !== null) {
        if ($this->session->userdata('vendorID') === null) {
            include_once("modal_bikintoko.php");
        }
    }
    include_once("modal.php");
    include_once("navbar.php");
    ?>

    <div class="wrapper">
        <div class="row">
            <div class=" card col-7 m-2">

                <img src="<?php echo base_url() ?>IMG/vendors_item/2/bumper-iphone.png" id="pictureframe" width="100%"
                    height="auto" style="background:blue">
                <!-- <img src="" id=""> -->
            </div>
            <div class="card col-4 m-2 jumbotron">

                <h1>Start Customizing Your Item</h1>
                <form>
                    <div id="cp1" data-color="#6D2781">
                        <input type="text" class="form-control" style="width:auto" id="colorinput" /> <br>
                    </div>
                    <button class="btn btn-outline-success">Submit</button>
                </form>
                <script>
                $(function() {
                    $('#cp1')
                        .colorpicker({
                            inline: true,
                            container: true,
                            extensions: [{
                                name: 'swatches',
                                options: {
                                    colors: {
                                        'tetrad1': '#000',
                                        'tetrad2': '#000',
                                        'tetrad3': '#000',
                                        'tetrad4': '#000'
                                    },
                                    namesAsValues: false
                                }
                            }]
                        })
                        .on('colorpickerChange colorpickerCreate', function(e) {
                            var colors = e.color.generate('tetrad');

                            colors.forEach(function(color, i) {
                                var colorStr = color.string(),
                                    swatch = e.colorpicker.picker
                                    .find('.colorpicker-swatch[data-name="tetrad' + (i + 1) + '"]');

                                swatch
                                    .attr('data-value', colorStr)
                                    .attr('title', colorStr)
                                    .find('> i')
                                    .css('background-color', colorStr);
                            });
                        });
                });

                $('#colorinput').change(function() {
                    var colorhex = this.value;
                    $('#pictureframe').css('background-color', colorhex)
                });
                </script>
            </div>
        </div>
    </div>
</body>

</html>