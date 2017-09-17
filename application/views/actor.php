<div class="row">
    <div class="span4">
        <a href="/welcome/show/{key}">
            <img src="/pix/{who}.jpg" title="{who} plays {role}"/>
        </a>
    </div>
</div>
<h2>Who am I?</h2>
<form action="" method="post">
    <button name="click" class="click">Click me to find out!</button>
</form>

    <?php
    if(isset($_POST['click'])) {
    
    ?>
<!--this is for display in table-->
<table><tr><td><?php echo "I am: " . "{who}" . "<br>"; ?></td></tr></table>
    <?php
        echo "I played: " . "{role}" . "<br>";
        echo "I said: " . "{what}" . "<br>";
    }