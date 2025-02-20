<!DOCTYPE html>
<html lang="en">
<body>
    <div class="title-wrapper">
        <div class="line" style="background-color: <?php echo $bgColor; ?>"></div>
            
        <div>
                <div class="title-text" style="color: <?php echo $bgColor; ?>">
                <?php
                    global $title;
                    echo $title;
                    ?>
                </div>
                <span  style="color: <?php echo $bgColor; ?>">
                <?php
                    global $caption;
                    echo $caption;
                    ?>
                    </span>
            </div>
            <div class="line" style="background-color: <?php echo $bgColor; ?>"></div>
    </div>
</body>
</html>
