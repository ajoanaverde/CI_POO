

<?php foreach ($books as $book) : ?>
    
    <?php echo 'Title: ' . $book->title . '<br>'; ?>
    <?php echo 'Author: ' . $book->author . '<br>'; ?>
    <?php echo 'Description: ' . $book->description . '<br>'; ?>
    <?php echo 'Price: ' . $book->price . '<br>'; ?>
            
<?php endforeach  ?>