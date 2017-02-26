To get all nid of node
  $result = \Drupal::entityQuery('node')->execute();
To create node of article type
	$node = \Drupal::entityTypeManager()->getStorage('node')->create(array('type' => 'article', 'title' => 'Another node'));
	$node->save();
