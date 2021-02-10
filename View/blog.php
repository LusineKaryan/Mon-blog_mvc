<?php require 'inc/header.php' ?>
<?php require 'inc/topbar.php' ?>

<main>
  <div class="container">
  	<h2 class="page-title">A propos de l'artiste</h2>

	
    
	<div class="row">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!<br/><br/>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque repudiandae aut deserunt ea, quas eos pariatur quasi modi earum repellat, numquam laudantium autem sunt cum at, omnis eum odit quibusdam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quia eligendi rem sit autem porro corporis quos ducimus, omnis, maxime illum incidunt voluptatum amet facilis soluta. Placeat illum deleniti mollitia!<br/><br/>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Atque repudiandae aut deserunt ea, quas eos pariatur quasi modi earum repellat, numquam laudantium autem sunt cum at, omnis eum odit quibusdam.</p>
	<hr>
	<br/><br/>
    
      <?php foreach ($this->oPosts as $oPost): ?>
    
			<div class="col s6 m3 l3" style="margin-top: 20px;">
				<img src="<?=ROOT_URL?>static/img/posts/<?= $oPost->image ?>" class="materialboxed responsive-img" alt="<?= $oPost->title ?>"/>
				<br/>
				<a class="btn blue waves-effect waves-light" href="<?=ROOT_URL?>blog_post_<?=$oPost->id?>.html">Voir plus</a>
			
			</div>
			
      <?php endforeach ?>
    </div>
  </div>
</main>

<?php require 'inc/footer.php' ?>
