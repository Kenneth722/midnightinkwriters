<div id="site-content">
    
    
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <h1><?php echo $title ?><h1>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-12 col-sm-12">
                <?php foreach($books as $book) { ?>
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">
                                <?php echo $book['title']; ?>
                            </div>
                        </div>
                        <div class="card-body">
                            <strong><label class="text-mute"><?php echo $book['author']; ?></label></strong>
                            <p><?php echo $book['description']; ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>