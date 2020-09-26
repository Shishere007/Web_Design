<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    <link rel="stylesheet" href="../css/admin_home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body class="loggedin">
    <nav class="navtop">
        <div>
            <a href="home.php"><img src="../icons/company-logo.png" alt=""></a>
            <div style="display: flex; justify-content:end;">
                <a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
                <a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
            </div>
        </div>
    </nav>
    <div class="content">
        <h2>Home Page</h2>
        <p>Welcome back, <?= $_SESSION['name'] ?>!</p>
        <br /><br />
        <div class="container" style="max-width: 1200px;">
            <div class="table-responsive" id="folder_table">

            </div>
        </div>
    </div>
</body>

</html>
<div id="uploadModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Upload File</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="upload_form" enctype='multipart/form-data'>
                    <p>Allowed image types : jpg,jpeg,png,gif <br><br>
                        Select Image <br>
                        <input type="file" name="upload_file[]" multiple /></p>
                    <br />
                    <input type="hidden" name="hidden_folder_name" id="hidden_folder_name" />
                    <input type="submit" name="upload_button" class="btn btn-info" value="Upload" />
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div id="filelistModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">File List</h4>
            </div>
            <div class="modal-body" id="file_list">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {

        load_folder_list();

        function load_folder_list() {
            var action = "fetch";
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    action: action
                },
                success: function(data) {
                    $('#folder_table').html(data);
                }
            });
        }
        $(document).on('click', '.upload', function(e) {
            e.preventDefault();
            var folder_name = $(this).data("name");
            $('#hidden_folder_name').val(folder_name);
            $('#uploadModal').modal('show');
        });

        $('#upload_form').on('submit', function(e) {
            e.preventDefault();
            $.ajax({
                url: "upload.php",
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                success: function(data) {
                    load_folder_list();
                    alert(data);
                },

            });
        });

        $(document).on('click', '.view_files', function() {
            var folder_name = $(this).data("name");
            var action = "fetch_files";
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    action: action,
                    folder_name: folder_name
                },
                success: function(data) {
                    $('#file_list').html(data);
                    $('#filelistModal').modal('show');
                }
            });
        });

        $(document).on('click', '.remove_file', function() {
            var path = $(this).attr("id");
            var action = "remove_file";
            if (confirm("Are you sure you want to remove this file?")) {
                $.ajax({
                    url: "action.php",
                    method: "POST",
                    data: {
                        path: path,
                        action: action
                    },
                    success: function(data) {
                        alert(data);
                        $('#filelistModal').modal('hide');
                        load_folder_list();
                    }
                });
            }
        });

        $(document).on('blur', '.change_file_name', function() {
            var folder_name = $(this).data("folder_name");
            var old_file_name = $(this).data("file_name");
            var new_file_name = $(this).text();
            var action = "change_file_name";
            $.ajax({
                url: "action.php",
                method: "POST",
                data: {
                    folder_name: folder_name,
                    old_file_name: old_file_name,
                    new_file_name: new_file_name,
                    action: action
                },
                success: function(data) {
                    alert(data);
                }
            });
        });

    });
</script>