#To create node
use Drupal\node\Entity\Node;

	$node = Node::create([
		'type' => 'article',
		'title' => 'My test!',
		'body' => [
			'summary' => '',
			'value' => '<p>The body of my node.</p>',
			'format' => 'full_html',
		],
	]);

	$node->save();
  
#To get one node
  $node = Node::load(1);
  
#To Delete one node 
  $node = Node::load(13);
	$node->delete();
