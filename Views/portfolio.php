<div class="home-about">
    <img class="home-about" src="" alt="">
<h4 class="home-about">Title</h4>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Distinctio explicabo saepe mollitia doloremque, blanditiis alias obcaecati corporis cupiditate amet reprehenderit repellat consectetur cum ratione unde, in temporibus omnis quasi id?
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Natus possimus eligendi eveniet corrupti, alias est neque obcaecati eaque! Dolor fugit veritatis voluptate, assumenda repudiandae aspernatur laboriosam! Totam animi voluptates aliquam.
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio atque quaerat quam corrupti ea suscipit numquam obcaecati ipsum repudiandae commodi? Consectetur quibusdam temporibus quaerat asperiores voluptatum deleniti, incidunt repellat eius.
    </p>
</div>

<div class="home-portfolio">
    <h1>PORTFOLIO</h1>
    <?php foreach($viewData['portfolio'] as $item): ?>
        <div>
            <img  class="portfolio-item" src=<?php echo "./assets/images/".$item['image']?> alt="">
        </div>
    <?php endforeach; ?>
    <div class="clear"></div>
</div>