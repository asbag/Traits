<?php
/**
 * @author David Mezquíriz Osés
 * 
 * Kind of inheritance from a trait
 */

require('Sharable.php');

class Post {

	use Sharable;

}


$post = new Post();
$post->share("hello this is a code from a trait");

