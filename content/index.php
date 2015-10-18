<p>
    Welcome to my humble lair! 
    This website is powered by the most lightweight, simple and
    fast CMS in the world that written in 8 lines of PHP code.
</p>

<!-- List all blog posts -->
<?php foreach (blog_posts() as $post): ?> 
<section class="post">
    <h1>
        <a href="blog/<?php echo $post['slug'] ?>">
            <?php echo $post['title'] ?> 
        </a>
    </h1>
    
    <?php echo $post['content'] ?> 
    
    <footer>
        Publication date: <?php echo $post['date'] ?> 
    </footer>
</section>
<?php endforeach ?> 

<?php 

return [
    'title' => 'Welcome!'
];