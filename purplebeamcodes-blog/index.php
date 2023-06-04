<?php 
require_once("footer.php");
require_once("header.php");
?>
<div class="container">
    <div class="row" >
<body style="background-color:lightyellow;">
<h2 style = "margin: 10px 10px 20px 20px;" ><u>You are logged in as: </u><?php // Username here?><h2><br><br>
    </div>
</div>
<?php $newpostname = ["Title: "]; ?>
<div class = "container" style="border: 5px dashed black; border-radius:50px; padding:50px; margin-bottom: 100px; background-color: lightblue;">
    <div class = "row d-flex align-items-center justify-content-center">
            <input class="text-center" style="width:80%; border-radius: 50px; border: 5px dashed black;" type="text" placeholder = "Post Title">
            <textarea class="text-center" style="border-radius: 50px; margin-top: 20px; height: 600px; border-radius: 50px; border: 5px dashed black;" placeholder="Write your new blog post here." style="margin:5px 5px 5px 0px; width: 100%; height: 600px;"></textarea>
            <div style = "padding:0px">
            <div style="display: flex; align-items: center; justify-content: center; margin: 30px;">
            <button style = "margin-right: 5px; border-radius: 5px; background-color: lightcyan; font-family: monospace;" onclick="location.href='your-link-here'"><small>Post</small></button>
            <button style = "margin-right: 5px; border-radius: 5px; background-color: lightcyan; font-family: monospace;" onclick="location.href='your-link-here'"><small>Modify</small></button>
            <button style = "margin-right: 5px; border-radius: 5px; background-color: lightcyan; font-family: monospace;" onclick="location.href='your-link-here'"><small>Delete</small></button>
            <button style = "margin-right: 5px; border-radius: 5px; background-color: lightcyan; font-family: monospace;" onclick="location.href='your-link-here'"><small>Reset</small></button><br>
            </div>
        </div>
    </div>
</div>
</body>