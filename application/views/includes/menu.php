<nav class="main-nav">
    <div class="menu-top-menu-container">
        <ul id="menu-top-menu" class="clearfix">
            <?php
            $key = 'home';
            if (strpos($this->uri->uri_string(), $key) !== false || $this->uri->uri_string() === '') {
                $active = 'current-menu-item';
            } else {
                $active = '';
            }
            ?>
            <li class="<?= $active ?>"><a href="<?= base_url(); ?>">Home</a></li>
            
            <?php
            $key = 'questions/listing/all';
            if (strpos($this->uri->uri_string(), $key) !== false) {
                $active = 'current-menu-item';
            } else {
                $active = '';
            }
            ?>
            <li class="<?= $active ?>"><a href="<?= site_url('questions/listing/all'); ?>">Questions list</a></li>
            <li><a href="#">Categories</a>
                <ul class="sub-menu">
                    <?php
                    $categories = $this->global_model->getAllCategories();
                    if($categories != false)
                    foreach($categories as $category){
                    ?>
                    
                        <?php
                        $key = 'questions/listing/'.$category->cat_link;
                        if (strpos($this->uri->uri_string(), $key) !== false) {
                            $active = 'current-menu-item';
                        } else {
                            $active = '';
                        }
                        ?>
                        <li class="<?= $active ?>"><a href="<?= site_url('questions/listing/'.$category->cat_link); ?>"><?= $category->cat_name ?></a></li>

                    <?php } ?>
                </ul>
            </li>
            
                                    
            <li><a href="">FAQs</a></li>
            <li><a href="">Contact</a></li>
        </ul>
    </div>
</nav>
