<div class="content-area ">
    <div class="animated-sections">        
        <?php
        echo HomeController::getInstance()->get(array());
        ?>
        <!-- About Me Subpage -->
        <?php
        echo AboutUsController::getInstance()->get(array());
        ?>
        <!-- Resume Subpage -->
        <?php
        $certificates = WPPostController::getInstance()->get("certificates");
        echo ResumeController::getInstance()->get($certificates);
        ?>

        <!-- Travel Diary Subpage -->
        <?php
        echo TravelDiaryController::getInstance()->get(array());
        ?>
        <!-- Blog Subpage -->
        <?php
        $blogs = WPPostController::getInstance()->get("post");
        echo BlogController::getInstance()->get($blogs);
        ?>
        <!-- Contact Subpage -->
        <?php
        echo ContactController::getInstance()->get(array());
        ?>
    </div>
</div>