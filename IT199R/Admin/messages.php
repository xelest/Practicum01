<?php 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--=============HEADERS========== -->
<?php include ('headerinclude.php'); ?>
<link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
     <link href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet" />

    <style>


		#toast-container > .toast {
		    background-image: none !important;
		    z-index: 9999;
		    margin-top:10%;
		}

		#toast-container > .toast:before {
		    position: fixed;
		    font-family: FontAwesome;
		    font-size: 24px;
		    line-height: 18px;
		    float: left;
		    color: #FFF;
		    padding-right: 0.5em;
		    margin: auto 0.5em auto -1.5em;
		}        
		#toast-container > .toast-warning:before {
		    content: "\f003";
		}
		#toast-container > .toast-error:before {
		    content: "\f001";
		}
		#toast-container > .toast-info:before {
		    content: "\f005";
		}
		#toast-container > .toast-success:before {
		    content: "\f002";
		}

    </style>

<style type="text/css"></style>
</head>
<body>
<!--=============Top nav========== -->
<?php include('nav_top.php'); ?>
<!--=============Sidenav========== -->
<?php include('nav_side.php'); ?>
<div class="main-content">
<h1> Messaging </h1>
 <button class="btn btn-primary" id="tryMe">Try Me</button> 
<p>Create call outs for specific people in the organization.</p>
<!--=============Tabs MENU ========== -->
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#create">New Message</a></li>
    <li><a data-toggle="tab" href="#update">Message History</a></li>
  </ul>
<!--=============Tabs contents========== -->
<?php include('phpcore/mgs_tables.php');?>
</div>
<!--=============MODAL========== -->
<?php include('modal_logout.php'); ?>
<?php include('phpcore/modal_center_form.php');?>
<!--================= this script is for the collapsable=============-->
<script src="nav.js"></script>

<script>
	$(function() {

    function Toast(type, css, msg) {
        this.type = type;
        this.css = css;
        this.msg = 'This is positioned in the ' + msg + '. You can also style the icon any way you like.';
    }

    var toasts = [
        new Toast('success', 'toast-top-right', 'top right'),
        new Toast('warning', 'toast-bottom-right', 'bottom right'),
        new Toast('error', 'toast-bottom-left', 'bottom left')
    ];

    toastr.options.positionClass = 'toast-top-full-width';
    toastr.options.extendedTimeOut = 0; //1000;
    toastr.options.timeOut = 1000;
    toastr.options.fadeOut = 250;
    toastr.options.fadeIn = 250;

    var i = 0;

    $('#tryMe').click(function () {
        $('#tryMe').prop('disabled', true);
        delayToasts();
    });

    function delayToasts() {
        if (i === toasts.length) { return; }
        var delay = i === 0 ? 0 : 2100;
        window.setTimeout(function () { showToast(); }, delay);

        // re-enable the button        
        if (i === toasts.length-1) {
            window.setTimeout(function () {
                $('#tryMe').prop('disabled', false);
                i = 0;
            }, delay + 1000);
        }
    }

    function showToast() {
        var t = toasts[i];
        toastr.options.positionClass = t.css;
        toastr[t.type](t.msg);
        i++;
        delayToasts();
    }
})

    $('#myTable').DataTable( {
    buttons: [
        'selectRows',
        'selectColumns',
        'selectCells'
    ]
} );

     $(document).ready(function() {
    $('#myTable').DataTable();
    } );

</script>
</body>
</html>
<?php include('phpcore/create_msg.php');?>
<?php include('phpcore/update_msg.php');?>