<?php
/**
 * @author David Mezquíriz Osés
 * Traits kind of look a lot like Interfaces. Both Traits and interfaces are usually 
 * simple, concise and not much use without an actual implemented class. However the 
 * difference between the two is important. An interface is a contract that says 
 * “this object is able to do this thing”, whereas a Trait is giving the object the 
 * ability to do the thing.
 */


// Interface
interface Sociable {

	public function like();
	public function share($v);

}

// Trait
trait Sharable {

	public function share($item)
	{
		echo "Share this item" . $item;
	}

}

// Class
class Post implements Sociable {

	use Sharable;

	public function like()
	{
		//
	}

}


$post = new Post;

if($post instanceOf Sociable)
{
	$post->share('hello world');
}